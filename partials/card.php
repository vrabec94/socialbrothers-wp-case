<!--
<div class="card">
  <h2><?php the_title(); ?></h2>
  <?php the_content(); ?>
</div>
-->

<div class="card" style="width: 18rem;">
    <?php if (has_post_thumbnail()) : ?>
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('medium', ['class' => 'card-img-top', 'alt' => 'Featured image']); ?>
        </a>
    <?php endif; ?>
    <div class="card-body">
        <h5 class="card-title"><?php the_title(); ?></h5>
        <p class="card-text"><?php the_content(); ?></p>
        <a href="<?php the_permalink(); ?>">Lees meer</a>
    </div>
</div>