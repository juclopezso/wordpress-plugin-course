<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/admin
 * @author     Your Name <email@example.com>
 */
class Plugin_Name_Admin
{

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct($plugin_name, $version)
	{

		$this->plugin_name = $plugin_name;
		$this->version = $version;
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles()
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/plugin-name-admin.css', array(), $this->version, 'all');
		wp_enqueue_style('bootstrap-css', plugin_dir_url(__FILE__) . 'css/bootstrap.min.css', array(), $this->version, 'all');
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts()
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/plugin-name-admin.js', array('jquery'), $this->version, false);
		wp_enqueue_script('bootstrap-js', plugin_dir_url(__FILE__) . 'js/bootstrap.min.js', array('jquery'), $this->version, false);
	}

	/**
	 * Add custom menu
	 *
	 * @since    1.0.0
	 */
	public function my_admin_menu()
	{
		// ads the menu admin to the wordpress sidebard
		add_menu_page('New Plugin Settings', 'WP10OrLess Settings', 'manage_options', 'plugin-name/mainsettings.php', array($this, 'myplugin_admin_page'), 'dashicons-tickets', 250);
		// submenu page
		add_submenu_page('plugin-name/mainsettings.php', 'Submenu Plugin Settings', 'Submenu Level Settings', 'manage_options', 'plugin-name/importer.php', array($this, 'myplugin_admin_sub_page'));
	}

	public function myplugin_admin_page()
	{
		// return views
		require_once('partials/plugin-name-admin-display.php');
	}

	public function myplugin_admin_sub_page()
	{
		// return subpage views
		require_once('partials/submenu-page.php');
	}
	
/**
	 * Register custom fileds for plugin settings
	 *
	 * @since    1.0.0
	 */
	public function register_wp10_general_settings() {
		// register all settings for general settings page
		register_setting( 'wp10customsettings', 'theemail');
		register_setting( 'wp10customsettings', 'thedays');
		register_setting( 'wp10customsettings', 'themultiselect');
	}
}
