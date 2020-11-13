<?php

	/**
	 * Template Name: Basic Page Template
	 *
	 * @package      First Fed Theme
	 * @since        1.0
	 * @link         https://github.com/DevWellingtonStudio/first-fed-theme
	 * @author       Wellington Studio
	 * @copyright    Copyright (c) 2020, Wellington Studio
	 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
	 *
	 */

	/** Replace the standard loop with our custom loop */
	remove_action( 'genesis_loop', 'genesis_do_loop' );
	remove_action( 'genesis_entry_content', 'genesis_do_post_content' );
	add_action( 'genesis_loop', 'child_do_custom_loop' );

	function child_do_custom_loop() {

		$content = get_post()->post_content;
if(empty($content)):?>

 POST CONTENT IS EMPTY


<?php else:?>


     <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php the_content(); ?>

     <?php endwhile; else: endif; ?>


<?php endif;





	}



	genesis();

