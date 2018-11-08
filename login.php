<?php
$title = 'Login';
$description = ' ';
?>

<?php include_once('layouts/header.php'); ?>

<main class="container">

	<div class="card" style="max-width: 600px; margin: 150px auto 0 auto">
		<div class="card-header">
			Connexion
		</div>
		<div class="card-body">
			<form action="php/login" method="POST">

				<div class="form-group">
					<label for="email">Email</label>
					<input class="form-control" type="email" id="email" name="email" value="" placeholder="" required>
				</div>

				<div class="form-group">
					<label for="password">Password</label>
					<input class="form-control" type="password" id="password" name="password" value="" placeholder="" required>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary">
						Se connecter
					</button>
				</div>


			</form>
		</div>
	</div>

</main>

<?php include_once('layouts/footer.php'); ?>