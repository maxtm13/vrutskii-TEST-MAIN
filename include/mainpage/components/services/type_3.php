<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$indexPageOptions = $GLOBALS['arTheme']['INDEX_TYPE']['SUB_PARAMS'][$GLOBALS['arTheme']['INDEX_TYPE']['VALUE']];
$blockOptions = $indexPageOptions['SERVICES'];
$blockTemplateOptions = $blockOptions['TEMPLATE']['LIST'][$blockOptions['TEMPLATE']['VALUE']];
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"services-list", 
	array(
		"IBLOCK_TYPE" => "aspro_allcorp3_content",
		"IBLOCK_ID" => "42",
		"NEWS_COUNT" => "3",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "arFrontFilter",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "PRICE",
			1 => "PRICEOLD",
			2 => "ECONOMY",
			3 => "DISEGHNER_AT_PLACE",
			4 => "FOR_SHOW_5",
			5 => "MATERIAL_PICK",
			6 => "FOR_SHOW_4",
			7 => "FOR_SHOW_6",
			8 => "for_show_1",
			9 => "for_show_2",
			10 => "for_show_3",
			11 => "ICON",
			12 => "LINK_FAQ",
			13 => "TRANSPARENT_PICTURE",
			14 => "",
		),
		"CHECK_DATES" => "Y",
		"SHOW_SECTION" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600000",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "N",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "j F Y",
		"SET_TITLE" => "N",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "N",
		"PAGER_TEMPLATE" => "ajax",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "3600000",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"COMPONENT_TEMPLATE" => "services-list",
		"SET_LAST_MODIFIED" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"SHOW_DETAIL_LINK" => "Y",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"SHOW_DATE" => "Y",
		"COUNT_IN_LINE" => "4",
		"ROW_VIEW" => true,
		"BORDER" => false,
		"ITEM_HOVER_SHADOW" => false,
		"DARK_HOVER" => false,
		"ROUNDED" => false,
		"ROUNDED_IMAGE" => false,
		"ELEMENTS_ROW" => "1",
		"MAXWIDTH_WRAP" => true,
		"MOBILE_SCROLLED" => true,
		"NARROW" => $blockTemplateOptions["ADDITIONAL_OPTIONS"]["WIDE"]["VALUE"]!="Y",
		"ITEMS_OFFSET" => false,
		"IMAGES" => "PICTURES",
		"IMAGE_POSITION" => $blockTemplateOptions["ADDITIONAL_OPTIONS"]["IMAGE_POSITION"]["VALUE"],
		"STICKY_IMAGES" => "Y",
		"ITEMS_TYPE" => "ELEMENTS",
		"SHOW_PREVIEW" => true,
		"HIDE_PAGINATION" => "N",
		"HIDE_LEFT_TEXT_BLOCK" => "Y",
		"SHOW_CHILD_SECTIONS" => "Y",
		"SHOW_CHILD_ELEMENTS" => "Y",
		"SHOW_ELEMENTS_IN_LAST_SECTION" => "N",
		"SHOW_TITLE" => $blockOptions["INDEX_BLOCK_OPTIONS"]["BOTTOM"]["SHOW_TITLE"]["VALUE"]=="Y",
		"TITLE_POSITION" => $blockOptions["INDEX_BLOCK_OPTIONS"]["BOTTOM"]["TITLE_POSITION"]["VALUE"],
		"TITLE" => "Услуги",
		"RIGHT_TITLE" => "Все услуги",
		"RIGHT_LINK" => "services/",
		"CHECK_REQUEST_BLOCK" => CAllcorp3::checkRequestBlock("services"),
		"IS_AJAX" => CAllcorp3::checkAjaxRequest(),
		"NAME_SIZE" => "28",
		"SUBTITLE" => "Помогаем развивать бизнес",
		"SHOW_PREVIEW_TEXT" => "Y",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);?>