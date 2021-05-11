<?php
  /**
   * The template for displaying the home
   *
   * Displays all of the element and everything up until the "content-area" div.
   *
   * @link https://github.com/ArbahudRioDaroyni/wp-game-portal
   * @package WP Game Portal
   * @subpackage WP Game Portal
   * @since 1.0.0
   */
  
  get_header();
?>
<div id="primary" class="content-area nk-main">
  <main id="main" class="container site-main" role="main">
    <!-- START: Image Slider -->
    <?php get_template_part( 'template-parts/components/slider' ); ?>
    <!-- END: Image Slider -->
    
    <!-- START: Categories -->
    <?php get_template_part( 'template-parts/components/platform-categories' ); ?>
    <!-- END: Categories -->

    <!-- START: Latest News -->
    <?php get_template_part( 'template-parts/components/latest-news' ); ?>
    <!-- END: Latest News -->
  </main>
  <div class="nk-gap-2"></div>
</div>

<!-- START: Page Background -->
<?php
// check if the post or page has a Featured Image assigned to it.
if ( has_post_thumbnail() ) {
  the_post_thumbnail(NULL, ['class' => 'nk-page-background-top top-gradient-opacity']); ?>
  <img src="<?= get_first_image_in_post() ?>" class="nk-page-background-bottom bottom-gradient-opacity" alt="<?= get_the_title() ?>" />
<?php } else { ?>
  <img src="<?= get_first_image_in_post() ?>" class="nk-page-background-top top-gradient-opacity" alt="<?= get_the_title() ?>" />
  <img src="<?= get_first_image_in_post() ?>" class="nk-page-background-bottom bottom-gradient-opacity" alt="<?= get_the_title() ?>" />
<?php } ?>
<!-- END: Page Background -->

<!-- START: Login Modal -->
<?php get_template_part( 'template-parts/modals/login' ); ?>
<!-- END: Login Modal -->

<?php get_footer() ?>