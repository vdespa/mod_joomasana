<?php
/**
 * Joomasana - Asana module for Joomla!
 * 
 * @package		Joomla
 * @subpackage 	mod_joomasana
 * @copyright 	(c) 2012 Valentin Despa. All rights reserved.
 * @author 		Valentin Despa; info@vdespa.de; www.vdespa.de
 * @license		GNU General Public License version 3; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

echo "This is the module<br>";

// Get module parameters
$params = new JRegistry;
$params->loadJSON($module->params);
var_dump($params);