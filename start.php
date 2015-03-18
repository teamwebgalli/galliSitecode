<?php

 /**
 *	Elgg - Sitecode plugin
 *	This plugin adds extra protection to user registration. Only users with a valid site code can register
 *	Author : Sarath C | Team Webgalli
 *	Team Webgalli | Elgg developers and consultants
 *	Mail : info@webgalli.com
 *	Web	: http://webgalli.com 
 *	Skype : 'team.webgalli'
 *	Licence : GNU2
 *	Copyright : Team Webgalli 2011-2015
 */

elgg_register_event_handler('init', 'system', 'galliSitecode_init');
function galliSitecode_init() {
	elgg_extend_view('register/extend', 'galliSitecode/register', 1000);
	elgg_register_plugin_hook_handler('action', 'register', 'galliSitecode_register_hook', 1);
}

function galliSitecode_register_hook() {
	elgg_make_sticky_form('register');
	$input_site_code = get_input('site_code');
	$defined_site_code = elgg_get_plugin_setting('site_key', 'galliSitecode');
	if ((!$input_site_code) or ($input_site_code != $defined_site_code)) {
		register_error(elgg_echo('galliSitecode:validcodeneeded'));
		forward(REFERER);
	}
}