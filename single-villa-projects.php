<?php
/*
Template Name: Single Villa Projects
Template Post Type: villa-projects
*/
get_header();?>
<?php
$args = array( 'post_type' => 'villa-projects');
$loop = new WP_Query( $args ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); global $post; ?>
    <!-- ACF Variables-->
    <?php
        $gallery = get_field('villa_gallery', $post->ID);
        $desc = get_field('villa_description', $post->ID);
        $address = get_field('villa_address', $post->ID);
        $features = get_field('villa_features', $post->ID);
    ?>
    <!-- Start gallery-->
    <section class="container bg-white py-5">
        <div class="col-12 mt-5">
            <?php if( $gallery ): ?>
                <div class="row">
                    <?php foreach( $gallery as $image_id ): ?>
                        <div class="col-4 mb-3">
                            <?php echo wp_get_attachment_image( $image_id, 'medium', false, ['class' => 'img-fluid rounded'] ); ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <section class="container bg-white py-5">
        <div class="row align-items-end">
            <h1 class="col-6 col"><?php the_title(); ?></h1>
            <p class="col-6 col"><?= $address; ?></p>
        </div>
        <div class="row mt-5">
            <div class="col-6 col">
                <div><?= $desc; ?></div>
            </div>
            <div class="col-6 col">
                <h5 class="text-uppercase">The Features</h5>
                <?php if( $features ) : ?>
                    <div class="features">
                        <?php foreach( $features as $feature ):
                            $feature_title = $feature['feature_title'];
                            $feature_description = $feature['feature_description'];
                            $feature_icon = $feature['feature_icon'];
                        ?>
                            <div class="features-wrapper">
                                <?php if ($feature_icon): ?>
                                    <div class="feature-icon">
                                        <img src="<?= $feature_icon['url']; ?>" alt="<?= $feature_icon['alt']; ?>" class="img-fluid">
                                    </div>
                                <?php endif; ?>
                                <div class="feature-details">
                                    <?php if ($feature_title): ?>
                                        <h5><?= $feature_title; ?></h5>
                                    <?php endif; ?>
                                    <?php if ($feature_description): ?>
                                        <p><?= $feature_description; ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endwhile; wp_reset_postdata(); ?>

<?php get_footer();?>
