<?php
$tdataendpoint_localidades = array();
$tdataendpoint_localidades[".searchableFields"] = array();
$tdataendpoint_localidades[".ShortName"] = "endpoint_localidades";
$tdataendpoint_localidades[".OwnerID"] = "";
$tdataendpoint_localidades[".OriginalTable"] = "endpoint_localidades";


$tdataendpoint_localidades[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataendpoint_localidades[".originalPagesByType"] = $tdataendpoint_localidades[".pagesByType"];
$tdataendpoint_localidades[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataendpoint_localidades[".originalPages"] = $tdataendpoint_localidades[".pages"];
$tdataendpoint_localidades[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataendpoint_localidades[".originalDefaultPages"] = $tdataendpoint_localidades[".defaultPages"];

//	field labels
$fieldLabelsendpoint_localidades = array();
$fieldToolTipsendpoint_localidades = array();
$pageTitlesendpoint_localidades = array();
$placeHoldersendpoint_localidades = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsendpoint_localidades["Spanish"] = array();
	$fieldToolTipsendpoint_localidades["Spanish"] = array();
	$placeHoldersendpoint_localidades["Spanish"] = array();
	$pageTitlesendpoint_localidades["Spanish"] = array();
	$fieldLabelsendpoint_localidades["Spanish"]["id_localidad"] = "Id Localidad";
	$fieldToolTipsendpoint_localidades["Spanish"]["id_localidad"] = "";
	$placeHoldersendpoint_localidades["Spanish"]["id_localidad"] = "";
	$fieldLabelsendpoint_localidades["Spanish"]["Localidad"] = "Localidad";
	$fieldToolTipsendpoint_localidades["Spanish"]["Localidad"] = "";
	$placeHoldersendpoint_localidades["Spanish"]["Localidad"] = "";
	if (count($fieldToolTipsendpoint_localidades["Spanish"]))
		$tdataendpoint_localidades[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsendpoint_localidades["English"] = array();
	$fieldToolTipsendpoint_localidades["English"] = array();
	$placeHoldersendpoint_localidades["English"] = array();
	$pageTitlesendpoint_localidades["English"] = array();
	$fieldLabelsendpoint_localidades["English"]["id_localidad"] = "Id Localidad";
	$fieldToolTipsendpoint_localidades["English"]["id_localidad"] = "";
	$placeHoldersendpoint_localidades["English"]["id_localidad"] = "";
	$fieldLabelsendpoint_localidades["English"]["Localidad"] = "Localidad";
	$fieldToolTipsendpoint_localidades["English"]["Localidad"] = "";
	$placeHoldersendpoint_localidades["English"]["Localidad"] = "";
	if (count($fieldToolTipsendpoint_localidades["English"]))
		$tdataendpoint_localidades[".isUseToolTips"] = true;
}


	$tdataendpoint_localidades[".NCSearch"] = true;



$tdataendpoint_localidades[".shortTableName"] = "endpoint_localidades";
$tdataendpoint_localidades[".nSecOptions"] = 0;

$tdataendpoint_localidades[".mainTableOwnerID"] = "";
$tdataendpoint_localidades[".entityType"] = 6;
$tdataendpoint_localidades[".connId"] = "isp_eisa_at_localhost";


$tdataendpoint_localidades[".strOriginalTableName"] = "endpoint_localidades";

	



$tdataendpoint_localidades[".showAddInPopup"] = false;

$tdataendpoint_localidades[".showEditInPopup"] = false;

$tdataendpoint_localidades[".showViewInPopup"] = false;

$tdataendpoint_localidades[".listAjax"] = false;
//	temporary
//$tdataendpoint_localidades[".listAjax"] = false;

	$tdataendpoint_localidades[".audit"] = false;

	$tdataendpoint_localidades[".locking"] = false;


$pages = $tdataendpoint_localidades[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataendpoint_localidades[".edit"] = true;
	$tdataendpoint_localidades[".afterEditAction"] = 1;
	$tdataendpoint_localidades[".closePopupAfterEdit"] = 1;
	$tdataendpoint_localidades[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataendpoint_localidades[".add"] = true;
$tdataendpoint_localidades[".afterAddAction"] = 1;
$tdataendpoint_localidades[".closePopupAfterAdd"] = 1;
$tdataendpoint_localidades[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataendpoint_localidades[".list"] = true;
}



$tdataendpoint_localidades[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataendpoint_localidades[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataendpoint_localidades[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataendpoint_localidades[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataendpoint_localidades[".printFriendly"] = true;
}



$tdataendpoint_localidades[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataendpoint_localidades[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataendpoint_localidades[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataendpoint_localidades[".isUseAjaxSuggest"] = false;



			

$tdataendpoint_localidades[".ajaxCodeSnippetAdded"] = false;

$tdataendpoint_localidades[".buttonsAdded"] = false;

$tdataendpoint_localidades[".addPageEvents"] = false;

// use timepicker for search panel
$tdataendpoint_localidades[".isUseTimeForSearch"] = false;


$tdataendpoint_localidades[".badgeColor"] = "EDCA00";


$tdataendpoint_localidades[".allSearchFields"] = array();
$tdataendpoint_localidades[".filterFields"] = array();
$tdataendpoint_localidades[".requiredSearchFields"] = array();

$tdataendpoint_localidades[".googleLikeFields"] = array();
$tdataendpoint_localidades[".googleLikeFields"][] = "id_localidad";
$tdataendpoint_localidades[".googleLikeFields"][] = "Localidad";




$tdataendpoint_localidades[".printerPageOrientation"] = 0;
$tdataendpoint_localidades[".nPrinterPageScale"] = 100;

$tdataendpoint_localidades[".nPrinterSplitRecords"] = 40;

$tdataendpoint_localidades[".geocodingEnabled"] = false;










$tdataendpoint_localidades[".pageSize"] = 20;

$tdataendpoint_localidades[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataendpoint_localidades[".strOrderBy"] = $tstrOrderBy;

$tdataendpoint_localidades[".orderindexes"] = array();


$tdataendpoint_localidades[".sqlHead"] = "";
$tdataendpoint_localidades[".sqlFrom"] = "";
$tdataendpoint_localidades[".sqlWhereExpr"] = "";
$tdataendpoint_localidades[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataendpoint_localidades[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataendpoint_localidades[".arrGroupsPerPage"] = $arrGPP;

$tdataendpoint_localidades[".highlightSearchResults"] = true;

$tableKeysendpoint_localidades = array();
$tableKeysendpoint_localidades[] = "id_localidad";
$tdataendpoint_localidades[".Keys"] = $tableKeysendpoint_localidades;


$tdataendpoint_localidades[".hideMobileList"] = array();




//	id_localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_localidad";
	$fdata["GoodName"] = "id_localidad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("endpoint_localidades","id_localidad");
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


	$tdataendpoint_localidades["id_localidad"] = $fdata;
		$tdataendpoint_localidades[".searchableFields"][] = "id_localidad";
//	Localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Localidad";
	$fdata["GoodName"] = "Localidad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("endpoint_localidades","Localidad");
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


	$tdataendpoint_localidades["Localidad"] = $fdata;
		$tdataendpoint_localidades[".searchableFields"][] = "Localidad";


$tables_data["endpoint_localidades"]=&$tdataendpoint_localidades;
$field_labels["endpoint_localidades"] = &$fieldLabelsendpoint_localidades;
$fieldToolTips["endpoint_localidades"] = &$fieldToolTipsendpoint_localidades;
$placeHolders["endpoint_localidades"] = &$placeHoldersendpoint_localidades;
$page_titles["endpoint_localidades"] = &$pageTitlesendpoint_localidades;


changeTextControlsToDate( "endpoint_localidades" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["endpoint_localidades"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["endpoint_localidades"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/endpoint_localidades_ops.php" ) );



	
										;

		

$tdataendpoint_localidades[".sqlquery"] = $queryData_endpoint_localidades;



$tdataendpoint_localidades[".hasEvents"] = false;

?>