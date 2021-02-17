    <!-- START: Footer -->
    <?php $footer = (!is_404()) ? get_template_part( 'template-parts/components/footer-navigation' ) : '' ; ?>
    <!-- END: Footer -->

    <!-- <script type='text/javascript' src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script> -->
    
    <script type='text/javascript' src="<?= get_template_directory_uri() ?>/assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type='text/javascript' src="<?= get_template_directory_uri() ?>/assets/vendor/gsap/src/minified/TweenMax.min.js"></script>
    <script type='text/javascript' src="<?= get_template_directory_uri() ?>/assets/vendor/sticky-kit/dist/sticky-kit.min.js"></script>
    <script type='text/javascript' src="<?= get_template_directory_uri() ?>/assets/vendor/photoswipe/dist/photoswipe.min.js"></script>
    <script type='text/javascript' src="<?= get_template_directory_uri() ?>/assets/vendor/photoswipe/dist/photoswipe-ui-default.min.js"></script>
    
    <?php if (is_home()) { ?>
      <!-- home slider -->
      <script type='text/javascript' src="<?= get_template_directory_uri() ?>/assets/vendor/hammerjs/hammer.min.js"></script>
    <?php } ?>

    <script type='text/javascript' src="<?= get_template_directory_uri() ?>/assets/vendor/nanoscroller/bin/javascripts/jquery.nanoscroller.js"></script>
    <script type='text/javascript' src="<?= get_template_directory_uri() ?>/assets/js/goodgames.js"></script>
    <script type='text/javascript' src="<?= get_template_directory_uri() ?>/assets/js/goodgames-init.js"></script>
  </body>
</html>