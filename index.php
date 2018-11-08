<?php
$title = 'Accueil';
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
			<div class="col-sm-12 col-md-12 col-lg-4">
				<?php if(isset($_SESSION['user_id'])){ ?>
					<a href="add_event" class="btn btn-primary">Ajouter un événement</a>
					<br>
					<br>
				<?php } 
				$event = null;
				?>
				<?php include('components/events_list.php'); ?>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-8">
				
				<div id="calendar"></div>
				<script src="https://rawgit.com/moment/moment/2.18.1/min/moment.min.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
				<script>
					$(function() {
						$('#calendar').fullCalendar({
							timeFormat: '(H:mm)',
							defaultDate: moment().today,
							events: [

							<?php foreach($events as $event){ ?>

								{
									title: '<?php echo $event->name; ?>',
									start: '<?php echo $event->date; ?>',
								},

							<?php } ?>

							]
						});
					});
				</script>

			</div>
		</div>

	</div>
</main>

<?php include_once('layouts/footer.php'); ?>