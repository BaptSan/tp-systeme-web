<?php
$title = 'Ajouter un événement';
$description = ' ';
?>

<?php include_once('layouts/header.php'); ?>

<main class="container">

	<br>
	<br>
	<br>
	<br>
	<br>

	<div class="card" style="max-width: 600px; margin: auto">
		<div class="card-header">
			Ajouter un événement
		</div>
		<div class="card-body">
			<form action="php/add_event" method="POST">

				<div class="form-group">
					<label for="name">Nom</label>
					<input class="form-control" type="text" id="name" name="name" value="" placeholder="" required>
				</div>

				<div class="form-group">
					<label for="place">Lieu</label>
					<input class="form-control" type="text" id="place" name="place" value="" placeholder="" required>
				</div>

				<div class="form-group">
					<label for="date">Date</label>
					<input class="form-control" type="date" id="date" name="date" value="" placeholder="" required>
				</div>

				<div class="form-group">
					<label for="body">Description</label>
					<textarea rows="5" class="form-control" id="body" name="body"required></textarea>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary">
						Ajouter
					</button>
				</div>

			</form>
		</div>
	</div>

</main>

<?php include_once('layouts/footer.php'); ?>