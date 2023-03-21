<?php defined('ABSPATH') || exit('Forbidden');

/**
 * Enqueue styles and scripts
 * 
 * @see https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/
 */
function sb_enqueue_styles_scripts(): void
{
  if (is_dir(get_template_directory() . '/dist')) {
    // Styles
    if (is_file(get_template_directory() . '/dist/style.css')) {
      wp_enqueue_style('sb_styles',  get_template_directory_uri() . '/dist/style.css', [], filemtime(get_template_directory() . '/dist/style.css'), false);
    }

    // Scripts
    if (is_file(get_template_directory() . '/dist/script.js')) {
      wp_enqueue_script('sb_script', get_template_directory_uri() . '/dist/script.js', [], filemtime(get_template_directory() . '/dist/script.js'), false);
    }
  }
}
add_action('wp_enqueue_scripts', 'sb_enqueue_styles_scripts', 10, 0);

/**
 * Require theme files
 */
require_once get_template_directory() . '/lib/post-types.php';
require_once get_template_directory() . '/lib/taxonomies.php';

/**
 * Add Post Thumbnail Support
 */
function sb_theme_setup()
{
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'sb_theme_setup');
