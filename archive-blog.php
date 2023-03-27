<?php defined('ABSPATH') || exit('Forbidden');
/**
 * Template Name: Blog Archive
 */
get_header();

?>
<section class="hero-blogs">
    <div class="hero-content img-fluid row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <h1>Blogs</h1>
        </div>
        <div class="col-lg-3"></div>
    </div>
</section>
<div class="row blogs-row">
    <?php
    // Display all blog posts ordered by date
    $args = array(
        'post_type' => 'blog',
        'posts_per_page' => -1,
        'orderby' => 'date',
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            echo '<div class="col-lg-4">';
            get_template_part('partials/card');
            echo '</div>';
        endwhile;
    endif;
    // Reset post data
    wp_reset_postdata();
    ?>
</div>

<?php
get_footer();
