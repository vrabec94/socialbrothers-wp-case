<?php defined('ABSPATH') || exit('Forbidden');

get_header();

while (have_posts()) {
    the_post();
?>

    <div class="container">
        <h1>Home</h1>
    </div>

<?php
}

get_footer();
