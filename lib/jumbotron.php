<?php
	/*
	 * Adds Jumbotron to pages
	 */

	add_action('genesis_after_header', 'add_jumbotron', 15);
	function add_jumbotron() { global $post;
		global $post;
		$post_id = $post->ID;
		$default  = '';
		$jumbotron_bg_img   = get_the_post_thumbnail_url( $post->ID, 'full' );
		$jumbotron_title    = get_post_meta( get_the_ID(), 'jumbotron-title', true );
		$jumbotron_content  = get_post_meta( get_the_ID(), 'jumbotron-content', true );
		$page_featured_row  = get_post_meta( get_the_ID(), 'page-featured-row', true );

		if(is_page() && !is_front_page() && !is_home()) {

		  if ( has_post_thumbnail() ) {
			echo '
			<div id="jumbotron-cont" class="jumbotron jumbotron-fluid" style="background-image:url(' . $jumbotron_bg_img . ');">
			  <div class="container">';
			if ( $jumbotron_title !== $default ) {
			  echo '<h1 class="display-4">' . $jumbotron_title . '</h1>';
			} else {
			  echo '<h1 class="display-4">' . get_the_title( $post_id ) . '</h1>';
			}
			echo '<p class="lead">' . $jumbotron_content . '</p>
			  </div>
			</div>';
		  } else {
			return $default;
		  }

		  if ( $page_featured_row !== $default ) {
			echo '
						<div id="page-feature" class="container-fluid page-feature-row">
						  <div class="row">
							  <div class="card">
							  <div class="card-body">
							  	' . $page_featured_row . '
							  </div>
						    </div>
						  </div>
					  </div>
			  ';
		  }
		}
	}

	add_action( 'add_meta_boxes', 'add_jumbotron_page_meta' );
	function add_jumbotron_page_meta() {
		global $post;
		if(!empty($post)) {
			$pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
			if($pageTemplate == 'templates/page-template.php') {
				$types = array( 'post', 'page' );
				foreach ( $types as $type ) {
					add_meta_box( 'jumbotron_meta', __( 'Jumbotron Content', 'firstfed-for-genesis' ), 'jumbo_meta_callback', $types, 'normal', 'high' );
				}
			}
		}
	}

	function jumbo_meta_callback( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'jumbotron_nonce' );
	$jumbotron_meta  = get_post_meta( $post->ID );
?>
		<div style="margin-top: 1.618em;">
			<h3>Jumbotron Content</h3>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<strong><label for="jumbotron-title" class="sbm-row-title"><?php _e( 'Jumbotron Title', 'firstfed-for-genesis' )?></label></strong>
					<textarea style="width: 100%;" rows="4" name="jumbotron-title" id="jumbotron-title"><?php if ( isset ( $jumbotron_meta['jumbotron-title'] ) ) echo $jumbotron_meta['jumbotron-title'][0]; ?></textarea>
				</div>
				<div class="col-md-6">
					<strong><label for="jumbotron-content" class="sbm-row-content"><?php _e( 'Jumbotron Content', 'firstfed-for-genesis' )?></label></strong>
					<textarea style="width: 100%;" rows="4" name="jumbotron-content" id="jumbotron-content"><?php if ( isset ( $jumbotron_meta['jumbotron-content'] ) ) echo $jumbotron_meta['jumbotron-content'][0]; ?></textarea>
				</div>
			</div>
		<div class="row">
			<div class="col-12">
				<strong><label for="page-featured-row" class="sbm-row-content"><?php _e( 'Featured Row', 'firstfed-for-genesis' )?></label></strong>
				<textarea style="width: 100%;" rows="4" name="page-featured-row" id="page-featured-row"><?php if ( isset ( $jumbotron_meta['page-featured-row'] ) ) echo $jumbotron_meta['page-featured-row'][0]; ?></textarea>
			</div>
		</div>
		</div>
<?php }


//Sanitize
// Saves the custom meta input
	add_action('save_post', 'jumbotron_meta_save');
	function jumbotron_meta_save($post_id) {

		// Checks save status
		$is_autosave    = wp_is_post_autosave( $post_id );
		$is_revision    = wp_is_post_revision( $post_id );
		$is_valid_nonce = ( isset( $_POST['jumbotron_nonce'] ) && wp_verify_nonce( $_POST['jumbotron_nonce'], basename( __FILE__ ) ) ) ? 'true' : 'false';

		// Exits script depending on save status
		if ( $is_autosave || $is_revision || ! $is_valid_nonce ) {
			return;
		}

		// Checks for input and sanitizes/saves if needed
		if ( isset( $_POST['jumbotron-title'] ) ) {
			update_post_meta( $post_id, 'jumbotron-title', $_POST['jumbotron-title'] );
		}
		if ( isset( $_POST['jumbotron-content'] ) ) {
			update_post_meta( $post_id, 'jumbotron-content', $_POST['jumbotron-content'] );
		}
		if ( isset( $_POST['page-featured-row'] ) ) {
			update_post_meta( $post_id, 'page-featured-row', $_POST['page-featured-row'] );
		}
	}
