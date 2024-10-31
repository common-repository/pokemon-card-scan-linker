<?php
//
// Create the plugin settings page and register the plugin settings
//
add_action( 'admin_menu', 'pkmn_linker_admin_setup' );

function pkmn_linker_admin_setup() {

	// Add the Pokemon Card Scan Linker settings page
	$settings = add_options_page(  __( 'Pokemon Card Scan Linker', 'pkmn-linker' ), __( 'Pokemon Card Linker', 'pkmn-linker' ), 'edit_theme_options', 'pkmn-linker', 'pkmn_linker_settings_page' );

	// Register the plugin settings
	add_action( 'admin_init', 'pkmn_linker_register_settings' );

	// Add default settings if none are present
	add_action( "load-{$settings}", 'pkmn_linker_load_settings_page' );
	
	// Add settings link to plugin listing
	add_filter( 'plugin_action_links', 'pkmn_linker_add_settings_link', 10, 2 );

}

//
// Add a link to the settings page to the plugins list
//
function pkmn_linker_add_settings_link( $links, $file ) {
	static $this_plugin;
	
	if ( empty( $this_plugin ) ) $this_plugin = PKMN_LINKER_PLUGIN_BASENAME;
	
	// Check to make sure we're on the right plugin
	if ( $file == $this_plugin ) {
		
		// Create link
		$settings_link = '<a href="' . admin_url( 'options-general.php?page=pkmn-linker' ) . '">' . __('Settings', 'pkmn-linker' ) . '</a>';
		
		// Add link to list
		array_unshift( $links, $settings_link );
	}
	
	return $links;
}

//
// Add default settings to the database if they have not been set
//
function pkmn_linker_load_settings_page() {

	// Get settings from the database
	$settings = get_option( 'pkmn_linker_settings' );

	// If no settings are available, add the default settings to the database
	if ( empty( $settings ) ) {
		$settings = pkmn_linker_default_settings();
		add_option( 'pkmn_linker_settings', $settings, '', 'yes' );

		// Redirect the page so that the settings are reflected on the settings page
		wp_redirect( admin_url( 'options-general.php?page=pkmn-linker' ) );
		exit;
	}
}

//
// Registers the settings with WordPress
//
function pkmn_linker_register_settings() {
	register_setting( 'pkmn_linker_settings', 'pkmn_linker_settings', 'pkmn_linker_validate_settings' );
}

//
// Return an array of the default plugin settings - these are only used on initial setup
//
function pkmn_linker_default_settings() {
	return array(
		'spell_check' => false,
		'linker_standard' => false,
		'linker_deck_list_tag' => false,
		'deck_list_button' => false,
		'linker_comments' => false,
		//'linker_deck_list_class' => false,
		'not_empty' => true, // Needed so $settings will never appear empty and result in redirect loop
	);
}

//
// Validate/sanitize the plugins settings after they've been submitted
//
function pkmn_linker_validate_settings( $input ) {
	return $input;
}

//
// Display the settings page for the plugin
//
function pkmn_linker_settings_page() { ?>

	<div class="wrap">

		<?php screen_icon(); ?>

		<h2><?php _e( 'Pokemon Card Scan Linker Settings', 'pkmn-linker' ); ?></h2>

		<?php if ( isset( $_GET['updated'] ) && 'true' == esc_attr( $_GET['updated'] ) ) echo '<div id="setting-error-settings_updated" class="updated settings-error"><p><strong>' . __( 'Settings saved.', 'cleaner-gallery' ) . '</strong></p></div>'; ?>
		
		<p>First, read the <a href="http://pkmncards.com/plugins/wordpress/">FAQ</a> so you understand what this plugin does, and then configure the settings below.</p>

		<form action="<?php echo admin_url( 'options.php' ); ?>" method="post">

			<?php settings_fields( 'pkmn_linker_settings' ); ?>

			<table class="form-table">

				<tr>
					<th><?php _e( 'Spell Check:', 'pkmn-linker' ); ?></th>
					<td>
					
						<input id="spell_check" name="pkmn_linker_settings[spell_check]" type="checkbox" <?php checked( ( pkmn_linker_get_setting( 'spell_check' ) ? true : false ), true ); ?> value="true" /> 
						<label for="spell_check"><?php _e( 'Correct commonly misspelled Pokemon like Ninetales, Thundurus, and Tyrogue', 'pkmn-linker' ); ?></label>
						<p class="description">Helps ensure cards get linked since they need to be spelled correctly (recommended unless you've won multiple spelling bees)</p>
												
					</td>
				</tr>
				
				<tr>
					<th><?php _e( 'Standard Linker:', 'pkmn-linker' ); ?></th>
					<td>
					
						<?php
						
							// Set up array of options
							$linker_standard_options[] = '';
							$linker_standard_options[] = 1;
							$linker_standard_options[] = 2;
							$linker_standard_options[] = 3;
							$linker_standard_options[] = 'Every';
							
							// Build the dropdown
							foreach ( $linker_standard_options as $option )
								$linker_standard_dropdown .= '<option value="' . esc_attr( $option ) . '" ' . selected( $option, pkmn_linker_get_setting( 'linker_standard' ), false ) . '>' . esc_html( $option ) . '</option>';
							
							$linker_standard_dropdown = '<select name="pkmn_linker_settings[linker_standard]" id="linker_standard">' . $linker_standard_dropdown . '</select>';
							
							// Print the dropdown
							printf( __( 'Link cards the first %s time(s) they\'re mentioned within an article', 'pkmn-linker' ), $linker_standard_dropdown ); 
							
						?> 
						
						<p class="description">Will link a card to its scan the number of instances you specify (1 is usually good, leave unselected to disable)</p>
						
					</td>
				</tr>
				
				<tr>
					<th><?php _e( 'Deck List Linker:', 'pkmn-linker' ); ?></th>
					<td>
					
						<?php
						
							// Set up array of options
							$linker_deck_list_tag_options[] = '';
							$linker_deck_list_tag_options[] = 'td';
							$linker_deck_list_tag_options[] = 'div';
							
							// Build the dropdown
							foreach ( $linker_deck_list_tag_options as $option )
								$linker_deck_list_tag_dropdown .= '<option value="' . esc_attr( $option ) . '" ' . selected( $option, pkmn_linker_get_setting( 'linker_deck_list_tag' ), false ) . '>' . esc_html( $option ) . '</option>';
							
							$linker_deck_list_tag_dropdown = '<select name="pkmn_linker_settings[linker_deck_list_tag]" id="linker_standard">' . $linker_deck_list_tag_dropdown . '</select>';
						
							// Print the dropdown
							printf( __( 'HTML tag surrounding your deck lists: %s', 'pkmn-linker' ), $linker_deck_list_tag_dropdown ); ?> 
					
						<p class="description">Choose the appropriate option if you want all your deck lists to be linked (leave unselected to disable)</p>
						
						<?php
						
						/*
						
						Commented out - thought I might want to give option to specify styling class to help target deck lists
						
						<br />
						
						<label for="linker_deck_list_class"><?php _e( 'Class used along with HTML tag to style your deck lists, if any: ', 'pkmn-linker' ); ?></label>
						<input id="linker_deck_list_class" name="pkmn_linker_settings[linker_deck_list_class]" type="text" value="<?php echo pkmn_linker_get_setting( 'linker_deck_list_class' ); ?>" />
						<p class="description">This can help the plugin better target your deck lists (optional)</p>
						
						*/
						
						?>
						
					</td>
				</tr>
				
				<tr>
					<th><?php _e( 'Deck List Button:', 'pkmn-linker' ); ?></th>
					<td>
					
						<input id="deck_list_button" name="pkmn_linker_settings[deck_list_button]" type="checkbox" <?php checked( ( pkmn_linker_get_setting( 'deck_list_button' ) ? true : false ), true ); ?> value="true" /> 
						<label for="deck_list_button"><?php _e( 'Include deck list button with the visual editor', 'pkmn-linker' ); ?></label>
						<p class="description">Generates a blank deck list template for you to fill out when writing your posts (easier than typing code out yourself each time)</p>
												
					</td>
				</tr>
				
				<tr>
					<th><?php _e( 'Comments Linker:', 'pkmn-linker' ); ?></th>
					<td>
					
						<input id="linker_comments" name="pkmn_linker_settings[linker_comments]" type="checkbox" <?php checked( ( pkmn_linker_get_setting( 'linker_comments' ) ? true : false ), true ); ?> value="true" /> 
						<label for="linker_comments"><?php _e( 'Link cards mentioned in comments', 'pkmn-linker' ); ?></label>
						<p class="description">Only works if you're using the default WordPress commenting system (i.e. not Disqus or Facebook), inherits settings from Spell Check and Standard Linker</p>
												
					</td>
				</tr>

			</table>

			<p class="submit" style="clear: both;">
				<input type="submit" name="Submit"  class="button-primary" value="<?php esc_attr_e( 'Update Settings', 'pkmn-linker' ); ?>" />
			</p><!-- .submit -->
		
		</form>
	
	<p>If you have any suggestions, questions, or bugs to report, please e-mail <a href="mailto:adam@pkmncards.com">adam@pkmncards.com</a>. Thanks!</p>
		
	</div>

<?php }

?>