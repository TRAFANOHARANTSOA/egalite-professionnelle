<?php get_header() ?>

<div class="container my-5" id="noscroll">
    <div class="home-icon"><a href="<?php echo home_url( '/' ); ?>"><?php dynamic_sidebar( 'icon-home' ); ?></a></div>
    <h1 class="text-center mb-5"><?php the_title() ?></h1>
    <?php the_content() ?>
</div>
<?php get_footer() ?>