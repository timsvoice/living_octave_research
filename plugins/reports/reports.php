<?php
/*
Plugin Name: Report Post
Plugin URI: http://www.timothyvoice.com/
Description: Declares a plugin that will create a custom post type displaying Reports.
Version: 1.0
Author: Timothy Voice
Author URI: http://www.timothyvoice.com
License: GPLv2
*/
?>

<?php

add_action( 'init', 'create_report' );

function create_report() {
    register_post_type( 'reports',
        array(
            'labels' => array(
                'name' => 'Reports',
                'singular_name' => 'Reports',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Reports',
                'edit' => 'Edit',
                'edit_item' => 'Edit Reports',
                'new_item' => 'New Reports',
                'view' => 'View',
                'view_item' => 'View Reports',
                'search_items' => 'Search reports',
                'not_found' => 'No reports found',
                'not_found_in_trash' => 'No reports found in Trash',
                'parent' => 'Parent Reports'
            ),
 
            'public' => true,
            'menu_position' => 5,
            'taxonomies' => array( 'category', 'post_tag', 'issue_number' ),
            'menu_icon' => plugins_url( 'images/image.png', __FILE__ ),
            'has_archive' => true
        )
    );
}

?>