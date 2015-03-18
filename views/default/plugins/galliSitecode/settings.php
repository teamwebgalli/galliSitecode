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
	echo "<p>";
	echo elgg_echo('galliSitecode:inputsitecode'); 
	echo elgg_view('input/text', array('name' => "params[site_key]", 'value' => $vars['entity']->site_key)); 
	echo "</p>";
