<?php defined('ABSPATH') || exit('Forbidden');

/**
 * Register custom post types.
 * 
 * @see https://developer.wordpress.org/reference/functions/register_post_type/ 
 */
function post_types_init(): void
{
    register_post_type('blog', [
        'labels' => [
            'name'          => __('Blogs', '_SBB'),
            'singular_name' => __('Blog', '_SBB'),
        ],

        'menu_icon'         => 'dashicons-admin-post',
        'menu_position'     => 22,

        'public'            => true,
        'has_archive'       => true,
        'supports'          => ['title', 'editor', 'thumbnail'],

        'show_in_rest'      => true,
    ]);
}
add_action('init', 'post_types_init', 10, 0);

/**
 * Here we will edit existing post types.
 *
 * @see https://developer.wordpress.org/reference/hooks/register_post_type_args/
 */
function edit_post_types(array $args, string $post_type): array
{
    if ($post_type === 'post') {
        $args['public'] = false;
    }

    return $args;
}
add_filter('register_post_type_args', 'edit_post_types', 10, 2);
