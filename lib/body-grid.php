<?php
/*
 * Body grid
 */

add_action('genesis_after_content_sidebar_wrap', 'add_body_grid', 5);
function add_body_grid() {
	echo '
				<div id="grid-body">
				<div class="container-fluid">
				<div class="row">
				<div class="title-area text-center">
				<h3>Grid Body</h3>
				</div>
				</div>
				</div>
				</div>
	';
}
