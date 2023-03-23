<!--
<div class="card">
  <h2><?php the_title(); ?></h2>
  <?php the_content(); ?>
</div>
-->
<div class="col-4">
    <div class="card" style="width: 18rem;">
        <?php if (has_post_thumbnail()) : ?>
            <div class="card-img-top" style="position: relative;">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('medium', ['alt' => 'Featured image']); ?>
                    <span class="badge badge-primary" style="position: absolute; top: 10px; left: 10px;">
                        <?php echo get_the_category_list(', '); ?>
                    </span>
                </a>
            </div>
        <?php endif; ?>
        <div class="card-body">
            <h5 class="card-title"><?php the_title(); ?></h5>
            <p class="card-text"><?php the_content(); ?></p>
            <a href="<?php the_permalink(); ?>">Lees meer</a>
        </div>
    </div>
</div>