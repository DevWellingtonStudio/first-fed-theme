<?php
	/*
	 * Adds page features to templates
	 */

	add_action('genesis_before_footer', 'add_page_features', 5);
	function add_page_features() {
		$feat_img_one = get_post_meta(get_the_ID(), 'feat-img-one', true );
		$get_imageone_id = attachment_url_to_postid( $feat_img_one );
		$alt1 = get_post_meta( $get_imageone_id, '_wp_attachment_image_alt', true );

		$feat_img_two = get_post_meta(get_the_ID(), 'feat-img-two', true );
		$get_imageone_id = attachment_url_to_postid( $feat_img_two );
		$alt2 = get_post_meta( $get_imageone_id, '_wp_attachment_image_alt', true );

		$feat_img_three = get_post_meta(get_the_ID(), 'feat-img-three', true );
		$get_imageone_id = attachment_url_to_postid( $feat_img_three );
		$alt3 = get_post_meta( $get_imageone_id, '_wp_attachment_image_alt', true );

		$feat_text_one  = get_post_meta(get_the_ID(), 'feat-text-one', true );
		$feat_text_two  = get_post_meta(get_the_ID(), 'feat-text-two', true );
		$feat_text_three  = get_post_meta(get_the_ID(), 'feat-text-three', true );

		$feat_cta_text_one  = get_post_meta(get_the_ID(), 'feat-cta-text-1', true );
		$feat_cta_text_two  = get_post_meta(get_the_ID(), 'feat-cta-text-2', true );
		$feat_cta_text_three  = get_post_meta(get_the_ID(), 'feat-cta-text-3', true );

		if(is_page_template('templates/page-template.php')) {
			echo '
			<div id="page-body-features" class="container-fluid">

				<div class="top row">
					<div class="col-md-6 feature">
						<img src="'. $feat_img_one .'" alt="'. $alt1 .'">
					</div>
					<div class="col-md-6 feature">
						'. $feat_text_one .'
					</div>
				</div>
				<div class="cta-1 card">
					<div class="card-body">
						'. $feat_cta_text_one .'
					</div>
				</div>

				<div class="middle row">
					<div class="col-md-6 feature">
					' . $feat_text_two .'
					</div>
					<div class="col-md-6 feature">
					<img src="'. $feat_img_two .'" alt="'. $alt2 .'">
					</div>
				</div>
				<div class="cta-2 card">
					<div class="card-body">
						'. $feat_cta_text_two .'
					</div>
				</div>

				<div class="bottom row">
					<div class="col-md-6 feature">
					<img src="'. $feat_img_three .'" alt="'. $alt3 .'">
					</div>
					<div class="col-md-6 feature">
					' . $feat_text_three .'
					</div>
				</div>
				<div class="cta-3 card">
					<div class="card-body">
						'. $feat_cta_text_three .'
					</div>
				</div>

			</div>
			';
		}
	}



