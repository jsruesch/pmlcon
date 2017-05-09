<!DOCTYPE HTML >
<html lang="en">
<head>

    <title>Play Make Learn 2017</title>
    <meta name="description"
          content="">

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="stylesheets/style.min.css"/>
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Typekit -->
    <script src="https://use.typekit.net/bao7dpy.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <!-- Wow JS -->
    <!--load amimate.css from CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css">
    <!--load WOW js from CDN-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
    new WOW().init();
    </script>
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <!-- Scroll to Top -->
    <script>
      $(document).ready(function(){

      	// hide #back-top first
      	$("#back-top").hide();

      	// fade in #back-top
      	$(function () {
      		$(window).scroll(function () {
      			if ($(this).scrollTop() > 100) {
      				$('#back-top').fadeIn();
      			} else {
      				$('#back-top').fadeOut();
      			}
      		});

      		// scroll body to 0px on click
      		$('#back-top a').click(function () {
      			$('body,html').animate({
      				scrollTop: 0
      			}, 800);
      			return false;
      		});
      	});

      });
    </script>
</head>

<body id="top">
