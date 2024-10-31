<?php
/*
Plugin Name: Open Meal Information
Plugin URI: http://wordpress.org/plugins/open-meal-information
Description: Easy way to enable Open Meal Information. Use the shortcode [open-meal-information] to enable.
Version: 1.0
Author: jonashjalmarsson
Author URI: 
License: GPLv3
Text domain: 
*/


/*
 * shortcode [open-meal-information], show search in csv-file function
 */
function plugin_open_meal_information_shortcode( $atts, $content = null ) {
	$defaults = array(
		'src' => '',
		'scriptsrc' => 'https://orebrokommun.github.io/Open-Meal-Information/js/widget.js',
		'icalbutton' => '', // set to true to show ical button
		'language' => 'sv', // en and sv
		'days' => '',
	);

	foreach ( $defaults as $default => $value ) { // add defaults
		if ( ! @array_key_exists( $default, $atts ) ) { // mute warning with "@" when no params at all
			$atts[$default] = $value;
		}
	}

	
	$src = $atts["src"];
	$scriptsrc = $atts["scriptsrc"];
	$icalbutton = $atts["icalbutton"];
	$language = $atts["language"];
	$days = $atts["days"];
	
	$html = "\n".'<!-- open-meal-information -->'."\n";
	$html .= '<div class="open-meal-container">';

	$src = $atts["src"];
	$rand = rand(0,10000);
	$charset = $atts["charset"];
	$formatString = $atts["format"];
	$search_text = $atts["searchtext"];
	
	if (empty($src)) {
		$html .= '<b>No file found!</b><br/>';
	}
	
	// print help
	if ( empty($src) )
	{
		$html .= "<b>Src has to be set to use open-meal-information shortcode.</b><br/>";
	}
	
	if ( !empty(src) ) {
		$html .= "<div id='openMealWidget$rand' class='openMealWidget$rand' ";
		$html .= "data-openmealurl='$src' ";
		$html .= "data-ical='$icalbutton' "; 
		$html .= "data-language='$language' "; 
		$html .= "data-days='$days' "; 
		$html .= "></div>";
		$html .= "<script src='$scriptsrc' id='openMealWidgetScript' data-widgets='openMealWidget$rand'></script>";
	}
	$html .= "\n".'<!-- END open-meal-information -->'."\n";


	return $html;
}
add_shortcode( 'open-meal-information', 'plugin_open_meal_information_shortcode' );
