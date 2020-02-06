<?php
include("includes/connect_db.php");
$req = $bdd->query("SELECT * FROM recette");
$donnees = $req->fetch();
 ?>
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from www.directdesign.it/demos/chateau/blog-standard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Mar 2018 10:21:49 GMT -->
<head>
        <title>recette</title>
        
        <!-- meta -->
        <meta charset="utf-8">
        <meta content="" name="description">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
        <link rel="icon" type="image/png" href="images/icon.png" />
        
        <!-- css -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="src/css/font-awesome.css" rel="stylesheet">
        <link href="src/css/animate.css" rel="stylesheet">
        <link href="src/css/swipebox.css" rel="stylesheet">
        <link href="src/css/swiper.min.css" rel="stylesheet">
        <link href="src/css/winemaker-theme.css" rel="stylesheet">
        <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css'>
        <link href="src/css/style.css" rel="stylesheet">
        
        <!-- google fonts -->
        <link href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Merriweather:300,400,700,900,900italic,700italic,400italic,300italic" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
        
		<!-- head js -->
        <script src="src/js/modernizr-2.6.2.min.js"></script>
        <style type="text/css">
          @media (min-width:992px){
            .page-header {
                
                padding: 185px 0 !important;
                
            }

          }



        </style>
    </head>
    
    <body>
    
    	<aside id="side-nav">
    	
    		<div>

				<form class="form-inline">
					<div class="form-group has-feedback">
						<!--<label for="search-field">Chercher un produit</label>-->
						<input id="search-field" type="text" class="form-control" placeholder="Recherche...">
						<button id="search-btn" type="submit" class="btn"><span class="fa fa-search"></span></button>
					</div>
				</form>

				<!--<ul class="list-group">
					<li class="list-group-item style-1 list-group-label">About</li>
					<li class="list-group-item style-1"><a href="register.html">Register</a></li>
					<li class="list-group-item style-1"><a href="login.html">Login</a></li>
					<li class="list-group-item style-1"><a href="contact.html">Contact</a></li>
					<li class="list-group-item style-1"><a href="faq.html">FAQ</a></li>
				</ul>-->    	
		        
				<ul class="list-group">
					<li class="list-group-item style-1 list-group-label">Réseaux sociaux</li>
					<li class="list-group-item style-1"><a href="https://www.facebook.com/Fromage-Fiore-344785575533009/" target="_blank"><span class="fa fa-facebook-square"></span> Facebook</a></li>
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
				<div class="page-header" data-stellar-background-ratio="0.2" style="background-image:url(images/recettet-cover.png)">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<ol class="breadcrumb">
									<li>
										<a href="index.php">Accueil</a>
									</li>
									<li class="active">Recettes
									</li>
								</ol>
								<h1>
									Recettes
								</h1>
							</div>
						</div>
					</div>
				</div>
				<!-- /.page-header -->
				
				<section id="blog">
					<div class="container">
						<div class="row">
						
							<!-- content -->
							<div class="col-sm-8">
								<article class="entry" id="Bistecca-di-fiore-pannee">
									<a href="BISTECCA-DI-FIORE-PANNEE.php">
									<figure class="box-1">
										<a href="BISTECCA-DI-FIORE-PANNEE.php" ><img alt="slider 1" class="img-responsive" src="images/slide-1.png"></a>
									</figure>
									<div class="entry-preview clearfix">
										<!--<div class="entry-date">
											<span class="entry-day">21</span> <span class="entry-month">Jul</span>
										</div><span class="entry-category">Wine News</span>-->
										<h2>
											<a href="BISTECCA-DI-FIORE-PANNEE.php"> BISTECCA DI FIORE PANNÉE</a>
										</h2>
										<!--<p style="text-align: justify;">
											<strong>Ingrédients</strong><br>
											<div style="margin-left: 50px;text-align: justify;">250g de Bistecca Di Fiore<br>
											De la chapelure <br>
											2 oufs.<br>

											Sel et poivre du moulin <br>
											Huile végétale pour la friture.<br></div>

											<strong>Préparation</strong><br>
											<div style="margin-left: 50px;text-align: justify;">Coupez la Bistecca Di Fiore en tranche de 1cm.<br>
											Coupez ensuite les tranches de Bistecca Di Fiore en batonnets de 1cm.<br>
											Battez les oufs dans une assiette avec du sel et du poivre selon le gout.<br>
											Répartissez la chapelure dans une autre assiette.<br>

											Trempez chaque bâtonnet dans l'ouf puis égouttez pour faire tomber l'exces.<br>
											Roulez dans la chapelure Refaites l'opération une deuxieme fois.<br>

											Laissez sécher 2 minutes. Faites dorer dans l'huile chaude au fond de la poele a feu vif.<br>
											Servez aussitôt avec une salade verte, une sauce tartare ou tout simplement du ketchup.<br></div>
										</p>-->
									</div>
								</a>
								</article>
								<article class="entry" id="tiramisu">
									<a href="TIRAMISU.php">
									<figure class="box-1">
										<a href="TIRAMISU.php"><img alt="slider 2" class="img-responsive" src="images/slide-2.png"></a>
									</figure>
									<div class="entry-preview clearfix">
										<!--<div class="entry-date">
											<span class="entry-day">21</span> <span class="entry-month">Jul</span>
										</div><span class="entry-category">Wine News</span>-->
										<h2>
											<a href="TIRAMISU.php">TIRAMISU</a>
										</h2>
										<!--<p style="text-align: justify;">
											<strong>Ingrédients</strong><br>
											<div style="margin-left: 50px;text-align: justify;">500 g de Mascarpone Di Fiore<br> 
																								5 oeufs<br>
																								5 c. a s. de sucre en poudre. <br>

																								500 g de biscuit langue de chat <br>
																								300 ml de café tres fort<br>
																								1 c. a soupe de cacao en poudre.</div>

											<strong>Préparation</strong><br>
											<div style="margin-left: 50px;text-align: justify;">Fouetter les jaunes d'oeufs et le sucre jusqu'a ce que le mélange blanchisse.<br>

																								Ajouter le mascarpone et mélanger délicatement. Monter les blancs d'oeufs en neige tres ferme et incorporer au mélange.<br>

																								Tremper les biscuits langue de chat dans le café tres fort et tapisser un plat a gateau. <br>

																								Recouvrir d'une couche de mascarpone; remettre un rang de biscuits langue de chat trempés dans le café et recouvrir d'une deuxieme couche de mascarpone.<br>

																								Mettre au réfrigérateur pour au moins trois heures; servir froid, saupoudré de cacao en poudre.</div>
										</p>-->
									</div>
								   </a>
								</article>
								<!--<article class="entry">
									<figure class="box-1">
										<a href="blog-entry-alternative.html"><img alt="chateau" class="img-responsive" src="images/slide-3.jpg"></a>
									</figure>
									<div class="entry-preview clearfix">
										<div class="entry-date">
											<span class="entry-day">7</span> <span class="entry-month">Jul</span>
										</div><span class="entry-category">Wine Tastings</span>
										<h2>
											<a href="blog-entry-alternative.html">How to correctly taste white whine</a>
										</h2>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae est velit. Morbi consequat condimentum turpis, sed placerat lacus tempus sit amet. Nulla facilisi. <a class="primary" href="blog-entry-alternative.html">Read more</a>
										</p>
									</div>
								</article>-->
								
								<nav class="text-center">
								  <ul class="pagination-product pagination">
								    <!--<li>
								      <a href="#" aria-label="Previous">
								        <span aria-hidden="true" class="fa fa-angle-left"></span>
								      </a>
								    </li>-->
								    <li class="active"><a href="">1</a></li>
								    <li><a href="recette-page-2.php">2</a></li>
								    <li><a href="recette-page-3.php">3</a></li>
								    <!--<li><a href="#">4</a></li>
								    <li><a href="#">5</a></li>-->
								    <li>
								      <a href="recette-page-2.php" aria-label="Next">
								        <span aria-hidden="true" class="fa fa-angle-right"></span>
								      </a>
								    </li>
								  </ul>
								</nav>		
							</div>
							<!-- /content -->
							
							<!-- sidebar -->
							<div class="col-sm-4">
								


								<ul class="list-group widget">
									<li class="list-group-item style-2 list-group-label" style="color: #009246;">Nos fromages</li>
                                    <li class="list-group-item style-2"><a href="products.php#filter=*">Tous les produits</a></li>
                                    <li class="list-group-item style-2"><a href="products.php#filter=.rape">Râpé</a></li>
                                    <li class="list-group-item style-2"><a href="products.php#filter=.pate-presse">Pâte pressé</a></li>
                                    <li class="list-group-item style-2"><a href="products.php#filter=.pate-file">Pâte filé</a></li>
                                    <li class="list-group-item style-2"><a href="products.php#filter=.pate-molle">Pâte molle</a></li>
                                    <li class="list-group-item style-2"><a href="products.php#filter=.pate-fraiche">Pâte fraîche</a></li>
                                    <li class="list-group-item style-2"><a href="products.php#filter=.a-base-alimentaire">A base alimentaire</a></li>

								</ul>    	
							
							
								<!--<ul class="list-group widget list-icon-left">
									<li class="list-group-item style-2 list-group-label" style="color: #fff5ee;
    											text-shadow: #000000 1px 1px, #000000 -1px 1px, #000000 -1px -1px, #000000 1px -1px;">Présentation 
									</li>
									<li class="list-group-item style-2">
										<a href="qui-somme-nous.html"> Qui sommes-nous ?</a>
									</li>
									<li class="list-group-item style-2">
										<a href="historique.html">Historique</a>
									</li>
									<li class="list-group-item style-2">
										<a href="le-saviez-vous.html">  Le saviez-vous ?</a>
									</li>
									<li class="list-group-item style-2">
										<a href="gallery.html"> Gallery</a>
									</li>
								</ul>-->
								
								<ul class="list-group widget list-icon-left no-mar-v">
									<li class="list-group-item style-2 list-group-label" style="color: #CE2B37">Recettes
									</li>
								</ul>
								
								<div class="row row-small-gutter">
									<div class="col-xs-4 col-small-gutter">
										<a href="BISTECCA-DI-FIORE-PANNEE.php"><img alt="BISTECCA-DI-FIORE-PANNEE" class="img-responsive img-thumbnail" src="images/galerie/slide-1-blog.png"/></a>
									</div>
									<div class="col-xs-4 col-small-gutter">
										<a href="TIRAMISU.php"><img alt="TIRAMISU" class="img-responsive img-thumbnail" src="images/galerie/slide-2-blog.png"/></a>
									</div>
									<div class="col-xs-4 col-small-gutter">
										<a href="TORTAFIORE.php"><img alt="TORTAFIORE" class="img-responsive img-thumbnail" src="images/galerie/slide-3-blog.png"/></a>
									</div>
									<div class="col-xs-4 col-small-gutter">
										<a href="CREME-DE-STRACCHINO.php"><img alt="CREME-DE-STRACCHINO" class="img-responsive img-thumbnail" src="images/galerie/slide-4-blog.png"/></a>
									</div>
									<div class="col-xs-4 col-small-gutter">
										<a href="FIORE-DOREES.php"><img alt="FIORE-DOREES" class="img-responsive img-thumbnail" src="images/galerie/slide-5-blog.png"/></a>
									</div>
									<div class="col-xs-4 col-small-gutter">
										<a href="GRATIN-BASTARDO.php"><img alt="GRATIN-BASTARDO" class="img-responsive img-thumbnail" src="images/galerie/slide-6-blog.png"/></a>
									</div>
									
									
								</div>
							</div>
							<!-- /sidebar -->
							
						</div>
					</div>
				</section>
				
				<?php include("includes/footer.php") ?>
				
			</div><!-- /#main-row -->
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
        <!--<script>
			$(document).ready(function(){
		  $('a[href*=#]').click(function() {
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
		    && location.hostname == this.hostname) {
		      var $target = $(this.hash);
		      $target = $target.length && $target
		      || $('[name=' + this.hash.slice(1) +']');
		      if ($target.length) {
		        var targetOffset = $target.offset().top;
		        $('html,body')
		        .animate({scrollTop: targetOffset}, 1000);
		       return false;
		      }
		    }
		  });
		}); 
		</script>-->
        
	</body>

<!-- Mirrored from www.directdesign.it/demos/chateau/blog-standard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Mar 2018 10:22:28 GMT -->
</html>