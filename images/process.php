<?php
$db = mysql_connect ("solomonmaxngcom.globatmysql.com", "solomonmaxng", "Solomon815&") or die ("Database connection failed");
mysql_select_db("solomon_max", $db) or die ("Database Selection Failed");

if(isset($_POST['submit']) && $_REQUEST['page']=='register'){
	
	
	$type = $_POST['type'];
	$email = @mysql_real_escape_string($_POST['email']);
	$password1 = md5($_POST['password1']);
	$fname = @mysql_real_escape_string($_POST['fname']);
	$dob = @mysql_real_escape_string($_POST['dob']);
	$sex = @mysql_real_escape_string($_POST['sex']);
    $mobile = @mysql_real_escape_string($_POST['mobile']);
    $address = @mysql_real_escape_string($_POST['address']);
	$town = @mysql_real_escape_string($_POST['town']);
	$lga = @mysql_real_escape_string($_POST['lga']);
	$state = @mysql_real_escape_string($_POST['state']);
	$country = @mysql_real_escape_string($_POST['country']);
	

	if($type=='skilled'){
		$exp_year = $_POST['exp_year'];
		$func_area = $_POST['func_area'];
		
		$pri_name = $_POST['pri_name'];
		$pri_grad = $_POST['p_grad'];
		$pri_qual = $_POST['p_qual'];
		$sec_name = $_POST['sec_name'];
		$sec_grad = $_POST['sec_grad'];
		$sec_qual = $_POST['sec'];
		$uni_name = $_POST['uni_name'];
		$uni_grad = $_POST['uni_grad'];
		$uni_qual = $_POST['uni_qual'];
		
		$ms_univ = $_POST['ms_univ'];
		$ms_degree = $_POST['ms_degree'];
		$ms_completion = $_POST['ms_completion'];
		$pg_univ = $_POST['pg_univ'];
		$pg_degree = $_POST['pg_degree'];
		$pg_completion = $_POST['pg_completion'];
	}
	$key_skills = @mysql_real_escape_string($_POST['key_skills']);
	$filename = '';
	
	if($_FILES['uploadedfile']['name']!=''){
		$filename = time().strtolower(str_replace(" ", "", $_FILES['uploadedfile']['name']));
		$add = "uploaded_files/$filename";
		copy($_FILES['uploadedfile']['tmp_name'], $add);
		
	} else {
		$filename = '';
	}
	
	if(isset($_POST['basic_user'])){
		$user_type = 'basic_user';	
	} else if(isset($_POST['premium_user'])){
		$user_type = 'premium_user';
	}
	
	if($type=='skilled'){
		$sql = "insert into worker_details (email, password, fname, address,mobile, dob,sex,town,lga,state,country, key_skills,uploadedfile,exp_year, func_area, pri_name, pri_grad, pri_qual, sec_name, sec_grad, sec_qual, uni_name, uni_grad, uni_qual, ms_univ, ms_degree, ms_completion, pg_univ, pg_degree, pg_completion, type) values ('$email', '$password', '$fname', '$address','$mobile','$dob','$sex','$town','$lga','$state','$country','$key_skills','$filename','$exp_year', '$func_area', '$pri_name', '$pri_grad', '$pri_qual', '$sec_name', '$sec_grad', '$sec_qual', '$uni_name', '$uni_grad', '$uni_qual', '$ms_univ', '$ms_degree', '$ms_completion', '$pg_univ', '$pg_degree', '$pg_completion', '$type')";
	} else if($type=='unskilled'){
		$sql = "insert into worker_details (email, password, fname,address,mobile,dob,sex,town,lga,state,country,key_skills, uploadedfile, type) values ('$email', '$password1', '$fname', '$address','$mobile','$sex','$town','$dob','$lga','$state','$country', '$key_skills','$filename', '$type')";
	}
	
	if(mysql_query($sql)){
		//send email
		$headers = "From: $fname <$email>\r\n";
		$subject = "A ".strtoupper($type)." User Just Registered";
		
		$originalmessage = "Fullname: $fname\r\n";
		$originalmessage .= "Mobile: $mobile\r\n";
		$originalmessage .= "Email: $email\r\n";
		//$originalmessage .= "Subject: ".$_POST['subject']."\r\n";
		//$originalmessage .= "Original Message: $message\r\n";
		$to = "info@solomonmaxng.com";
		@mail($to, $subject, $originalmessage, $headers);

		@header("Location: success.php?type=".$user_type);
	}
		
} 
else if(isset($_POST['submit']) && $_REQUEST['page']=='employers'){
	

	$specialization = @mysql_real_escape_string($_POST['specialization']);
	$position = @mysql_real_escape_string($_POST['position']);
	$fname = @mysql_real_escape_string($_POST['fname']);
	$email = @mysql_real_escape_string($_POST['email']);
	$url = @mysql_real_escape_string($_POST['url']);
	$mobile = @mysql_real_escape_string($_POST['mobile']);
	$vacancies = @mysql_real_escape_string($_POST['vacancies']);
	
	$headers = "From: $fname <$email>\r\n";
	$subject = "Job Vancancies";
	
	$originalmessage .= "Specialization: $specialization\r\n";
	$originalmessage .= "Position: $position\r\n";
	$originalmessage .= "Company Name: $fname\r\n";
	$originalmessage .= "Email: $email\r\n";
	$originalmessage .= "Website: $url\r\n";
	$originalmessage .= "Mobile: $mobile\r\n";
	$originalmessage .= "Job Vancancies: $vacancies\r\n";
	$to = "info@solomonmaxng.com";
	$bcc = "nite@solomonmaxng.com";
	
	@mail($to, $subject, $originalmessage, $headers);
	
}
else if(isset($_POST['submit']) && $_REQUEST['page']=='contact'){
	

	$inquiry_Type = @mysql_real_escape_string($_POST['inquiry_Type']);
	$specialization = @mysql_real_escape_string($_POST['specialization']);
	$title = @mysql_real_escape_string($_POST['title']);
	$email = @mysql_real_escape_string($_POST['email']);
	$fname = @mysql_real_escape_string($_POST['name']);
	$email = @mysql_real_escape_string($_POST['email']);
	$mobile = @mysql_real_escape_string($_POST['mobile']);
	$message = @mysql_real_escape_string($_POST['message']);
	
	$headers = "From: $fname <$email>\r\n";
	$subject = "Someone Made An Inquiry";
	
	$originalmessage .= "Mobile: $inquiry_Type\r\n";
	$originalmessage .= "Specialization: $specialization\r\n";
	$originalmessage .= "Title: $title\r\n";
	$originalmessage .= "Fullname: $fname\r\n";
	$originalmessage .= "Email: $email\r\n";
	$originalmessage .= "Mobile: $mobile\r\n";
	$originalmessage .= "Original Message: $message\r\n";
	$to = "info@solomonmaxng.com";

	
	@mail($to, $subject, $originalmessage, $headers);
	
}

echo date('THANKS, YOUR REGISTRATION WENT SUCCESSFUL');

?>