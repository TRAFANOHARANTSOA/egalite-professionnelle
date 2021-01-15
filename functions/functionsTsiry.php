<?php
$defaults = array(
    'default-color'          => '',
    'default-image'          => get_template_directory_uri() . "/assets/img/personnages2.2.png",
    'default-repeat'         => 'no-repeat',
    'default-position-x'     => '',
    'default-attachment'     => '',
    'wp-head-callback'       => '_custom_background_cb',
    'admin-head-callback'    => '',
    'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $defaults );

function widget_registration($name, $id, $description, $beforeWidget, $afterWidget, $beforeTitle, $afterTitle){
    register_sidebar( array(
        'name' => $name,
        'id' => $id,
        'description' => $description,
        'before_widget' => $beforeWidget,
        'after_widget' => $afterWidget,
        'before_title' => $beforeTitle,
        'after_title' => $afterTitle,
    ));
}
function multiple_widget_init(){
    widget_registration('description_part_tsiry_1', 'description_part', '', '<div id="widgettsiry1" class="widget %2$s">', '</div>', '', '');
    widget_registration('description_part_tsiry_1.1', 'description_parta', '', '<div id="widgettsiry2" class="widget %2$s">', '</div>', '', '');
    widget_registration('description_part_tsiry_1.2', 'description_partb',  '', '<div id="widgettsiry3" class="widget %2$s">', '</div>', '', '');
    widget_registration('description_part_tsiry_1.3', 'description_partb.1',  '', '<div id="widgettsiry21" class="widget %2$s">', '</div>', '', '');
    widget_registration('description_part_tsiry_1.4', 'description_partb.2',  '', '<div id="widgettsiry22" class="widget %2$s">', '</div>', '', '');
    widget_registration('description_part_tsiry_1.5', 'description_partb.3',  '', '<div id="widgettsiry23" class="widget %2$s">', '</div>', '', '');
    widget_registration('description_part_tsiry_2', 'description_part_1',  '', '<div id="widgettsiry4" class="widget %2$s">', '</div>', '', '');
    widget_registration('description_part_tsiry_2.1', 'description_partd', '', '<div id="widgettsiry5" class="widget %2$s">', '</div>', '', '');
    widget_registration('description_part_tsiry_2.2', 'description_parte',  '', '<div id="widgettsiry6" class="widget %2$s">', '</div>', '', '');
    widget_registration('description_part_tsiry_2.3', 'description_part2.3',  '', '<div id="widgettsiry7" class="widget %2$s">', '</div>', '', '');
    widget_registration('description_part_tsiry_2.4', 'description_part2.4',  '', '<div id="widgettsiry24" class="widget %2$s">', '</div>', '', '');
    widget_registration('description_part_tsiry_3.', 'description_part_2',  '', '<div id="widgettsiry8" class="widget %2$s">', '</div>', '', '');
    widget_registration('description_part_tsiry_3.1', 'description_partg',  '', '<div id="widgettsiry9" class="widget %2$s">', '</div>', '', '');
    widget_registration('description_part_tsiry_3.2', 'description_parth',  '', '<div id="widgettsiry10" class="widget %2$s">', '</div>', '', '');
    widget_registration('description_part_tsiry_3.3', 'description_parti', '', '<div id="widgettsiry11" class="widget %2$s">', '</div>', '', '');
    widget_registration('description_part_tsiry_3.4', 'description_parti1', '', '<div id="widgettsiry25" class="widget %2$s">', '</div>', '', '');
    widget_registration('description_part_tsiry_3.5', 'description_parti2', '', '<div id="widgettsiry26" class="widget %2$s">', '</div>', '', '');
    widget_registration('description_part_tsiry_4', 'description_part_3',  '', '<div id="widgettsiry12" class="widget %2$s">', '</div>', '', '');
    widget_registration('description_part_tsiry_4.1', 'description_partj',  '', '<div id="widgettsiry13" class="widget %2$s">', '</div>', '', '');
    widget_registration('description_part_tsiry_4.2', 'description_partk', '', '<div id="widgettsiry14" class="widget %2$s">', '</div>', '', '');
    widget_registration('description_part_tsiry_4.3', 'description_partk1', '', '<div id="widgettsiry27" class="widget %2$s">', '</div>', '', '');
    widget_registration('description_part_tsiry_4.4', 'description_partk2', '', '<div id="widgettsiry28" class="widget %2$s">', '</div>', '', '');
    widget_registration('description_part_tsiry_5', 'description_part_4',  '', '<div id="widgettsiry15" class="widget %2$s">', '</div>', '', '');
    widget_registration('description_part_tsiry_5.1', 'description_partl',  '', '<div id="widgettsiry16" class="widget %2$s">', '</div>', '', '');
    widget_registration('description_part_tsiry_5.2', 'description_partm',  '', '<div id="widgettsiry17" class="widget %2$s">', '</div>', '', '');
    widget_registration('description_part_tsiry_5.3', 'description_partn',  '', '<div id="widgettsiry18" class="widget %2$s">', '</div>', '', '');
    widget_registration('description_part_tsiry_5.4', 'description_parto',  '', '<div id="widgettsiry19" class="widget %2$s">', '</div>', '', '');

}
add_action('widgets_init', 'multiple_widget_init');

?>
