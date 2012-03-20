<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/jquery.fancybox-1.3.4.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.parallax-1.1.js"></script>
<script type="text/javascript" src="js/parallax-config.js"></script>
<script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("a.lightbox").fancybox({
	'overlayColor'		: '#000',
	'transitionIn'	: 'elastic',
	'transitionOut'	: 'elastic',
	'titlePosition' : 'outside'
	});
});
</script>
<!-- contact form scripts & configuration, please check js/sendmail.php to set e-mail address & more params -->
<script type="text/javascript" src="js/jquery.form.js"></script>
<script type="text/javascript">
$(document).ready(function() { 
var options = {target: "#alert"}; 
$("#contact-form").ajaxForm(options); 
}); 
</script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-fonts.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/pie.js"></script>
<script type="text/javascript" src="js/pie-config.js"></script>
<![endif]-->
</head>

<body>

    <!-- top -->
    <div id="top">
    <div class="set-size">
    	
        <h1 id="logo"><a onClick="goToByScroll('home');" >Scrollfolio</a></h1>
        
        <div id="menu">
        <ul>
        	<li class="current"><a onClick="goToByScroll('home');" class="rounded">Home</a></li>
            <li><a onClick="goToByScroll('about');" class="rounded">About</a></li>
            <li><a onClick="goToByScroll('services');" class="rounded">Services</a></li>
            <li><a onClick="goToByScroll('folio1');" class="rounded">Folio</a></li>
            <li class="disabled"><a onClick="goToByScroll('folio2');" class="rounded">Folio</a></li>
            <li class="disabled"><a onClick="goToByScroll('folio3');" class="rounded">Folio</a></li>
            <li class="disabled"><a onClick="goToByScroll('folio4');" class="rounded">Folio</a></li>
            <li><a onClick="goToByScroll('gallery');" class="rounded">Gallery</a></li>
            <li><a onClick="goToByScroll('addons');" class="rounded">Addons</a></li>
            <li><a onClick="goToByScroll('contact');" class="rounded">Contact</a></li>
        </ul>
        </div>
        
        <a onClick="goToByScroll('contact');" id="hire"></a>
    
    <div class="clear"></div>
    </div>
    </div>
    <!-- //top -->
    <div class="shadow"></div>
    
    <!-- navigation -->
    <div id="nav">
    	<ul>
        	<li class="current"><a onClick="goToByScroll('home');" class="rounded"></a></li>
            <li><a onClick="goToByScroll('about');" class="rounded"></a></li>
            <li><a onClick="goToByScroll('services');" class="rounded"></a></li>
            <li><a onClick="goToByScroll('folio1');" class="rounded"></a></li>
            <li><a onClick="goToByScroll('folio2');" class="rounded"></a></li>
            <li><a onClick="goToByScroll('folio3');" class="rounded"></a></li>
            <li><a onClick="goToByScroll('folio4');" class="rounded"></a></li>
            <li><a onClick="goToByScroll('gallery');" class="rounded"></a></li>
            <li><a onClick="goToByScroll('addons');" class="rounded"></a></li>
            <li><a onClick="goToByScroll('contact');" class="rounded"></a></li>
        </ul>
    </div>
    <!-- //navigation -->
    
    <div class="clear"></div>
    
    <!-- container -->
    <div id="container">
    
    <!-- home -->
    <div id="home" class="section">
    <div class="overflow">
    <div class="set-size">
    	
        <!-- welcome -->
        <div class="welcome">

            <h1><strong>Hello.</strong></h1>
            <h2><strong>I`m Scrollfolio. First Parallax powered, one page<br />
            portfolio template on Themeforest. Enjoy!</strong></h2>
            
        <div class="clear"></div>    
        </div>
        <!-- //welcome -->
        
        <!-- addon -->
        <div class="addon">
            <p>
            <a class="btn blue rounded float-right" onClick="goToByScroll('about');">Start here</a>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
            </p>
        </div>
        <!-- //addon -->
        
    </div>
    <!-- parallax elements -->
    <div class="px pximage1"></div>
    <div class="px pximage2"></div>
    <div class="px pximage3"></div>
    <div class="px pximage4"></div>
    <div class="px pximage5"></div>
     <!-- //parallax elements -->
    </div>
    </div>
    <!-- //home -->
    
    <!-- about -->
    <div id="about" class="section">
    <div class="overflow">
    <div class="set-size">
    	
        <!-- header -->
        <div class="header">
            
            <h2><strong>About Scrollfolio</strong></h2>
            <em>I`m so cool :) and I`m using parallax effect!</em>
        
        <div class="clear"></div>
        </div>
        <!-- //header -->
        
        <!-- column -->
        <div class="column-540 float-left">
        
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
            </p>
            
            <p>
                Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
            </p>
        
        </div>
        <!-- //column -->
        
        <div class="clear"></div>
        
        <br /><br /><br /><br />
        
        <h4><strong>How we work?</strong></h4>
        
    </div>    
    
    <!-- parallax elements -->
    <div class="px pximage"></div>
    <div class="px pxarrows"></div>
    <div class="px circle pxcircle1"></div>
    <div class="px circle pxcircle2"></div>
    <div class="px circle pxcircle3"></div>
    <div class="px circle pxcircle4"></div>
    <!-- //parallax elements -->
    
    <p >
        <a onClick="goToByScroll('services')" id="gonext"></a>
    </p>
    </div>
    </div>
    <!-- //about -->
    
    <!-- services -->
    <div id="services" class="section">
    <div class="overflow">
    <div class="set-size">
    	
        <!-- header -->
        <div class="header">
            
            <h2><strong>Services</strong></h2>
            <em>How can we help you?</em>
            
        </div>
        <!-- //header -->
        
        <!-- column -->
        <div class="column-540 float-right">
        	
            <h4><strong>Web &amp; UI design</strong></h4>
            <p>
Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
            </p>
            
            <h4><strong>Logo &amp; branding</strong></h4>
            <p>
Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
            </p>
            
            <h4><strong>Print &amp; Advertisement</strong></h4>
            <p>
Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
            </p>
            
        </div>
        <!-- //column -->
    </div>
    <!-- parallax elements -->
    <div class="px pxcircles"></div>
    <div class="px pxcircle1"></div>
    <div class="px pxcircle2"></div>
    <div class="px pxcircle3"></div>
    <div class="px pxbrush"></div>
    <div class="px px3d"></div>
    <div class="px pxidea"></div>
    <!-- //parallax elements -->
    <p >
         <a onClick="goToByScroll('folio1')" id="gonext"></a>
    </p> 
        
    </div>
    </div>
    <!-- //services -->
    
    <!-- folio1 -->
    <div id="folio1" class="section">
    <div class="overflow">
    <div class="set-size">
    	
        <!-- header -->
        <div class="header">
        
            <!-- column -->
            <div class="column-300 float-right">
                
                <h2><strong>Portfolio work 1 title</strong></h2>
                <em>branding, web design</em>
            
            </div>
            <!-- //column -->
        
        <div class="clear"></div>    
        </div>
        <!-- //header -->
        
        <!-- column -->
        <div class="column-540 float-left">
			
            <div class="media">
            	<img src="images/folio_img1.png" alt="" />
            </div>
            
        </div>
        <!-- //column -->
        
        <!-- column -->
        <div class="column-300 float-right">
        
        	<p>
Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. <br /><br />Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. <br /><br />Ut wisi enim ad minim veniam, quis nostrud exerci t diam nonummy nibh euismod tincidunt ut laoreet dollamcorper. 
            </p>
            
            
            <h4><strong>What I've done:</strong></h4>
            
            <ul class="list blue">
                <li><em>branding, logo design</em></li>
                <li><em>website design</em></li>
                <li><em>HTML 5, CSS 3 coding</em></li>
            </ul>
            
            <br /><br />
            
            <div>
            	<a href="http://www.psdchest.com/" target="_blank"  class="btn blue rounded">Visit online</a> 
            </div>
            
        </div>
        <!-- //column -->
    </div>
    <!-- parallax elements -->
    <div class="px pximage-left"></div>
    <div class="px pximage-right"></div>
     <!-- //parallax elements -->
     <p >
         <a onClick="goToByScroll('folio2')" id="gonext"></a>
    </p>
        
    </div>
    </div>
    <!-- //folio1 -->
    
    <!-- folio2 -->
    <div id="folio2" class="section">
    <div class="overflow">
    <div class="set-size">
    	
        <!-- header -->
        <div class="header">
        
            <!-- column -->
            <div class="column-300 float-left">
                
                <h2><strong>Portfolio work 2 title</strong></h2>
                <em>branding, web design</em>
            
            </div>
            <!-- //column -->
        
        <div class="clear"></div>    
        </div>
        <!-- //header -->
        
        <!-- column -->
        <div class="column-300 float-left">
        
        	<p>
Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
            </p>
            
            
            <h4><strong>What I've done:</strong></h4>
            
            <ul class="list blue">
                <li><em>branding, logo design</em></li>
                <li><em>website design</em></li>
                <li><em>HTML 5, CSS 3 coding</em></li>
            </ul>
            
            <br /><br />
            
            <div>
            	<a href="http://www.psdchest.com/" target="_blank" class="btn blue rounded">Visit online</a> 
            </div>
            
        </div>
        <!-- //column -->
        
        <!-- column -->
        <div class="column-540 float-right">
			
            <div class="media">
            	<img src="images/folio_img2.png" alt="" />
            </div>
            
        </div>
        <!-- //column -->
        
    </div>
    <!-- parallax elements -->
    <div class="px pximage-left"></div>
    <div class="px pximage-right"></div>
    <!-- //parallax elements -->
 <p >
         <a onClick="goToByScroll('folio3')" id="gonext"></a>
    </p>


    </div>
    </div>
    <!-- //folio2 -->
    
    <!-- folio3 -->
    <div id="folio3" class="section">
    <div class="overflow">
    <div class="set-size">
    	
        <!-- header -->
        <div class="header">
        
            <!-- column -->
            <div class="column-300 float-right">
                
                <h2><strong>Portfolio work 3 title</strong></h2>
                <em>branding, web design</em>
            
            </div>
            <!-- //column -->
        
        <div class="clear"></div>    
        </div>
        <!-- //header -->
        
        <!-- column -->
        <div class="column-540 float-left">
			
            <div class="media">
            	<img src="images/folio_img3.png" alt="" />
            </div>
            
        </div>
        <!-- //column -->
        
        <!-- column -->
        <div class="column-300 float-right">
        
        	<p>
Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. <br /><br />Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. <br /><br />Quis nostrud exerci t diam nonummy nibh euismod tincidunt ut laoreet dollamcorper.
            </p>
            
            
            <h4><strong>What I've done:</strong></h4>
            
            <ul class="list blue">
                <li><em>branding, logo design</em></li>
                <li><em>website design</em></li>
                <li><em>HTML 5, CSS 3 coding</em></li>
            </ul>
            
            <br /><br />
            
            <div>
            	<a href="http://www.psdchest.com/" target="_blank" class="btn blue rounded">Visit online</a> 
            </div>
            
        </div>
        <!-- //column -->
    </div>
    <!-- parallax elements -->
    <div class="px pximage-left"></div>
    <div class="px pximage-right"></div>
    <!-- //parallax elements -->   
         <p >
         <a onClick="goToByScroll('folio4')" id="gonext"></a>
    </p>
        
        
    </div>
    </div>
    <!-- //folio3 -->
    
    <!-- folio4 -->
    <div id="folio4" class="section">
    <div class="overflow">
    <div class="set-size">
    	
        <!-- header -->
        <div class="header">
        
            <!-- column -->
            <div class="column-300 float-left">
                
                <h2><strong>Portfolio work 4 title</strong></h2>
                <em>branding, web design</em>
            
            </div>
            <!-- //column -->
        
        <div class="clear"></div>    
        </div>
        <!-- //header -->
        
        <!-- column -->
        <div class="column-300 float-left">
        
        	<p>
Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
            </p>
            
            
            <h4><strong>What I've done:</strong></h4>
            
            <ul class="list blue">
                <li><em>branding, logo design</em></li>
                <li><em>website design</em></li>
                <li><em>HTML 5, CSS 3 coding</em></li>
            </ul>
            
            <br /><br />
            
            <div>
            	<a href="http://www.psdchest.com/" target="_blank" class="btn blue rounded">Visit online</a>
            </div>
            
        </div>
        <!-- //column -->
        
        <!-- column -->
        <div class="column-540 float-right">
			
            <div class="media">
            	<iframe src="http://player.vimeo.com/video/23544972?title=0&amp;byline=0&amp;portrait=0" width="500" height="350" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
            </div>
            
        </div>
        <!-- //column -->
        
    </div>
    <!-- parallax elements -->
    <div class="px pximage-left"></div>
    <div class="px pximage-right"></div>
    <!-- //parallax elements -->
 <p >
         <a onClick="goToByScroll('gallery')" id="gonext"></a>
    </p>


    </div>
    </div>
    <!-- //folio4 -->    
    
    <!-- gallery -->
    <div id="gallery" class="section">
    <div class="overflow">
    <div class="set-size">
    	
        <!-- header -->
        <div class="header">
            
            <h2><strong>Gallery</strong></h2>
            <em>Just some cool photos</em>
        
        <div class="clear"></div>
        </div>
        <!-- //header -->
        
        <!-- gallery -->
        <ul class="gallery">
            <li><a href="images/gallery/img1_big.jpg" rel="group1" class="lightbox"><span></span><img src="images/gallery/img1_small.jpg" alt="" /></a></li>
            <li><a href="images/gallery/img2_big.jpg" rel="group1" class="lightbox"><span></span><img src="images/gallery/img2_small.jpg" alt="" /></a></li>
            <li><a href="images/gallery/img3_big.jpg" rel="group1" class="lightbox"><span></span><img src="images/gallery/img3_small.jpg" alt="" /></a></li>
            <li><a href="images/gallery/img4_big.jpg" rel="group1" class="lightbox"><span></span><img src="images/gallery/img4_small.jpg" alt="" /></a></li>
            <li><a href="images/gallery/img5_big.jpg" rel="group1" class="lightbox"><span></span><img src="images/gallery/img5_small.jpg" alt="" /></a></li>
            <li><a href="images/gallery/img6_big.jpg" rel="group1" class="lightbox"><span></span><img src="images/gallery/img6_small.jpg" alt="" /></a></li>
            <li><a href="images/gallery/img7_big.jpg" rel="group1" class="lightbox"><span></span><img src="images/gallery/img7_small.jpg" alt="" /></a></li>
            <li><a href="images/gallery/img8_big.jpg" rel="group1" class="lightbox"><span></span><img src="images/gallery/img8_small.jpg" alt="" /></a></li>
            <li><a href="images/gallery/img9_big.jpg" rel="group1" class="lightbox"><span></span><img src="images/gallery/img9_small.jpg" alt="" /></a></li>
            <li><a href="images/gallery/img10_big.jpg" rel="group1" class="lightbox"><span></span><img src="images/gallery/img10_small.jpg" alt="" /></a></li>
            <li><a href="images/gallery/img11_big.jpg" rel="group1" class="lightbox"><span></span><img src="images/gallery/img11_small.jpg" alt="" /></a></li>
            <li><a href="images/gallery/img12_big.jpg" rel="group1" class="lightbox"><span></span><img src="images/gallery/img12_small.jpg" alt="" /></a></li>
        </ul>
        <!-- //gallery -->
        
    </div>
    <!-- parallax elements -->
    <div class="px pxphoto-left"></div>
    <div class="px pxphoto-right"></div>
    <!-- //parallax elements -->
     <p >
         <a onClick="goToByScroll('addons')" id="gonext"></a>
    </p>
    
    </div>
    </div>
    <!-- //gallery -->
    
    <!-- addons -->
    <div id="addons" class="section">
    <div class="set-size">
    	
        <!-- header -->
        <div class="header">
            
            <h2><strong>Additional elements</strong></h2>
            <em>Lists, dividers, headers and other stuff</em>
        
        <div class="clear"></div>
        </div>
        <!-- //header -->
        
        
        <!-- column -->
        <div class="column-620 float-left">
        
            <h4><strong>Quote</strong></h4>
            <blockquote><p><em>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,sed diam nonummy<br />nibh euismod tincidunt</em></p></blockquote>
            
            <h4><strong>Lists</strong></h4>
            
            <div class="column-180 float-left">
                <ul class="list blue">
                    <li><em>branding, logo design</em></li>
                    <li><em>website design</em></li>
                    <li><em>HTML 5, CSS 3 coding</em></li>
                </ul>
            </div>
            
            <div class="column-180 float-left">
                <ul class="list orange">
                    <li><em>branding, logo design</em></li>
                    <li><em>website design</em></li>
                    <li><em>HTML 5, CSS 3 coding</em></li>
                </ul>
            </div>
            
            <div class="column-180 float-left">
                <ul class="list red">
                    <li><em>branding, logo design</em></li>
                    <li><em>website design</em></li>
                    <li><em>HTML 5, CSS 3 coding</em></li>
                </ul>
            </div>
        
        </div>
        <!-- //column -->
        
        <!-- column -->
        <div class="column-300 float-right">
            <h1><strong>Heading h1</strong></h1>
            <h2><strong>Heading h2</strong></h2>
            <h3><strong>Heading h3</strong></h3>
            <h4><strong>Heading h4</strong></h4>
            <h5><strong>Heading h5</strong></h5>
            <h6><strong>Heading h6</strong></h6>
        </div>
        <!-- //column -->
        
        <div class="clear"></div>
        
        <h4><strong>Columns</strong></h4>
        
        <div class="column-220 float-left haspadding">
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
            </p>
        </div>
        <div class="column-220 float-left haspadding">
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
            </p>
        </div>
        <div class="column-220 float-left haspadding">
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
            </p>
        </div>
        <div class="column-220 float-left">
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
            </p>
        </div>
        
        <div class="clear"></div>
        
        <div class="column-300 float-left haspadding">
            <p>
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna 
            </p>
        </div>
        <div class="column-300 float-left haspadding">
            <p>
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna 
            </p>
        </div>
        <div class="column-300 float-left">
            <p>
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna 
            </p>
        </div>
        
        

        
      <p >
         <a onClick="goToByScroll('contact')" id="gonext"></a>
    </p>   
        
    </div>
    </div>
    <!-- //addons -->
    
    <!-- contact -->
    <div id="contact" class="section">
    <div class="overflow">
    <div class="set-size">
    	
        <!-- header -->
        <div class="header">
            
            <h2><strong>Contact</strong></h2>
            <em>Let's talk business!</em>
        
        <div class="clear"></div>
        </div>
        <!-- //header -->
        
        <!-- column -->
        <div class="column-540 float-left">
        
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
            </p>
            
            <h4><strong>Contact form</strong></h4>
            <form action="js/sendmail.php" method="post" id="contact-form">
            <fieldset>
            	<div class="holder"><div class="message"><div class="top"></div><div class="content"><div class="arrow"></div><div id="alert"></div></div><div class="bottom"></div></div></div>
                <div class="row"><input type="text" value="" class="input-text" id="name" name="name" /><label for="name">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<em>Your name (required)</em></label></div>
                <div class="row"><input type="text" value="" class="input-text" id="email" name="email" /><label for="email">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<em>Your email (required)</em></label></div>
                <div class="row"><input type="text" value="" class="input-text" id="phone" name="phone" /><label for="phone">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<em>Phone</em></label></div>
                
                <br />
                
                <div>
                	<div class="row"><label for="message"><em>Message (required)</em></label></div>
                    <div><textarea cols="" rows="" class="input-textarea" id="message" name="message"></textarea></div>
                </div>
                
                <br />
                
                <div>
                <input type="submit" class="btn blue rounded" value="Send" />
                </div>
            </fieldset>
            </form>
            
            
            
            <div class="clear"></div>
        </div>
        <!-- //column -->
        
        <!-- column -->
        <div class="column-300 float-right">
        
        	<h4><strong>Get in Touch</strong></h4>
            
            <p>
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.
            </p>
            
            <ul class="list-icons">
            <li>
                <img src="images/icon-phone.png" alt="" />
                <p>
                    <strong>PHONE</strong><br />
                    (123) 456 7891 / 456 7891
                </p>
            </li>
            <li>
                <img src="images/icon-email.png" alt="" />
                <p>
                    <strong>EMAIL</strong><br />
                    contact@yourdomain.com
                </p>
            </li>
            <li>
                <img src="images/icon-skype.png" alt="" />
                <p>
                    <strong>SKYPE</strong><br />
                    yourskypename
                </p>
            </li>
            </ul>
            
            <br /><br />
            
            <h4><strong>Get Social</strong></h4>
            <ul class="list-social">
            	<li class="twitter"><a href="#"></a></li>
                <li class="plus-one"><a href="#"></a></li>
                <li class="facebook"><a href="#"></a></li>
                <li class="forrst"><a href="#"></a></li>
                <li class="dribbble"><a href="#"></a></li>
                <li class="deviant-art"><a href="#"></a></li>
                <li class="behance"><a href="#"></a></li>
            </ul>
            
        </div>
        <!-- //column -->
  
    </div>
    
    <!-- parallax elements -->
    <div class="px pxmyspace"></div>
    <div class="px pxbehance"></div>
    <div class="px pxdribbble"></div>
    <div class="px pxtwitter"></div>
    <div class="px pxbuzz"></div>
    <div class="px pxdelicious"></div>
    <div class="px pxmail"></div>
    <!-- //parallax elements -->
    
    <div class="clear"></div>
    </div>
    </div>
    <!-- //contact -->
        
    <div class="clear"></div>
    </div>
    <!-- //container -->
    
    <div class="clear"></div>
    
    <!-- footer -->
    <div id="footer">
    <div class="set-size">
    <a onClick="goToByScroll('home')" id="gotop"></a>
    	<p>&copy; 2012 Copyright Scrollfolio. All Rights Reserved. Valid (x)HTML and CSS</p>
    </div>
    </div>
    <!-- //footer -->
    
</body>
</html>
