<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link href='https://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/uikit.min.css"/>
		 <link rel="stylesheet" href="css/slideshow.min.css"/>
        <link rel="stylesheet" href="css/font-awesome.min.css"/>
        <link rel="stylesheet" href="css/responsive-menu.css"/>
       
        <link rel="stylesheet" href="css/normalize.css"/>
        <link rel="stylesheet" href="css/main.css"/>
        <link rel="stylesheet" href="css/responsivemobilemenu.css"/>
          <!--for full slider-->
        <script src="http://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.7">
</script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv-printshiv.js">
</script>
     <script src="js/vendor/modernizr-2.8.3.min.js"></script>

         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
		  <script src="js/bootstrap.min.js"></script>
	   
	    <script type="text/javascript" src="js/responsive-menu.min.js"></script> 
	    <script type="text/javascript" src="js/jquery.js"></script> 
       

         <script>
            var myCenter=new google.maps.LatLng(23.181232,89.191547);
            var marker;

            function initialize()
            {
            var mapProp = {
              center:myCenter,
               scrollwheel: false,
                panControl: false,
                zoomControl: false,
              zoom:10,
              mapTypeId:google.maps.MapTypeId.ROADMAP
              };

            var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

            var marker=new google.maps.Marker({
              position:myCenter,
              animation:google.maps.Animation.BOUNCE
              });

            marker.setMap(map);
            }

            google.maps.event.addDomListener(window, 'load', initialize);
             <!-- Setup Responsive Menu -->
          
        </script>

        <script>
        jQuery(function ($) {
            var menu = $('.rm-nav').rMenu({

                // Optional Settings

                /**
                 * Minimum width for expanded layout in pixels - String
                 * The media query in css file should be changed to match this
                 * Must be in pixels and include px units if not using Modernizr.
                 * @default '769px'
                 */
                minWidth: '960px',

                /**
                 * The opening and closing speed of the menus in milliseconds
                 * @default 400
                 */
                //transitionSpeed: 400,

                /**
                 * The jQuery easing function - used with jQuery transitions
                 * @default 'swing'
                 * @options 'swing', 'linear'
                 */
                //jqueryEasing: 'swing',

                /**
                 * The CSS3 transitions easing function - used with CSS3 transitions
                 * @default 'ease'
                 */
                //css3Easing: 'ease',

                /**
                 * Use button as toggle link - instead of text
                 * @default true
                 */
                //toggleBtnBool: true,

                /**
                 * The Toggle Link selector
                 * @default '.rm-toggle'
                 */
                //toggleSel: '.rm-toggle',


                /**
                 * The menu/sub-menu selector
                 * @default 'ul'
                 */
                //menuSel: 'ul',

                /**
                 * The menu items selector
                 * @default 'li'
                 */
                //menuItemsSel: 'li',

                /**
                 * Use CSS3 animation/transitions Boolean
                 * @default true
                 * Do not use animation/transitions: false
                 */
                //animateBool: false,

                /**
                 * Force GPU Acceleration Boolean
                 * @default false
                 * Do not force: false
                 */
                //accelerateBool: true,

                /**
                 * the setup complete callback function
                 * @default 'false'
                 */
                //setupCallback: false,

                /**
                 * the tabindex start value - integer
                 * @default 1
                 */
                //tabindexStart: 5,

                /**
                 * Use development mode - outputs information to console
                 * @default false
                 */
                //developmentMode: false

            });
        });
    </script>

	

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

			
		<div class="header_area">
			<div class="container">
				<div class="row header-image">
					<div class="col-md-5">
						<div class="logo-area">
							<h1>THIKANA <span>|</span></h1>
						</div>
						<div class="logo-area">
							<p><i>Find your address</i></p>
						</div>
					</div>
					<div class="col-md-4"></div>
					<div class="col-md-3">
						<div class="re_login_logout">
						    <div class="login">
								<a href="login.php" class="btn btn-primary floatright">Login</a>
							</div>
							<div class="logout">
								<a href="logout.php"><button class="btn btn-primary floatright" type="submit">Logout</button></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
			
			<div class="main_menue_area">
				<div class="container">
			        <div class="row">
					    <div class="col-sm-12">	
							<div class="mainmenu">
								  <div class="rm-container">
      

        <nav class="rm-nav rm-nojs rm-lighten">
            <ul>
                <li><a href="index.php">Home</a></li>
				<li><a href="palbari.php">Palbari</a></li>
	            <li><a href="Churamonkati.php">Churamonkati</a></li>						
				<li><a href="Arobpur.php">Arobpur</a></li>
				<li><a href="ambottola.php">Ambottola</a></li>
				<li><a href="Dharmotola.php">Dharmotola</a></li>
                <li><a href="">More</a>	
                    <ul>
						<li><a href="">Dhaka</a></li>
						<li><a href="">Khulna</a></li>
						<li><a href="">Rajsahi</a></li>
					</ul>
				</li>
                <li><a href="contact.php">Contact Us</a></li>
				<li><a href="sign_up.php">Registration</a></li>
				<li><a href="single_mess_information.php">Show Post</a>
					 <ul>
						<li><a href="">Finder</a></li>
						<li><a href="">Owner</a></li>
					</ul>
				</li>
				<li><a href="addpost.php">Add Post</a></li>
			</ul>
        </nav>
    </div><!-- .rm-container -->
    <!-- End Responsive Menu HTML -->
							
							</div>
						</div>
			    	</div>
						
				</div>		
			</div>