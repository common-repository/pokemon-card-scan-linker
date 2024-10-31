<?php
/**
 * Plugin Name: Pokemon Card Scan Linker
 * Plugin URI: http://pkmncards.com/plugins/wordpress/
 * Description: Automatically links Pokemon card names (with the correct nomenclature) within your articles to provide a convenient reference scan (plus pricing, rating, and discussion) for your readers, via the <a href="http://pkmncards.com/">PkmnCards.com</a> database.
 * Version: 1.1.9
 * Author: Adam Capriola
 * Author URI: http://adamcap.com/
 * License: GPL2
 *
 * Copyright 2012  Adam Capriola  (email : adam@pkmncards.com)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2, as 
 * published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 *
 */
 
//
// Plugin Setup
//

add_action( 'plugins_loaded', 'pkmn_linker_setup' );

function pkmn_linker_setup() {
	
	//
	// A. Define Constants
	//
	
	// Set the version number of PKMN Linker plugin
	define( 'PKMN_LINKER_VERSION', '1.1.9' );
	
	// Set constant path to the PKMN Linker plugin directory
	define( 'PKMN_LINKER_DIR', trailingslashit( plugin_dir_path( __FILE__ ) ) );
	
	// Set constant path to the PKMN Linker plugin URL
	define( 'PKMN_LINKER_URL', trailingslashit( plugin_dir_url( __FILE__ ) ) );
	
	// Set the constant path to the PKMN Linker includes directory
	define( 'PKMN_LINKER_INCLUDES', PKMN_LINKER_DIR . trailingslashit( 'includes' ) );
	
	// Set the constant path to the PKMN Linker includes directory
	define( 'PKMN_LINKER_ADMIN', PKMN_LINKER_DIR . trailingslashit( 'admin' ) );
	
	// Set the constant path to basename of PKMN Linker plugin
	define( 'PKMN_LINKER_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );
	
	//
	// B. Load Admin Stuff
	//
	
	if ( is_admin() ) {
		
		// Load Admin Page
		require_once( PKMN_LINKER_ADMIN . 'admin.php' );
		
		// Load Deck Load Button
		require_once( PKMN_LINKER_ADMIN . 'deck-list-button.php' );
	
	}
	
	//
	// C. Load Non-Admin Stuff
	//
	
	else {
		
		//
		// 1. Load Include Files
		//
		
		// Load Spell Check
		require_once( PKMN_LINKER_INCLUDES . 'spell-check.php' );
		
		// Load Normal Auto Linker
		require_once( PKMN_LINKER_INCLUDES . 'linker-standard.php' );
		
		// Load Deck List Linker
		require_once( PKMN_LINKER_INCLUDES . 'linker-deck-list.php' );
		
		//
		// 2. Hooks
		//
		
		// Enqueue Javascript and CSS
		add_action( 'wp_enqueue_scripts', 'pkmn_linker_qtip' );
		
	}

}

//
// Function for quickly grabbing settings for the plugin without having to call get_option() all the time
//
function pkmn_linker_get_setting( $option = '' ) {
	global $pkmn_linker;

	if ( !$option )
		return false;

	if ( !isset( $pkmn_linker->settings ) )
		$pkmn_linker->settings = get_option( 'pkmn_linker_settings' );

	if ( !is_array( $pkmn_linker->settings ) || empty( $pkmn_linker->settings[$option] ) )
		return false;

	return $pkmn_linker->settings[$option];
}

//
// qTip files which create the overlay and pull in card data from PkmnCards.com
//
function pkmn_linker_qtip() {
	
	// Check to make sure we have either the standard or deck list linker enabled
	$linker_standard = pkmn_linker_get_setting( 'linker_standard' );
	$linker_deck_list_tag = pkmn_linker_get_setting( 'linker_deck_list_tag' );
	
	$linker_on = $linker_standard . $linker_deck_list_tag;
	
	// If at least one is on and we're on a post, then load qTip
	if ( !empty( $linker_on ) && is_singular( 'post' ) ) {
	
		// qTip itself
		$path1 = PKMN_LINKER_URL . 'js/jquery.qtip.min.js';
		wp_enqueue_script( $handle = 'qtip', $src = $path1, $deps = array('jquery'), $ver = PKMN_LINKER_VERSION, $in_footer = true );
		
		// qTip Call
		$path2 = PKMN_LINKER_URL . 'js/qtip-call.min.js';
		wp_enqueue_script( $handle = 'qtip_call', $src = $path2, $deps = array('jquery','qtip'), $ver = PKMN_LINKER_VERSION, $in_footer = true );
		
		// Localize qTip Call (needed for Loader image URL and Tracking)
		$home_url = get_home_url(); // Pass home URL so it can be tracked which sites are using the plugin
		$params = array(
			'plugin_url' => PKMN_LINKER_URL,
			'home_url' => $home_url,
		);
		wp_localize_script( $handle = 'qtip_call', $object_name = 'pkmn_linker_params', $params );
		
		// qTip CSS
		$path3 = PKMN_LINKER_URL . 'css/jquery.qtip.min.css';
		wp_enqueue_style( $handle = 'qtip', $src = $path3, $deps = array(), $ver = PKMN_LINKER_VERSION, $media = 'all' );
	
	}
	
	// Check if deck list button is enabled since we'll need that CSS styling
	$deck_list_button = pkmn_linker_get_setting( 'deck_list_button' );
	if ( !empty( $deck_list_button ) && is_singular( 'post' ) ) {
		
		$path4 = PKMN_LINKER_URL . 'css/deck-list.min.css';
		wp_enqueue_style( $handle = 'pkmn_deck_list', $src = $path4, $deps = array(), $ver = PKMN_LINKER_VERSION, $media = 'all' );
	
	}
}