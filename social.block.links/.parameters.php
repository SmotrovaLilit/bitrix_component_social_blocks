<? use Bitrix\Main\Localization\Loc;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

Loc::loadMessages(__FILE__);

$arComponentParameters = array(
	"PARAMETERS" => array(
		"YOUTUBE_LINK" => Array(
			"NAME" => Loc::getMessage("YOUTUBE_LINK"),
			"TYPE"=>"STRING",
			"DEFAULT"=>"",
			"PARENT" => "BASE",
		),
		"FB_LINK" => Array(
			"NAME" => Loc::getMessage("FB_LINK"),
			"TYPE"=>"STRING",
			"DEFAULT"=>"",
			"PARENT" => "BASE",
		),
		"VK_LINK" => Array(
			"NAME" => Loc::getMessage("VK_LINK"),
			"TYPE"=>"STRING",
			"DEFAULT"=>"",
			"PARENT" => "BASE",
		),
		"INSTAGRAM_LINK" => Array(
			"NAME" => Loc::getMessage("INSTAGRAM_LINK"),
			"TYPE"=>"STRING",
			"DEFAULT"=>"",
			"PARENT" => "BASE",
		),
	),
);
?>