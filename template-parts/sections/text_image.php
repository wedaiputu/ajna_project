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
?>
<section class="container bg-white py-5">
    <div class="row">
        <?php if($swap_layout) : ?>
            <!-- Left Section: 60% width (image) -->
            <div class="col-12 col-md-7 imgVisiMisi">
    <div class="horizontal-line"></div>
    <div class="vertical-line"></div>
    <img src="<?= $section_image['url']; ?>" alt="<?= $section_image['alt']; ?>" class="item1">
</div>

            <!-- Right Section: 40% width (text) -->
            <div class="col-12 col-md-5 pt-0">
                <h3 class="fs-2"><?= $title; ?></h3> <!-- Resize h3 -->
                <?php if ($section_content) : ?>
                    <div class="fs-6"><?= $section_content; ?></div> <!-- Resize content -->
                <?php endif; ?>
            </div>
        <?php else : ?>
            <!-- Left Section: 60% width (text) -->
            <div class="col-12 col-md-7 pt-5">
                <h2 class="fs-3"><?= $title; ?></h2> <!-- Resize h2 -->
                <?php if ($section_content) : ?>
                    <div class="fs-2"><?= $section_content; ?></div> <!-- Resize content -->
                <?php endif; ?>
            </div>
            <!-- Right Section: 40% width (image) -->
            <div class="col-12 col-md-5 p-0 mb-5">
                <img src="<?= $section_image['url']; ?>" alt="<?= $section_image['alt']; ?>" class="img-fluid w-75 h-auto object-fit-cover">
            </div>
        <?php endif; ?>

        <!-- Additional Image Gallery Section -->
        <div class="col-12 mt-5">
            <?php if( $image_villa ): ?>
                <div class="row">
                    <?php foreach( $image_villa as $image_id ): ?>
                        <div class="col-4 mb-3">
                            <?php echo wp_get_attachment_image( $image_id, 'medium', false, ['class' => 'img-fluid rounded'] ); ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>


</section>


