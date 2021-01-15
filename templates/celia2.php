<?php /**
 * Template Name: celia2
 * description: >-
*/

get_header()
?>
<div id='rotateScreen'>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/rotate.gif" alt="rotate screen">
    <p>Tourner votre écran s'il vous plait.</p>
</div>
<div id='displayContent'>
    <div class="container-fluid px-5 celia">

        <div class="home-icon"><a href="<?php echo home_url( '/' ); ?>"><?php dynamic_sidebar( 'icon-home' ); ?></a></div>

        <div class="row">
            <div class="offset-1 col-lg-3 col-md-3 col-sm-6 ">
                <div class="col-md-12 col-sm-12 d-flex flex-column mt-4 mr-5 icon">
                    <?php dynamic_sidebar( 'icon-recom' ); ?>
                    <button class="btn btn-celia" onclick="openRecom2()"><?php dynamic_sidebar( 'button-recom' ); ?></button>
                </div>
            </div>
            <div class="offset-lg-2 col-lg-6 col-md-6 col-sm-5 d-flex justify-content-between mt-5">
                <div class="d-flex align-items-center">
                    <?php dynamic_sidebar( 'parts2-description1' ); ?>
                </div>
            </div>
        </div>

        <div class="row parts2-description">
            <div class="offset-lg-1 col-lg-3 col-md-3 col-sm-3 parts2-img1">
                <?php dynamic_sidebar( 'parts2-img1' ); ?>
            </div>

            <div class="col-lg-4 col-md-5 col-sm-5 d-flex align-items-center justify-content-end">
                <?php dynamic_sidebar( 'parts2-description2' ); ?>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 parts2-img2 d-flex justify-content-center">
                <?php dynamic_sidebar( 'parts2-img2' ); ?>
            </div>

        </div>

        <div class="row celia2-info mt-1">
            <div class="col-lg-12 col-md-12 d-flex justify-content-center">
                <div class="d-flex flex-column icon">
                    <?php dynamic_sidebar( 'icon-info' ); ?>
                    <button id="celia2-btn-info" class="btn btn-celia" onclick="openInfo2()"><?php dynamic_sidebar( 'button-info' ); ?></button>
                </div>
            </div>
        </div>



        <div id="celia2-info" class="py-4 mt-4">
            <?php dynamic_sidebar( 'parts2-info' ); ?>
        </div>


        <div id="celia2-recomandation" class="py-3">
            <?php dynamic_sidebar( 'parts2-recom' ); ?>
        </div>


            <a class="carousel-control-next next-icon mr-5" href="<?php echo get_permalink(36) . '?form='?>" role="button" data-slide="next">
                <?php dynamic_sidebar( 'icon-next' ); ?>
                <p>2-3</p>
            </a>




    </div>
</div>
<?php get_footer() ?>
