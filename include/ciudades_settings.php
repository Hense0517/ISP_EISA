<?php
$tdataciudades = array();
$tdataciudades[".searchableFields"] = array();
$tdataciudades[".ShortName"] = "ciudades";
$tdataciudades[".OwnerID"] = "";
$tdataciudades[".OriginalTable"] = "Ciudades";


$tdataciudades[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataciudades[".originalPagesByType"] = $tdataciudades[".pagesByType"];
$tdataciudades[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataciudades[".originalPages"] = $tdataciudades[".pages"];
$tdataciudades[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataciudades[".originalDefaultPages"] = $tdataciudades[".defaultPages"];

//	field labels
$fieldLabelsciudades = array();
$fieldToolTipsciudades = array();
$pageTitlesciudades = array();
$placeHoldersciudades = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsciudades["Spanish"] = array();
	$fieldToolTipsciudades["Spanish"] = array();
	$placeHoldersciudades["Spanish"] = array();
	$pageTitlesciudades["Spanish"] = array();
	$fieldLabelsciudades["Spanish"]["c_digo_dane_del_departamento"] = "C Digo Dane Del Departamento";
	$fieldToolTipsciudades["Spanish"]["c_digo_dane_del_departamento"] = "";
	$placeHoldersciudades["Spanish"]["c_digo_dane_del_departamento"] = "";
	$fieldLabelsciudades["Spanish"]["c_digo_dane_del_municipio"] = "C Digo Dane Del Municipio";
	$fieldToolTipsciudades["Spanish"]["c_digo_dane_del_municipio"] = "";
	$placeHoldersciudades["Spanish"]["c_digo_dane_del_municipio"] = "";
	$fieldLabelsciudades["Spanish"]["municipio"] = "Municipio";
	$fieldToolTipsciudades["Spanish"]["municipio"] = "";
	$placeHoldersciudades["Spanish"]["municipio"] = "";
	if (count($fieldToolTipsciudades["Spanish"]))
		$tdataciudades[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsciudades["English"] = array();
	$fieldToolTipsciudades["English"] = array();
	$placeHoldersciudades["English"] = array();
	$pageTitlesciudades["English"] = array();
	$fieldLabelsciudades["English"]["c_digo_dane_del_departamento"] = "C Digo Dane Del Departamento";
	$fieldToolTipsciudades["English"]["c_digo_dane_del_departamento"] = "";
	$placeHoldersciudades["English"]["c_digo_dane_del_departamento"] = "";
	$fieldLabelsciudades["English"]["c_digo_dane_del_municipio"] = "C Digo Dane Del Municipio";
	$fieldToolTipsciudades["English"]["c_digo_dane_del_municipio"] = "";
	$placeHoldersciudades["English"]["c_digo_dane_del_municipio"] = "";
	$fieldLabelsciudades["English"]["municipio"] = "Municipio";
	$fieldToolTipsciudades["English"]["municipio"] = "";
	$placeHoldersciudades["English"]["municipio"] = "";
	if (count($fieldToolTipsciudades["English"]))
		$tdataciudades[".isUseToolTips"] = true;
}


	$tdataciudades[".NCSearch"] = true;



$tdataciudades[".shortTableName"] = "ciudades";
$tdataciudades[".nSecOptions"] = 0;

$tdataciudades[".mainTableOwnerID"] = "";
$tdataciudades[".entityType"] = 7;
$tdataciudades[".connId"] = "isp_eisa_at_localhost";


$tdataciudades[".strOriginalTableName"] = "Ciudades";

	



$tdataciudades[".showAddInPopup"] = false;

$tdataciudades[".showEditInPopup"] = false;

$tdataciudades[".showViewInPopup"] = false;

$tdataciudades[".listAjax"] = false;
//	temporary
//$tdataciudades[".listAjax"] = false;

	$tdataciudades[".audit"] = false;

	$tdataciudades[".locking"] = false;


$pages = $tdataciudades[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataciudades[".edit"] = true;
	$tdataciudades[".afterEditAction"] = 1;
	$tdataciudades[".closePopupAfterEdit"] = 1;
	$tdataciudades[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataciudades[".add"] = true;
$tdataciudades[".afterAddAction"] = 1;
$tdataciudades[".closePopupAfterAdd"] = 1;
$tdataciudades[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataciudades[".list"] = true;
}



$tdataciudades[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataciudades[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataciudades[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataciudades[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataciudades[".printFriendly"] = true;
}



$tdataciudades[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataciudades[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataciudades[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataciudades[".isUseAjaxSuggest"] = false;



						

$tdataciudades[".ajaxCodeSnippetAdded"] = false;

$tdataciudades[".buttonsAdded"] = false;

$tdataciudades[".addPageEvents"] = false;

// use timepicker for search panel
$tdataciudades[".isUseTimeForSearch"] = false;


$tdataciudades[".badgeColor"] = "1e90ff";


$tdataciudades[".allSearchFields"] = array();
$tdataciudades[".filterFields"] = array();
$tdataciudades[".requiredSearchFields"] = array();

$tdataciudades[".googleLikeFields"] = array();
$tdataciudades[".googleLikeFields"][] = "c_digo_dane_del_municipio";
$tdataciudades[".googleLikeFields"][] = "municipio";
$tdataciudades[".googleLikeFields"][] = "c_digo_dane_del_departamento";




$tdataciudades[".printerPageOrientation"] = 0;
$tdataciudades[".nPrinterPageScale"] = 100;

$tdataciudades[".nPrinterSplitRecords"] = 40;

$tdataciudades[".geocodingEnabled"] = false;










$tdataciudades[".pageSize"] = 20;

$tdataciudades[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataciudades[".strOrderBy"] = $tstrOrderBy;

$tdataciudades[".orderindexes"] = array();


$tdataciudades[".sqlHead"] = "";
$tdataciudades[".sqlFrom"] = "";
$tdataciudades[".sqlWhereExpr"] = "";
$tdataciudades[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataciudades[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataciudades[".arrGroupsPerPage"] = $arrGPP;

$tdataciudades[".highlightSearchResults"] = true;

$tableKeysciudades = array();
$tableKeysciudades[] = "c_digo_dane_del_municipio";
$tdataciudades[".Keys"] = $tableKeysciudades;


$tdataciudades[".hideMobileList"] = array();




//	c_digo_dane_del_municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "c_digo_dane_del_municipio";
	$fdata["GoodName"] = "c_digo_dane_del_municipio";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Ciudades","c_digo_dane_del_municipio");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "*/c_digo_dane_del_municipio";

	
		$fdata["FullName"] = "c_digo_dane_del_municipio";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdataciudades["c_digo_dane_del_municipio"] = $fdata;
		$tdataciudades[".searchableFields"][] = "c_digo_dane_del_municipio";
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Ciudades","municipio");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "*/municipio";

	
		$fdata["FullName"] = "municipio";

	
	
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


	$tdataciudades["municipio"] = $fdata;
		$tdataciudades[".searchableFields"][] = "municipio";
//	c_digo_dane_del_departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "c_digo_dane_del_departamento";
	$fdata["GoodName"] = "c_digo_dane_del_departamento";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Ciudades","c_digo_dane_del_departamento");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "*/c_digo_dane_del_departamento";

	
		$fdata["FullName"] = "c_digo_dane_del_departamento";

	
	
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


	$tdataciudades["c_digo_dane_del_departamento"] = $fdata;
		$tdataciudades[".searchableFields"][] = "c_digo_dane_del_departamento";


$tables_data["Ciudades"]=&$tdataciudades;
$field_labels["Ciudades"] = &$fieldLabelsciudades;
$fieldToolTips["Ciudades"] = &$fieldToolTipsciudades;
$placeHolders["Ciudades"] = &$placeHoldersciudades;
$page_titles["Ciudades"] = &$pageTitlesciudades;


changeTextControlsToDate( "Ciudades" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Ciudades"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Ciudades"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="Departamentos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Departamentos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "departamentos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Ciudades"][0] = $masterParams;
				$masterTablesData["Ciudades"][0]["masterKeys"] = array();
	$masterTablesData["Ciudades"][0]["masterKeys"][]="c_digo_dane_del_departamento";
				$masterTablesData["Ciudades"][0]["detailKeys"] = array();
	$masterTablesData["Ciudades"][0]["detailKeys"][]="c_digo_dane_del_departamento";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/ciudades_ops.php" ) );



	
										;

			

$tdataciudades[".sqlquery"] = $queryData_ciudades;



$tdataciudades[".hasEvents"] = false;

?>