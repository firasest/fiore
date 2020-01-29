<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from www.directdesign.it/demos/chateau/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Mar 2018 10:22:56 GMT -->
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
					<li class="list-group-item style-1"><a href="register.html">Register</a></li>
					<li class="list-group-item style-1"><a href="login.html">Login</a></li>
					<li class="list-group-item style-1"><a href="contact.html">Contact</a></li>
					<li class="list-group-item style-1"><a href="faq.html">FAQ</a></li>
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
                                <a class="navbar-brand hidden-xs hidden-sm" href="index-2.html"><img alt="chateau" src="images/logo-1x.png" srcset="images/logo-1x.png 1x, images/logo-2x.png 2x"></a>
                                <a class="navbar-brand hidden-lg hidden-md" href="index-2.html"><img alt="chateau" src="images/logo-mobile-1x.png" srcset="images/logo-mobile-1x.png 1x, images/logo-mobile-2x.png 2x"></a>
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
                                            <li><a href="products.html#filter=*">All Products</a></li>
                                            <li><a href="products.html#filter=.red-wines">Red Wines</a></li>
                                            <li><a href="products.html#filter=.white-wines">White Wines</a></li>
                                            <li><a href="products.html#filter=.rose-wines">Rosé Wines</a></li>
                                            <li><a href="products.html#filter=.food-specialties">Food Specialties</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown active">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">About <span class="fa fa-angle-down"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="who-we-are.html">Who we are</a></li>
                                            <li><a href="our-history.html">Our History</a></li>
                                            <li><a href="the-vineyard.html">The Vineyard</a></li>
                                            <li><a href="gallery.html">Gallery</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                    	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Blog <span class="fa fa-angle-down"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog-standard.html">Blog Standard</a></li>
                                            <li><a href="blog-masonry.html">Blog Masonry</a></li>
                                            <li><a href="blog-entry.html">Blog Entry 1</a></li>
                                            <li><a href="blog-entry-alternative.html">Blog Entry 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="elements.html">Elements</a></li>
                                    <li><a href="buy-online.html">Buy Online <span class="badge">New</span></a></li>
                                </ul>

                                <ul id="tool-nav" class="nav navbar-nav hidden-xs hidden-sm">
                                    <li><a href="cart.html"><span class="fa fa-shopping-cart"></span></a></li>
                                    <li><a href="#" class="toggle-side-menu"><span class="fa fa-ellipsis-v"></span></a></li>
                                </ul>
							
                            </div>
                            <!-- /.navbar-collapse -->

	                        <!-- /.container -->
                        </div>
                        <!-- /.container-fluid -->
                    </nav>
                </header>

				<div class="container">
				    <div class="row">
				    	<div class="col-sm-12">
				    	
				    		<section id="shopping-cart">
				    		
				     		<h2>Your order</h2>
				  				<table id="cart" class="table table-hover table-condensed">
				    				<thead>
										<tr>
											<th style="width:50%">Product</th>
											<th style="width:10%">Price</th>
											<th style="width:8%">Quantity</th>
											<th style="width:22%" class="text-center">Subtotal</th>
											<th style="width:10%"></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td data-th="Product">
												<div class="row">
													<div class="col-sm-12">
														<a href="product-sheet.html"><img src="images/rose-wine-1.png" alt="chateau" class="pull-left product-thumb"/></a>
														<h4 class="nomargin">Pinot Noir 2015</h4>
														<p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
													</div>
												</div>
											</td>
											<td data-th="Price">$29.95</td>
											<td data-th="Quantity">
												<input type="number" class="form-control text-center" value="2">
											</td>
											<td data-th="Subtotal" class="text-center">$59.90</td>
											<td class="actions" data-th="">
												<button class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
												<button class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>								
											</td>
										</tr>
										<tr>
											<td data-th="Product">
												<div class="row">
													<div class="col-sm-12">
														<a href="product-sheet.html"><img src="images/white-wine-1.png" alt="chateau" class="pull-left product-thumb"/></a>
														<h4 class="nomargin">Chardonnay 2013</h4>
														<p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
													</div>
												</div>
											</td>
											<td data-th="Price">$39.95</td>
											<td data-th="Quantity">
												<input type="number" class="form-control text-center" value="1">
											</td>
											<td data-th="Subtotal" class="text-center">$39.95</td>
											<td class="actions" data-th="">
												<button class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
												<button class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>								
											</td>
										</tr>
									</tbody>
									<tfoot>
										<tr class="visible-xs">
											<td class="text-center"><strong>Total $99.85</strong></td>
										</tr>
										<tr>
											<td><a href="#" class="btn btn-default"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
											<td colspan="2" class="hidden-xs"></td>
											<td class="hidden-xs text-center"><strong>Total $99.85</strong></td>
											<td><a href="login.html" class="btn btn-primary btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
										</tr>
									</tfoot>
								</table>
				
							</section>
				    	</div>
				    </div>
				</div>	                    

                <footer>
					<div class="container">
						<div class="row">
							<div class="col-sm-3">
								<ul class="list-group">
									<li class="list-group-item style-1 list-group-label">Products</li>
                                    <li class="list-group-item style-1"><a href="products.html#filter=*">All Products</a></li>
                                    <li class="list-group-item style-1"><a href="products.html#filter=.red-wines">Red Wines</a></li>
                                    <li class="list-group-item style-1"><a href="products.html#filter=.white-wines">White Wines</a></li>
                                    <li class="list-group-item style-1"><a href="products.html#filter=.rose-wines">Rosé Wines</a></li>
                                    <li class="list-group-item style-1"><a href="products.html#filter=.food-specialties">Food Specialties</a></li>
								</ul>    	
							</div>
							<div class="col-sm-3">
								<ul class="list-group">
									<li class="list-group-item style-1 list-group-label">About</li>
                                    <li class="list-group-item style-1"><a href="who-we-are.html">Who we are</a></li>
                                    <li class="list-group-item style-1"><a href="our-history.html">Our History</a></li>
                                    <li class="list-group-item style-1"><a href="the-vineyard.html">The Vineyard</a></li>
                                    <li class="list-group-item style-1"><a href="gallery.html">Gallery</a></li>
								</ul>    	
							</div>
							<div class="col-sm-3">
								<ul class="list-group">
									<li class="list-group-item style-1 list-group-label">Clients</li>
									<li class="list-group-item style-1"><a href="register.html">Register</a></li>
									<li class="list-group-item style-1"><a href="login.html">Login</a></li>
									<li class="list-group-item style-1"><a href="contact.html">Contact</a></li>
									<li class="list-group-item style-1"><a href="faq.html">FAQ</a></li>
								</ul>    	
							</div>
							<div class="col-sm-3">
								<ul class="list-group">
									<li class="list-group-item style-1 list-group-label">Services</li>
									<li class="list-group-item style-1"><a href="buy-online.html">Buy Online <span class="badge">New!</span></a></li>
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
                <footer class="credits">
					<div class="container">
						<div class="row">
							<div class="col-sm-6">
								Chateau Theme Design by <a href="http://www.directdesign.it/">Direct Design</a> / <a href="http://www.andreapilutti.com/">Andrea Pilutti</a>
							</div>
							<div class="col-sm-6 text-right social">
								<a href="#"><span class="fa fa-facebook-square"></span></a>
								<a href="#"><span class="fa fa-twitter-square"></span></a>
								<a href="#"><span class="fa fa-google-plus-square"></span></a>
								<a href="#"><span class="fa fa-pinterest-square"></span></a>
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
		;( function( $ ) {
		
			$( '.swipebox' ).swipebox();
		
		} )( jQuery );
		</script>        
	</body>

<!-- Mirrored from www.directdesign.it/demos/chateau/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Mar 2018 10:22:56 GMT -->
</html>