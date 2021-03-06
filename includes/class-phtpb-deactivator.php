<?php

/**
 * Fired during plugin deactivation
 *
 * @link       http://github.com/pehaa/pht-page-builder
 * @since      1.0.0
 *
 * @package    PeHaa_Themes_Page_Builder
 * @subpackage PeHaa_Themes_Page_Builder/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    PeHaa_Themes_Page_Builder
 * @subpackage PeHaa_Themes_Page_Builder/includes
 * @author     PeHaa THEMES <info@pehaa.com>
 */
class PeHaa_Themes_Page_Builder_Deactivator {

	/**
	 * Unsets "use PeHaa Themes Page Builder" for all posts on option.
	 *
	 * If not checked the old meta content will be dislayed after plugin re-activate
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {


		if ( isset( PeHaa_Themes_Page_Builder::$settings['deactivation'] ) && 'yes' === PeHaa_Themes_Page_Builder::$settings['deactivation'] ) {
			delete_metadata( 'post', 1, '_phtpb_state_meta_value_key', '', true );
		}
	}

}
