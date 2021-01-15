<?php get_header() ?>


<div id='rotateScreen'>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/rotate.gif" alt="rotate screen">
    <p>Tourner votre écran s'il vous plait.</p>
</div>
<div id='displayContent'>
    <div class="row home">
        <div class="col-lg-3 col-md-12  col-sm-12 pt-2 home-logo text-center flex-column justify-content-center align-items-center">
            <?php the_custom_logo() ?>
            <p class="text-left description"><?php bloginfo('description') ?></p>
            <a class="mentions-legales" href="<?php echo get_permalink(3) ?>">Mentions Légales</a>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12 text-center">
            <h1><?php bloginfo('title') ?></h1>
            <div class="row d-flex justify-content-center home-perso">
                <div class="col-lg-3 col-md-4 col-sm-4 d-flex flex-column justify-content-center">
                    <?php dynamic_sidebar( 'img1' ); ?>
                    <a href="<?php echo get_permalink(38) ?>"><button class="btn btn-celia" ><?php dynamic_sidebar( 'btn1' ); ?></button></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 d-flex flex-column justify-content-center">
                    <?php dynamic_sidebar( 'img2' ); ?>
                    <a href="<?php echo get_permalink(44) ?>"><button class="btn btn-celia" ><?php dynamic_sidebar( 'btn2' ); ?></button></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 d-flex flex-column justify-content-center">
                    <?php dynamic_sidebar( 'img3' ); ?>
                    <a href="<?php echo get_permalink(32) ?>"><button class="btn btn-celia" ><?php dynamic_sidebar( 'btn3' ); ?>
                        </button></a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer() ?>
