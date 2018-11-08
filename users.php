<?php
$title = 'Users';
$description = ' ';
?>

<?php include_once('layouts/header.php'); ?>

<div class="container my-5">
	
	<ul>
		<?php include_once('php/get_users.php'); ?>
		<?php foreach($users as $user){ ?>
			<li><?php echo $user->name; ?></li>
		<?php } ?>
	</ul>

</div>

<?php include_once('layouts/footer.php'); ?>