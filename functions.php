<?php 

if (!current_user_can('administrator')):
  show_admin_bar(false);
endif;

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}

add_action( 'wp_enqueue_scripts', 'wpassist_remove_block_library_css' );
function wpassist_remove_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
}

remove_action( 'wp_head', 'print_emoji_detection_script', 7); 
remove_action( 'wp_print_styles', 'print_emoji_styles');
remove_action( 'wp_head', 'wp_resource_hints', 2);
remove_action( 'wp_head', 'feed_links_extra', 3 ); 
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); 
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'wp_head', 'wp_oembed_add_host_js' );
remove_action( 'wp_head', 'rest_output_link_wp_head', 10, 0 );

