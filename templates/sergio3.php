<?php /*
 * Template Name: sergio3
 * description: >-
 */
get_header()
?>
<div id='rotateScreen'>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/rotate.gif" alt="rotate screen">
    <p>Tourner votre écran s'il vous plait.</p>
</div>

<div id='displayContent'>
  <div class="home-icon ml-5 mt-3"><a href="<?php echo home_url( '/' ); ?>"><?php dynamic_sidebar( 'icon-home' ); ?></a></div>

  <div class="grid-container-pg1">
    <div class="grid-item-pg first-txt-pg3">
      <?php dynamic_sidebar('first text page 3'); ?> <!-- first text area -->
    </div>

    <div class="grid-item-pg icon text-center bulb-text-pg3">
      <?php dynamic_sidebar('icon bulb'); ?> <!-- bulb invention image -->
      <button class="btn btn-celia d-flex">Nos recomandations</button>
    </div>
  </div>

<div class="grid-container-pg">
  <div class="grid-item-pg first-img-pg3">
    <?php dynamic_sidebar('image page 3'); ?>  <!-- characters image -->
  </div>

  <div class="grid-item-pg3 second-img-pg3">
    <?php dynamic_sidebar('additional image page 3'); ?> <!-- animation area image -->
  </div>
</div>

<div class="grid-container-pg3">
  <div class="grid-item-pg second-icon-pg3 icon text-center presentation-img-pg3">
    <?php dynamic_sidebar('icon additional information'); ?> <!-- presentation image -->
    <button class="btn btn-celia d-flex">Informations supplémentaires</button>
  </div>

  <div class="grid-item-pg second-txt-pg3">
    <?php dynamic_sidebar('second text page 3'); ?> <!-- second text area -->
  </div>

  <a class="carousel-control-next mr-5 next-icon" href="<?php echo home_url( '/' ); ?>" role="button" data-slide="next">
    <?php dynamic_sidebar('icon-next'); ?> <!-- icon next -->
  </a>
</div>
</div>


<?php get_footer() ?>
