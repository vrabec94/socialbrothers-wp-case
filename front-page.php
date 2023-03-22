<?php defined('ABSPATH') || exit('Forbidden');

get_header();

while (have_posts()) {
    the_post();
?>


    <section class="hero">
        <div class="hero-content">
            <h1>Welkom bij de
                Social Brothers case!</h1>
            <p>Deze opdracht dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Magnis dis parturient montes nascetur ridiculus mus mauris vitae ultricies. Commodo odio aenean sed adipiscing diam donec adipiscing tristique risus. </p>
        </div>
    </section>

<?php
}

get_footer();
