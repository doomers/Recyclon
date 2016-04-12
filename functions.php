<?php


// This theme uses wp_nav_menu() in 2 locations.
    add_action( 'init', 'register_my_menus' );
    function register_my_menus() {
		register_nav_menus(
			array(
				'menu-1' => __( 'Menu 1' ),
				'menu-2' => __( 'Menu 2' )
			)
		);
    }


/**
 * add thumbnail support, create multiple media sizes
 */
if ( function_exists( 'add_theme_support' ) ) { 
  add_theme_support( 'post-thumbnails' ); 
}
set_post_thumbnail_size( 189, 125, true );
add_image_size( 'featured-page', 1920, 420, true );
add_image_size( 'featured-thumb', 360, 240, true );



/**
 * allow wordpress to display galleries in html5 form (required for custom gallery code to work)
 */
add_theme_support( 'html5', array( 'gallery', 'caption' ) );


/**
 * Force wordpress gallery shortcodes to link thumbnails to 'large' version of image (instead of full-size)
 */
function oikos_get_attachment_link_filter( $content, $post_id, $size, $permalink ) {
 
    // Only do this if we're getting the file URL
    if (! $permalink) {
        // This returns an array of (url, width, height)
        $image = wp_get_attachment_image_src( $post_id, 'large' );
        $new_content = preg_replace('/href=\'(.*?)\'/', 'href=\'' . $image[0] . '\'', $content );
        return $new_content;
    } else {
        return $content;
    }
}
add_filter('wp_get_attachment_link', 'oikos_get_attachment_link_filter', 10, 4);



?>
