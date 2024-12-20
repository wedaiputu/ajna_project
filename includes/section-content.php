<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <div class="row">
        <div class="col-md-6">
            <?php if (has_post_thumbnail()): ?>
                <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" class="img-fluid mb-3 img-thumbnail">
            <?php endif; ?>
        </div>
        <div class="col-md-6">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
    </div>
<?php endwhile; else: ?>
    <p><?php esc_html_e('Sorry, no content found.'); ?></p>
<?php endif; ?>
