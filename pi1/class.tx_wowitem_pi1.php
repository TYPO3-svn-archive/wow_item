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

require_once(t3lib_extMgm::extPath('wow_character').'mmlib/class.mmlib_pibase.php');
require_once(t3lib_extMgm::extPath('wow_item').'inc/class.tx_wowitem_item.php');/*items*/

/**
 * Plugin 'WOW - Item Display' for the 'wow_item' extension.
 *
 * @author	Jobe <jobe@jobesoft.de>
 * @package	TYPO3
 * @subpackage	tx_wowitem
 */
class tx_wowitem_pi1 extends mmlib_pibase {
	var $prefixId      = 'tx_wowitem_pi1';		// Same as class name
	var $scriptRelPath = 'pi1/class.tx_wowitem_pi1.php';	// Path to this script relative to the extension dir.
	var $extKey        = 'wow_item';	// The extension key.
	
	function main($content,$conf){try{
    
		parent::main($content,$conf);
		
		$item = new tx_wowitem_item(array('id'=>39497));
		
		$context = stream_context_create(array('http' => array(
			'user_agent' => 'Mozilla/5.0 (Windows; U; Windows NT 5.1; de; rv:1.8) Gecko/20051111 Firefox/1.5',
			'header' => 'Accept-Language: de',
		)));
		$tooltip = str_ireplace('src="/','src="http://armory.wow-europe.com/',file_get_contents(sprintf(
			'http://armory.wow-europe.com/item-tooltip.xml?r=Blackhand&n=Jobe&s=1&i=%d',
			$this->piVars['id']
		)));

		return $this->display($this->template,array('TOOLTIP'=>$tooltip),'MAIN');
			
	}catch (Exception $e){
		return $this->display($this->template,array('MESSAGE'=>$e->getMessage(),'TRACE'=>$e->getTraceAsString()),'ERROR');
	}}
	
}



if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/wow_item/pi1/class.tx_wowitem_pi1.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/wow_item/pi1/class.tx_wowitem_pi1.php']);
}

?>