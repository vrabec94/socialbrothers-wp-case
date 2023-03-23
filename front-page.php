<?php defined('ABSPATH') || exit('Forbidden');

get_header();
?>


<section class="hero">
    <div class="hero-content img-fluid row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <h1>Welkom bij de
                Social Brothers case!</h1>
            <p>Deze opdracht dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Magnis dis parturient montes nascetur ridiculus mus mauris vitae ultricies. Commodo odio aenean sed adipiscing diam donec adipiscing tristique risus. </p>
        </div>
        <div class="col-lg-3"></div>
    </div>
</section>
<div class="row blogs-row">
    <h2>De nieuwste blog</h2>
    <?php
    $args = array(
        'post_type' => 'blog',
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC'
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            echo '<div class="col-lg-4">';
            get_template_part('partials/card');
            echo '</div>';
        endwhile;
    endif;
    wp_reset_postdata(); // Reset post data after the loop
    ?>
</div>
<div class="row events-row">
    <h2>Opkomende events</h2>
    <?php
    $args = array(
        'post_type' => 'events',
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC'
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            echo '<div class="col-lg-4">';
            get_template_part('partials/card');
            echo '</div>';
        endwhile;
    endif;
    wp_reset_postdata(); // Reset post data after the loop
    ?>
</div>

<?php

get_footer();
