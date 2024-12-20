<?php
/**
 * ACF: Flexible Content > Layouts > Text Image
 *
 * @package WordPress
 * @subpackage Weda Theme
 */

$title = (get_sub_field('section_title')) ? get_sub_field('section_title') : 'Your Title Here';
$image_incard = get_sub_field('image_incard');
$text_forcard = get_sub_field('text_forcard');
$image_incard2 = get_sub_field('image_incard2');
$text_forcard2 = get_sub_field('text_forcard2');
$image_incard3 = get_sub_field('image_incard3');
$text_forcard3 = get_sub_field('text_forcard3');
$image_incard4 = get_sub_field('image_incard4');
$text_forcard4 = get_sub_field('text_forcard4');
$text_cardpage = get_sub_field('text_cardpage');
$page_textcard = get_sub_field('page_textcard');
?>

<section class="container-fluid py-5" style="background-color: #ababad;">
     <!-- Title at the top center -->
     <?php if ($text_cardpage): ?>
            <h2 class="lead"><?php echo esc_html($text_cardpage); ?></h2>
        <?php endif; ?>
        
        <!-- Text under the title -->
        <?php if ($page_textcard): ?>
            <p class="lead"><?php echo esc_html($page_textcard); ?></p>
        <?php endif; ?>
    </div>
    <div class="row justify-content-center">
        <!-- Card 1 -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card shadow-sm">
                <div class="card-img-top-wrapper" style="position: relative; width: 100%; padding-top: 100%; overflow: hidden;">
                    <?php if ($image_incard): ?>
                        <img src="<?php echo esc_url($image_incard['url']); ?>" alt="<?php echo esc_attr($image_incard['alt']); ?>" class="card-img-top" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;" />
                    <?php endif; ?>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo esc_html($title); ?></h5>
                    <p class="card-text"><?php echo esc_html($text_forcard); ?></p>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card shadow-sm">
                <div class="card-img-top-wrapper" style="position: relative; width: 100%; padding-top: 100%; overflow: hidden;">
                    <?php if ($image_incard2): ?>
                        <img src="<?php echo esc_url($image_incard2['url']); ?>" alt="<?php echo esc_attr($image_incard2['alt']); ?>" class="card-img-top" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;" />
                    <?php endif; ?>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo esc_html($title); ?></h5>
                    <p class="card-text"><?php echo esc_html($text_forcard2); ?></p>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card shadow-sm">
                <div class="card-img-top-wrapper" style="position: relative; width: 100%; padding-top: 100%; overflow: hidden;">
                    <?php if ($image_incard3): ?>
                        <img src="<?php echo esc_url($image_incard3['url']); ?>" alt="<?php echo esc_attr($image_incard3['alt']); ?>" class="card-img-top" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;" />
                    <?php endif; ?>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo esc_html($title); ?></h5>
                    <p class="card-text"><?php echo esc_html($text_forcard3); ?></p>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card shadow-sm">
                <div class="card-img-top-wrapper" style="position: relative; width: 100%; padding-top: 100%; overflow: hidden;">
                    <?php if ($image_incard4): ?>
                        <img src="<?php echo esc_url($image_incard4['url']); ?>" alt="<?php echo esc_attr($image_incard4['alt']); ?>" class="card-img-top" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;" />
                    <?php endif; ?>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?php echo esc_html($title); ?></h5>
                    <p class="card-text"><?php echo esc_html($text_forcard4); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
