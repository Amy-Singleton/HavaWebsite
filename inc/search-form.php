<?php
function havawebsite_search_form( $form ) {
	$form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
	<div><label class="screen-reader-text" for="s">' . __( 'Search for:', 'havawebsite' ) . '</label>
	<input type="text" value="' . get_search_query() . '" name="s" id="s" class="col-sm-12"  placeholder="Search..."/>
	<input type="hidden" id="searchsubmit" value="'. esc_attr__( 'Search', 'havawebsite' ) .'" />
	</div>
	</form>';
	return $form;
}
add_filter( 'get_search_form', 'havawebsite_search_form' );

?>