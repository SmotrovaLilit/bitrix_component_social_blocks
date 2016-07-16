<?
use Bitrix\Main\Localization\Loc;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

Loc::loadMessages(__FILE__);

$arComponentDescription = array(
	"NAME" => Loc::getMessage('COMP_SOCIAL_BLOCKS_LINKS_TITLE'),
	"DESCRIPTION" => Loc::getMessage('COMP_SOCIAL_BLOCKS_LINKS_DESCR'),
	"ICON" => "/images/icon.gif",
	"SORT" => 20,
	"CACHE_PATH" => "Y",
	"PATH" => array(
		"ID" => "other",
		"CHILD" => array(
			"ID" => "filter",
			"NAME" => GetMessage("CF_COMPONENT_PATH"),
			"SORT" => 20,
			"CHILD" => array(
				"ID" => "social_block_links",
			),
		),
	),	
);
?>