<?php
$tdataspliters_view = array();
$tdataspliters_view[".searchableFields"] = array();
$tdataspliters_view[".ShortName"] = "spliters_view";
$tdataspliters_view[".OwnerID"] = "";
$tdataspliters_view[".OriginalTable"] = "spliters";


$tdataspliters_view[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataspliters_view[".originalPagesByType"] = $tdataspliters_view[".pagesByType"];
$tdataspliters_view[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataspliters_view[".originalPages"] = $tdataspliters_view[".pages"];
$tdataspliters_view[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataspliters_view[".originalDefaultPages"] = $tdataspliters_view[".defaultPages"];

//	field labels
$fieldLabelsspliters_view = array();
$fieldToolTipsspliters_view = array();
$pageTitlesspliters_view = array();
$placeHoldersspliters_view = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsspliters_view["Spanish"] = array();
	$fieldToolTipsspliters_view["Spanish"] = array();
	$placeHoldersspliters_view["Spanish"] = array();
	$pageTitlesspliters_view["Spanish"] = array();
	$fieldLabelsspliters_view["Spanish"]["spliter"] = "Spliter";
	$fieldToolTipsspliters_view["Spanish"]["spliter"] = "";
	$placeHoldersspliters_view["Spanish"]["spliter"] = "";
	$fieldLabelsspliters_view["Spanish"]["cable"] = "Cable";
	$fieldToolTipsspliters_view["Spanish"]["cable"] = "";
	$placeHoldersspliters_view["Spanish"]["cable"] = "";
	$fieldLabelsspliters_view["Spanish"]["localidad"] = "Localidad";
	$fieldToolTipsspliters_view["Spanish"]["localidad"] = "";
	$placeHoldersspliters_view["Spanish"]["localidad"] = "";
	$fieldLabelsspliters_view["Spanish"]["Cto"] = "Cto";
	$fieldToolTipsspliters_view["Spanish"]["Cto"] = "";
	$placeHoldersspliters_view["Spanish"]["Cto"] = "";
	$fieldLabelsspliters_view["Spanish"]["Latitud"] = "Latitud";
	$fieldToolTipsspliters_view["Spanish"]["Latitud"] = "";
	$placeHoldersspliters_view["Spanish"]["Latitud"] = "";
	$fieldLabelsspliters_view["Spanish"]["Longitud"] = "Longitud";
	$fieldToolTipsspliters_view["Spanish"]["Longitud"] = "";
	$placeHoldersspliters_view["Spanish"]["Longitud"] = "";
	$fieldLabelsspliters_view["Spanish"]["DisplayOnMap"] = "Display On Map";
	$fieldToolTipsspliters_view["Spanish"]["DisplayOnMap"] = "";
	$placeHoldersspliters_view["Spanish"]["DisplayOnMap"] = "";
	if (count($fieldToolTipsspliters_view["Spanish"]))
		$tdataspliters_view[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsspliters_view["English"] = array();
	$fieldToolTipsspliters_view["English"] = array();
	$placeHoldersspliters_view["English"] = array();
	$pageTitlesspliters_view["English"] = array();
	$fieldLabelsspliters_view["English"]["DisplayOnMap"] = "Display On Map";
	$fieldToolTipsspliters_view["English"]["DisplayOnMap"] = "";
	$placeHoldersspliters_view["English"]["DisplayOnMap"] = "";
	$fieldLabelsspliters_view["English"]["spliter"] = "Spliter";
	$fieldToolTipsspliters_view["English"]["spliter"] = "";
	$placeHoldersspliters_view["English"]["spliter"] = "";
	$fieldLabelsspliters_view["English"]["cable"] = "Cable";
	$fieldToolTipsspliters_view["English"]["cable"] = "";
	$placeHoldersspliters_view["English"]["cable"] = "";
	$fieldLabelsspliters_view["English"]["localidad"] = "Localidad";
	$fieldToolTipsspliters_view["English"]["localidad"] = "";
	$placeHoldersspliters_view["English"]["localidad"] = "";
	$fieldLabelsspliters_view["English"]["Cto"] = "Cto";
	$fieldToolTipsspliters_view["English"]["Cto"] = "";
	$placeHoldersspliters_view["English"]["Cto"] = "";
	$fieldLabelsspliters_view["English"]["Latitud"] = "Latitud";
	$fieldToolTipsspliters_view["English"]["Latitud"] = "";
	$placeHoldersspliters_view["English"]["Latitud"] = "";
	$fieldLabelsspliters_view["English"]["Longitud"] = "Longitud";
	$fieldToolTipsspliters_view["English"]["Longitud"] = "";
	$placeHoldersspliters_view["English"]["Longitud"] = "";
	if (count($fieldToolTipsspliters_view["English"]))
		$tdataspliters_view[".isUseToolTips"] = true;
}


	$tdataspliters_view[".NCSearch"] = true;



$tdataspliters_view[".shortTableName"] = "spliters_view";
$tdataspliters_view[".nSecOptions"] = 0;

$tdataspliters_view[".mainTableOwnerID"] = "";
$tdataspliters_view[".entityType"] = 1;
$tdataspliters_view[".connId"] = "isp_eisa_at_localhost";


$tdataspliters_view[".strOriginalTableName"] = "spliters";

	



$tdataspliters_view[".showAddInPopup"] = false;

$tdataspliters_view[".showEditInPopup"] = false;

$tdataspliters_view[".showViewInPopup"] = false;

$tdataspliters_view[".listAjax"] = false;
//	temporary
//$tdataspliters_view[".listAjax"] = false;

	$tdataspliters_view[".audit"] = false;

	$tdataspliters_view[".locking"] = false;


$pages = $tdataspliters_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataspliters_view[".edit"] = true;
	$tdataspliters_view[".afterEditAction"] = 1;
	$tdataspliters_view[".closePopupAfterEdit"] = 1;
	$tdataspliters_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataspliters_view[".add"] = true;
$tdataspliters_view[".afterAddAction"] = 1;
$tdataspliters_view[".closePopupAfterAdd"] = 1;
$tdataspliters_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataspliters_view[".list"] = true;
}



$tdataspliters_view[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataspliters_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataspliters_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataspliters_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataspliters_view[".printFriendly"] = true;
}



$tdataspliters_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataspliters_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataspliters_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataspliters_view[".isUseAjaxSuggest"] = true;





$tdataspliters_view[".ajaxCodeSnippetAdded"] = false;

$tdataspliters_view[".buttonsAdded"] = false;

$tdataspliters_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdataspliters_view[".isUseTimeForSearch"] = false;


$tdataspliters_view[".badgeColor"] = "CFAE83";


$tdataspliters_view[".allSearchFields"] = array();
$tdataspliters_view[".filterFields"] = array();
$tdataspliters_view[".requiredSearchFields"] = array();

$tdataspliters_view[".googleLikeFields"] = array();
$tdataspliters_view[".googleLikeFields"][] = "spliter";
$tdataspliters_view[".googleLikeFields"][] = "cable";
$tdataspliters_view[".googleLikeFields"][] = "localidad";
$tdataspliters_view[".googleLikeFields"][] = "Cto";
$tdataspliters_view[".googleLikeFields"][] = "Latitud";
$tdataspliters_view[".googleLikeFields"][] = "Longitud";
$tdataspliters_view[".googleLikeFields"][] = "DisplayOnMap";



$tdataspliters_view[".tableType"] = "list";

$tdataspliters_view[".printerPageOrientation"] = 0;
$tdataspliters_view[".nPrinterPageScale"] = 100;

$tdataspliters_view[".nPrinterSplitRecords"] = 40;

$tdataspliters_view[".geocodingEnabled"] = false;










$tdataspliters_view[".pageSize"] = 15000;

$tdataspliters_view[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataspliters_view[".strOrderBy"] = $tstrOrderBy;

$tdataspliters_view[".orderindexes"] = array();


$tdataspliters_view[".sqlHead"] = "SELECT `s`.`spliter`,  `s`.`cable`,  `s`.`localidad`,  `c`.`Cto`,  `c`.`Latitud`,  `c`.`Longitud`,  CONCAT(c.Cto, '\\n', c.Spliter, '\\n', s.cable, '\\n', c.Localidad) AS `DisplayOnMap`";
$tdataspliters_view[".sqlFrom"] = "FROM `spliters` AS `s`  INNER JOIN `ctos` AS `c` ON `s`.`spliter` = `c`.`Spliter` AND `s`.`cable` = `c`.`Cable` AND `s`.`localidad` = `c`.`Localidad`";
$tdataspliters_view[".sqlWhereExpr"] = "";
$tdataspliters_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataspliters_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataspliters_view[".arrGroupsPerPage"] = $arrGPP;

$tdataspliters_view[".highlightSearchResults"] = true;

$tableKeysspliters_view = array();
$tdataspliters_view[".Keys"] = $tableKeysspliters_view;


$tdataspliters_view[".hideMobileList"] = array();




//	spliter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "spliter";
	$fdata["GoodName"] = "spliter";
	$fdata["ownerTable"] = "spliters";
	$fdata["Label"] = GetFieldLabel("spliters_view","spliter");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "spliter";

		$fdata["sourceSingle"] = "spliter";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`s`.`spliter`";

	
	
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


	$tdataspliters_view["spliter"] = $fdata;
		$tdataspliters_view[".searchableFields"][] = "spliter";
//	cable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cable";
	$fdata["GoodName"] = "cable";
	$fdata["ownerTable"] = "spliters";
	$fdata["Label"] = GetFieldLabel("spliters_view","cable");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cable";

		$fdata["sourceSingle"] = "cable";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`s`.`cable`";

	
	
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


	$tdataspliters_view["cable"] = $fdata;
		$tdataspliters_view[".searchableFields"][] = "cable";
//	localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "localidad";
	$fdata["GoodName"] = "localidad";
	$fdata["ownerTable"] = "spliters";
	$fdata["Label"] = GetFieldLabel("spliters_view","localidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "localidad";

		$fdata["sourceSingle"] = "localidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`s`.`localidad`";

	
	
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


	$tdataspliters_view["localidad"] = $fdata;
		$tdataspliters_view[".searchableFields"][] = "localidad";
//	Cto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Cto";
	$fdata["GoodName"] = "Cto";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("spliters_view","Cto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Cto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`c`.`Cto`";

	
	
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


	$tdataspliters_view["Cto"] = $fdata;
		$tdataspliters_view[".searchableFields"][] = "Cto";
//	Latitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Latitud";
	$fdata["GoodName"] = "Latitud";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("spliters_view","Latitud");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Latitud";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`c`.`Latitud`";

	
	
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


	$tdataspliters_view["Latitud"] = $fdata;
		$tdataspliters_view[".searchableFields"][] = "Latitud";
//	Longitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Longitud";
	$fdata["GoodName"] = "Longitud";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("spliters_view","Longitud");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Longitud";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`c`.`Longitud`";

	
	
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


	$tdataspliters_view["Longitud"] = $fdata;
		$tdataspliters_view[".searchableFields"][] = "Longitud";
//	DisplayOnMap
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DisplayOnMap";
	$fdata["GoodName"] = "DisplayOnMap";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("spliters_view","DisplayOnMap");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DisplayOnMap";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT(c.Cto, '\\n', c.Spliter, '\\n', s.cable, '\\n', c.Localidad)";

	
	
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


	$tdataspliters_view["DisplayOnMap"] = $fdata;
		$tdataspliters_view[".searchableFields"][] = "DisplayOnMap";


$tables_data["spliters_view"]=&$tdataspliters_view;
$field_labels["spliters_view"] = &$fieldLabelsspliters_view;
$fieldToolTips["spliters_view"] = &$fieldToolTipsspliters_view;
$placeHolders["spliters_view"] = &$placeHoldersspliters_view;
$page_titles["spliters_view"] = &$pageTitlesspliters_view;


changeTextControlsToDate( "spliters_view" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["spliters_view"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["spliters_view"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_spliters_view()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`s`.`spliter`,  `s`.`cable`,  `s`.`localidad`,  `c`.`Cto`,  `c`.`Latitud`,  `c`.`Longitud`,  CONCAT(c.Cto, '\\n', c.Spliter, '\\n', s.cable, '\\n', c.Localidad) AS `DisplayOnMap`";
$proto0["m_strFrom"] = "FROM `spliters` AS `s`  INNER JOIN `ctos` AS `c` ON `s`.`spliter` = `c`.`Spliter` AND `s`.`cable` = `c`.`Cable` AND `s`.`localidad` = `c`.`Localidad`";
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
	"m_strName" => "spliter",
	"m_strTable" => "s",
	"m_srcTableName" => "spliters_view"
));

$proto6["m_sql"] = "`s`.`spliter`";
$proto6["m_srcTableName"] = "spliters_view";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cable",
	"m_strTable" => "s",
	"m_srcTableName" => "spliters_view"
));

$proto8["m_sql"] = "`s`.`cable`";
$proto8["m_srcTableName"] = "spliters_view";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "localidad",
	"m_strTable" => "s",
	"m_srcTableName" => "spliters_view"
));

$proto10["m_sql"] = "`s`.`localidad`";
$proto10["m_srcTableName"] = "spliters_view";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Cto",
	"m_strTable" => "c",
	"m_srcTableName" => "spliters_view"
));

$proto12["m_sql"] = "`c`.`Cto`";
$proto12["m_srcTableName"] = "spliters_view";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Latitud",
	"m_strTable" => "c",
	"m_srcTableName" => "spliters_view"
));

$proto14["m_sql"] = "`c`.`Latitud`";
$proto14["m_srcTableName"] = "spliters_view";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Longitud",
	"m_strTable" => "c",
	"m_srcTableName" => "spliters_view"
));

$proto16["m_sql"] = "`c`.`Longitud`";
$proto16["m_srcTableName"] = "spliters_view";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$proto19=array();
$proto19["m_functiontype"] = "SQLF_CUSTOM";
$proto19["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "c.Cto"
));

$proto19["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'\\n'"
));

$proto19["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "c.Spliter"
));

$proto19["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'\\n'"
));

$proto19["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "s.cable"
));

$proto19["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'\\n'"
));

$proto19["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "c.Localidad"
));

$proto19["m_arguments"][]=$obj;
$proto19["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto19);

$proto18["m_sql"] = "CONCAT(c.Cto, '\\n', c.Spliter, '\\n', s.cable, '\\n', c.Localidad)";
$proto18["m_srcTableName"] = "spliters_view";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "DisplayOnMap";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto27=array();
$proto27["m_link"] = "SQLL_MAIN";
			$proto28=array();
$proto28["m_strName"] = "spliters";
$proto28["m_srcTableName"] = "spliters_view";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "id_spliters";
$proto28["m_columns"][] = "spliter";
$proto28["m_columns"][] = "cable";
$proto28["m_columns"][] = "localidad";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_sql"] = "`spliters` AS `s`";
$proto27["m_alias"] = "s";
$proto27["m_srcTableName"] = "spliters_view";
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
$proto31["m_link"] = "SQLL_INNERJOIN";
			$proto32=array();
$proto32["m_strName"] = "ctos";
$proto32["m_srcTableName"] = "spliters_view";
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
$proto31["m_sql"] = "INNER JOIN `ctos` AS `c` ON `s`.`spliter` = `c`.`Spliter` AND `s`.`cable` = `c`.`Cable` AND `s`.`localidad` = `c`.`Localidad`";
$proto31["m_alias"] = "c";
$proto31["m_srcTableName"] = "spliters_view";
$proto33=array();
$proto33["m_sql"] = "`c`.`Spliter` = `s`.`spliter` AND `c`.`Cable` = `s`.`cable` AND `c`.`Localidad` = `s`.`localidad`";
$proto33["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "`c`.`Spliter` = `s`.`spliter` AND `c`.`Cable` = `s`.`cable` AND `c`.`Localidad` = `s`.`localidad`"
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
						$proto35=array();
$proto35["m_sql"] = "`s`.`spliter` = `c`.`Spliter`";
$proto35["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "spliter",
	"m_strTable" => "s",
	"m_srcTableName" => "spliters_view"
));

$proto35["m_column"]=$obj;
$proto35["m_contained"] = array();
$proto35["m_strCase"] = "= `c`.`Spliter`";
$proto35["m_havingmode"] = false;
$proto35["m_inBrackets"] = false;
$proto35["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto35);

			$proto33["m_contained"][]=$obj;
						$proto37=array();
$proto37["m_sql"] = "`s`.`cable` = `c`.`Cable`";
$proto37["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cable",
	"m_strTable" => "s",
	"m_srcTableName" => "spliters_view"
));

$proto37["m_column"]=$obj;
$proto37["m_contained"] = array();
$proto37["m_strCase"] = "= `c`.`Cable`";
$proto37["m_havingmode"] = false;
$proto37["m_inBrackets"] = false;
$proto37["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto37);

			$proto33["m_contained"][]=$obj;
						$proto39=array();
$proto39["m_sql"] = "`s`.`localidad` = `c`.`Localidad`";
$proto39["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "localidad",
	"m_strTable" => "s",
	"m_srcTableName" => "spliters_view"
));

$proto39["m_column"]=$obj;
$proto39["m_contained"] = array();
$proto39["m_strCase"] = "= `c`.`Localidad`";
$proto39["m_havingmode"] = false;
$proto39["m_inBrackets"] = false;
$proto39["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto39);

			$proto33["m_contained"][]=$obj;
						$proto41=array();
$proto41["m_sql"] = "`c`.`Spliter` = `s`.`spliter`";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Spliter",
	"m_strTable" => "c",
	"m_srcTableName" => "spliters_view"
));

$proto41["m_column"]=$obj;
$proto41["m_contained"] = array();
$proto41["m_strCase"] = "= `s`.`spliter`";
$proto41["m_havingmode"] = false;
$proto41["m_inBrackets"] = false;
$proto41["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto41);

			$proto33["m_contained"][]=$obj;
						$proto43=array();
$proto43["m_sql"] = "`c`.`Cable` = `s`.`cable`";
$proto43["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Cable",
	"m_strTable" => "c",
	"m_srcTableName" => "spliters_view"
));

$proto43["m_column"]=$obj;
$proto43["m_contained"] = array();
$proto43["m_strCase"] = "= `s`.`cable`";
$proto43["m_havingmode"] = false;
$proto43["m_inBrackets"] = false;
$proto43["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto43);

			$proto33["m_contained"][]=$obj;
						$proto45=array();
$proto45["m_sql"] = "`c`.`Localidad` = `s`.`localidad`";
$proto45["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Localidad",
	"m_strTable" => "c",
	"m_srcTableName" => "spliters_view"
));

$proto45["m_column"]=$obj;
$proto45["m_contained"] = array();
$proto45["m_strCase"] = "= `s`.`localidad`";
$proto45["m_havingmode"] = false;
$proto45["m_inBrackets"] = false;
$proto45["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto45);

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
$proto0["m_srcTableName"]="spliters_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_spliters_view = createSqlQuery_spliters_view();


	
		;

							

$tdataspliters_view[".sqlquery"] = $queryData_spliters_view;



$tdataspliters_view[".hasEvents"] = false;

?>