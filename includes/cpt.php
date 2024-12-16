<?php
function villa_project_init() { 
$args = array( 
'label' => 'Villa Projects', 
'public' => true, 
'show_ui' => true, 
'capability_type' => 'post', 
'hierarchical' => false, 
'rewrite' => array('slug' => 'villa-projects'), 
'query_var' => true, 
'menu_icon' => 'dashicons-palmtree', 
'supports' => array( 
'title', 
'editor', 
'excerpt', 
'trackbacks', 
'custom-fields', 
'comments', 
'revisions', 
'thumbnail', 
'author', 
'page-attributes',) 
); 
register_post_type( 'villa-projects', $args ); 
} 
add_action( 'init', 'villa_project_init' );
?>