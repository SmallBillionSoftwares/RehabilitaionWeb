$(document).ready(function(){
	$('.nav-item').click(function(){
		$('nav-link').removeClass("active");
		$(this).addClass("active");
	})
})