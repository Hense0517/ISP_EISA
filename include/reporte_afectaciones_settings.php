<?php
$tdatareporte_afectaciones = array();
$tdatareporte_afectaciones[".searchableFields"] = array();
$tdatareporte_afectaciones[".ShortName"] = "reporte_afectaciones";
$tdatareporte_afectaciones[".OwnerID"] = "";
$tdatareporte_afectaciones[".OriginalTable"] = "reporte_afectaciones";


$tdatareporte_afectaciones[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatareporte_afectaciones[".originalPagesByType"] = $tdatareporte_afectaciones[".pagesByType"];
$tdatareporte_afectaciones[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatareporte_afectaciones[".originalPages"] = $tdatareporte_afectaciones[".pages"];
$tdatareporte_afectaciones[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatareporte_afectaciones[".originalDefaultPages"] = $tdatareporte_afectaciones[".defaultPages"];

//	field labels
$fieldLabelsreporte_afectaciones = array();
$fieldToolTipsreporte_afectaciones = array();
$pageTitlesreporte_afectaciones = array();
$placeHoldersreporte_afectaciones = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsreporte_afectaciones["Spanish"] = array();
	$fieldToolTipsreporte_afectaciones["Spanish"] = array();
	$placeHoldersreporte_afectaciones["Spanish"] = array();
	$pageTitlesreporte_afectaciones["Spanish"] = array();
	$fieldLabelsreporte_afectaciones["Spanish"]["Fecha"] = "Fecha";
	$fieldToolTipsreporte_afectaciones["Spanish"]["Fecha"] = "";
	$placeHoldersreporte_afectaciones["Spanish"]["Fecha"] = "";
	$fieldLabelsreporte_afectaciones["Spanish"]["Localidad"] = "Localidad";
	$fieldToolTipsreporte_afectaciones["Spanish"]["Localidad"] = "";
	$placeHoldersreporte_afectaciones["Spanish"]["Localidad"] = "";
	$fieldLabelsreporte_afectaciones["Spanish"]["Cables"] = "Cables";
	$fieldToolTipsreporte_afectaciones["Spanish"]["Cables"] = "";
	$placeHoldersreporte_afectaciones["Spanish"]["Cables"] = "";
	$fieldLabelsreporte_afectaciones["Spanish"]["Spliters"] = "Spliters";
	$fieldToolTipsreporte_afectaciones["Spanish"]["Spliters"] = "";
	$placeHoldersreporte_afectaciones["Spanish"]["Spliters"] = "";
	$fieldLabelsreporte_afectaciones["Spanish"]["Ctos"] = "Ctos";
	$fieldToolTipsreporte_afectaciones["Spanish"]["Ctos"] = "";
	$placeHoldersreporte_afectaciones["Spanish"]["Ctos"] = "";
	$fieldLabelsreporte_afectaciones["Spanish"]["Tipo_Afectacion"] = "Tipo Afectacion";
	$fieldToolTipsreporte_afectaciones["Spanish"]["Tipo_Afectacion"] = "";
	$placeHoldersreporte_afectaciones["Spanish"]["Tipo_Afectacion"] = "";
	$fieldLabelsreporte_afectaciones["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipsreporte_afectaciones["Spanish"]["Observaciones"] = "";
	$placeHoldersreporte_afectaciones["Spanish"]["Observaciones"] = "";
	$fieldLabelsreporte_afectaciones["Spanish"]["Estado"] = "Estado";
	$fieldToolTipsreporte_afectaciones["Spanish"]["Estado"] = "";
	$placeHoldersreporte_afectaciones["Spanish"]["Estado"] = "";
	$fieldLabelsreporte_afectaciones["Spanish"]["Id_afectacion"] = "Id Afectacion";
	$fieldToolTipsreporte_afectaciones["Spanish"]["Id_afectacion"] = "";
	$placeHoldersreporte_afectaciones["Spanish"]["Id_afectacion"] = "";
	$fieldLabelsreporte_afectaciones["Spanish"]["Fecha_Solucion"] = "Fecha Solucion";
	$fieldToolTipsreporte_afectaciones["Spanish"]["Fecha_Solucion"] = "";
	$placeHoldersreporte_afectaciones["Spanish"]["Fecha_Solucion"] = "";
	if (count($fieldToolTipsreporte_afectaciones["Spanish"]))
		$tdatareporte_afectaciones[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsreporte_afectaciones["English"] = array();
	$fieldToolTipsreporte_afectaciones["English"] = array();
	$placeHoldersreporte_afectaciones["English"] = array();
	$pageTitlesreporte_afectaciones["English"] = array();
	$fieldLabelsreporte_afectaciones["English"]["Id_afectacion"] = "Id Afectacion";
	$fieldToolTipsreporte_afectaciones["English"]["Id_afectacion"] = "";
	$placeHoldersreporte_afectaciones["English"]["Id_afectacion"] = "";
	$fieldLabelsreporte_afectaciones["English"]["Fecha_Solucion"] = "Fecha Solucion";
	$fieldToolTipsreporte_afectaciones["English"]["Fecha_Solucion"] = "";
	$placeHoldersreporte_afectaciones["English"]["Fecha_Solucion"] = "";
	$fieldLabelsreporte_afectaciones["English"]["Fecha"] = "Fecha";
	$fieldToolTipsreporte_afectaciones["English"]["Fecha"] = "";
	$placeHoldersreporte_afectaciones["English"]["Fecha"] = "";
	$fieldLabelsreporte_afectaciones["English"]["Localidad"] = "Localidad";
	$fieldToolTipsreporte_afectaciones["English"]["Localidad"] = "";
	$placeHoldersreporte_afectaciones["English"]["Localidad"] = "";
	$fieldLabelsreporte_afectaciones["English"]["Cables"] = "Cables";
	$fieldToolTipsreporte_afectaciones["English"]["Cables"] = "";
	$placeHoldersreporte_afectaciones["English"]["Cables"] = "";
	$fieldLabelsreporte_afectaciones["English"]["Spliters"] = "Spliters";
	$fieldToolTipsreporte_afectaciones["English"]["Spliters"] = "";
	$placeHoldersreporte_afectaciones["English"]["Spliters"] = "";
	$fieldLabelsreporte_afectaciones["English"]["Ctos"] = "Ctos";
	$fieldToolTipsreporte_afectaciones["English"]["Ctos"] = "";
	$placeHoldersreporte_afectaciones["English"]["Ctos"] = "";
	$fieldLabelsreporte_afectaciones["English"]["Tipo_Afectacion"] = "Tipo Afectacion";
	$fieldToolTipsreporte_afectaciones["English"]["Tipo_Afectacion"] = "";
	$placeHoldersreporte_afectaciones["English"]["Tipo_Afectacion"] = "";
	$fieldLabelsreporte_afectaciones["English"]["Observaciones"] = "Observaciones";
	$fieldToolTipsreporte_afectaciones["English"]["Observaciones"] = "";
	$placeHoldersreporte_afectaciones["English"]["Observaciones"] = "";
	$fieldLabelsreporte_afectaciones["English"]["Estado"] = "Estado";
	$fieldToolTipsreporte_afectaciones["English"]["Estado"] = "";
	$placeHoldersreporte_afectaciones["English"]["Estado"] = "";
	if (count($fieldToolTipsreporte_afectaciones["English"]))
		$tdatareporte_afectaciones[".isUseToolTips"] = true;
}


	$tdatareporte_afectaciones[".NCSearch"] = true;



$tdatareporte_afectaciones[".shortTableName"] = "reporte_afectaciones";
$tdatareporte_afectaciones[".nSecOptions"] = 0;

$tdatareporte_afectaciones[".mainTableOwnerID"] = "";
$tdatareporte_afectaciones[".entityType"] = 0;
$tdatareporte_afectaciones[".connId"] = "isp_eisa_at_localhost";


$tdatareporte_afectaciones[".strOriginalTableName"] = "reporte_afectaciones";

	



$tdatareporte_afectaciones[".showAddInPopup"] = false;

$tdatareporte_afectaciones[".showEditInPopup"] = false;

$tdatareporte_afectaciones[".showViewInPopup"] = false;

$tdatareporte_afectaciones[".listAjax"] = false;
//	temporary
//$tdatareporte_afectaciones[".listAjax"] = false;

	$tdatareporte_afectaciones[".audit"] = false;

	$tdatareporte_afectaciones[".locking"] = false;


$pages = $tdatareporte_afectaciones[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatareporte_afectaciones[".edit"] = true;
	$tdatareporte_afectaciones[".afterEditAction"] = 1;
	$tdatareporte_afectaciones[".closePopupAfterEdit"] = 1;
	$tdatareporte_afectaciones[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatareporte_afectaciones[".add"] = true;
$tdatareporte_afectaciones[".afterAddAction"] = 1;
$tdatareporte_afectaciones[".closePopupAfterAdd"] = 1;
$tdatareporte_afectaciones[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatareporte_afectaciones[".list"] = true;
}



$tdatareporte_afectaciones[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatareporte_afectaciones[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatareporte_afectaciones[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatareporte_afectaciones[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatareporte_afectaciones[".printFriendly"] = true;
}



$tdatareporte_afectaciones[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatareporte_afectaciones[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatareporte_afectaciones[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatareporte_afectaciones[".isUseAjaxSuggest"] = true;



			

$tdatareporte_afectaciones[".ajaxCodeSnippetAdded"] = false;

$tdatareporte_afectaciones[".buttonsAdded"] = false;

$tdatareporte_afectaciones[".addPageEvents"] = false;

// use timepicker for search panel
$tdatareporte_afectaciones[".isUseTimeForSearch"] = false;


$tdatareporte_afectaciones[".badgeColor"] = "D2691E";


$tdatareporte_afectaciones[".allSearchFields"] = array();
$tdatareporte_afectaciones[".filterFields"] = array();
$tdatareporte_afectaciones[".requiredSearchFields"] = array();

$tdatareporte_afectaciones[".googleLikeFields"] = array();
$tdatareporte_afectaciones[".googleLikeFields"][] = "Fecha";
$tdatareporte_afectaciones[".googleLikeFields"][] = "Localidad";
$tdatareporte_afectaciones[".googleLikeFields"][] = "Cables";
$tdatareporte_afectaciones[".googleLikeFields"][] = "Spliters";
$tdatareporte_afectaciones[".googleLikeFields"][] = "Ctos";
$tdatareporte_afectaciones[".googleLikeFields"][] = "Tipo_Afectacion";
$tdatareporte_afectaciones[".googleLikeFields"][] = "Observaciones";
$tdatareporte_afectaciones[".googleLikeFields"][] = "Estado";
$tdatareporte_afectaciones[".googleLikeFields"][] = "Id_afectacion";
$tdatareporte_afectaciones[".googleLikeFields"][] = "Fecha_Solucion";



$tdatareporte_afectaciones[".tableType"] = "list";

$tdatareporte_afectaciones[".printerPageOrientation"] = 0;
$tdatareporte_afectaciones[".nPrinterPageScale"] = 100;

$tdatareporte_afectaciones[".nPrinterSplitRecords"] = 40;

$tdatareporte_afectaciones[".geocodingEnabled"] = false;










$tdatareporte_afectaciones[".pageSize"] = 20;

$tdatareporte_afectaciones[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatareporte_afectaciones[".strOrderBy"] = $tstrOrderBy;

$tdatareporte_afectaciones[".orderindexes"] = array();


$tdatareporte_afectaciones[".sqlHead"] = "SELECT `Fecha`,  `Localidad`,  `Cables`,  `Spliters`,  `Ctos`,  `Tipo_Afectacion`,  `Observaciones`,  `Estado`,  `Id_afectacion`,  `Fecha_Solucion`";
$tdatareporte_afectaciones[".sqlFrom"] = "FROM `reporte_afectaciones`";
$tdatareporte_afectaciones[".sqlWhereExpr"] = "";
$tdatareporte_afectaciones[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareporte_afectaciones[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareporte_afectaciones[".arrGroupsPerPage"] = $arrGPP;

$tdatareporte_afectaciones[".highlightSearchResults"] = true;

$tableKeysreporte_afectaciones = array();
$tableKeysreporte_afectaciones[] = "Id_afectacion";
$tdatareporte_afectaciones[".Keys"] = $tableKeysreporte_afectaciones;


$tdatareporte_afectaciones[".hideMobileList"] = array();




//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "reporte_afectaciones";
	$fdata["Label"] = GetFieldLabel("reporte_afectaciones","Fecha");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "Fecha";

		$fdata["sourceSingle"] = "Fecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Fecha`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatareporte_afectaciones["Fecha"] = $fdata;
		$tdatareporte_afectaciones[".searchableFields"][] = "Fecha";
//	Localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Localidad";
	$fdata["GoodName"] = "Localidad";
	$fdata["ownerTable"] = "reporte_afectaciones";
	$fdata["Label"] = GetFieldLabel("reporte_afectaciones","Localidad");
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

	
		
	$edata["LinkField"] = "id_localidad";
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


	$tdatareporte_afectaciones["Localidad"] = $fdata;
		$tdatareporte_afectaciones[".searchableFields"][] = "Localidad";
//	Cables
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Cables";
	$fdata["GoodName"] = "Cables";
	$fdata["ownerTable"] = "reporte_afectaciones";
	$fdata["Label"] = GetFieldLabel("reporte_afectaciones","Cables");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Cables";

		$fdata["sourceSingle"] = "Cables";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Cables`";

	
	
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
	$edata["LookupTable"] = "numeros_de_cables";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Cable";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Cable";

	

	
	$edata["LookupOrderBy"] = "id_Cables";

	
	
	
	

	
	
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


	$tdatareporte_afectaciones["Cables"] = $fdata;
		$tdatareporte_afectaciones[".searchableFields"][] = "Cables";
//	Spliters
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Spliters";
	$fdata["GoodName"] = "Spliters";
	$fdata["ownerTable"] = "reporte_afectaciones";
	$fdata["Label"] = GetFieldLabel("reporte_afectaciones","Spliters");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Spliters";

		$fdata["sourceSingle"] = "Spliters";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Spliters`";

	
	
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

	
		
	$edata["LinkField"] = "Spliter";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Spliter";

	

	
	$edata["LookupOrderBy"] = "id_Spliters";

	
	
	
	

	
		$edata["Multiselect"] = true;

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


	$tdatareporte_afectaciones["Spliters"] = $fdata;
		$tdatareporte_afectaciones[".searchableFields"][] = "Spliters";
//	Ctos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Ctos";
	$fdata["GoodName"] = "Ctos";
	$fdata["ownerTable"] = "reporte_afectaciones";
	$fdata["Label"] = GetFieldLabel("reporte_afectaciones","Ctos");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Ctos";

		$fdata["sourceSingle"] = "Ctos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Ctos`";

	
	
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

	
		
	$edata["LinkField"] = "Numero_cto";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Numero_cto";

	

	
	$edata["LookupOrderBy"] = "id_numeros_ctos";

	
	
	
	

	
		$edata["Multiselect"] = true;

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


	$tdatareporte_afectaciones["Ctos"] = $fdata;
		$tdatareporte_afectaciones[".searchableFields"][] = "Ctos";
//	Tipo_Afectacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Tipo_Afectacion";
	$fdata["GoodName"] = "Tipo_Afectacion";
	$fdata["ownerTable"] = "reporte_afectaciones";
	$fdata["Label"] = GetFieldLabel("reporte_afectaciones","Tipo_Afectacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Tipo_Afectacion";

		$fdata["sourceSingle"] = "Tipo_Afectacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Tipo_Afectacion`";

	
	
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
	$edata["LookupValues"][] = "DAÑO MASIVO";
	$edata["LookupValues"][] = "PERDIDA DE GESTION";
	$edata["LookupValues"][] = "VENTANA DE MANTENIMIENTO";

	
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


	$tdatareporte_afectaciones["Tipo_Afectacion"] = $fdata;
		$tdatareporte_afectaciones[".searchableFields"][] = "Tipo_Afectacion";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "reporte_afectaciones";
	$fdata["Label"] = GetFieldLabel("reporte_afectaciones","Observaciones");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Observaciones";

		$fdata["sourceSingle"] = "Observaciones";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Observaciones`";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatareporte_afectaciones["Observaciones"] = $fdata;
		$tdatareporte_afectaciones[".searchableFields"][] = "Observaciones";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "reporte_afectaciones";
	$fdata["Label"] = GetFieldLabel("reporte_afectaciones","Estado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Estado";

		$fdata["sourceSingle"] = "Estado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Estado`";

	
	
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
	$edata["LookupValues"][] = "ABIERTO";
	$edata["LookupValues"][] = "EN PROCESO";
	$edata["LookupValues"][] = "RESUELTO";

	
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


	$tdatareporte_afectaciones["Estado"] = $fdata;
		$tdatareporte_afectaciones[".searchableFields"][] = "Estado";
//	Id_afectacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Id_afectacion";
	$fdata["GoodName"] = "Id_afectacion";
	$fdata["ownerTable"] = "reporte_afectaciones";
	$fdata["Label"] = GetFieldLabel("reporte_afectaciones","Id_afectacion");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "Id_afectacion";

		$fdata["sourceSingle"] = "Id_afectacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Id_afectacion`";

	
	
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


	$tdatareporte_afectaciones["Id_afectacion"] = $fdata;
		$tdatareporte_afectaciones[".searchableFields"][] = "Id_afectacion";
//	Fecha_Solucion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Fecha_Solucion";
	$fdata["GoodName"] = "Fecha_Solucion";
	$fdata["ownerTable"] = "reporte_afectaciones";
	$fdata["Label"] = GetFieldLabel("reporte_afectaciones","Fecha_Solucion");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "Fecha_Solucion";

		$fdata["sourceSingle"] = "Fecha_Solucion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Fecha_Solucion`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatareporte_afectaciones["Fecha_Solucion"] = $fdata;
		$tdatareporte_afectaciones[".searchableFields"][] = "Fecha_Solucion";


$tables_data["reporte_afectaciones"]=&$tdatareporte_afectaciones;
$field_labels["reporte_afectaciones"] = &$fieldLabelsreporte_afectaciones;
$fieldToolTips["reporte_afectaciones"] = &$fieldToolTipsreporte_afectaciones;
$placeHolders["reporte_afectaciones"] = &$placeHoldersreporte_afectaciones;
$page_titles["reporte_afectaciones"] = &$pageTitlesreporte_afectaciones;


changeTextControlsToDate( "reporte_afectaciones" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["reporte_afectaciones"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["reporte_afectaciones"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_reporte_afectaciones()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`Fecha`,  `Localidad`,  `Cables`,  `Spliters`,  `Ctos`,  `Tipo_Afectacion`,  `Observaciones`,  `Estado`,  `Id_afectacion`,  `Fecha_Solucion`";
$proto0["m_strFrom"] = "FROM `reporte_afectaciones`";
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
	"m_strName" => "Fecha",
	"m_strTable" => "reporte_afectaciones",
	"m_srcTableName" => "reporte_afectaciones"
));

$proto6["m_sql"] = "`Fecha`";
$proto6["m_srcTableName"] = "reporte_afectaciones";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Localidad",
	"m_strTable" => "reporte_afectaciones",
	"m_srcTableName" => "reporte_afectaciones"
));

$proto8["m_sql"] = "`Localidad`";
$proto8["m_srcTableName"] = "reporte_afectaciones";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Cables",
	"m_strTable" => "reporte_afectaciones",
	"m_srcTableName" => "reporte_afectaciones"
));

$proto10["m_sql"] = "`Cables`";
$proto10["m_srcTableName"] = "reporte_afectaciones";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Spliters",
	"m_strTable" => "reporte_afectaciones",
	"m_srcTableName" => "reporte_afectaciones"
));

$proto12["m_sql"] = "`Spliters`";
$proto12["m_srcTableName"] = "reporte_afectaciones";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Ctos",
	"m_strTable" => "reporte_afectaciones",
	"m_srcTableName" => "reporte_afectaciones"
));

$proto14["m_sql"] = "`Ctos`";
$proto14["m_srcTableName"] = "reporte_afectaciones";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo_Afectacion",
	"m_strTable" => "reporte_afectaciones",
	"m_srcTableName" => "reporte_afectaciones"
));

$proto16["m_sql"] = "`Tipo_Afectacion`";
$proto16["m_srcTableName"] = "reporte_afectaciones";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "reporte_afectaciones",
	"m_srcTableName" => "reporte_afectaciones"
));

$proto18["m_sql"] = "`Observaciones`";
$proto18["m_srcTableName"] = "reporte_afectaciones";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "reporte_afectaciones",
	"m_srcTableName" => "reporte_afectaciones"
));

$proto20["m_sql"] = "`Estado`";
$proto20["m_srcTableName"] = "reporte_afectaciones";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Id_afectacion",
	"m_strTable" => "reporte_afectaciones",
	"m_srcTableName" => "reporte_afectaciones"
));

$proto22["m_sql"] = "`Id_afectacion`";
$proto22["m_srcTableName"] = "reporte_afectaciones";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha_Solucion",
	"m_strTable" => "reporte_afectaciones",
	"m_srcTableName" => "reporte_afectaciones"
));

$proto24["m_sql"] = "`Fecha_Solucion`";
$proto24["m_srcTableName"] = "reporte_afectaciones";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "reporte_afectaciones";
$proto27["m_srcTableName"] = "reporte_afectaciones";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "Id_afectacion";
$proto27["m_columns"][] = "Fecha";
$proto27["m_columns"][] = "Localidad";
$proto27["m_columns"][] = "Cables";
$proto27["m_columns"][] = "Spliters";
$proto27["m_columns"][] = "Ctos";
$proto27["m_columns"][] = "Tipo_Afectacion";
$proto27["m_columns"][] = "Observaciones";
$proto27["m_columns"][] = "Estado";
$proto27["m_columns"][] = "Fecha_Solucion";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "`reporte_afectaciones`";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "reporte_afectaciones";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="reporte_afectaciones";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_reporte_afectaciones = createSqlQuery_reporte_afectaciones();


	
										;

										

$tdatareporte_afectaciones[".sqlquery"] = $queryData_reporte_afectaciones;



$tdatareporte_afectaciones[".hasEvents"] = false;

?>