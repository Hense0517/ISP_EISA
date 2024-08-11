<?php
$tdataapi_puertos = array();
$tdataapi_puertos[".searchableFields"] = array();
$tdataapi_puertos[".ShortName"] = "api_puertos";
$tdataapi_puertos[".OwnerID"] = "";
$tdataapi_puertos[".OriginalTable"] = "Api_puertos";


$tdataapi_puertos[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataapi_puertos[".originalPagesByType"] = $tdataapi_puertos[".pagesByType"];
$tdataapi_puertos[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataapi_puertos[".originalPages"] = $tdataapi_puertos[".pages"];
$tdataapi_puertos[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataapi_puertos[".originalDefaultPages"] = $tdataapi_puertos[".defaultPages"];

//	field labels
$fieldLabelsapi_puertos = array();
$fieldToolTipsapi_puertos = array();
$pageTitlesapi_puertos = array();
$placeHoldersapi_puertos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsapi_puertos["Spanish"] = array();
	$fieldToolTipsapi_puertos["Spanish"] = array();
	$placeHoldersapi_puertos["Spanish"] = array();
	$pageTitlesapi_puertos["Spanish"] = array();
	$fieldLabelsapi_puertos["Spanish"]["Id_puertos"] = "Id Puertos";
	$fieldToolTipsapi_puertos["Spanish"]["Id_puertos"] = "";
	$placeHoldersapi_puertos["Spanish"]["Id_puertos"] = "";
	$fieldLabelsapi_puertos["Spanish"]["Puerto"] = "Puerto";
	$fieldToolTipsapi_puertos["Spanish"]["Puerto"] = "";
	$placeHoldersapi_puertos["Spanish"]["Puerto"] = "";
	$fieldLabelsapi_puertos["Spanish"]["Cto"] = "Cto";
	$fieldToolTipsapi_puertos["Spanish"]["Cto"] = "";
	$placeHoldersapi_puertos["Spanish"]["Cto"] = "";
	$fieldLabelsapi_puertos["Spanish"]["Spliter"] = "Spliter";
	$fieldToolTipsapi_puertos["Spanish"]["Spliter"] = "";
	$placeHoldersapi_puertos["Spanish"]["Spliter"] = "";
	$fieldLabelsapi_puertos["Spanish"]["Cable"] = "Cable";
	$fieldToolTipsapi_puertos["Spanish"]["Cable"] = "";
	$placeHoldersapi_puertos["Spanish"]["Cable"] = "";
	$fieldLabelsapi_puertos["Spanish"]["Localidad"] = "Localidad";
	$fieldToolTipsapi_puertos["Spanish"]["Localidad"] = "";
	$placeHoldersapi_puertos["Spanish"]["Localidad"] = "";
	$fieldLabelsapi_puertos["Spanish"]["Cedula"] = "Cedula";
	$fieldToolTipsapi_puertos["Spanish"]["Cedula"] = "";
	$placeHoldersapi_puertos["Spanish"]["Cedula"] = "";
	$fieldLabelsapi_puertos["Spanish"]["Activo"] = "Activo";
	$fieldToolTipsapi_puertos["Spanish"]["Activo"] = "";
	$placeHoldersapi_puertos["Spanish"]["Activo"] = "";
	$fieldLabelsapi_puertos["Spanish"]["Ocupado"] = "Ocupado";
	$fieldToolTipsapi_puertos["Spanish"]["Ocupado"] = "";
	$placeHoldersapi_puertos["Spanish"]["Ocupado"] = "";
	if (count($fieldToolTipsapi_puertos["Spanish"]))
		$tdataapi_puertos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsapi_puertos["English"] = array();
	$fieldToolTipsapi_puertos["English"] = array();
	$placeHoldersapi_puertos["English"] = array();
	$pageTitlesapi_puertos["English"] = array();
	$fieldLabelsapi_puertos["English"]["Id_puertos"] = "Id Puertos";
	$fieldToolTipsapi_puertos["English"]["Id_puertos"] = "";
	$placeHoldersapi_puertos["English"]["Id_puertos"] = "";
	$fieldLabelsapi_puertos["English"]["Puerto"] = "Puerto";
	$fieldToolTipsapi_puertos["English"]["Puerto"] = "";
	$placeHoldersapi_puertos["English"]["Puerto"] = "";
	$fieldLabelsapi_puertos["English"]["Cto"] = "Cto";
	$fieldToolTipsapi_puertos["English"]["Cto"] = "";
	$placeHoldersapi_puertos["English"]["Cto"] = "";
	$fieldLabelsapi_puertos["English"]["Spliter"] = "Spliter";
	$fieldToolTipsapi_puertos["English"]["Spliter"] = "";
	$placeHoldersapi_puertos["English"]["Spliter"] = "";
	$fieldLabelsapi_puertos["English"]["Cable"] = "Cable";
	$fieldToolTipsapi_puertos["English"]["Cable"] = "";
	$placeHoldersapi_puertos["English"]["Cable"] = "";
	$fieldLabelsapi_puertos["English"]["Localidad"] = "Localidad";
	$fieldToolTipsapi_puertos["English"]["Localidad"] = "";
	$placeHoldersapi_puertos["English"]["Localidad"] = "";
	$fieldLabelsapi_puertos["English"]["Cedula"] = "Cedula";
	$fieldToolTipsapi_puertos["English"]["Cedula"] = "";
	$placeHoldersapi_puertos["English"]["Cedula"] = "";
	$fieldLabelsapi_puertos["English"]["Activo"] = "Activo";
	$fieldToolTipsapi_puertos["English"]["Activo"] = "";
	$placeHoldersapi_puertos["English"]["Activo"] = "";
	$fieldLabelsapi_puertos["English"]["Ocupado"] = "Ocupado";
	$fieldToolTipsapi_puertos["English"]["Ocupado"] = "";
	$placeHoldersapi_puertos["English"]["Ocupado"] = "";
	if (count($fieldToolTipsapi_puertos["English"]))
		$tdataapi_puertos[".isUseToolTips"] = true;
}


	$tdataapi_puertos[".NCSearch"] = true;



$tdataapi_puertos[".shortTableName"] = "api_puertos";
$tdataapi_puertos[".nSecOptions"] = 0;

$tdataapi_puertos[".mainTableOwnerID"] = "";
$tdataapi_puertos[".entityType"] = 6;
$tdataapi_puertos[".connId"] = "isp_eisa_at_localhost";


$tdataapi_puertos[".strOriginalTableName"] = "Api_puertos";

	



$tdataapi_puertos[".showAddInPopup"] = false;

$tdataapi_puertos[".showEditInPopup"] = false;

$tdataapi_puertos[".showViewInPopup"] = false;

$tdataapi_puertos[".listAjax"] = false;
//	temporary
//$tdataapi_puertos[".listAjax"] = false;

	$tdataapi_puertos[".audit"] = false;

	$tdataapi_puertos[".locking"] = false;


$pages = $tdataapi_puertos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataapi_puertos[".edit"] = true;
	$tdataapi_puertos[".afterEditAction"] = 1;
	$tdataapi_puertos[".closePopupAfterEdit"] = 1;
	$tdataapi_puertos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataapi_puertos[".add"] = true;
$tdataapi_puertos[".afterAddAction"] = 1;
$tdataapi_puertos[".closePopupAfterAdd"] = 1;
$tdataapi_puertos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataapi_puertos[".list"] = true;
}



$tdataapi_puertos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataapi_puertos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataapi_puertos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataapi_puertos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataapi_puertos[".printFriendly"] = true;
}



$tdataapi_puertos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataapi_puertos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataapi_puertos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataapi_puertos[".isUseAjaxSuggest"] = false;





$tdataapi_puertos[".ajaxCodeSnippetAdded"] = false;

$tdataapi_puertos[".buttonsAdded"] = false;

$tdataapi_puertos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataapi_puertos[".isUseTimeForSearch"] = false;


$tdataapi_puertos[".badgeColor"] = "6B8E23";


$tdataapi_puertos[".allSearchFields"] = array();
$tdataapi_puertos[".filterFields"] = array();
$tdataapi_puertos[".requiredSearchFields"] = array();

$tdataapi_puertos[".googleLikeFields"] = array();
$tdataapi_puertos[".googleLikeFields"][] = "Id_puertos";
$tdataapi_puertos[".googleLikeFields"][] = "Puerto";
$tdataapi_puertos[".googleLikeFields"][] = "Cto";
$tdataapi_puertos[".googleLikeFields"][] = "Spliter";
$tdataapi_puertos[".googleLikeFields"][] = "Cable";
$tdataapi_puertos[".googleLikeFields"][] = "Localidad";
$tdataapi_puertos[".googleLikeFields"][] = "Cedula";
$tdataapi_puertos[".googleLikeFields"][] = "Activo";
$tdataapi_puertos[".googleLikeFields"][] = "Ocupado";




$tdataapi_puertos[".printerPageOrientation"] = 0;
$tdataapi_puertos[".nPrinterPageScale"] = 100;

$tdataapi_puertos[".nPrinterSplitRecords"] = 40;

$tdataapi_puertos[".geocodingEnabled"] = false;










$tdataapi_puertos[".pageSize"] = 20;

$tdataapi_puertos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataapi_puertos[".strOrderBy"] = $tstrOrderBy;

$tdataapi_puertos[".orderindexes"] = array();


$tdataapi_puertos[".sqlHead"] = "";
$tdataapi_puertos[".sqlFrom"] = "";
$tdataapi_puertos[".sqlWhereExpr"] = "";
$tdataapi_puertos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataapi_puertos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataapi_puertos[".arrGroupsPerPage"] = $arrGPP;

$tdataapi_puertos[".highlightSearchResults"] = true;

$tableKeysapi_puertos = array();
$tableKeysapi_puertos[] = "Id_puertos";
$tableKeysapi_puertos[] = "Puerto";
$tableKeysapi_puertos[] = "Cto";
$tableKeysapi_puertos[] = "Spliter";
$tableKeysapi_puertos[] = "Cable";
$tableKeysapi_puertos[] = "Localidad";
$tdataapi_puertos[".Keys"] = $tableKeysapi_puertos;


$tdataapi_puertos[".hideMobileList"] = array();




//	Id_puertos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id_puertos";
	$fdata["GoodName"] = "Id_puertos";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Api_puertos","Id_puertos");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Id_puertos";

	
		$fdata["FullName"] = "Id_puertos";

	
	
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


	$tdataapi_puertos["Id_puertos"] = $fdata;
		$tdataapi_puertos[".searchableFields"][] = "Id_puertos";
//	Puerto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Puerto";
	$fdata["GoodName"] = "Puerto";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Api_puertos","Puerto");
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


	$tdataapi_puertos["Puerto"] = $fdata;
		$tdataapi_puertos[".searchableFields"][] = "Puerto";
//	Cto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Cto";
	$fdata["GoodName"] = "Cto";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Api_puertos","Cto");
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


	$tdataapi_puertos["Cto"] = $fdata;
		$tdataapi_puertos[".searchableFields"][] = "Cto";
//	Spliter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Spliter";
	$fdata["GoodName"] = "Spliter";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Api_puertos","Spliter");
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


	$tdataapi_puertos["Spliter"] = $fdata;
		$tdataapi_puertos[".searchableFields"][] = "Spliter";
//	Cable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Cable";
	$fdata["GoodName"] = "Cable";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Api_puertos","Cable");
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


	$tdataapi_puertos["Cable"] = $fdata;
		$tdataapi_puertos[".searchableFields"][] = "Cable";
//	Localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Localidad";
	$fdata["GoodName"] = "Localidad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Api_puertos","Localidad");
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


	$tdataapi_puertos["Localidad"] = $fdata;
		$tdataapi_puertos[".searchableFields"][] = "Localidad";
//	Cedula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Cedula";
	$fdata["GoodName"] = "Cedula";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Api_puertos","Cedula");
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


	$tdataapi_puertos["Cedula"] = $fdata;
		$tdataapi_puertos[".searchableFields"][] = "Cedula";
//	Activo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Activo";
	$fdata["GoodName"] = "Activo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Api_puertos","Activo");
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


	$tdataapi_puertos["Activo"] = $fdata;
		$tdataapi_puertos[".searchableFields"][] = "Activo";
//	Ocupado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Ocupado";
	$fdata["GoodName"] = "Ocupado";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Api_puertos","Ocupado");
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


	$tdataapi_puertos["Ocupado"] = $fdata;
		$tdataapi_puertos[".searchableFields"][] = "Ocupado";


$tables_data["Api_puertos"]=&$tdataapi_puertos;
$field_labels["Api_puertos"] = &$fieldLabelsapi_puertos;
$fieldToolTips["Api_puertos"] = &$fieldToolTipsapi_puertos;
$placeHolders["Api_puertos"] = &$placeHoldersapi_puertos;
$page_titles["Api_puertos"] = &$pageTitlesapi_puertos;


changeTextControlsToDate( "Api_puertos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Api_puertos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Api_puertos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/api_puertos_ops.php" ) );



	
		;

									

$tdataapi_puertos[".sqlquery"] = $queryData_api_puertos;



$tdataapi_puertos[".hasEvents"] = false;

?>