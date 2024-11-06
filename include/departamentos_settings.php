<?php
$tdatadepartamentos = array();
$tdatadepartamentos[".searchableFields"] = array();
$tdatadepartamentos[".ShortName"] = "departamentos";
$tdatadepartamentos[".OwnerID"] = "";
$tdatadepartamentos[".OriginalTable"] = "Departamentos";


$tdatadepartamentos[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadepartamentos[".originalPagesByType"] = $tdatadepartamentos[".pagesByType"];
$tdatadepartamentos[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadepartamentos[".originalPages"] = $tdatadepartamentos[".pages"];
$tdatadepartamentos[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadepartamentos[".originalDefaultPages"] = $tdatadepartamentos[".defaultPages"];

//	field labels
$fieldLabelsdepartamentos = array();
$fieldToolTipsdepartamentos = array();
$pageTitlesdepartamentos = array();
$placeHoldersdepartamentos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdepartamentos["Spanish"] = array();
	$fieldToolTipsdepartamentos["Spanish"] = array();
	$placeHoldersdepartamentos["Spanish"] = array();
	$pageTitlesdepartamentos["Spanish"] = array();
	$fieldLabelsdepartamentos["Spanish"]["region"] = "Region";
	$fieldToolTipsdepartamentos["Spanish"]["region"] = "";
	$placeHoldersdepartamentos["Spanish"]["region"] = "";
	$fieldLabelsdepartamentos["Spanish"]["c_digo_dane_del_departamento"] = "C Digo Dane Del Departamento";
	$fieldToolTipsdepartamentos["Spanish"]["c_digo_dane_del_departamento"] = "";
	$placeHoldersdepartamentos["Spanish"]["c_digo_dane_del_departamento"] = "";
	$fieldLabelsdepartamentos["Spanish"]["departamento"] = "Departamento";
	$fieldToolTipsdepartamentos["Spanish"]["departamento"] = "";
	$placeHoldersdepartamentos["Spanish"]["departamento"] = "";
	if (count($fieldToolTipsdepartamentos["Spanish"]))
		$tdatadepartamentos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdepartamentos["English"] = array();
	$fieldToolTipsdepartamentos["English"] = array();
	$placeHoldersdepartamentos["English"] = array();
	$pageTitlesdepartamentos["English"] = array();
	$fieldLabelsdepartamentos["English"]["region"] = "Region";
	$fieldToolTipsdepartamentos["English"]["region"] = "";
	$placeHoldersdepartamentos["English"]["region"] = "";
	$fieldLabelsdepartamentos["English"]["c_digo_dane_del_departamento"] = "C Digo Dane Del Departamento";
	$fieldToolTipsdepartamentos["English"]["c_digo_dane_del_departamento"] = "";
	$placeHoldersdepartamentos["English"]["c_digo_dane_del_departamento"] = "";
	$fieldLabelsdepartamentos["English"]["departamento"] = "Departamento";
	$fieldToolTipsdepartamentos["English"]["departamento"] = "";
	$placeHoldersdepartamentos["English"]["departamento"] = "";
	if (count($fieldToolTipsdepartamentos["English"]))
		$tdatadepartamentos[".isUseToolTips"] = true;
}


	$tdatadepartamentos[".NCSearch"] = true;



$tdatadepartamentos[".shortTableName"] = "departamentos";
$tdatadepartamentos[".nSecOptions"] = 0;

$tdatadepartamentos[".mainTableOwnerID"] = "";
$tdatadepartamentos[".entityType"] = 7;
$tdatadepartamentos[".connId"] = "isp_eisa_at_localhost";


$tdatadepartamentos[".strOriginalTableName"] = "Departamentos";

	



$tdatadepartamentos[".showAddInPopup"] = false;

$tdatadepartamentos[".showEditInPopup"] = false;

$tdatadepartamentos[".showViewInPopup"] = false;

$tdatadepartamentos[".listAjax"] = false;
//	temporary
//$tdatadepartamentos[".listAjax"] = false;

	$tdatadepartamentos[".audit"] = false;

	$tdatadepartamentos[".locking"] = false;


$pages = $tdatadepartamentos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadepartamentos[".edit"] = true;
	$tdatadepartamentos[".afterEditAction"] = 1;
	$tdatadepartamentos[".closePopupAfterEdit"] = 1;
	$tdatadepartamentos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadepartamentos[".add"] = true;
$tdatadepartamentos[".afterAddAction"] = 1;
$tdatadepartamentos[".closePopupAfterAdd"] = 1;
$tdatadepartamentos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadepartamentos[".list"] = true;
}



$tdatadepartamentos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadepartamentos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadepartamentos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadepartamentos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadepartamentos[".printFriendly"] = true;
}



$tdatadepartamentos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadepartamentos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadepartamentos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadepartamentos[".isUseAjaxSuggest"] = false;



			

$tdatadepartamentos[".ajaxCodeSnippetAdded"] = false;

$tdatadepartamentos[".buttonsAdded"] = false;

$tdatadepartamentos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadepartamentos[".isUseTimeForSearch"] = false;


$tdatadepartamentos[".badgeColor"] = "B22222";


$tdatadepartamentos[".allSearchFields"] = array();
$tdatadepartamentos[".filterFields"] = array();
$tdatadepartamentos[".requiredSearchFields"] = array();

$tdatadepartamentos[".googleLikeFields"] = array();
$tdatadepartamentos[".googleLikeFields"][] = "region";
$tdatadepartamentos[".googleLikeFields"][] = "c_digo_dane_del_departamento";
$tdatadepartamentos[".googleLikeFields"][] = "departamento";




$tdatadepartamentos[".printerPageOrientation"] = 0;
$tdatadepartamentos[".nPrinterPageScale"] = 100;

$tdatadepartamentos[".nPrinterSplitRecords"] = 40;

$tdatadepartamentos[".geocodingEnabled"] = false;










$tdatadepartamentos[".pageSize"] = 20;

$tdatadepartamentos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadepartamentos[".strOrderBy"] = $tstrOrderBy;

$tdatadepartamentos[".orderindexes"] = array();


$tdatadepartamentos[".sqlHead"] = "";
$tdatadepartamentos[".sqlFrom"] = "";
$tdatadepartamentos[".sqlWhereExpr"] = "";
$tdatadepartamentos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadepartamentos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadepartamentos[".arrGroupsPerPage"] = $arrGPP;

$tdatadepartamentos[".highlightSearchResults"] = true;

$tableKeysdepartamentos = array();
$tableKeysdepartamentos[] = "c_digo_dane_del_departamento";
$tdatadepartamentos[".Keys"] = $tableKeysdepartamentos;


$tdatadepartamentos[".hideMobileList"] = array();




//	region
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "region";
	$fdata["GoodName"] = "region";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Departamentos","region");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "*/region";

	
		$fdata["FullName"] = "region";

	
	
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


	$tdatadepartamentos["region"] = $fdata;
		$tdatadepartamentos[".searchableFields"][] = "region";
//	c_digo_dane_del_departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "c_digo_dane_del_departamento";
	$fdata["GoodName"] = "c_digo_dane_del_departamento";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Departamentos","c_digo_dane_del_departamento");
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


	$tdatadepartamentos["c_digo_dane_del_departamento"] = $fdata;
		$tdatadepartamentos[".searchableFields"][] = "c_digo_dane_del_departamento";
//	departamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "departamento";
	$fdata["GoodName"] = "departamento";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Departamentos","departamento");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "*/departamento";

	
		$fdata["FullName"] = "departamento";

	
	
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


	$tdatadepartamentos["departamento"] = $fdata;
		$tdatadepartamentos[".searchableFields"][] = "departamento";


$tables_data["Departamentos"]=&$tdatadepartamentos;
$field_labels["Departamentos"] = &$fieldLabelsdepartamentos;
$fieldToolTips["Departamentos"] = &$fieldToolTipsdepartamentos;
$placeHolders["Departamentos"] = &$placeHoldersdepartamentos;
$page_titles["Departamentos"] = &$pageTitlesdepartamentos;


changeTextControlsToDate( "Departamentos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Departamentos"] = array();
//	Ciudades
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Ciudades";
		$detailsParam["dOriginalTable"] = "Ciudades";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "ciudades";
	$detailsParam["dCaptionTable"] = GetTableCaption("Ciudades");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Departamentos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Departamentos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Departamentos"][$dIndex]["masterKeys"][]="c_digo_dane_del_departamento";

				$detailsTablesData["Departamentos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Departamentos"][$dIndex]["detailKeys"][]="c_digo_dane_del_departamento";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Departamentos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/departamentos_ops.php" ) );



	
										;

			

$tdatadepartamentos[".sqlquery"] = $queryData_departamentos;



$tdatadepartamentos[".hasEvents"] = false;

?>