<?php

	add_action( 'add_meta_boxes', 'page_features_custom_meta' );
	function page_features_custom_meta() {
		global $post;
		if(!empty($post)) {
			$pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
			if($pageTemplate == 'templates/page-template.php') {
				$types = array( 'post', 'page' );
				foreach ( $types as $type ) {
					add_meta_box( 'pagefeatures_meta', __( 'Page Features', 'firstfed-for-genesis' ), 'pagefeatures_meta_callback', $types, 'normal', 'high' );
				}
			}
		}
	}

	function pagefeatures_meta_callback( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'pagefeatures_nonce' );
	$page_features_grid_meta  = get_post_meta( $post->ID );
?>
		<div style="margin-top: 1.618em;">
			<h3>Page Features Section</h3>
		</div>

		<div class="container">

			<div class="row">

				<div class="col-md-6">
				  <label for="feat-img-one" class="feat-img-one"><?php _e( '<b>Feature One Image</b>', 'firstfed-for-genesis' );?></label><br>
				  <input type="text" name="feat-img-one" id="feat-img-one" value="<?php if ( isset ( $page_features_grid_meta['feat-img-one'] ) ) echo $page_features_grid_meta['feat-img-one'][0];?>" />
				  <input type="button" id="feat-img-one-button" class="button feat-img-one" value="<?php _e( 'Choose or Upload an Image', 'firstfed-for-genesis' );?>" />
				</div>

				<div class="col-md-6">
				  <strong><label for="feat-text-one" class="feat-text-one"><?php _e( 'Feature One Text', 'firstfed-for-genesis' )?></label></strong>
				  <textarea style="width: 100%;" rows="6" name="feat-text-one" id="feat-text-one"><?php if ( isset ( $page_features_grid_meta['feat-text-one'] ) ) echo $page_features_grid_meta['feat-text-one'][0]; ?></textarea>
				</div>

			</div>
		  	<div class="row">

			  <div class="col-12">
				<strong><label for="feat-cta-text-1" class="feat-cta-text-1"><?php _e( '<b>Feature CTA Text &#35;1</b>', 'firstfed-for-genesis' )?></label></strong>
				<textarea style="width: 100%;" rows="6" name="feat-cta-text-1" id="feat-cta-text-1"><?php if ( isset ( $page_features_grid_meta['feat-cta-text-1'] ) ) echo $page_features_grid_meta['feat-cta-text-1'][0]; ?></textarea>
			  </div>

			  <div class="col-md-6">
				<label for="feat-img-two" class="feat-img-two"><?php _e( '<b>Feature Two Image</b>', 'firstfed-for-genesis' );?></label><br>
				<input type="text" name="feat-img-two" id="feat-img-two" value="<?php if ( isset ( $page_features_grid_meta['feat-img-two'] ) ) echo $page_features_grid_meta['feat-img-two'][0];?>" />
				<input type="button" id="feat-img-two-button" class="button feat-img-two" value="<?php _e( 'Choose or Upload an Image', 'firstfed-for-genesis' );?>" />
			  </div>

			  <div class="col-md-6">
				<strong><label for="feat-text-two" class="feat-text-two"><?php _e( 'Feature Two Text', 'firstfed-for-genesis' )?></label></strong>
				<textarea style="width: 100%;" rows="6" name="feat-text-two" id="feat-text-two"><?php if ( isset ( $page_features_grid_meta['feat-text-two'] ) ) echo $page_features_grid_meta['feat-text-two'][0]; ?></textarea>
			  </div>

			</div>
		  	<div class="row">

			  <div class="col-12">
				<strong><label for="feat-cta-text-2" class="feat-cta-text-2"><?php _e( '<b>Feature CTA Text &#35;2</b>', 'firstfed-for-genesis' )?></label></strong>
				<textarea style="width: 100%;" rows="6" name="feat-cta-text-2" id="feat-cta-text-2"><?php if ( isset ( $page_features_grid_meta['feat-cta-text-2'] ) ) echo $page_features_grid_meta['feat-cta-text-2'][0]; ?></textarea>
			  </div>

			  <div class="col-md-6">
				<label for="feat-img-three" class="feat-img-three"><?php _e( '<b>Feature Three Image</b>', 'firstfed-for-genesis' );?></label><br>
				<input type="text" name="feat-img-three" id="feat-img-three" value="<?php if ( isset ( $page_features_grid_meta['feat-img-three'] ) ) echo $page_features_grid_meta['feat-img-three'][0];?>" />
				<input type="button" id="feat-img-three-button" class="button feat-img-three" value="<?php _e( 'Choose or Upload an Image', 'firstfed-for-genesis' );?>" />
			  </div>

			  <div class="col-md-6">
				<strong><label for="feat-text-three" class="feat-text-three"><?php _e( 'Feature Three Text', 'firstfed-for-genesis' )?></label></strong>
				<textarea style="width: 100%;" rows="6" name="feat-text-three" id="feat-text-three"><?php if ( isset ( $page_features_grid_meta['feat-text-three'] ) ) echo $page_features_grid_meta['feat-text-three'][0]; ?></textarea>
			  </div>

		  </div>
		  <div class="row">

			  <div class="col-12">
				<strong><label for="feat-cta-text-3" class="feat-cta-text-3"><?php _e( '<b>Feature CTA Text &#35;3</b>', 'firstfed-for-genesis' )?></label></strong>
				<textarea style="width: 100%;" rows="6" name="feat-cta-text-3" id="feat-cta-text-3"><?php if ( isset ( $page_features_grid_meta['feat-cta-text-3'] ) ) echo $page_features_grid_meta['feat-cta-text-3'][0]; ?></textarea>
			  </div>

		  </div>

		  <div class="row">

			<h2>Additional Features and Featurettes</h2>

			<div class="col-md-6">
			  <label for="addtl-feat-img-one" class="addtl-feat-img-one"><?php _e( '<b>Additional Featurette Image One</b>', 'firstfed-for-genesis' );?></label><br>
			  <input type="text" name="addtl-feat-img-one" id="addtl-feat-img-one" value="<?php if ( isset ( $page_features_grid_meta['addtl-feat-img-one'] ) ) echo $page_features_grid_meta['addtl-feat-img-one'][0];?>" />
			  <input type="button" id="addtl-feat-img-one-button" class="addtl-feat-img-one" value="<?php _e( 'Choose or Upload an Image', 'firstfed-for-genesis' );?>" />
			</div>

			<div class="col-md-6">
			  <strong><label for="alt-feat-text-one" class="alt-feat-text-one"><?php _e( 'Feature Three Text', 'firstfed-for-genesis' )?></label></strong>
			  <textarea style="width: 100%;" rows="6" name="alt-feat-text-one" id="alt-feat-text-one"><?php if ( isset ( $page_features_grid_meta['alt-feat-text-one'] ) ) echo $page_features_grid_meta['alt-feat-text-one'][0]; ?></textarea>
			</div>



		  </div>



		</div>

<?php }

	// Sanitize
	add_action('save_post', 'page_features_meta_save');
	function page_features_meta_save($post_id) {

		// Checks save status
		$is_autosave    = wp_is_post_autosave( $post_id );
		$is_revision    = wp_is_post_revision( $post_id );
		$is_valid_nonce = ( isset( $_POST['pagefeatures_nonce'] ) && wp_verify_nonce( $_POST['pagefeatures_nonce'], basename( __FILE__ ) ) ) ? 'true' : 'false';

		// Exits script depending on save status
		if ( $is_autosave || $is_revision || ! $is_valid_nonce ) {
			return;
		}

		// Checks for input and sanitizes/saves if needed
		if ( isset( $_POST['feat-img-one'] ) ) {
			update_post_meta( $post_id, 'feat-img-one', $_POST['feat-img-one'] );
		}
		if ( isset( $_POST['feat-img-two'] ) ) {
		  update_post_meta( $post_id, 'feat-img-two', $_POST['feat-img-two'] );
		}
		if ( isset( $_POST['feat-img-three'] ) ) {
		  update_post_meta( $post_id, 'feat-img-three', $_POST['feat-img-three'] );
		}
		if ( isset( $_POST['feat-text-one'] ) ) {
			update_post_meta( $post_id, 'feat-text-one', $_POST['feat-text-one'] );
		}
		if ( isset( $_POST['feat-text-two'] ) ) {
		  update_post_meta( $post_id, 'feat-text-two', $_POST['feat-text-two'] );
		}
		if ( isset( $_POST['feat-text-three'] ) ) {
		  update_post_meta( $post_id, 'feat-text-three', $_POST['feat-text-three'] );
		}
		if ( isset( $_POST['feat-cta-text-1'] ) ) {
		  update_post_meta( $post_id, 'feat-cta-text-1', $_POST['feat-cta-text-1'] );
		}
		if ( isset( $_POST['feat-cta-text-2'] ) ) {
		  update_post_meta( $post_id, 'feat-cta-text-2', $_POST['feat-cta-text-2'] );
		}
		if ( isset( $_POST['feat-cta-text-3'] ) ) {
		  update_post_meta( $post_id, 'feat-cta-text-3', $_POST['feat-cta-text-3'] );
		}
		if ( isset( $_POST['addtl-feat-img-one'] ) ) {
		  update_post_meta( $post_id, 'addtl-feat-img-one', $_POST['addtl-feat-img-one'] );
		}
		if ( isset( $_POST['alt-feat-text-one'] ) ) {
		  update_post_meta( $post_id, 'alt-feat-text-one', $_POST['alt-feat-text-one'] );
		}
	}
