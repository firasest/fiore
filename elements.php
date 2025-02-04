<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from www.directdesign.it/demos/chateau/elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Mar 2018 10:22:56 GMT -->
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
            
            <?php include("includes/header.php") ?>

				<!-- .page-header -->
				<div class="page-header" style="background-image:url(images/title-8.jpg)" data-stellar-background-ratio="0.2">
			        <div class="container">
			            <div class="row">
			            	<div class="col-sm-12">
								<ol class="breadcrumb">
								  <li><a href="index-2.php">Home</a></li>
								  <li class="active">Elements</li>
								</ol>
							  <h1>Html Elements</h1>
			            	</div>
						</div>    
		            </div>
		        </div>
				<!-- /.page-header -->

				<!-- #secondary-nav-bar -->
				<nav id="secondary-nav-bar" class="navbar navbar-default">
				  <div class="container">
				    <ul id="secondary-nav" class="nav navbar-nav">
	                    <li><a href="#sec-typo">Typography</a></li>
	                    <li><a href="#sec-buttons">Buttons</a></li>
	                    <li><a href="#sec-tabs">Tabs & Accordions</a></li>
	                    <li><a href="#sec-sliders">Sliders & Swipers</a></li>
	                    <li><a href="#sec-lightbox">Lightboxes</a></li>
	                    <li><a href="#sec-form">Form elments</a></li>
	                    <li><a href="#sec-icons">Icons</a></li>
				    </ul>
				  </div>
				</nav>
				<!-- /#secondary-nav-bar -->

				<div id="html-elements">
            
					<section id="sec-typo">
		                <div class="container">
			                <div class="row">
			                	<div class="col-sm-12">
			                		<h2>Typography</h2>
									<h1>h1. heading</h1>
									<h2>h2. heading</h2>
									<h3>h3. heading</h3>
									<h4>h4. heading</h4>
									<h5>h5. heading</h5>
									<h6>h6. heading</h6>	
									<p>
									Anim pariatur cliche <strong>strong text</strong>, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod <em>emphasized text</em>. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
									</p>
									<blockquote>
									Blockquote brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
									</blockquote>
			                	</div>
			                </div>
		                </div>
					</section>
	                
					<section id="sec-buttons" class="section-bg-light-gray">
		                <div class="container">
			                <div class="row">
			                	<div class="col-sm-12">
			                		<h2>Buttons</h2>
			                		
			                		<div style="margin-top:25px;">
			                		
										<!-- Standard button -->
										<button type="button" class="btn btn-xs btn-default">Default Button</button>
										
										<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
										<button type="button" class="btn btn-xs btn-primary">Primary Button</button>
										
										<!-- Indicates a successful or positive action -->
										<button type="button" class="btn btn-xs btn-success">Success Button</button>
										
										<!-- Contextual button for informational alert messages -->
										<button type="button" class="btn btn-xs btn-info">Info Button</button>
										
										<!-- Indicates caution should be taken with this action -->
										<button type="button" class="btn btn-xs btn-warning">Warning Button</button>
										
										<!-- Indicates a dangerous or potentially negative action -->
										<button type="button" class="btn btn-xs btn-danger">Danger Button</button>
										
										<!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
										<button type="button" class="btn btn-xs btn-link">Link Button</button>
			                		
			                		</div>

			                		<div style="margin-top:25px;">
			                		
										<!-- Standard button -->
										<button type="button" class="btn btn-default">Default Button</button>
										
										<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
										<button type="button" class="btn btn-primary">Primary Button</button>
										
										<!-- Indicates a successful or positive action -->
										<button type="button" class="btn btn-success">Success Button</button>
										
										<!-- Contextual button for informational alert messages -->
										<button type="button" class="btn btn-info">Info Button</button>
										
										<!-- Indicates caution should be taken with this action -->
										<button type="button" class="btn btn-warning">Warning Button</button>
										
										<!-- Indicates a dangerous or potentially negative action -->
										<button type="button" class="btn btn-danger">Danger Button</button>
										
										<!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
										<button type="button" class="btn btn-link">Link Button</button>
			                		
			                		</div>
			                		
			                		<div style="margin-top:25px;">
			                		
										<!-- Standard button -->
										<button type="button" class="btn btn-lg btn-style-1 btn-default">Default Button</button>
										
										<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
										<button type="button" class="btn btn-lg btn-style-1 btn-primary">Primary Button</button>
										
										<!-- Indicates a successful or positive action -->
										<button type="button" class="btn btn-lg btn-style-1 btn-success">Success Button</button>
										
										<!-- Contextual button for informational alert messages -->
										<button type="button" class="btn btn-lg btn-style-1 btn-info">Info Button</button>
										
										<!-- Indicates caution should be taken with this action -->
										<button type="button" class="btn btn-lg btn-style-1 btn-warning">Warning Button</button>
										
										<!-- Indicates a dangerous or potentially negative action -->
										<button type="button" class="btn btn-lg btn-style-1 btn-danger">Danger Button</button>
										
										<!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
										<button type="button" class="btn btn-lg btn-link">Link Button</button>
			                		
			                		</div>
			                		
			                		<div style="margin-top:25px;">
										<button class="btn btn-primary btn-lg btn-animated btn-style-1" type="submit">
										<span class="btn-label">Animated icon</span>
										<span class="btn-icon fa fa-user"></span>
										</button>			                		
			                		</div>
			                		
			                	</div>
			                </div>
		                </div>
					</section>
	                
					<section id="sec-tabs">
		                <div class="container">
			                <div class="row">
			                	<div class="col-sm-12">
			                		<h2>Tabs & Accordions</h2>
			                		
			                		<div style="margin-top:25px;">
			                		
								  <!-- Nav tabs -->
								  <ul class="nav nav-tabs" role="tablist">
								    <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Tab 1</a></li>
								    <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Tab 2</a></li>
								    <li role="presentation"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Tab 3</a></li>
								  </ul>
								
								  <!-- Tab panes -->
								  <div class="tab-content">
								    <div role="tabpanel" class="tab-pane active" id="tab1">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam semper lorem urna, vitae sodales nisl pretium nec. Ut sed lacus sagittis, commodo tortor eu, sodales erat. Nullam non est porttitor, posuere lacus sed, mattis leo. Morbi malesuada orci est. Duis vel fringilla sem. Morbi pharetra tellus arcu, nec vestibulum elit ultricies eget. Proin accumsan bibendum nibh quis posuere. Maecenas vitae magna egestas, sollicitudin magna non, imperdiet dolor. Phasellus condimentum ex a ullamcorper finibus.</p>
								    </div>
								    <div role="tabpanel" class="tab-pane" id="tab2">
									<p>Nullam non est porttitor, posuere lacus sed, mattis leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam semper lorem urna, vitae sodales nisl pretium nec. Ut sed lacus sagittis, commodo tortor eu, sodales erat. Morbi malesuada orci est. Duis vel fringilla sem. Morbi pharetra tellus arcu, nec vestibulum elit ultricies eget. Proin accumsan bibendum nibh quis posuere. Maecenas vitae magna egestas, sollicitudin magna non, imperdiet dolor. Phasellus condimentum ex a ullamcorper finibus.</p>
								    </div>
								    <div role="tabpanel" class="tab-pane" id="tab3">
									<p>Ut sed lacus sagittis, commodo tortor eu, sodales erat. Nullam semper lorem urna, vitae sodales nisl pretium nec. Nullam non est porttitor, posuere lacus sed, mattis leo. Morbi malesuada orci est. Duis vel fringilla sem. Morbi pharetra tellus arcu, nec vestibulum elit ultricies eget. Proin accumsan bibendum nibh quis posuere. Maecenas vitae magna egestas, sollicitudin magna non, imperdiet dolor. Phasellus condimentum ex a ullamcorper finibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
								    </div>
								  </div>
			                		
			                		</div>
			                		
			                		<div>

										<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
										  <div class="panel panel-default">
										    <div class="panel-heading" role="tab" id="headingOne">
										      <h4 class="panel-title">
										        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
										          <span class="fa fa-arrow-right"></span>Panel 1
										        </a>
										      </h4>
										    </div>
										    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
										      <p class="panel-body">
										        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										      </p>
										    </div>
										  </div>
										  <div class="panel panel-default">
										    <div class="panel-heading" role="tab" id="headingTwo">
										      <h4 class="panel-title">
										        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										          <span class="fa fa-arrow-right"></span>Panel 2
										        </a>
										      </h4>
										    </div>
										    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
										      <p class="panel-body">
										        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										      </p>
										    </div>
										  </div>
										  <div class="panel panel-default">
										    <div class="panel-heading" role="tab" id="headingThree">
										      <h4 class="panel-title">
										        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										          <span class="fa fa-arrow-right"></span>Panel 3
										        </a>
										      </h4>
										    </div>
										    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
										      <p class="panel-body">
										        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
										      </p>
										    </div>
										  </div>
										</div>							
			                		
			                		</div>
			                		
			                	</div>
			                </div>
		                </div>
					</section>
	                
					<section id="sec-sliders" class="section-bg-light-gray">
		                <div class="container">
			                <div class="row">
			                	<div class="col-sm-12">
			                		<h2>Sliders & Swipers</h2>
			                		
										<div id="swiper-demo" class="swiper-container" style="margin-top:25px;">

				                            <div class="swiper-wrapper">

				                                <div class="swiper-slide" id="slide-1">
													<img alt="chateau" class="img-responsive" src="http://placehold.it/1200x600" width="1200" height="600"/>
				                                </div>
				
				                                <div class="swiper-slide" id="slide-2">
													<img alt="chateau" class="img-responsive" src="http://placehold.it/1200x600" width="1200" height="600"/>
				                                </div>
				
				                                <div class="swiper-slide" id="slide-3">
													<img alt="chateau" class="img-responsive" src="http://placehold.it/1200x600" width="1200" height="600"/>
				                                </div>
				
				                                <div class="swiper-slide" id="slide-4">
													<img alt="chateau" class="img-responsive" src="http://placehold.it/1200x600" width="1200" height="600"/>
				                                </div>
				
				                                <div class="swiper-slide" id="slide-5">
													<img alt="chateau" class="img-responsive" src="http://placehold.it/1200x600" width="1200" height="600"/>
				                                </div>
				
				                                <div class="swiper-slide" id="slide-6">
													<img alt="chateau" class="img-responsive" src="http://placehold.it/1200x600" width="1200" height="600"/>
				                                </div>
				                                
				                            </div>

				                            <div class="swiper-pagination"></div>
				                            <div class="swiper-button-prev"></div>
				                            <div class="swiper-button-next"></div>
				                        </div>
                        			                		
			                	</div>
			                </div>
		                </div>
					</section>
					
					<section id="sec-lightbox">
		                <div class="container">
			                <div class="row">
			                	<div class="col-sm-12">
			                	<h2>Lightboxes</h2>
			                		</div>
			                	<div class="col-sm-4 mar-v">
									<a class="swipebox" href="http://placehold.it/800x800"><img class="img-responsive" alt="chateau" src="http://placehold.it/400x400" /></a>
			                	</div>
			                	<div class="col-sm-4 mar-v">
									<a class="swipebox" href="http://placehold.it/800x800"><img class="img-responsive" alt="chateau" src="http://placehold.it/400x400" /></a>
			                	</div>
			                	<div class="col-sm-4 mar-v">
									<a class="swipebox" href="http://placehold.it/800x800"><img class="img-responsive" alt="chateau" src="http://placehold.it/400x400" /></a>
			                	</div>
			                </div>
		                </div>
					</section>
	                
					<section id="sec-form" class="section-bg-light-gray">
		                <div class="container">
			                <div class="row">
			                	<div class="col-sm-12">
			                		<h2>Form elements</h2>
			                		
			                		
									<form>
									  <div class="form-group">
									    <label for="InputEmail">Email</label>
									    <input type="email" class="form-control" id="InputEmail" placeholder="Email">
									  </div>
									  <div class="form-group">
									    <label for="InputPassword1">Password</label>
									    <input type="password" class="form-control" id="InputPassword1" placeholder="Password">
									  </div>
									  <div class="form-group">
									    <label for="InputText">Text</label>
									    <input type="password" class="form-control" id="InputText" placeholder="Text">
									  </div>
									  <div class="form-group">
									    <label for="InputFile">File input</label>
									    <input type="file" id="InputFile">
									    <p class="help-block">Block-level help text.</p>
									  </div>
									  <div class="form-group">
									    <label for="InputFile">Textarea</label>
									    <textarea class="form-control" rows="10"></textarea>
									    <p class="help-block">Block-level help text.</p>
									  </div>
									  <div class="checkbox">
									    <label>
									      <input type="checkbox"> Check 1
									    </label>
									  </div>
									  <div class="checkbox">
									    <label>
									      <input type="checkbox"> Check 2
									    </label>
									  </div>
									  <div class="checkbox">
									    <label>
									      <input type="checkbox"> Check 3
									    </label>
									  </div>
									  <button class="btn pull-right btn-primary btn-lg btn-animated btn-style-1" type="submit">
										<span class="btn-label">Submit</span>
										<span class="btn-icon fa fa-arrow-circle-right"></span>
									  </button>			                		
									</form>

			                		
			                	</div>
			                </div>
		                </div>
					</section>
	                
					<section id="sec-icons">
		                <div class="container">
			                <div class="row">
			                	<div class="col-sm-12">
			                		<h2>Font Awesome Icons</h2>
			                	</div>	
			                		

    

    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-adjust
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-adn
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-align-center
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-align-justify
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-align-left
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-align-right
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-ambulance
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-anchor
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-android
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-angellist
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-angle-double-down
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-angle-double-left
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-angle-double-right
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-angle-double-up
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-angle-down
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-angle-left
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-angle-right
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-angle-up
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-apple
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-archive
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-area-chart
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-arrow-circle-down
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-arrow-circle-left
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-arrow-circle-o-down
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-arrow-circle-o-left
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-arrow-circle-o-right
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-arrow-circle-o-up
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-arrow-circle-right
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-arrow-circle-up
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-arrow-down
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-arrow-left
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-arrow-right
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-arrow-up
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-arrows
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-arrows-alt
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-arrows-h
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-arrows-v
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-asterisk
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-at
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-automobile
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-backward
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-ban
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-bank
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-bar-chart
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-bar-chart-o
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-barcode
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-bars
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-bed
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-beer
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-behance
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-behance-square
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-bell
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-bell-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-bell-slash
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-bell-slash-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-bicycle
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-binoculars
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-birthday-cake
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-bitbucket
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-bitbucket-square
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-bitcoin
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-bold
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-bolt
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-bomb
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-book
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-bookmark
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-bookmark-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-briefcase
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-btc
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-bug
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-building
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-building-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-bullhorn
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-bullseye
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-bus
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-buysellads
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-cab
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-calculator
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-calendar
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-calendar-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-camera
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-camera-retro
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-car
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-caret-down
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-caret-left
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-caret-right
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-caret-square-o-down
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-caret-square-o-left
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-caret-square-o-right
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-caret-square-o-up
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-caret-up
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-cart-arrow-down
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-cart-plus
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-cc
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-cc-amex
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-cc-discover
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-cc-mastercard
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-cc-paypal
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-cc-stripe
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-cc-visa
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-certificate
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-chain
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-chain-broken
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-check
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-check-circle
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-check-circle-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-check-square
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-check-square-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-chevron-circle-down
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-chevron-circle-left
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-chevron-circle-right
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-chevron-circle-up
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-chevron-down
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-chevron-left
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-chevron-right
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-chevron-up
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-child
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-circle
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-circle-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-circle-o-notch
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-circle-thin
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-clipboard
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-clock-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-close
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-cloud
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-cloud-download
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-cloud-upload
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-cny
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-code
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-code-fork
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-codepen
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-coffee
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-cog
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-cogs
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-columns
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-comment
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-comment-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-comments
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-comments-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-compass
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-compress
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-connectdevelop
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-copy
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-copyright
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-credit-card
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-crop
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-crosshairs
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-css3
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-cube
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-cubes
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-cut
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-cutlery
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-dashboard
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-dashcube
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-database
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-dedent
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-delicious
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-desktop
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-deviantart
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-diamond
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-digg
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-dollar
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-dot-circle-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-download
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-dribbble
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-dropbox
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-drupal
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-edit
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-eject
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-ellipsis-h
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-ellipsis-v
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-empire
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-envelope
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-envelope-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-envelope-square
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-eraser
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-eur
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-euro
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-exchange
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-exclamation
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-exclamation-circle
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-exclamation-triangle
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-expand
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-external-link
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-external-link-square
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-eye
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-eye-slash
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-eyedropper
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-facebook
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-facebook-f
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-facebook-official
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-facebook-square
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-fast-backward
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-fast-forward
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-fax
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-female
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-fighter-jet
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-file
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-file-archive-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-file-audio-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-file-code-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-file-excel-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-file-image-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-file-movie-o
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-file-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-file-pdf-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-file-photo-o
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-file-picture-o
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-file-powerpoint-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-file-sound-o
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-file-text
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-file-text-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-file-video-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-file-word-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-file-zip-o
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-files-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-film
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-filter
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-fire
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-fire-extinguisher
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-flag
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-flag-checkered
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-flag-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-flash
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-flask
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-flickr
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-floppy-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-folder
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-folder-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-folder-open
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-folder-open-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-font
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-forumbee
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-forward
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-foursquare
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-frown-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-futbol-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-gamepad
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-gavel
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-gbp
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-ge
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-gear
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-gears
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-genderless
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-gift
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-git
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-git-square
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-github
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-github-alt
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-github-square
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-gittip
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-glass
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-globe
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-google
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-google-plus
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-google-plus-square
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-google-wallet
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-graduation-cap
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-gratipay
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-group
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-h-square
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-hacker-news
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-hand-o-down
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-hand-o-left
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-hand-o-right
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-hand-o-up
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-hdd-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-header
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-headphones
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-heart
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-heart-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-heartbeat
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-history
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-home
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-hospital-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-hotel
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-html5
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-ils
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-image
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-inbox
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-indent
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-info
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-info-circle
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-inr
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-instagram
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-institution
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-ioxhost
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-italic
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-joomla
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-jpy
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-jsfiddle
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-key
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-keyboard-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-krw
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-language
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-laptop
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-lastfm
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-lastfm-square
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-leaf
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-leanpub
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-legal
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-lemon-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-level-down
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-level-up
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-life-bouy
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-life-buoy
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-life-ring
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-life-saver
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-lightbulb-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-line-chart
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-link
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-linkedin
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-linkedin-square
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-linux
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-list
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-list-alt
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-list-ol
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-list-ul
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-location-arrow
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-lock
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-long-arrow-down
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-long-arrow-left
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-long-arrow-right
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-long-arrow-up
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-magic
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-magnet
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-mail-forward
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-mail-reply
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-mail-reply-all
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-male
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-map-marker
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-mars
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-mars-double
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-mars-stroke
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-mars-stroke-h
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-mars-stroke-v
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-maxcdn
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-meanpath
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-medium
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-medkit
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-meh-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-mercury
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-microphone
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-microphone-slash
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-minus
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-minus-circle
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-minus-square
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-minus-square-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-mobile
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-mobile-phone
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-money
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-moon-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-mortar-board
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-motorcycle
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-music
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-navicon
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-neuter
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-newspaper-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-openid
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-outdent
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-pagelines
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-paint-brush
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-paper-plane
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-paper-plane-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-paperclip
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-paragraph
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-paste
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-pause
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-paw
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-paypal
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-pencil
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-pencil-square
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-pencil-square-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-phone
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-phone-square
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-photo
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-picture-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-pie-chart
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-pied-piper
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-pied-piper-alt
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-pinterest
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-pinterest-p
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-pinterest-square
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-plane
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-play
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-play-circle
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-play-circle-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-plug
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-plus
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-plus-circle
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-plus-square
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-plus-square-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-power-off
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-print
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-puzzle-piece
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-qq
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-qrcode
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-question
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-question-circle
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-quote-left
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-quote-right
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-ra
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-random
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-rebel
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-recycle
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-reddit
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-reddit-square
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-refresh
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-remove
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-renren
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-reorder
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-repeat
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-reply
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-reply-all
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-retweet
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-rmb
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-road
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-rocket
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-rotate-left
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-rotate-right
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-rouble
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-rss
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-rss-square
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-rub
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-ruble
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-rupee
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-save
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-scissors
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-search
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-search-minus
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-search-plus
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-sellsy
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-send
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-send-o
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-server
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-share
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-share-alt
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-share-alt-square
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-share-square
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-share-square-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-shekel
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-sheqel
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-shield
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-ship
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-shirtsinbulk
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-shopping-cart
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-sign-in
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-sign-out
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-signal
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-simplybuilt
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-sitemap
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-skyatlas
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-skype
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-slack
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-sliders
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-slideshare
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-smile-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-soccer-ball-o
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-sort
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-sort-alpha-asc
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-sort-alpha-desc
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-sort-amount-asc
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-sort-amount-desc
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-sort-asc
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-sort-desc
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-sort-down
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-sort-numeric-asc
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-sort-numeric-desc
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-sort-up
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-soundcloud
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-space-shuttle
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-spinner
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-spoon
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-spotify
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-square
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-square-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-stack-exchange
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-stack-overflow
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-star
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-star-half
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-star-half-empty
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-star-half-full
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-star-half-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-star-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-steam
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-steam-square
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-step-backward
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-step-forward
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-stethoscope
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-stop
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-street-view
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-strikethrough
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-stumbleupon
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-stumbleupon-circle
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-subscript
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-subway
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-suitcase
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-sun-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-superscript
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-support
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-table
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-tablet
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-tachometer
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-tag
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-tags
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-tasks
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-taxi
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-tencent-weibo
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-terminal
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-text-height
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-text-width
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-th
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-th-large
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-th-list
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-thumb-tack
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-thumbs-down
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-thumbs-o-down
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-thumbs-o-up
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-thumbs-up
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-ticket
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-times
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-times-circle
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-times-circle-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-tint
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-toggle-down
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-toggle-left
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-toggle-off
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-toggle-on
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-toggle-right
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-toggle-up
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-train
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-transgender
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-transgender-alt
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-trash
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-trash-o
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-tree
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-trello
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-trophy
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-truck
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-try
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-tty
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-tumblr
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-tumblr-square
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-turkish-lira
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-twitch
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-twitter
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-twitter-square
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-umbrella
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-underline
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-undo
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-university
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-unlink
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-unlock
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-unlock-alt
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-unsorted
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-upload
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-usd
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-user
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-user-md
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-user-plus
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-user-secret
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-user-times
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-users
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-venus
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-venus-double
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-venus-mars
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-viacoin
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-video-camera
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-vimeo-square
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-vine
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-vk
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-volume-down
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-volume-off
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-volume-up
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-warning
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-wechat
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-weibo
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-weixin
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-whatsapp
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-wheelchair
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-wifi
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-windows
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-won
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-wordpress
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-wrench
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-xing
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-xing-square
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-yahoo
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-yelp
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-yen
       <span class="text-muted">(alias)</span>
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-youtube
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-youtube-play
      
    </div>
    
    <div class="col-md-4 col-sm-6 col-lg-3">
      <i class="fa fa-fw"></i>
      fa-youtube-square
      
    </div>
    
  			                		
			                		
			                		
			                	</div>
		                </div>
					</section>
                
				</div>

        <?php include("includes/footer.php") ?>
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

<!-- Mirrored from www.directdesign.it/demos/chateau/elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Mar 2018 10:22:56 GMT -->
</html>