<?php
/*
 * Body grid
 */

add_action('genesis_after_content_sidebar_wrap', 'add_body_grid', 5);
function add_body_grid() {


	$body_grid_img_one = get_post_meta( get_the_ID(), 'body-grid-img-one', true );
	$get_imageone_id = attachment_url_to_postid( $body_grid_img_one );
	$alt1 = get_post_meta( $get_imageone_id, '_wp_attachment_image_alt', true );

	$body_grid_img_two = get_post_meta( get_the_ID(), 'body-grid-img-two', true );
	$get_imagetwo_id = attachment_url_to_postid( $body_grid_img_two );
	$alt2 = get_post_meta( $get_imagetwo_id, '_wp_attachment_image_alt', true );

	$body_grid_img_three = get_post_meta( get_the_ID(), 'body-grid-img-three', true );
	$get_imagethree_id = attachment_url_to_postid( $body_grid_img_three );
	$alt3 = get_post_meta( $get_imagethree_id, '_wp_attachment_image_alt', true );

	$body_grid_img_four = get_post_meta( get_the_ID(), 'body-grid-img-four', true );
	$get_imagefour_id = attachment_url_to_postid( $body_grid_img_four );
	$alt4 = get_post_meta( $get_imagefour_id, '_wp_attachment_image_alt', true );




	echo '
				<div id="grid-body">
					<div class="container-fluid">
						<div class="row">
							<div class="title-area text-center">
							<h3>Grid Body</h3>
							</div>
							<div class="container">
							<div class="row justify-content-center">
							<div class="col-md-3">
							<img src="'. $body_grid_img_one .'" class="img-fluid" alt="'. $alt1 .'"/>
							</div>
							<div class="col-md-3">
							<img src="'. $body_grid_img_two .'" class="img-fluid" alt="'. $alt2 .'"/>
							</div>
							</div>
							<div class="row justify-content-center">
							<div class="col-md-3">
							<img src="'. $body_grid_img_three .'" class="img-fluid" alt="'. $alt3 .'"/>
							</div>
							<div class="col-md-3">
							<img src="'. $body_grid_img_four .'" class="img-fluid" alt="'. $alt4 .'"/>
							</div>
							</div>
							</div>
						</div>
					</div>
				</div>
	';
}


