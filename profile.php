<?php include_once('layouts/header.php'); ?>
<?php include_once('php/get_auth.php'); ?>

<main class="container mt-5">
	<div class="card">
		<div class="card-body">

			<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="avatar">
						<img class="card" src="images/avatar/<?php echo $auth->avatar; ?>" alt="" style="width: 100%; display: block;">
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-8">
					<h1><?php echo $auth->name; ?></h1>
					<p><?php echo $auth->bio; ?></p>
					<table class="table table-striped table-bordered">
						<tr>
							<th>Email</th><td><?php echo $auth->email; ?></td>
						</tr>
						<tr>
							<th>Téléphone</th><td><?php echo $auth->phone_number; ?></td>
						</tr>
						<tr>
							<th>Ville</th><td><?php echo $auth->city; ?></td>
						</tr>
						<tr>
							<th>Date de naissance</th><td><?php echo $auth->birthday; ?></td>
						</tr>
					</table>
				</div>
			</div>


			<div class="card">
				<div class="card-header">
					Les événements ou je participe
				</div>
				<div class="events_list list-group list-group-flush">
					<a href="event?event_id=6" class="list-group-item list-group-item-action">Ouverture WIS
</a>
				</div>
			</div>


		</div>
	</div>
</main>

<?php include_once('layouts/footer.php'); ?>