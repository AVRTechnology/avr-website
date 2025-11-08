<?php
add_action( 'init', function() {

    $labels = array(
        'name' => 'Portfolios',
        'singular_name' => 'Portfolio',
        'menu_name' => 'Portfolios',
        'name_admin_bar' => 'Portfolio',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'show_in_rest'       => true,       // REST usable
        'show_in_graphql'    => true,       // Expose to WPGraphQL (requires WPGraphQL plugin)
        'graphql_single_name'=> 'Portfolio',
        'graphql_plural_name'=> 'Portfolios',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'rewrite'            => array( 'slug' => 'portfolio' ),
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-portfolio',
    );

    register_post_type( 'portfolio', $args );
});
