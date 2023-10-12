<?php
/**
 * @package J2Store
 * @copyright Copyright (c)2014-17 Ramesh Elamathi / J2Store.org
 * @license GNU GPL v3 or later
 */
/** ensure this file is being included by a parent file */
defined('_JEXEC') or die('Restricted access');
jimport('joomla.filesystem.file');
include_once(JPATH_ADMINISTRATOR.'/components/com_j2store/version.php');
class plgLib_dompdfInstallerScript{
	function preflight( $type, $parent ) {
		if (version_compare(phpversion(), '7.1', '<')) {
            \Joomla\CMS\Factory::getApplication()->enqueueMessage( null, 'You need PHP Version 5.4 to install this package' );
			return false;
		}
	}
}
