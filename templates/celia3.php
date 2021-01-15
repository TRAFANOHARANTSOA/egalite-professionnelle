<?php /**
 * Template Name: celia3
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
    <div class="container-fluid px-5 py-2 celia">
        
    <div class="home-icon"><a href="<?php echo home_url( '/' ); ?>"><?php dynamic_sidebar( 'icon-home' ); ?></a></div>

        <div class="row">

            <div class="col-lg-3 col-md-4 col-sm-4 mt-3">
                <div class="d-flex flex-column icon">
                    <?php dynamic_sidebar( 'icon-info' ); ?>
                    <button class="btn btn-celia" onclick="openInfo3()"><?php dynamic_sidebar( 'button-info' ); ?></button>
                </div>
            </div>


            <div class="col-lg-6 col-md-5 col-sm-4 d-flex align-items-center justify-content-center">
                <div class="row">
                    <div class="col-lg-10 text-center">
                        <?php dynamic_sidebar( 'parts3-description1' ); ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-4 mt-3">  
                <div class="d-flex flex-column icon">
                    <?php dynamic_sidebar( 'icon-recom' ); ?>
                    <button class="btn btn-celia" onclick="openRecom3()"><?php dynamic_sidebar( 'button-recom' ); ?></button>
                </div>
            </div>
        </div>

        <div class="row parts3-description">

            <div class="col-lg-4 col-md-4 col-sm-4 d-flex justify-content-center align-items-center">
                <div class="d-flex flex-column">
                    <div><?php dynamic_sidebar( 'parts3-description2' ); ?></div>
                    <div class="col-lg-12 parts3-img1 d-flex justify-content-start align-items-start">
                        <?php dynamic_sidebar( 'parts3-img1' ); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 parts3-img2 d-flex justify-content-center align-items-center">
                <?php dynamic_sidebar( 'parts3-img2' ); ?>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 d-flex justify-content-center align-items-center">
                <div><?php dynamic_sidebar( 'parts3-description3' ); ?></div>
            </div>
        </div>


        <div id="celia3-info">
            <?php dynamic_sidebar( 'parts3-info' ); ?>
        </div>


        <div id="celia3-recomandation" class="py-4 mt-4">
            <div class="d-flex justify-content-center">
                <?php dynamic_sidebar( 'parts3-recom' ); ?>
            </div>
        </div>
        
        <a class="carousel-control-next mr-5 next-icon" href="<?php echo home_url( '/' ); ?>" role="button" data-slide="next">
            <?php dynamic_sidebar( 'icon-next' ); ?>
            <p>3-3</p>
        </a>



    </div>
</div>
<?php get_footer() ?>