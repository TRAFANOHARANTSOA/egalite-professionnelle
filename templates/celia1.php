<?php /**
 * Template Name: celia1
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
            <div class="col-lg-12 col-md-12 d-flex justify-content-between">
                <div class="offset-1 col-lg-4 col-md-5 col-sm-4 d-flex align-items-center">
                    <?php dynamic_sidebar( 'parts1-description1' ); ?>
                </div>
                <div class=" col-lg-3 col-md-4 col-sm-4 d-flex flex-column mr-5 icon pt-2">
                    <?php dynamic_sidebar( 'icon-recom' ); ?>
                    <button id="celia1-btn-recom" class="btn btn-celia" onclick="openRecom1()" ><?php dynamic_sidebar( 'button-recom' ); ?></button>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4 parts1-img">
                <?php dynamic_sidebar( 'parts1-image' ); ?>
            </div>
            <div class="offset-2 col-lg-5 col-md-4 col-sm-6 align-self-center">
                <?php dynamic_sidebar( 'parts1-description2' ); ?>
            </div>
        </div>

        <div class="row">
            <div class="offset-lg-5 offset-sm-3 col-lg-3 col-md-4 col-sm-6">
                <div class="d-flex flex-column icon" >
                    <?php dynamic_sidebar( 'icon-info' ); ?>
                    <button id="celia1-btn-info" class="btn btn-celia" onclick="openInfo1()"><?php dynamic_sidebar( 'button-info' ); ?></button>
                </div>
            </div>
        </div>




        <div class="py-3 px-5" id="celia1-info">
            <?php dynamic_sidebar( 'parts1-info' ); ?>
        </div>


        <div id="celia1-recomandation" class="py-3">
            <?php dynamic_sidebar( 'parts1-recom' ); ?>
        </div>

        <a class="carousel-control-next mr-5 next-icon" href="<?php echo get_permalink(34) ?>" role="button" data-slide="next">
            <?php dynamic_sidebar( 'icon-next' ); ?>
            <p>1-3</p>
        </a>

    </div>
</div>
<?php get_footer() ?>
