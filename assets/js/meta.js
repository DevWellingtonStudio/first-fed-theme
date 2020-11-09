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

});
