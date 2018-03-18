<?php include 'functions.php'; ?>

<section id="projects" class="websites">
	<div class="container">
		<div class="row">
			<h3 class="animated flipInX">Projects</h3>
				<div class="work">
					<?php foreach ($wb_data['sites'] as $site) { ?>
						<div class="site-container">
							<h4 class="animated flipInX">
								<a href="<?php echo $site['url']; ?>" target="_blank">
									<?php echo $site['short_url']; ?>
								</a>
							</h4>
							<p class="move-text">
								<?php 
									$count = count($site['skills']);
									$i = 1;
									foreach ($site['skills'] as $skill) {
										echo $skill;
										if($i < $count) {
											echo ' | ';
											$i++;
										};
									} 
								?>
							</p>
							<div class="box">
								<a href="<?php echo $site['url']; ?>" target="_blank">
									<img src="<?php echo $site['image']; ?>" />
								</a>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
