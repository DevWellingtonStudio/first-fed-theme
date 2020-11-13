<?php
/*
 * Parallax Scroll Header - Front Page
 */

add_action('genesis_after_header', 'add_parallax_frontpage_top', 5);
function add_parallax_frontpage_top() {
	global $post;
	$default            = '';
	$parallax_bg_img    = get_the_post_thumbnail_url( $post->ID, 'full' );
	$thumbnail_id       = get_post_thumbnail_id( $post->ID );
	$alt                = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true );
	$parallax_title     = get_post_meta( get_the_ID(), 'parallax-title', true );
	$parallax_content   = get_post_meta( get_the_ID(), 'parallax-content', true );
	$featured_row       = get_post_meta(get_the_ID(), 'featured-row', true );
	$side_by_side_lt    = get_post_meta(get_the_ID(), 'side-by-side-lt', true );
	$side_by_side_rt    = get_post_meta(get_the_ID(), 'side-by-side-rt', true );

	if ( has_post_thumbnail() && is_home() || has_post_thumbnail() && is_front_page() ) {

		echo '<div class="container-fluid parallax-cont">
						<div class="parallax-window">
							<div class="parallax-slider">
							<div class="parallax-content">';
							if ( $parallax_title !== '' ) {
								echo '<h1 > ' . $parallax_title . '</h1 >';
							}
							if ( $parallax_content !== '' ) {
								echo '<p style="color:white; font-size: 26px;">' . $parallax_content . '</p>';
							}
							echo '
							</div>
							<img src="' . $parallax_bg_img . '" style="width:100%;" sizes="" alt="' . $alt . '">
							</div>
						</div>
					</div>';
	} else {
		return $default;
	}
	if($featured_row !== $default) {
	echo '<div id="fp-grid" class="container-fluid grid-section">
				  <div class="row">
					  <div class="card">
					  <div class="card-body">
					    ' . $featured_row . '
					  </div>
				    </div>
				  </div>
			  </div>';
	}
	if($side_by_side_lt !== $default) {
	echo '<div id="fp-side-by-side" class="container-fluid side-by-side">
				  <div class="row">
					  <div class="col-md-6 feature">
					  ' . $side_by_side_lt . '
					  </div>
					  <div class="col-md-6 feature">
					  ' . $side_by_side_rt . '
					  </div>
				  </div>
		    </div>';
	}
}
