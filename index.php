<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <title>WooCommerce stylesheet | S7 Design Creative</title>

	    <!-- <link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css"> -->
	    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	    <!-- Bootstrap Core CSS -->
	    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
	    <!-- Custom CSS -->
	    <link href="assets/css/style.css" rel="stylesheet">
	</head>
	<body>
		<!-- Navigation -->
	    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	        <div class="container">
	            <!-- Brand and toggle get grouped for better mobile display -->
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <a class="navbar-brand" href="#">Woo Stylesheet</a>
	            </div>
	            <!-- Collect the nav links, forms, and other content for toggling -->
	            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                <ul class="nav navbar-nav pull-right">
	                    <!-- <li>
	                        <a href="#">About</a>
	                    </li> -->
	                    <li role="presentation" class="dropdown">
						    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Sections <span class="caret"></span>
						    </a>
						    <ul class="dropdown-menu">
						    	<label> TEXT ELEMENTS</label>
						    	<!-- <li><a href="#headings">Headings</a></li> -->
						    	<li><a href="#breadcrumbs">Breadcrumbs</a></li>
						    	<li><a href="#product">Product</a></li>
						    	<li role="separator" class="divider"></li>
						    	<label> FORMS</label>
						      	<li><a href="#buttons">Buttons</a></li>
						      	<li><a href="#inputs">Other form elements</a></li>
						      	<li role="separator" class="divider"></li>
						      	<label> TABS</label>
						      	<li><a href="#tabs">Tabs</a></li>
						      	<li><a href="#description">Description</a></li>
						      	<li><a href="#comments">Reviews</a></li>
						      	<li role="separator" class="divider"></li>
						      	<label> OTHER</label>
						      	<li><a href="#images">Images</a></li>
						      	<li><a href="#rating-stars">Rating stars</a></li>
						      	<li><a href="#tables">Tables</a></li>
						      	<li><a href="#pagination">Pagination</a></li>
						    </ul>
						</li>
	                </ul>
	            </div>
	            <!-- /.navbar-collapse -->
	        </div>
	        <!-- /.container -->
	    </nav>

		<div id="content" class="container">
			<div class="header-image">
				<img class="img-responsive" src="assets/images/woocommerce-logo.png" alt="WooCommmerce stylesheet">
			</div>
			<!-- <h1 class="title">WooCommerce stylesheet</h1> -->
			<div class="row">
				<div class="col-sm-12">

					<div class="stylesheeet-wrapper">
						<h2 class="section-title">Text elements</h2>
						<?php include('inc/headings.php'); ?>
						<?php // include('inc/inputs.php'); ?>

					</div>

					<div class="stylesheeet-wrapper">
						<h2 class="section-title">Forms</h2>
						<?php include('inc/buttons.php'); ?>
						<?php include('inc/inputs.php'); ?>
					</div>

					
					<div class="stylesheeet-wrapper">
						<h2 class="section-title">Tabs</h2>
						<?php include('inc/tabs.php'); ?>
					</div>

					<div class="stylesheeet-wrapper">
						<h2 class="section-title">Images</h2>
						<?php include('inc/images.php'); ?>
					</div>

					<div class="stylesheeet-wrapper">
						<h2 class="section-title">Rating stars</h2>
						<?php include('inc/rating-stars.php'); ?>
					</div>

					<div class="stylesheeet-wrapper">
						<h2 class="section-title">Tables</h2>
						<?php include('inc/tables.php'); ?>
					</div>

					<div class="stylesheeet-wrapper">
						<h2 class="section-title">Pagination</h2>
						<?php include('inc/pagination.php'); ?>
					</div>


				</div>
			</div>
			<div class="sidebar-fixed">
				
			</div>
		</div>


		<div class="footer">
			<p>&copy <?php echo date('Y'); ?> develop by &nbsp; <a href="http://www.s7designcreative.com" target="_blank">S7 design</a></p>
		</div>

		 <!-- jQuery -->
	    <script src="assets/js/jquery.js"></script>
	    <!-- Bootstrap Core JavaScript -->
	    <script src="assets/js/bootstrap.min.js"></script>
	    <script type="text/javascript">
	    	// animate anchor
			$(document).ready(function ($) {
				$('.navbar-nav a').on('click', function (e) {
					var target = this.hash,
					$target = $(target);
					$('html, body').stop().animate({
						'scrollTop': $target.offset().top-109
						}, 900, 'swing', function () {
					});
					return false;
				});
			});
	    </script>
	</body>
</html>