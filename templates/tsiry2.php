<?php /**
 * Template Name: tsiry2
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

<div class="tsirypage2">

<?php dynamic_sidebar( 'description_part_tsiry_2') ?>
<?php dynamic_sidebar( 'description_part_tsiry_2.1') ?>
<?php dynamic_sidebar( 'description_part_tsiry_2.2') ?>

<button id="" class="btn" onclick="openTsiry2()" ><?php dynamic_sidebar( 'description_part_tsiry_2.3') ?></button>
<button id="" class="btn" onclick="closeTsiry2()" ><?php dynamic_sidebar( 'description_part_tsiry_2.4') ?></button>

</div>
<a class="carousel-control-next mr-5 next-icon" href="<?php echo get_permalink(48) ?>" role="button" data-slide="next">
    <?php dynamic_sidebar( 'icon-next' ); ?>
</a>
</div>

<?php get_footer() ?>
