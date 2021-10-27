<?php

// enqueue parent theme styles
function my_theme_enqueue_styles() {

	$showcase_style = 'munio-showcase';
	$portfolio_style = 'munio-portfolio';
	$blog_style = 'munio-blog';
	$shortcodes_style = 'munio-shortcodes';
	$assets_style = 'munio-assets';
	$parent_style = 'parent-style';
	
	wp_enqueue_style( $showcase_style, get_template_directory_uri() . '/css/showcase.css' );
	wp_enqueue_style( $portfolio_style, get_template_directory_uri() . '/css/portfolio.css' );
	wp_enqueue_style( $blog_style, get_template_directory_uri() . '/css/blog.css' );
	wp_enqueue_style( $shortcodes_style, get_template_directory_uri() . '/css/shortcodes.css' );
	wp_enqueue_style( $assets_style, get_template_directory_uri() . '/css/assets.css' );
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	
	// if WpBakery is installed, make sure we enqueue js composer syles and library 
	if ( function_exists( 'vc_set_as_theme' ) ) {
		
		wp_enqueue_script( 'wpb_composer_front_js' );

		wp_enqueue_style( 'js_composer_front' );
		wp_enqueue_style( 'js_composer_custom_css' );
		
		// register our child script that calls vc_js() when an ajax call anded
		wp_register_script( 'childscript', get_stylesheet_directory_uri() . '/childscript.js', array('jquery'), false, true );
		wp_enqueue_script( 'childscript' );
		
		if( !function_exists( 'filter_the_content_vc_custom_styles' ) ){
			
			// retrieve vc custom CSS styles added for each row
			function filter_the_content_vc_custom_styles( $content ) {
		
				if ( isset( $_GET['preview'] ) && 'true' === $_GET['preview'] ) {
					 
					 return $content;
				}
				
				/* AJAX check  */
				if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
					
					$this_post_id = null;
				
					// Check if we're inside the main loop in a single post page.
					if ( ( is_single() || is_page() ) && in_the_loop() &&  is_main_query() ) {
						
						if ( is_front_page() || is_home() ) {
							$this_post_id = get_queried_object_id();
						} else if ( is_singular() ) {
							if ( !$this_post_id ) {
								$this_post_id = get_the_ID();
							}
						}

						$post_custom_css = get_metadata( 'post', $this_post_id, '_wpb_shortcodes_custom_css', true );
						if ( ! empty( $post_custom_css ) ) {
							
							$post_custom_css = strip_tags( $post_custom_css );
							return $content . '<style type="text/css" data-type="vc_custom-css">' . $post_custom_css . '</style>';
						}
						
					}
				}
				
				return $content;
			}
		}
		add_filter( 'the_content', 'filter_the_content_vc_custom_styles' );
	}
	
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

?>