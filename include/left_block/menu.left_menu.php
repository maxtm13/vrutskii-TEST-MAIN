<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"left_vertical", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "podrazdel_faq",
		"COMPONENT_TEMPLATE" => "left_vertical",
		"DELAY" => "N",
		"MAX_LEVEL" => "3",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600000",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "N",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"MENU_THEME" => "site"
	),
	false,
	array(
		"HIDE_ICONS" => "N"
	)
);?>