<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2008 Jobe <jobe@jobesoft.de>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

require_once(PATH_tslib.'class.tslib_pibase.php');


/**
 * Plugin 'WOW - Item Display' for the 'wow_item' extension.
 *
 * @author	Jobe <jobe@jobesoft.de>
 * @package	TYPO3
 * @subpackage	tx_wowitem
 */
class tx_wowitem_pi1 extends tslib_pibase {
	var $prefixId      = 'tx_wowitem_pi1';		// Same as class name
	var $scriptRelPath = 'pi1/class.tx_wowitem_pi1.php';	// Path to this script relative to the extension dir.
	var $extKey        = 'wow_item';	// The extension key.
	
	/**
	 * The main method of the PlugIn
	 *
	 * @param	string		$content: The PlugIn content
	 * @param	array		$conf: The PlugIn configuration
	 * @return	The content that is displayed on the website
	 */
	function main($content,$conf)	{
		$this->conf=$conf;
		$this->pi_setPiVarDefaults();
		$this->pi_loadLL();
		$this->pi_USER_INT_obj=1;	// Configuring so caching is not expected. This value means that no cHash params are ever set. We do this, because it's a USER_INT object!

    $marker['###TOOLTIP###'] = 'unkown item';

    if($cID = $this->piVars['id']){
      $marker['###TOOLTIP###'] = str_ireplace('src="/','src="http://armory.wow-europe.com/',file_get_contents(sprintf('http://armory.wow-europe.com/item-tooltip.xml?i=%d',$cID)));
    }

    // get html template
    $content_html = $this->cObj->cObjGetSingle($this->conf['template.']['html'],$this->conf['template.']['html.']);
    $content_html = $this->cObj->getSubpart( $content_html, '###MAIN###' );
    $content_html = $this->cObj->substituteMarkerArray( $content_html, $marker );

    //print('<pre style="text-align:left;">');var_dump($this->conf['template.']);print('</pre>');

		return $this->pi_wrapInBaseClass($content_html);
	}
}



if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/wow_item/pi1/class.tx_wowitem_pi1.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/wow_item/pi1/class.tx_wowitem_pi1.php']);
}

?>