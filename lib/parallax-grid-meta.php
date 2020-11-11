<?php
// Custom meta fields
/**
 * Adds a meta box to the post editing screen
 */
add_action( 'add_meta_boxes', 'top_parallax_custom_meta' );
function top_parallax_custom_meta() {
	global $post;
	if(!empty($post)) {
		$pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
		if($pageTemplate == 'templates/front-page-template.php') {
			$types = array( 'post', 'page' );
			foreach ( $types as $type ) {
				add_meta_box( 'parallax_meta', __( 'Parallax Image Content', 'firstfed-for-genesis' ), 'plax_meta_callback', $types, 'normal', 'high' );
			}
		}
	}
}

function plax_meta_callback( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'parallax_nonce' );
	$parallax_meta  = get_post_meta( $post->ID );
	?>
	<div style="margin-top: 1.618em;">
		<h3>Parallax Content</h3>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-6"><!-- Parallax Title -->
				<strong><label for="parallax-title" class="sbm-row-title"><?php _e( 'Parallax Title', 'firstfed-for-genesis' )?></label></strong>
				<textarea style="width: 100%;" rows="4" name="parallax-title" id="parallax-title"><?php if ( isset ( $parallax_meta['parallax-title'] ) ) echo $parallax_meta['parallax-title'][0]; ?></textarea>
			</div>
			<div class="col-md-6"><!-- Parallax Content -->
				<strong><label for="parallax-content" class="sbm-row-content"><?php _e( 'Parallax Content', 'firstfed-for-genesis' )?></label></strong>
				<textarea style="width: 100%;" rows="4" name="parallax-content" id="parallax-content"><?php if ( isset ( $parallax_meta['parallax-content'] ) ) echo $parallax_meta['parallax-content'][0]; ?></textarea>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<strong><label for="featured-row" class="sbm-row-content"><?php _e( 'Featured Row', 'firstfed-for-genesis' )?></label></strong>
				<textarea style="width: 100%;" rows="4" name="featured-row" id="featured-row"><?php if ( isset ( $parallax_meta['featured-row'] ) ) echo $parallax_meta['featured-row'][0]; ?></textarea>
			</div>
			<div class="col-md-6">
				<strong><label for="side-by-side-lt" class="sbm-row-content"><?php _e( 'Featured Left', 'firstfed-for-genesis' )?></label></strong>
				<textarea style="width: 100%;" rows="4" name="side-by-side-lt" id="side-by-side-lt"><?php if ( isset ( $parallax_meta['side-by-side-lt'] ) ) echo $parallax_meta['side-by-side-lt'][0]; ?></textarea>
			</div>
			<div class="col-md-6">
				<strong><label for="side-by-side-rt" class="sbm-row-content"><?php _e( 'Featured Right', 'firstfed-for-genesis' )?></label></strong>
				<textarea style="width: 100%;" rows="4" name="side-by-side-rt" id="side-by-side-rt"><?php if ( isset ( $parallax_meta['side-by-side-rt'] ) ) echo $parallax_meta['side-by-side-rt'][0]; ?></textarea>
			</div>

		</div>
	</div>

	<?php
}


//Sanitize
// Saves the custom meta input
add_action('save_post', 'parallax_meta_save');
function parallax_meta_save($post_id) {

	// Checks save status
	$is_autosave    = wp_is_post_autosave( $post_id );
	$is_revision    = wp_is_post_revision( $post_id );
	$is_valid_nonce = ( isset( $_POST['parallax_nonce'] ) && wp_verify_nonce( $_POST['parallax_nonce'], basename( __FILE__ ) ) ) ? 'true' : 'false';

	// Exits script depending on save status
	if ( $is_autosave || $is_revision || ! $is_valid_nonce ) {
		return;
	}

	// Checks for input and sanitizes/saves if needed
	if ( isset( $_POST['parallax-title'] ) ) {
		update_post_meta( $post_id, 'parallax-title', $_POST['parallax-title'] );
	}

	if ( isset( $_POST['parallax-content'] ) ) {
		update_post_meta( $post_id, 'parallax-content', $_POST['parallax-content'] );
	}

	if ( isset( $_POST['featured-row'] ) ) {
		update_post_meta( $post_id, 'featured-row', $_POST['featured-row'] );
	}

	if ( isset( $_POST['side-by-side-lt'] ) ) {
		update_post_meta( $post_id, 'side-by-side-lt', $_POST['side-by-side-lt'] );
	}

	if ( isset( $_POST['side-by-side-rt'] ) ) {
		update_post_meta( $post_id, 'side-by-side-rt', $_POST['side-by-side-rt'] );
	}

}
