<?php

require_once(t3lib_extMgm::extPath('wow_character').'mmlib/class.mmlib_xml.php');

class tx_wowitem_item extends mmlib_xml{

  //http://armory.wow-europe.com/item-tooltip.xml?i=39497&r=Blackhand&n=Jobe&s=4
  public function tx_wowitem_item(array $conf){
    if(!$conf['id'])throw new Exception('tx_wowitem_item: id missing');
    parent::mmlib_xml(array_merge(array(
      'id'          => $conf['id'],
      'url'         => 'http://armory.wow-europe.com/item-tooltip.xml?i={$id}',
      'filename'    => 'wowitem-{$id}.xml',
      'lang'        => 'de',
    ),$conf));
  }
  
  public function __get($name){
    switch($name){
      default: return parent::__get($name);
    }
  }
  
  public function __toString(){
    return get_class($this);
  }

}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/wow_item/pi1/class.tx_wowitem_item.php']) {
  include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/wow_item/pi1/class.tx_wowitem_item.php']);
}
?>
