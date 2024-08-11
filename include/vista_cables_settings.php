<?php
$tdatavista_cables = array();
$tdatavista_cables[".searchableFields"] = array();
$tdatavista_cables[".ShortName"] = "vista_cables";
$tdatavista_cables[".OwnerID"] = "";
$tdatavista_cables[".OriginalTable"] = "cables";


$tdatavista_cables[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatavista_cables[".originalPagesByType"] = $tdatavista_cables[".pagesByType"];
$tdatavista_cables[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatavista_cables[".originalPages"] = $tdatavista_cables[".pages"];
$tdatavista_cables[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatavista_cables[".originalDefaultPages"] = $tdatavista_cables[".defaultPages"];

//	field labels
$fieldLabelsvista_cables = array();
$fieldToolTipsvista_cables = array();
$pageTitlesvista_cables = array();
$placeHoldersvista_cables = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsvista_cables["Spanish"] = array();
	$fieldToolTipsvista_cables["Spanish"] = array();
	$placeHoldersvista_cables["Spanish"] = array();
	$pageTitlesvista_cables["Spanish"] = array();
	$fieldLabelsvista_cables["Spanish"]["cable"] = "Cable";
	$fieldToolTipsvista_cables["Spanish"]["cable"] = "";
	$placeHoldersvista_cables["Spanish"]["cable"] = "";
	$fieldLabelsvista_cables["Spanish"]["Localidad"] = "Localidad";
	$fieldToolTipsvista_cables["Spanish"]["Localidad"] = "";
	$placeHoldersvista_cables["Spanish"]["Localidad"] = "";
	$fieldLabelsvista_cables["Spanish"]["Cto"] = "Cto";
	$fieldToolTipsvista_cables["Spanish"]["Cto"] = "";
	$placeHoldersvista_cables["Spanish"]["Cto"] = "";
	$fieldLabelsvista_cables["Spanish"]["Latitud"] = "Latitud";
	$fieldToolTipsvista_cables["Spanish"]["Latitud"] = "";
	$placeHoldersvista_cables["Spanish"]["Latitud"] = "";
	$fieldLabelsvista_cables["Spanish"]["Longitud"] = "Longitud";
	$fieldToolTipsvista_cables["Spanish"]["Longitud"] = "";
	$placeHoldersvista_cables["Spanish"]["Longitud"] = "";
	$fieldLabelsvista_cables["Spanish"]["Spliter"] = "Spliter";
	$fieldToolTipsvista_cables["Spanish"]["Spliter"] = "";
	$placeHoldersvista_cables["Spanish"]["Spliter"] = "";
	$fieldLabelsvista_cables["Spanish"]["DisplayOnMap"] = "Display On Map";
	$fieldToolTipsvista_cables["Spanish"]["DisplayOnMap"] = "";
	$placeHoldersvista_cables["Spanish"]["DisplayOnMap"] = "";
	if (count($fieldToolTipsvista_cables["Spanish"]))
		$tdatavista_cables[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvista_cables["English"] = array();
	$fieldToolTipsvista_cables["English"] = array();
	$placeHoldersvista_cables["English"] = array();
	$pageTitlesvista_cables["English"] = array();
	$fieldLabelsvista_cables["English"]["DisplayOnMap"] = "Display On Map";
	$fieldToolTipsvista_cables["English"]["DisplayOnMap"] = "";
	$placeHoldersvista_cables["English"]["DisplayOnMap"] = "";
	$fieldLabelsvista_cables["English"]["cable"] = "Cable";
	$fieldToolTipsvista_cables["English"]["cable"] = "";
	$placeHoldersvista_cables["English"]["cable"] = "";
	$fieldLabelsvista_cables["English"]["Cto"] = "Cto";
	$fieldToolTipsvista_cables["English"]["Cto"] = "";
	$placeHoldersvista_cables["English"]["Cto"] = "";
	$fieldLabelsvista_cables["English"]["Latitud"] = "Latitud";
	$fieldToolTipsvista_cables["English"]["Latitud"] = "";
	$placeHoldersvista_cables["English"]["Latitud"] = "";
	$fieldLabelsvista_cables["English"]["Longitud"] = "Longitud";
	$fieldToolTipsvista_cables["English"]["Longitud"] = "";
	$placeHoldersvista_cables["English"]["Longitud"] = "";
	$fieldLabelsvista_cables["English"]["Localidad"] = "Localidad";
	$fieldToolTipsvista_cables["English"]["Localidad"] = "";
	$placeHoldersvista_cables["English"]["Localidad"] = "";
	$fieldLabelsvista_cables["English"]["Spliter"] = "Spliter";
	$fieldToolTipsvista_cables["English"]["Spliter"] = "";
	$placeHoldersvista_cables["English"]["Spliter"] = "";
	if (count($fieldToolTipsvista_cables["English"]))
		$tdatavista_cables[".isUseToolTips"] = true;
}


	$tdatavista_cables[".NCSearch"] = true;



$tdatavista_cables[".shortTableName"] = "vista_cables";
$tdatavista_cables[".nSecOptions"] = 0;

$tdatavista_cables[".mainTableOwnerID"] = "";
$tdatavista_cables[".entityType"] = 1;
$tdatavista_cables[".connId"] = "isp_eisa_at_localhost";


$tdatavista_cables[".strOriginalTableName"] = "cables";

	



$tdatavista_cables[".showAddInPopup"] = false;

$tdatavista_cables[".showEditInPopup"] = false;

$tdatavista_cables[".showViewInPopup"] = false;

$tdatavista_cables[".listAjax"] = false;
//	temporary
//$tdatavista_cables[".listAjax"] = false;

	$tdatavista_cables[".audit"] = false;

	$tdatavista_cables[".locking"] = false;


$pages = $tdatavista_cables[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavista_cables[".edit"] = true;
	$tdatavista_cables[".afterEditAction"] = 1;
	$tdatavista_cables[".closePopupAfterEdit"] = 1;
	$tdatavista_cables[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavista_cables[".add"] = true;
$tdatavista_cables[".afterAddAction"] = 1;
$tdatavista_cables[".closePopupAfterAdd"] = 1;
$tdatavista_cables[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavista_cables[".list"] = true;
}



$tdatavista_cables[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavista_cables[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavista_cables[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavista_cables[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavista_cables[".printFriendly"] = true;
}



$tdatavista_cables[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavista_cables[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavista_cables[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavista_cables[".isUseAjaxSuggest"] = true;





$tdatavista_cables[".ajaxCodeSnippetAdded"] = false;

$tdatavista_cables[".buttonsAdded"] = false;

$tdatavista_cables[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavista_cables[".isUseTimeForSearch"] = false;


$tdatavista_cables[".badgeColor"] = "6493ea";


$tdatavista_cables[".allSearchFields"] = array();
$tdatavista_cables[".filterFields"] = array();
$tdatavista_cables[".requiredSearchFields"] = array();

$tdatavista_cables[".googleLikeFields"] = array();
$tdatavista_cables[".googleLikeFields"][] = "cable";
$tdatavista_cables[".googleLikeFields"][] = "Cto";
$tdatavista_cables[".googleLikeFields"][] = "Latitud";
$tdatavista_cables[".googleLikeFields"][] = "Longitud";
$tdatavista_cables[".googleLikeFields"][] = "Localidad";
$tdatavista_cables[".googleLikeFields"][] = "Spliter";
$tdatavista_cables[".googleLikeFields"][] = "DisplayOnMap";



$tdatavista_cables[".tableType"] = "list";

$tdatavista_cables[".printerPageOrientation"] = 0;
$tdatavista_cables[".nPrinterPageScale"] = 100;

$tdatavista_cables[".nPrinterSplitRecords"] = 40;

$tdatavista_cables[".geocodingEnabled"] = false;










$tdatavista_cables[".pageSize"] = 15000;

$tdatavista_cables[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatavista_cables[".strOrderBy"] = $tstrOrderBy;

$tdatavista_cables[".orderindexes"] = array();


$tdatavista_cables[".sqlHead"] = "SELECT `cables`.`cable`,  `ctos`.`Cto`,  `ctos`.`Latitud`,  `ctos`.`Longitud`,  `ctos`.`Localidad`,  `ctos`.`Spliter`,  CONCAT(ctos.Cto, '\\n', ctos.Spliter, '\\n', cables.cable, '\\n', ctos.Localidad) AS `DisplayOnMap`";
$tdatavista_cables[".sqlFrom"] = "FROM `cables`  LEFT OUTER JOIN `ctos` ON `cables`.`cable` = `ctos`.`Cable` AND `cables`.`localidad` = `ctos`.`Localidad`";
$tdatavista_cables[".sqlWhereExpr"] = "";
$tdatavista_cables[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavista_cables[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavista_cables[".arrGroupsPerPage"] = $arrGPP;

$tdatavista_cables[".highlightSearchResults"] = true;

$tableKeysvista_cables = array();
$tableKeysvista_cables[] = "cable";
$tdatavista_cables[".Keys"] = $tableKeysvista_cables;


$tdatavista_cables[".hideMobileList"] = array();




//	cable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cable";
	$fdata["GoodName"] = "cable";
	$fdata["ownerTable"] = "cables";
	$fdata["Label"] = GetFieldLabel("vista_cables","cable");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cable";

		$fdata["sourceSingle"] = "cable";

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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

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


	$tdatavista_cables["cable"] = $fdata;
		$tdatavista_cables[".searchableFields"][] = "cable";
//	Cto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Cto";
	$fdata["GoodName"] = "Cto";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("vista_cables","Cto");
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


	$tdatavista_cables["Cto"] = $fdata;
		$tdatavista_cables[".searchableFields"][] = "Cto";
//	Latitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Latitud";
	$fdata["GoodName"] = "Latitud";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("vista_cables","Latitud");
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


	$tdatavista_cables["Latitud"] = $fdata;
		$tdatavista_cables[".searchableFields"][] = "Latitud";
//	Longitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Longitud";
	$fdata["GoodName"] = "Longitud";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("vista_cables","Longitud");
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


	$tdatavista_cables["Longitud"] = $fdata;
		$tdatavista_cables[".searchableFields"][] = "Longitud";
//	Localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Localidad";
	$fdata["GoodName"] = "Localidad";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("vista_cables","Localidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Localidad";

		$fdata["sourceSingle"] = "localidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ctos`.`Localidad`";

	
	
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
			$edata["EditParams"].= " maxlength=80";

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


	$tdatavista_cables["Localidad"] = $fdata;
		$tdatavista_cables[".searchableFields"][] = "Localidad";
//	Spliter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Spliter";
	$fdata["GoodName"] = "Spliter";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("vista_cables","Spliter");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Spliter";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ctos`.`Spliter`";

	
	
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


	$tdatavista_cables["Spliter"] = $fdata;
		$tdatavista_cables[".searchableFields"][] = "Spliter";
//	DisplayOnMap
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DisplayOnMap";
	$fdata["GoodName"] = "DisplayOnMap";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vista_cables","DisplayOnMap");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DisplayOnMap";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT(ctos.Cto, '\\n', ctos.Spliter, '\\n', cables.cable, '\\n', ctos.Localidad)";

	
	
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


	$tdatavista_cables["DisplayOnMap"] = $fdata;
		$tdatavista_cables[".searchableFields"][] = "DisplayOnMap";


$tables_data["vista_cables"]=&$tdatavista_cables;
$field_labels["vista_cables"] = &$fieldLabelsvista_cables;
$fieldToolTips["vista_cables"] = &$fieldToolTipsvista_cables;
$placeHolders["vista_cables"] = &$placeHoldersvista_cables;
$page_titles["vista_cables"] = &$pageTitlesvista_cables;


changeTextControlsToDate( "vista_cables" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["vista_cables"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["vista_cables"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="cables";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="cables";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "cables";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["vista_cables"][0] = $masterParams;
				$masterTablesData["vista_cables"][0]["masterKeys"] = array();
	$masterTablesData["vista_cables"][0]["masterKeys"][]="cable";
				$masterTablesData["vista_cables"][0]["masterKeys"][]="localidad";
				$masterTablesData["vista_cables"][0]["detailKeys"] = array();
	$masterTablesData["vista_cables"][0]["detailKeys"][]="cable";
				$masterTablesData["vista_cables"][0]["detailKeys"][]="Localidad";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vista_cables()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`cables`.`cable`,  `ctos`.`Cto`,  `ctos`.`Latitud`,  `ctos`.`Longitud`,  `ctos`.`Localidad`,  `ctos`.`Spliter`,  CONCAT(ctos.Cto, '\\n', ctos.Spliter, '\\n', cables.cable, '\\n', ctos.Localidad) AS `DisplayOnMap`";
$proto0["m_strFrom"] = "FROM `cables`  LEFT OUTER JOIN `ctos` ON `cables`.`cable` = `ctos`.`Cable` AND `cables`.`localidad` = `ctos`.`Localidad`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
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
	"m_strName" => "cable",
	"m_strTable" => "cables",
	"m_srcTableName" => "vista_cables"
));

$proto6["m_sql"] = "`cables`.`cable`";
$proto6["m_srcTableName"] = "vista_cables";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Cto",
	"m_strTable" => "ctos",
	"m_srcTableName" => "vista_cables"
));

$proto8["m_sql"] = "`ctos`.`Cto`";
$proto8["m_srcTableName"] = "vista_cables";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Latitud",
	"m_strTable" => "ctos",
	"m_srcTableName" => "vista_cables"
));

$proto10["m_sql"] = "`ctos`.`Latitud`";
$proto10["m_srcTableName"] = "vista_cables";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Longitud",
	"m_strTable" => "ctos",
	"m_srcTableName" => "vista_cables"
));

$proto12["m_sql"] = "`ctos`.`Longitud`";
$proto12["m_srcTableName"] = "vista_cables";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Localidad",
	"m_strTable" => "ctos",
	"m_srcTableName" => "vista_cables"
));

$proto14["m_sql"] = "`ctos`.`Localidad`";
$proto14["m_srcTableName"] = "vista_cables";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Spliter",
	"m_strTable" => "ctos",
	"m_srcTableName" => "vista_cables"
));

$proto16["m_sql"] = "`ctos`.`Spliter`";
$proto16["m_srcTableName"] = "vista_cables";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$proto19=array();
$proto19["m_functiontype"] = "SQLF_CUSTOM";
$proto19["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "ctos.Cto"
));

$proto19["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'\\n'"
));

$proto19["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ctos.Spliter"
));

$proto19["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'\\n'"
));

$proto19["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "cables.cable"
));

$proto19["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'\\n'"
));

$proto19["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ctos.Localidad"
));

$proto19["m_arguments"][]=$obj;
$proto19["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto19);

$proto18["m_sql"] = "CONCAT(ctos.Cto, '\\n', ctos.Spliter, '\\n', cables.cable, '\\n', ctos.Localidad)";
$proto18["m_srcTableName"] = "vista_cables";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "DisplayOnMap";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto27=array();
$proto27["m_link"] = "SQLL_MAIN";
			$proto28=array();
$proto28["m_strName"] = "cables";
$proto28["m_srcTableName"] = "vista_cables";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "id_cables";
$proto28["m_columns"][] = "cable";
$proto28["m_columns"][] = "localidad";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_sql"] = "`cables`";
$proto27["m_alias"] = "";
$proto27["m_srcTableName"] = "vista_cables";
$proto29=array();
$proto29["m_sql"] = "";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "";
$proto29["m_havingmode"] = false;
$proto29["m_inBrackets"] = false;
$proto29["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto29);

$proto27["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto27);

$proto0["m_fromlist"][]=$obj;
												$proto31=array();
$proto31["m_link"] = "SQLL_LEFTJOIN";
			$proto32=array();
$proto32["m_strName"] = "ctos";
$proto32["m_srcTableName"] = "vista_cables";
$proto32["m_columns"] = array();
$proto32["m_columns"][] = "id_Ctos";
$proto32["m_columns"][] = "Cto";
$proto32["m_columns"][] = "Latitud";
$proto32["m_columns"][] = "Longitud";
$proto32["m_columns"][] = "Spliter";
$proto32["m_columns"][] = "Cable";
$proto32["m_columns"][] = "Localidad";
$proto32["m_columns"][] = "Lat";
$proto32["m_columns"][] = "Lng";
$obj = new SQLTable($proto32);

$proto31["m_table"] = $obj;
$proto31["m_sql"] = "LEFT OUTER JOIN `ctos` ON `cables`.`cable` = `ctos`.`Cable` AND `cables`.`localidad` = `ctos`.`Localidad`";
$proto31["m_alias"] = "";
$proto31["m_srcTableName"] = "vista_cables";
$proto33=array();
$proto33["m_sql"] = "`ctos`.`Cable` = `cables`.`cable` AND `ctos`.`Localidad` = `cables`.`localidad`";
$proto33["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "`ctos`.`Cable` = `cables`.`cable` AND `ctos`.`Localidad` = `cables`.`localidad`"
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
						$proto35=array();
$proto35["m_sql"] = "`cables`.`cable` = `ctos`.`Cable`";
$proto35["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cable",
	"m_strTable" => "cables",
	"m_srcTableName" => "vista_cables"
));

$proto35["m_column"]=$obj;
$proto35["m_contained"] = array();
$proto35["m_strCase"] = "= `ctos`.`Cable`";
$proto35["m_havingmode"] = false;
$proto35["m_inBrackets"] = false;
$proto35["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto35);

			$proto33["m_contained"][]=$obj;
						$proto37=array();
$proto37["m_sql"] = "`cables`.`localidad` = `ctos`.`Localidad`";
$proto37["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "localidad",
	"m_strTable" => "cables",
	"m_srcTableName" => "vista_cables"
));

$proto37["m_column"]=$obj;
$proto37["m_contained"] = array();
$proto37["m_strCase"] = "= `ctos`.`Localidad`";
$proto37["m_havingmode"] = false;
$proto37["m_inBrackets"] = false;
$proto37["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto37);

			$proto33["m_contained"][]=$obj;
						$proto39=array();
$proto39["m_sql"] = "`ctos`.`Cable` = `cables`.`cable`";
$proto39["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Cable",
	"m_strTable" => "ctos",
	"m_srcTableName" => "vista_cables"
));

$proto39["m_column"]=$obj;
$proto39["m_contained"] = array();
$proto39["m_strCase"] = "= `cables`.`cable`";
$proto39["m_havingmode"] = false;
$proto39["m_inBrackets"] = false;
$proto39["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto39);

			$proto33["m_contained"][]=$obj;
						$proto41=array();
$proto41["m_sql"] = "`ctos`.`Localidad` = `cables`.`localidad`";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Localidad",
	"m_strTable" => "ctos",
	"m_srcTableName" => "vista_cables"
));

$proto41["m_column"]=$obj;
$proto41["m_contained"] = array();
$proto41["m_strCase"] = "= `cables`.`localidad`";
$proto41["m_havingmode"] = false;
$proto41["m_inBrackets"] = false;
$proto41["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto41);

			$proto33["m_contained"][]=$obj;
$proto33["m_strCase"] = "";
$proto33["m_havingmode"] = false;
$proto33["m_inBrackets"] = false;
$proto33["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto33);

$proto31["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto31);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="vista_cables";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vista_cables = createSqlQuery_vista_cables();


	
		;

							

$tdatavista_cables[".sqlquery"] = $queryData_vista_cables;



$tdatavista_cables[".hasEvents"] = false;

?>