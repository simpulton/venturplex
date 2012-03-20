Cufon.replace('h1, h2, h3, h4, h5, h6, .button small', { fontFamily: 'HelveticaNeue Regular', hover: true });
Cufon.replace('h1 strong, h2 strong, h3 strong, h4 strong, h5 strong, h6 strong, .btn', { fontFamily: 'HelveticaNeue Bold', hover: true });

/* function for site scrolling */
function goToByScroll(id){
	$('html,body').animate({scrollTop: $("#"+id).offset().top},1700, 'easeInOutExpo');
}

$(document).ready(function() {
						   
$(window).scrollTop(1); // fix for parallax init
window.sectionHeight = 860; //height of 1 slide, css: .section class height value

$(window).bind("scroll", function(){

	/*
	
	scrollPosition - is the current scroll position
	selector - this will gave us a numer of .section in which we will be after scroll and we'll be able to select proper menu element
	
	*/
	
	scrollPosition = $(window).scrollTop();
	selector = (scrollPosition/sectionHeight).toFixed(0);
	
	/* this is only for folio sections, the upper menu has no folio2, folio3, folio4 elements so we select the #folio1 in #menu */
	
	if (selector > 3 && selector < 7) {
		$("#menu ul li").parent().find("li").removeClass("current");
		$("#menu ul li:eq(3)").addClass("current");
		
		$("#nav ul li").parent().find("li").removeClass("current");
		$("#nav ul li:eq("+selector+")").addClass("current");
	}
	
	else {
		$("#menu ul li, #nav ul li").parent().find("li").removeClass("current");
		$("#menu ul li:eq("+selector+"), #nav ul li:eq("+selector+")").addClass("current");
	}


});


/* hire button animation */
$("#hire").mouseenter(function() {
		$(this).animate({ "margin-top": "-3px" }, 300)
	}).mouseleave(function() {
		$(this).animate({ "margin-top": "0px" }, 300);
});

/* gotop button animation and action */
$(".ribbon a").mouseenter(function() {
		$(this).animate({ "margin-top": "-3px" }, 300)
	}).mouseleave(function() {
		$(this).animate({ "margin-top": "0px" }, 300);
});
$(".ribbon a").click(function(){

	$("#menu").find("a").removeClass("current");
	$("#menu li:first-child a").addClass("current");

});

/* gallery fade effect */
$(".gallery li a").mouseenter(function(){

	$(this).find("span").fadeIn(200);
									   
}).mouseleave(function(){
	
	$(this).find("span").fadeOut(200);
	
});

$(".gallery li:nth-child(4n)").addClass("format");

});
