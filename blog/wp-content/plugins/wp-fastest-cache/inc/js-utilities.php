<?php
	class JsUtilities{
		private $wpfc;
		private $html = "";
		private $jsLinks = array();
		private $jsLinksExcept = "";
		private $url = "";
		private $minify;

		public function __construct($wpfc, $html, $minify = false){
			//$this->html = preg_replace("/\s+/", " ", ((string) $html));
			$this->minify = $minify;
			$this->wpfc = $wpfc;
			$this->html = $html;

			$this->setJsLinksExcept();
			$this->setJsLinks();
		}

		public function combine_js(){
			if(count($this->jsLinks) > 0){
				$prev_content = "";
				foreach($this->jsLinks as $key => $value){
					$script_tag = substr($this->html, $value["start"], ($value["end"] - $value["start"] + 1));

					if(!preg_match("/<script[^>]+json[^>]+>.+/", $script_tag) && !preg_match("/<script[^>]+text\/template[^>]+>.+/", $script_tag)){
						if($href = $this->checkInternal($script_tag)){
							if(strpos($this->jsLinksExcept, $href) === false){
								$minifiedJs = $this->minify($href);

								if($minifiedJs){
									if(!is_dir($minifiedJs["cachFilePath"])){
										$prefix = time();
										$this->wpfc->createFolder($minifiedJs["cachFilePath"], $minifiedJs["jsContent"], "js", $prefix);
									}

									if($jsFiles = @scandir($minifiedJs["cachFilePath"], 1)){
										if($jsContent = $this->file_get_contents_curl($minifiedJs["url"]."/".$jsFiles[0]."?v=".time())){

											if(!preg_match("/use strict/i", $jsContent)){
												$prev_content = $jsContent."\n".$prev_content;

												$script_tag = "<!-- ".$script_tag." -->";

												if(($key + 1) == count($this->jsLinks)){
													$this->mergeJs($prev_content, $value, true);
													$prev_content = "";
												}else{
													$this->html = substr_replace($this->html, $script_tag, $value["start"], ($value["end"] - $value["start"] + 1));
												}

											}else{
												$this->mergeJs($prev_content, $this->jsLinks[$key - 1]);
												$prev_content = "";
											}
										}
									}
								}else{
									$this->mergeJs($prev_content, $this->jsLinks[$key - 1]);
									$prev_content = "";
								}
							}else{
								$this->mergeJs($prev_content, $this->jsLinks[$key - 1]);
								$prev_content = "";
							}
						}else{
							$this->mergeJs($prev_content, $this->jsLinks[$key - 1]);
							$prev_content = "";
						}
					}else{
						$this->mergeJs($prev_content, $this->jsLinks[$key - 1]);
						$prev_content = "";
					}
				}
			}

			return $this->html;
		}


		public function setJsLinks(){
			$data = $this->html;
			$script_list = array();
			$script_start_index = false;

			for($i = 0; $i < strlen( $data ); $i++) {
				if(isset($data[$i-6])){
				    if(substr($data, $i-6, 7) == "<script"){
				    	$script_start_index = $i-6;
					}
				}

				if(isset($data[$i-8])){
					if($script_start_index){
						if(substr($data, $i-8, 9) == "</script>"){
							array_push($script_list, array("start" => $script_start_index, "end" => $i));
							$script_start_index = false;
						}
					}
				}
			}
			if(count($script_list) > 0){
				$this->jsLinks = array_reverse($script_list);
			}
		}

		public function setJsLinksExcept(){
			$data = $this->html;
			$comment_list = array();
			$comment_start_index = false;

			for($i = 0; $i < strlen( $data ); $i++) {
				if(isset($data[$i-3])){
				    if($data[$i-3].$data[$i-2].$data[$i-1].$data[$i] == "<!--"){
				    	$comment_start_index = $i-3;
					}
				}

				if(isset($data[$i-2])){
					if($comment_start_index){
						if($data[$i-2].$data[$i-1].$data[$i] == "-->"){
							array_push($comment_list, array("start" => $comment_start_index, "end" => $i));
							$comment_start_index = false;
						}
					}
				}
			}

			if(!empty($comment_list)){
				foreach (array_reverse($comment_list) as $key => $value) {
					if(($value["end"] - $value["start"]) > 4){
						$this->jsLinksExcept = $this->jsLinksExcept.substr($data, $value["start"], ($value["end"] - $value["start"] + 1));
					}
				}
			}
		}

		public function minify($url){
			$this->url = $url;

			$cachFilePath = WPFC_WP_CONTENT_DIR."/cache/wpfc-minified/".md5($url);
			$jsLink = content_url()."/cache/wpfc-minified/".md5($url);

			if(is_dir($cachFilePath)){
				return array("cachFilePath" => $cachFilePath, "jsContent" => "", "url" => $jsLink);
			}else{
				if($js = $this->file_get_contents_curl($url)){

					if($this->minify){
						if(class_exists("WpFastestCachePowerfulHtml")){
							$powerful_html = new WpFastestCachePowerfulHtml();
							$js = $powerful_html->minify_js($js);
						}else{
							$js = "\n// source --> ".$url." \n".$js;
						}
					}else{
						$js = "\n// source --> ".$url." \n".$js;
					}

					return array("cachFilePath" => $cachFilePath, "jsContent" => $js, "url" => $jsLink);
				}
			}
			return false;
		}

		public function checkInternal($link){
			$httpHost = str_replace("www.", "", $_SERVER["HTTP_HOST"]);

			if(preg_match("/src=[\"\'](.*?)[\"\']/", $link, $src)){
				if(preg_match("/alexa\.com\/site\_stats/i", $src[1])){
					return false;
				}

				if(preg_match("/^\/[^\/]/", $src[1])){
					return $src[1];
				}

				if(@strpos($src[1], $httpHost)){
					return $src[1];
				}
			}
			
			return false;
		}


		public function mergeJs($js_content, $value, $last = false){
			$name = md5($js_content);
			$cachFilePath = WPFC_WP_CONTENT_DIR."/cache/wpfc-minified/".$name;

			if(!is_dir($cachFilePath)){
				$this->wpfc->createFolder($cachFilePath, $js_content, "js", time());
			}

			if($jsFiles = @scandir($cachFilePath, 1)){
				$prefixLink = str_replace(array("http:", "https:"), "", content_url());
				$newLink = "<script src='".$prefixLink."/cache/wpfc-minified/".$name."/".$jsFiles[0]."' type=\"text/javascript\"></script>";

				$script_tag = substr($this->html, $value["start"], ($value["end"] - $value["start"] + 1));
				
				if($last){
					$script_tag = $newLink."\n<!-- ".$script_tag." -->\n";
				}else{
					$script_tag = $newLink."\n".$script_tag;
				}

				$this->html = substr_replace($this->html, $script_tag, $value["start"], ($value["end"] - $value["start"] + 1));
			}
		}

		public function file_get_contents_curl($url) {

			if(!preg_match("/\.php$/", $url)){
				$url = $url."?v=".time();
			}

			if(preg_match("/^\/[^\/]/", $url)){
				$url = home_url().$url;
			}

			$url = preg_replace("/^\/\//", "http://", $url);

			$response = wp_remote_get($url, array('timeout' => 10 ) );

			if ( !$response || is_wp_error( $response ) ) {
				return false;
			}else{
				if(wp_remote_retrieve_response_code($response) == 200){
					$data = wp_remote_retrieve_body( $response );

					if(preg_match("/<\/\s*html\s*>\s*$/i", $data)){
						return false;
					}else{
						return $data;	
					}
				}
			}
		}
	}
?>