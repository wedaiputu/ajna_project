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
<section class="container-fluid p-0">
  <!-- Full-width grey background wrapper -->
  <div class="w-100" style="background: linear-gradient(to bottom,rgb(227, 227, 227) 0%,rgb(230, 230, 230) 70%, rgba(245, 245, 245, 0) 60%);">
    <div class="container py-5">
      <div class="row align-items-start">
        <!-- Left Column: Title, Description, Front Image, and Thumbnails -->
        <div class="col-xxl-7 col-lg-7 col-md-12 d-flex flex-column justify-content-between">
          <!-- Title and Description -->
          <h2 class="text-uppercase mb-4 text-muted" style="letter-spacing: 1px; color: #333;">
            <?= $title; ?>
          </h2>
          <?php if ($description) : ?>
            <p class="text-secondary mb-4" style="line-height: 1.8;">
              <?= $description; ?>
            </p>
          <?php endif; ?>

          <!-- CTA Section -->
          <div class="d-flex justify-content-start align-items-center gap-5 mb-4">
            <h3 class="text-muted"><?= $cta_title; ?></h3>
            <hr class="mx-3" style="border-top: 1px solid #000; height: 1px; width: 20%;"/>
            <a href="<?= $cta_link['url']; ?>" class="btn btn-dark text-uppercase" style="background-color: #3d192d; border: none;">
              <?= $cta_link['title']; ?>
            </a>
          </div>

          <!-- Front Image -->
          <div class="d-flex w-100 mt-5 mb-4">

            <div class="front-image-container" style="flex: 0 0 30%; max-width: 30%;">
              <img src="<?= $front_image; ?>" 
                   alt="Front Image" 
                   class="img-fluid rounded" 
                   style="width: 100%; height: auto; object-fit: cover;">
            </div>

            <!-- Thumbnails: 70% width -->
            <div class="thumbnails-container d-flex" 
                 style="flex: 0 0 70%; max-width: 70%; padding-left: 10px; overflow-x: auto; white-space: nowrap; gap: 10px;">
              <?php if ($carousels) : $counter = 0; ?>
                <?php foreach ($carousels as $page_id) : ?>
                  <?php
                    $page_object = get_post($page_id);
                    $featured_image = get_the_post_thumbnail_url($page_object, 'thumbnail') 
                      ? get_the_post_thumbnail_url($page_object, 'thumbnail') 
                      : get_template_directory_uri() . '/image/placeholder.png';
                  ?>
                  <button 
                    type="button" 
                    data-bs-target="#carouselExampleIndicators" 
                    data-bs-slide-to="<?= $counter; ?>" 
                    class="thumbnail <?= $counter === 0 ? 'active' : ''; ?> p-0 border-0 bg-transparent" 
                    aria-current="<?= $counter === 0 ? 'true' : 'false'; ?>" 
                    aria-label="Slide <?= $counter; ?>" 
                    style="flex: 0 0 calc(20% - 10px); width: calc(20% - 10px);">
                    <img src="<?= esc_url($featured_image); ?>" 
                         alt="<?= esc_attr($page_object->post_title); ?>" 
                         class="img-fluid rounded" 
                         style="object-fit: cover;">
                  </button>
                  <?php $counter++; ?>
                <?php endforeach; ?>
              <?php endif; ?>
            </div>
          </div>

        </div>

        <!-- Right Column: Carousel -->
        <div class="col-xxl-5 col-lg-5 col-md-10">
          <?php if ($carousels) : ?>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <?php $counter = 0; ?>
                <?php foreach ($carousels as $page) : ?>
                  <?php
                    $page_object = get_post($page);
                    $featured_image = get_the_post_thumbnail_url($page_object, 'card') 
                      ? get_the_post_thumbnail_url($page_object, 'card') 
                      : get_template_directory_uri() . '/image/placeholder.png';
                  ?>
                  <div class="carousel-item <?= $counter === 0 ? 'active' : ''; ?>">
                    <img src="<?= esc_url($featured_image); ?>" 
                         class="d-block w-100 rounded" 
                         alt="<?= esc_attr($page_object->post_title); ?>">
                  </div>
                  <?php $counter++; ?>
                <?php endforeach; ?>
              </div>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>



