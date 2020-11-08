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
							<div class="container">
							<div class="row justify-content-center">
							<div class="col-md-3">#1</div>
							<div class="col-md-3">#2</div>
							</div>
							<div class="row justify-content-center">
							<div class="col-md-3">#3</div>
							<div class="col-md-3">#4</div>
							</div>
							</div>
						</div>
					</div>
				</div>
	';
}
