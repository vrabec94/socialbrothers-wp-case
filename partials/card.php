<?php defined('ABSPATH') || exit('Forbidden'); ?>

<!-- Card Template for all blog posts and event posts-->
<div class="col-4">
    <div class="card" style="width: 18rem;">
        <?php if (has_post_thumbnail()) : ?>
            <div class="card-img-top card-img-width" style="position: relative;">
                <span class="tags">
                    <?php echo get_the_category_list(', '); ?>
                </span>
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('medium', ['alt' => 'Featured image']); ?>
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