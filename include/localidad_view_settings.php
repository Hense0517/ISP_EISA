<?php
$tdatalocalidad_view = array();
$tdatalocalidad_view[".searchableFields"] = array();
$tdatalocalidad_view[".ShortName"] = "localidad_view";
$tdatalocalidad_view[".OwnerID"] = "";
$tdatalocalidad_view[".OriginalTable"] = "localidad";


$tdatalocalidad_view[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatalocalidad_view[".originalPagesByType"] = $tdatalocalidad_view[".pagesByType"];
$tdatalocalidad_view[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatalocalidad_view[".originalPages"] = $tdatalocalidad_view[".pages"];
$tdatalocalidad_view[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatalocalidad_view[".originalDefaultPages"] = $tdatalocalidad_view[".defaultPages"];

//	field labels
$fieldLabelslocalidad_view = array();
$fieldToolTipslocalidad_view = array();
$pageTitleslocalidad_view = array();
$placeHolderslocalidad_view = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelslocalidad_view["Spanish"] = array();
	$fieldToolTipslocalidad_view["Spanish"] = array();
	$placeHolderslocalidad_view["Spanish"] = array();
	$pageTitleslocalidad_view["Spanish"] = array();
	$fieldLabelslocalidad_view["Spanish"]["Localidad"] = "Localidad";
	$fieldToolTipslocalidad_view["Spanish"]["Localidad"] = "";
	$placeHolderslocalidad_view["Spanish"]["Localidad"] = "";
	$fieldLabelslocalidad_view["Spanish"]["cable"] = "Cable";
	$fieldToolTipslocalidad_view["Spanish"]["cable"] = "";
	$placeHolderslocalidad_view["Spanish"]["cable"] = "";
	$fieldLabelslocalidad_view["Spanish"]["spliter"] = "Spliter";
	$fieldToolTipslocalidad_view["Spanish"]["spliter"] = "";
	$placeHolderslocalidad_view["Spanish"]["spliter"] = "";
	$fieldLabelslocalidad_view["Spanish"]["Cto"] = "Cto";
	$fieldToolTipslocalidad_view["Spanish"]["Cto"] = "";
	$placeHolderslocalidad_view["Spanish"]["Cto"] = "";
	$fieldLabelslocalidad_view["Spanish"]["Latitud"] = "Latitud";
	$fieldToolTipslocalidad_view["Spanish"]["Latitud"] = "";
	$placeHolderslocalidad_view["Spanish"]["Latitud"] = "";
	$fieldLabelslocalidad_view["Spanish"]["Longitud"] = "Longitud";
	$fieldToolTipslocalidad_view["Spanish"]["Longitud"] = "";
	$placeHolderslocalidad_view["Spanish"]["Longitud"] = "";
	$fieldLabelslocalidad_view["Spanish"]["DisplayOnMap"] = "Display On Map";
	$fieldToolTipslocalidad_view["Spanish"]["DisplayOnMap"] = "";
	$placeHolderslocalidad_view["Spanish"]["DisplayOnMap"] = "";
	$fieldLabelslocalidad_view["Spanish"]["id_localidad"] = "Id Localidad";
	$fieldToolTipslocalidad_view["Spanish"]["id_localidad"] = "";
	$placeHolderslocalidad_view["Spanish"]["id_localidad"] = "";
	$fieldLabelslocalidad_view["Spanish"]["id_cables"] = "Id Cables";
	$fieldToolTipslocalidad_view["Spanish"]["id_cables"] = "";
	$placeHolderslocalidad_view["Spanish"]["id_cables"] = "";
	$fieldLabelslocalidad_view["Spanish"]["id_spliters"] = "Id Spliters";
	$fieldToolTipslocalidad_view["Spanish"]["id_spliters"] = "";
	$placeHolderslocalidad_view["Spanish"]["id_spliters"] = "";
	$fieldLabelslocalidad_view["Spanish"]["id_Ctos"] = "Id Ctos";
	$fieldToolTipslocalidad_view["Spanish"]["id_Ctos"] = "";
	$placeHolderslocalidad_view["Spanish"]["id_Ctos"] = "";
	if (count($fieldToolTipslocalidad_view["Spanish"]))
		$tdatalocalidad_view[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslocalidad_view["English"] = array();
	$fieldToolTipslocalidad_view["English"] = array();
	$placeHolderslocalidad_view["English"] = array();
	$pageTitleslocalidad_view["English"] = array();
	$fieldLabelslocalidad_view["English"]["DisplayOnMap"] = "Display On Map";
	$fieldToolTipslocalidad_view["English"]["DisplayOnMap"] = "";
	$placeHolderslocalidad_view["English"]["DisplayOnMap"] = "";
	$fieldLabelslocalidad_view["English"]["id_localidad"] = "Id Localidad";
	$fieldToolTipslocalidad_view["English"]["id_localidad"] = "";
	$placeHolderslocalidad_view["English"]["id_localidad"] = "";
	$fieldLabelslocalidad_view["English"]["id_cables"] = "Id Cables";
	$fieldToolTipslocalidad_view["English"]["id_cables"] = "";
	$placeHolderslocalidad_view["English"]["id_cables"] = "";
	$fieldLabelslocalidad_view["English"]["id_spliters"] = "Id Spliters";
	$fieldToolTipslocalidad_view["English"]["id_spliters"] = "";
	$placeHolderslocalidad_view["English"]["id_spliters"] = "";
	$fieldLabelslocalidad_view["English"]["id_Ctos"] = "Id Ctos";
	$fieldToolTipslocalidad_view["English"]["id_Ctos"] = "";
	$placeHolderslocalidad_view["English"]["id_Ctos"] = "";
	$fieldLabelslocalidad_view["English"]["Localidad"] = "Localidad";
	$fieldToolTipslocalidad_view["English"]["Localidad"] = "";
	$placeHolderslocalidad_view["English"]["Localidad"] = "";
	$fieldLabelslocalidad_view["English"]["cable"] = "Cable";
	$fieldToolTipslocalidad_view["English"]["cable"] = "";
	$placeHolderslocalidad_view["English"]["cable"] = "";
	$fieldLabelslocalidad_view["English"]["spliter"] = "Spliter";
	$fieldToolTipslocalidad_view["English"]["spliter"] = "";
	$placeHolderslocalidad_view["English"]["spliter"] = "";
	$fieldLabelslocalidad_view["English"]["Cto"] = "Cto";
	$fieldToolTipslocalidad_view["English"]["Cto"] = "";
	$placeHolderslocalidad_view["English"]["Cto"] = "";
	$fieldLabelslocalidad_view["English"]["Latitud"] = "Latitud";
	$fieldToolTipslocalidad_view["English"]["Latitud"] = "";
	$placeHolderslocalidad_view["English"]["Latitud"] = "";
	$fieldLabelslocalidad_view["English"]["Longitud"] = "Longitud";
	$fieldToolTipslocalidad_view["English"]["Longitud"] = "";
	$placeHolderslocalidad_view["English"]["Longitud"] = "";
	if (count($fieldToolTipslocalidad_view["English"]))
		$tdatalocalidad_view[".isUseToolTips"] = true;
}


	$tdatalocalidad_view[".NCSearch"] = true;



$tdatalocalidad_view[".shortTableName"] = "localidad_view";
$tdatalocalidad_view[".nSecOptions"] = 0;

$tdatalocalidad_view[".mainTableOwnerID"] = "";
$tdatalocalidad_view[".entityType"] = 1;
$tdatalocalidad_view[".connId"] = "isp_eisa_at_localhost";


$tdatalocalidad_view[".strOriginalTableName"] = "localidad";

	



$tdatalocalidad_view[".showAddInPopup"] = false;

$tdatalocalidad_view[".showEditInPopup"] = false;

$tdatalocalidad_view[".showViewInPopup"] = false;

$tdatalocalidad_view[".listAjax"] = false;
//	temporary
//$tdatalocalidad_view[".listAjax"] = false;

	$tdatalocalidad_view[".audit"] = false;

	$tdatalocalidad_view[".locking"] = false;


$pages = $tdatalocalidad_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalocalidad_view[".edit"] = true;
	$tdatalocalidad_view[".afterEditAction"] = 1;
	$tdatalocalidad_view[".closePopupAfterEdit"] = 1;
	$tdatalocalidad_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalocalidad_view[".add"] = true;
$tdatalocalidad_view[".afterAddAction"] = 1;
$tdatalocalidad_view[".closePopupAfterAdd"] = 1;
$tdatalocalidad_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalocalidad_view[".list"] = true;
}



$tdatalocalidad_view[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalocalidad_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalocalidad_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalocalidad_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalocalidad_view[".printFriendly"] = true;
}



$tdatalocalidad_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalocalidad_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalocalidad_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalocalidad_view[".isUseAjaxSuggest"] = true;





$tdatalocalidad_view[".ajaxCodeSnippetAdded"] = false;

$tdatalocalidad_view[".buttonsAdded"] = false;

$tdatalocalidad_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalocalidad_view[".isUseTimeForSearch"] = false;


$tdatalocalidad_view[".badgeColor"] = "9ACD32";


$tdatalocalidad_view[".allSearchFields"] = array();
$tdatalocalidad_view[".filterFields"] = array();
$tdatalocalidad_view[".requiredSearchFields"] = array();

$tdatalocalidad_view[".googleLikeFields"] = array();
$tdatalocalidad_view[".googleLikeFields"][] = "Localidad";
$tdatalocalidad_view[".googleLikeFields"][] = "cable";
$tdatalocalidad_view[".googleLikeFields"][] = "spliter";
$tdatalocalidad_view[".googleLikeFields"][] = "Cto";
$tdatalocalidad_view[".googleLikeFields"][] = "Latitud";
$tdatalocalidad_view[".googleLikeFields"][] = "Longitud";
$tdatalocalidad_view[".googleLikeFields"][] = "DisplayOnMap";
$tdatalocalidad_view[".googleLikeFields"][] = "id_localidad";
$tdatalocalidad_view[".googleLikeFields"][] = "id_cables";
$tdatalocalidad_view[".googleLikeFields"][] = "id_spliters";
$tdatalocalidad_view[".googleLikeFields"][] = "id_Ctos";



$tdatalocalidad_view[".tableType"] = "list";

$tdatalocalidad_view[".printerPageOrientation"] = 0;
$tdatalocalidad_view[".nPrinterPageScale"] = 100;

$tdatalocalidad_view[".nPrinterSplitRecords"] = 40;

$tdatalocalidad_view[".geocodingEnabled"] = false;










$tdatalocalidad_view[".pageSize"] = 20;

$tdatalocalidad_view[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `localidad`.`id_localidad`, `cables`.`id_cables`, `spliters`.`id_spliters`, `ctos`.`id_Ctos`";
$tdatalocalidad_view[".strOrderBy"] = $tstrOrderBy;

$tdatalocalidad_view[".orderindexes"] = array();
	$tdatalocalidad_view[".orderindexes"][] = array(8, (1 ? "ASC" : "DESC"), "`localidad`.`id_localidad`");

	$tdatalocalidad_view[".orderindexes"][] = array(9, (1 ? "ASC" : "DESC"), "`cables`.`id_cables`");

	$tdatalocalidad_view[".orderindexes"][] = array(10, (1 ? "ASC" : "DESC"), "`spliters`.`id_spliters`");

	$tdatalocalidad_view[".orderindexes"][] = array(11, (1 ? "ASC" : "DESC"), "`ctos`.`id_Ctos`");



$tdatalocalidad_view[".sqlHead"] = "SELECT `localidad`.`Localidad`,  `cables`.`cable`,  `spliters`.`spliter`,  `ctos`.`Cto`,  `ctos`.`Latitud`,  `ctos`.`Longitud`,  CONCAT(`ctos`.`Cto`, '\\n', `spliters`.`spliter`, '\\n', `cables`.`cable`, '\\n', `localidad`.`Localidad`) AS `DisplayOnMap`,  `localidad`.`id_localidad`,  `cables`.`id_cables`,  `spliters`.`id_spliters`,  `ctos`.`id_Ctos`";
$tdatalocalidad_view[".sqlFrom"] = "FROM `localidad`  INNER JOIN `cables` ON `localidad`.`Localidad` = `cables`.`localidad`  INNER JOIN `spliters` ON `cables`.`cable` = `spliters`.`cable` AND `cables`.`localidad` = `spliters`.`localidad`  INNER JOIN `ctos` ON `spliters`.`spliter` = `ctos`.`Spliter` AND `spliters`.`cable` = `ctos`.`Cable` AND `spliters`.`localidad` = `ctos`.`Localidad`";
$tdatalocalidad_view[".sqlWhereExpr"] = "";
$tdatalocalidad_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalocalidad_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalocalidad_view[".arrGroupsPerPage"] = $arrGPP;

$tdatalocalidad_view[".highlightSearchResults"] = true;

$tableKeyslocalidad_view = array();
$tableKeyslocalidad_view[] = "Localidad";
$tdatalocalidad_view[".Keys"] = $tableKeyslocalidad_view;


$tdatalocalidad_view[".hideMobileList"] = array();




//	Localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Localidad";
	$fdata["GoodName"] = "Localidad";
	$fdata["ownerTable"] = "localidad";
	$fdata["Label"] = GetFieldLabel("localidad_view","Localidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Localidad";

		$fdata["sourceSingle"] = "Localidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`localidad`.`Localidad`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "localidad";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Localidad";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Localidad";

	

	
	$edata["LookupOrderBy"] = "id_localidad";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalocalidad_view["Localidad"] = $fdata;
		$tdatalocalidad_view[".searchableFields"][] = "Localidad";
//	cable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cable";
	$fdata["GoodName"] = "cable";
	$fdata["ownerTable"] = "cables";
	$fdata["Label"] = GetFieldLabel("localidad_view","cable");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cable";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`cables`.`cable`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cables";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "cable";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "cable";

	

	
	$edata["LookupOrderBy"] = "id_cables";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalocalidad_view["cable"] = $fdata;
		$tdatalocalidad_view[".searchableFields"][] = "cable";
//	spliter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "spliter";
	$fdata["GoodName"] = "spliter";
	$fdata["ownerTable"] = "spliters";
	$fdata["Label"] = GetFieldLabel("localidad_view","spliter");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "spliter";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`spliters`.`spliter`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "spliters";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "spliter";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "spliter";

	

	
	$edata["LookupOrderBy"] = "id_spliters";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalocalidad_view["spliter"] = $fdata;
		$tdatalocalidad_view[".searchableFields"][] = "spliter";
//	Cto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Cto";
	$fdata["GoodName"] = "Cto";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("localidad_view","Cto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Cto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ctos`.`Cto`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "ctos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Cto";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Cto";

	

	
	$edata["LookupOrderBy"] = "id_Ctos";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalocalidad_view["Cto"] = $fdata;
		$tdatalocalidad_view[".searchableFields"][] = "Cto";
//	Latitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Latitud";
	$fdata["GoodName"] = "Latitud";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("localidad_view","Latitud");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Latitud";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ctos`.`Latitud`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalocalidad_view["Latitud"] = $fdata;
		$tdatalocalidad_view[".searchableFields"][] = "Latitud";
//	Longitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Longitud";
	$fdata["GoodName"] = "Longitud";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("localidad_view","Longitud");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Longitud";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ctos`.`Longitud`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalocalidad_view["Longitud"] = $fdata;
		$tdatalocalidad_view[".searchableFields"][] = "Longitud";
//	DisplayOnMap
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DisplayOnMap";
	$fdata["GoodName"] = "DisplayOnMap";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("localidad_view","DisplayOnMap");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DisplayOnMap";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT(`ctos`.`Cto`, '\\n', `spliters`.`spliter`, '\\n', `cables`.`cable`, '\\n', `localidad`.`Localidad`)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalocalidad_view["DisplayOnMap"] = $fdata;
		$tdatalocalidad_view[".searchableFields"][] = "DisplayOnMap";
//	id_localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "id_localidad";
	$fdata["GoodName"] = "id_localidad";
	$fdata["ownerTable"] = "localidad";
	$fdata["Label"] = GetFieldLabel("localidad_view","id_localidad");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_localidad";

		$fdata["sourceSingle"] = "id_localidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`localidad`.`id_localidad`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalocalidad_view["id_localidad"] = $fdata;
		$tdatalocalidad_view[".searchableFields"][] = "id_localidad";
//	id_cables
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "id_cables";
	$fdata["GoodName"] = "id_cables";
	$fdata["ownerTable"] = "cables";
	$fdata["Label"] = GetFieldLabel("localidad_view","id_cables");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_cables";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`cables`.`id_cables`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalocalidad_view["id_cables"] = $fdata;
		$tdatalocalidad_view[".searchableFields"][] = "id_cables";
//	id_spliters
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "id_spliters";
	$fdata["GoodName"] = "id_spliters";
	$fdata["ownerTable"] = "spliters";
	$fdata["Label"] = GetFieldLabel("localidad_view","id_spliters");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_spliters";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`spliters`.`id_spliters`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalocalidad_view["id_spliters"] = $fdata;
		$tdatalocalidad_view[".searchableFields"][] = "id_spliters";
//	id_Ctos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "id_Ctos";
	$fdata["GoodName"] = "id_Ctos";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("localidad_view","id_Ctos");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_Ctos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ctos`.`id_Ctos`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalocalidad_view["id_Ctos"] = $fdata;
		$tdatalocalidad_view[".searchableFields"][] = "id_Ctos";


$tables_data["localidad_view"]=&$tdatalocalidad_view;
$field_labels["localidad_view"] = &$fieldLabelslocalidad_view;
$fieldToolTips["localidad_view"] = &$fieldToolTipslocalidad_view;
$placeHolders["localidad_view"] = &$placeHolderslocalidad_view;
$page_titles["localidad_view"] = &$pageTitleslocalidad_view;


changeTextControlsToDate( "localidad_view" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["localidad_view"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["localidad_view"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_localidad_view()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`localidad`.`Localidad`,  `cables`.`cable`,  `spliters`.`spliter`,  `ctos`.`Cto`,  `ctos`.`Latitud`,  `ctos`.`Longitud`,  CONCAT(`ctos`.`Cto`, '\\n', `spliters`.`spliter`, '\\n', `cables`.`cable`, '\\n', `localidad`.`Localidad`) AS `DisplayOnMap`,  `localidad`.`id_localidad`,  `cables`.`id_cables`,  `spliters`.`id_spliters`,  `ctos`.`id_Ctos`";
$proto0["m_strFrom"] = "FROM `localidad`  INNER JOIN `cables` ON `localidad`.`Localidad` = `cables`.`localidad`  INNER JOIN `spliters` ON `cables`.`cable` = `spliters`.`cable` AND `cables`.`localidad` = `spliters`.`localidad`  INNER JOIN `ctos` ON `spliters`.`spliter` = `ctos`.`Spliter` AND `spliters`.`cable` = `ctos`.`Cable` AND `spliters`.`localidad` = `ctos`.`Localidad`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `localidad`.`id_localidad`, `cables`.`id_cables`, `spliters`.`id_spliters`, `ctos`.`id_Ctos`";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "Localidad",
	"m_strTable" => "localidad",
	"m_srcTableName" => "localidad_view"
));

$proto6["m_sql"] = "`localidad`.`Localidad`";
$proto6["m_srcTableName"] = "localidad_view";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cable",
	"m_strTable" => "cables",
	"m_srcTableName" => "localidad_view"
));

$proto8["m_sql"] = "`cables`.`cable`";
$proto8["m_srcTableName"] = "localidad_view";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "spliter",
	"m_strTable" => "spliters",
	"m_srcTableName" => "localidad_view"
));

$proto10["m_sql"] = "`spliters`.`spliter`";
$proto10["m_srcTableName"] = "localidad_view";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Cto",
	"m_strTable" => "ctos",
	"m_srcTableName" => "localidad_view"
));

$proto12["m_sql"] = "`ctos`.`Cto`";
$proto12["m_srcTableName"] = "localidad_view";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Latitud",
	"m_strTable" => "ctos",
	"m_srcTableName" => "localidad_view"
));

$proto14["m_sql"] = "`ctos`.`Latitud`";
$proto14["m_srcTableName"] = "localidad_view";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Longitud",
	"m_strTable" => "ctos",
	"m_srcTableName" => "localidad_view"
));

$proto16["m_sql"] = "`ctos`.`Longitud`";
$proto16["m_srcTableName"] = "localidad_view";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$proto19=array();
$proto19["m_functiontype"] = "SQLF_CUSTOM";
$proto19["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "`ctos`.`Cto`"
));

$proto19["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'\\n'"
));

$proto19["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "`spliters`.`spliter`"
));

$proto19["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'\\n'"
));

$proto19["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "`cables`.`cable`"
));

$proto19["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'\\n'"
));

$proto19["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "`localidad`.`Localidad`"
));

$proto19["m_arguments"][]=$obj;
$proto19["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto19);

$proto18["m_sql"] = "CONCAT(`ctos`.`Cto`, '\\n', `spliters`.`spliter`, '\\n', `cables`.`cable`, '\\n', `localidad`.`Localidad`)";
$proto18["m_srcTableName"] = "localidad_view";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "DisplayOnMap";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "id_localidad",
	"m_strTable" => "localidad",
	"m_srcTableName" => "localidad_view"
));

$proto27["m_sql"] = "`localidad`.`id_localidad`";
$proto27["m_srcTableName"] = "localidad_view";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cables",
	"m_strTable" => "cables",
	"m_srcTableName" => "localidad_view"
));

$proto29["m_sql"] = "`cables`.`id_cables`";
$proto29["m_srcTableName"] = "localidad_view";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "id_spliters",
	"m_strTable" => "spliters",
	"m_srcTableName" => "localidad_view"
));

$proto31["m_sql"] = "`spliters`.`id_spliters`";
$proto31["m_srcTableName"] = "localidad_view";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "id_Ctos",
	"m_strTable" => "ctos",
	"m_srcTableName" => "localidad_view"
));

$proto33["m_sql"] = "`ctos`.`id_Ctos`";
$proto33["m_srcTableName"] = "localidad_view";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto35=array();
$proto35["m_link"] = "SQLL_MAIN";
			$proto36=array();
$proto36["m_strName"] = "localidad";
$proto36["m_srcTableName"] = "localidad_view";
$proto36["m_columns"] = array();
$proto36["m_columns"][] = "id_localidad";
$proto36["m_columns"][] = "Localidad";
$obj = new SQLTable($proto36);

$proto35["m_table"] = $obj;
$proto35["m_sql"] = "`localidad`";
$proto35["m_alias"] = "";
$proto35["m_srcTableName"] = "localidad_view";
$proto37=array();
$proto37["m_sql"] = "";
$proto37["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto37["m_column"]=$obj;
$proto37["m_contained"] = array();
$proto37["m_strCase"] = "";
$proto37["m_havingmode"] = false;
$proto37["m_inBrackets"] = false;
$proto37["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto37);

$proto35["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto35);

$proto0["m_fromlist"][]=$obj;
												$proto39=array();
$proto39["m_link"] = "SQLL_INNERJOIN";
			$proto40=array();
$proto40["m_strName"] = "cables";
$proto40["m_srcTableName"] = "localidad_view";
$proto40["m_columns"] = array();
$proto40["m_columns"][] = "id_cables";
$proto40["m_columns"][] = "cable";
$proto40["m_columns"][] = "localidad";
$proto40["m_columns"][] = "id_localidad";
$obj = new SQLTable($proto40);

$proto39["m_table"] = $obj;
$proto39["m_sql"] = "INNER JOIN `cables` ON `localidad`.`Localidad` = `cables`.`localidad`";
$proto39["m_alias"] = "";
$proto39["m_srcTableName"] = "localidad_view";
$proto41=array();
$proto41["m_sql"] = "`cables`.`localidad` = `localidad`.`Localidad`";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "localidad",
	"m_strTable" => "cables",
	"m_srcTableName" => "localidad_view"
));

$proto41["m_column"]=$obj;
$proto41["m_contained"] = array();
$proto41["m_strCase"] = "= `localidad`.`Localidad`";
$proto41["m_havingmode"] = false;
$proto41["m_inBrackets"] = false;
$proto41["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto41);

$proto39["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto39);

$proto0["m_fromlist"][]=$obj;
												$proto43=array();
$proto43["m_link"] = "SQLL_INNERJOIN";
			$proto44=array();
$proto44["m_strName"] = "spliters";
$proto44["m_srcTableName"] = "localidad_view";
$proto44["m_columns"] = array();
$proto44["m_columns"][] = "id_spliters";
$proto44["m_columns"][] = "spliter";
$proto44["m_columns"][] = "cable";
$proto44["m_columns"][] = "localidad";
$proto44["m_columns"][] = "id_cable";
$obj = new SQLTable($proto44);

$proto43["m_table"] = $obj;
$proto43["m_sql"] = "INNER JOIN `spliters` ON `cables`.`cable` = `spliters`.`cable` AND `cables`.`localidad` = `spliters`.`localidad`";
$proto43["m_alias"] = "";
$proto43["m_srcTableName"] = "localidad_view";
$proto45=array();
$proto45["m_sql"] = "`spliters`.`cable` = `cables`.`cable` AND `spliters`.`localidad` = `cables`.`localidad`";
$proto45["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "`spliters`.`cable` = `cables`.`cable` AND `spliters`.`localidad` = `cables`.`localidad`"
));

$proto45["m_column"]=$obj;
$proto45["m_contained"] = array();
						$proto47=array();
$proto47["m_sql"] = "`cables`.`cable` = `spliters`.`cable`";
$proto47["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cable",
	"m_strTable" => "cables",
	"m_srcTableName" => "localidad_view"
));

$proto47["m_column"]=$obj;
$proto47["m_contained"] = array();
$proto47["m_strCase"] = "= `spliters`.`cable`";
$proto47["m_havingmode"] = false;
$proto47["m_inBrackets"] = false;
$proto47["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto47);

			$proto45["m_contained"][]=$obj;
						$proto49=array();
$proto49["m_sql"] = "`cables`.`localidad` = `spliters`.`localidad`";
$proto49["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "localidad",
	"m_strTable" => "cables",
	"m_srcTableName" => "localidad_view"
));

$proto49["m_column"]=$obj;
$proto49["m_contained"] = array();
$proto49["m_strCase"] = "= `spliters`.`localidad`";
$proto49["m_havingmode"] = false;
$proto49["m_inBrackets"] = false;
$proto49["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto49);

			$proto45["m_contained"][]=$obj;
						$proto51=array();
$proto51["m_sql"] = "`spliters`.`cable` = `cables`.`cable`";
$proto51["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cable",
	"m_strTable" => "spliters",
	"m_srcTableName" => "localidad_view"
));

$proto51["m_column"]=$obj;
$proto51["m_contained"] = array();
$proto51["m_strCase"] = "= `cables`.`cable`";
$proto51["m_havingmode"] = false;
$proto51["m_inBrackets"] = false;
$proto51["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto51);

			$proto45["m_contained"][]=$obj;
						$proto53=array();
$proto53["m_sql"] = "`spliters`.`localidad` = `cables`.`localidad`";
$proto53["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "localidad",
	"m_strTable" => "spliters",
	"m_srcTableName" => "localidad_view"
));

$proto53["m_column"]=$obj;
$proto53["m_contained"] = array();
$proto53["m_strCase"] = "= `cables`.`localidad`";
$proto53["m_havingmode"] = false;
$proto53["m_inBrackets"] = false;
$proto53["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto53);

			$proto45["m_contained"][]=$obj;
$proto45["m_strCase"] = "";
$proto45["m_havingmode"] = false;
$proto45["m_inBrackets"] = false;
$proto45["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto45);

$proto43["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto43);

$proto0["m_fromlist"][]=$obj;
												$proto55=array();
$proto55["m_link"] = "SQLL_INNERJOIN";
			$proto56=array();
$proto56["m_strName"] = "ctos";
$proto56["m_srcTableName"] = "localidad_view";
$proto56["m_columns"] = array();
$proto56["m_columns"][] = "id_Ctos";
$proto56["m_columns"][] = "Cto";
$proto56["m_columns"][] = "Latitud";
$proto56["m_columns"][] = "Longitud";
$proto56["m_columns"][] = "Spliter";
$proto56["m_columns"][] = "Cable";
$proto56["m_columns"][] = "Localidad";
$proto56["m_columns"][] = "Lat";
$proto56["m_columns"][] = "Lng";
$proto56["m_columns"][] = "Ubicacion";
$proto56["m_columns"][] = "id_spliter";
$obj = new SQLTable($proto56);

$proto55["m_table"] = $obj;
$proto55["m_sql"] = "INNER JOIN `ctos` ON `spliters`.`spliter` = `ctos`.`Spliter` AND `spliters`.`cable` = `ctos`.`Cable` AND `spliters`.`localidad` = `ctos`.`Localidad`";
$proto55["m_alias"] = "";
$proto55["m_srcTableName"] = "localidad_view";
$proto57=array();
$proto57["m_sql"] = "`ctos`.`Spliter` = `spliters`.`spliter` AND `ctos`.`Cable` = `spliters`.`cable` AND `ctos`.`Localidad` = `spliters`.`localidad`";
$proto57["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "`ctos`.`Spliter` = `spliters`.`spliter` AND `ctos`.`Cable` = `spliters`.`cable` AND `ctos`.`Localidad` = `spliters`.`localidad`"
));

$proto57["m_column"]=$obj;
$proto57["m_contained"] = array();
						$proto59=array();
$proto59["m_sql"] = "`spliters`.`spliter` = `ctos`.`Spliter`";
$proto59["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "spliter",
	"m_strTable" => "spliters",
	"m_srcTableName" => "localidad_view"
));

$proto59["m_column"]=$obj;
$proto59["m_contained"] = array();
$proto59["m_strCase"] = "= `ctos`.`Spliter`";
$proto59["m_havingmode"] = false;
$proto59["m_inBrackets"] = false;
$proto59["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto59);

			$proto57["m_contained"][]=$obj;
						$proto61=array();
$proto61["m_sql"] = "`spliters`.`cable` = `ctos`.`Cable`";
$proto61["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cable",
	"m_strTable" => "spliters",
	"m_srcTableName" => "localidad_view"
));

$proto61["m_column"]=$obj;
$proto61["m_contained"] = array();
$proto61["m_strCase"] = "= `ctos`.`Cable`";
$proto61["m_havingmode"] = false;
$proto61["m_inBrackets"] = false;
$proto61["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto61);

			$proto57["m_contained"][]=$obj;
						$proto63=array();
$proto63["m_sql"] = "`spliters`.`localidad` = `ctos`.`Localidad`";
$proto63["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "localidad",
	"m_strTable" => "spliters",
	"m_srcTableName" => "localidad_view"
));

$proto63["m_column"]=$obj;
$proto63["m_contained"] = array();
$proto63["m_strCase"] = "= `ctos`.`Localidad`";
$proto63["m_havingmode"] = false;
$proto63["m_inBrackets"] = false;
$proto63["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto63);

			$proto57["m_contained"][]=$obj;
						$proto65=array();
$proto65["m_sql"] = "`ctos`.`Spliter` = `spliters`.`spliter`";
$proto65["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Spliter",
	"m_strTable" => "ctos",
	"m_srcTableName" => "localidad_view"
));

$proto65["m_column"]=$obj;
$proto65["m_contained"] = array();
$proto65["m_strCase"] = "= `spliters`.`spliter`";
$proto65["m_havingmode"] = false;
$proto65["m_inBrackets"] = false;
$proto65["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto65);

			$proto57["m_contained"][]=$obj;
						$proto67=array();
$proto67["m_sql"] = "`ctos`.`Cable` = `spliters`.`cable`";
$proto67["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Cable",
	"m_strTable" => "ctos",
	"m_srcTableName" => "localidad_view"
));

$proto67["m_column"]=$obj;
$proto67["m_contained"] = array();
$proto67["m_strCase"] = "= `spliters`.`cable`";
$proto67["m_havingmode"] = false;
$proto67["m_inBrackets"] = false;
$proto67["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto67);

			$proto57["m_contained"][]=$obj;
						$proto69=array();
$proto69["m_sql"] = "`ctos`.`Localidad` = `spliters`.`localidad`";
$proto69["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Localidad",
	"m_strTable" => "ctos",
	"m_srcTableName" => "localidad_view"
));

$proto69["m_column"]=$obj;
$proto69["m_contained"] = array();
$proto69["m_strCase"] = "= `spliters`.`localidad`";
$proto69["m_havingmode"] = false;
$proto69["m_inBrackets"] = false;
$proto69["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto69);

			$proto57["m_contained"][]=$obj;
$proto57["m_strCase"] = "";
$proto57["m_havingmode"] = false;
$proto57["m_inBrackets"] = false;
$proto57["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto57);

$proto55["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto55);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto71=array();
						$obj = new SQLField(array(
	"m_strName" => "id_localidad",
	"m_strTable" => "localidad",
	"m_srcTableName" => "localidad_view"
));

$proto71["m_column"]=$obj;
$proto71["m_bAsc"] = 1;
$proto71["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto71);

$proto0["m_orderby"][]=$obj;					
												$proto73=array();
						$obj = new SQLField(array(
	"m_strName" => "id_cables",
	"m_strTable" => "cables",
	"m_srcTableName" => "localidad_view"
));

$proto73["m_column"]=$obj;
$proto73["m_bAsc"] = 1;
$proto73["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto73);

$proto0["m_orderby"][]=$obj;					
												$proto75=array();
						$obj = new SQLField(array(
	"m_strName" => "id_spliters",
	"m_strTable" => "spliters",
	"m_srcTableName" => "localidad_view"
));

$proto75["m_column"]=$obj;
$proto75["m_bAsc"] = 1;
$proto75["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto75);

$proto0["m_orderby"][]=$obj;					
												$proto77=array();
						$obj = new SQLField(array(
	"m_strName" => "id_Ctos",
	"m_strTable" => "ctos",
	"m_srcTableName" => "localidad_view"
));

$proto77["m_column"]=$obj;
$proto77["m_bAsc"] = 1;
$proto77["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto77);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="localidad_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_localidad_view = createSqlQuery_localidad_view();


	
		;

											

$tdatalocalidad_view[".sqlquery"] = $queryData_localidad_view;



$tdatalocalidad_view[".hasEvents"] = false;

?>