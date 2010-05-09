<?php /*--------------------------------------------------------------------------------------------------------------*/

define(ARMORY_IMAGE,"http://armory.wow-europe.com/images/icons/64x64/%s.jpg");

include("../inc/class.tx_wowitem_item.php");

$trigger = array('Use','Equip');
$sourceType = array(
  'sourceType.createdBySpell'  => 'Created by Spell',
  'sourceType.worldDrop'       => 'World Drop',
  'sourceType.pvpReward'       => 'PVP Reward',
  'sourceType.creatureDrop'    => 'Creature Drop',
  'sourceType.questReward'     => 'Quest Reward',
);

$item = new tx_wowitem_item($_GET['itemid'],'en-EN');
$itemTooltips = $item->xml1->itemTooltips->itemTooltip;
$itemInfo = $item->xml2->itemInfo->item;

$context = stream_context_create(array('http' => array(
  'user_agent' => 'Mozilla/5.0 (Windows; U; Windows NT 5.1; de; rv:1.8) Gecko/20051111 Firefox/1.5',
  'header' => 'Accept-Language: de',
)));
print(str_ireplace('src="/','src="http://armory.wow-europe.com/',file_get_contents(sprintf('http://armory.wow-europe.com/item-tooltip.xml?i=%d',$_GET['itemid']))));

/*------------------------------------------------------------------------------------------------------------------*/?>
