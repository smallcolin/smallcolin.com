<section id="photos" class="photos">
	<div class="container-fluid">
		<div class="row">
			<h3 class="animated flipInX">photos</h3>
			<div class="col-xs-12">
				<h4 class="listen">Instagram</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<!-- Instagram Feed -->
				<?php
					$access_token = '53609.1677ed0.057b7f9f6c7940d9ae3a7395cf52296a';
					$photo_count = 8;

					$json_link = 'https://api.instagram.com/v1/users/self/media/recent/?';
					$json_link .= "access_token={$access_token}&count={$photo_count}";

					$json = @file_get_contents($json_link);
					$obj = json_decode(preg_replace('/("\w+"):(\d+)/', '\\1:"\\2"', $json), true);

					if ($json == false) {
						echo '*To access the instagram feed you will need to connect to the internet*';
					} else {
						echo '<div class="insta-box">';

						foreach ($obj['data'] as $post) {
							$title = $post['caption']['text'];
							$pic_link = $post['link'];
							$likes = $post['likes']['count'];
							$pic_src = str_replace("http://", "https://", $post['images']['standard_resolution']['url']);
							$pic_created_time = date("F j, Y", $post['caption']['created_time']);
							$pic_created_time = date("M j, Y", strtotime($pic_created_time . " +1 days"));

							echo '<div class="bilder-deets">';
							echo "<img class='img-responsive photo-thumb' src='{$pic_src}' alt='{$title}'>";
							echo "</a>";
							echo "<p>{$title}</p>";
							echo "<p>{$pic_created_time}</p>";
							echo "<p><i class='fa fa-heart'></i>{$likes}</p>";
							echo "</div>";
						}
						echo '</div>';
					}
				?>
			</div>
		</div>
	</div>
</section>
