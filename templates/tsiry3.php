<?php /**
 * Template Name: tsiry3
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

<div class="tsirypage3">

<?php dynamic_sidebar( 'description_part_tsiry_3') ?>
<?php dynamic_sidebar( 'description_part_tsiry_3.1') ?>
<button id="" class="btn" onclick="openTsiry3()" ><?php dynamic_sidebar( 'description_part_tsiry_3.2') ?></button>
<?php dynamic_sidebar( 'description_part_tsiry_3.3') ?>

<button id="" class="btn" onclick="closeTsiry3()" ><?php dynamic_sidebar( 'description_part_tsiry_3.4') ?> <?php dynamic_sidebar( 'description_part_tsiry_3.5') ?></button>

</div>
<a class="carousel-control-next mr-5 next-icon" href="<?php echo get_permalink(50) ?>" role="button" data-slide="next">
    <?php dynamic_sidebar( 'icon-next' ); ?>
</a>
</div>

<?php get_footer() ?>
