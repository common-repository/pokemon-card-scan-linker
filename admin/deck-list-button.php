<?php
//
// Deck List Button for Visual Editor - Inserts a blank deck list template
//

//
// Setup
//
add_action( 'init', 'pkmn_deck_list_button' );

function pkmn_deck_list_button() {
	
	$deck_list_button = pkmn_linker_get_setting( 'deck_list_button' );
	
	// Make sure deck list button setting isn't disabled
	if ( !empty($deck_list_button) ) {
	
		// Don't bother doing this stuff if the current user lacks permissions
	    if ( !current_user_can( 'edit_posts' ) && !current_user_can( 'edit_pages' ) )
	    	return;
	    
	    // Add only in Rich Editor mode
	    if ( get_user_option( 'rich_editing' ) == 'true' ) { 
	    	add_filter( 'mce_external_plugins', 'pkmn_add_deck_list_tinymce_plugin', 99 );
	     	add_filter( 'mce_buttons', 'pkmn_register_deck_list_button', 99 );
	     	add_filter( 'mce_css', 'filter_mce_css' );
	    }
	}
}

//
// CSS For Deck List Template
//
function filter_mce_css( $mce_css ) {
	
	if ( !empty($mce_css) ) $mce_css .= ',';
	
	$mce_css .= PKMN_LINKER_URL . 'css/deck-list.min.css';

	return $mce_css;
	
}

//
// Load the TinyMCE Plugin JS and add it to Plugins Array so it's available to use
//
function pkmn_add_deck_list_tinymce_plugin( $plugin_array ) {
   	$plugin_array['pkmn_deck_list'] = PKMN_LINKER_URL . 'admin/deck-list.min.js';
   	return $plugin_array;
}

//
// Add button to Editor
// 
function pkmn_register_deck_list_button($buttons) {
    array_push( $buttons, '|', 'pkmn_deck_list' );
    return $buttons;
}