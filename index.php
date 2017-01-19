<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,300,600,800,900" rel="stylesheet" type="text/css">
	<link href="css/animate.css" type="text/css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-2.1.3.js"></script>
	<script src="js/main.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/wow.min.js"></script>
	<script  type="text/javascript">
		wow = new WOW();
		wow.init();
	</script>
</head>
<body>	

<?php session_start(); ?>
<?php include("conf/db.php"); ?>

	<header id="header">
	
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			     <p>ACTU JEUX 1</p>
			      <div class="carousel-caption">
			    
			      </div>
			    </div>
			    <div class="item">
			      <p>ACTU JEUX 2</p>
			      <div class="carousel-caption">
			       
			      </div>
			    </div>
			    <div class="item">
			      <p>ACTU JEUX 3</p>
			      <div class="carousel-caption">
			       
			      </div>
			    </div>
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>

		<div class="menu">
			<section class="container">

				<nav class="navbar navbar-default navbar-fixed-top ">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-fixed-top ">
								<li><a href="signin.html" class="mon_scroll">SIGN IN</a></li>
								<li><a href="login.html" class="mon_scroll">LOG IN</a></li>
								<li><a href="bibliotheque.html" class="mon_scroll">BIBLIOTHEQUE</a></li>
								<li><a href="store.php" class="mon_scroll">STORE</a></li>
								<li><a href="#main1" class="mon_scroll">ACTUALITÉS</a></li>
							</ul>	
							<ul class="nav navbar-nav navbar-right">

								<li class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
									<ul class="dropdown-menu">
										<li><a href="signin.html" class="mon_scroll">SIGN IN</a></li>
										<li><a href="login.html" class="mon_scroll">LOG IN</a></li>
										<li><a href="bibliotheque.html" class="mon_scroll">BIBLIOTHEQUE</a></li>
										<li><a href="store.php" class="mon_scroll">STORE</a></li>
										<li><a href="#main1" class="mon_scroll">ACTUALITÉS</a></li>
									</ul>
								</li>

							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>

		</section>
	</div>

</header>
<div class="main1" id="main1">
	<section class="container">
		<div class="row">
			<h1>ACTUALITÉS</h1>
			<div class="trait"></div>
			<div class="col-md-4">
				<div class="img_jeux">
					<img src="https://articles-images.sftcdn.net/wp-content/uploads/sites/9/2016/02/gta5_1-664x374.jpg" width="100%">
				</div>
			</div>
			<div class="col-md-4">
				<div class="img_jeux">
					<img src="https://articles-images.sftcdn.net/wp-content/uploads/sites/9/2016/02/gta5_1-664x374.jpg" width="100%">	
				</div>
			</div>
			<div class="col-md-4">
				<div class="img_jeux">
					<img src="https://articles-images.sftcdn.net/wp-content/uploads/sites/9/2016/02/gta5_1-664x374.jpg"  width="100%">	
				</div>
			</div>
			<div class="col-md-4">
				<div class="img_jeux">
					<img src="https://articles-images.sftcdn.net/wp-content/uploads/sites/9/2016/02/gta5_1-664x374.jpg" width="100%">	
				</div>
			</div>
			<div class="col-md-4">
				<div class="img_jeux">
					<img src="https://articles-images.sftcdn.net/wp-content/uploads/sites/9/2016/02/gta5_1-664x374.jpg" width="100%">	
				</div>
			</div>
			<div class="col-md-4">
				<div class="img_jeux">
					<img src="https://articles-images.sftcdn.net/wp-content/uploads/sites/9/2016/02/gta5_1-664x374.jpg" width="100%">	
				</div>
			</div>

		</div>	
		</div>
	</div>
</section>
</div>

<footer id="footer">
	<section class="container">
		<div class="row">
			<div class="col-md-6">		
				
			</div>
			<div class="col-md-6">	
				
			</div>
		</div>
	</section>
</footer>	
</body>
</html>