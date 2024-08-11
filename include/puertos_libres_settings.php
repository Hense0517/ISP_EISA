<?php
$tdatapuertos_libres = array();
$tdatapuertos_libres[".searchableFields"] = array();
$tdatapuertos_libres[".ShortName"] = "puertos_libres";
$tdatapuertos_libres[".OwnerID"] = "";
$tdatapuertos_libres[".OriginalTable"] = "puertos_cto";


$tdatapuertos_libres[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapuertos_libres[".originalPagesByType"] = $tdatapuertos_libres[".pagesByType"];
$tdatapuertos_libres[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapuertos_libres[".originalPages"] = $tdatapuertos_libres[".pages"];
$tdatapuertos_libres[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapuertos_libres[".originalDefaultPages"] = $tdatapuertos_libres[".defaultPages"];

//	field labels
$fieldLabelspuertos_libres = array();
$fieldToolTipspuertos_libres = array();
$pageTitlespuertos_libres = array();
$placeHolderspuertos_libres = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspuertos_libres["Spanish"] = array();
	$fieldToolTipspuertos_libres["Spanish"] = array();
	$placeHolderspuertos_libres["Spanish"] = array();
	$pageTitlespuertos_libres["Spanish"] = array();
	$fieldLabelspuertos_libres["Spanish"]["Id_puertos"] = "Id Puertos";
	$fieldToolTipspuertos_libres["Spanish"]["Id_puertos"] = "";
	$placeHolderspuertos_libres["Spanish"]["Id_puertos"] = "";
	$fieldLabelspuertos_libres["Spanish"]["Puerto"] = "Puerto";
	$fieldToolTipspuertos_libres["Spanish"]["Puerto"] = "";
	$placeHolderspuertos_libres["Spanish"]["Puerto"] = "";
	$fieldLabelspuertos_libres["Spanish"]["Cto"] = "Cto";
	$fieldToolTipspuertos_libres["Spanish"]["Cto"] = "";
	$placeHolderspuertos_libres["Spanish"]["Cto"] = "";
	$fieldLabelspuertos_libres["Spanish"]["Spliter"] = "Spliter";
	$fieldToolTipspuertos_libres["Spanish"]["Spliter"] = "";
	$placeHolderspuertos_libres["Spanish"]["Spliter"] = "";
	$fieldLabelspuertos_libres["Spanish"]["Cable"] = "Cable";
	$fieldToolTipspuertos_libres["Spanish"]["Cable"] = "";
	$placeHolderspuertos_libres["Spanish"]["Cable"] = "";
	$fieldLabelspuertos_libres["Spanish"]["Localidad"] = "Localidad";
	$fieldToolTipspuertos_libres["Spanish"]["Localidad"] = "";
	$placeHolderspuertos_libres["Spanish"]["Localidad"] = "";
	$fieldLabelspuertos_libres["Spanish"]["Cedula"] = "Cedula";
	$fieldToolTipspuertos_libres["Spanish"]["Cedula"] = "";
	$placeHolderspuertos_libres["Spanish"]["Cedula"] = "";
	$fieldLabelspuertos_libres["Spanish"]["Activo"] = "Activo";
	$fieldToolTipspuertos_libres["Spanish"]["Activo"] = "";
	$placeHolderspuertos_libres["Spanish"]["Activo"] = "";
	$fieldLabelspuertos_libres["Spanish"]["Ocupado"] = "Ocupado";
	$fieldToolTipspuertos_libres["Spanish"]["Ocupado"] = "";
	$placeHolderspuertos_libres["Spanish"]["Ocupado"] = "";
	if (count($fieldToolTipspuertos_libres["Spanish"]))
		$tdatapuertos_libres[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspuertos_libres["English"] = array();
	$fieldToolTipspuertos_libres["English"] = array();
	$placeHolderspuertos_libres["English"] = array();
	$pageTitlespuertos_libres["English"] = array();
	$fieldLabelspuertos_libres["English"]["Id_puertos"] = "Id Puertos";
	$fieldToolTipspuertos_libres["English"]["Id_puertos"] = "";
	$placeHolderspuertos_libres["English"]["Id_puertos"] = "";
	$fieldLabelspuertos_libres["English"]["Puerto"] = "Puerto";
	$fieldToolTipspuertos_libres["English"]["Puerto"] = "";
	$placeHolderspuertos_libres["English"]["Puerto"] = "";
	$fieldLabelspuertos_libres["English"]["Cto"] = "Cto";
	$fieldToolTipspuertos_libres["English"]["Cto"] = "";
	$placeHolderspuertos_libres["English"]["Cto"] = "";
	$fieldLabelspuertos_libres["English"]["Spliter"] = "Spliter";
	$fieldToolTipspuertos_libres["English"]["Spliter"] = "";
	$placeHolderspuertos_libres["English"]["Spliter"] = "";
	$fieldLabelspuertos_libres["English"]["Cable"] = "Cable";
	$fieldToolTipspuertos_libres["English"]["Cable"] = "";
	$placeHolderspuertos_libres["English"]["Cable"] = "";
	$fieldLabelspuertos_libres["English"]["Localidad"] = "Localidad";
	$fieldToolTipspuertos_libres["English"]["Localidad"] = "";
	$placeHolderspuertos_libres["English"]["Localidad"] = "";
	$fieldLabelspuertos_libres["English"]["Cedula"] = "Cedula";
	$fieldToolTipspuertos_libres["English"]["Cedula"] = "";
	$placeHolderspuertos_libres["English"]["Cedula"] = "";
	$fieldLabelspuertos_libres["English"]["Activo"] = "Activo";
	$fieldToolTipspuertos_libres["English"]["Activo"] = "";
	$placeHolderspuertos_libres["English"]["Activo"] = "";
	$fieldLabelspuertos_libres["English"]["Ocupado"] = "Ocupado";
	$fieldToolTipspuertos_libres["English"]["Ocupado"] = "";
	$placeHolderspuertos_libres["English"]["Ocupado"] = "";
	if (count($fieldToolTipspuertos_libres["English"]))
		$tdatapuertos_libres[".isUseToolTips"] = true;
}


	$tdatapuertos_libres[".NCSearch"] = true;



$tdatapuertos_libres[".shortTableName"] = "puertos_libres";
$tdatapuertos_libres[".nSecOptions"] = 0;

$tdatapuertos_libres[".mainTableOwnerID"] = "";
$tdatapuertos_libres[".entityType"] = 1;
$tdatapuertos_libres[".connId"] = "isp_eisa_at_localhost";


$tdatapuertos_libres[".strOriginalTableName"] = "puertos_cto";

	



$tdatapuertos_libres[".showAddInPopup"] = false;

$tdatapuertos_libres[".showEditInPopup"] = false;

$tdatapuertos_libres[".showViewInPopup"] = false;

$tdatapuertos_libres[".listAjax"] = false;
//	temporary
//$tdatapuertos_libres[".listAjax"] = false;

	$tdatapuertos_libres[".audit"] = false;

	$tdatapuertos_libres[".locking"] = false;


$pages = $tdatapuertos_libres[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapuertos_libres[".edit"] = true;
	$tdatapuertos_libres[".afterEditAction"] = 1;
	$tdatapuertos_libres[".closePopupAfterEdit"] = 1;
	$tdatapuertos_libres[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapuertos_libres[".add"] = true;
$tdatapuertos_libres[".afterAddAction"] = 1;
$tdatapuertos_libres[".closePopupAfterAdd"] = 1;
$tdatapuertos_libres[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapuertos_libres[".list"] = true;
}



$tdatapuertos_libres[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapuertos_libres[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapuertos_libres[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapuertos_libres[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapuertos_libres[".printFriendly"] = true;
}



$tdatapuertos_libres[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapuertos_libres[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapuertos_libres[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapuertos_libres[".isUseAjaxSuggest"] = true;



						

$tdatapuertos_libres[".ajaxCodeSnippetAdded"] = false;

$tdatapuertos_libres[".buttonsAdded"] = false;

$tdatapuertos_libres[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapuertos_libres[".isUseTimeForSearch"] = false;


$tdatapuertos_libres[".badgeColor"] = "6da5c8";


$tdatapuertos_libres[".allSearchFields"] = array();
$tdatapuertos_libres[".filterFields"] = array();
$tdatapuertos_libres[".requiredSearchFields"] = array();

$tdatapuertos_libres[".googleLikeFields"] = array();
$tdatapuertos_libres[".googleLikeFields"][] = "Id_puertos";
$tdatapuertos_libres[".googleLikeFields"][] = "Puerto";
$tdatapuertos_libres[".googleLikeFields"][] = "Cto";
$tdatapuertos_libres[".googleLikeFields"][] = "Spliter";
$tdatapuertos_libres[".googleLikeFields"][] = "Cable";
$tdatapuertos_libres[".googleLikeFields"][] = "Localidad";
$tdatapuertos_libres[".googleLikeFields"][] = "Cedula";
$tdatapuertos_libres[".googleLikeFields"][] = "Activo";
$tdatapuertos_libres[".googleLikeFields"][] = "Ocupado";



$tdatapuertos_libres[".tableType"] = "list";

$tdatapuertos_libres[".printerPageOrientation"] = 0;
$tdatapuertos_libres[".nPrinterPageScale"] = 100;

$tdatapuertos_libres[".nPrinterSplitRecords"] = 40;

$tdatapuertos_libres[".geocodingEnabled"] = false;










$tdatapuertos_libres[".pageSize"] = 20;

$tdatapuertos_libres[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapuertos_libres[".strOrderBy"] = $tstrOrderBy;

$tdatapuertos_libres[".orderindexes"] = array();


$tdatapuertos_libres[".sqlHead"] = "SELECT `Id_puertos`,  `Puerto`,  `Cto`,  `Spliter`,  `Cable`,  `Localidad`,  `Cedula`,  `Activo`,  `Ocupado`";
$tdatapuertos_libres[".sqlFrom"] = "FROM `puertos_cto`";
$tdatapuertos_libres[".sqlWhereExpr"] = "(`Ocupado` ='No')";
$tdatapuertos_libres[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapuertos_libres[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapuertos_libres[".arrGroupsPerPage"] = $arrGPP;

$tdatapuertos_libres[".highlightSearchResults"] = true;

$tableKeyspuertos_libres = array();
$tableKeyspuertos_libres[] = "Id_puertos";
$tdatapuertos_libres[".Keys"] = $tableKeyspuertos_libres;


$tdatapuertos_libres[".hideMobileList"] = array();




//	Id_puertos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id_puertos";
	$fdata["GoodName"] = "Id_puertos";
	$fdata["ownerTable"] = "puertos_cto";
	$fdata["Label"] = GetFieldLabel("Puertos_Libres","Id_puertos");
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


	$tdatapuertos_libres["Id_puertos"] = $fdata;
		$tdatapuertos_libres[".searchableFields"][] = "Id_puertos";
//	Puerto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Puerto";
	$fdata["GoodName"] = "Puerto";
	$fdata["ownerTable"] = "puertos_cto";
	$fdata["Label"] = GetFieldLabel("Puertos_Libres","Puerto");
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


	$tdatapuertos_libres["Puerto"] = $fdata;
		$tdatapuertos_libres[".searchableFields"][] = "Puerto";
//	Cto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Cto";
	$fdata["GoodName"] = "Cto";
	$fdata["ownerTable"] = "puertos_cto";
	$fdata["Label"] = GetFieldLabel("Puertos_Libres","Cto");
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


	$tdatapuertos_libres["Cto"] = $fdata;
		$tdatapuertos_libres[".searchableFields"][] = "Cto";
//	Spliter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Spliter";
	$fdata["GoodName"] = "Spliter";
	$fdata["ownerTable"] = "puertos_cto";
	$fdata["Label"] = GetFieldLabel("Puertos_Libres","Spliter");
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


	$tdatapuertos_libres["Spliter"] = $fdata;
		$tdatapuertos_libres[".searchableFields"][] = "Spliter";
//	Cable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Cable";
	$fdata["GoodName"] = "Cable";
	$fdata["ownerTable"] = "puertos_cto";
	$fdata["Label"] = GetFieldLabel("Puertos_Libres","Cable");
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


	$tdatapuertos_libres["Cable"] = $fdata;
		$tdatapuertos_libres[".searchableFields"][] = "Cable";
//	Localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Localidad";
	$fdata["GoodName"] = "Localidad";
	$fdata["ownerTable"] = "puertos_cto";
	$fdata["Label"] = GetFieldLabel("Puertos_Libres","Localidad");
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


	$tdatapuertos_libres["Localidad"] = $fdata;
		$tdatapuertos_libres[".searchableFields"][] = "Localidad";
//	Cedula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Cedula";
	$fdata["GoodName"] = "Cedula";
	$fdata["ownerTable"] = "puertos_cto";
	$fdata["Label"] = GetFieldLabel("Puertos_Libres","Cedula");
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


	$tdatapuertos_libres["Cedula"] = $fdata;
		$tdatapuertos_libres[".searchableFields"][] = "Cedula";
//	Activo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Activo";
	$fdata["GoodName"] = "Activo";
	$fdata["ownerTable"] = "puertos_cto";
	$fdata["Label"] = GetFieldLabel("Puertos_Libres","Activo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Activo";

		$fdata["sourceSingle"] = "Activo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Activo`";

	
	
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


	$tdatapuertos_libres["Activo"] = $fdata;
		$tdatapuertos_libres[".searchableFields"][] = "Activo";
//	Ocupado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Ocupado";
	$fdata["GoodName"] = "Ocupado";
	$fdata["ownerTable"] = "puertos_cto";
	$fdata["Label"] = GetFieldLabel("Puertos_Libres","Ocupado");
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


	$tdatapuertos_libres["Ocupado"] = $fdata;
		$tdatapuertos_libres[".searchableFields"][] = "Ocupado";


$tables_data["Puertos_Libres"]=&$tdatapuertos_libres;
$field_labels["Puertos_Libres"] = &$fieldLabelspuertos_libres;
$fieldToolTips["Puertos_Libres"] = &$fieldToolTipspuertos_libres;
$placeHolders["Puertos_Libres"] = &$placeHolderspuertos_libres;
$page_titles["Puertos_Libres"] = &$pageTitlespuertos_libres;


changeTextControlsToDate( "Puertos_Libres" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Puertos_Libres"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Puertos_Libres"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="ctos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Mapa Ventas";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "mapa_ventas";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Puertos_Libres"][0] = $masterParams;
				$masterTablesData["Puertos_Libres"][0]["masterKeys"] = array();
	$masterTablesData["Puertos_Libres"][0]["masterKeys"][]="Cto";
				$masterTablesData["Puertos_Libres"][0]["masterKeys"][]="Spliter";
				$masterTablesData["Puertos_Libres"][0]["masterKeys"][]="Cable";
				$masterTablesData["Puertos_Libres"][0]["masterKeys"][]="Localidad";
				$masterTablesData["Puertos_Libres"][0]["detailKeys"] = array();
	$masterTablesData["Puertos_Libres"][0]["detailKeys"][]="Cto";
				$masterTablesData["Puertos_Libres"][0]["detailKeys"][]="Spliter";
				$masterTablesData["Puertos_Libres"][0]["detailKeys"][]="Cable";
				$masterTablesData["Puertos_Libres"][0]["detailKeys"][]="Localidad";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_puertos_libres()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`Id_puertos`,  `Puerto`,  `Cto`,  `Spliter`,  `Cable`,  `Localidad`,  `Cedula`,  `Activo`,  `Ocupado`";
$proto0["m_strFrom"] = "FROM `puertos_cto`";
$proto0["m_strWhere"] = "(`Ocupado` ='No')";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "`Ocupado` ='No'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Ocupado",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "Puertos_Libres"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "='No'";
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
	"m_srcTableName" => "Puertos_Libres"
));

$proto6["m_sql"] = "`Id_puertos`";
$proto6["m_srcTableName"] = "Puertos_Libres";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Puerto",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "Puertos_Libres"
));

$proto8["m_sql"] = "`Puerto`";
$proto8["m_srcTableName"] = "Puertos_Libres";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Cto",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "Puertos_Libres"
));

$proto10["m_sql"] = "`Cto`";
$proto10["m_srcTableName"] = "Puertos_Libres";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Spliter",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "Puertos_Libres"
));

$proto12["m_sql"] = "`Spliter`";
$proto12["m_srcTableName"] = "Puertos_Libres";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Cable",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "Puertos_Libres"
));

$proto14["m_sql"] = "`Cable`";
$proto14["m_srcTableName"] = "Puertos_Libres";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Localidad",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "Puertos_Libres"
));

$proto16["m_sql"] = "`Localidad`";
$proto16["m_srcTableName"] = "Puertos_Libres";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Cedula",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "Puertos_Libres"
));

$proto18["m_sql"] = "`Cedula`";
$proto18["m_srcTableName"] = "Puertos_Libres";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Activo",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "Puertos_Libres"
));

$proto20["m_sql"] = "`Activo`";
$proto20["m_srcTableName"] = "Puertos_Libres";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Ocupado",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "Puertos_Libres"
));

$proto22["m_sql"] = "`Ocupado`";
$proto22["m_srcTableName"] = "Puertos_Libres";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "puertos_cto";
$proto25["m_srcTableName"] = "Puertos_Libres";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "Id_puertos";
$proto25["m_columns"][] = "Puerto";
$proto25["m_columns"][] = "Cto";
$proto25["m_columns"][] = "Spliter";
$proto25["m_columns"][] = "Cable";
$proto25["m_columns"][] = "Localidad";
$proto25["m_columns"][] = "Cedula";
$proto25["m_columns"][] = "Activo";
$proto25["m_columns"][] = "Ocupado";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "`puertos_cto`";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "Puertos_Libres";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Puertos_Libres";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_puertos_libres = createSqlQuery_puertos_libres();


	
		;

									

$tdatapuertos_libres[".sqlquery"] = $queryData_puertos_libres;



$tdatapuertos_libres[".hasEvents"] = false;

?>