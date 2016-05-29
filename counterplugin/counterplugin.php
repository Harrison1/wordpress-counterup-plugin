<?php
/*
Plugin Name: CounterUp Plugin
Plugin URI: http://harrisonmcguire.com
Description: This is a simple plugin using the counterup.js script. CounterUp inherents waypoint.js version 2.0.3. Ther CounterUp script is in the themes folder. I'm using the Waypoint Version 2.0.3 CDN. For this to work, put 'counter' as a class attribute and the numbers should count up when scrolled into view.
Version: 1.0
Author: Harrison McGuire
Author URI: http://harrisonmcguire.com
License: CC
*/
 
function hm_counter_up() {
 
    //wp_enqueue_script('jquery');
 
    wp_register_script( 'waypoints', 'http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js', '','',true  );
    wp_register_script( 'counterup', get_template_directory_uri() . '/counterup/jquery.counterup.min.js', array('waypoints'), null, true);
    wp_register_script( 'counterup-specs', get_template_directory_uri() . '/counterup/counterup-specs.js', array('waypoints', 'counterup'), null, true);
 
    wp_enqueue_script( 'waypoints' );
    wp_enqueue_script( 'counterup' );
    wp_enqueue_script( 'counterup-specs' );
}
 
add_action( 'wp_enqueue_scripts', 'hm_counter_up' );