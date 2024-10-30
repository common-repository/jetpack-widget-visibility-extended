<?php /**
 * Plugin Name: Jetpack Widget Visibility Additional Fields Filter
 * Plugin URI: http://caavadesign.com
 * Description: Add the ability to add query args to jetpacks visibility widget
 * Version: 1.0.0
 * Author: Brandon lavigne
 * Author URI: http://caavadesign.com
 * License: A short license name. Example: GPL2
 */



add_action('after_setup_theme', 'remove_jetpack_widget_conditions',11);

function remove_jetpack_widget_conditions(){
	
	remove_action( 'init', array('Jetpack_Widget_Conditions','init') );
	add_action( 'init', 'caava_widget_conditions', 12 );
}

function caava_widget_conditions() {
	include dirname( __FILE__ ) . '/class-jetpack-widget-visibility-extended.php';
}