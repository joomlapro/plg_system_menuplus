<?php
/**
 * @package     Template
 * @subpackage  tpl_template
 *
 * @author      Bruno Batista <bruno.batista@ctis.com.br>
 * @copyright   Copyright (C) 2013 AtomTech, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

if ($menu_icon = $item->params->get('menu_icon'))
{
	$item->title = '<i class="' . $menu_icon . '"></i> ' . $item->title;
}
?>
<span class="nav-header"><?php echo $item->title; ?></span>