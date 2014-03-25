<?php
/*
Plugin Name: Project Update Post
Plugin URI: http://www.timothyvoice.com/
Description: Declares a plugin that will create a custom post type displaying Project Updates.
Version: 1.0
Author: Timothy Voice
Author URI: http://www.timothyvoice.com
License: GPLv2
*/
?>

<?php

add_action( 'init', 'create_projectUpdate' );

function create_projectUpdate() {
    register_post_type( 'projectUpdate',
        array(
            'labels' => array(
                'name' => 'Project Updates',
                'singular_name' => 'Project Update',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Project Update',
                'edit' => 'Edit',
                'edit_item' => 'Edit Project Updates',
                'new_item' => 'New Project Update',
                'view' => 'View',
                'view_item' => 'View Project Updates',
                'search_items' => 'Search project update',
                'not_found' => 'No project update found',
                'not_found_in_trash' => 'No project update found in Trash',
                'parent' => 'Parent Project Updates'
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