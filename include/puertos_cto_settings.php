<?php
$tdatapuertos_cto = array();
$tdatapuertos_cto[".searchableFields"] = array();
$tdatapuertos_cto[".ShortName"] = "puertos_cto";
$tdatapuertos_cto[".OwnerID"] = "";
$tdatapuertos_cto[".OriginalTable"] = "puertos_cto";


$tdatapuertos_cto[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapuertos_cto[".originalPagesByType"] = $tdatapuertos_cto[".pagesByType"];
$tdatapuertos_cto[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapuertos_cto[".originalPages"] = $tdatapuertos_cto[".pages"];
$tdatapuertos_cto[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapuertos_cto[".originalDefaultPages"] = $tdatapuertos_cto[".defaultPages"];

//	field labels
$fieldLabelspuertos_cto = array();
$fieldToolTipspuertos_cto = array();
$pageTitlespuertos_cto = array();
$placeHolderspuertos_cto = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspuertos_cto["Spanish"] = array();
	$fieldToolTipspuertos_cto["Spanish"] = array();
	$placeHolderspuertos_cto["Spanish"] = array();
	$pageTitlespuertos_cto["Spanish"] = array();
	$fieldLabelspuertos_cto["Spanish"]["Id_puertos"] = "Id Puertos";
	$fieldToolTipspuertos_cto["Spanish"]["Id_puertos"] = "";
	$placeHolderspuertos_cto["Spanish"]["Id_puertos"] = "";
	$fieldLabelspuertos_cto["Spanish"]["Puerto"] = "Puerto";
	$fieldToolTipspuertos_cto["Spanish"]["Puerto"] = "";
	$placeHolderspuertos_cto["Spanish"]["Puerto"] = "";
	$fieldLabelspuertos_cto["Spanish"]["Cto"] = "Cto";
	$fieldToolTipspuertos_cto["Spanish"]["Cto"] = "";
	$placeHolderspuertos_cto["Spanish"]["Cto"] = "";
	$fieldLabelspuertos_cto["Spanish"]["Spliter"] = "Spliter";
	$fieldToolTipspuertos_cto["Spanish"]["Spliter"] = "";
	$placeHolderspuertos_cto["Spanish"]["Spliter"] = "";
	$fieldLabelspuertos_cto["Spanish"]["Cable"] = "Cable";
	$fieldToolTipspuertos_cto["Spanish"]["Cable"] = "";
	$placeHolderspuertos_cto["Spanish"]["Cable"] = "";
	$fieldLabelspuertos_cto["Spanish"]["Localidad"] = "Localidad";
	$fieldToolTipspuertos_cto["Spanish"]["Localidad"] = "";
	$placeHolderspuertos_cto["Spanish"]["Localidad"] = "";
	$fieldLabelspuertos_cto["Spanish"]["Cedula"] = "Cedula";
	$fieldToolTipspuertos_cto["Spanish"]["Cedula"] = "";
	$placeHolderspuertos_cto["Spanish"]["Cedula"] = "";
	$fieldLabelspuertos_cto["Spanish"]["Ocupado"] = "Ocupado";
	$fieldToolTipspuertos_cto["Spanish"]["Ocupado"] = "";
	$placeHolderspuertos_cto["Spanish"]["Ocupado"] = "";
	if (count($fieldToolTipspuertos_cto["Spanish"]))
		$tdatapuertos_cto[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspuertos_cto["English"] = array();
	$fieldToolTipspuertos_cto["English"] = array();
	$placeHolderspuertos_cto["English"] = array();
	$pageTitlespuertos_cto["English"] = array();
	$fieldLabelspuertos_cto["English"]["Id_puertos"] = "Id Puertos";
	$fieldToolTipspuertos_cto["English"]["Id_puertos"] = "";
	$placeHolderspuertos_cto["English"]["Id_puertos"] = "";
	$fieldLabelspuertos_cto["English"]["Puerto"] = "Puerto";
	$fieldToolTipspuertos_cto["English"]["Puerto"] = "";
	$placeHolderspuertos_cto["English"]["Puerto"] = "";
	$fieldLabelspuertos_cto["English"]["Cto"] = "Cto";
	$fieldToolTipspuertos_cto["English"]["Cto"] = "";
	$placeHolderspuertos_cto["English"]["Cto"] = "";
	$fieldLabelspuertos_cto["English"]["Spliter"] = "Spliter";
	$fieldToolTipspuertos_cto["English"]["Spliter"] = "";
	$placeHolderspuertos_cto["English"]["Spliter"] = "";
	$fieldLabelspuertos_cto["English"]["Cable"] = "Cable";
	$fieldToolTipspuertos_cto["English"]["Cable"] = "";
	$placeHolderspuertos_cto["English"]["Cable"] = "";
	$fieldLabelspuertos_cto["English"]["Localidad"] = "Localidad";
	$fieldToolTipspuertos_cto["English"]["Localidad"] = "";
	$placeHolderspuertos_cto["English"]["Localidad"] = "";
	$fieldLabelspuertos_cto["English"]["Cedula"] = "Cedula";
	$fieldToolTipspuertos_cto["English"]["Cedula"] = "";
	$placeHolderspuertos_cto["English"]["Cedula"] = "";
	$fieldLabelspuertos_cto["English"]["Ocupado"] = "Ocupado";
	$fieldToolTipspuertos_cto["English"]["Ocupado"] = "";
	$placeHolderspuertos_cto["English"]["Ocupado"] = "";
	if (count($fieldToolTipspuertos_cto["English"]))
		$tdatapuertos_cto[".isUseToolTips"] = true;
}


	$tdatapuertos_cto[".NCSearch"] = true;



$tdatapuertos_cto[".shortTableName"] = "puertos_cto";
$tdatapuertos_cto[".nSecOptions"] = 0;

$tdatapuertos_cto[".mainTableOwnerID"] = "";
$tdatapuertos_cto[".entityType"] = 0;
$tdatapuertos_cto[".connId"] = "isp_eisa_at_localhost";


$tdatapuertos_cto[".strOriginalTableName"] = "puertos_cto";

	



$tdatapuertos_cto[".showAddInPopup"] = false;

$tdatapuertos_cto[".showEditInPopup"] = false;

$tdatapuertos_cto[".showViewInPopup"] = false;

$tdatapuertos_cto[".listAjax"] = false;
//	temporary
//$tdatapuertos_cto[".listAjax"] = false;

	$tdatapuertos_cto[".audit"] = false;

	$tdatapuertos_cto[".locking"] = false;


$pages = $tdatapuertos_cto[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapuertos_cto[".edit"] = true;
	$tdatapuertos_cto[".afterEditAction"] = 1;
	$tdatapuertos_cto[".closePopupAfterEdit"] = 1;
	$tdatapuertos_cto[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapuertos_cto[".add"] = true;
$tdatapuertos_cto[".afterAddAction"] = 1;
$tdatapuertos_cto[".closePopupAfterAdd"] = 1;
$tdatapuertos_cto[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapuertos_cto[".list"] = true;
}



$tdatapuertos_cto[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapuertos_cto[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapuertos_cto[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapuertos_cto[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapuertos_cto[".printFriendly"] = true;
}



$tdatapuertos_cto[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapuertos_cto[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapuertos_cto[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapuertos_cto[".isUseAjaxSuggest"] = true;



									

$tdatapuertos_cto[".ajaxCodeSnippetAdded"] = false;

$tdatapuertos_cto[".buttonsAdded"] = false;

$tdatapuertos_cto[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapuertos_cto[".isUseTimeForSearch"] = false;


$tdatapuertos_cto[".badgeColor"] = "6b8e23";


$tdatapuertos_cto[".allSearchFields"] = array();
$tdatapuertos_cto[".filterFields"] = array();
$tdatapuertos_cto[".requiredSearchFields"] = array();

$tdatapuertos_cto[".googleLikeFields"] = array();
$tdatapuertos_cto[".googleLikeFields"][] = "Id_puertos";
$tdatapuertos_cto[".googleLikeFields"][] = "Puerto";
$tdatapuertos_cto[".googleLikeFields"][] = "Cto";
$tdatapuertos_cto[".googleLikeFields"][] = "Spliter";
$tdatapuertos_cto[".googleLikeFields"][] = "Cable";
$tdatapuertos_cto[".googleLikeFields"][] = "Localidad";
$tdatapuertos_cto[".googleLikeFields"][] = "Cedula";
$tdatapuertos_cto[".googleLikeFields"][] = "Ocupado";



$tdatapuertos_cto[".tableType"] = "list";

$tdatapuertos_cto[".printerPageOrientation"] = 0;
$tdatapuertos_cto[".nPrinterPageScale"] = 100;

$tdatapuertos_cto[".nPrinterSplitRecords"] = 40;

$tdatapuertos_cto[".geocodingEnabled"] = false;










$tdatapuertos_cto[".pageSize"] = 20;

$tdatapuertos_cto[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapuertos_cto[".strOrderBy"] = $tstrOrderBy;

$tdatapuertos_cto[".orderindexes"] = array();


$tdatapuertos_cto[".sqlHead"] = "SELECT `Id_puertos`,  `Puerto`,  `Cto`,  `Spliter`,  `Cable`,  `Localidad`,  `Cedula`,  `Ocupado`";
$tdatapuertos_cto[".sqlFrom"] = "FROM `puertos_cto`";
$tdatapuertos_cto[".sqlWhereExpr"] = "";
$tdatapuertos_cto[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapuertos_cto[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapuertos_cto[".arrGroupsPerPage"] = $arrGPP;

$tdatapuertos_cto[".highlightSearchResults"] = true;

$tableKeyspuertos_cto = array();
$tableKeyspuertos_cto[] = "Id_puertos";
$tdatapuertos_cto[".Keys"] = $tableKeyspuertos_cto;


$tdatapuertos_cto[".hideMobileList"] = array();




//	Id_puertos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id_puertos";
	$fdata["GoodName"] = "Id_puertos";
	$fdata["ownerTable"] = "puertos_cto";
	$fdata["Label"] = GetFieldLabel("puertos_cto","Id_puertos");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "Id_puertos";

		$fdata["sourceSingle"] = "Id_puertos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Id_puertos`";

	
	
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


	$tdatapuertos_cto["Id_puertos"] = $fdata;
		$tdatapuertos_cto[".searchableFields"][] = "Id_puertos";
//	Puerto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Puerto";
	$fdata["GoodName"] = "Puerto";
	$fdata["ownerTable"] = "puertos_cto";
	$fdata["Label"] = GetFieldLabel("puertos_cto","Puerto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Puerto";

		$fdata["sourceSingle"] = "Puerto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Puerto`";

	
	
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
	$edata["LookupTable"] = "numero_puertos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "numero_puerto";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "numero_puerto";

	

	
	$edata["LookupOrderBy"] = "id_numero_puertos";

	
	
	
	

	
	
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


	$tdatapuertos_cto["Puerto"] = $fdata;
		$tdatapuertos_cto[".searchableFields"][] = "Puerto";
//	Cto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Cto";
	$fdata["GoodName"] = "Cto";
	$fdata["ownerTable"] = "puertos_cto";
	$fdata["Label"] = GetFieldLabel("puertos_cto","Cto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Cto";

		$fdata["sourceSingle"] = "Cto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Cto`";

	
	
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


	$tdatapuertos_cto["Cto"] = $fdata;
		$tdatapuertos_cto[".searchableFields"][] = "Cto";
//	Spliter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Spliter";
	$fdata["GoodName"] = "Spliter";
	$fdata["ownerTable"] = "puertos_cto";
	$fdata["Label"] = GetFieldLabel("puertos_cto","Spliter");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Spliter";

		$fdata["sourceSingle"] = "Spliter";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Spliter`";

	
	
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


	$tdatapuertos_cto["Spliter"] = $fdata;
		$tdatapuertos_cto[".searchableFields"][] = "Spliter";
//	Cable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Cable";
	$fdata["GoodName"] = "Cable";
	$fdata["ownerTable"] = "puertos_cto";
	$fdata["Label"] = GetFieldLabel("puertos_cto","Cable");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Cable";

		$fdata["sourceSingle"] = "Cable";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Cable`";

	
	
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


	$tdatapuertos_cto["Cable"] = $fdata;
		$tdatapuertos_cto[".searchableFields"][] = "Cable";
//	Localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Localidad";
	$fdata["GoodName"] = "Localidad";
	$fdata["ownerTable"] = "puertos_cto";
	$fdata["Label"] = GetFieldLabel("puertos_cto","Localidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Localidad";

		$fdata["sourceSingle"] = "Localidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Localidad`";

	
	
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


	$tdatapuertos_cto["Localidad"] = $fdata;
		$tdatapuertos_cto[".searchableFields"][] = "Localidad";
//	Cedula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Cedula";
	$fdata["GoodName"] = "Cedula";
	$fdata["ownerTable"] = "puertos_cto";
	$fdata["Label"] = GetFieldLabel("puertos_cto","Cedula");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Cedula";

		$fdata["sourceSingle"] = "Cedula";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Cedula`";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatapuertos_cto["Cedula"] = $fdata;
		$tdatapuertos_cto[".searchableFields"][] = "Cedula";
//	Ocupado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Ocupado";
	$fdata["GoodName"] = "Ocupado";
	$fdata["ownerTable"] = "puertos_cto";
	$fdata["Label"] = GetFieldLabel("puertos_cto","Ocupado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Ocupado";

		$fdata["sourceSingle"] = "Ocupado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Ocupado`";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "SI";
	$edata["LookupValues"][] = "NO";

	
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


	$tdatapuertos_cto["Ocupado"] = $fdata;
		$tdatapuertos_cto[".searchableFields"][] = "Ocupado";


$tables_data["puertos_cto"]=&$tdatapuertos_cto;
$field_labels["puertos_cto"] = &$fieldLabelspuertos_cto;
$fieldToolTips["puertos_cto"] = &$fieldToolTipspuertos_cto;
$placeHolders["puertos_cto"] = &$placeHolderspuertos_cto;
$page_titles["puertos_cto"] = &$pageTitlespuertos_cto;


changeTextControlsToDate( "puertos_cto" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["puertos_cto"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["puertos_cto"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="ctos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="ctos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "ctos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["puertos_cto"][0] = $masterParams;
				$masterTablesData["puertos_cto"][0]["masterKeys"] = array();
	$masterTablesData["puertos_cto"][0]["masterKeys"][]="Cto";
				$masterTablesData["puertos_cto"][0]["masterKeys"][]="Spliter";
				$masterTablesData["puertos_cto"][0]["masterKeys"][]="Cable";
				$masterTablesData["puertos_cto"][0]["masterKeys"][]="Localidad";
				$masterTablesData["puertos_cto"][0]["detailKeys"] = array();
	$masterTablesData["puertos_cto"][0]["detailKeys"][]="Cto";
				$masterTablesData["puertos_cto"][0]["detailKeys"][]="Spliter";
				$masterTablesData["puertos_cto"][0]["detailKeys"][]="Cable";
				$masterTablesData["puertos_cto"][0]["detailKeys"][]="Localidad";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="ctos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Mapa_General";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "mapa_general";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["puertos_cto"][1] = $masterParams;
				$masterTablesData["puertos_cto"][1]["masterKeys"] = array();
	$masterTablesData["puertos_cto"][1]["masterKeys"][]="Cto";
				$masterTablesData["puertos_cto"][1]["masterKeys"][]="Localidad";
				$masterTablesData["puertos_cto"][1]["masterKeys"][]="Cable";
				$masterTablesData["puertos_cto"][1]["masterKeys"][]="Spliter";
				$masterTablesData["puertos_cto"][1]["detailKeys"] = array();
	$masterTablesData["puertos_cto"][1]["detailKeys"][]="Cto";
				$masterTablesData["puertos_cto"][1]["detailKeys"][]="Localidad";
				$masterTablesData["puertos_cto"][1]["detailKeys"][]="Cable";
				$masterTablesData["puertos_cto"][1]["detailKeys"][]="Spliter";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_puertos_cto()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`Id_puertos`,  `Puerto`,  `Cto`,  `Spliter`,  `Cable`,  `Localidad`,  `Cedula`,  `Ocupado`";
$proto0["m_strFrom"] = "FROM `puertos_cto`";
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
	"m_strName" => "Id_puertos",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "puertos_cto"
));

$proto6["m_sql"] = "`Id_puertos`";
$proto6["m_srcTableName"] = "puertos_cto";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Puerto",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "puertos_cto"
));

$proto8["m_sql"] = "`Puerto`";
$proto8["m_srcTableName"] = "puertos_cto";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Cto",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "puertos_cto"
));

$proto10["m_sql"] = "`Cto`";
$proto10["m_srcTableName"] = "puertos_cto";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Spliter",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "puertos_cto"
));

$proto12["m_sql"] = "`Spliter`";
$proto12["m_srcTableName"] = "puertos_cto";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Cable",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "puertos_cto"
));

$proto14["m_sql"] = "`Cable`";
$proto14["m_srcTableName"] = "puertos_cto";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Localidad",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "puertos_cto"
));

$proto16["m_sql"] = "`Localidad`";
$proto16["m_srcTableName"] = "puertos_cto";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Cedula",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "puertos_cto"
));

$proto18["m_sql"] = "`Cedula`";
$proto18["m_srcTableName"] = "puertos_cto";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Ocupado",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "puertos_cto"
));

$proto20["m_sql"] = "`Ocupado`";
$proto20["m_srcTableName"] = "puertos_cto";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "puertos_cto";
$proto23["m_srcTableName"] = "puertos_cto";
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
$proto22["m_sql"] = "`puertos_cto`";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "puertos_cto";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="puertos_cto";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_puertos_cto = createSqlQuery_puertos_cto();


	
		;

								

$tdatapuertos_cto[".sqlquery"] = $queryData_puertos_cto;



$tdatapuertos_cto[".hasEvents"] = false;

?>