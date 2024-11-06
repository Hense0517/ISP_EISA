<?php
$tdataconsultar_clientes_por_puerto_olt = array();
$tdataconsultar_clientes_por_puerto_olt[".searchableFields"] = array();
$tdataconsultar_clientes_por_puerto_olt[".ShortName"] = "consultar_clientes_por_puerto_olt";
$tdataconsultar_clientes_por_puerto_olt[".OwnerID"] = "";
$tdataconsultar_clientes_por_puerto_olt[".OriginalTable"] = "puertos_olt";


$tdataconsultar_clientes_por_puerto_olt[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataconsultar_clientes_por_puerto_olt[".originalPagesByType"] = $tdataconsultar_clientes_por_puerto_olt[".pagesByType"];
$tdataconsultar_clientes_por_puerto_olt[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataconsultar_clientes_por_puerto_olt[".originalPages"] = $tdataconsultar_clientes_por_puerto_olt[".pages"];
$tdataconsultar_clientes_por_puerto_olt[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataconsultar_clientes_por_puerto_olt[".originalDefaultPages"] = $tdataconsultar_clientes_por_puerto_olt[".defaultPages"];

//	field labels
$fieldLabelsconsultar_clientes_por_puerto_olt = array();
$fieldToolTipsconsultar_clientes_por_puerto_olt = array();
$pageTitlesconsultar_clientes_por_puerto_olt = array();
$placeHoldersconsultar_clientes_por_puerto_olt = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsconsultar_clientes_por_puerto_olt["Spanish"] = array();
	$fieldToolTipsconsultar_clientes_por_puerto_olt["Spanish"] = array();
	$placeHoldersconsultar_clientes_por_puerto_olt["Spanish"] = array();
	$pageTitlesconsultar_clientes_por_puerto_olt["Spanish"] = array();
	$fieldLabelsconsultar_clientes_por_puerto_olt["Spanish"]["Localidad"] = "Localidad";
	$fieldToolTipsconsultar_clientes_por_puerto_olt["Spanish"]["Localidad"] = "";
	$placeHoldersconsultar_clientes_por_puerto_olt["Spanish"]["Localidad"] = "";
	$fieldLabelsconsultar_clientes_por_puerto_olt["Spanish"]["Cable"] = "Cable";
	$fieldToolTipsconsultar_clientes_por_puerto_olt["Spanish"]["Cable"] = "";
	$placeHoldersconsultar_clientes_por_puerto_olt["Spanish"]["Cable"] = "";
	$fieldLabelsconsultar_clientes_por_puerto_olt["Spanish"]["Spliter"] = "Spliter";
	$fieldToolTipsconsultar_clientes_por_puerto_olt["Spanish"]["Spliter"] = "";
	$placeHoldersconsultar_clientes_por_puerto_olt["Spanish"]["Spliter"] = "";
	$fieldLabelsconsultar_clientes_por_puerto_olt["Spanish"]["Cto"] = "Cto";
	$fieldToolTipsconsultar_clientes_por_puerto_olt["Spanish"]["Cto"] = "";
	$placeHoldersconsultar_clientes_por_puerto_olt["Spanish"]["Cto"] = "";
	$fieldLabelsconsultar_clientes_por_puerto_olt["Spanish"]["Puerto"] = "Puerto";
	$fieldToolTipsconsultar_clientes_por_puerto_olt["Spanish"]["Puerto"] = "";
	$placeHoldersconsultar_clientes_por_puerto_olt["Spanish"]["Puerto"] = "";
	$fieldLabelsconsultar_clientes_por_puerto_olt["Spanish"]["Cedula"] = "Cedula";
	$fieldToolTipsconsultar_clientes_por_puerto_olt["Spanish"]["Cedula"] = "";
	$placeHoldersconsultar_clientes_por_puerto_olt["Spanish"]["Cedula"] = "";
	if (count($fieldToolTipsconsultar_clientes_por_puerto_olt["Spanish"]))
		$tdataconsultar_clientes_por_puerto_olt[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsconsultar_clientes_por_puerto_olt["English"] = array();
	$fieldToolTipsconsultar_clientes_por_puerto_olt["English"] = array();
	$placeHoldersconsultar_clientes_por_puerto_olt["English"] = array();
	$pageTitlesconsultar_clientes_por_puerto_olt["English"] = array();
	$fieldLabelsconsultar_clientes_por_puerto_olt["English"]["Localidad"] = "Localidad";
	$fieldToolTipsconsultar_clientes_por_puerto_olt["English"]["Localidad"] = "";
	$placeHoldersconsultar_clientes_por_puerto_olt["English"]["Localidad"] = "";
	$fieldLabelsconsultar_clientes_por_puerto_olt["English"]["Cable"] = "Cable";
	$fieldToolTipsconsultar_clientes_por_puerto_olt["English"]["Cable"] = "";
	$placeHoldersconsultar_clientes_por_puerto_olt["English"]["Cable"] = "";
	$fieldLabelsconsultar_clientes_por_puerto_olt["English"]["Spliter"] = "Spliter";
	$fieldToolTipsconsultar_clientes_por_puerto_olt["English"]["Spliter"] = "";
	$placeHoldersconsultar_clientes_por_puerto_olt["English"]["Spliter"] = "";
	$fieldLabelsconsultar_clientes_por_puerto_olt["English"]["Cto"] = "Cto";
	$fieldToolTipsconsultar_clientes_por_puerto_olt["English"]["Cto"] = "";
	$placeHoldersconsultar_clientes_por_puerto_olt["English"]["Cto"] = "";
	$fieldLabelsconsultar_clientes_por_puerto_olt["English"]["Puerto"] = "Puerto";
	$fieldToolTipsconsultar_clientes_por_puerto_olt["English"]["Puerto"] = "";
	$placeHoldersconsultar_clientes_por_puerto_olt["English"]["Puerto"] = "";
	$fieldLabelsconsultar_clientes_por_puerto_olt["English"]["Cedula"] = "Cedula";
	$fieldToolTipsconsultar_clientes_por_puerto_olt["English"]["Cedula"] = "";
	$placeHoldersconsultar_clientes_por_puerto_olt["English"]["Cedula"] = "";
	if (count($fieldToolTipsconsultar_clientes_por_puerto_olt["English"]))
		$tdataconsultar_clientes_por_puerto_olt[".isUseToolTips"] = true;
}


	$tdataconsultar_clientes_por_puerto_olt[".NCSearch"] = true;



$tdataconsultar_clientes_por_puerto_olt[".shortTableName"] = "consultar_clientes_por_puerto_olt";
$tdataconsultar_clientes_por_puerto_olt[".nSecOptions"] = 0;

$tdataconsultar_clientes_por_puerto_olt[".mainTableOwnerID"] = "";
$tdataconsultar_clientes_por_puerto_olt[".entityType"] = 1;
$tdataconsultar_clientes_por_puerto_olt[".connId"] = "isp_eisa_at_localhost";


$tdataconsultar_clientes_por_puerto_olt[".strOriginalTableName"] = "puertos_olt";

	



$tdataconsultar_clientes_por_puerto_olt[".showAddInPopup"] = false;

$tdataconsultar_clientes_por_puerto_olt[".showEditInPopup"] = false;

$tdataconsultar_clientes_por_puerto_olt[".showViewInPopup"] = false;

$tdataconsultar_clientes_por_puerto_olt[".listAjax"] = false;
//	temporary
//$tdataconsultar_clientes_por_puerto_olt[".listAjax"] = false;

	$tdataconsultar_clientes_por_puerto_olt[".audit"] = false;

	$tdataconsultar_clientes_por_puerto_olt[".locking"] = false;


$pages = $tdataconsultar_clientes_por_puerto_olt[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataconsultar_clientes_por_puerto_olt[".edit"] = true;
	$tdataconsultar_clientes_por_puerto_olt[".afterEditAction"] = 1;
	$tdataconsultar_clientes_por_puerto_olt[".closePopupAfterEdit"] = 1;
	$tdataconsultar_clientes_por_puerto_olt[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataconsultar_clientes_por_puerto_olt[".add"] = true;
$tdataconsultar_clientes_por_puerto_olt[".afterAddAction"] = 1;
$tdataconsultar_clientes_por_puerto_olt[".closePopupAfterAdd"] = 1;
$tdataconsultar_clientes_por_puerto_olt[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataconsultar_clientes_por_puerto_olt[".list"] = true;
}



$tdataconsultar_clientes_por_puerto_olt[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataconsultar_clientes_por_puerto_olt[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataconsultar_clientes_por_puerto_olt[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataconsultar_clientes_por_puerto_olt[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataconsultar_clientes_por_puerto_olt[".printFriendly"] = true;
}



$tdataconsultar_clientes_por_puerto_olt[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataconsultar_clientes_por_puerto_olt[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataconsultar_clientes_por_puerto_olt[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataconsultar_clientes_por_puerto_olt[".isUseAjaxSuggest"] = true;



			

$tdataconsultar_clientes_por_puerto_olt[".ajaxCodeSnippetAdded"] = false;

$tdataconsultar_clientes_por_puerto_olt[".buttonsAdded"] = false;

$tdataconsultar_clientes_por_puerto_olt[".addPageEvents"] = false;

// use timepicker for search panel
$tdataconsultar_clientes_por_puerto_olt[".isUseTimeForSearch"] = false;


$tdataconsultar_clientes_por_puerto_olt[".badgeColor"] = "E07878";


$tdataconsultar_clientes_por_puerto_olt[".allSearchFields"] = array();
$tdataconsultar_clientes_por_puerto_olt[".filterFields"] = array();
$tdataconsultar_clientes_por_puerto_olt[".requiredSearchFields"] = array();

$tdataconsultar_clientes_por_puerto_olt[".googleLikeFields"] = array();
$tdataconsultar_clientes_por_puerto_olt[".googleLikeFields"][] = "Localidad";
$tdataconsultar_clientes_por_puerto_olt[".googleLikeFields"][] = "Cable";
$tdataconsultar_clientes_por_puerto_olt[".googleLikeFields"][] = "Spliter";
$tdataconsultar_clientes_por_puerto_olt[".googleLikeFields"][] = "Cto";
$tdataconsultar_clientes_por_puerto_olt[".googleLikeFields"][] = "Puerto";
$tdataconsultar_clientes_por_puerto_olt[".googleLikeFields"][] = "Cedula";



$tdataconsultar_clientes_por_puerto_olt[".tableType"] = "list";

$tdataconsultar_clientes_por_puerto_olt[".printerPageOrientation"] = 0;
$tdataconsultar_clientes_por_puerto_olt[".nPrinterPageScale"] = 100;

$tdataconsultar_clientes_por_puerto_olt[".nPrinterSplitRecords"] = 40;

$tdataconsultar_clientes_por_puerto_olt[".geocodingEnabled"] = false;










$tdataconsultar_clientes_por_puerto_olt[".pageSize"] = 20;

$tdataconsultar_clientes_por_puerto_olt[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataconsultar_clientes_por_puerto_olt[".strOrderBy"] = $tstrOrderBy;

$tdataconsultar_clientes_por_puerto_olt[".orderindexes"] = array();


$tdataconsultar_clientes_por_puerto_olt[".sqlHead"] = "SELECT `puertos_cto`.`Localidad`,  `puertos_cto`.`Cable`,  `puertos_cto`.`Spliter`,  `puertos_cto`.`Cto`,  `puertos_cto`.`Puerto`,  `puertos_cto`.`Cedula`";
$tdataconsultar_clientes_por_puerto_olt[".sqlFrom"] = "FROM `puertos_olt`  INNER JOIN `puertos_cto` ON `puertos_olt`.`Id_spliter` = `puertos_cto`.`Spliter`";
$tdataconsultar_clientes_por_puerto_olt[".sqlWhereExpr"] = "";
$tdataconsultar_clientes_por_puerto_olt[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataconsultar_clientes_por_puerto_olt[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataconsultar_clientes_por_puerto_olt[".arrGroupsPerPage"] = $arrGPP;

$tdataconsultar_clientes_por_puerto_olt[".highlightSearchResults"] = true;

$tableKeysconsultar_clientes_por_puerto_olt = array();
$tdataconsultar_clientes_por_puerto_olt[".Keys"] = $tableKeysconsultar_clientes_por_puerto_olt;


$tdataconsultar_clientes_por_puerto_olt[".hideMobileList"] = array();




//	Localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Localidad";
	$fdata["GoodName"] = "Localidad";
	$fdata["ownerTable"] = "puertos_cto";
	$fdata["Label"] = GetFieldLabel("Consultar_clientes_por_puerto_olt","Localidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Localidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`puertos_cto`.`Localidad`";

	
	
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


	$tdataconsultar_clientes_por_puerto_olt["Localidad"] = $fdata;
		$tdataconsultar_clientes_por_puerto_olt[".searchableFields"][] = "Localidad";
//	Cable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Cable";
	$fdata["GoodName"] = "Cable";
	$fdata["ownerTable"] = "puertos_cto";
	$fdata["Label"] = GetFieldLabel("Consultar_clientes_por_puerto_olt","Cable");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Cable";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`puertos_cto`.`Cable`";

	
	
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


	$tdataconsultar_clientes_por_puerto_olt["Cable"] = $fdata;
		$tdataconsultar_clientes_por_puerto_olt[".searchableFields"][] = "Cable";
//	Spliter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Spliter";
	$fdata["GoodName"] = "Spliter";
	$fdata["ownerTable"] = "puertos_cto";
	$fdata["Label"] = GetFieldLabel("Consultar_clientes_por_puerto_olt","Spliter");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Spliter";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`puertos_cto`.`Spliter`";

	
	
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


	$tdataconsultar_clientes_por_puerto_olt["Spliter"] = $fdata;
		$tdataconsultar_clientes_por_puerto_olt[".searchableFields"][] = "Spliter";
//	Cto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Cto";
	$fdata["GoodName"] = "Cto";
	$fdata["ownerTable"] = "puertos_cto";
	$fdata["Label"] = GetFieldLabel("Consultar_clientes_por_puerto_olt","Cto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Cto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`puertos_cto`.`Cto`";

	
	
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


	$tdataconsultar_clientes_por_puerto_olt["Cto"] = $fdata;
		$tdataconsultar_clientes_por_puerto_olt[".searchableFields"][] = "Cto";
//	Puerto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Puerto";
	$fdata["GoodName"] = "Puerto";
	$fdata["ownerTable"] = "puertos_cto";
	$fdata["Label"] = GetFieldLabel("Consultar_clientes_por_puerto_olt","Puerto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Puerto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`puertos_cto`.`Puerto`";

	
	
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


	$tdataconsultar_clientes_por_puerto_olt["Puerto"] = $fdata;
		$tdataconsultar_clientes_por_puerto_olt[".searchableFields"][] = "Puerto";
//	Cedula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Cedula";
	$fdata["GoodName"] = "Cedula";
	$fdata["ownerTable"] = "puertos_cto";
	$fdata["Label"] = GetFieldLabel("Consultar_clientes_por_puerto_olt","Cedula");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Cedula";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`puertos_cto`.`Cedula`";

	
	
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


	$tdataconsultar_clientes_por_puerto_olt["Cedula"] = $fdata;
		$tdataconsultar_clientes_por_puerto_olt[".searchableFields"][] = "Cedula";


$tables_data["Consultar_clientes_por_puerto_olt"]=&$tdataconsultar_clientes_por_puerto_olt;
$field_labels["Consultar_clientes_por_puerto_olt"] = &$fieldLabelsconsultar_clientes_por_puerto_olt;
$fieldToolTips["Consultar_clientes_por_puerto_olt"] = &$fieldToolTipsconsultar_clientes_por_puerto_olt;
$placeHolders["Consultar_clientes_por_puerto_olt"] = &$placeHoldersconsultar_clientes_por_puerto_olt;
$page_titles["Consultar_clientes_por_puerto_olt"] = &$pageTitlesconsultar_clientes_por_puerto_olt;


changeTextControlsToDate( "Consultar_clientes_por_puerto_olt" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Consultar_clientes_por_puerto_olt"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Consultar_clientes_por_puerto_olt"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_consultar_clientes_por_puerto_olt()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`puertos_cto`.`Localidad`,  `puertos_cto`.`Cable`,  `puertos_cto`.`Spliter`,  `puertos_cto`.`Cto`,  `puertos_cto`.`Puerto`,  `puertos_cto`.`Cedula`";
$proto0["m_strFrom"] = "FROM `puertos_olt`  INNER JOIN `puertos_cto` ON `puertos_olt`.`Id_spliter` = `puertos_cto`.`Spliter`";
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
	"m_strName" => "Localidad",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "Consultar_clientes_por_puerto_olt"
));

$proto6["m_sql"] = "`puertos_cto`.`Localidad`";
$proto6["m_srcTableName"] = "Consultar_clientes_por_puerto_olt";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Cable",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "Consultar_clientes_por_puerto_olt"
));

$proto8["m_sql"] = "`puertos_cto`.`Cable`";
$proto8["m_srcTableName"] = "Consultar_clientes_por_puerto_olt";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Spliter",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "Consultar_clientes_por_puerto_olt"
));

$proto10["m_sql"] = "`puertos_cto`.`Spliter`";
$proto10["m_srcTableName"] = "Consultar_clientes_por_puerto_olt";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Cto",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "Consultar_clientes_por_puerto_olt"
));

$proto12["m_sql"] = "`puertos_cto`.`Cto`";
$proto12["m_srcTableName"] = "Consultar_clientes_por_puerto_olt";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Puerto",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "Consultar_clientes_por_puerto_olt"
));

$proto14["m_sql"] = "`puertos_cto`.`Puerto`";
$proto14["m_srcTableName"] = "Consultar_clientes_por_puerto_olt";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Cedula",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "Consultar_clientes_por_puerto_olt"
));

$proto16["m_sql"] = "`puertos_cto`.`Cedula`";
$proto16["m_srcTableName"] = "Consultar_clientes_por_puerto_olt";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "puertos_olt";
$proto19["m_srcTableName"] = "Consultar_clientes_por_puerto_olt";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "Id_puerto";
$proto19["m_columns"][] = "Id_Tarjteta";
$proto19["m_columns"][] = "Id_localidad";
$proto19["m_columns"][] = "Id_cable";
$proto19["m_columns"][] = "Id_spliter";
$proto19["m_columns"][] = "Numero_del_Puerto";
$proto19["m_columns"][] = "Odf";
$proto19["m_columns"][] = "Bandeja";
$proto19["m_columns"][] = "Puerto_del_odf";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "`puertos_olt`";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "Consultar_clientes_por_puerto_olt";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
												$proto22=array();
$proto22["m_link"] = "SQLL_INNERJOIN";
			$proto23=array();
$proto23["m_strName"] = "puertos_cto";
$proto23["m_srcTableName"] = "Consultar_clientes_por_puerto_olt";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "Id_puertos";
$proto23["m_columns"][] = "Puerto";
$proto23["m_columns"][] = "Cto";
$proto23["m_columns"][] = "Spliter";
$proto23["m_columns"][] = "Cable";
$proto23["m_columns"][] = "Localidad";
$proto23["m_columns"][] = "Cedula";
$proto23["m_columns"][] = "Activo";
$proto23["m_columns"][] = "Ocupado";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "INNER JOIN `puertos_cto` ON `puertos_olt`.`Id_spliter` = `puertos_cto`.`Spliter`";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "Consultar_clientes_por_puerto_olt";
$proto24=array();
$proto24["m_sql"] = "`puertos_cto`.`Spliter` = `puertos_olt`.`Id_spliter`";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Spliter",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "Consultar_clientes_por_puerto_olt"
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "= `puertos_olt`.`Id_spliter`";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Consultar_clientes_por_puerto_olt";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_consultar_clientes_por_puerto_olt = createSqlQuery_consultar_clientes_por_puerto_olt();


	
										;

						

$tdataconsultar_clientes_por_puerto_olt[".sqlquery"] = $queryData_consultar_clientes_por_puerto_olt;



$tdataconsultar_clientes_por_puerto_olt[".hasEvents"] = false;

?>