<?php defined('ABSPATH') || exit('Forbidden');

get_header();

while (have_posts()) {
    the_post();
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

<?php
}

get_footer();
