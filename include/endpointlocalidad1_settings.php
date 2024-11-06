<?php
$tdataendpointlocalidad1 = array();
$tdataendpointlocalidad1[".searchableFields"] = array();
$tdataendpointlocalidad1[".ShortName"] = "endpointlocalidad1";
$tdataendpointlocalidad1[".OwnerID"] = "";
$tdataendpointlocalidad1[".OriginalTable"] = "endpointlocalidad";


$tdataendpointlocalidad1[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataendpointlocalidad1[".originalPagesByType"] = $tdataendpointlocalidad1[".pagesByType"];
$tdataendpointlocalidad1[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataendpointlocalidad1[".originalPages"] = $tdataendpointlocalidad1[".pages"];
$tdataendpointlocalidad1[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataendpointlocalidad1[".originalDefaultPages"] = $tdataendpointlocalidad1[".defaultPages"];

//	field labels
$fieldLabelsendpointlocalidad1 = array();
$fieldToolTipsendpointlocalidad1 = array();
$pageTitlesendpointlocalidad1 = array();
$placeHoldersendpointlocalidad1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsendpointlocalidad1["Spanish"] = array();
	$fieldToolTipsendpointlocalidad1["Spanish"] = array();
	$placeHoldersendpointlocalidad1["Spanish"] = array();
	$pageTitlesendpointlocalidad1["Spanish"] = array();
	$fieldLabelsendpointlocalidad1["Spanish"]["id_localidad"] = "Id Localidad";
	$fieldToolTipsendpointlocalidad1["Spanish"]["id_localidad"] = "";
	$placeHoldersendpointlocalidad1["Spanish"]["id_localidad"] = "";
	$fieldLabelsendpointlocalidad1["Spanish"]["Localidad"] = "Localidad";
	$fieldToolTipsendpointlocalidad1["Spanish"]["Localidad"] = "";
	$placeHoldersendpointlocalidad1["Spanish"]["Localidad"] = "";
	if (count($fieldToolTipsendpointlocalidad1["Spanish"]))
		$tdataendpointlocalidad1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsendpointlocalidad1["English"] = array();
	$fieldToolTipsendpointlocalidad1["English"] = array();
	$placeHoldersendpointlocalidad1["English"] = array();
	$pageTitlesendpointlocalidad1["English"] = array();
	$fieldLabelsendpointlocalidad1["English"]["id_localidad"] = "Id Localidad";
	$fieldToolTipsendpointlocalidad1["English"]["id_localidad"] = "";
	$placeHoldersendpointlocalidad1["English"]["id_localidad"] = "";
	$fieldLabelsendpointlocalidad1["English"]["Localidad"] = "Localidad";
	$fieldToolTipsendpointlocalidad1["English"]["Localidad"] = "";
	$placeHoldersendpointlocalidad1["English"]["Localidad"] = "";
	if (count($fieldToolTipsendpointlocalidad1["English"]))
		$tdataendpointlocalidad1[".isUseToolTips"] = true;
}


	$tdataendpointlocalidad1[".NCSearch"] = true;



$tdataendpointlocalidad1[".shortTableName"] = "endpointlocalidad1";
$tdataendpointlocalidad1[".nSecOptions"] = 0;

$tdataendpointlocalidad1[".mainTableOwnerID"] = "";
$tdataendpointlocalidad1[".entityType"] = 6;
$tdataendpointlocalidad1[".connId"] = "isp_eisa_at_localhost";


$tdataendpointlocalidad1[".strOriginalTableName"] = "endpointlocalidad";

	



$tdataendpointlocalidad1[".showAddInPopup"] = false;

$tdataendpointlocalidad1[".showEditInPopup"] = false;

$tdataendpointlocalidad1[".showViewInPopup"] = false;

$tdataendpointlocalidad1[".listAjax"] = false;
//	temporary
//$tdataendpointlocalidad1[".listAjax"] = false;

	$tdataendpointlocalidad1[".audit"] = false;

	$tdataendpointlocalidad1[".locking"] = false;


$pages = $tdataendpointlocalidad1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataendpointlocalidad1[".edit"] = true;
	$tdataendpointlocalidad1[".afterEditAction"] = 1;
	$tdataendpointlocalidad1[".closePopupAfterEdit"] = 1;
	$tdataendpointlocalidad1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataendpointlocalidad1[".add"] = true;
$tdataendpointlocalidad1[".afterAddAction"] = 1;
$tdataendpointlocalidad1[".closePopupAfterAdd"] = 1;
$tdataendpointlocalidad1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataendpointlocalidad1[".list"] = true;
}



$tdataendpointlocalidad1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataendpointlocalidad1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataendpointlocalidad1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataendpointlocalidad1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataendpointlocalidad1[".printFriendly"] = true;
}



$tdataendpointlocalidad1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataendpointlocalidad1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataendpointlocalidad1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataendpointlocalidad1[".isUseAjaxSuggest"] = false;



			

$tdataendpointlocalidad1[".ajaxCodeSnippetAdded"] = false;

$tdataendpointlocalidad1[".buttonsAdded"] = false;

$tdataendpointlocalidad1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataendpointlocalidad1[".isUseTimeForSearch"] = false;


$tdataendpointlocalidad1[".badgeColor"] = "7B68EE";


$tdataendpointlocalidad1[".allSearchFields"] = array();
$tdataendpointlocalidad1[".filterFields"] = array();
$tdataendpointlocalidad1[".requiredSearchFields"] = array();

$tdataendpointlocalidad1[".googleLikeFields"] = array();
$tdataendpointlocalidad1[".googleLikeFields"][] = "id_localidad";
$tdataendpointlocalidad1[".googleLikeFields"][] = "Localidad";




$tdataendpointlocalidad1[".printerPageOrientation"] = 0;
$tdataendpointlocalidad1[".nPrinterPageScale"] = 100;

$tdataendpointlocalidad1[".nPrinterSplitRecords"] = 40;

$tdataendpointlocalidad1[".geocodingEnabled"] = false;










$tdataendpointlocalidad1[".pageSize"] = 20;

$tdataendpointlocalidad1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataendpointlocalidad1[".strOrderBy"] = $tstrOrderBy;

$tdataendpointlocalidad1[".orderindexes"] = array();


$tdataendpointlocalidad1[".sqlHead"] = "";
$tdataendpointlocalidad1[".sqlFrom"] = "";
$tdataendpointlocalidad1[".sqlWhereExpr"] = "";
$tdataendpointlocalidad1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataendpointlocalidad1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataendpointlocalidad1[".arrGroupsPerPage"] = $arrGPP;

$tdataendpointlocalidad1[".highlightSearchResults"] = true;

$tableKeysendpointlocalidad1 = array();
$tableKeysendpointlocalidad1[] = "id_localidad";
$tdataendpointlocalidad1[".Keys"] = $tableKeysendpointlocalidad1;


$tdataendpointlocalidad1[".hideMobileList"] = array();




//	id_localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_localidad";
	$fdata["GoodName"] = "id_localidad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("endpointlocalidad","id_localidad");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_localidad";

	
		$fdata["FullName"] = "id_localidad";

	
	
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


	$tdataendpointlocalidad1["id_localidad"] = $fdata;
		$tdataendpointlocalidad1[".searchableFields"][] = "id_localidad";
//	Localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Localidad";
	$fdata["GoodName"] = "Localidad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("endpointlocalidad","Localidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Localidad";

	
		$fdata["FullName"] = "Localidad";

	
	
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


	$tdataendpointlocalidad1["Localidad"] = $fdata;
		$tdataendpointlocalidad1[".searchableFields"][] = "Localidad";


$tables_data["endpointlocalidad"]=&$tdataendpointlocalidad1;
$field_labels["endpointlocalidad"] = &$fieldLabelsendpointlocalidad1;
$fieldToolTips["endpointlocalidad"] = &$fieldToolTipsendpointlocalidad1;
$placeHolders["endpointlocalidad"] = &$placeHoldersendpointlocalidad1;
$page_titles["endpointlocalidad"] = &$pageTitlesendpointlocalidad1;


changeTextControlsToDate( "endpointlocalidad" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["endpointlocalidad"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["endpointlocalidad"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/endpointlocalidad1_ops.php" ) );



	
										;

		

$tdataendpointlocalidad1[".sqlquery"] = $queryData_endpointlocalidad1;



$tdataendpointlocalidad1[".hasEvents"] = false;

?>