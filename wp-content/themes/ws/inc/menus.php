<?php


//===Theme main front menus===
register_nav_menus( array(
    'HeadMenuLeft'           => __( 'Header Menu Left', 'ws' ),
	'HeadMenuRight'           => __( 'Header Menu Right', 'ws' ),
    'FootMenu'       => __( 'Footer Menu',   	'ws' ),
) );


//===ACF options admin menu===
if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page();
    
}