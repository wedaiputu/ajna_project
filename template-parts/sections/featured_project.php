<?php
/**
 * ACF: Flexible Content > Layouts > Featured Project
 *
 * @package WordPress
 * @subpackage Weda Theme
 */

$title = (get_sub_field('section_title')) ? get_sub_field('section_title') : 'Your Title Here';
$description = get_sub_field('section_description');
$cta_title = get_sub_field('cta_title');
$cta_link = get_sub_field('cta_link');
$carousels = get_sub_field('carousel');
$front_image = get_sub_field('front_image');
?>
<section class="container flex-box">
  <div class="row align-items-start">
    <!-- Left Column: 60% width -->
    <div class="col-xxl-7 col-lg-7 col-md-12">
      <h2><?= $title; ?></h2>
      <?php if ($description) : ?>
        <p><?= $description; ?></p>
      <?php endif; ?>
      <div class="d-flex justify-content-start align-items-center gap-5">
        <h3><?= $cta_title; ?></h3>
        <a href="<?= $cta_link['url']; ?>"><?= $cta_link['title']; ?></a>
      </div>
      <!-- Thumbnail Section -->
      <div class="d-flex w-100">
  <!-- Front Image: 30% width -->
  <div class="front-image-container" style="flex: 0 0 30%; max-width: 30%;">
    <img src="<?= $front_image ?>" alt="" class="img-fluid" style="width: 100%; height: auto; object-fit: cover;">
  </div>

  <!-- Thumbnails: 70% width -->
  <div class="thumbnails-container d-flex" style="flex: 0 0 70%; max-width: 70%; padding-left: 10px; overflow-x: auto; white-space: nowrap;">
  <?php if ($carousels) : $counter = 0; ?>
    <?php foreach ($carousels as $page_id) : ?>
      <?php
        // Fetch the page object by ID
        $page_object = get_post($page_id);

        // Get the featured image URL for the page, or use a default image
        $featured_image = get_the_post_thumbnail_url($page_object, 'thumbnail') ? get_the_post_thumbnail_url($page_object, 'thumbnail') : get_template_directory_uri() . '/image/2.png';
      ?>
      <button 
        type="button" 
        data-bs-target="#carouselExampleIndicators" 
        data-bs-slide-to="<?= $counter; ?>" 
        class="thumbnail <?= $counter === 0 ? 'active' : ''; ?>" 
        aria-current="<?= $counter === 0 ? 'true' : 'false'; ?>" 
        aria-label="Slide <?= $counter; ?>" 
        style="border: none; padding: 0; background: transparent; cursor: pointer; display: inline-block; width: 100px; height: auto;">
        
        <!-- Display the thumbnail or a default image -->
        <img src="<?= esc_url($featured_image); ?>" alt="<?= esc_attr($page_object->post_title); ?>" class="img-fluid" style="width: 100%; height: auto; object-fit: cover; border-radius: 4px;">
      </button>
      <?php $counter++; ?>
    <?php endforeach; ?>
  <?php endif; ?>
</div>

</div>

    </div>

    <!-- Right Column: 40% width -->
    <div class="col-xxl-5 col-lg-5 col-md-12">
  <?php if ($carousels) : ?>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <?php $counter = 0; ?>
        <?php foreach ($carousels as $page) : ?>
          <?php
            // Fetch page object
            $page_object = get_post($page);
            // Check if page has a featured image
            $featured_image = get_the_post_thumbnail_url($page_object, 'card') ? get_the_post_thumbnail_url($page_object, 'card') : get_template_directory_uri() . '/image/2.png';
          ?>
          <div class="carousel-item <?= $counter === 0 ? 'active' : ''; ?>">
            <img src="<?= esc_url($featured_image); ?>" class="d-block w-100" alt="<?= esc_attr($page_object->post_title); ?>">
          </div>
          <?php $counter++; ?>
        <?php endforeach; ?>
      </div>
    </div>
  <?php endif; ?>
</div>

  </div>
</section>
