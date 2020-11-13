/*
 * Loads the images added in the meta fields
 */
jQuery(document).ready( function($){ "use strict";

  // Instantiates the variable that holds the media library frame.
  var body_grid_img_one;

  // Runs when the image button is clicked.
  $('#body-grid-img-one-button').click(function(e){

	 // Prevents the default action from occuring.
	 e.preventDefault();

	 // If the frame already exists, re-open it.
	 if ( body_grid_img_one ) {
		body_grid_img_one.open();
		return;
	 }

	 // Sets up the media library frame
	 body_grid_img_one = wp.media.frames.body_grid_img_one = wp.media({
		title: meta_image.title,
		button: { text:  meta_image.button },
		library: { type: 'image' }
	 });

	 // Runs when an image is selected.
	 body_grid_img_one.on('select', function(){

		// Grabs the attachment selection and creates a JSON representation of the model.
		var media_attachment = body_grid_img_one.state().get('selection').first().toJSON();

		// Sends the attachment URL to our custom image input field.
		$('#body-grid-img-one').val(media_attachment.url);
	 });

	 // Opens the media library frame.
	 body_grid_img_one.open();
  });


  // Instantiates the variable that holds the media library frame.
  var body_grid_img_two;

  // Runs when the image button is clicked.
  $('#body-grid-img-two-button').click(function(e){

	 // Prevents the default action from occuring.
	 e.preventDefault();

	 // If the frame already exists, re-open it.
	 if ( body_grid_img_two ) {
		body_grid_img_two.open();
		return;
	 }

	 // Sets up the media library frame
	 body_grid_img_two = wp.media.frames.body_grid_img_two = wp.media({
		title: meta_image.title,
		button: { text:  meta_image.button },
		library: { type: 'image' }
	 });

	 // Runs when an image is selected.
	 body_grid_img_two.on('select', function(){

		// Grabs the attachment selection and creates a JSON representation of the model.
		var media_attachment = body_grid_img_two.state().get('selection').first().toJSON();

		// Sends the attachment URL to our custom image input field.
		$('#body-grid-img-two').val(media_attachment.url);
	 });

	 // Opens the media library frame.
	 body_grid_img_two.open();
  });

  // Instantiates the variable that holds the media library frame.
  var body_grid_img_three;

  // Runs when the image button is clicked.
  $('#body-grid-img-three-button').click(function(e){

	 // Prevents the default action from occuring.
	 e.preventDefault();

	 // If the frame already exists, re-open it.
	 if ( body_grid_img_three ) {
		body_grid_img_three.open();
		return;
	 }

	 // Sets up the media library frame
	 body_grid_img_three = wp.media.frames.body_grid_img_three = wp.media({
		title: meta_image.title,
		button: { text:  meta_image.button },
		library: { type: 'image' }
	 });

	 // Runs when an image is selected.
	 body_grid_img_three.on('select', function(){

		// Grabs the attachment selection and creates a JSON representation of the model.
		var media_attachment = body_grid_img_three.state().get('selection').first().toJSON();

		// Sends the attachment URL to our custom image input field.
		$('#body-grid-img-three').val(media_attachment.url);
	 });

	 // Opens the media library frame.
	 body_grid_img_three.open();
  });

  // Instantiates the variable that holds the media library frame.
  var body_grid_img_four;

  // Runs when the image button is clicked.
  $('#body-grid-img-four-button').click(function(e){

	 // Prevents the default action from occuring.
	 e.preventDefault();

	 // If the frame already exists, re-open it.
	 if ( body_grid_img_four ) {
		body_grid_img_four.open();
		return;
	 }

	 // Sets up the media library frame
	 body_grid_img_four = wp.media.frames.body_grid_img_four = wp.media({
		title: meta_image.title,
		button: { text:  meta_image.button },
		library: { type: 'image' }
	 });

	 // Runs when an image is selected.
	 body_grid_img_four.on('select', function(){

		// Grabs the attachment selection and creates a JSON representation of the model.
		var media_attachment = body_grid_img_four.state().get('selection').first().toJSON();

		// Sends the attachment URL to our custom image input field.
		$('#body-grid-img-four').val(media_attachment.url);
	 });

	 // Opens the media library frame.
	 body_grid_img_four.open();
  });

  // Instantiates the variable that holds the media library frame.
  var feat_img_one;

  // Runs when the image button is clicked.
  $('#feat-img-one-button').click(function(e){

	 // Prevents the default action from occuring.
	 e.preventDefault();

	 // If the frame already exists, re-open it.
	 if ( feat_img_one ) {
		feat_img_one.open();
		return;
	 }

	 // Sets up the media library frame
	 feat_img_one = wp.media.frames.feat_img_one = wp.media({
		title: meta_image.title,
		button: { text:  meta_image.button },
		library: { type: 'image' }
	 });

	 // Runs when an image is selected.
	 feat_img_one.on('select', function(){

		// Grabs the attachment selection and creates a JSON representation of the model.
		var media_attachment = feat_img_one.state().get('selection').first().toJSON();

		// Sends the attachment URL to our custom image input field.
		$('#feat-img-one').val(media_attachment.url);
	 });

	 // Opens the media library frame.
	 feat_img_one.open();
  });

  // Instantiates the variable that holds the media library frame.
  var feat_img_two;

  // Runs when the image button is clicked.
  $('#feat-img-two-button').click(function(e){

	 // Prevents the default action from occuring.
	 e.preventDefault();

	 // If the frame already exists, re-open it.
	 if ( feat_img_two ) {
		feat_img_two.open();
		return;
	 }

	 // Sets up the media library frame
	 feat_img_two = wp.media.frames.feat_img_two = wp.media({
		title: meta_image.title,
		button: { text:  meta_image.button },
		library: { type: 'image' }
	 });

	 // Runs when an image is selected.
	 feat_img_two.on('select', function(){

		// Grabs the attachment selection and creates a JSON representation of the model.
		var media_attachment = feat_img_two.state().get('selection').first().toJSON();

		// Sends the attachment URL to our custom image input field.
		$('#feat-img-two').val(media_attachment.url);
	 });

	 // Opens the media library frame.
	 feat_img_two.open();
  });

  // Instantiates the variable that holds the media library frame.
  var feat_img_three;

  // Runs when the image button is clicked.
  $('#feat-img-three-button').click(function(e){

	 // Prevents the default action from occuring.
	 e.preventDefault();

	 // If the frame already exists, re-open it.
	 if ( feat_img_three ) {
		feat_img_three.open();
		return;
	 }

	 // Sets up the media library frame
	 feat_img_three = wp.media.frames.feat_img_three = wp.media({
		title: meta_image.title,
		button: { text:  meta_image.button },
		library: { type: 'image' }
	 });

	 // Runs when an image is selected.
	 feat_img_three.on('select', function(){

		// Grabs the attachment selection and creates a JSON representation of the model.
		var media_attachment = feat_img_three.state().get('selection').first().toJSON();

		// Sends the attachment URL to our custom image input field.
		$('#feat-img-three').val(media_attachment.url);
	 });

	 // Opens the media library frame.
	 feat_img_three.open();
  });


  // Instantiates the variable that holds the media library frame.
  var alt_feat_img_one;

  // Runs when the image button is clicked.
  $('#addtl-feat-img-one-button').click(function(e){

	 // Prevents the default action from occuring.
	 e.preventDefault();

	 // If the frame already exists, re-open it.
	 if ( alt_feat_img_one ) {
		alt_feat_img_one.open();
		return;
	 }

	 // Sets up the media library frame
	 alt_feat_img_one = wp.media.frames.alt_feat_img_one = wp.media({
		title: meta_image.title,
		button: { text:  meta_image.button },
		library: { type: 'image' }
	 });

	 // Runs when an image is selected.
	 alt_feat_img_one.on('select', function(){

		// Grabs the attachment selection and creates a JSON representation of the model.
		var media_attachment = alt_feat_img_one.state().get('selection').first().toJSON();

		// Sends the attachment URL to our custom image input field.
		$('#addtl-feat-img-one').val(media_attachment.url);
	 });

	 // Opens the media library frame.
	 alt_feat_img_one.open();
  });

  // Instantiates the variable that holds the media library frame.
  var addtl_featette_img_one;

  // Runs when the image button is clicked.
  $('#addtl-featette-img-one-button').click(function(e){

	 // Prevents the default action from occuring.
	 e.preventDefault();

	 // If the frame already exists, re-open it.
	 if ( addtl_featette_img_one ) {
		addtl_featette_img_one.open();
		return;
	 }

	 // Sets up the media library frame
	 addtl_featette_img_one = wp.media.frames.addtl_featette_img_one = wp.media({
		title: meta_image.title,
		button: { text:  meta_image.button },
		library: { type: 'image' }
	 });

	 // Runs when an image is selected.
	 addtl_featette_img_one.on('select', function(){

		// Grabs the attachment selection and creates a JSON representation of the model.
		var media_attachment = addtl_featette_img_one.state().get('selection').first().toJSON();

		// Sends the attachment URL to our custom image input field.
		$('#addtl-featette-img-one').val(media_attachment.url);
	 });

	 // Opens the media library frame.
	 addtl_featette_img_one.open();
  });


  // Instantiates the variable that holds the media library frame.
  var addtl_featette_img_two;

  // Runs when the image button is clicked.
  $('#addtl-featette-img-two-button').click(function(e){

	 // Prevents the default action from occuring.
	 e.preventDefault();

	 // If the frame already exists, re-open it.
	 if ( addtl_featette_img_two ) {
		addtl_featette_img_two.open();
		return;
	 }

	 // Sets up the media library frame
	 addtl_featette_img_two = wp.media.frames.addtl_featette_img_two = wp.media({
		title: meta_image.title,
		button: { text:  meta_image.button },
		library: { type: 'image' }
	 });

	 // Runs when an image is selected.
	 addtl_featette_img_two.on('select', function(){

		// Grabs the attachment selection and creates a JSON representation of the model.
		var media_attachment = addtl_featette_img_two.state().get('selection').first().toJSON();

		// Sends the attachment URL to our custom image input field.
		$('#addtl-featette-img-two').val(media_attachment.url);
	 });

	 // Opens the media library frame.
	 addtl_featette_img_two.open();
  });

  // Instantiates the variable that holds the media library frame.
  var image_text_overlay_uploader;

  // Runs when the image button is clicked.
  $('#image-text-overlay-img-button').click(function(e){

	 // Prevents the default action from occuring.
	 e.preventDefault();

	 // If the frame already exists, re-open it.
	 if ( image_text_overlay_uploader ) {
		image_text_overlay_uploader.open();
		return;
	 }

	 // Sets up the media library frame
	 image_text_overlay_uploader = wp.media.frames.image_text_overlay_uploader = wp.media({
		title: meta_image.title,
		button: { text:  meta_image.button },
		library: { type: 'image' }
	 });

	 // Runs when an image is selected.
	 image_text_overlay_uploader.on('select', function(){

		// Grabs the attachment selection and creates a JSON representation of the model.
		var media_attachment = image_text_overlay_uploader.state().get('selection').first().toJSON();

		// Sends the attachment URL to our custom image input field.
		$('#image-text-overlay-img').val(media_attachment.url);
	 });

	 // Opens the media library frame.
	 image_text_overlay_uploader.open();
  });


  // Instantiates the variable that holds the media library frame.
  var footer_featurette_image;

  // Runs when the image button is clicked.
  $('#footer-row-featurette-img-button').click(function(e){

	 // Prevents the default action from occuring.
	 e.preventDefault();

	 // If the frame already exists, re-open it.
	 if ( footer_featurette_image ) {
		footer_featurette_image.open();
		return;
	 }

	 // Sets up the media library frame
	 footer_featurette_image = wp.media.frames.footer_featurette_image = wp.media({
		title: meta_image.title,
		button: { text:  meta_image.button },
		library: { type: 'image' }
	 });

	 // Runs when an image is selected.
	 footer_featurette_image.on('select', function(){

		// Grabs the attachment selection and creates a JSON representation of the model.
		var media_attachment = footer_featurette_image.state().get('selection').first().toJSON();

		// Sends the attachment URL to our custom image input field.
		$('#footer-row-featurette-img').val(media_attachment.url);
	 });

	 // Opens the media library frame.
	 footer_featurette_image.open();
  });

});
