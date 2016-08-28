jQuery.noConflict()(function($){
$(document).ready(function($) {

 $('form.reg-form .requiredField').attr('disabled', 'disabled');
 $('form.reg-form .requiredField:first').removeAttr("disabled").focus();
 
 $('form.reg-form .requiredField').each(function(intindex){
	$(this).attr('rfield', intindex);
 });

/*----------------------------------------------------------*/
 /*CONTACT FORM JS */
 /*----------------------------------------------------------*/
$('#contact-form #expyear').change(function(){ 
	val = $(this).val();
	if(val=='99'){
		$('#yr').text('');
	} else if(val=='1'){
		$('#yr').text('Year');	
	} else {
		$('#yr').text('Years');
	}		 
});


$('form.reg-form .requiredField').on('keyup change', function(){
	rf_no = parseInt($(this).attr('rfield'));
	nxt_rf_no = rf_no+1;
    if($(this).val().length != 0){
		//window.alert(nxt_rf_no);
		$('form.reg-form .requiredField[rfield='+nxt_rf_no+']').removeAttr("disabled");
		if($('#skill_div').is(':hidden')){
			$('#expyear').attr('disabled', 'disabled');
		}
	} else {
		$('form.reg-form .requiredField[rfield='+nxt_rf_no+']').attr('disabled', 'disabled');
	}
});



$('#contact-form .skill_toggle').change(function(){ 
	if($(this).val()=='skilled'){
		$('#skill_div').slideDown(800);
		$('#skill_div .requiredField').each(function(){
			$(this).removeAttr("disabled")
		});
	} else if($(this).val()=='unskilled'){
		$('#skill_div').slideUp(800);
		$('#skill_div .requiredField').each(function(){
			if(!$(this).is(':disabled')){
				$(this).attr('disabled', 'disabled');
			}
		});
	}
});
 
 
 if ( $( 'form#contact-form' ).length && jQuery() ) { 
		
	$('form#contact-form').submit(function() {
		function resetForm($form) {
			$form.find('input:text, input:password, input:file, select, textarea').val('');
			$form.find('input:radio, input:checkbox')
			.removeAttr('checked').removeAttr('selected');
		}
		$('form#contact-form .error').remove();
		var hasError = false;
		$('.requiredField').each(function() {
			if(jQuery.trim($(this).val()) == '' && !$(this).is(':disabled')) {
				 var labelText = $(this).prev('label');
				 $(this).parent().append('<div class="notification error" style="float:left; width:100%; padding:0px; padding-top:5px; padding-bottom:5px; text-align:center;"><p>Please enter '+labelText.attr('data-title')+'</p></div>');
				 $(this).addClass('inputError');
				 hasError = true;
			 } else if($(this).hasClass('email')) {
				 var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
				 if(!emailReg.test(jQuery.trim($(this).val()))) {
					 var labelText = $(this).prev('label');
					 $(this).parent().append('<div class="notification error" style="float:left; width:100%; padding:0px; padding-top:5px; padding-bottom:5px; text-align:center;"><p>You entered an invalid '+labelText.attr('data-title')+'</p></div>');
					 $(this).addClass('inputError');
					 hasError = true;
				 }
			 }
		});
		
		if($('#password1').val()!='' && $('#password2').val()!=''){
			 if($('#password1').val() != $('#password2').val()){
				$('#password1').parent().append('<div class="notification error" style="float:left; width:100%; padding:0px; padding-top:5px; padding-bottom:5px; text-align:center;"><p>Password Fields Must Match</p></div>');
				$('#password2').parent().append('<div class="notification error" style="float:left; width:100%; padding:0px; padding-top:5px; padding-bottom:5px; text-align:center;"><p>Password Fields Must Match</p></div>');
				$('#password1').addClass('inputError');
				$('#password2').addClass('inputError');
				hasError = true;
			 }
		 }
		 
		 if(hasError){
			$('body').scrollTop(0);
		 }
 
		if(!hasError) {
			$('form#contact-form input.submit').fadeOut('normal', function() {
			$(this).parent().append('');
			});
			
			if($(this).hasClass('reg-form')){
				$(this).submit();
			} else {
				var formInput = $(this).serialize();
				console.log(formInput);
				$.post($(this).attr('action'),formInput, function(data){
				$('body').scrollTop(0);
				$('#contact-form').prepend('<div class="notification success" style="float:left; width:100%; text-align:center;"><p>Your information was successfully sent. We will contact you as soon as possible.</p></div>');
				resetForm($('#contact-form'));
				//$('.success').fadeOut(10000);
				 
				});
			}
		}
		return false;
});
		
}



      $('.portfolio-item-link').hover(function() {
            $(this).find('span.portfolio-item-hover').animate({opacity:1}, 200);
        }, function() {
            $(this).find('span.portfolio-item-hover').stop(0,0).animate({opacity: 0}, 200);
     
  });
      initAccordion();
function initAccordion() {
    jQuery('.accordion-item').each(function(i) {
        var item=jQuery(this);
        item.find('.accordion-content').slideUp(0);
        item.find('.accordion-switch').click(function() {
         var displ = item.find('.accordion-content').css('display');
         item.closest('ul').find('.accordion-switch').each(function() {
          var li = jQuery(this).closest('li');
          li.find('.accordion-content').slideUp(300);
          jQuery(this).parent().removeClass("selected");
         });
         if (displ=="block") {
          item.find('.accordion-content').slideUp(300) 
          item.removeClass("selected");
         } else {
          item.find('.accordion-content').slideDown(300) 
          item.addClass("selected");
         }
        });
    });
}
/*----------------------------------------------------------*/
 /*ISOTOPE JS */
 /*----------------------------------------------------------*/
 if ( $( '#portfolio-container' ).length && jQuery() ) { 
        
       

        (function() {
        var $container = $('#portfolio-container');
        if( $container.length ) {
            var $itemsFilter = $('#filterable');    
            $('.isotope-item', $container).each(function(i) {
                var $this = $(this);
                $this.addClass( $this.attr('data-categories') );
            });
            $(window).on('load', function() {
                $container.isotope({
                    itemSelector : '.isotope-item',
                    layoutMode   : 'fitRows'
                });
            });
            $itemsFilter.on('click', 'a', function(e) {
                var $this = $(this),
                currentOption = $this.attr('data-categories');
                $itemsFilter.find('a').removeClass('active');
                $this.addClass('active');
                if( currentOption ) {
                    if( currentOption !== '*' ) currentOption = currentOption.replace(currentOption, '.' + currentOption)
                    $container.isotope({ filter : currentOption });
                }
                e.preventDefault();
            });
            $itemsFilter.find('a').first().addClass('active');
        }
    })();


}
/*RESPONSIVE MAIN NAVIGATION STARTS*/                          
    var $menu_select = $("<select />"); 
    $("<option />", {"selected": "selected", "value": "", "text": "Main Navigation"}).appendTo($menu_select);
    $menu_select.appendTo("#main-navigation");
    $("#main-navigation ul li a").each(function(){
        var menu_url = $(this).attr("href");
        var menu_text = $(this).text();
        if ($(this).parents("li").length == 2) { menu_text = '- ' + menu_text; }
        if ($(this).parents("li").length == 3) { menu_text = "-- " + menu_text; }
        if ($(this).parents("li").length > 3) { menu_text = "--- " + menu_text; }
        $("<option />", {"value": menu_url, "text": menu_text}).appendTo($menu_select)
    })
    field_id = "#main-navigation select";
    $(field_id).change(function()
    {
       value = $(this).attr('value');
       window.location = value; 
    });
/*RESPONSIVE MAIN NAVIGATION ENDS*/

        (function() {
        var $tabsNav    = $('.tabs-nav'),
        $tabsNavLis = $tabsNav.children('li'),
        $tabContent = $('.tab-content');
        $tabContent.hide();
        $tabsNavLis.first().addClass('active').show();
        $tabContent.first().show();
        $tabsNavLis.on('click', function(e) {
        var $this = $(this);
        $tabsNavLis.removeClass('active');
        $this.addClass('active');
        $tabContent.hide();     
        $( $this.find('a').attr('href') ).fadeIn(700);
        e.preventDefault();
        });
    })();

$('ul.main-menu').superfish({ 
            delay:       100,                            // one second delay on mouseout 
            animation:   {opacity:'show',height:'show'},  // fade-in and slide-down animation 
            speed:       'fast',                          // faster animation speed 
            autoArrows:  false                           // disable generation of arrow mark-up 
        });

if ( $( '#layerslider' ).length && jQuery() ) {
 $('#layerslider').layerSlider({
                  width : '100%',
                  height : '450px',
                   responsive : true,
                   responsiveUnder : 940,
                   sublayerContainer : 1020,
                    autoStart : true,
                     pauseOnHover : true,
                     firstLayer : 1,
                    animateFirstLayer : true,
                    randomSlideshow : false,
                     twoWaySlideshow : true,
                     loops : 0,
                     forceLoopNum : true,
                     autoPlayVideos : false,
                    autoPauseSlideshow : 'auto',
                    keybNav : true,
                    touchNav : true,
                    navButtons: false,
                    navStartStop: false,
                    skin : 'fullwidth',
                     skinsPath : 'images/layer-slider/skins/',

        });
}
   (function() {

        var $carousel = $('#projects-carousel');

        if( $carousel.length ) {

            var scrollCount;

            if( $(window).width() < 480 ) {
                scrollCount = 1;
            } else if( $(window).width() < 768 ) {
                scrollCount = 1;
            } else if( $(window).width() < 960 ) {
                scrollCount = 3;
            } else {
                scrollCount = 4;
            }

            $carousel.jcarousel({
                animation : 600,
                easing    : 'easeOutCirc',
                scroll    : scrollCount
            });

        }

    })();


/*----------------------------------------------------------*/
 /*SKILLS BAR JS */
 /*----------------------------------------------------------*/
 if ( $( '.bar_graph' ).length && jQuery()) { 
    function animateBar(){
        $('.bar_graph li').each(function(i){
            var percent = $(this).find('span').attr('data-width');
            
                $(this).find('span').animate({
                    'width' : percent + '%'
                },1700, 'easeOutCirc');
        });
    }
    if( $('.bar_graph').length > 0 ){
        animateBar();
        $(window).scroll(animateBar);   
    } 
}
 

 /*----------------------------------------------------------*/
 /*FLEX SLIDER*/
 /*----------------------------------------------------------*/
 if ( $( '.flexslider' ).length && jQuery() ) { 

       

        var target_flexslider = $('.flexslider');
        target_flexslider.flexslider({
        animation: "fade",
    
           
    });

        $(".flexslider").hover( function() {    
        $('.flex-direction-nav').fadeIn(200); },
        function () {$('.flex-direction-nav').fadeOut(200);}); 
    
}



  
    $("a[data-rel^='prettyPhoto']").prettyPhoto({overlay_gallery: false});

 
/*----------------------------------------------------------*/
 /*GOOGLE MAPS */
 /*----------------------------------------------------------*/
if ( $( '#google-map' ).length && jQuery() ) {

        
        
        var $map = $('#google-map');

            $map.gMap({
            markers: [
        {
           'address' : '2, Agudama Street D/Line Port Harcourt, Nigeria',
            
         icon: {image: 'images/marker-icon.png', iconsize: [25, 41], },}

       
    ],


   /* styles: [
    {
        stylers: [
            { hue: "#FFF" },
            { saturation: -100 }
        ]
    },{
        featureType: "road",
        elementType: "geometry",
        stylers: [
            { lightness: 100 },
            { visibility: "simplified" }
        ]
    },{
        featureType: "road",
        elementType: "labels",
        stylers: [
            { visibility: "off" }
        ]
    }],
*/
    zoom: 16,

            

            });
}


  $("body").fitVids();
 

   });

  });