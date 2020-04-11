<h2><?= $title ?></h2>
<p>Choose your adventure!<p>
	<div class="container">
		<div class="destination-selector">
			<?php foreach($destinations as $destination) : ?>
				<h4 class="destination-item"><?php echo $destination['destination_name']; ?></h4>
			<?php endforeach; ?>
		</div>
	</div>