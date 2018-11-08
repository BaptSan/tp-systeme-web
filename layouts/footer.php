		<footer>

		</footer>


		<?php if(isset($_SESSION['message']['error'])){ ?>
			<br>
			<br>
			<div class="container">
				<div class="alert alert-danger">
					<?php echo $_SESSION['message']['error'];
					$_SESSION['message']['error'] = null; ?>
				</div>
			</div>
			<br>
			<br>
		<?php } ?>

		<?php include_once('layouts/javascript.php'); ?>
	</body>
	</html>

	<?php unset($db); ?>