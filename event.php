<?php include('php/get_event.php'); ?>

<?php
$title = 'Event';
$description = ' ';
?>

<?php include_once('layouts/header.php'); ?>

<main id="content">
	<div class="container">

		<br>
		<br>
		<br>
		<br>
		<br>

		<div class="row">
			<div class="col-sm-12 col-md-6 col-lg-8">
				<?php $user_id = $event->user_id; ?>
				<?php include('php/get_user.php'); ?>
				<h1><?php echo $event->name; ?> <small style="font-size: 12px">par <?php echo $user->name; ?></small></h1>
				<p><?php echo $event->body; ?></p>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4">

				<?php if(isset($_SESSION['user_id'])  === $event->user_id){ ?>
					<form action="php/delete_event" method="POST">
						<input type="hidden" name="event_id" value="<?php echo $event->id; ?>" required>
						<button class="btn btn-danger">Supprimer</button>
					</form>
					<br>
				<?php } ?>

				<?php include('components/events_list.php'); ?>
			</div>
		</div>

	</div>
</main>

<?php include_once('layouts/footer.php'); ?>