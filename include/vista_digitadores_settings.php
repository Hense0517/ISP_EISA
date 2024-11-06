<?php
$tdatavista_digitadores = array();
$tdatavista_digitadores[".searchableFields"] = array();
$tdatavista_digitadores[".ShortName"] = "vista_digitadores";
$tdatavista_digitadores[".OwnerID"] = "";
$tdatavista_digitadores[".OriginalTable"] = "ctos";


$tdatavista_digitadores[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatavista_digitadores[".originalPagesByType"] = $tdatavista_digitadores[".pagesByType"];
$tdatavista_digitadores[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatavista_digitadores[".originalPages"] = $tdatavista_digitadores[".pages"];
$tdatavista_digitadores[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatavista_digitadores[".originalDefaultPages"] = $tdatavista_digitadores[".defaultPages"];

//	field labels
$fieldLabelsvista_digitadores = array();
$fieldToolTipsvista_digitadores = array();
$pageTitlesvista_digitadores = array();
$placeHoldersvista_digitadores = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsvista_digitadores["Spanish"] = array();
	$fieldToolTipsvista_digitadores["Spanish"] = array();
	$placeHoldersvista_digitadores["Spanish"] = array();
	$pageTitlesvista_digitadores["Spanish"] = array();
	$fieldLabelsvista_digitadores["Spanish"]["id_Ctos"] = "Id Ctos";
	$fieldToolTipsvista_digitadores["Spanish"]["id_Ctos"] = "";
	$placeHoldersvista_digitadores["Spanish"]["id_Ctos"] = "";
	$fieldLabelsvista_digitadores["Spanish"]["Cto"] = "Cto";
	$fieldToolTipsvista_digitadores["Spanish"]["Cto"] = "";
	$placeHoldersvista_digitadores["Spanish"]["Cto"] = "";
	$fieldLabelsvista_digitadores["Spanish"]["Latitud"] = "Latitud";
	$fieldToolTipsvista_digitadores["Spanish"]["Latitud"] = "";
	$placeHoldersvista_digitadores["Spanish"]["Latitud"] = "";
	$fieldLabelsvista_digitadores["Spanish"]["Longitud"] = "Longitud";
	$fieldToolTipsvista_digitadores["Spanish"]["Longitud"] = "";
	$placeHoldersvista_digitadores["Spanish"]["Longitud"] = "";
	$fieldLabelsvista_digitadores["Spanish"]["Spliter"] = "Spliter";
	$fieldToolTipsvista_digitadores["Spanish"]["Spliter"] = "";
	$placeHoldersvista_digitadores["Spanish"]["Spliter"] = "";
	$fieldLabelsvista_digitadores["Spanish"]["Cable"] = "Cable";
	$fieldToolTipsvista_digitadores["Spanish"]["Cable"] = "";
	$placeHoldersvista_digitadores["Spanish"]["Cable"] = "";
	$fieldLabelsvista_digitadores["Spanish"]["Localidad"] = "Localidad";
	$fieldToolTipsvista_digitadores["Spanish"]["Localidad"] = "";
	$placeHoldersvista_digitadores["Spanish"]["Localidad"] = "";
	$fieldLabelsvista_digitadores["Spanish"]["Lat"] = "Lat";
	$fieldToolTipsvista_digitadores["Spanish"]["Lat"] = "";
	$placeHoldersvista_digitadores["Spanish"]["Lat"] = "";
	$fieldLabelsvista_digitadores["Spanish"]["Lng"] = "Lng";
	$fieldToolTipsvista_digitadores["Spanish"]["Lng"] = "";
	$placeHoldersvista_digitadores["Spanish"]["Lng"] = "";
	$fieldLabelsvista_digitadores["Spanish"]["Ubicacion"] = "Ubicacion";
	$fieldToolTipsvista_digitadores["Spanish"]["Ubicacion"] = "";
	$placeHoldersvista_digitadores["Spanish"]["Ubicacion"] = "";
	$fieldLabelsvista_digitadores["Spanish"]["id_spliter"] = "Id Spliter";
	$fieldToolTipsvista_digitadores["Spanish"]["id_spliter"] = "";
	$placeHoldersvista_digitadores["Spanish"]["id_spliter"] = "";
	$fieldLabelsvista_digitadores["Spanish"]["displayonmap"] = "Displayonmap";
	$fieldToolTipsvista_digitadores["Spanish"]["displayonmap"] = "";
	$placeHoldersvista_digitadores["Spanish"]["displayonmap"] = "";
	if (count($fieldToolTipsvista_digitadores["Spanish"]))
		$tdatavista_digitadores[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvista_digitadores["English"] = array();
	$fieldToolTipsvista_digitadores["English"] = array();
	$placeHoldersvista_digitadores["English"] = array();
	$pageTitlesvista_digitadores["English"] = array();
	$fieldLabelsvista_digitadores["English"]["id_Ctos"] = "Id Ctos";
	$fieldToolTipsvista_digitadores["English"]["id_Ctos"] = "";
	$placeHoldersvista_digitadores["English"]["id_Ctos"] = "";
	$fieldLabelsvista_digitadores["English"]["Cto"] = "Cto";
	$fieldToolTipsvista_digitadores["English"]["Cto"] = "";
	$placeHoldersvista_digitadores["English"]["Cto"] = "";
	$fieldLabelsvista_digitadores["English"]["Latitud"] = "Latitud";
	$fieldToolTipsvista_digitadores["English"]["Latitud"] = "";
	$placeHoldersvista_digitadores["English"]["Latitud"] = "";
	$fieldLabelsvista_digitadores["English"]["Longitud"] = "Longitud";
	$fieldToolTipsvista_digitadores["English"]["Longitud"] = "";
	$placeHoldersvista_digitadores["English"]["Longitud"] = "";
	$fieldLabelsvista_digitadores["English"]["Spliter"] = "Spliter";
	$fieldToolTipsvista_digitadores["English"]["Spliter"] = "";
	$placeHoldersvista_digitadores["English"]["Spliter"] = "";
	$fieldLabelsvista_digitadores["English"]["Cable"] = "Cable";
	$fieldToolTipsvista_digitadores["English"]["Cable"] = "";
	$placeHoldersvista_digitadores["English"]["Cable"] = "";
	$fieldLabelsvista_digitadores["English"]["Localidad"] = "Localidad";
	$fieldToolTipsvista_digitadores["English"]["Localidad"] = "";
	$placeHoldersvista_digitadores["English"]["Localidad"] = "";
	$fieldLabelsvista_digitadores["English"]["Lat"] = "Lat";
	$fieldToolTipsvista_digitadores["English"]["Lat"] = "";
	$placeHoldersvista_digitadores["English"]["Lat"] = "";
	$fieldLabelsvista_digitadores["English"]["Lng"] = "Lng";
	$fieldToolTipsvista_digitadores["English"]["Lng"] = "";
	$placeHoldersvista_digitadores["English"]["Lng"] = "";
	$fieldLabelsvista_digitadores["English"]["Ubicacion"] = "Ubicacion";
	$fieldToolTipsvista_digitadores["English"]["Ubicacion"] = "";
	$placeHoldersvista_digitadores["English"]["Ubicacion"] = "";
	$fieldLabelsvista_digitadores["English"]["id_spliter"] = "Id Spliter";
	$fieldToolTipsvista_digitadores["English"]["id_spliter"] = "";
	$placeHoldersvista_digitadores["English"]["id_spliter"] = "";
	$fieldLabelsvista_digitadores["English"]["displayonmap"] = "Displayonmap";
	$fieldToolTipsvista_digitadores["English"]["displayonmap"] = "";
	$placeHoldersvista_digitadores["English"]["displayonmap"] = "";
	if (count($fieldToolTipsvista_digitadores["English"]))
		$tdatavista_digitadores[".isUseToolTips"] = true;
}


	$tdatavista_digitadores[".NCSearch"] = true;



$tdatavista_digitadores[".shortTableName"] = "vista_digitadores";
$tdatavista_digitadores[".nSecOptions"] = 0;

$tdatavista_digitadores[".mainTableOwnerID"] = "";
$tdatavista_digitadores[".entityType"] = 1;
$tdatavista_digitadores[".connId"] = "isp_eisa_at_localhost";


$tdatavista_digitadores[".strOriginalTableName"] = "ctos";

	



$tdatavista_digitadores[".showAddInPopup"] = false;

$tdatavista_digitadores[".showEditInPopup"] = false;

$tdatavista_digitadores[".showViewInPopup"] = false;

$tdatavista_digitadores[".listAjax"] = false;
//	temporary
//$tdatavista_digitadores[".listAjax"] = false;

	$tdatavista_digitadores[".audit"] = false;

	$tdatavista_digitadores[".locking"] = false;


$pages = $tdatavista_digitadores[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavista_digitadores[".edit"] = true;
	$tdatavista_digitadores[".afterEditAction"] = 1;
	$tdatavista_digitadores[".closePopupAfterEdit"] = 1;
	$tdatavista_digitadores[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavista_digitadores[".add"] = true;
$tdatavista_digitadores[".afterAddAction"] = 1;
$tdatavista_digitadores[".closePopupAfterAdd"] = 1;
$tdatavista_digitadores[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavista_digitadores[".list"] = true;
}



$tdatavista_digitadores[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavista_digitadores[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavista_digitadores[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavista_digitadores[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavista_digitadores[".printFriendly"] = true;
}



$tdatavista_digitadores[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavista_digitadores[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavista_digitadores[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavista_digitadores[".isUseAjaxSuggest"] = true;



						

$tdatavista_digitadores[".ajaxCodeSnippetAdded"] = false;

$tdatavista_digitadores[".buttonsAdded"] = false;

$tdatavista_digitadores[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavista_digitadores[".isUseTimeForSearch"] = false;

$tdatavista_digitadores[".isUseFieldsMaps"] = true;

$tdatavista_digitadores[".badgeColor"] = "9acd32";


$tdatavista_digitadores[".allSearchFields"] = array();
$tdatavista_digitadores[".filterFields"] = array();
$tdatavista_digitadores[".requiredSearchFields"] = array();

$tdatavista_digitadores[".googleLikeFields"] = array();
$tdatavista_digitadores[".googleLikeFields"][] = "id_Ctos";
$tdatavista_digitadores[".googleLikeFields"][] = "Cto";
$tdatavista_digitadores[".googleLikeFields"][] = "Latitud";
$tdatavista_digitadores[".googleLikeFields"][] = "Longitud";
$tdatavista_digitadores[".googleLikeFields"][] = "Spliter";
$tdatavista_digitadores[".googleLikeFields"][] = "Cable";
$tdatavista_digitadores[".googleLikeFields"][] = "Localidad";
$tdatavista_digitadores[".googleLikeFields"][] = "Lat";
$tdatavista_digitadores[".googleLikeFields"][] = "Lng";
$tdatavista_digitadores[".googleLikeFields"][] = "Ubicacion";
$tdatavista_digitadores[".googleLikeFields"][] = "id_spliter";
$tdatavista_digitadores[".googleLikeFields"][] = "displayonmap";



$tdatavista_digitadores[".tableType"] = "list";

$tdatavista_digitadores[".printerPageOrientation"] = 0;
$tdatavista_digitadores[".nPrinterPageScale"] = 100;

$tdatavista_digitadores[".nPrinterSplitRecords"] = 40;

$tdatavista_digitadores[".geocodingEnabled"] = false;










$tdatavista_digitadores[".pageSize"] = 15000;

$tdatavista_digitadores[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatavista_digitadores[".strOrderBy"] = $tstrOrderBy;

$tdatavista_digitadores[".orderindexes"] = array();


$tdatavista_digitadores[".sqlHead"] = "SELECT `id_Ctos`,  `Cto`,  `Latitud`,  `Longitud`,  `Spliter`,  `Cable`,  `Localidad`,  `Lat`,  `Lng`,  `Ubicacion`,  `id_spliter`,  concat(Cto, '\\n', Spliter, '\\n', Cable, '\\n', Localidad) AS `displayonmap`";
$tdatavista_digitadores[".sqlFrom"] = "FROM `ctos`";
$tdatavista_digitadores[".sqlWhereExpr"] = "";
$tdatavista_digitadores[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = -1;
$tdatavista_digitadores[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavista_digitadores[".arrGroupsPerPage"] = $arrGPP;

$tdatavista_digitadores[".highlightSearchResults"] = true;

$tableKeysvista_digitadores = array();
$tableKeysvista_digitadores[] = "id_Ctos";
$tdatavista_digitadores[".Keys"] = $tableKeysvista_digitadores;


$tdatavista_digitadores[".hideMobileList"] = array();




//	id_Ctos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_Ctos";
	$fdata["GoodName"] = "id_Ctos";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Vista_Digitadores","id_Ctos");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_Ctos";

		$fdata["sourceSingle"] = "id_Ctos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`id_Ctos`";

	
	
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


	$tdatavista_digitadores["id_Ctos"] = $fdata;
		$tdatavista_digitadores[".searchableFields"][] = "id_Ctos";
//	Cto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Cto";
	$fdata["GoodName"] = "Cto";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Vista_Digitadores","Cto");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "numeros_cto";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_numeros_ctos";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Numero_cto";

	

	
	$edata["LookupOrderBy"] = "id_numeros_ctos";

	
	
	
	

	
	
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


	$tdatavista_digitadores["Cto"] = $fdata;
		$tdatavista_digitadores[".searchableFields"][] = "Cto";
//	Latitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Latitud";
	$fdata["GoodName"] = "Latitud";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Vista_Digitadores","Latitud");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Latitud";

		$fdata["sourceSingle"] = "Latitud";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Latitud`";

	
	
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


	$tdatavista_digitadores["Latitud"] = $fdata;
		$tdatavista_digitadores[".searchableFields"][] = "Latitud";
//	Longitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Longitud";
	$fdata["GoodName"] = "Longitud";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Vista_Digitadores","Longitud");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Longitud";

		$fdata["sourceSingle"] = "Longitud";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Longitud`";

	
	
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
			$edata["EditParams"].= " maxlength=32";

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


	$tdatavista_digitadores["Longitud"] = $fdata;
		$tdatavista_digitadores[".searchableFields"][] = "Longitud";
//	Spliter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Spliter";
	$fdata["GoodName"] = "Spliter";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Vista_Digitadores","Spliter");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "numeros_de_spliters";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_Spliters";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Spliter";

	

	
	$edata["LookupOrderBy"] = "id_Spliters";

	
	
	
	

	
	
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


	$tdatavista_digitadores["Spliter"] = $fdata;
		$tdatavista_digitadores[".searchableFields"][] = "Spliter";
//	Cable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Cable";
	$fdata["GoodName"] = "Cable";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Vista_Digitadores","Cable");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cables";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "cable";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "cable";

	

	
	$edata["LookupOrderBy"] = "id_cables";

	
	
	
	

	
	
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


	$tdatavista_digitadores["Cable"] = $fdata;
		$tdatavista_digitadores[".searchableFields"][] = "Cable";
//	Localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Localidad";
	$fdata["GoodName"] = "Localidad";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Vista_Digitadores","Localidad");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "localidad";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Localidad";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Localidad";

	

	
	$edata["LookupOrderBy"] = "Localidad";

	
	
	
	

	
	
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


	$tdatavista_digitadores["Localidad"] = $fdata;
		$tdatavista_digitadores[".searchableFields"][] = "Localidad";
//	Lat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Lat";
	$fdata["GoodName"] = "Lat";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Vista_Digitadores","Lat");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Lat";

		$fdata["sourceSingle"] = "Lat";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Lat`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 10;

	
	
	
	
	
	
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


	$tdatavista_digitadores["Lat"] = $fdata;
		$tdatavista_digitadores[".searchableFields"][] = "Lat";
//	Lng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Lng";
	$fdata["GoodName"] = "Lng";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Vista_Digitadores","Lng");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Lng";

		$fdata["sourceSingle"] = "Lng";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Lng`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 10;

	
	
	
	
	
	
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


	$tdatavista_digitadores["Lng"] = $fdata;
		$tdatavista_digitadores[".searchableFields"][] = "Lng";
//	Ubicacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Ubicacion";
	$fdata["GoodName"] = "Ubicacion";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Vista_Digitadores","Ubicacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Ubicacion";

		$fdata["sourceSingle"] = "Ubicacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Ubicacion`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Map");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["mapData"] = array();
	$vdata["mapData"]['width'] = 300;
	$vdata["mapData"]['height'] = 225;
	$vdata["mapData"]['address'] = "Cto";
	$vdata["mapData"]['lat'] = "Latitud";
	$vdata["mapData"]['lng'] = "Longitud";
	$vdata["mapData"]['desc'] = "Cto";
	$vdata["mapData"]['mapIcon'] = "";
	$vdata["mapData"]['isMapIconCustom'] = 0;
		$vdata["mapData"]['zoom'] = 20;

	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdatavista_digitadores["Ubicacion"] = $fdata;
		$tdatavista_digitadores[".searchableFields"][] = "Ubicacion";
//	id_spliter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "id_spliter";
	$fdata["GoodName"] = "id_spliter";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Vista_Digitadores","id_spliter");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_spliter";

		$fdata["sourceSingle"] = "id_spliter";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`id_spliter`";

	
	
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


	$tdatavista_digitadores["id_spliter"] = $fdata;
		$tdatavista_digitadores[".searchableFields"][] = "id_spliter";
//	displayonmap
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "displayonmap";
	$fdata["GoodName"] = "displayonmap";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Vista_Digitadores","displayonmap");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "displayonmap";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(Cto, '\\n', Spliter, '\\n', Cable, '\\n', Localidad)";

	
	
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


	$tdatavista_digitadores["displayonmap"] = $fdata;
		$tdatavista_digitadores[".searchableFields"][] = "displayonmap";


$tables_data["Vista_Digitadores"]=&$tdatavista_digitadores;
$field_labels["Vista_Digitadores"] = &$fieldLabelsvista_digitadores;
$fieldToolTips["Vista_Digitadores"] = &$fieldToolTipsvista_digitadores;
$placeHolders["Vista_Digitadores"] = &$placeHoldersvista_digitadores;
$page_titles["Vista_Digitadores"] = &$pageTitlesvista_digitadores;


changeTextControlsToDate( "Vista_Digitadores" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Vista_Digitadores"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Vista_Digitadores"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="spliters";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="spliters";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "spliters";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Vista_Digitadores"][0] = $masterParams;
				$masterTablesData["Vista_Digitadores"][0]["masterKeys"] = array();
	$masterTablesData["Vista_Digitadores"][0]["masterKeys"][]="spliter";
				$masterTablesData["Vista_Digitadores"][0]["masterKeys"][]="cable";
				$masterTablesData["Vista_Digitadores"][0]["masterKeys"][]="localidad";
				$masterTablesData["Vista_Digitadores"][0]["detailKeys"] = array();
	$masterTablesData["Vista_Digitadores"][0]["detailKeys"][]="Spliter";
				$masterTablesData["Vista_Digitadores"][0]["detailKeys"][]="Cable";
				$masterTablesData["Vista_Digitadores"][0]["detailKeys"][]="Localidad";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vista_digitadores()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id_Ctos`,  `Cto`,  `Latitud`,  `Longitud`,  `Spliter`,  `Cable`,  `Localidad`,  `Lat`,  `Lng`,  `Ubicacion`,  `id_spliter`,  concat(Cto, '\\n', Spliter, '\\n', Cable, '\\n', Localidad) AS `displayonmap`";
$proto0["m_strFrom"] = "FROM `ctos`";
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
	"m_strName" => "id_Ctos",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Vista_Digitadores"
));

$proto6["m_sql"] = "`id_Ctos`";
$proto6["m_srcTableName"] = "Vista_Digitadores";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Cto",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Vista_Digitadores"
));

$proto8["m_sql"] = "`Cto`";
$proto8["m_srcTableName"] = "Vista_Digitadores";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Latitud",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Vista_Digitadores"
));

$proto10["m_sql"] = "`Latitud`";
$proto10["m_srcTableName"] = "Vista_Digitadores";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Longitud",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Vista_Digitadores"
));

$proto12["m_sql"] = "`Longitud`";
$proto12["m_srcTableName"] = "Vista_Digitadores";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Spliter",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Vista_Digitadores"
));

$proto14["m_sql"] = "`Spliter`";
$proto14["m_srcTableName"] = "Vista_Digitadores";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Cable",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Vista_Digitadores"
));

$proto16["m_sql"] = "`Cable`";
$proto16["m_srcTableName"] = "Vista_Digitadores";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Localidad",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Vista_Digitadores"
));

$proto18["m_sql"] = "`Localidad`";
$proto18["m_srcTableName"] = "Vista_Digitadores";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Lat",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Vista_Digitadores"
));

$proto20["m_sql"] = "`Lat`";
$proto20["m_srcTableName"] = "Vista_Digitadores";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Lng",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Vista_Digitadores"
));

$proto22["m_sql"] = "`Lng`";
$proto22["m_srcTableName"] = "Vista_Digitadores";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Ubicacion",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Vista_Digitadores"
));

$proto24["m_sql"] = "`Ubicacion`";
$proto24["m_srcTableName"] = "Vista_Digitadores";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "id_spliter",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Vista_Digitadores"
));

$proto26["m_sql"] = "`id_spliter`";
$proto26["m_srcTableName"] = "Vista_Digitadores";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$proto29=array();
$proto29["m_functiontype"] = "SQLF_CUSTOM";
$proto29["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Cto"
));

$proto29["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'\\n'"
));

$proto29["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "Spliter"
));

$proto29["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'\\n'"
));

$proto29["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "Cable"
));

$proto29["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'\\n'"
));

$proto29["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "Localidad"
));

$proto29["m_arguments"][]=$obj;
$proto29["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto29);

$proto28["m_sql"] = "concat(Cto, '\\n', Spliter, '\\n', Cable, '\\n', Localidad)";
$proto28["m_srcTableName"] = "Vista_Digitadores";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "displayonmap";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto37=array();
$proto37["m_link"] = "SQLL_MAIN";
			$proto38=array();
$proto38["m_strName"] = "ctos";
$proto38["m_srcTableName"] = "Vista_Digitadores";
$proto38["m_columns"] = array();
$proto38["m_columns"][] = "id_Ctos";
$proto38["m_columns"][] = "Cto";
$proto38["m_columns"][] = "Latitud";
$proto38["m_columns"][] = "Longitud";
$proto38["m_columns"][] = "Spliter";
$proto38["m_columns"][] = "Cable";
$proto38["m_columns"][] = "Localidad";
$proto38["m_columns"][] = "Lat";
$proto38["m_columns"][] = "Lng";
$proto38["m_columns"][] = "Ubicacion";
$proto38["m_columns"][] = "id_spliter";
$proto38["m_columns"][] = "id_cable";
$proto38["m_columns"][] = "id_localidad";
$obj = new SQLTable($proto38);

$proto37["m_table"] = $obj;
$proto37["m_sql"] = "`ctos`";
$proto37["m_alias"] = "";
$proto37["m_srcTableName"] = "Vista_Digitadores";
$proto39=array();
$proto39["m_sql"] = "";
$proto39["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto39["m_column"]=$obj;
$proto39["m_contained"] = array();
$proto39["m_strCase"] = "";
$proto39["m_havingmode"] = false;
$proto39["m_inBrackets"] = false;
$proto39["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto39);

$proto37["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto37);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Vista_Digitadores";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vista_digitadores = createSqlQuery_vista_digitadores();


	
										;

												

$tdatavista_digitadores[".sqlquery"] = $queryData_vista_digitadores;



$tdatavista_digitadores[".hasEvents"] = false;

?>