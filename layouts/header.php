<?php session_start(); ?>
<?php include_once('./php/db.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<?php include_once('layouts/head.php'); ?>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="./">Events</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="./">Accueil</a>
					</li>

					<?php if(isset($_SESSION['connected'])){ ?>
						<li class="nav-item">
							<?php include_once('php/get_auth.php'); ?>
							<a class="nav-link" href="profile"><?php echo (isset($auth) ? $auth->name : 'BUG'); ?></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="./php/logout">Logout</a>
						</li>
					<?php } else { ?>
						<li class="nav-item">
							<a class="nav-link" href="login">Login</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="register">Register</a>
						</li>
					<?php } ?>


				</ul>
			</div>
		</nav>
	</header>