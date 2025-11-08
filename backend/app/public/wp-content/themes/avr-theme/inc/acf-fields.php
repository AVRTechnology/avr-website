<?php
// This file will register ACF field groups programmatically if ACF Pro or ACF is installed.
// If ACF is not available, this file quietly does nothing.

if ( ! function_exists( 'acf_add_local_field_group' ) ) {
    return;
}

// Example field group for portfolio
acf_add_local_field_group(array(
    'key' => 'group_portfolio_fields',
    'title' => 'Portfolio Fields',
    'fields' => array(
        array(
            'key' => 'field_portfolio_subtitle',
            'label' => 'Subtitle',
            'name' => 'subtitle',
            'type' => 'text',
        ),
        array(
            'key' => 'field_portfolio_gallery',
            'label' => 'Gallery',
            'name' => 'gallery',
            'type' => 'gallery',
        ),
    ),
    'location' => array(
        array(
            array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'portfolio',
            ),
        ),
    ),
));

// To ensure ACF fields appear in WPGraphQL, install "WPGraphQL for Advanced Custom Fields"
// or set 'show_in_graphql' => true when registering fields via PHP (ACF v5.11+ supports show_in_graphql argument).
