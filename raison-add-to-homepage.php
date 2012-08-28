<?php

   /*
   Plugin Name: Raison Add to Homepage
   Plugin URI: http://raison-online.com
   Description: Adds a popup on iOS mobile devices that allows you to create a shortcut on the homescreen. This allows a website to mimic an app.
   Version: 1.0
   Author: Elliot Taylor
   Author URI: http://raison-online.com
   License: GPL2 
   Full credit to Matteo Spinelli's original code: http://cubiq.org/add-to-home-screen
*/


add_action ( 'wp_head', 'my_custom_function_name' );


function my_custom_function_name()
{
    $headloc = plugins_url( 'head.php', __FILE__ );
    
    $headerhtml = file_get_contents($headloc, FILE_USE_INCLUDE_PATH);
    echo $headerhtml;
}
?>