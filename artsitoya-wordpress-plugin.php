<?php
/*
Plugin Name: Arts Itoya WordPress Plugin
Plugin URI: https://github.com/alecrem/artsitoya-wordpress-plugin
Version: 1.0
Author: Alejandro Cremades
Description: Plugin to show information from the Studio Kura intranet on the Arts Itoya blog.
*/

// Enable shortcodes in text widgets
add_filter('widget_text','do_shortcode');

// Chart with slots for any year, to be shown on a page
// Shortcode: [slotchart year=2018]
function slotchart($atts){
	return file_get_contents('https://studiokura.com/cake/residenceslots/slotchart/' . $atts['year'] . '/itoya');
}
add_shortcode('slotchart', 'slotchart');

// List of guest artists, to be shown on a page
// Shortcode: [artistlist]
function artistlist(){
	return file_get_contents('http://studiokura.com/cake/residences/artistlist/en/itoya');
}
add_shortcode('artistlist', 'artistlist');

// List of current resident artists, to be shown on a widget
// Shortcode: [blogwidget]
function blogwidget(){
	return file_get_contents("https://studiokura.com/cake/residences/blogwidget/en/itoya");
}
add_shortcode('blogwidget', 'blogwidget');
?>
