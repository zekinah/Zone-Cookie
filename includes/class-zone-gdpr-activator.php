<?php

/**
 * Fired during plugin activation
 *
 * @link       https://github.com/zekinah/
 * @since      1.0.0
 *
 * @package    Zone_Gdpr
 * @subpackage Zone_Gdpr/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Zone_Gdpr
 * @subpackage Zone_Gdpr/includes
 * @author     Zekinah Lecaros <zjlecaros@gmail.com>
 */
class Zone_Gdpr_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		$db = new Zone_Gdpr_Model_Config();
		$db->createTable();	
	}

}
