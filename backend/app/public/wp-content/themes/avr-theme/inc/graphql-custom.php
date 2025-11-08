<?php
// Example: add custom field or type modifications for WPGraphQL
// Runs only if WPGraphQL exists
add_action( 'graphql_register_types', function() {
    if ( ! function_exists( 'register_graphql_field' ) ) {
        return;
    }

    // Example: add a simple computed field to Post type
    register_graphql_field( 'Post', 'excerptPlain', [
        'type' => 'String',
        'description' => 'Plain excerpt text without HTML',
        'resolve' => function( $post ) {
            return wp_strip_all_tags( $post->post_excerpt ?: wp_trim_words( $post->post_content, 55 ) );
        }
    ]);
});
