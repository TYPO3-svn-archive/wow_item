<?php

class tx_wowitem_pi1_item{
    
    private $bonding = array('bonding:0','Binds when picked up','Binds when equipped');
  
    public $xml1 = null;
    public $xml2 = null;
      
    public function tx_wowitem_pi1_item($id,$lang=null){
      if(!intval($id))throw new Exception('noID');// ID is mandatory
      if(empty($lang))$lang = array_shift(explode(',',$_SERVER["HTTP_ACCEPT_LANGUAGE"]));// default to browser language
      $lang = explode('-',$lang);
      libxml_use_internal_errors(false); libxml_clear_errors();
      libxml_set_streams_context(stream_context_create(array('http' => array(
        'user_agent' => sprintf('Mozilla/5.0 (Windows; U; Windows NT 5.1; %s; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6',$lang[0]),
        'header' => sprintf('Accept-language: %s-%s',$lang[0],$lang[1]),
      ))));
      $url1 = sprintf("http://armory.wow-europe.com/item-tooltip.xml?i=%d",$id);
      $url2 = sprintf("http://armory.wow-europe.com/item-info.xml?i=%d",$id);
      $this->xml1 = simplexml_load_file($url1);
      $this->xml2 = simplexml_load_file($url2);
    }

}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/wow_item/pi1/class.tx_wowitem_pi1_item.php']) {
  include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/wow_item/pi1/class.tx_wowitem_pi1_item.php']);
}
?>
