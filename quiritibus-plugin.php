<?php

/**
 * Plugin Name: Quiritibus Plugin
 * 
 * Description: Handles custom stuff for the Quiritibus magazine website.
 * 
 * Version: 1.0.0
 * 
 * Author: Alkor András
 * 
 * Author URI: https://andrasalkor.com/
 * 
 * License: GPLv2 or later
 * 
 * Text Domain: quiritibus-plugin
 */

/**
 * Copyright (C) 2022 Alkor András
 * 
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 */

 /**
  * Prevents hackers from browsing the files of the plugin folder.
  */
if ( ! defined( 'ABSPATH' ) ) {
    die;
}

/**
 * Include new block pattern categories and new block patterns registered in the Gutenberg editor.
 */
require_once( 'inc/patterns.php' );
require_once( 'inc/categories.php' );