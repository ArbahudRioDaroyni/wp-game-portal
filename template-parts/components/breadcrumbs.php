<div class="nk-gap-1"></div>
<nav class="container">
  <ol class="nk-breadcrumbs">
    <?php if ( is_single() ) { ?>
      <li><a href="<?= get_home_url() ?>">Halaman Depan</a><ion-icon style="margin-left: 14px" name="chevron-forward-outline"></ion-icon></li>
      <li><a href="<?= esc_url( get_category_link( get_cat_ID( get_the_category()[0]->name ) ) ) ?>"><?= get_the_category()[0]->name ?></a><ion-icon style="margin-left: 14px" name="chevron-forward-outline"></ion-icon></li>
      <li><span><?php the_title() ?> </span></li>
    <?php } ?>
  </ol>
</nav>
<div class="nk-gap-1"></div>