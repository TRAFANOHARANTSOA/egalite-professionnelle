<?php /**
 * Template Name: tsiry5
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

<div class="tsirypage5">

<?php dynamic_sidebar( 'description_part_tsiry_5') ?>
<?php dynamic_sidebar( 'description_part_tsiry_5.1') ?>
<?php dynamic_sidebar( 'description_part_tsiry_5.2') ?>
<?php dynamic_sidebar( 'description_part_tsiry_5.3') ?>
<?php dynamic_sidebar( 'description_part_tsiry_5.4') ?>
</div>
<a class="carousel-control-next mr-5 next-icon" href="<?php echo home_url( '/' ); ?>" role="button" data-slide="next">
    <?php dynamic_sidebar( 'icon-next' ); ?>
</a>
</div>

<?php get_footer() ?>
