<?php

return array(

	/**
	 * Page title
	 *
	 * @type string
	 */
	'title' => 'Admin',

	/**
	 * The path to your model config directory
	 *
	 * @type string
	 */
	'model_config_path' => path('app') . 'config/administrator',

	/**
	 * The path to your settings config directory
	 *
	 * @type string
	 */
	'settings_config_path' => path('app') . 'config/administrator/settings',

	/**
	 * The menu structure of the site. For models, you should either supply the name of a model config file or an array of names of model config
	 * files. The same applies to settings config files, except you must prepend 'settings.' to the settings config file name. By providing an
	 * array of names, you can group certain models or settings pages together. Each name needs to either have a config file in your model
	 * config path or settings config path with the same name. So 'users' would require a 'users.php' file in your model config path.
	 * 'settings.site' would require a 'site.php' file in your settings config path.
	 *
	 * @type array
	 *
	 * 	array(
	 *		'E-Commerce' => array('collections', 'products', 'product_images', 'orders'),
	 *		'homepage_sliders',
	 *		'users',
	 *		'roles',
	 *		'colors',
	 *		'Settings' => array('settings.site', 'settings.ecommerce', 'settings.social'),
	 *	)
	 */
	'menu' => array(),

	/**
	 * The permission option is the highest-level authentication check that lets you define a closure that should return true if the current user
	 * is allowed to view the admin section. Any "falsey" response will send the user back to the 'login_path' defined below.
	 *
	 * @type closure
	 */
	'permission'=> function()
	{
		return Auth::check();
	},

	/**
	 * This determines if you will have a dashboard (whose view you provide in the dashboard_view option) or a non-dashboard home
	 * page (whose menu item you provide in the home_page option)
	 *
	 * @type bool
	 */
	'use_dashboard' => false,

	/**
	 * If you want to create a dashboard view, provide the view string here.
	 *
	 * @type string
	 */
	'dashboard_view' => '',

	/**
	 * The menu item that should be used as the default landing page of the administrative section
	 *
	 * @type string
	 */
	'home_page' => '',

	/**
	 * The login path is the path where Administrator will send the user if they fail a permission check
	 *
	 * @type string
	 */
	'login_path' => 'user/login',

	/**
	 * This is the key of the return path that is sent with the redirection to your login_action. Input::get('redirect') will hold the return URL.
	 *
	 * @type string
	 */
	'login_redirect_key' => 'redirect',

	/**
	 * Global default rows per page
	 *
	 * @type NULL|int
	 */
	'global_rows_per_page' => 20,

);