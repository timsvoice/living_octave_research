<?php
/*
Plugin Name: Article Post
Plugin URI: https://gist.github.com/timsvoice/9350630
Description: Declares a plugin that will create a custom post type displaying Articles.
Version: 1.0
Author: Timothy Voice
Author URI: http://www.timothyvoice.com
*/
?>

<?php

add_action( 'init', 'create_article' );

function create_article() {
    register_post_type( 'articles',
        array(
            'labels' => array(
                'name' => 'Articles',
                'singular_name' => 'Article',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Article',
                'edit' => 'Edit',
                'edit_item' => 'Edit Article',
                'new_item' => 'New Article',
                'view' => 'View',
                'view_item' => 'View Article',
                'search_items' => 'Search articles',
                'not_found' => 'No articles found',
                'not_found_in_trash' => 'No articles found in Trash',
                'parent' => 'Parent Article'
            ),
 
            'public' => true,
            'menu_position' => 4,
            'supports' => array( 'title', 'editor', 'author', 'comments', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( 'category', 'post_tag', 'issue_number' ),
            'menu_icon' => plugins_url( 'images/image.png', __FILE__ ),
            'has_archive' => true
        )
    );
}

?>