<?php

function celia1_widgets() {
   register_sidebar( array(

   'name' => 'parts1-description1',
   'id' => 'parts1-description1',
   'before_widget' => '<p>',
   'after_widget' => '</p>',
   ) );

   register_sidebar( array(

    'name' => 'parts1-description2',
    'id' => 'parts1-description2',
    'before_widget' => '<p>',
    'after_widget' => '</p>',
    ) );


    register_sidebar( array(

        'name' => 'parts1-image',
        'id' => 'parts1-image',
        'before_widget' => '',
        'after_widget' => ''
        ) );

    register_sidebar( array(

        'name' => 'parts1-info',
        'id' => 'parts1-info',
        'before_widget' => '',
        'after_widget' => ''
        ) );

    register_sidebar( array(

        'name' => 'parts1-recom',
        'id' => 'parts1-recom',
        'before_widget' => '',
        'after_widget' => ''
        ) );
}
add_action( 'widgets_init', 'celia1_widgets' );


function celia2_widgets() {
    register_sidebar( array(
 
    'name' => 'parts2-description1',
    'id' => 'parts2-description1',
    'before_widget' => '<p>',
    'after_widget' => '</p>',
    ) );
 
    register_sidebar( array(
 
     'name' => 'parts2-description2',
     'id' => 'parts2-description2',
     'before_widget' => '<p>',
     'after_widget' => '</p>',
     ) );

     register_sidebar( array(
 
        'name' => 'parts2-img1',
        'id' => 'parts2-img1',
        'before_widget' => '',
        'after_widget' => ''
    ) );

    register_sidebar( array(

        'name' => 'parts2-img2',
        'id' => 'parts2-img2',
        'before_widget' => '',
        'after_widget' => ''
    ) );

    register_sidebar( array(

        'name' => 'parts2-info',
        'id' => 'parts2-info',
        'before_widget' => '',
        'after_widget' => ''
        ) );

    register_sidebar( array(

        'name' => 'parts2-recom',
        'id' => 'parts2-recom',
        'before_widget' => '',
        'after_widget' => ''
        ) );
 }
 add_action( 'widgets_init', 'celia2_widgets' );


 
function celia3_widgets() {
    register_sidebar( array(
 
    'name' => 'parts3-description1',
    'id' => 'parts3-description1',
    'before_widget' => '<p>',
    'after_widget' => '</p>',
    ) );
 
    register_sidebar( array(
 
     'name' => 'parts3-description2',
     'id' => 'parts3-description2',
     'before_widget' => '<p>',
     'after_widget' => '</p>',
     ) );

    register_sidebar( array(

    'name' => 'parts3-description3',
    'id' => 'parts3-description3',
    'before_widget' => '<p>',
    'after_widget' => '</p>',
    ) );

    register_sidebar( array(

        'name' => 'parts3-img1',
        'id' => 'parts3-img1',
        'before_widget' => '',
        'after_widget' => ''
    ) );

    register_sidebar( array(

        'name' => 'parts3-img2',
        'id' => 'parts3-img2',
        'before_widget' => '',
        'after_widget' => ''
    ) );

    register_sidebar( array(

        'name' => 'parts3-info',
        'id' => 'parts3-info',
        'before_widget' => '',
        'after_widget' => ''
    ) );

    register_sidebar( array(

        'name' => 'parts3-recom',
        'id' => 'parts3-recom',
        'before_widget' => '',
        'after_widget' => ''
    ) );
 }
 add_action( 'widgets_init', 'celia3_widgets' );



function celia_icon_widgets() {
    register_sidebar( array(

        'name' => 'icon-recom',
        'id' => 'icon-recom',
        'before_widget' => '',
        'after_widget' => ''
    ) );

    register_sidebar( array(

        'name' => 'icon-info',
        'id' => 'icon-info',
        'before_widget' => '',
        'after_widget' => ''
    ) );

    register_sidebar( array(

        'name' => 'icon-next',
        'id' => 'icon-next',
        'before_widget' => '',
        'after_widget' => ''
    ) );

    register_sidebar( array(

        'name' => 'icon-home',
        'id' => 'icon-home',
        'before_widget' => '',
        'after_widget' => ''
    ) );
}
add_action( 'widgets_init', 'celia_icon_widgets' );


function celia_button_widgets() {
    register_sidebar( array(

        'name' => 'button-recom',
        'id' => 'button-recom',
        'before_widget' => '',
        'after_widget' => ''
    ) );

    register_sidebar( array(

        'name' => 'button-info',
        'id' => 'button-info',
        'before_widget' => '',
        'after_widget' => ''
    ) );
}
add_action( 'widgets_init', 'celia_button_widgets' );
 
 


