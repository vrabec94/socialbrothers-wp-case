<?php defined('ABSPATH') || exit('Forbidden');

get_header();

?>
<div class="container">
    <h1>Blog archief</h1>
</div>
<?php
$counter = 1;
if (have_posts()) :
    while (have_posts()) : the_post();
        if ($counter % 3 == 1) {
            // Start a new row
            echo '<div class="row">';
        }
        get_template_part('partials/card');
        if ($counter % 3 == 0 || $counter == $wp_query->post_count) {
            // Close the row
            echo '</div>';
        }
        $counter++;
    endwhile;
endif;
?>

<?php


get_footer();
