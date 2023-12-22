<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>


<?$APPLICATION->IncludeComponent("vrutskii:main.profile", "", Array(
	"COMPONENT_TEMPLATE" => ".default",
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"USER_PROPERTY" => array(	// Показывать доп. свойства
			0 => "UF_PASSPORT_NUMBER",
		),
		"SEND_INFO" => "N",	// Генерировать почтовое событие
		"CHECK_RIGHTS" => "N",	// Проверять права доступа
		"USER_PROPERTY_NAME" => "",	// Название закладки с доп. свойствами
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>