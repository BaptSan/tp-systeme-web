<?php
$title = 'Register';
$description = ' ';
?>

<?php include_once('layouts/header.php'); ?>

<main class="container">

	<div class="card mt-5" style="max-width: 600px; margin: auto">
		<div class="card-header">
			Inscription
		</div>
		<div class="card-body">
			<form action="php/register" method="POST">

				<div class="form-group">
					<label for="name">Nom</label>
					<input class="form-control 
					<?php if(isset($_SESSION['errors']) && array_key_exists('name', $_SESSION['errors']) ){ echo 'is-invalid'; }?>
					" type="text" id="name" name="name" value="<?php echo (isset($_SESSION['fields']) && array_key_exists('name', $_SESSION['fields']) ?
					 $_SESSION['fields']['name'] : ''); ?>">
					<?php if(isset($_SESSION['errors']) && array_key_exists('name', $_SESSION['errors']) ){ ?>
						<div class="invalid-feedback"><?php echo $_SESSION['errors']['name']; ?></div>
					<?php }?>
				</div>

				<div class="form-group">
					<label for="email">Email</label>
					<input class="form-control 
					<?php if(isset($_SESSION['errors']) && array_key_exists('email', $_SESSION['errors']) ){ echo 'is-invalid'; }?>
					" type="email" id="email" name="email" value="<?php echo (isset($_SESSION['fields']) && array_key_exists('email', $_SESSION['fields']) ?
					 $_SESSION['fields']['email'] : ''); ?>">
					<?php if(isset($_SESSION['errors']) && array_key_exists('email', $_SESSION['errors']) ){ ?>
						<div class="invalid-feedback"><?php echo $_SESSION['errors']['email']; ?></div>
					<?php }?>
				</div>

				<div class="form-group">
					<label for="password">Password</label>
					<input class="form-control 
					<?php if(isset($_SESSION['errors']) && array_key_exists('password', $_SESSION['errors']) ){ echo 'is-invalid'; }?>
					" type="password" id="password" name="password" value="" placeholder="">
					<?php if(isset($_SESSION['errors']) && array_key_exists('password', $_SESSION['errors']) ){ ?>
						<div class="invalid-feedback"><?php echo $_SESSION['errors']['password']; ?></div>
					<?php }?>
				</div>

				<div class="form-group">
					<label for="password_val">Password validation</label>
					<input class="form-control 
					<?php if(isset($_SESSION['errors']) && array_key_exists('password_val', $_SESSION['errors']) ){ echo 'is-invalid'; }?>
					" type="password" id="password_val" name="password_val" value="" placeholder="">
					<?php if(isset($_SESSION['errors']) && array_key_exists('password_val', $_SESSION['errors']) ){ ?>
						<div class="invalid-feedback"><?php echo $_SESSION['errors']['password_val']; ?></div>
					<?php }?>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary">
						Valider
					</button>
				</div>
			</form>

			<?php $_SESSION['errors'] = null; ?>
			<?php $_SESSION['fields'] = null; ?>

		</div>
	</div>
</main>

<?php include_once('layouts/footer.php'); ?>