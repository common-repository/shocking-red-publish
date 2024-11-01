<?php
/*
Plugin Name: Shocking Red Publish Button
Plugin URI: http://wordpress.org/extend/plugins/shocking-red-publish/
Description: A Shocking Red Publish Button for your (and cute-nose-japa-girl) post page.
Author: matias s.
Version: 1.7
Author URI: http://www.incerteza.org/blog/
*/

/*
Copyright 2008  Matias Schertel  (email : matias@incerteza.org)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function redbutton_css() {
	echo "
	<style type='text/css'>
	input[id=\"publish\"] {
		font-weight: bold;
		color: #FFFFFF;
		background-color: #FF0000;
	}
	input[id=\"publish\"]:hover {
		font-weight: bold;
		color: #000000;
		background-color: #FFFF00;
	}
	</style>
	";
}

add_action('admin_head', 'redbutton_css');
?>
