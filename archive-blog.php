<?php defined('ABSPATH') || exit('Forbidden');

get_header();

?>
<div class="container">
    <h1>Blog archief</h1>
</div>
<?php
if (have_posts()) :
    while (have_posts()) : the_post();
        get_template_part('partials/card');
    endwhile;
endif;
?>

<?php


get_footer();
