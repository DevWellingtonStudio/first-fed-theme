<?php
/*
 * Body grid
 */

add_action('genesis_after_content_sidebar_wrap', 'add_body_grid', 5);
function add_body_grid() {

	$body_grid_img_one = get_post_meta( get_the_ID(), 'body-grid-img-one', true );
	$get_imageone_id = attachment_url_to_postid( $body_grid_img_one );
	$alt1 = get_post_meta( $get_imageone_id, '_wp_attachment_image_alt', true );
	$gridimg_one_title  = get_post_meta( get_the_ID(), 'gridimg-one-title', true );

	$body_grid_img_two = get_post_meta( get_the_ID(), 'body-grid-img-two', true );
	$get_imagetwo_id = attachment_url_to_postid( $body_grid_img_two );
	$alt2 = get_post_meta( $get_imagetwo_id, '_wp_attachment_image_alt', true );
	$gridimg_two_title  = get_post_meta( get_the_ID(), 'gridimg-two-title', true );

	$body_grid_img_three = get_post_meta( get_the_ID(), 'body-grid-img-three', true );
	$get_imagethree_id = attachment_url_to_postid( $body_grid_img_three );
	$alt3 = get_post_meta( $get_imagethree_id, '_wp_attachment_image_alt', true );
	$gridimg_three_title  = get_post_meta( get_the_ID(), 'gridimg-three-title', true );

	$body_grid_img_four = get_post_meta( get_the_ID(), 'body-grid-img-four', true );
	$get_imagefour_id = attachment_url_to_postid( $body_grid_img_four );
	$alt4 = get_post_meta( $get_imagefour_id, '_wp_attachment_image_alt', true );
	$gridimg_four_title  = get_post_meta( get_the_ID(), 'gridimg-four-title', true );

	$grid_content = get_post_meta( get_the_ID(), 'grid-content', true );

	if(is_front_page() && !is_home() ) {

		echo '
				<div id="grid-body">
					<div class="container-fluid">
						<div class="row">
							<div class="title-area text-center">
							<h3>WE SERVICE</h3>
							</div>
							<div class="container">
							<div class="row top-row justify-content-center">
							<div class="col-md-5 feature">
							<img src="' . $body_grid_img_one . '" class="img-fluid" alt="' . $alt1 . '"/>
							<h4>' . $gridimg_one_title . '</h4>
							</div>
							<div class="col-md-5 feature">
							<img src="' . $body_grid_img_two . '" class="img-fluid" alt="' . $alt2 . '"/>
							<h4>' . $gridimg_two_title . '</h4>
							</div>
							</div>
							<div class="row bottom-row justify-content-center">
							<div class="col-md-5 feature">
							<img src="' . $body_grid_img_three . '" class="img-fluid" alt="' . $alt3 . '"/>
							<h4>' . $gridimg_three_title . '</h4>
							</div>
							<div class="col-md-5 feature">
							<img src="' . $body_grid_img_four . '" class="img-fluid" alt="' . $alt4 . '"/>
							<h4>' . $gridimg_four_title . '</h4>
							</div>
							</div>
							</div>
						</div>
					</div>
				</div>
				<div id="body-grid-cta" class="container">
				<div class="card">
						<div class="card-body">
							' . $grid_content . '
						</div>
					</div>
				</div>
	';
	}
}


