<?php
/*
 * Adds full width video - Google Cloud
 */

add_action('genesis_after_content_sidebar_wrap', 'add_full_width_video', 15);
function add_full_width_video() {
	echo '
	<section id="full-width-video">
	 <div class="overlay"></div>
		<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
			<source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
		</video>
		<div class="container h-100">
			<div class="d-flex h-100 text-center align-items-center">
				<div class="w-100 text-white">
					<h1 class="display-3">Full Width Video</h1>
					<p class="lead mb-0">1st Federal Financial Services</p>
				</div>
			</div>
		</div>
	</section>
	';
}



