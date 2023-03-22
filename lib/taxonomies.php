<?php defined('ABSPATH') || exit('Forbidden');

/**
 * Register custom taxonomies.
 * 
 * @see https://developer.wordpress.org/reference/functions/register_taxonomy/
 */
function taxonomies_init(): void
{
    // Register "category" taxonomy for "blog" post type
    register_taxonomy(
        'category',
        'blog',
        [
            'labels' => [
                'name'          => __('Categories', '_SBB'),
                'singular_name' => __('Category', '_SBB'),
            ],

            'public'            => false,
            'show_ui'           => true,
            'show_admin_column' => true,
            'rewrite'           => false,
            'hierarchical'      => true,
        ]
    );
    // Register "locations" taxonomy for "events" post type
    register_taxonomy(
        'locations',
        'events',
        [
            'labels' => [
                'name'          => __('Locations', '_SBB'),
                'singular_name' => __('Location', '_SBB'),
            ],
            'public'            => true,
            'show_ui'           => true,
            'show_admin_column' => true,
            'rewrite'           => true,
            'hierarchical'      => true,
        ]
    );
}
add_action('init', 'taxonomies_init', 10, 0);
