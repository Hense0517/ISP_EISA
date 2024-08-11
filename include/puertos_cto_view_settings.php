<?php
$tdatapuertos_cto_view = array();
$tdatapuertos_cto_view[".searchableFields"] = array();
$tdatapuertos_cto_view[".ShortName"] = "puertos_cto_view";
$tdatapuertos_cto_view[".OwnerID"] = "";
$tdatapuertos_cto_view[".OriginalTable"] = "puertos_cto_view";


$tdatapuertos_cto_view[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatapuertos_cto_view[".originalPagesByType"] = $tdatapuertos_cto_view[".pagesByType"];
$tdatapuertos_cto_view[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatapuertos_cto_view[".originalPages"] = $tdatapuertos_cto_view[".pages"];
$tdatapuertos_cto_view[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatapuertos_cto_view[".originalDefaultPages"] = $tdatapuertos_cto_view[".defaultPages"];

//	field labels
$fieldLabelspuertos_cto_view = array();
$fieldToolTipspuertos_cto_view = array();
$pageTitlespuertos_cto_view = array();
$placeHolderspuertos_cto_view = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspuertos_cto_view["Spanish"] = array();
	$fieldToolTipspuertos_cto_view["Spanish"] = array();
	$placeHolderspuertos_cto_view["Spanish"] = array();
	$pageTitlespuertos_cto_view["Spanish"] = array();
	$fieldLabelspuertos_cto_view["Spanish"]["Puerto"] = "Puerto";
	$fieldToolTipspuertos_cto_view["Spanish"]["Puerto"] = "";
	$placeHolderspuertos_cto_view["Spanish"]["Puerto"] = "";
	$fieldLabelspuertos_cto_view["Spanish"]["Cto"] = "Cto";
	$fieldToolTipspuertos_cto_view["Spanish"]["Cto"] = "";
	$placeHolderspuertos_cto_view["Spanish"]["Cto"] = "";
	$fieldLabelspuertos_cto_view["Spanish"]["Spliter"] = "Spliter";
	$fieldToolTipspuertos_cto_view["Spanish"]["Spliter"] = "";
	$placeHolderspuertos_cto_view["Spanish"]["Spliter"] = "";
	$fieldLabelspuertos_cto_view["Spanish"]["Cable"] = "Cable";
	$fieldToolTipspuertos_cto_view["Spanish"]["Cable"] = "";
	$placeHolderspuertos_cto_view["Spanish"]["Cable"] = "";
	$fieldLabelspuertos_cto_view["Spanish"]["Localidad"] = "Localidad";
	$fieldToolTipspuertos_cto_view["Spanish"]["Localidad"] = "";
	$placeHolderspuertos_cto_view["Spanish"]["Localidad"] = "";
	$fieldLabelspuertos_cto_view["Spanish"]["Cedula"] = "Cedula";
	$fieldToolTipspuertos_cto_view["Spanish"]["Cedula"] = "";
	$placeHolderspuertos_cto_view["Spanish"]["Cedula"] = "";
	$fieldLabelspuertos_cto_view["Spanish"]["Activo"] = "Activo";
	$fieldToolTipspuertos_cto_view["Spanish"]["Activo"] = "";
	$placeHolderspuertos_cto_view["Spanish"]["Activo"] = "";
	$fieldLabelspuertos_cto_view["Spanish"]["Ocupado"] = "Ocupado";
	$fieldToolTipspuertos_cto_view["Spanish"]["Ocupado"] = "";
	$placeHolderspuertos_cto_view["Spanish"]["Ocupado"] = "";
	if (count($fieldToolTipspuertos_cto_view["Spanish"]))
		$tdatapuertos_cto_view[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspuertos_cto_view["English"] = array();
	$fieldToolTipspuertos_cto_view["English"] = array();
	$placeHolderspuertos_cto_view["English"] = array();
	$pageTitlespuertos_cto_view["English"] = array();
	$fieldLabelspuertos_cto_view["English"]["Puerto"] = "Puerto";
	$fieldToolTipspuertos_cto_view["English"]["Puerto"] = "";
	$placeHolderspuertos_cto_view["English"]["Puerto"] = "";
	$fieldLabelspuertos_cto_view["English"]["Cto"] = "Cto";
	$fieldToolTipspuertos_cto_view["English"]["Cto"] = "";
	$placeHolderspuertos_cto_view["English"]["Cto"] = "";
	$fieldLabelspuertos_cto_view["English"]["Spliter"] = "Spliter";
	$fieldToolTipspuertos_cto_view["English"]["Spliter"] = "";
	$placeHolderspuertos_cto_view["English"]["Spliter"] = "";
	$fieldLabelspuertos_cto_view["English"]["Cable"] = "Cable";
	$fieldToolTipspuertos_cto_view["English"]["Cable"] = "";
	$placeHolderspuertos_cto_view["English"]["Cable"] = "";
	$fieldLabelspuertos_cto_view["English"]["Localidad"] = "Localidad";
	$fieldToolTipspuertos_cto_view["English"]["Localidad"] = "";
	$placeHolderspuertos_cto_view["English"]["Localidad"] = "";
	$fieldLabelspuertos_cto_view["English"]["Cedula"] = "Cedula";
	$fieldToolTipspuertos_cto_view["English"]["Cedula"] = "";
	$placeHolderspuertos_cto_view["English"]["Cedula"] = "";
	$fieldLabelspuertos_cto_view["English"]["Activo"] = "Activo";
	$fieldToolTipspuertos_cto_view["English"]["Activo"] = "";
	$placeHolderspuertos_cto_view["English"]["Activo"] = "";
	$fieldLabelspuertos_cto_view["English"]["Ocupado"] = "Ocupado";
	$fieldToolTipspuertos_cto_view["English"]["Ocupado"] = "";
	$placeHolderspuertos_cto_view["English"]["Ocupado"] = "";
	if (count($fieldToolTipspuertos_cto_view["English"]))
		$tdatapuertos_cto_view[".isUseToolTips"] = true;
}


	$tdatapuertos_cto_view[".NCSearch"] = true;



$tdatapuertos_cto_view[".shortTableName"] = "puertos_cto_view";
$tdatapuertos_cto_view[".nSecOptions"] = 0;

$tdatapuertos_cto_view[".mainTableOwnerID"] = "";
$tdatapuertos_cto_view[".entityType"] = 6;
$tdatapuertos_cto_view[".connId"] = "isp_eisa_at_localhost";


$tdatapuertos_cto_view[".strOriginalTableName"] = "puertos_cto_view";

	



$tdatapuertos_cto_view[".showAddInPopup"] = false;

$tdatapuertos_cto_view[".showEditInPopup"] = false;

$tdatapuertos_cto_view[".showViewInPopup"] = false;

$tdatapuertos_cto_view[".listAjax"] = false;
//	temporary
//$tdatapuertos_cto_view[".listAjax"] = false;

	$tdatapuertos_cto_view[".audit"] = false;

	$tdatapuertos_cto_view[".locking"] = false;


$pages = $tdatapuertos_cto_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapuertos_cto_view[".edit"] = true;
	$tdatapuertos_cto_view[".afterEditAction"] = 1;
	$tdatapuertos_cto_view[".closePopupAfterEdit"] = 1;
	$tdatapuertos_cto_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapuertos_cto_view[".add"] = true;
$tdatapuertos_cto_view[".afterAddAction"] = 1;
$tdatapuertos_cto_view[".closePopupAfterAdd"] = 1;
$tdatapuertos_cto_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapuertos_cto_view[".list"] = true;
}



$tdatapuertos_cto_view[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapuertos_cto_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapuertos_cto_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapuertos_cto_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapuertos_cto_view[".printFriendly"] = true;
}



$tdatapuertos_cto_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapuertos_cto_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapuertos_cto_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapuertos_cto_view[".isUseAjaxSuggest"] = false;





$tdatapuertos_cto_view[".ajaxCodeSnippetAdded"] = false;

$tdatapuertos_cto_view[".buttonsAdded"] = false;

$tdatapuertos_cto_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapuertos_cto_view[".isUseTimeForSearch"] = false;


$tdatapuertos_cto_view[".badgeColor"] = "4682B4";


$tdatapuertos_cto_view[".allSearchFields"] = array();
$tdatapuertos_cto_view[".filterFields"] = array();
$tdatapuertos_cto_view[".requiredSearchFields"] = array();

$tdatapuertos_cto_view[".googleLikeFields"] = array();
$tdatapuertos_cto_view[".googleLikeFields"][] = "Puerto";
$tdatapuertos_cto_view[".googleLikeFields"][] = "Cto";
$tdatapuertos_cto_view[".googleLikeFields"][] = "Spliter";
$tdatapuertos_cto_view[".googleLikeFields"][] = "Cable";
$tdatapuertos_cto_view[".googleLikeFields"][] = "Localidad";
$tdatapuertos_cto_view[".googleLikeFields"][] = "Cedula";
$tdatapuertos_cto_view[".googleLikeFields"][] = "Activo";
$tdatapuertos_cto_view[".googleLikeFields"][] = "Ocupado";




$tdatapuertos_cto_view[".printerPageOrientation"] = 0;
$tdatapuertos_cto_view[".nPrinterPageScale"] = 100;

$tdatapuertos_cto_view[".nPrinterSplitRecords"] = 40;

$tdatapuertos_cto_view[".geocodingEnabled"] = false;










$tdatapuertos_cto_view[".pageSize"] = 20;

$tdatapuertos_cto_view[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapuertos_cto_view[".strOrderBy"] = $tstrOrderBy;

$tdatapuertos_cto_view[".orderindexes"] = array();


$tdatapuertos_cto_view[".sqlHead"] = "";
$tdatapuertos_cto_view[".sqlFrom"] = "";
$tdatapuertos_cto_view[".sqlWhereExpr"] = "";
$tdatapuertos_cto_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapuertos_cto_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapuertos_cto_view[".arrGroupsPerPage"] = $arrGPP;

$tdatapuertos_cto_view[".highlightSearchResults"] = true;

$tableKeyspuertos_cto_view = array();
$tableKeyspuertos_cto_view[] = "Puerto";
$tdatapuertos_cto_view[".Keys"] = $tableKeyspuertos_cto_view;


$tdatapuertos_cto_view[".hideMobileList"] = array();




//	Puerto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Puerto";
	$fdata["GoodName"] = "Puerto";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("puertos_cto_view","Puerto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Puerto";

	
		$fdata["FullName"] = "Puerto";

	
	
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


	$tdatapuertos_cto_view["Puerto"] = $fdata;
		$tdatapuertos_cto_view[".searchableFields"][] = "Puerto";
//	Cto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Cto";
	$fdata["GoodName"] = "Cto";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("puertos_cto_view","Cto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Cto";

	
		$fdata["FullName"] = "Cto";

	
	
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


	$tdatapuertos_cto_view["Cto"] = $fdata;
		$tdatapuertos_cto_view[".searchableFields"][] = "Cto";
//	Spliter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Spliter";
	$fdata["GoodName"] = "Spliter";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("puertos_cto_view","Spliter");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Spliter";

	
		$fdata["FullName"] = "Spliter";

	
	
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


	$tdatapuertos_cto_view["Spliter"] = $fdata;
		$tdatapuertos_cto_view[".searchableFields"][] = "Spliter";
//	Cable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Cable";
	$fdata["GoodName"] = "Cable";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("puertos_cto_view","Cable");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Cable";

	
		$fdata["FullName"] = "Cable";

	
	
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


	$tdatapuertos_cto_view["Cable"] = $fdata;
		$tdatapuertos_cto_view[".searchableFields"][] = "Cable";
//	Localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Localidad";
	$fdata["GoodName"] = "Localidad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("puertos_cto_view","Localidad");
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


	$tdatapuertos_cto_view["Localidad"] = $fdata;
		$tdatapuertos_cto_view[".searchableFields"][] = "Localidad";
//	Cedula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Cedula";
	$fdata["GoodName"] = "Cedula";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("puertos_cto_view","Cedula");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Cedula";

	
		$fdata["FullName"] = "Cedula";

	
	
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


	$tdatapuertos_cto_view["Cedula"] = $fdata;
		$tdatapuertos_cto_view[".searchableFields"][] = "Cedula";
//	Activo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Activo";
	$fdata["GoodName"] = "Activo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("puertos_cto_view","Activo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Activo";

	
		$fdata["FullName"] = "Activo";

	
	
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


	$tdatapuertos_cto_view["Activo"] = $fdata;
		$tdatapuertos_cto_view[".searchableFields"][] = "Activo";
//	Ocupado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Ocupado";
	$fdata["GoodName"] = "Ocupado";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("puertos_cto_view","Ocupado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Ocupado";

	
		$fdata["FullName"] = "Ocupado";

	
	
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


	$tdatapuertos_cto_view["Ocupado"] = $fdata;
		$tdatapuertos_cto_view[".searchableFields"][] = "Ocupado";


$tables_data["puertos_cto_view"]=&$tdatapuertos_cto_view;
$field_labels["puertos_cto_view"] = &$fieldLabelspuertos_cto_view;
$fieldToolTips["puertos_cto_view"] = &$fieldToolTipspuertos_cto_view;
$placeHolders["puertos_cto_view"] = &$placeHolderspuertos_cto_view;
$page_titles["puertos_cto_view"] = &$pageTitlespuertos_cto_view;


changeTextControlsToDate( "puertos_cto_view" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["puertos_cto_view"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["puertos_cto_view"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/puertos_cto_view_ops.php" ) );



	
		;

								

$tdatapuertos_cto_view[".sqlquery"] = $queryData_puertos_cto_view;



include_once(getabspath("include/puertos_cto_view_events.php"));
$tdatapuertos_cto_view[".hasEvents"] = true;

?>