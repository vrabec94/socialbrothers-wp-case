<?php defined('ABSPATH') || exit('Forbidden');
/**
 * Template Name: Blog Post Details
 * Template Post Type: blog
 */
get_header();

?>
<div class="container details">
    <div class="row">
        <div class="col-md-12">
            <?php if (has_post_thumbnail()) : ?>
                <div class="details-img" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
                </div>
            <?php endif; ?>
            <div class="tags details-tags">
                <?php the_category(', '); ?>
            </div>
            <h2><?php the_title(); ?></h2>
            <div class="details-content">
                <?php the_content(); ?>
            </div>

        </div>
    </div>
</div>

<?php
// Get the tags of the current post
$tags = wp_get_post_tags($post->ID);
$tag_ids = array();
foreach ($tags as $tag) {
    $tag_ids[] = $tag->term_id;
}
// Find related posts by tag
$args = array(
    'post_type' => 'blog',
    'posts_per_page' => 3,
    'tag__in' => $tag_ids,
    'post__not_in' => array($post->ID),
);
$related_posts_query = new WP_Query($args);
// Display the related posts
if ($related_posts_query->have_posts()) : ?>
    <div class="row related-posts">
    <h3>Gerelateerde blogs</h3>
        <?php while ($related_posts_query->have_posts()) : $related_posts_query->the_post(); ?>
            <div class="col-lg-4">
                <?php get_template_part('partials/card'); ?>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif;
// Reset post data
wp_reset_postdata();
?>

<?php
get_footer();
