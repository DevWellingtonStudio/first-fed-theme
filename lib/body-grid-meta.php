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
  <div style="margin-top: 1.618em;">
	<h3>Body Grid</h3>
  </div>

	<div class="container">
		<div class="row">
			<div class="col-md-6">
			<label for="body-grid-img-one" class="body-grid-img-one"><?php _e( '<b>Image Top Left</b>', 'firstfed-for-genesis' );?></label><br>
			<input type="text" name="body-grid-img-one" id="body-grid-img-one" value="<?php if ( isset ( $body_grid_meta['body-grid-img-one'] ) ) echo $body_grid_meta['body-grid-img-one'][0];?>" />
			<input type="button" id="body-grid-img-one-button" class="button body-grid-img-one" value="<?php _e( 'Choose or Upload an Image', 'firstfed-for-genesis' );?>" />
		  	<div class="col-12">
			<strong><label for="gridimg-one-title" class="gridimg-one-title"><?php _e('Image One Title','firstfed-for-genesis')?></label></strong>
			<input type="text" name="gridimg-one-title" id="gridimg-one-title" value="<?php if (isset($body_grid_meta['gridimg-one-title'])) echo $body_grid_meta['gridimg-one-title'][0]; ?>" />
		  	</div>
		  	<div class="col-12">
			<strong><label for="body-grid-link-one" class="body-grid-link-one"><?php _e('Image One Link','firstfed-for-genesis')?></label></strong>
			<input type="text" name="body-grid-link-one" id="body-grid-link-one" value="<?php if (isset($body_grid_meta['body-grid-link-one'])) echo $body_grid_meta['body-grid-link-one'][0]; ?>" />
		  	</div>
		  	<div class="col-12">
			<strong><label for="body-grid-link-one-title" class="body-grid-link-one-title"><?php _e('Image One Link Title','firstfed-for-genesis')?></label></strong>
			<input type="text" name="body-grid-link-one-title" id="body-grid-link-one-title" value="<?php if (isset($body_grid_meta['body-grid-link-one-title'])) echo $body_grid_meta['body-grid-link-one-title'][0]; ?>" />
		  	</div>
			</div>
			<div class="col-md-6">
			<label for="body-grid-img-two" class="body-grid-img-two"><?php _e( '<b>Image Top Right</b>', 'firstfed-for-genesis' );?></label><br>
			<input type="text" name="body-grid-img-two" id="body-grid-img-two" value="<?php if ( isset ( $body_grid_meta['body-grid-img-two'] ) ) echo $body_grid_meta['body-grid-img-two'][0];?>" />
			<input type="button" id="body-grid-img-two-button" class="button body-grid-img-two" value="<?php _e( 'Choose or Upload an Image', 'firstfed-for-genesis' );?>" />
		  	<div class="col-12">
			<strong><label for="gridimg-two-title" class="gridimg-two-title"><?php _e('Image Two Title','firstfed-for-genesis')?></label></strong>
			<input type="text" name="gridimg-two-title" id="gridimg-two-title" value="<?php if (isset($body_grid_meta['gridimg-two-title'])) echo $body_grid_meta['gridimg-two-title'][0]; ?>" />
		  	</div>
			<div class="col-12">
			<strong><label for="body-grid-link-two" class="body-grid-link-two"><?php _e('Image Two Link','firstfed-for-genesis')?></label></strong>
			<input type="text" name="body-grid-link-two" id="body-grid-link-two" value="<?php if (isset($body_grid_meta['body-grid-link-two'])) echo $body_grid_meta['body-grid-link-two'][0]; ?>" />
			</div>
			<div class="col-12">
			<strong><label for="body-grid-link-two-title" class="body-grid-link-two-title"><?php _e('Image Two Link Title','firstfed-for-genesis')?></label></strong>
			<input type="text" name="body-grid-link-two-title" id="body-grid-link-two-title" value="<?php if (isset($body_grid_meta['body-grid-link-two-title'])) echo $body_grid_meta['body-grid-link-two-title'][0]; ?>" />
			</div>
			</div>
			<div class="col-md-6">
			<label for="body-grid-img-three" class="body-grid-img-three"><?php _e( '<b>Image Bottom Left</b>', 'firstfed-for-genesis' );?></label><br>
			<input type="text" name="body-grid-img-three" id="body-grid-img-three" value="<?php if ( isset ( $body_grid_meta['body-grid-img-three'] ) ) echo $body_grid_meta['body-grid-img-three'][0];?>" />
			<input type="button" id="body-grid-img-three-button" class="button body-grid-img-three" value="<?php _e( 'Choose or Upload an Image', 'firstfed-for-genesis' );?>" />
		  	<div class="col-12">
			<strong><label for="gridimg-three-title" class="gridimg-three-title"><?php _e('Image Three Title','firstfed-for-genesis')?></label></strong>
			<input type="text" name="gridimg-three-title" id="gridimg-three-title" value="<?php if (isset($body_grid_meta['gridimg-three-title'])) echo $body_grid_meta['gridimg-three-title'][0]; ?>" />
			</div>
			<div class="col-12">
			<strong><label for="body-grid-link-three" class="body-grid-link-three"><?php _e('Image Three Link','firstfed-for-genesis')?></label></strong>
			<input type="text" name="body-grid-link-three" id="body-grid-link-three" value="<?php if (isset($body_grid_meta['body-grid-link-three'])) echo $body_grid_meta['body-grid-link-three'][0]; ?>" />
			</div>
			<div class="col-12">
			<strong><label for="body-grid-link-three-title" class="body-grid-link-three-title"><?php _e('Image Three Link Title','firstfed-for-genesis')?></label></strong>
			<input type="text" name="body-grid-link-three-title" id="body-grid-link-three-title" value="<?php if (isset($body_grid_meta['body-grid-link-three-title'])) echo $body_grid_meta['body-grid-link-three-title'][0]; ?>" />
			</div>
			</div>
			<div class="col-md-6">
			<label for="body-grid-img-four" class="body-grid-img-four"><?php _e( '<b>Image Bottom Right</b>', 'firstfed-for-genesis' );?></label><br>
			<input type="text" name="body-grid-img-four" id="body-grid-img-four" value="<?php if ( isset ( $body_grid_meta['body-grid-img-four'] ) ) echo $body_grid_meta['body-grid-img-four'][0];?>" />
			<input type="button" id="body-grid-img-four-button" class="button body-grid-img-four" value="<?php _e( 'Choose or Upload an Image', 'firstfed-for-genesis' );?>" />
		  	<div class="col-12">
			<strong><label for="gridimg-four-title" class="gridimg-four-title"><?php _e('Image Four Title','firstfed-for-genesis')?></label></strong>
			<input type="text" name="gridimg-four-title" id="gridimg-four-title" value="<?php if (isset($body_grid_meta['gridimg-four-title'])) echo $body_grid_meta['gridimg-four-title'][0]; ?>" />
		  	</div>
			<div class="col-12">
			<strong><label for="body-grid-link-four" class="body-grid-link-four"><?php _e('Image Two Link','firstfed-for-genesis')?></label></strong>
			<input type="text" name="body-grid-link-four" id="body-grid-link-four" value="<?php if (isset($body_grid_meta['body-grid-link-four'])) echo $body_grid_meta['body-grid-link-four'][0]; ?>" />
			</div>
			<div class="col-12">
			<strong><label for="body-grid-link-four-title" class="body-grid-link-four-title"><?php _e('Image Two Link Title','firstfed-for-genesis')?></label></strong>
			<input type="text" name="body-grid-link-four-title" id="body-grid-link-four-title" value="<?php if (isset($body_grid_meta['body-grid-link-four-title'])) echo $body_grid_meta['body-grid-link-four-title'][0]; ?>" />
			</div>
			</div>
			<div style="width:100%; max-width: 100%;" class="card">
			<strong><label for="grid-content" class="grid-content"><?php _e( 'Grid CTA Content', 'firstfed-for-genesis' )?></label></strong>
			<textarea style="width: 100%;" rows="6" name="grid-content" id="grid-content"><?php if ( isset ( $body_grid_meta['grid-content'] ) ) echo $body_grid_meta['grid-content'][0]; ?></textarea>
			</div>
		  	<div class="col-12">
			<strong><label for="full-width-video-fp" class="full-width-video-fp"><?php _e('Full Width Video','firstfed-for-genesis')?></label></strong>
			<input type="url" style="width:100%;" name="full-width-video-fp" id="full-width-video-fp" value="<?php if (isset($body_grid_meta['full-width-video-fp'])) echo $body_grid_meta['full-width-video-fp'][0]; ?>" />
			<strong><label for="full-width-video-title" class="full-width-video-title"><?php _e('Full Width Video Title','firstfed-for-genesis')?></label></strong>
			<input type="text" style="width:100%;" name="full-width-video-title" id="full-width-video-title" value="<?php if (isset($body_grid_meta['full-width-video-title'])) echo $body_grid_meta['full-width-video-title'][0]; ?>" />
			<strong><label for="full-width-video-text" class="full-width-video-text"><?php _e( 'Full Width Video Text', 'firstfed-for-genesis' )?></label></strong>
			<textarea style="width: 100%;" rows="4" name="full-width-video-text" id="full-width-video-text"><?php if ( isset ( $body_grid_meta['full-width-video-text'] ) ) echo $body_grid_meta['full-width-video-text'][0]; ?></textarea>
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
	if( isset( $_POST[ 'gridimg-one-title' ] ) ) {
	  update_post_meta( $post_id, 'gridimg-one-title', $_POST[ 'gridimg-one-title' ] );
	}
	if( isset( $_POST[ 'body-grid-link-one' ] ) ) {
	  update_post_meta( $post_id, 'body-grid-link-one', $_POST[ 'body-grid-link-one' ] );
	}
	if( isset( $_POST[ 'body-grid-link-one-title' ] ) ) {
	  update_post_meta( $post_id, 'body-grid-link-one-title', $_POST[ 'body-grid-link-one-title' ] );
	}
	if( isset( $_POST[ 'body-grid-img-two' ] ) ) {
	  update_post_meta( $post_id, 'body-grid-img-two', $_POST[ 'body-grid-img-two' ] );
	}
	if( isset( $_POST[ 'gridimg-two-title' ] ) ) {
	  update_post_meta( $post_id, 'gridimg-two-title', $_POST[ 'gridimg-two-title' ] );
	}
	if( isset( $_POST[ 'body-grid-link-two' ] ) ) {
	  update_post_meta( $post_id, 'body-grid-link-two', $_POST[ 'body-grid-link-two' ] );
	}
	if( isset( $_POST[ 'body-grid-link-two-title' ] ) ) {
	  update_post_meta( $post_id, 'body-grid-link-two-title', $_POST[ 'body-grid-link-two-title' ] );
	}
	if( isset( $_POST[ 'body-grid-img-three' ] ) ) {
	  update_post_meta( $post_id, 'body-grid-img-three', $_POST[ 'body-grid-img-three' ] );
	}
	if( isset( $_POST[ 'gridimg-three-title' ] ) ) {
	  update_post_meta( $post_id, 'gridimg-three-title', $_POST[ 'gridimg-three-title' ] );
	}
	if( isset( $_POST[ 'body-grid-link-three' ] ) ) {
	  update_post_meta( $post_id, 'body-grid-link-three', $_POST[ 'body-grid-link-three' ] );
	}
	if( isset( $_POST[ 'body-grid-link-three-title' ] ) ) {
	  update_post_meta( $post_id, 'body-grid-link-three-title', $_POST[ 'body-grid-link-three-title' ] );
	}
	if( isset( $_POST[ 'body-grid-img-four' ] ) ) {
	  update_post_meta( $post_id, 'body-grid-img-four', $_POST[ 'body-grid-img-four' ] );
	}
	if( isset( $_POST[ 'gridimg-four-title' ] ) ) {
	  update_post_meta( $post_id, 'gridimg-four-title', $_POST[ 'gridimg-four-title' ] );
	}
	if( isset( $_POST[ 'body-grid-link-four' ] ) ) {
	  update_post_meta( $post_id, 'body-grid-link-four', $_POST[ 'body-grid-link-four' ] );
	}
	if( isset( $_POST[ 'body-grid-link-four-title' ] ) ) {
	  update_post_meta( $post_id, 'body-grid-link-four-title', $_POST[ 'body-grid-link-four-title' ] );
	}
	if( isset( $_POST[ 'grid-content' ] ) ) {
	  update_post_meta( $post_id, 'grid-content', $_POST[ 'grid-content' ] );
	}
	if( isset( $_POST[ 'full-width-video-fp' ] ) ) {
	  update_post_meta( $post_id, 'full-width-video-fp', $_POST[ 'full-width-video-fp' ] );
	}
	if( isset( $_POST[ 'full-width-video-title' ] ) ) {
	  update_post_meta( $post_id, 'full-width-video-title', $_POST[ 'full-width-video-title' ] );
	}
  if( isset( $_POST[ 'full-width-video-text' ] ) ) {
	update_post_meta( $post_id, 'full-width-video-text', $_POST[ 'full-width-video-text' ] );
  }
}
