<?php
/*
 * Adds full width video - Google Cloud
 */

add_action('genesis_after_content_sidebar_wrap', 'add_full_width_video', 15);
function add_full_width_video() {
	$default = '';
	$full_width_video_fp = get_post_meta(get_the_ID(), 'full-width-video-fp', true);
	$full_width_video_title = get_post_meta(get_the_ID(), 'full-width-video-title', true);
	$full_width_video_text = get_post_meta(get_the_ID(), 'full-width-video-text', true);

	if (is_front_page() && $full_width_video_fp !== $default) {
		echo '
		<section id="full-width-video">
		 <div class="overlay"></div>
			<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
				<source src="' . $full_width_video_fp . '" type="video/mp4">
			</video>
			<div class="container h-100">
				<div class="d-flex h-100 text-center align-items-center">
					<div class="w-100 text-white">
						<h1 class="display-3">' . $full_width_video_title . '</h1>
						<p class="lead mb-0">' . $full_width_video_text . '</p>
					</div>
				</div>
			</div>
		</section>
	';
	}
}


// https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4
