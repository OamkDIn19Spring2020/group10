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
	</div>