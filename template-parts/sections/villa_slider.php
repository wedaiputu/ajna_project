<?php
/**
 * ACF: Flexible Content > Layouts > Featured Project
 *
 * @package WordPress
 * @subpackage Weda Theme
 */

$villa_slider = get_sub_field('villa_slider'); // Get the villa_slider data

if ($villa_slider): // Check if villa_slider has content
?>
<section class="villa-slider">
    <div class="slider-container">
        <?php foreach ($villa_slider as $slide): ?>
            <?php 
                $image = $slide['detail_carousel']; // Access the image from the repeater sub-field
                if ($image): 
            ?>
                <div class="slide">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>
