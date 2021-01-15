<?php /**
 * Template Name: tsiry4
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

<div class="tsirypage4">

<?php dynamic_sidebar( 'description_part_tsiry_4') ?>
<?php dynamic_sidebar( 'description_part_tsiry_4.1') ?>
<?php dynamic_sidebar( 'description_part_tsiry_4.2') ?>
<button id="" class="btn" onclick="openTsiry4()" ><?php dynamic_sidebar( 'description_part_tsiry_4.3') ?> </button>
<button id="" class="btn" onclick="closeTsiry4()" ><?php dynamic_sidebar( 'description_part_tsiry_4.4') ?></button>

</div>
<div class="logoanimation">

</div>
<a class="carousel-control-next mr-5 next-icon" href="<?php echo get_permalink(52) ?>" role="button" data-slide="next">
    <?php dynamic_sidebar( 'icon-next' ); ?>
</a>
</div>

<?php get_footer() ?>
