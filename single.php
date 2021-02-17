<?php
  /**
   * The template for displaying the single
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
  <!-- START: Breadcrumbs -->
  <?php get_template_part( 'template-parts/components/breadcrumbs' ); ?>
  <!-- END: Breadcrumbs -->

  <main id="main" class="container site-main" role="main">
    <div class="row vertical-gap">
      <div class="col-lg-8">
        <!-- START: Post -->
        <div class="nk-blog-post nk-blog-post-single">

          <!-- START: Post Text -->
          <?php
            // Start the loop.
            while ( have_posts() ) :
              the_post();
              
              // Include the single post content template.
              get_template_part( 'template-parts/content/content', 'single' );

              // End of the loop.
            endwhile;
            
            // share widget
            get_template_part( 'template-parts/components/share' );
          ?>
          <!-- END: Post Text -->

          <!-- START: Similar Articles -->
          <?php get_template_part( 'template-parts/widgets/similar-article' ); ?>
          <!-- END: Similar Articles -->
          
          <!-- START: Comments -->
          <?php comments_template( '/comments.php' ); ?>
          <!-- END: Comments -->

          <!-- START: Reply -->
          <div class="nk-gap-2"></div>
          <?= the_comment_form() ?>
          <!-- END: Reply -->

        </div>
        <!-- END: Post -->
      </div>
      <div class="col-lg-4">
        <!-- START: Sidebar -->
        <aside class="nk-sidebar nk-sidebar-right nk-sidebar-sticky">
          <!-- START: Seacrh Form -->
          <?php get_search_form() ?>
          <!-- END: Seacrh Form -->

          <!-- START: Social Media -->
          <?php get_template_part( 'template-parts/widgets/social-media' ); ?>
          <!-- END: Social Media -->

          
          <div class="nk-widget nk-widget-highlighted">
            <h4 class="nk-widget-title"><span><span class="text-main-1">Latest</span> Video</span></h4>
            <div class="nk-widget-content">
              <div class="nk-plain-video" data-video="https://www.youtube.com/watch?v=vXy8UBazlO8"></div>
            </div>
          </div>
          
          <!-- START: Recent Post -->
          <?php get_template_part( 'template-parts/widgets/recent-post-by-category' ); ?>
          <!-- END: Recent Post -->

          <div class="nk-widget nk-widget-highlighted">
            <h4 class="nk-widget-title"><span><span class="text-main-1">Latest</span> Screenshots</span></h4>
            <div class="nk-widget-content">
              <div class="nk-popup-gallery">
                <div class="row sm-gap vertical-gap">
                  <div class="col-sm-6">
                    <div class="nk-gallery-item-box">
                      <a href="<?= get_template_directory_uri() ?>/assets/images/gallery-1.jpg" class="nk-gallery-item" data-size="1016x572">
                        <div class="nk-gallery-item-overlay">
                          <span class="ion-eye">
                            <ion-icon name="eye-outline"></ion-icon>
                          </span>
                        </div>
                        <img src="<?= get_template_directory_uri() ?>/assets/images/gallery-1-thumb.jpg" alt="">
                      </a>
                      <div class="nk-gallery-item-description">
                        <h4>Called Let</h4>
                        Divided thing, land it evening earth winged whose great after. Were grass night. To Air itself saw bring fly fowl. Fly years behold spirit day greater of wherein winged and form. Seed open don't thing midst created dry every greater divided of, be man is. Second Bring stars fourth gathering he hath face morning fill. Living so second darkness. Moveth were male. May creepeth. Be tree fourth.
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="nk-gallery-item-box">
                      <a href="<?= get_template_directory_uri() ?>/assets/images/gallery-2.jpg" class="nk-gallery-item" data-size="1188x594">
                        <div class="nk-gallery-item-overlay">
                          <span class="ion-eye">
                            <ion-icon name="eye-outline"></ion-icon>
                          </span>
                        </div>
                        <img src="<?= get_template_directory_uri() ?>/assets/images/gallery-2-thumb.jpg" alt="">
                      </a>
                      <div class="nk-gallery-item-description">
                        Seed open don't thing midst created dry every greater divided of, be man is. Second Bring stars fourth gathering he hath face morning fill. Living so second darkness. Moveth were male. May creepeth. Be tree fourth.
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="nk-gallery-item-box">
                      <a href="<?= get_template_directory_uri() ?>/assets/images/gallery-3.jpg" class="nk-gallery-item" data-size="625x350">
                        <div class="nk-gallery-item-overlay">
                          <span class="ion-eye">
                            <ion-icon name="eye-outline"></ion-icon>
                          </span>
                        </div>
                        <img src="<?= get_template_directory_uri() ?>/assets/images/gallery-3-thumb.jpg" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="nk-gallery-item-box">
                      <a href="<?= get_template_directory_uri() ?>/assets/images/gallery-4.jpg" class="nk-gallery-item" data-size="873x567">
                        <div class="nk-gallery-item-overlay">
                          <span class="ion-eye">
                            <ion-icon name="eye-outline"></ion-icon>
                          </span>
                        </div>
                        <img src="<?= get_template_directory_uri() ?>/assets/images/gallery-4-thumb.jpg" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="nk-gallery-item-box">
                      <a href="<?= get_template_directory_uri() ?>/assets/images/gallery-5.jpg" class="nk-gallery-item" data-size="471x269">
                        <div class="nk-gallery-item-overlay">
                          <span class="ion-eye">
                            <ion-icon name="eye-outline"></ion-icon>
                          </span>
                        </div>
                        <img src="<?= get_template_directory_uri() ?>/assets/images/gallery-5-thumb.jpg" alt="">
                      </a>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="nk-gallery-item-box">
                      <a href="<?= get_template_directory_uri() ?>/assets/images/gallery-6.jpg" class="nk-gallery-item" data-size="472x438">
                        <div class="nk-gallery-item-overlay">
                          <span class="ion-eye">
                            <ion-icon name="eye-outline"></ion-icon>
                          </span>
                        </div>
                        <img src="<?= get_template_directory_uri() ?>/assets/images/gallery-6-thumb.jpg" alt="">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="nk-widget nk-widget-highlighted">
            <h4 class="nk-widget-title"><span><span class="text-main-1">Next</span> Matches</span></h4>
            <div class="nk-widget-content">
              <div class="nk-widget-match">
                <a href="#">
                <span class="nk-widget-match-left">
                <span class="nk-widget-match-teams">
                <span class="nk-widget-match-team-logo">
                <img src="<?= get_template_directory_uri() ?>/assets/images/team-1.jpg" alt="">
                </span>
                <span class="nk-widget-match-vs">VS</span>
                <span class="nk-widget-match-team-logo">
                <img src="<?= get_template_directory_uri() ?>/assets/images/team-2.jpg" alt="">
                </span>
                </span>
                <span class="nk-widget-match-date">CS:GO - Apr 28, 2018 8:00 pm</span>
                </span>
                <span class="nk-widget-match-right">
                <span class="nk-match-score">
                Upcoming
                </span>
                </span>
                </a>
              </div>
              <div class="nk-widget-match">
                <a href="#">
                <span class="nk-widget-match-left">
                <span class="nk-widget-match-teams">
                <span class="nk-widget-match-team-logo">
                <img src="<?= get_template_directory_uri() ?>/assets/images/team-3.jpg" alt="">
                </span>
                <span class="nk-widget-match-vs">VS</span>
                <span class="nk-widget-match-team-logo">
                <img src="<?= get_template_directory_uri() ?>/assets/images/team-2.jpg" alt="">
                </span>
                </span>
                <span class="nk-widget-match-date">LoL - Apr 24, 2018 7:20 pm</span>
                </span>
                <span class="nk-widget-match-right">
                <span class="nk-match-score">
                Upcoming
                </span>
                </span>
                </a>
              </div>
              <div class="nk-widget-match">
                <a href="#">
                <span class="nk-widget-match-left">
                <span class="nk-widget-match-teams">
                <span class="nk-widget-match-team-logo">
                <img src="<?= get_template_directory_uri() ?>/assets/images/team-1.jpg" alt="">
                </span>
                <span class="nk-widget-match-vs">VS</span>
                <span class="nk-widget-match-team-logo">
                <img src="<?= get_template_directory_uri() ?>/assets/images/team-4.jpg" alt="">
                </span>
                </span>
                <span class="nk-widget-match-date">Dota 2 - Apr 12, 2018 6:40 pm</span>
                </span>
                <span class="nk-widget-match-right">
                <span class="nk-match-score bg-dark-1">
                0 : 0
                </span>
                </span>
                </a>
              </div>
            </div>
          </div>
          
          <!-- START: Popular Post -->
          <?php get_template_part( 'template-parts/widgets/popular-post' ); ?>
          <!-- END: Popular Post -->

        </aside>
        <!-- END: Sidebar -->
      </div>
    </div>
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

<!-- START: Search Modal -->
<?php get_template_part( 'template-parts/modals/search' ); ?>
<!-- END: Search Modal -->

<!-- START: Login Modal -->
<?php get_template_part( 'template-parts/modals/login' ); ?>
<!-- END: Login Modal -->

<?php get_footer() ?>