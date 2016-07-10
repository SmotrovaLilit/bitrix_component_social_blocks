# README #
Компонент для вставки кнопок соц сетей(ссылок на группы)

### Пример использования ###


```
#!php

$APPLICATION->IncludeComponent(
	"ws:social.block.links",
	"",
	array(
		"YOUTUBE_LINK" => "https://www.youtube.com/user/FMXRUSH",
		"FB_LINK" => "https://www.facebook.com/adrush.energy",
		"VK_LINK" => "https://vk.com/adrush",
		"INSTAGRAM_LINK" => "https://www.instagram.com/ad_rush/",
	),
	false
); 
```