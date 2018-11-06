<?php 
/**
 * WordPress Custom Login Logo
 */
 
function custom_login_logo() {
	echo '<style type="text/css">
       .login h1 a {
            background-image:url(';
       echo get_theme_mod( 'havawebsite_logo_image'); echo') !important;
            background-size: 86% auto;
            height: 70px;
            width: 300px;
        }
         </style>';
}
add_action( 'login_head', 'custom_login_logo' );

    // custom login url
    function custom_login_url(){
    return esc_url(home_url()); // website url
    }
add_filter('login_headerurl', 'custom_login_url');

function havawebsite_custom_title_on_logo() {
	return 'Powered by the HavaWebsite Theme';
}
add_filter('login_headertitle', 'havawebsite_custom_title_on_logo');
?>