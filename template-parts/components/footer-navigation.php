<footer class="nk-footer">
  <div class="container">
    <div class="nk-gap-3"></div>
    <div class="row vertical-gap">
      <div class="col-md-6">
        <div class="nk-widget">
          <h4 class="nk-widget-title"><span class="text-main-1">Contact</span> With Us</h4>
          <div class="nk-widget-content">
            <form action="php/ajax-contact-form.php" class="nk-form nk-form-ajax">
              <div class="row vertical-gap sm-gap">
                <div class="col-md-6">
                  <input type="email" class="form-control required" name="email" placeholder="Email *">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control required" name="name" placeholder="Name *">
                </div>
              </div>
              <div class="nk-gap"></div>
              <textarea class="form-control required" name="message" rows="5" placeholder="Message *"></textarea>
              <div class="nk-gap-1"></div>
              <button class="btn btn-light">
                <span>Send</span>
                <span class="icon">
                  <ion-icon name="send-outline"></ion-icon>
                </span>
              </button>
              <div class="nk-form-response-success"></div>
              <div class="nk-form-response-error"></div>
            </form>
          </div>
        </div>
      </div>
      <?php get_template_part( 'template-parts/widgets/recent-post-mini' ); ?>
    </div>
    <div class="nk-gap-3"></div>
  </div>
  <div class="nk-copyright">
    <div class="container">
      <div class="nk-copyright-left">
        <a href="#"><?= get_bloginfo('name') ?></a>
      </div>
      <div class="nk-copyright-right">
        <ul class="nk-social-links-2">
          <li>
            <span class="nk-social-youtube" title="Share page on Youtube" data-share="youtube">
              <ion-icon name="logo-Youtube"></ion-icon>
            </span>
          </li>
          <li>
            <span class="nk-social-facebook" title="Share page on Facebook" data-share="facebook">
              <ion-icon name="logo-facebook"></ion-icon>
            </span>
          </li>
          <li>
            <span class="nk-social-instagram" title="Share page on Instagram" data-share="instagram">
              <ion-icon name="logo-instagram"></ion-icon>
            </span>
          </li>
          <li>
            <span class="nk-social-twitter" title="Share page on Twitter" data-share="Twitter">
              <ion-icon name="logo-twitter"></ion-icon>
            </span>
          </li>
          <li>
            <span class="nk-social-pinterest" title="Share page on Pinterest" data-share="Pinterest">
              <ion-icon name="logo-pinterest"></ion-icon>
            </span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>