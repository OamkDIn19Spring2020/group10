<h2><?= $title ?></h2>
<p>Choose your adventure!<p>
	<div class="container">
		<div class="destination-selector">
			<?php foreach($destinations as $destination) : ?>
				<a href="<?php echo site_url('/destinations/'.$destination['slug']); ?>">
				<h4 class="destination-item"><?php echo $destination['destination_name']; ?></h4>
				</a>
			<?php endforeach; ?>
		</div>
		<h2>Here are the stops</h2>
		<div class="destination-selector">
			<?php foreach($stops as $stop) : ?>
				<a href="<?php echo site_url('/stops/'.$stop['slug']); ?>">
				<h4 class="destination-item"><?php echo $stop['stop_name']; ?></h4>
				</a>
			<?php endforeach; ?>
		</div>
	</div>