<?php
/*
Plugin Name: Interview Post
Plugin URI: http://www.timothyvoice.com/
Description: Declares a plugin that will create a custom post type displaying Interviews.
Version: 1.0
Author: Timothy Voice
Author URI: http://www.timothyvoice.com
License: GPLv2
*/
?>

<?php

add_action( 'init', 'create_interview' );

function create_interview() {
    register_post_type( 'interviews',
        array(
            'labels' => array(
                'name' => 'Interviews',
                'singular_name' => 'Interview',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Interview',
                'edit' => 'Edit',
                'edit_item' => 'Edit Interviews',
                'new_item' => 'New Interview',
                'view' => 'View',
                'view_item' => 'View Interviews',
                'search_items' => 'Search interviews',
                'not_found' => 'No interviews found',
                'not_found_in_trash' => 'No interviews found in Trash',
                'parent' => 'Parent Interviews'
            ),
 
            'public' => true,
            'menu_position' => 6,
            'supports' => array( 'title', 'editor', 'author','comments', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( 'category', 'post_tag', 'issue_number' ),
            'menu_icon' => plugins_url( 'images/image.png', __FILE__ ),
            'has_archive' => true
        )
    );
}

?>