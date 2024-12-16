<?php
/**
 * ACF: Flexible Content > Layouts > Text Image
 *
 * @package WordPress
 * @subpackage Weda Theme
 */

 $title = (get_sub_field('section_title')) ? get_sub_field('section_title') : 'Your Title Here';
 $section_content = get_sub_field('section_content');
 $section_image = get_sub_field('section_image');
 $swap_layout = get_sub_field('swap_layout');
 $image_villa = get_sub_field('image_villa');
 $front_image = get_sub_field('front_image');
?>
<section class="container">
    <div class="row align-items-start">
        <?php if($swap_layout) : ?>
            <div class="col">
                <img src="<?= $section_image['url']; ?>" alt="<?= $section_image['alt']; ?>">
            </div>
            <div class="col">
                <h2><?= $title; ?></h2>
                <?php if ($section_content) : ?>
                    <div><?= $section_content; ?></div>
                <?php endif; ?>
            </div>
        <?php else : ?>
            <div class="col">
                <h2><?= $title; ?></h2>
                <?php if ($section_content) : ?>
                    <div><?= $section_content; ?></div>
                <?php endif; ?>
            </div>
            <div class="col">
                <img src="<?= $section_image['url']; ?>" alt="<?= $section_image['alt']; ?>">
            </div>
        <?php endif; ?>
    <!-- image villa -->
   <div>
   <?php 
   if( $image_villa ): ?>
        <?php foreach( $image_villa as $image_id ): ?>
                <?php echo wp_get_attachment_image( $image_id ); ?>
        <?php endforeach; ?>
    <?php endif; ?>
   </div>
    </div>
</section>