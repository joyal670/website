<?php

add_action( 'tgmpa_register', 'ttm_business_register_required_plugins' );

// Install Plugins when activate theme
function ttm_business_register_required_plugins(){
	/**
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
		array(
			'name'     => esc_attr('Redux Framework'),
			'slug'     => esc_attr('redux-framework'),
			'required' => false,
		),
		array(
			'name'     => esc_attr('Contact Form 7'),
			'slug'     => esc_attr('contact-form-7'),
			'required' => false,
		),
		array(
			'name'	   => esc_attr('Elementor Page Builder'),
			'slug'	   => esc_attr('elementor'),
			'required' => false,
		),
		array(
			'name'     => esc_attr('One Click Demo Import'),
			'slug'     => esc_attr('one-click-demo-import'),
			'required' => false,
		),	
	);

	/**
	 * Array of configuration settings. Amend each line as needed.
	 * If you want the default strings to be available under your own theme domain,
	 * leave the strings uncommented.
	 * Some of the strings are added into a sprintf, so see the comments at the
	 * end of each line for what each argument will be.
	 */
	$config = array(
		'id'			 => 'tgmpa', // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path'	 => '', // Default absolute path to pre-packaged plugins.
		'menu'			 => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'	 => 'themes.php', // Parent menu slug.
		'capability'	 => 'edit_theme_options', // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'	 => true, // Show admin notices or not.
		'dismissable'	 => true, // If false, a user cannot dismiss the nag message.
		'dismiss_msg'	 => '', // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic'	 => false, // Automatically activate plugins after installation or not.
		'message'		 => '', // Message to output right before the plugins table.
		'strings'		 => array(
			'page_title'						 => esc_attr__( 'Install Required Plugins', 'ttm-business' ),
			'menu_title'						 => esc_attr__( 'Install Plugins', 'ttm-business' ),
			'installing'						 => esc_attr__( 'Installing Plugin: %s', 'ttm-business' ), // %s = plugin name.
			'oops'								 => esc_attr__( 'Something went wrong with the plugin API.', 'ttm-business' ),
			'notice_can_install_required'		 => _n_noop(
			'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'ttm-business'
			), // %1$s = plugin name(s).
			'notice_can_install_recommended'	 => _n_noop(
			'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'ttm-business'
			), // %1$s = plugin name(s).
			'notice_cannot_install'				 => _n_noop(
			'Sorry, but you do not have the correct permissions to install the %1$s plugin.', 'Sorry, but you do not have the correct permissions to install the %1$s plugins.', 'ttm-business'
			), // %1$s = plugin name(s).
			'notice_ask_to_update'				 => _n_noop(
			'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'ttm-business'
			), // %1$s = plugin name(s).
			'notice_ask_to_update_maybe'		 => _n_noop(
			'There is an update available for: %1$s.', 'There are updates available for the following plugins: %1$s.', 'ttm-business'
			), // %1$s = plugin name(s).
			'notice_cannot_update'				 => _n_noop(
			'Sorry, but you do not have the correct permissions to update the %1$s plugin.', 'Sorry, but you do not have the correct permissions to update the %1$s plugins.', 'ttm-business'
			), // %1$s = plugin name(s).
			'notice_can_activate_required'		 => _n_noop(
			'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'ttm-business'
			), // %1$s = plugin name(s).
			'notice_can_activate_recommended'	 => _n_noop(
			'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'ttm-business'
			), // %1$s = plugin name(s).
			'notice_cannot_activate'			 => _n_noop(
			'Sorry, but you do not have the correct permissions to activate the %1$s plugin.', 'Sorry, but you do not have the correct permissions to activate the %1$s plugins.', 'ttm-business'
			), // %1$s = plugin name(s).
			'install_link'						 => _n_noop(
			'Begin installing plugin', 'Begin installing plugins', 'ttm-business'
			),
			'update_link'						 => _n_noop(
			'Begin updating plugin', 'Begin updating plugins', 'ttm-business'
			),
			'activate_link'						 => _n_noop(
			'Begin activating plugin', 'Begin activating plugins', 'ttm-business'
			),
			'return'							 => esc_attr__( 'Return to Required Plugins Installer', 'ttm-business' ),
			'plugin_activated'					 => esc_attr__( 'Plugin activated successfully.', 'ttm-business' ),
			'activated_successfully'			 => esc_attr__( 'The following plugin was activated successfully:', 'ttm-business' ),
			'plugin_already_active'				 => esc_attr__( 'No action taken. Plugin %1$s was already active.', 'ttm-business' ), // %1$s = plugin name(s).
			'plugin_needs_higher_version'		 => esc_attr__( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'ttm-business' ), // %1$s = plugin name(s).
			'complete'							 => esc_attr__( 'All plugins installed and activated successfully. %1$s', 'ttm-business' ), // %s = dashboard link.
			'contact_admin'						 => esc_attr__( 'Please contact the administrator of this site for help.', 'ttm-business' ),
			'nag_type'							 => 'updated', // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
		)
	);
	tgmpa( $plugins, $config );
}
