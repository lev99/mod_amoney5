<?php
/**
 * version 1.0.7 2013
 * author Leonidas
 * copyright (C) 2010 Leonidas. All rights reserved.
 * license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

// no direct access
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once __DIR__ . '/helper.php';

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
