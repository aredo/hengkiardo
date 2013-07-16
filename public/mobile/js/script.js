/* Author: 

*/
Cufon.replace('#intro h2,header h1, nav li, section#about h2, .circle a, footer', {fontFamily:'Ayita Pro SemiBold', hover:true});

$(function () {
	$(window).resize(function () {
		Cufon.refresh();
	});
	
	$("header h1 a").anchorAnimate({speed:800});
	$("nav li a").anchorAnimate({speed:800});
	$("#navigation li a").anchorAnimate({speed:800});			
	
		$(window).scroll(function () {	
			if ($(window).scrollTop() > 80) {
				$("#left-menu").show('slow');			
			}else if($(window).scrollTop() < 80){
				$("#left-menu").hide('slow');
			}
		});		
		
	 if ($("body").length != 0) {
	 	$("#left-menu").show('slow');	
		$(window).scroll(function () {	
			if ($(window).scrollTop() > 690) {		
			   _gaq.push(['_trackPageview', window.location + '/about']);	   
			}
		});
		
		$("nav li a").click(function(){		
			$('nav li').find('a.clicked').removeClass('clicked');
			$(this).addClass('clicked');
			Cufon.refresh();
		})
	 }
	 
	jQuery.validator.messages.required = "This field is required&nbsp;";
    jQuery.validator.messages.email = "Please enter a valid email address";
    $("#form-contact").validate();
})

jQuery.fn.anchorAnimate = function(settings) {
 	settings = jQuery.extend({
		speed : 700
	}, settings);	
	return this.each(function(){
		var caller = this;
		$(caller).click(function (event) {	
			event.preventDefault();
			var locationHref = window.location.href;
			var elementClick = '#'+$(caller).attr("href");
			var destination = $(elementClick).offset().top;
			$("html:not(:animated),body:not(:animated)").animate({ scrollTop: destination}, settings.speed, function() {
				window.location.hash = '!/'+$(caller).attr("href");
			});
			_gaq.push(['_trackPageview', window.location + '/'+$(caller).attr("href")]);
		  	return false;
		});
	});
};