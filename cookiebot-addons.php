<?php
/*
Plugin Name: DEVELOPMENT - Cookiebot Addons Standalone
Description: This plugin is used when developing new addons for Cookiebot. Enabling this plugin load Cookiebot Addons in this standalone plugin.
*/
//if(defined('COOKIEBOT_ADDONS_STANDALONE')) {
	define('COOKIE_ADDONS_LOADED',true);
	include_once('cookiebot-addons-init.php');
//}
