<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("MENU_ONLY_LEFT", "Y");
$APPLICATION->SetTitle("Услуги");
?>

<?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"services-new", 
	array(
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BIG_GALLERY_PROP_CODE" => "PHOTOS",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMMENTS_COUNT" => "5",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_BLOCKS_ALL_ORDER" => "order_form,desc,char,tizers,reviews,big_gallery,video,services,sale,projects,news,articles,docs,staff,faq,partners,vacancy,goods,dops,comments",
		"DETAIL_BLOCKS_ORDER" => "tabs,big_gallery,tizers,order_form,sale,staff,projects,news,goods,articles,partners,vacancy,comments,tariffs,services",
		"DETAIL_BLOCKS_TAB_ORDER" => "desc,char,video,docs,faq,reviews,buy,payment,delivery,dops",
		"DETAIL_BLOG_EMAIL_NOTIFY" => "N",
		"DETAIL_BLOG_TITLE" => "Комментарии",
		"DETAIL_BLOG_URL" => "catalog_comments",
		"DETAIL_BLOG_USE" => "Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FB_APP_ID" => "APP_ID",
		"DETAIL_FB_TITLE" => "Facebook",
		"DETAIL_FB_USE" => "Y",
		"DETAIL_FIELD_CODE" => array(
			0 => "PREVIEW_TEXT",
			1 => "PREVIEW_PICTURE",
			2 => "DETAIL_TEXT",
			3 => "DETAIL_PICTURE",
			4 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "PRICE_CURRENCY",
			1 => "FORM_ORDER",
			2 => "PRICE",
			3 => "FORM_QUESTION",
			4 => "PRICEOLD",
			5 => "ECONOMY",
			6 => "PHOTOPOS",
			7 => "VIDEO_IFRAME",
			8 => "VIDEO",
			9 => "LINK_FAQ",
			10 => "LINK_VACANCY",
			11 => "LINK_NEWS",
			12 => "LINK_PARTNERS",
			13 => "LINK_ARTICLES",
			14 => "LINK_TIZERS",
			15 => "LINK_SERVICES",
			16 => "LINK_GOODS_FILTER",
			17 => "LINK_GOODS",
			18 => "LINK_STAFF",
			19 => "LINK_PROJECTS",
			20 => "LINK_REVIEWS",
			21 => "LINK_SALE",
			22 => "LINK_TARIF",
			23 => "_OUR_PROC",
			24 => "TEST",
			25 => "TITLE_PROC",
			26 => "TEXT_PROC",
			27 => "AUTHOR_CONTROL",
			28 => "PROP2",
			29 => "DISEGHNER_AT_PLACE",
			30 => "FOR_SHOW_1",
			31 => "FOR_SHOW_5",
			32 => "MATERIAL_PICK",
			33 => "FOR_SHOW_2",
			34 => "FOR_SHOW_3",
			35 => "FOR_SHOW_4",
			36 => "FOR_SHOW_6",
			37 => "TYPE_OF_BUILD",
			38 => "LINK_STUDY",
			39 => "FOR_SHOW_7",
			40 => "FOR_SHOW_8",
			41 => "DOCUMENTS",
			42 => "PHOTOS",
			43 => "STATUS",
			44 => "ARTICLE",
			45 => "DATE_COUNTER",
			46 => "LINK_SKU",
			47 => "DEPTH",
			48 => "GRUZ_STRELI",
			49 => "GRUZ",
			50 => "DLINA_STRELI",
			51 => "VOLUME",
			52 => "RECOMMEND",
			53 => "SPEED",
			54 => "WIDTH_PROHOD",
			55 => "WIDTH_PROEZD",
			56 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DETAIL_USE_COMMENTS" => "N",
		"DETAIL_USE_TAGS" => "N",
		"DETAIL_VK_API_ID" => "API_ID",
		"DETAIL_VK_TITLE" => "ВКонтакте",
		"DETAIL_VK_USE" => "Y",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"DOCS_PROP_CODE" => "-",
		"ELEMENT_TYPE_VIEW" => "element_1",
		"FILE_404" => "",
		"FORM_ID_ORDER_SERVISE" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "42",
		"IBLOCK_TYPE" => "aspro_allcorp3_content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "ID",
			1 => "NAME",
			2 => "PREVIEW_PICTURE",
			3 => "DETAIL_PICTURE",
			4 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "FORM_ORDER",
			1 => "PRICE",
			2 => "PRICEOLD",
			3 => "ECONOMY",
			4 => "FILTER_PRICE",
			5 => "AUTHOR_CONTROL",
			6 => "DISEGHNER_AT_PLACE",
			7 => "FOR_SHOW_5",
			8 => "MATERIAL_PICK",
			9 => "FOR_SHOW_4",
			10 => "FOR_SHOW_6",
			11 => "for_show_1",
			12 => "for_show_2",
			13 => "for_show_3",
			14 => "ICON",
			15 => "TRANSPARENT_PICTURE",
			16 => "",
		),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "main",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTIES_DISPLAY_TYPE" => "BLOCK",
		"SECTIONS_TYPE_VIEW" => "FROM_MODULE",
		"SECTION_ELEMENTS_TYPE_VIEW" => "FROM_MODULE",
		"SECTION_TYPE_VIEW" => "section_1",
		"SEF_FOLDER" => "/services/",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_404" => "Y",
		"SHOW_BIG_GALLERY" => "Y",
		"SHOW_BUY" => "N",
		"SHOW_CATEGORY" => "N",
		"SHOW_CHILD_ELEMENTS" => "N",
		"SHOW_CHILD_SECTIONS" => "Y",
		"SHOW_DELIVERY" => "N",
		"SHOW_DETAIL_LINK" => "Y",
		"SHOW_DOPS" => "Y",
		"SHOW_ELEMENTS_IN_LAST_SECTION" => "N",
		"SHOW_PAYMENT" => "N",
		"SHOW_SECTION" => "Y",
		"SHOW_SECTION_DESCRIPTION" => "Y",
		"SHOW_SECTION_PREVIEW_DESCRIPTION" => "Y",
		"SKU_IBLOCK_ID" => "21",
		"SKU_PROPERTY_CODE" => array(
			0 => "FORM_ORDER",
			1 => "STATUS",
			2 => "ARTICLE",
			3 => "PRICE_CURRENCY",
			4 => "PRICE",
			5 => "PRICEOLD",
			6 => "ECONOMY",
			7 => "COLOR",
			8 => "GOST",
			9 => "DLINA",
			10 => "VYLET_STRELY",
			11 => "MARK_STEEL",
			12 => "WIDTH",
		),
		"SKU_SORT_FIELD" => "sort",
		"SKU_SORT_FIELD2" => "name",
		"SKU_SORT_ORDER" => "asc",
		"SKU_SORT_ORDER2" => "asc",
		"SKU_TREE_PROPS" => array(
			0 => "COLOR",
			1 => "DIAMETER",
			2 => "DLINA",
			3 => "VYLET_STRELY",
			4 => "THICKNESS_STEEL",
			5 => "WIDTH",
		),
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"S_ASK_QUESTION" => "",
		"S_ORDER_SERVISE" => "",
		"TYPE_BIG_GALLERY" => "SMALL",
		"T_ARTICLES" => "Наши эксперты об автоматицзации бизнеса",
		"T_BIG_GALLERY" => "галереяяяяя",
		"T_CHAR" => "Наш процесс",
		"T_COMMENTS" => "comm",
		"T_DESC" => "Об услуге",
		"T_DOCS" => "Нормативная база",
		"T_DOPS" => "Отрасли",
		"T_FAQ" => "",
		"T_GOODS" => "",
		"T_NEWS" => "",
		"T_PARTNERS" => "",
		"T_PROJECTS" => "",
		"T_REVIEWS" => "",
		"T_SALE" => "",
		"T_SERVICES" => "Вам так же могут быть интересны другие услуги",
		"T_STAFF" => "",
		"T_TARIFFS" => "Пакеты",
		"T_VACANCY" => "",
		"T_VIDEO" => "",
		"USE_CATEGORIES" => "N",
		"USE_DETAIL_TABS" => "FROM_MODULE",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "Y",
		"COMPONENT_TEMPLATE" => "services-new",
		"VIEW_TYPE" => "list",
		"SHOW_TABS" => "Y",
		"SHOW_SECTION_NAME" => "N",
		"SHOW_ASK_QUESTION_BLOCK" => "Y",
		"ELEMENTS_ITEMS_OFFSET" => "Y",
		"ELEMENTS_COUNT" => "3",
		"SECTION_ITEMS_OFFSET" => "Y",
		"SECTION_IMAGES" => "ROUND_PICTURES",
		"SECTION_IMAGE_POSITION" => "RIGHT",
		"SECTION_ELEMENTS_COUNT" => "2",
		"ELEMENTS_IMAGES" => "ROUND_PICTURES",
		"ELEMENTS_IMAGE_POSITION" => "RIGHT",
		"IMAGE_POSITION" => "left",
		"TEMPLATE_THEME" => "blue",
		"MEDIA_PROPERTY" => "",
		"SLIDER_PROPERTY" => "",
		"LIST_USE_SHARE" => "N",
		"SHARE_TEMPLATE" => "",
		"SHARE_HANDLERS" => array(
			0 => "lj",
			1 => "facebook",
			2 => "vk",
			3 => "delicious",
			4 => "twitter",
			5 => "mailru",
		),
		"SHARE_SHORTEN_URL_LOGIN" => "",
		"SHARE_SHORTEN_URL_KEY" => "",
		"COUNT_IN_LINE" => "3",
		"MAP_TYPE" => "YANDEX",
		"TAKE_FILTER_FROM" => "FROM_MODULE",
		"TYPE_HEAD_BLOCK" => "FROM_MODULE",
		"T_MAP" => "",
		"TOP_GALLERY_PROP_CODE" => "PHOTOS",
		"VISIBLE_PROP_COUNT" => "6",
		"CHOOSE_REGION_TEXT" => "",
		"CHANGE_TEXT_AND_CARDS" => "Y",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "#SECTION_CODE_PATH#/",
			"detail" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
		)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>