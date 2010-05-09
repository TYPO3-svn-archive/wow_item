<?php

########################################################################
# Extension Manager/Repository config file for ext: "wow_item"
#
# Auto generated 21-12-2008 13:44
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'World of Warcraft - Item',
	'description' => 'Displays an item from World of Warcraft',
	'category' => 'World of Warcraft',
	'author' => 'Jobe',
	'author_email' => 'jobe@jobesoft.de',
	'shy' => '',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '0.0.1',
	'constraints' => array(
		'depends' => array(
			'cms' => '',
			'typo3' => '4.3.2',
			'php' => '5.0',
			'wow_armory' => '0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:446:{s:9:"ChangeLog";s:4:"3fb4";s:10:"README.txt";s:4:"ee2d";s:12:"ext_icon.gif";s:4:"79f2";s:17:"ext_localconf.php";s:4:"40a6";s:14:"ext_tables.php";s:4:"e75c";s:28:"ext_typoscript_constants.txt";s:4:"d41d";s:24:"ext_typoscript_setup.txt";s:4:"93f3";s:13:"locallang.xml";s:4:"5640";s:16:"locallang_db.xml";s:4:"7873";s:12:"wow_item.ppj";s:4:"d457";s:12:"wow_item.ppx";s:4:"89c3";s:38:"doc/Prototype JavaScript framework.URL";s:4:"5fa8";s:12:"doc/TODO.txt";s:4:"12ff";s:24:"doc/Wowhead Tooltips.URL";s:4:"becd";s:64:"doc/itemLink - WoWWiki - Your guide to the World of Warcraft.URL";s:4:"bfa0";s:14:"doc/manual.sxw";s:4:"eae3";s:40:"doc/typo3.org Repository - contagged.URL";s:4:"a07f";s:44:"doc/typo3.org Repository - stfl_replacer.URL";s:4:"1437";s:41:"doc/typo3.org Repository - t3xtooltip.URL";s:4:"aa93";s:40:"doc/typo3.org Repository - titletips.URL";s:4:"1fd5";s:19:"doc/wizard_form.dat";s:4:"8703";s:20:"doc/wizard_form.html";s:4:"d29a";s:30:"doc/wowchar-tooltip/charid.php";s:4:"0af7";s:32:"doc/wowchar-tooltip/charname.php";s:4:"c868";s:30:"doc/wowchar-tooltip/config.php";s:4:"aa87";s:28:"doc/wowchar-tooltip/test.php";s:4:"a71c";s:35:"doc/wowchar-tooltip/css/tooltip.css";s:4:"6e7b";s:41:"doc/wowchar-tooltip/image/ajax-loader.gif";s:4:"f503";s:42:"doc/wowchar-tooltip/image/ajax-loading.gif";s:4:"3f5c";s:43:"doc/wowchar-tooltip/image/icons/class/1.png";s:4:"6c8e";s:44:"doc/wowchar-tooltip/image/icons/class/11.png";s:4:"1393";s:43:"doc/wowchar-tooltip/image/icons/class/2.png";s:4:"57cc";s:43:"doc/wowchar-tooltip/image/icons/class/3.png";s:4:"25f7";s:43:"doc/wowchar-tooltip/image/icons/class/4.png";s:4:"c781";s:43:"doc/wowchar-tooltip/image/icons/class/5.png";s:4:"6046";s:43:"doc/wowchar-tooltip/image/icons/class/7.png";s:4:"723a";s:43:"doc/wowchar-tooltip/image/icons/class/8.png";s:4:"3c2a";s:43:"doc/wowchar-tooltip/image/icons/class/9.png";s:4:"e5a8";s:44:"doc/wowchar-tooltip/image/icons/race/1-0.png";s:4:"a78a";s:44:"doc/wowchar-tooltip/image/icons/race/1-1.png";s:4:"cf14";s:45:"doc/wowchar-tooltip/image/icons/race/10-0.png";s:4:"57cd";s:45:"doc/wowchar-tooltip/image/icons/race/10-1.png";s:4:"4f7e";s:45:"doc/wowchar-tooltip/image/icons/race/11-0.png";s:4:"c5ab";s:45:"doc/wowchar-tooltip/image/icons/race/11-1.png";s:4:"c5b5";s:44:"doc/wowchar-tooltip/image/icons/race/2-0.png";s:4:"9dd6";s:44:"doc/wowchar-tooltip/image/icons/race/2-1.png";s:4:"1de0";s:44:"doc/wowchar-tooltip/image/icons/race/3-0.png";s:4:"9d7c";s:44:"doc/wowchar-tooltip/image/icons/race/3-1.png";s:4:"c8c6";s:44:"doc/wowchar-tooltip/image/icons/race/4-0.png";s:4:"75d1";s:44:"doc/wowchar-tooltip/image/icons/race/4-1.png";s:4:"6036";s:44:"doc/wowchar-tooltip/image/icons/race/5-0.png";s:4:"59a8";s:44:"doc/wowchar-tooltip/image/icons/race/5-1.png";s:4:"0291";s:44:"doc/wowchar-tooltip/image/icons/race/6-0.png";s:4:"09ba";s:44:"doc/wowchar-tooltip/image/icons/race/6-1.png";s:4:"f091";s:44:"doc/wowchar-tooltip/image/icons/race/7-0.png";s:4:"9f80";s:44:"doc/wowchar-tooltip/image/icons/race/7-1.png";s:4:"54b7";s:44:"doc/wowchar-tooltip/image/icons/race/8-0.png";s:4:"3362";s:44:"doc/wowchar-tooltip/image/icons/race/8-1.png";s:4:"1981";s:50:"doc/wowchar-tooltip/image/portraits/1-59/0-1-1.gif";s:4:"2992";s:50:"doc/wowchar-tooltip/image/portraits/1-59/0-1-2.gif";s:4:"bb91";s:50:"doc/wowchar-tooltip/image/portraits/1-59/0-1-4.gif";s:4:"c139";s:50:"doc/wowchar-tooltip/image/portraits/1-59/0-1-5.gif";s:4:"1e50";s:50:"doc/wowchar-tooltip/image/portraits/1-59/0-1-8.gif";s:4:"7899";s:50:"doc/wowchar-tooltip/image/portraits/1-59/0-1-9.gif";s:4:"e62d";s:51:"doc/wowchar-tooltip/image/portraits/1-59/0-10-2.gif";s:4:"7f34";s:51:"doc/wowchar-tooltip/image/portraits/1-59/0-10-3.gif";s:4:"8f2a";s:51:"doc/wowchar-tooltip/image/portraits/1-59/0-10-4.gif";s:4:"7351";s:51:"doc/wowchar-tooltip/image/portraits/1-59/0-10-5.gif";s:4:"ed45";s:51:"doc/wowchar-tooltip/image/portraits/1-59/0-10-8.gif";s:4:"140d";s:51:"doc/wowchar-tooltip/image/portraits/1-59/0-10-9.gif";s:4:"a28c";s:51:"doc/wowchar-tooltip/image/portraits/1-59/0-11-1.gif";s:4:"174a";s:51:"doc/wowchar-tooltip/image/portraits/1-59/0-11-2.gif";s:4:"598c";s:51:"doc/wowchar-tooltip/image/portraits/1-59/0-11-3.gif";s:4:"fa4d";s:51:"doc/wowchar-tooltip/image/portraits/1-59/0-11-5.gif";s:4:"b587";s:51:"doc/wowchar-tooltip/image/portraits/1-59/0-11-7.gif";s:4:"f0b1";s:51:"doc/wowchar-tooltip/image/portraits/1-59/0-11-8.gif";s:4:"c28a";s:50:"doc/wowchar-tooltip/image/portraits/1-59/0-2-1.gif";s:4:"8fdf";s:50:"doc/wowchar-tooltip/image/portraits/1-59/0-2-3.gif";s:4:"d255";s:50:"doc/wowchar-tooltip/image/portraits/1-59/0-2-4.gif";s:4:"4dd6";s:50:"doc/wowchar-tooltip/image/portraits/1-59/0-2-7.gif";s:4:"3f55";s:50:"doc/wowchar-tooltip/image/portraits/1-59/0-2-9.gif";s:4:"323b";s:50:"doc/wowchar-tooltip/image/portraits/1-59/0-3-1.gif";s:4:"4636";s:50:"doc/wowchar-tooltip/image/portraits/1-59/0-3-2.gif";s:4:"37aa";s:50:"doc/wowchar-tooltip/image/portraits/1-59/0-3-3.gif";s:4:"4fb1";s:50:"doc/wowchar-tooltip/image/portraits/1-59/0-3-4.gif";s:4:"68e7";s:50:"doc/wowchar-tooltip/image/portraits/1-59/0-3-5.gif";s:4:"3462";s:50:"doc/wowchar-tooltip/image/portraits/1-59/0-4-1.gif";s:4:"79f5";s:51:"doc/wowchar-tooltip/image/portraits/1-59/0-4-11.gif";s:4:"63b2";s:50:"doc/wowchar-tooltip/image/portraits/1-59/0-4-3.gif";s:4:"04c3";s:50:"doc/wowchar-tooltip/image/portraits/1-59/0-4-4.gif";s:4:"6dd3";s:50:"doc/wowchar-tooltip/image/portraits/1-59/0-4-5.gif";s:4:"d8b7";s:50:"doc/wowchar-tooltip/image/portraits/1-59/0-5-1.gif";s:4:"c2e5";s:50:"doc/wowchar-tooltip/image/portraits/1-59/0-5-4.gif";s:4:"0e93";s:50:"doc/wowchar-tooltip/image/portraits/1-59/0-5-5.gif";s:4:"6384";s:50:"doc/wowchar-tooltip/image/portraits/1-59/0-5-8.gif";s:4:"117d";s:50:"doc/wowchar-tooltip/image/portraits/1-59/0-5-9.gif";s:4:"a9f3";s:50:"doc/wowchar-tooltip/image/portraits/1-59/0-6-1.gif";s:4:"dfe5";s:51:"doc/wowchar-tooltip/image/portraits/1-59/0-6-11.gif";s:4:"a80a";s:50:"doc/wowchar-tooltip/image/portraits/1-59/0-6-3.gif";s:4:"827b";s:50:"doc/wowchar-tooltip/image/portraits/1-59/0-6-7.gif";s:4:"1141";s:50:"doc/wowchar-tooltip/image/portraits/1-59/0-7-1.gif";s:4:"93e5";s:50:"doc/wowchar-tooltip/image/portraits/1-59/0-7-4.gif";s:4:"a4ee";s:50:"doc/wowchar-tooltip/image/portraits/1-59/0-7-8.gif";s:4:"3dc1";s:50:"doc/wowchar-tooltip/image/portraits/1-59/0-7-9.gif";s:4:"8148";s:50:"doc/wowchar-tooltip/image/portraits/1-59/0-8-1.gif";s:4:"8194";s:50:"doc/wowchar-tooltip/image/portraits/1-59/0-8-3.gif";s:4:"b410";s:50:"doc/wowchar-tooltip/image/portraits/1-59/0-8-4.gif";s:4:"9625";s:50:"doc/wowchar-tooltip/image/portraits/1-59/0-8-5.gif";s:4:"b9a8";s:50:"doc/wowchar-tooltip/image/portraits/1-59/0-8-7.gif";s:4:"9e45";s:50:"doc/wowchar-tooltip/image/portraits/1-59/0-8-8.gif";s:4:"189f";s:50:"doc/wowchar-tooltip/image/portraits/1-59/1-1-1.gif";s:4:"e92d";s:50:"doc/wowchar-tooltip/image/portraits/1-59/1-1-2.gif";s:4:"7fe8";s:50:"doc/wowchar-tooltip/image/portraits/1-59/1-1-4.gif";s:4:"22b0";s:50:"doc/wowchar-tooltip/image/portraits/1-59/1-1-5.gif";s:4:"9f2a";s:50:"doc/wowchar-tooltip/image/portraits/1-59/1-1-8.gif";s:4:"5d9b";s:50:"doc/wowchar-tooltip/image/portraits/1-59/1-1-9.gif";s:4:"125a";s:51:"doc/wowchar-tooltip/image/portraits/1-59/1-10-2.gif";s:4:"a1f5";s:51:"doc/wowchar-tooltip/image/portraits/1-59/1-10-3.gif";s:4:"52d3";s:51:"doc/wowchar-tooltip/image/portraits/1-59/1-10-4.gif";s:4:"329f";s:51:"doc/wowchar-tooltip/image/portraits/1-59/1-10-5.gif";s:4:"9613";s:51:"doc/wowchar-tooltip/image/portraits/1-59/1-10-8.gif";s:4:"226c";s:51:"doc/wowchar-tooltip/image/portraits/1-59/1-10-9.gif";s:4:"489a";s:51:"doc/wowchar-tooltip/image/portraits/1-59/1-11-1.gif";s:4:"5421";s:51:"doc/wowchar-tooltip/image/portraits/1-59/1-11-2.gif";s:4:"87cf";s:51:"doc/wowchar-tooltip/image/portraits/1-59/1-11-3.gif";s:4:"b4f0";s:51:"doc/wowchar-tooltip/image/portraits/1-59/1-11-5.gif";s:4:"c46c";s:51:"doc/wowchar-tooltip/image/portraits/1-59/1-11-7.gif";s:4:"5c7e";s:51:"doc/wowchar-tooltip/image/portraits/1-59/1-11-8.gif";s:4:"58a8";s:50:"doc/wowchar-tooltip/image/portraits/1-59/1-2-1.gif";s:4:"b4dd";s:50:"doc/wowchar-tooltip/image/portraits/1-59/1-2-3.gif";s:4:"6a46";s:50:"doc/wowchar-tooltip/image/portraits/1-59/1-2-4.gif";s:4:"47c9";s:50:"doc/wowchar-tooltip/image/portraits/1-59/1-2-7.gif";s:4:"2452";s:50:"doc/wowchar-tooltip/image/portraits/1-59/1-2-9.gif";s:4:"99bf";s:50:"doc/wowchar-tooltip/image/portraits/1-59/1-3-1.gif";s:4:"b22e";s:50:"doc/wowchar-tooltip/image/portraits/1-59/1-3-2.gif";s:4:"ac55";s:50:"doc/wowchar-tooltip/image/portraits/1-59/1-3-3.gif";s:4:"bd02";s:50:"doc/wowchar-tooltip/image/portraits/1-59/1-3-4.gif";s:4:"6b10";s:50:"doc/wowchar-tooltip/image/portraits/1-59/1-3-5.gif";s:4:"5d3f";s:50:"doc/wowchar-tooltip/image/portraits/1-59/1-4-1.gif";s:4:"fc3e";s:51:"doc/wowchar-tooltip/image/portraits/1-59/1-4-11.gif";s:4:"931c";s:50:"doc/wowchar-tooltip/image/portraits/1-59/1-4-3.gif";s:4:"cf97";s:50:"doc/wowchar-tooltip/image/portraits/1-59/1-4-4.gif";s:4:"7e43";s:50:"doc/wowchar-tooltip/image/portraits/1-59/1-4-5.gif";s:4:"3daf";s:50:"doc/wowchar-tooltip/image/portraits/1-59/1-5-1.gif";s:4:"7145";s:50:"doc/wowchar-tooltip/image/portraits/1-59/1-5-4.gif";s:4:"111b";s:50:"doc/wowchar-tooltip/image/portraits/1-59/1-5-5.gif";s:4:"afc6";s:50:"doc/wowchar-tooltip/image/portraits/1-59/1-5-8.gif";s:4:"4a4b";s:50:"doc/wowchar-tooltip/image/portraits/1-59/1-5-9.gif";s:4:"a1e9";s:50:"doc/wowchar-tooltip/image/portraits/1-59/1-6-1.gif";s:4:"fe16";s:51:"doc/wowchar-tooltip/image/portraits/1-59/1-6-11.gif";s:4:"26ba";s:50:"doc/wowchar-tooltip/image/portraits/1-59/1-6-3.gif";s:4:"389d";s:50:"doc/wowchar-tooltip/image/portraits/1-59/1-6-7.gif";s:4:"49c8";s:50:"doc/wowchar-tooltip/image/portraits/1-59/1-7-1.gif";s:4:"acd8";s:50:"doc/wowchar-tooltip/image/portraits/1-59/1-7-4.gif";s:4:"1cd3";s:50:"doc/wowchar-tooltip/image/portraits/1-59/1-7-8.gif";s:4:"560b";s:50:"doc/wowchar-tooltip/image/portraits/1-59/1-7-9.gif";s:4:"a426";s:50:"doc/wowchar-tooltip/image/portraits/1-59/1-8-1.gif";s:4:"e816";s:50:"doc/wowchar-tooltip/image/portraits/1-59/1-8-3.gif";s:4:"6195";s:50:"doc/wowchar-tooltip/image/portraits/1-59/1-8-4.gif";s:4:"518b";s:50:"doc/wowchar-tooltip/image/portraits/1-59/1-8-5.gif";s:4:"2078";s:50:"doc/wowchar-tooltip/image/portraits/1-59/1-8-7.gif";s:4:"8c25";s:50:"doc/wowchar-tooltip/image/portraits/1-59/1-8-8.gif";s:4:"5086";s:51:"doc/wowchar-tooltip/image/portraits/60-69/0-1-1.gif";s:4:"cb18";s:51:"doc/wowchar-tooltip/image/portraits/60-69/0-1-2.gif";s:4:"9340";s:51:"doc/wowchar-tooltip/image/portraits/60-69/0-1-4.gif";s:4:"ff9f";s:51:"doc/wowchar-tooltip/image/portraits/60-69/0-1-5.gif";s:4:"c8a1";s:51:"doc/wowchar-tooltip/image/portraits/60-69/0-1-8.gif";s:4:"506f";s:51:"doc/wowchar-tooltip/image/portraits/60-69/0-1-9.gif";s:4:"4ddd";s:52:"doc/wowchar-tooltip/image/portraits/60-69/0-10-2.gif";s:4:"43fd";s:52:"doc/wowchar-tooltip/image/portraits/60-69/0-10-3.gif";s:4:"f477";s:52:"doc/wowchar-tooltip/image/portraits/60-69/0-10-4.gif";s:4:"80c1";s:52:"doc/wowchar-tooltip/image/portraits/60-69/0-10-5.gif";s:4:"f0dd";s:52:"doc/wowchar-tooltip/image/portraits/60-69/0-10-8.gif";s:4:"b706";s:52:"doc/wowchar-tooltip/image/portraits/60-69/0-10-9.gif";s:4:"1fd4";s:52:"doc/wowchar-tooltip/image/portraits/60-69/0-11-1.gif";s:4:"2afd";s:52:"doc/wowchar-tooltip/image/portraits/60-69/0-11-2.gif";s:4:"35e4";s:52:"doc/wowchar-tooltip/image/portraits/60-69/0-11-3.gif";s:4:"a291";s:52:"doc/wowchar-tooltip/image/portraits/60-69/0-11-5.gif";s:4:"81ce";s:52:"doc/wowchar-tooltip/image/portraits/60-69/0-11-7.gif";s:4:"8e9d";s:52:"doc/wowchar-tooltip/image/portraits/60-69/0-11-8.gif";s:4:"6a75";s:51:"doc/wowchar-tooltip/image/portraits/60-69/0-2-1.gif";s:4:"dffc";s:51:"doc/wowchar-tooltip/image/portraits/60-69/0-2-3.gif";s:4:"fead";s:51:"doc/wowchar-tooltip/image/portraits/60-69/0-2-4.gif";s:4:"ae1a";s:51:"doc/wowchar-tooltip/image/portraits/60-69/0-2-7.gif";s:4:"d8ec";s:51:"doc/wowchar-tooltip/image/portraits/60-69/0-2-9.gif";s:4:"4067";s:51:"doc/wowchar-tooltip/image/portraits/60-69/0-3-1.gif";s:4:"8b4f";s:51:"doc/wowchar-tooltip/image/portraits/60-69/0-3-2.gif";s:4:"2b46";s:51:"doc/wowchar-tooltip/image/portraits/60-69/0-3-3.gif";s:4:"dac8";s:51:"doc/wowchar-tooltip/image/portraits/60-69/0-3-4.gif";s:4:"0cdb";s:51:"doc/wowchar-tooltip/image/portraits/60-69/0-3-5.gif";s:4:"5b41";s:51:"doc/wowchar-tooltip/image/portraits/60-69/0-4-1.gif";s:4:"04de";s:52:"doc/wowchar-tooltip/image/portraits/60-69/0-4-11.gif";s:4:"b996";s:51:"doc/wowchar-tooltip/image/portraits/60-69/0-4-3.gif";s:4:"7a90";s:51:"doc/wowchar-tooltip/image/portraits/60-69/0-4-4.gif";s:4:"8bba";s:51:"doc/wowchar-tooltip/image/portraits/60-69/0-4-5.gif";s:4:"f162";s:51:"doc/wowchar-tooltip/image/portraits/60-69/0-5-1.gif";s:4:"b56c";s:51:"doc/wowchar-tooltip/image/portraits/60-69/0-5-4.gif";s:4:"de16";s:51:"doc/wowchar-tooltip/image/portraits/60-69/0-5-5.gif";s:4:"ebb2";s:51:"doc/wowchar-tooltip/image/portraits/60-69/0-5-8.gif";s:4:"e890";s:51:"doc/wowchar-tooltip/image/portraits/60-69/0-5-9.gif";s:4:"fc2f";s:51:"doc/wowchar-tooltip/image/portraits/60-69/0-6-1.gif";s:4:"eddd";s:52:"doc/wowchar-tooltip/image/portraits/60-69/0-6-11.gif";s:4:"0444";s:51:"doc/wowchar-tooltip/image/portraits/60-69/0-6-3.gif";s:4:"c530";s:51:"doc/wowchar-tooltip/image/portraits/60-69/0-6-7.gif";s:4:"3fb8";s:51:"doc/wowchar-tooltip/image/portraits/60-69/0-7-1.gif";s:4:"761f";s:51:"doc/wowchar-tooltip/image/portraits/60-69/0-7-4.gif";s:4:"1f61";s:51:"doc/wowchar-tooltip/image/portraits/60-69/0-7-8.gif";s:4:"142f";s:51:"doc/wowchar-tooltip/image/portraits/60-69/0-7-9.gif";s:4:"ebb2";s:51:"doc/wowchar-tooltip/image/portraits/60-69/0-8-1.gif";s:4:"8024";s:51:"doc/wowchar-tooltip/image/portraits/60-69/0-8-3.gif";s:4:"f168";s:51:"doc/wowchar-tooltip/image/portraits/60-69/0-8-4.gif";s:4:"8f92";s:51:"doc/wowchar-tooltip/image/portraits/60-69/0-8-5.gif";s:4:"1cd9";s:51:"doc/wowchar-tooltip/image/portraits/60-69/0-8-7.gif";s:4:"e696";s:51:"doc/wowchar-tooltip/image/portraits/60-69/0-8-8.gif";s:4:"252c";s:51:"doc/wowchar-tooltip/image/portraits/60-69/1-1-1.gif";s:4:"e113";s:51:"doc/wowchar-tooltip/image/portraits/60-69/1-1-2.gif";s:4:"3e13";s:51:"doc/wowchar-tooltip/image/portraits/60-69/1-1-4.gif";s:4:"0d3c";s:51:"doc/wowchar-tooltip/image/portraits/60-69/1-1-5.gif";s:4:"9fc2";s:51:"doc/wowchar-tooltip/image/portraits/60-69/1-1-8.gif";s:4:"32ed";s:51:"doc/wowchar-tooltip/image/portraits/60-69/1-1-9.gif";s:4:"6db0";s:52:"doc/wowchar-tooltip/image/portraits/60-69/1-10-2.gif";s:4:"7844";s:52:"doc/wowchar-tooltip/image/portraits/60-69/1-10-3.gif";s:4:"e76c";s:52:"doc/wowchar-tooltip/image/portraits/60-69/1-10-4.gif";s:4:"c2ab";s:52:"doc/wowchar-tooltip/image/portraits/60-69/1-10-5.gif";s:4:"624d";s:52:"doc/wowchar-tooltip/image/portraits/60-69/1-10-8.gif";s:4:"4567";s:52:"doc/wowchar-tooltip/image/portraits/60-69/1-10-9.gif";s:4:"3206";s:52:"doc/wowchar-tooltip/image/portraits/60-69/1-11-1.gif";s:4:"0aae";s:52:"doc/wowchar-tooltip/image/portraits/60-69/1-11-2.gif";s:4:"6eaa";s:52:"doc/wowchar-tooltip/image/portraits/60-69/1-11-3.gif";s:4:"8c4d";s:52:"doc/wowchar-tooltip/image/portraits/60-69/1-11-5.gif";s:4:"4122";s:52:"doc/wowchar-tooltip/image/portraits/60-69/1-11-7.gif";s:4:"e3a3";s:52:"doc/wowchar-tooltip/image/portraits/60-69/1-11-8.gif";s:4:"d10a";s:51:"doc/wowchar-tooltip/image/portraits/60-69/1-2-1.gif";s:4:"d958";s:51:"doc/wowchar-tooltip/image/portraits/60-69/1-2-3.gif";s:4:"b6e2";s:51:"doc/wowchar-tooltip/image/portraits/60-69/1-2-4.gif";s:4:"2c92";s:51:"doc/wowchar-tooltip/image/portraits/60-69/1-2-7.gif";s:4:"1a73";s:51:"doc/wowchar-tooltip/image/portraits/60-69/1-2-9.gif";s:4:"316e";s:51:"doc/wowchar-tooltip/image/portraits/60-69/1-3-1.gif";s:4:"e307";s:51:"doc/wowchar-tooltip/image/portraits/60-69/1-3-2.gif";s:4:"2e55";s:51:"doc/wowchar-tooltip/image/portraits/60-69/1-3-3.gif";s:4:"1fe8";s:51:"doc/wowchar-tooltip/image/portraits/60-69/1-3-4.gif";s:4:"b74d";s:51:"doc/wowchar-tooltip/image/portraits/60-69/1-3-5.gif";s:4:"4a52";s:51:"doc/wowchar-tooltip/image/portraits/60-69/1-4-1.gif";s:4:"1998";s:52:"doc/wowchar-tooltip/image/portraits/60-69/1-4-11.gif";s:4:"af71";s:51:"doc/wowchar-tooltip/image/portraits/60-69/1-4-3.gif";s:4:"0ae0";s:51:"doc/wowchar-tooltip/image/portraits/60-69/1-4-4.gif";s:4:"012d";s:51:"doc/wowchar-tooltip/image/portraits/60-69/1-4-5.gif";s:4:"91ab";s:51:"doc/wowchar-tooltip/image/portraits/60-69/1-5-1.gif";s:4:"473a";s:51:"doc/wowchar-tooltip/image/portraits/60-69/1-5-4.gif";s:4:"135a";s:51:"doc/wowchar-tooltip/image/portraits/60-69/1-5-5.gif";s:4:"5df0";s:51:"doc/wowchar-tooltip/image/portraits/60-69/1-5-8.gif";s:4:"e416";s:51:"doc/wowchar-tooltip/image/portraits/60-69/1-5-9.gif";s:4:"09a2";s:51:"doc/wowchar-tooltip/image/portraits/60-69/1-6-1.gif";s:4:"1302";s:52:"doc/wowchar-tooltip/image/portraits/60-69/1-6-11.gif";s:4:"ce50";s:51:"doc/wowchar-tooltip/image/portraits/60-69/1-6-3.gif";s:4:"6e66";s:51:"doc/wowchar-tooltip/image/portraits/60-69/1-6-7.gif";s:4:"c820";s:51:"doc/wowchar-tooltip/image/portraits/60-69/1-7-1.gif";s:4:"920b";s:51:"doc/wowchar-tooltip/image/portraits/60-69/1-7-4.gif";s:4:"8cdd";s:51:"doc/wowchar-tooltip/image/portraits/60-69/1-7-8.gif";s:4:"f6de";s:51:"doc/wowchar-tooltip/image/portraits/60-69/1-7-9.gif";s:4:"0afa";s:51:"doc/wowchar-tooltip/image/portraits/60-69/1-8-1.gif";s:4:"2bb6";s:51:"doc/wowchar-tooltip/image/portraits/60-69/1-8-3.gif";s:4:"b291";s:51:"doc/wowchar-tooltip/image/portraits/60-69/1-8-4.gif";s:4:"9199";s:51:"doc/wowchar-tooltip/image/portraits/60-69/1-8-5.gif";s:4:"065a";s:51:"doc/wowchar-tooltip/image/portraits/60-69/1-8-7.gif";s:4:"9bf5";s:51:"doc/wowchar-tooltip/image/portraits/60-69/1-8-8.gif";s:4:"1bd4";s:48:"doc/wowchar-tooltip/image/portraits/70/0-1-1.gif";s:4:"6fd4";s:48:"doc/wowchar-tooltip/image/portraits/70/0-1-2.gif";s:4:"7fde";s:48:"doc/wowchar-tooltip/image/portraits/70/0-1-4.gif";s:4:"381d";s:48:"doc/wowchar-tooltip/image/portraits/70/0-1-5.gif";s:4:"fa61";s:48:"doc/wowchar-tooltip/image/portraits/70/0-1-8.gif";s:4:"f609";s:48:"doc/wowchar-tooltip/image/portraits/70/0-1-9.gif";s:4:"46d0";s:49:"doc/wowchar-tooltip/image/portraits/70/0-10-2.gif";s:4:"e44b";s:49:"doc/wowchar-tooltip/image/portraits/70/0-10-3.gif";s:4:"40ff";s:49:"doc/wowchar-tooltip/image/portraits/70/0-10-4.gif";s:4:"0cc7";s:49:"doc/wowchar-tooltip/image/portraits/70/0-10-5.gif";s:4:"9f75";s:49:"doc/wowchar-tooltip/image/portraits/70/0-10-8.gif";s:4:"973d";s:49:"doc/wowchar-tooltip/image/portraits/70/0-10-9.gif";s:4:"cca8";s:49:"doc/wowchar-tooltip/image/portraits/70/0-11-1.gif";s:4:"4501";s:49:"doc/wowchar-tooltip/image/portraits/70/0-11-2.gif";s:4:"84e4";s:49:"doc/wowchar-tooltip/image/portraits/70/0-11-3.gif";s:4:"6125";s:49:"doc/wowchar-tooltip/image/portraits/70/0-11-5.gif";s:4:"0f6e";s:49:"doc/wowchar-tooltip/image/portraits/70/0-11-7.gif";s:4:"f639";s:49:"doc/wowchar-tooltip/image/portraits/70/0-11-8.gif";s:4:"5470";s:48:"doc/wowchar-tooltip/image/portraits/70/0-2-1.gif";s:4:"dc4c";s:48:"doc/wowchar-tooltip/image/portraits/70/0-2-3.gif";s:4:"0fad";s:48:"doc/wowchar-tooltip/image/portraits/70/0-2-4.gif";s:4:"889a";s:48:"doc/wowchar-tooltip/image/portraits/70/0-2-7.gif";s:4:"2bec";s:48:"doc/wowchar-tooltip/image/portraits/70/0-2-9.gif";s:4:"63da";s:48:"doc/wowchar-tooltip/image/portraits/70/0-3-1.gif";s:4:"f04a";s:48:"doc/wowchar-tooltip/image/portraits/70/0-3-2.gif";s:4:"a335";s:48:"doc/wowchar-tooltip/image/portraits/70/0-3-3.gif";s:4:"49cf";s:48:"doc/wowchar-tooltip/image/portraits/70/0-3-4.gif";s:4:"d700";s:48:"doc/wowchar-tooltip/image/portraits/70/0-3-5.gif";s:4:"0c7d";s:48:"doc/wowchar-tooltip/image/portraits/70/0-4-1.gif";s:4:"daff";s:49:"doc/wowchar-tooltip/image/portraits/70/0-4-11.gif";s:4:"7164";s:48:"doc/wowchar-tooltip/image/portraits/70/0-4-3.gif";s:4:"2a09";s:48:"doc/wowchar-tooltip/image/portraits/70/0-4-4.gif";s:4:"f729";s:48:"doc/wowchar-tooltip/image/portraits/70/0-4-5.gif";s:4:"6a03";s:48:"doc/wowchar-tooltip/image/portraits/70/0-5-1.gif";s:4:"f0bf";s:48:"doc/wowchar-tooltip/image/portraits/70/0-5-4.gif";s:4:"971f";s:48:"doc/wowchar-tooltip/image/portraits/70/0-5-5.gif";s:4:"57d7";s:48:"doc/wowchar-tooltip/image/portraits/70/0-5-8.gif";s:4:"e258";s:48:"doc/wowchar-tooltip/image/portraits/70/0-5-9.gif";s:4:"e1cc";s:48:"doc/wowchar-tooltip/image/portraits/70/0-6-1.gif";s:4:"be13";s:49:"doc/wowchar-tooltip/image/portraits/70/0-6-11.gif";s:4:"1be4";s:48:"doc/wowchar-tooltip/image/portraits/70/0-6-3.gif";s:4:"fe38";s:48:"doc/wowchar-tooltip/image/portraits/70/0-6-7.gif";s:4:"088a";s:48:"doc/wowchar-tooltip/image/portraits/70/0-7-1.gif";s:4:"885a";s:48:"doc/wowchar-tooltip/image/portraits/70/0-7-4.gif";s:4:"9d67";s:48:"doc/wowchar-tooltip/image/portraits/70/0-7-8.gif";s:4:"f698";s:48:"doc/wowchar-tooltip/image/portraits/70/0-7-9.gif";s:4:"2d89";s:48:"doc/wowchar-tooltip/image/portraits/70/0-8-1.gif";s:4:"6c56";s:48:"doc/wowchar-tooltip/image/portraits/70/0-8-3.gif";s:4:"3921";s:48:"doc/wowchar-tooltip/image/portraits/70/0-8-4.gif";s:4:"cfe1";s:48:"doc/wowchar-tooltip/image/portraits/70/0-8-5.gif";s:4:"5809";s:48:"doc/wowchar-tooltip/image/portraits/70/0-8-7.gif";s:4:"1b09";s:48:"doc/wowchar-tooltip/image/portraits/70/0-8-8.gif";s:4:"5856";s:48:"doc/wowchar-tooltip/image/portraits/70/1-1-1.gif";s:4:"a1e8";s:48:"doc/wowchar-tooltip/image/portraits/70/1-1-2.gif";s:4:"2e3b";s:48:"doc/wowchar-tooltip/image/portraits/70/1-1-4.gif";s:4:"28e7";s:48:"doc/wowchar-tooltip/image/portraits/70/1-1-5.gif";s:4:"94b7";s:48:"doc/wowchar-tooltip/image/portraits/70/1-1-8.gif";s:4:"1e69";s:48:"doc/wowchar-tooltip/image/portraits/70/1-1-9.gif";s:4:"ff83";s:49:"doc/wowchar-tooltip/image/portraits/70/1-10-2.gif";s:4:"2df6";s:49:"doc/wowchar-tooltip/image/portraits/70/1-10-3.gif";s:4:"d639";s:49:"doc/wowchar-tooltip/image/portraits/70/1-10-4.gif";s:4:"2517";s:49:"doc/wowchar-tooltip/image/portraits/70/1-10-5.gif";s:4:"8761";s:49:"doc/wowchar-tooltip/image/portraits/70/1-10-8.gif";s:4:"24e5";s:49:"doc/wowchar-tooltip/image/portraits/70/1-10-9.gif";s:4:"c8f3";s:49:"doc/wowchar-tooltip/image/portraits/70/1-11-1.gif";s:4:"78fb";s:49:"doc/wowchar-tooltip/image/portraits/70/1-11-2.gif";s:4:"45f5";s:49:"doc/wowchar-tooltip/image/portraits/70/1-11-3.gif";s:4:"4597";s:49:"doc/wowchar-tooltip/image/portraits/70/1-11-5.gif";s:4:"32b2";s:49:"doc/wowchar-tooltip/image/portraits/70/1-11-7.gif";s:4:"e6bd";s:49:"doc/wowchar-tooltip/image/portraits/70/1-11-8.gif";s:4:"c615";s:48:"doc/wowchar-tooltip/image/portraits/70/1-2-1.gif";s:4:"198a";s:48:"doc/wowchar-tooltip/image/portraits/70/1-2-3.gif";s:4:"b0d0";s:48:"doc/wowchar-tooltip/image/portraits/70/1-2-4.gif";s:4:"32aa";s:48:"doc/wowchar-tooltip/image/portraits/70/1-2-7.gif";s:4:"21f2";s:48:"doc/wowchar-tooltip/image/portraits/70/1-2-9.gif";s:4:"5c3a";s:48:"doc/wowchar-tooltip/image/portraits/70/1-3-1.gif";s:4:"a489";s:48:"doc/wowchar-tooltip/image/portraits/70/1-3-2.gif";s:4:"cc5d";s:48:"doc/wowchar-tooltip/image/portraits/70/1-3-3.gif";s:4:"c26d";s:48:"doc/wowchar-tooltip/image/portraits/70/1-3-4.gif";s:4:"0120";s:48:"doc/wowchar-tooltip/image/portraits/70/1-3-5.gif";s:4:"2d1b";s:48:"doc/wowchar-tooltip/image/portraits/70/1-4-1.gif";s:4:"7140";s:49:"doc/wowchar-tooltip/image/portraits/70/1-4-11.gif";s:4:"8b4a";s:48:"doc/wowchar-tooltip/image/portraits/70/1-4-3.gif";s:4:"4fe1";s:48:"doc/wowchar-tooltip/image/portraits/70/1-4-4.gif";s:4:"977f";s:48:"doc/wowchar-tooltip/image/portraits/70/1-4-5.gif";s:4:"2352";s:48:"doc/wowchar-tooltip/image/portraits/70/1-5-1.gif";s:4:"623b";s:48:"doc/wowchar-tooltip/image/portraits/70/1-5-4.gif";s:4:"7b81";s:48:"doc/wowchar-tooltip/image/portraits/70/1-5-5.gif";s:4:"430a";s:48:"doc/wowchar-tooltip/image/portraits/70/1-5-8.gif";s:4:"4112";s:48:"doc/wowchar-tooltip/image/portraits/70/1-5-9.gif";s:4:"d3f2";s:48:"doc/wowchar-tooltip/image/portraits/70/1-6-1.gif";s:4:"c605";s:49:"doc/wowchar-tooltip/image/portraits/70/1-6-11.gif";s:4:"3297";s:48:"doc/wowchar-tooltip/image/portraits/70/1-6-3.gif";s:4:"fd2d";s:48:"doc/wowchar-tooltip/image/portraits/70/1-6-7.gif";s:4:"b5e2";s:48:"doc/wowchar-tooltip/image/portraits/70/1-7-1.gif";s:4:"9a25";s:48:"doc/wowchar-tooltip/image/portraits/70/1-7-4.gif";s:4:"ccd9";s:48:"doc/wowchar-tooltip/image/portraits/70/1-7-8.gif";s:4:"c822";s:48:"doc/wowchar-tooltip/image/portraits/70/1-7-9.gif";s:4:"0d55";s:48:"doc/wowchar-tooltip/image/portraits/70/1-8-1.gif";s:4:"1b42";s:48:"doc/wowchar-tooltip/image/portraits/70/1-8-3.gif";s:4:"05ba";s:48:"doc/wowchar-tooltip/image/portraits/70/1-8-4.gif";s:4:"12b8";s:48:"doc/wowchar-tooltip/image/portraits/70/1-8-5.gif";s:4:"81d2";s:48:"doc/wowchar-tooltip/image/portraits/70/1-8-7.gif";s:4:"fc83";s:48:"doc/wowchar-tooltip/image/portraits/70/1-8-8.gif";s:4:"d5ac";s:33:"doc/wowchar-tooltip/js/overlib.js";s:4:"4569";s:36:"doc/wowchar-tooltip/js/tooltipnew.js";s:4:"8bb6";s:31:"doc/wowchar-tooltip/lang/de.php";s:4:"a2bb";s:31:"doc/wowchar-tooltip/lang/en.php";s:4:"fef5";s:31:"doc/wowchar-tooltip/lang/es.php";s:4:"30ec";s:31:"doc/wowchar-tooltip/lang/fr.php";s:4:"0965";s:31:"doc/wowchar-tooltip/lang/ko.php";s:4:"688a";s:31:"doc/wowchar-tooltip/lang/zh.php";s:4:"d31a";s:30:"doc/wowitem-tooltip/config.php";s:4:"aa87";s:30:"doc/wowitem-tooltip/itemid.php";s:4:"b778";s:32:"doc/wowitem-tooltip/itemname.php";s:4:"2c45";s:28:"doc/wowitem-tooltip/test.php";s:4:"a71c";s:35:"doc/wowitem-tooltip/css/tooltip.css";s:4:"6e88";s:41:"doc/wowitem-tooltip/image/Socket_Blue.png";s:4:"c739";s:41:"doc/wowitem-tooltip/image/Socket_Meta.png";s:4:"bacd";s:40:"doc/wowitem-tooltip/image/Socket_Red.png";s:4:"7cb1";s:43:"doc/wowitem-tooltip/image/Socket_Yellow.png";s:4:"480e";s:41:"doc/wowitem-tooltip/image/ajax-loader.gif";s:4:"f503";s:42:"doc/wowitem-tooltip/image/ajax-loading.gif";s:4:"3f5c";s:33:"doc/wowitem-tooltip/js/overlib.js";s:4:"4569";s:36:"doc/wowitem-tooltip/js/tooltipnew.js";s:4:"eb72";s:14:"pi1/ce_wiz.gif";s:4:"3ff0";s:28:"pi1/class.tx_wowitem_pi1.php";s:4:"964f";s:33:"pi1/class.tx_wowitem_pi1_item.php";s:4:"09a8";s:36:"pi1/class.tx_wowitem_pi1_wizicon.php";s:4:"f9b1";s:13:"pi1/clear.gif";s:4:"cc11";s:17:"pi1/locallang.xml";s:4:"bb4f";s:12:"pi1/test.php";s:4:"b6db";s:15:"pi1/tooltip.php";s:4:"61ee";s:23:"pi1/tx_wowitem_pi1.html";s:4:"b1f2";s:24:"pi1/static/constants.txt";s:4:"cd7c";s:24:"pi1/static/editorcfg.txt";s:4:"17b8";s:20:"pi1/static/setup.txt";s:4:"8d32";s:24:"pi1/static/css/setup.txt";s:4:"badf";s:13:"res/icons.pdn";s:4:"746f";s:19:"res/css/tooltip.css";s:4:"2e93";s:25:"res/image/Socket_Blue.png";s:4:"c739";s:25:"res/image/Socket_Meta.png";s:4:"bacd";s:24:"res/image/Socket_Red.png";s:4:"7cb1";s:27:"res/image/Socket_Yellow.png";s:4:"480e";s:25:"res/image/ajax-loader.gif";s:4:"f503";s:26:"res/image/ajax-loading.gif";s:4:"3f5c";s:20:"res/image/ttip-b.png";s:4:"166b";s:21:"res/image/ttip-bl.png";s:4:"a461";s:21:"res/image/ttip-br.png";s:4:"0ad3";s:20:"res/image/ttip-l.png";s:4:"7034";s:20:"res/image/ttip-r.png";s:4:"3f6a";s:20:"res/image/ttip-t.png";s:4:"4a0c";s:21:"res/image/ttip-tl.png";s:4:"ca08";s:21:"res/image/ttip-tr.png";s:4:"36a8";s:20:"res/image/ttipbg.png";s:4:"4c3c";s:17:"res/js/tooltip.js";s:4:"11fd";s:29:"res/js/mootools12/mootools.js";s:4:"741c";s:29:"res/js/overlib421/makemini.pl";s:4:"d84d";s:28:"res/js/overlib421/overlib.js";s:4:"2e6b";s:35:"res/js/overlib421/overlib_anchor.js";s:4:"834e";s:40:"res/js/overlib421/overlib_centerpopup.js";s:4:"e625";s:39:"res/js/overlib421/overlib_crossframe.js";s:4:"e2af";s:37:"res/js/overlib421/overlib_cssstyle.js";s:4:"0b01";s:34:"res/js/overlib421/overlib_debug.js";s:4:"f4fb";s:38:"res/js/overlib421/overlib_exclusive.js";s:4:"04a1";s:41:"res/js/overlib421/overlib_followscroll.js";s:4:"2ec5";s:37:"res/js/overlib421/overlib_hideform.js";s:4:"84d0";s:37:"res/js/overlib421/overlib_setonoff.js";s:4:"1486";s:35:"res/js/overlib421/overlib_shadow.js";s:4:"25a6";s:45:"res/js/overlib421/Mini/overlib_anchor_mini.js";s:4:"cb56";s:50:"res/js/overlib421/Mini/overlib_centerpopup_mini.js";s:4:"8467";s:49:"res/js/overlib421/Mini/overlib_crossframe_mini.js";s:4:"fbbb";s:46:"res/js/overlib421/Mini/overlib_csstyle_mini.js";s:4:"2927";s:44:"res/js/overlib421/Mini/overlib_debug_mini.js";s:4:"ea53";s:48:"res/js/overlib421/Mini/overlib_exclusive_mini.js";s:4:"df39";s:51:"res/js/overlib421/Mini/overlib_followscroll_mini.js";s:4:"2285";s:47:"res/js/overlib421/Mini/overlib_hideform_mini.js";s:4:"e795";s:38:"res/js/overlib421/Mini/overlib_mini.js";s:4:"2b49";s:47:"res/js/overlib421/Mini/overlib_setonoff_mini.js";s:4:"4bc9";s:45:"res/js/overlib421/Mini/overlib_shadow_mini.js";s:4:"13f8";}',
	'suggests' => array(
	),
);

?>