<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo $title; ?></title>
		<meta http-equiv="Content-Type" content="text/html;charset=<?php echo config_item('charset'); ?>" />
		<link rel="stylesheet" href="<?php echo site_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>">
		
		<!-- Style region -->
		<?php echo $_styles; ?>
		
		
		<style type="text/css">
			body { 
				margin-top: 60px; 
			}
			
			.footer { 
				padding: 10px 0;
				margin-top: 70px;
				border-top: 1px solid #E5E5E5;
				background-color: whiteSmoke;
			}
		</style>
	</head>
	<body>
		
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand" href="#"><?php echo $header; ?></a>
					<div class="nav-collapse collapse">
						<ul class="nav pull-left">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul>
						<ul class="nav pull-right">
							<li class="active">
								<a href="<?php echo site_url('users/register'); ?>">
									<i class="icon-user"></i>
									<span>Register</span>
								</a>
							</li>
							<?php if (isLoggedIn()) : ?>
							<li>
								<a href="<?php echo site_url('auth/logout'); ?>">
									<i class="icon-off"></i>
									<span>Sign Out</span>
								</a>
							</li>
							<li>								
								<a href="#user">
									<span>Welcome,</span>
									<?php echo authUserInfo()->email; ?>
								</a>
							</li>
							<?php else : ?>
							<li>
								<a href="<?php echo site_url('auth/login'); ?>">
									<i class="icon-globe"></i>
									<span>Sign In</span>
								</a>
							</li>
							<?php endif; ?>
						</ul>						
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>

		<div class="container">
			<?php echo $content; ?>		
		</div> <!-- /container -->
		
		<footer class="footer">
			<div class="container">
				<p class="pull-right"><a href="#">Back to top</a></p>
				<p><?php echo $footer; ?></p>
			</div>
		</footer>
		
		<script src="<?php echo site_url('assets/vendor/jquery-latest.js'); ?>"></script>
		<script src="<?php echo site_url('assets/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
		
		<!-- Scripts region -->
		<?php echo $_scripts; ?>
	</body>
</html>