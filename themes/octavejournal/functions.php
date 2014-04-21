<?php 

// Creats a Taxonomy 'Issue Number' for Global Use
add_action( 'init', 'create_issue_number', 0 );

function create_issue_number() {
    // Create issue_number and associate it with no post type in particular
    register_taxonomy(
        'issue_number',
        'articles',
        array(
            'labels' => array(
                'name'              => _x( 'Issue Numbers', 'taxonomy general name' ),
                'singular_name'     => _x( 'Issue number', 'taxonomy singular name' ),
                'search_items'      => __( 'Search Issue number' ),
                'all_items'         => __( 'All Issue number' ),
                'parent_item'       => __( 'Parent Issue number' ),
                'parent_item_colon' => __( 'Parent Issue number:' ),
                'edit_item'         => __( 'Edit Issue number' ), 
                'update_item'       => __( 'Update Issue number' ),
                'add_new_item'      => __( 'Add New Issue number' ),
                'new_item_name'     => __( 'New Issue number' ),
                'menu_name'         => __( 'Issue number' ),
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true
        )
    );
} 

function namespace_add_custom_types( $query ) {
  if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
    $query->set( 'post_type', array(
     'post', 'articles', 'project'
        ));
      return $query;
    }
}
add_filter( 'pre_get_posts', 'namespace_add_custom_types' );

?>