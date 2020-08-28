<?php

/*Customizer footer Code HERE*/
add_action('customize_register', 'theme_footer_customizer');
function theme_footer_customizer($wp_customize){
 //adding section in wordpress customizer   
$wp_customize->add_section('footer_settings_section', array(
  'title'          => 'Footer Text Section'
 ));
//adding setting for footer text area
$wp_customize->add_setting('text_setting', array(
 'default'        => 'Default Text For Footer Section',
 ));
$wp_customize->add_control('text_setting', array(
 'label'   => 'Footer Text Here',
  'section' => 'footer_settings_section',
 'type'    => 'textarea',
));

//https://developer.wordpress.org/themes/customize-api/customizer-objects/
//https://themetrust.com/how-to-create-custom-controls-for-wordpress-theme-customizer/#:~:text=In%20order%20to%20generate%20a,WordPress%20site%20theme%20customization%20screen.
