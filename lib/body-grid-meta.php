<?php
/*
 * Body Grid Meta
 */

add_action( 'add_meta_boxes', 'body_grid_custom_meta' );
function body_grid_custom_meta() {
	global $post;
	if(!empty($post)) {
		$pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
		if($pageTemplate == 'templates/front-page-template.php') {
			$types = array( 'post', 'page' );
			foreach ( $types as $type ) {
				add_meta_box( 'bodygrid_meta', __( 'Body Grid Content', 'firstfed-for-genesis' ), 'bgrid_meta_callback', $types, 'normal', 'high' );
			}
		}
	}
}

function bgrid_meta_callback( $post ) {
wp_nonce_field( basename( __FILE__ ), 'bgrid_nonce' );
$body_grid_meta  = get_post_meta( $post->ID );
?>
	<div class="container">
		<h3>Body Grid</h3>
		<div class="row">
			<div class="col-md-6">
				<label for="body-grid-img-one" class="body-grid-img-one"><?php _e( '<b>Image Top Left</b>', 'firstfed-for-genesis' );?></label><br>
				<input type="text" name="body-grid-img-one" id="body-grid-img-one" value="<?php if ( isset ( $body_grid_meta['body-grid-img-one'] ) ) echo $body_grid_meta['body-grid-img-one'][0];?>" />
				<input type="button" id="body-grid-img-one-button" class="button body-grid-img-one" value="<?php _e( 'Choose or Upload an Image', 'firstfed-for-genesis' );?>" />
			</div>
			<div class="col-md-6">
				<label for="body-grid-img-two" class="body-grid-img-two"><?php _e( '<b>Image Top Right</b>', 'firstfed-for-genesis' );?></label><br>
				<input type="text" name="body-grid-img-two" id="body-grid-img-two" value="<?php if ( isset ( $body_grid_meta['body-grid-img-two'] ) ) echo $body_grid_meta['body-grid-img-two'][0];?>" />
				<input type="button" id="body-grid-img-two-button" class="button body-grid-img-two" value="<?php _e( 'Choose or Upload an Image', 'firstfed-for-genesis' );?>" />
			</div>
			<div class="col-md-6">
				<label for="body-grid-img-three" class="body-grid-img-three"><?php _e( '<b>Image Bottom Left</b>', 'firstfed-for-genesis' );?></label><br>
				<input type="text" name="body-grid-img-three" id="body-grid-img-three" value="<?php if ( isset ( $body_grid_meta['body-grid-img-three'] ) ) echo $body_grid_meta['body-grid-img-three'][0];?>" />
				<input type="button" id="body-grid-img-three-button" class="button body-grid-img-three" value="<?php _e( 'Choose or Upload an Image', 'firstfed-for-genesis' );?>" />
			</div>
			<div class="col-md-6">
				<label for="body-grid-img-four" class="body-grid-img-four"><?php _e( '<b>Image Bottom Right</b>', 'firstfed-for-genesis' );?></label><br>
				<input type="text" name="body-grid-img-four" id="body-grid-img-four" value="<?php if ( isset ( $body_grid_meta['body-grid-img-four'] ) ) echo $body_grid_meta['body-grid-img-four'][0];?>" />
				<input type="button" id="body-grid-img-four-button" class="button body-grid-img-four" value="<?php _e( 'Choose or Upload an Image', 'firstfed-for-genesis' );?>" />
			</div>
		</div>
	</div>

<?php }

// Sanitize
add_action('save_post', 'body_grid_meta_save');
function body_grid_meta_save($post_id) {

	// Checks save status
	$is_autosave    = wp_is_post_autosave( $post_id );
	$is_revision    = wp_is_post_revision( $post_id );
	$is_valid_nonce = ( isset( $_POST['bgrid_nonce'] ) && wp_verify_nonce( $_POST['bgrid_nonce'], basename( __FILE__ ) ) ) ? 'true' : 'false';

	// Exits script depending on save status
	if ( $is_autosave || $is_revision || ! $is_valid_nonce ) {
		return;
	}

	// Checks for input and sanitizes/saves if needed
	if( isset( $_POST[ 'body-grid-img-one' ] ) ) {
		update_post_meta( $post_id, 'body-grid-img-one', $_POST[ 'body-grid-img-one' ] );
	}
	if( isset( $_POST[ 'body-grid-img-two' ] ) ) {
		update_post_meta( $post_id, 'body-grid-img-two', $_POST[ 'body-grid-img-two' ] );
	}
	if( isset( $_POST[ 'body-grid-img-three' ] ) ) {
		update_post_meta( $post_id, 'body-grid-img-three', $_POST[ 'body-grid-img-three' ] );
	}
	if( isset( $_POST[ 'body-grid-img-four' ] ) ) {
		update_post_meta( $post_id, 'body-grid-img-four', $_POST[ 'body-grid-img-four' ] );
	}
}

add_action( 'admin_enqueue_scripts', 'bgrid_image_enqueue' );
function bgrid_image_enqueue() {
	// Registers and enqueues the required javascript for image management within wp dashboard.
	wp_register_script( 'meta-box-image', BFG_THEME_JS  . 'meta.js', array( 'jquery' ) );
	wp_localize_script( 'meta-box-image', 'meta_image',
		array(
			'title' => __( 'Choose or Upload an Image', 'firstfed-for-genesis' ),
			'button' => __( 'Use this image', 'firstfed-for-genesis' ),
		)
	);
	wp_enqueue_script( 'meta-box-image' );
}
