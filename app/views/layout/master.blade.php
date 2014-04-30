<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title')</title>
<link href="boilerplate.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
body {
	background-color: #F9F9F9;
}
body,td,th {
	font-family: 'Roboto', Arial, Helvetica, sans-serif;
}
</style>
<!-- 
To learn more about the conditional comments around the html tags at the top of the file:
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/

Do the following if you're using your customized build of modernizr (http://www.modernizr.com/):
* insert the link to your js here
* remove the link below to the html5shiv
* add the "no-js" class to the html tags at the top
* you can also remove the link to respond.min.js if you included the MQ Polyfill in your modernizr build 
-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
 <script src="respond.min.js"></script>
 <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
 <script src="scripts/jquery.slides.min.js"></script>
 


 
</head>
<body>
<header class="header clearfix">
<div class="main"><div class="header_logo"> <img src="images/logo.jpg" width="65" height="136"></div></div>
  <nav class="header_top"><div class="main"><a href="#">About</a>
        <a href="books">Books</a>
        <a href="newrelease">New releases</a>
        <a href="contact">Contact us</a>
      <div class="clear"></div>
  </div></nav>
  <nav class="header_sub"><div class="main">
   		
        <a href="#">Atelier</a> <a href="#">Click </a>
        <a href="#">ICT </a> <a href="#">Stories</a>
        <div class="clear"></div>
  </div></nav>
</header>

<!--  END header  -->


<div class="slider clearfix">
	<div class="main">
    	  <h1>@yield('title')</h1>
 
    </div>

</div>

<!--  END slider  -->
<div class="container clearfix" >
	<div class="main  clearfix" >
    <div class="container_main">
   	  @yield('content')
     </div> 
    </div>
</div>
<footer class="footer clearfix">
    <div class="footer1 clearfix">
        <div class="main">
            <div class="col_1-4">
                <a href="/">Home</a>
                <a href="about">About</a>
                <a href="#">Books</a>
                <a href="newrelease">New Releases</a>
                <a href="contact">Contact us</a>
           </div>
           <div class="col_1-4">
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Books</a>
                <a href="#">New Releases</a>
                <a href="#">Contact us</a>
           </div>
           <div class="col_1-4">
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Books</a>
                <a href="#">New Releases</a>
                <a href="#">Contact us</a>
           </div>
           <div class="col_1-4">
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#">Books</a>
                <a href="#">New Releases</a>
                <a href="#">Contact us</a>
           </div>
      </div>
        
    </div>
    <div class="footer2 clearfix">
         <div class="main">
         
         &copy; all copyrights reserved
         </div>
  </div>
</footer>


<script language="javascript" type="application/javascript">
 	$(document).ready(function(){
		$(function() {
		  $('#slides').slidesjs({
			width: 1000,
			height: 372,
			 play: {
			  active: true,
			  auto: true,
			  interval: 6000,
			  swap: true
			 },
			  effect: {
				  slide: {
					// Slide effect settings.
					speed: 1000
					  // [number] Speed in milliseconds of the slide animation.
			   }},
			callback: {
			  loaded: function(number) {

			  },
			  start: function(number) {
				$("#slide_txt_1").slideUp(500);
				$("#slide_txt_2").slideUp(500);
				$("#slide_txt_3").slideUp(500);
				$("#slide_txt_4").slideUp(500);
			  },
			  complete: function(number) {
					$("#slide_txt_"+number).slideDown(500);

			  }
			}
		  });
		});
	});
  </script>
</body>
</html>
