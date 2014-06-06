<?php
/*
  Plugin Name: Remove Limit Login Attempts Message
  Description: Remove Message on login page
  Author: Eric Hoanshelt - WP Engine
  Author URI: http://ehoanshelt.wpengine.com
  Version: 1.0

*/

function remove_message($error){
    //check if that's the error you are looking for
    $pos = strpos($error, 'remaining.');
    if (is_int($pos)) {
        //its the right error so you can overwrite it
        $error = "Incorrect username or password";
    }
    return $error;
	
}
add_filter('login_errors','remove_message');

?>