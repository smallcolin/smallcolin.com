<div class="container">
	<section id="contact" class="contact">
		<div class="row">
			<h3 class="animated flipInX">Contact</h3>
			<div class="col-xs-12 col-sm-6">
				<p>get in touch…</p>
				<ul class="temp-menu">
					<li class="pulse"><a href="https://www.facebook.com/Small.Colin" target="_blank"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a></li>
					<li class="pulse"><a href="https://www.instagram.com/smallcolin/" target="_blank"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></li>
					<li class="pulse"><a href="https://twitter.com/smallcolin" target="_blank"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></li>
					<li class="pulse"><a href="https://github.com/smallcolin" target="_blank"><i class="fa fa-github fa-2x" aria-hidden="true"></i></a></li>
					<li class="pulse"><a href="https://www.linkedin.com/in/smallcolin/" target="_blank"><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a></li>
					<li class="pulse"><a href="mailto:colinsweeney2000@gmail.com?subject=Hello" target="_blank"><i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-6">
				<div class="contact-form-container">
					<p>Send me a mail directly…</p>
					<form class="contact-form" action="index.php" method="post">
						<label for="name">Name</label><br/>
						<input type="text" name="name" value="Name"><br />
						<label for="email">Email</label><br/>
						<input class="<?=$emailError;?>" type="text" name="email" value="Email"><br />
						<label for="name">Message</label><br/>
						<textarea name="textarea" rows="8" cols="40"></textarea><br />
						<input class="btn send-button" type="submit" name="submit" value="Send">
					</form>
				</div>
			</div>
		</div>
	</section>
</div>
