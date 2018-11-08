<div class="card">
	<div class="card-header">
		Liste des événements
	</div>
	<?php include('php/get_events.php'); ?>
	<div class="list-group list-group-flush">
		<?php if(count($events)){ ?>
		<?php foreach($events as $event_item){ ?>
			<a href="event?event_id=<?php echo $event_item->id; ?>" class="list-group-item list-group-item-action
				<?php if($event){if($event_item->id === $event->id){echo 'active';} } ?>
				">
				<?php echo $event_item->name; ?>
			</a>
		<?php } ?>
		<?php } ?>
	</div>
</div>