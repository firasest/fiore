<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from www.directdesign.it/demos/chateau/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Mar 2018 10:20:15 GMT -->
<head>
        <title>Wine Maker</title>
        
        <!-- meta -->
        <meta charset="utf-8">
        <meta content="" name="description">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
        
        <!-- css -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="src/css/font-awesome.css" rel="stylesheet">
        <link href="src/css/animate.css" rel="stylesheet">
        <link href="src/css/swipebox.css" rel="stylesheet">
        <link href="src/css/swiper.min.css" rel="stylesheet">
        <link href="src/css/winemaker-theme.css" rel="stylesheet">
        
        <!-- google fonts -->
        <link href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Merriweather:300,400,700,900,900italic,700italic,400italic,300italic" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
        
		<!-- head js -->
        <script src="src/js/modernizr-2.6.2.min.js"></script>
    </head>
    
    <body>
    
    	<aside id="side-nav">
    	
    		<div>

				<form class="form-inline">
					<div class="form-group has-feedback">
						<label for="search-field">Search site</label>
						<input id="search-field" type="text" class="form-control" placeholder="Search...">
						<button id="search-btn" type="submit" class="btn"><span class="fa fa-search"></span></button>
					</div>
				</form>

				<ul class="list-group">
					<li class="list-group-item style-1 list-group-label">About</li>
					<li class="list-group-item style-1"><a href="register.php">Register</a></li>
					<li class="list-group-item style-1"><a href="login.php">Login</a></li>
					<li class="list-group-item style-1"><a href="contact.php">Contact</a></li>
					<li class="list-group-item style-1"><a href="faq.php">FAQ</a></li>
				</ul>    	
		        
				<ul class="list-group">
					<li class="list-group-item style-1 list-group-label">Social</li>
					<li class="list-group-item style-1"><a href="#"><span class="fa fa-facebook-square"></span> Facebook</a></li>
					<li class="list-group-item style-1"><a href="#"><span class="fa fa-twitter-square"></span> Twitter</a></li>
					<li class="list-group-item style-1"><a href="#"><span class="fa fa-google-plus-square"></span> Google Plus</a></li>
					<li class="list-group-item style-1"><a href="#"><span class="fa fa-pinterest-square"></span> Pinterest</a></li>
				</ul>
				
    		</div>

    	</aside><!-- /#side-nav  -->
    	
        <div class="container-fluid" id="main-container">
            <div class="row" id="main-row">
            
                <header>
                    <nav id="main-nav-bar" class="navbar navbar-default">
                        <div class="container">

                            <div class="navbar-header">
                                <a class="navbar-brand hidden-xs hidden-sm" href="index-2.php"><img alt="chateau" src="images/logo-1x.png" srcset="images/logo-1x.png 1x, images/logo-2x.png 2x"></a>
                                <a class="navbar-brand hidden-lg hidden-md" href="index-2.php"><img alt="chateau" src="images/logo-mobile-1x.png" srcset="images/logo-mobile-1x.png 1x, images/logo-mobile-2x.png 2x"></a>
                                <button class="toggle-side-menu navbar-toggle" type="button"><span class="fa fa-ellipsis-v"></span></button>
                                <button class="navbar-toggle collapsed" data-target="#navigation" data-toggle="collapse" type="button"><span class="fa fa-navicon"></span></button>
                                <button class="navbar-toggle" type="button"><span class="fa fa-shopping-cart"></span></button>
                            </div>
                            <!-- navbar-header -->

                            <div class="collapse navbar-collapse navbar-right" id="navigation">
                            
                                <ul id="main-nav" class="nav navbar-nav">
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Products <span class="fa fa-angle-down"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="products.php#filter=*">All Products</a></li>
                                            <li><a href="products.php#filter=.red-wines">Red Wines</a></li>
                                            <li><a href="products.php#filter=.white-wines">White Wines</a></li>
                                            <li><a href="products.php#filter=.rose-wines">Rosé Wines</a></li>
                                            <li><a href="products.php#filter=.food-specialties">Food Specialties</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">About <span class="fa fa-angle-down"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="who-we-are.php">Who we are</a></li>
                                            <li><a href="our-history.php">Our History</a></li>
                                            <li><a href="the-vineyard.php">The Vineyard</a></li>
                                            <li><a href="gallery.php">Gallery</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                    	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Blog <span class="fa fa-angle-down"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog-standard.php">Blog Standard</a></li>
                                            <li><a href="blog-masonry.php">Blog Masonry</a></li>
                                            <li><a href="blog-entry.php">Blog Entry 1</a></li>
                                            <li><a href="blog-entry-alternative.php">Blog Entry 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="elements.php">Elements</a></li>
                                    <li><a href="buy-online.php">Buy Online <span class="badge">New</span></a></li>
                                </ul>

                                <ul id="tool-nav" class="nav navbar-nav hidden-xs hidden-sm">
                                    <li><a href="cart.php"><span class="fa fa-shopping-cart"></span></a></li>
                                    <li><a href="#" class="toggle-side-menu"><span class="fa fa-ellipsis-v"></span></a></li>
                                </ul>
							
                            </div>
                            <!-- /.navbar-collapse -->
                            
	                        
	                        <!-- /.container -->
	                        
                        </div>
                        <!-- /.container-fluid -->
                    </nav>
				</header>

                <div class="container-fluid">
                    <div class="row">
                    
                        <!-- Slider main container -->
                        <div id="swiper-1" class="swiper-container">
                        
                            <!-- Required wrapper -->
                            <div class="swiper-wrapper">
                            
                                <!-- Slides -->
                                <div class="swiper-slide" id="slide-0">
                                    <div class="background">
                                        <video autoplay="" loop="" poster="https://s3-us-west-2.amazonaws.com/coverr/poster/On-the-vine.jpg" style="width: 1571px;">
                                        <source src="https://s3-us-west-2.amazonaws.com/coverr/mp4/On-the-vine.mp4" type="video/mp4">
                                        <source src="https://s3-us-west-2.amazonaws.com/coverr/mp4/On-the-vine.mp4" type="video/webm">
                                        Your browser does not support the video tag. I suggest you upgrade your browser.
                                        </video>
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3 text-center">
                                                <h1 class="color-light" data-animation="animated bounceInDown">
                                                    Award winning
                                                </h1>
                                                <span class="separator" data-animation="animated bounceInLeft"></span>
                                                <p class="color-light" data-animation="animated bounceInUp">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae est velit. Morbi consequat condimentum turpis, sed placerat lacus tempus sit amet. Nulla facilisi.
                                                </p>
                                                <button class="btn btn-primary btn-lg btn-animated btn-style-1" data-animation="animated bounceInUp" type="button"><span class="btn-label">Our wines</span><span class="btn-icon fa fa-chevron-right"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide" id="slide-1">
                                    <div class="background"></div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <h1 class="color-light" data-animation="animated bounceInUp">
                                                    Great Wines<br>
                                                    since 1905
                                                </h1>
                                                <span class="separator" data-animation="animated bounceInUp"></span>
                                                <p class="color-light" data-animation="animated bounceInUp">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae est velit. Morbi consequat condimentum turpis, sed placerat lacus tempus sit amet. Nulla facilisi.
                                                </p>
                                                <button class="btn btn-primary btn-lg btn-animated btn-style-1" data-animation="animated bounceInUp" type="button"><span class="btn-label">Our wines</span><span class="btn-icon fa fa-chevron-right"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide" id="slide-2">
                                    <div class="background">
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <h1 class="color-light" data-animation="animated bounceInDown">
                                                    Prestigious<br>
                                                    Cellars
                                                </h1>
                                                <span class="separator" data-animation="animated bounceInLeft"></span>
                                                <p class="color-light" data-animation="animated bounceInLeft">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae est velit. Morbi consequat condimentum turpis, sed placerat lacus tempus sit amet. Nulla facilisi.
                                                </p>
                                                <button class="btn btn-primary btn-lg btn-animated btn-style-1" data-animation="animated bounceInUp" type="button"><span class="btn-label">Our Cellars</span><span class="btn-icon fa fa-chevron-right"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide" id="slide-3">
                                    <div class="background">
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <h1 class="color-light" data-animation="animated rollIn">
                                                    Organic<br>
                                                    farming
                                                </h1>
                                                <span class="separator" data-animation="animated rollIn"></span>
                                                <p class="color-light" data-animation="animated rollIn">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae est velit. Morbi consequat condimentum turpis, sed placerat lacus tempus sit amet. Nulla facilisi.
                                                </p>
                                                <button class="btn btn-primary btn-lg btn-animated btn-style-1" data-animation="animated rollIn" type="button"><span class="btn-label">organic farming</span><span class="btn-icon fa fa-chevron-right"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <!-- Pagination -->
                            <div class="swiper-pagination"></div>
                            
                            <!-- Navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                            
                        </div>
                        <!-- /#swiper-1 -->
                        
                    </div>
                    <!-- /.row -->
                    
                </div>
                <!-- /.container-fluid -->

                <section>
                    <div class="container">
                    
                        <div class="flag">
                            <span class="fa fa-heart-o"></span>
                        </div>

                        <div class="row">
                        
                            <div class="col-sm-4">
                                <img alt="chateau" class="img-responsive img-thumbnail mar-v os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0s" src="images/wine-maker-working.jpg">
                            </div>

                            <div class="col-sm-8">
                                <h2>
                                    Two Generations<br>
                                    of Passionate Winemakers
                                </h2>
                                <span class="separator"></span>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae est velit. Morbi consequat condimentum turpis, sed placerat lacus tempus sit amet. Nulla facilisi. Quisque cursus ac velit nec elementum. Nulla varius ex quis ante auctor, non consequat velit faucibus.
                                </p>
                                <img alt="chateau" height="103" src="images/signature.png" width="202">
                            </div>
                            
	                    </div>
	                </div>
                </section>

                <section class="section-photo parallax color-light" data-stellar-background-ratio="0.5" id="img1">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <h2>
                                    <em>Our Manor</em>
                                </h2>

                                <h3>
                                    In the heart of napa valley
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="overlay">
                    </div>
                </section>

                <section>
                    <div class="container">
                        <div class="flag">
                            <span class="fa fa-leaf"></span>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <h2>
                                    Genuine and Natural Products
                                </h2>
                                <span class="separator"></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0s">
                                <a href="products.php#filter=.red-wines">
                                <figure class="box-1 img-thumbnail mar-v">
                                    <figcaption>
                                        Red Wines
                                    </figcaption>
                                    <div class="overlay"></div>
                                    <img alt="chateau" class="img-appear" src="images/red-wine-1.png">
                                    <img alt="chateau" class="img-responsive" src="images/red-wines.jpg">
                                </figure></a>
                            </div>

                            <div class="col-sm-6 os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0s">
                                <a href="products.php#filter=.rose-wines">
                                <figure class="box-1 img-thumbnail mar-v">
                                    <figcaption>
                                        Rosé Wines
                                    </figcaption>
                                    <div class="overlay"></div>
                                    <img alt="chateau" class="img-appear" src="images/rose-wine-1.png">
                                    <img alt="chateau" class="img-responsive" src="images/rose-wines.jpg">
                                </figure></a>
                            </div>

                            <div class="col-sm-6 os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0s">
                                <a href="products.php#filter=.white-wines">
                                <figure class="box-1 img-thumbnail mar-v">
                                    <figcaption>
                                        White Wines
                                    </figcaption>
                                    <div class="overlay"></div>
                                    <img alt="chateau" class="img-appear" src="images/white-wine-1.png">
                                    <img alt="chateau" class="img-responsive" src="images/white-wines.jpg">
                                </figure></a>
                            </div>

                            <div class="col-sm-6 os-animation" data-os-animation="fadeInRight" data-os-animation-delay="0s">
                                <a href="products.php#filter=.food-specialties">
                                <figure class="box-1 img-thumbnail mar-v">
                                    <figcaption>
                                        Food Specialties
                                    </figcaption>
                                    <div class="overlay"></div>
                                    <img alt="chateau" class="img-appear" src="images/food-5.png">
                                    <img alt="chateau" class="img-responsive" src="images/food-specialities.jpg">
                                </figure></a>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section-photo parallax color-light" data-stellar-background-ratio="0.5" id="img2">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <h2>
                                    <em>Award Winning Italian Vines</em>
                                </h2>

                                <h3>
                                    To only make the best wines
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="overlay">
                    </div>
                </section>
                
	            <section id="contact">
	                <div class="container">
	                    <div class="row">
		                    <div class="col-sm-7">
								<form>
									<h2>Say hello</h2>
									<div class="form-group">
									    <label for="msg-email">Email address</label>
									    <input type="email" class="form-control" id="msg-email" placeholder="Email">
									</div>
									<div class="form-group">
									    <label for="msg-email">Subject</label>
										<select class="form-control">
										  <option>Product Information</option>
										  <option>Product Assistance</option>
										  <option>Job Opportunities</option>
										</select>
									</div>
									<div class="form-group">
									    <label for="msg-text">Message</label>
									    <textarea rows="6" class="form-control" id="msg-text" placeholder="Type message"></textarea>
									</div>
									
									<button class="btn btn-primary btn-lg btn-animated btn-style-1" type="submit">
									<span class="btn-label">Send message</span>
									<span class="btn-icon fa fa-envelope"></span>
									</button>
									
									
								</form>
		                    </div>
   		                    <div class="col-sm-5">
 								<h2>Visit Us</h2>
 								<h3>Wine Estate</h3>
  		                    	<p>
   		                    	<span class="fa fa-map-marker primary bigger"></span> 4086 Byway E., Napa, CA 94558
   		                    	</p>
 								<h3>Winery</h3>
  		                    	<p>
   		                    	<span class="fa fa-map-marker primary bigger"></span> 644 1st St, Napa, CA 94559
   		                    	</p>
   		                    
  		                    	<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae est velit. Morbi consequat condimentum turpis, sed placerat lacus tempus sit amet. Nulla facilisi. Quisque cursus ac velit nec elementum. Nulla varius ex quis ante auctor, non consequat velit faucibus.
   		                    	</p>
   		                    
   		                    </div>
	                    </div>
	                </div>
                </section>
	            
	            <section id="location">
		            <div id="map">
		            
		            </div>	         
	            </section>
                
                <footer>
					<div class="container">
						<div class="row">
							<div class="col-sm-3">
								<ul class="list-group">
									<li class="list-group-item style-1 list-group-label">Products</li>
                                    <li class="list-group-item style-1"><a href="products.php#filter=*">All Products</a></li>
                                    <li class="list-group-item style-1"><a href="products.php#filter=.red-wines">Red Wines</a></li>
                                    <li class="list-group-item style-1"><a href="products.php#filter=.white-wines">White Wines</a></li>
                                    <li class="list-group-item style-1"><a href="products.php#filter=.rose-wines">Rosé Wines</a></li>
                                    <li class="list-group-item style-1"><a href="products.php#filter=.food-specialties">Food Specialties</a></li>
								</ul>    	
							</div>
							<div class="col-sm-3">
								<ul class="list-group">
									<li class="list-group-item style-1 list-group-label">About</li>
                                    <li class="list-group-item style-1"><a href="who-we-are.php">Who we are</a></li>
                                    <li class="list-group-item style-1"><a href="our-history.php">Our History</a></li>
                                    <li class="list-group-item style-1"><a href="the-vineyard.php">The Vineyard</a></li>
                                    <li class="list-group-item style-1"><a href="gallery.php">Gallery</a></li>
								</ul>    	
							</div>
							<div class="col-sm-3">
								<ul class="list-group">
									<li class="list-group-item style-1 list-group-label">Clients</li>
									<li class="list-group-item style-1"><a href="register.php">Register</a></li>
									<li class="list-group-item style-1"><a href="login.php">Login</a></li>
									<li class="list-group-item style-1"><a href="contact.php">Contact</a></li>
									<li class="list-group-item style-1"><a href="faq.php">FAQ</a></li>
								</ul>    	
							</div>
							<div class="col-sm-3">
								<ul class="list-group">
									<li class="list-group-item style-1 list-group-label">Services</li>
									<li class="list-group-item style-1"><a href="buy-online.php">Buy Online <span class="badge">New!</span></a></li>
									<li class="list-group-item style-1"><a href="#">Blog</a></li>
								</ul>    	
							</div>
						</div>
						
						<div class="row">
							<div class="col-sm-4 col-sm-offset-4 pad-v text-center">
								<img alt="chateau" src="images/logo-1x.png" class="img-responsive" srcset="images/logo-1x.png 1x, images/logo-2x.png 2x">
							</div>
						</div>
						
					</div>
                </footer>
                
            </div>
            <!-- /#main-row -->
        </div>
        <!-- /#main-container -->
        
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="src/js/jquery.swipebox.min.js"></script>
        <script type="text/javascript" src="src/js/jquery.stellar.js"></script>
        <script type="text/javascript" src="src/js/swiper.jquery.min.js"></script>
        <script type="text/javascript" src="src/js/jquery.waypoints.min.js"></script>
        <script type="text/javascript" src="src/js/sticky.js"></script>
        <script type="text/javascript" src="src/js/isotope.pkgd.min.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript" src="src/js/winemaker-theme.js"></script>
        <script type="text/javascript">
        	var map;
        	
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                	// Disable mouse scroll
                	scrollwheel: false,
                	
                    // How zoomed in you want the map to start at (always required)
                    zoom: 11,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(38.499012, -122.423551),

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"road","stylers":[{"hue":"#5e00ff"},{"saturation":-79}]},{"featureType":"poi","stylers":[{"saturation":-78},{"hue":"#6600ff"},{"lightness":-47},{"visibility":"off"}]},{"featureType":"road.local","stylers":[{"lightness":22}]},{"featureType":"landscape","stylers":[{"hue":"#6600ff"},{"saturation":-11}]},{},{},{"featureType":"water","stylers":[{"saturation":-65},{"hue":"#1900ff"},{"lightness":8}]},{"featureType":"road.local","stylers":[{"weight":1.3},{"lightness":30}]},{"featureType":"transit","stylers":[{"visibility":"simplified"},{"hue":"#5e00ff"},{"saturation":-16}]},{"featureType":"transit.line","stylers":[{"saturation":-72}]},{}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(38.499012, -122.423551),
                    map: map,
                    title: 'Snazzy!'
                });
            }
            
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
            
            // Keep the map centered when resize
			google.maps.event.addDomListener(window, 'resize', function() {
			var center = map.getCenter();
			google.maps.event.trigger(map, 'resize');
			map.setCenter(center); 
			});            
			
        </script>
	</body>

<!-- Mirrored from www.directdesign.it/demos/chateau/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Mar 2018 10:20:15 GMT -->
</html>