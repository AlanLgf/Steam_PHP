		<div class="menu">
			<section class="container" style="margin-left : 0 !important; margin-right : 0 !important; padding: 0 !important;">

				<nav class="navbar navbar-default navbar-static-top " style="width:100vw; margin-bottom: 0 !important;">
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
							<ul class="nav navbar-nav navbar-static-top  navbar-right">
								<?php if(isset($_SESSION["id_member"]))
                				{ 
									?>
									<li><a href="logout.php">LOG OUT</a></li>
								<?php }
								else{

									 ?>
								<li><a href="signin.php" class="mon_scroll">SIGN IN</a></li>
								<li><a href="login.php" class="mon_scroll">LOG IN</a></li>
								<?php 
								}
								if(isset($_SESSION["id_member"]))
                				{ 
									?>
									<li><a href="bibliotheque.php" class="mon_scroll">BIBLIOTHEQUE</a></li>
									<li><a href="friend_list.php" class="mon_scroll">MES AMIS</a></li>
								<?php } ?>								
								<li><a href="store.php" class="mon_scroll">STORE</a></li>
								<li><a href="index.php" class="mon_scroll">ACTUALITÉS</a></li>
								<?php if(isset($_SESSION["id_member"]))
                				{ 
									?>
									<li><a href="profil.php">MON PROFIL</a></li>
								<?php } ?>
							</ul>	
							<ul class="nav navbar-nav navbar-right">

								<li class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
									<ul class="dropdown-menu">
										<li><a href="signin.php" class="mon_scroll">SIGN IN</a></li>
										<li><a href="login.php" class="mon_scroll">LOG IN</a></li>
										<li><a href="bibliotheque.php" class="mon_scroll">BIBLIOTHEQUE</a></li>
										<li><a href="store.php" class="mon_scroll">STORE</a></li>
										<li><a href="index.php" class="mon_scroll">ACTUALITÉS</a></li>
									</ul>
								</li>

							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>

		</section>
	</div>