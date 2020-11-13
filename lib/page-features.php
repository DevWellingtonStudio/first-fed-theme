<?php
	/*
	 * Adds page features to templates
	 */

	add_action('genesis_before_footer', 'add_page_features', 5);
	function add_page_features() {
		$default  = '';
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
				<div class="top row">';

				if ( $feat_img_one !== $default ) {
				echo '<div class="col-md-6 feature">
								<img src="' . $feat_img_one . '" alt="' . $alt1 . '">
								</div>
								<div class="col-md-6 feature" >
					          ' . $feat_text_one . '
								</div >';
				}

				echo '</div>';

				if ( $feat_cta_text_one !== $default ) {
				echo '<div class="cta-1 card" >
									<div class="card-body" >
									   ' . $feat_cta_text_one . '
									</div>
								</div>';
				}

				echo '<div class="middle row">';

				if ( $feat_img_two !== $default ) {
				echo '<div class="col-md-6 feature">
								' . $feat_text_two . '
								</div>
								<div class="col-md-6 feature">
									<img src="' . $feat_img_two . '" alt="' . $alt2 . '">
								</div>';
				}

				echo '</div>';

				if ( $feat_cta_text_two !== $default ) {
				echo '<div class="cta-2 card">
							<div class="card-body">
							' . $feat_cta_text_two . '
							</div>
							</div>';
				}

				if ( $feat_img_three !== $default ) {
				echo '<div class="bottom row">
							<div class="col-md-6 feature">
							<img src="' . $feat_img_three . '" alt="' . $alt3 . '">
							</div>';
				}

				if ( $feat_text_three !== $default ) {
				echo '<div class="col-md-6 feature">
							' . $feat_text_three . '
							</div>';
				}

				echo '</div>';

				if ( $feat_cta_text_three !== $default ) {
				echo '<div class="cta-3 card">
							<div class="card-body">
								' . $feat_cta_text_three . '
							</div>
							</div>
							</div>';
				}


				$addtl_feat_img_one = get_post_meta( get_the_ID(), 'addtl-feat-img-one', true );
				$get_imageone_id_one    = attachment_url_to_postid( $addtl_feat_img_one );
				$feat_one_alt       = get_post_meta( $get_imageone_id_one, '_wp_attachment_image_alt', true );

				$addtl_featette_img_one = get_post_meta( get_the_ID(), 'addtl-featette-img-one', true );
				$get_imagetwo_id_two        = attachment_url_to_postid( $addtl_featette_img_one );
				$featette_one_alt   = get_post_meta( $get_imagetwo_id_two, '_wp_attachment_image_alt', true );

				$addtl_featette_img_two = get_post_meta( get_the_ID(), 'addtl-featette-img-two', true );
				$get_imageothree_id_thee  = attachment_url_to_postid( $addtl_featette_img_two  );
				$addtl_featette_img_two_alt   = get_post_meta( $get_imageothree_id_thee, '_wp_attachment_image_alt', true );

				$image_text_overlay_img = get_post_meta(get_the_ID(), 'image-text-overlay-img', true);
				$get_imagefour_id_four  = attachment_url_to_postid( $image_text_overlay_img );
				$img_text_overlay_alt = get_post_meta( $get_imagefour_id_four, '_wp_attachment_image_alt', true );

				$footer_row_featurette_img  = get_post_meta(get_the_ID(), 'footer-row-featurette-img', true );
				$get_imagefooter_id_footer  = attachment_url_to_postid( $footer_row_featurette_img );
				$footer_row_featurette_img_alt = get_post_meta( $get_imagefooter_id_footer, '_wp_attachment_image_alt', true );

				$addtl_featette_text_one = get_post_meta( get_the_ID(), 'addtl-featette-text-one', true );
				$addtl_featette_title_two = get_post_meta( get_the_ID(), 'addtl-featette-title-two', true );
				$addtl_featette_text_two = get_post_meta( get_the_ID(), 'addtl-featette-text-two', true );
				$overlay_text_area  = get_post_meta(get_the_ID(), 'overlay-text-area', true );
				$footer_row_text  = get_post_meta(get_the_ID(), 'footer-row-text', true );

			echo '<div id="featured-content-section">
								<div class="feature-page-row row">';

				if ( $addtl_feat_img_one !== $default ) {
				echo '<div class="img-cont col-12 mb-x7">
							<img class="img-fluid" src="' . $addtl_feat_img_one . '" alt="' . $feat_one_alt . '">
							</div>';
				}

				if ( $addtl_featette_img_one !== $default ) {
				echo '<div class="col-md-6 feature">
							<img class="img-fluid" src="' . $addtl_featette_img_one . '" alt="' . $featette_one_alt . '">
							</div>
							<div class="col-md-6 feature">
							' . $addtl_featette_text_one . '
							</div>';
				}
				echo '</div>';
				if($addtl_featette_title_two !== $default) {
				echo	'<div id="additional-featurette">
							 <h2 class="mt-x1 mb-x2">' . $addtl_featette_title_two . '</h2>
							 <div class="feature-page-row row">';
				}
				if($addtl_featette_title_two !== $default ) {
				echo  '<div class="col-md-6">
						 	' . $addtl_featette_text_two . '
						 	</div>';
				}
				if($addtl_featette_img_two !== $default ) {
				echo '<div class="col-md-6">
							<img class="img-fluid" src="' . $addtl_featette_img_two . '" alt="' . $addtl_featette_img_two_alt . '">
							</div>
							</div>
							</div>';
				}

				if($image_text_overlay_img !== $default) {
				echo '<div class="mt-x2 image-text-overlay row">
							<div class="container-fluid">
							<img src="'. $image_text_overlay_img .'" alt="'. $img_text_overlay_alt .'">
							<div class="card">
							<div class="card-body">
							'. $overlay_text_area .'
							</div>
							</div>
							</div>
							</div>';
				}

				if($footer_row_featurette_img !== $default) {
					echo '<div class="mt-x2 footer-row-featurette row">
								<div class="col-md-6">
								<img class="img-fluid" src="'. $footer_row_featurette_img .'" alt="'. $footer_row_featurette_img_alt .'">
								</div>
								<div class="col-md-6">
								'. $footer_row_text .'
								</div>
								</div>';
				}

				echo '</div>
							</div>';
			}
		}



