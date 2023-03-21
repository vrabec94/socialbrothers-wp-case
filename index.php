<?php defined('ABSPATH') || exit('Forbidden');

get_header();

while (have_posts()) {
  the_post();
?>

  <div class="container">
    <?php
    the_title();
    the_content();
    ?>
  </div>

<?php
}

get_footer();
