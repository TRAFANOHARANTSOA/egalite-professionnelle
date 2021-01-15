<?php /**
 * Template Name: tsiry1
 * description: >-
 *
 */

get_header()
?>
<div id='rotateScreen'>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/rotate.gif" alt="rotate screen">
    <p>Tourner votre écran s'il vous plait.</p>
</div>
<div id='displayContent'>

<div class="tsirypage1">
<?php dynamic_sidebar( 'description_part_tsiry_1') ?>
<?php dynamic_sidebar( 'description_part_tsiry_1.1') ?>
<?php dynamic_sidebar( 'description_part_tsiry_1.2') ?>
<button id="" class="btn" onclick="openIndTsiry1()" ><?php dynamic_sidebar( 'description_part_tsiry_1.3') ?></button>
<button id="" class="btn" onclick="closeIndTsiry1()" ><?php dynamic_sidebar( 'description_part_tsiry_1.4') ?><?php dynamic_sidebar( 'description_part_tsiry_1.5') ?></button>

</div>
</div>
<a class="carousel-control-next mr-5 next-icon" href="<?php echo get_permalink(46) ?>" role="button" data-slide="next">
    <?php dynamic_sidebar( 'icon-next' ); ?>
</a>
</div>

<?php get_footer() ?>
