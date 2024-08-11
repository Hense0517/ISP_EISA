<?php
$tdatamapa_ctos = array();
$tdatamapa_ctos[".searchableFields"] = array();
$tdatamapa_ctos[".ShortName"] = "mapa_ctos";
$tdatamapa_ctos[".OwnerID"] = "";
$tdatamapa_ctos[".OriginalTable"] = "ctos";


$tdatamapa_ctos[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamapa_ctos[".originalPagesByType"] = $tdatamapa_ctos[".pagesByType"];
$tdatamapa_ctos[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamapa_ctos[".originalPages"] = $tdatamapa_ctos[".pages"];
$tdatamapa_ctos[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamapa_ctos[".originalDefaultPages"] = $tdatamapa_ctos[".defaultPages"];

//	field labels
$fieldLabelsmapa_ctos = array();
$fieldToolTipsmapa_ctos = array();
$pageTitlesmapa_ctos = array();
$placeHoldersmapa_ctos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmapa_ctos["Spanish"] = array();
	$fieldToolTipsmapa_ctos["Spanish"] = array();
	$placeHoldersmapa_ctos["Spanish"] = array();
	$pageTitlesmapa_ctos["Spanish"] = array();
	$fieldLabelsmapa_ctos["Spanish"]["id_Ctos"] = "Id Ctos";
	$fieldToolTipsmapa_ctos["Spanish"]["id_Ctos"] = "";
	$placeHoldersmapa_ctos["Spanish"]["id_Ctos"] = "";
	$fieldLabelsmapa_ctos["Spanish"]["Cto"] = "Cto";
	$fieldToolTipsmapa_ctos["Spanish"]["Cto"] = "";
	$placeHoldersmapa_ctos["Spanish"]["Cto"] = "";
	$fieldLabelsmapa_ctos["Spanish"]["Latitud"] = "Latitud";
	$fieldToolTipsmapa_ctos["Spanish"]["Latitud"] = "";
	$placeHoldersmapa_ctos["Spanish"]["Latitud"] = "";
	$fieldLabelsmapa_ctos["Spanish"]["Longitud"] = "Longitud";
	$fieldToolTipsmapa_ctos["Spanish"]["Longitud"] = "";
	$placeHoldersmapa_ctos["Spanish"]["Longitud"] = "";
	$fieldLabelsmapa_ctos["Spanish"]["Spliter"] = "Spliter";
	$fieldToolTipsmapa_ctos["Spanish"]["Spliter"] = "";
	$placeHoldersmapa_ctos["Spanish"]["Spliter"] = "";
	$fieldLabelsmapa_ctos["Spanish"]["Cable"] = "Cable";
	$fieldToolTipsmapa_ctos["Spanish"]["Cable"] = "";
	$placeHoldersmapa_ctos["Spanish"]["Cable"] = "";
	$fieldLabelsmapa_ctos["Spanish"]["Localidad"] = "Localidad";
	$fieldToolTipsmapa_ctos["Spanish"]["Localidad"] = "";
	$placeHoldersmapa_ctos["Spanish"]["Localidad"] = "";
	$fieldLabelsmapa_ctos["Spanish"]["DisplayOnMap"] = "Display On Map";
	$fieldToolTipsmapa_ctos["Spanish"]["DisplayOnMap"] = "";
	$placeHoldersmapa_ctos["Spanish"]["DisplayOnMap"] = "";
	$fieldLabelsmapa_ctos["Spanish"]["Ubicacion"] = "Ubicacion";
	$fieldToolTipsmapa_ctos["Spanish"]["Ubicacion"] = "";
	$placeHoldersmapa_ctos["Spanish"]["Ubicacion"] = "";
	if (count($fieldToolTipsmapa_ctos["Spanish"]))
		$tdatamapa_ctos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmapa_ctos["English"] = array();
	$fieldToolTipsmapa_ctos["English"] = array();
	$placeHoldersmapa_ctos["English"] = array();
	$pageTitlesmapa_ctos["English"] = array();
	$fieldLabelsmapa_ctos["English"]["id_Ctos"] = "Id Ctos";
	$fieldToolTipsmapa_ctos["English"]["id_Ctos"] = "";
	$placeHoldersmapa_ctos["English"]["id_Ctos"] = "";
	$fieldLabelsmapa_ctos["English"]["Cto"] = "Cto";
	$fieldToolTipsmapa_ctos["English"]["Cto"] = "";
	$placeHoldersmapa_ctos["English"]["Cto"] = "";
	$fieldLabelsmapa_ctos["English"]["Latitud"] = "Latitud";
	$fieldToolTipsmapa_ctos["English"]["Latitud"] = "";
	$placeHoldersmapa_ctos["English"]["Latitud"] = "";
	$fieldLabelsmapa_ctos["English"]["Longitud"] = "Longitud";
	$fieldToolTipsmapa_ctos["English"]["Longitud"] = "";
	$placeHoldersmapa_ctos["English"]["Longitud"] = "";
	$fieldLabelsmapa_ctos["English"]["Spliter"] = "Spliter";
	$fieldToolTipsmapa_ctos["English"]["Spliter"] = "";
	$placeHoldersmapa_ctos["English"]["Spliter"] = "";
	$fieldLabelsmapa_ctos["English"]["Cable"] = "Cable";
	$fieldToolTipsmapa_ctos["English"]["Cable"] = "";
	$placeHoldersmapa_ctos["English"]["Cable"] = "";
	$fieldLabelsmapa_ctos["English"]["Localidad"] = "Localidad";
	$fieldToolTipsmapa_ctos["English"]["Localidad"] = "";
	$placeHoldersmapa_ctos["English"]["Localidad"] = "";
	$fieldLabelsmapa_ctos["English"]["DisplayOnMap"] = "Display On Map";
	$fieldToolTipsmapa_ctos["English"]["DisplayOnMap"] = "";
	$placeHoldersmapa_ctos["English"]["DisplayOnMap"] = "";
	$fieldLabelsmapa_ctos["English"]["Ubicacion"] = "Ubicacion";
	$fieldToolTipsmapa_ctos["English"]["Ubicacion"] = "";
	$placeHoldersmapa_ctos["English"]["Ubicacion"] = "";
	if (count($fieldToolTipsmapa_ctos["English"]))
		$tdatamapa_ctos[".isUseToolTips"] = true;
}


	$tdatamapa_ctos[".NCSearch"] = true;



$tdatamapa_ctos[".shortTableName"] = "mapa_ctos";
$tdatamapa_ctos[".nSecOptions"] = 0;

$tdatamapa_ctos[".mainTableOwnerID"] = "";
$tdatamapa_ctos[".entityType"] = 1;
$tdatamapa_ctos[".connId"] = "isp_eisa_at_localhost";


$tdatamapa_ctos[".strOriginalTableName"] = "ctos";

	



$tdatamapa_ctos[".showAddInPopup"] = false;

$tdatamapa_ctos[".showEditInPopup"] = false;

$tdatamapa_ctos[".showViewInPopup"] = false;

$tdatamapa_ctos[".listAjax"] = false;
//	temporary
//$tdatamapa_ctos[".listAjax"] = false;

	$tdatamapa_ctos[".audit"] = false;

	$tdatamapa_ctos[".locking"] = false;


$pages = $tdatamapa_ctos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamapa_ctos[".edit"] = true;
	$tdatamapa_ctos[".afterEditAction"] = 1;
	$tdatamapa_ctos[".closePopupAfterEdit"] = 1;
	$tdatamapa_ctos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamapa_ctos[".add"] = true;
$tdatamapa_ctos[".afterAddAction"] = 1;
$tdatamapa_ctos[".closePopupAfterAdd"] = 1;
$tdatamapa_ctos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamapa_ctos[".list"] = true;
}



$tdatamapa_ctos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamapa_ctos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamapa_ctos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamapa_ctos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamapa_ctos[".printFriendly"] = true;
}



$tdatamapa_ctos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamapa_ctos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamapa_ctos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamapa_ctos[".isUseAjaxSuggest"] = true;



			

$tdatamapa_ctos[".ajaxCodeSnippetAdded"] = false;

$tdatamapa_ctos[".buttonsAdded"] = false;

$tdatamapa_ctos[".addPageEvents"] = true;

// use timepicker for search panel
$tdatamapa_ctos[".isUseTimeForSearch"] = false;

$tdatamapa_ctos[".isUseFieldsMaps"] = true;

$tdatamapa_ctos[".badgeColor"] = "6DA5C8";


$tdatamapa_ctos[".allSearchFields"] = array();
$tdatamapa_ctos[".filterFields"] = array();
$tdatamapa_ctos[".requiredSearchFields"] = array();

$tdatamapa_ctos[".googleLikeFields"] = array();
$tdatamapa_ctos[".googleLikeFields"][] = "id_Ctos";
$tdatamapa_ctos[".googleLikeFields"][] = "Cto";
$tdatamapa_ctos[".googleLikeFields"][] = "Latitud";
$tdatamapa_ctos[".googleLikeFields"][] = "Longitud";
$tdatamapa_ctos[".googleLikeFields"][] = "Spliter";
$tdatamapa_ctos[".googleLikeFields"][] = "Cable";
$tdatamapa_ctos[".googleLikeFields"][] = "Localidad";
$tdatamapa_ctos[".googleLikeFields"][] = "DisplayOnMap";
$tdatamapa_ctos[".googleLikeFields"][] = "Ubicacion";



$tdatamapa_ctos[".tableType"] = "list";

$tdatamapa_ctos[".printerPageOrientation"] = 0;
$tdatamapa_ctos[".nPrinterPageScale"] = 100;

$tdatamapa_ctos[".nPrinterSplitRecords"] = 40;

$tdatamapa_ctos[".geocodingEnabled"] = true;
$tdatamapa_ctos[".geocodingData"] = array();
$tdatamapa_ctos[".geocodingData"]["latField"] = "Lat";
$tdatamapa_ctos[".geocodingData"]["lngField"] = "Lng";
$tdatamapa_ctos[".geocodingData"]["addressFields"] = array();
	$tdatamapa_ctos[".geocodingData"]["addressFields"][] = "Latitud";
	$tdatamapa_ctos[".geocodingData"]["addressFields"][] = "Longitud";










$tdatamapa_ctos[".pageSize"] = 30000;

$tdatamapa_ctos[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id_Ctos`";
$tdatamapa_ctos[".strOrderBy"] = $tstrOrderBy;

$tdatamapa_ctos[".orderindexes"] = array();
	$tdatamapa_ctos[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "`id_Ctos`");



$tdatamapa_ctos[".sqlHead"] = "SELECT `id_Ctos`,  `Cto`,  `Latitud`,  `Longitud`,  `Spliter`,  `Cable`,  `Localidad`,  CONCAT(`Cto`, '\\n', `Spliter`, '\\n', `Cable`, '\\n', `Localidad`) AS `DisplayOnMap`,  `Ubicacion`";
$tdatamapa_ctos[".sqlFrom"] = "FROM `ctos`";
$tdatamapa_ctos[".sqlWhereExpr"] = "(`Localidad` NOT IN ('EL BAGRE', 'ZARAGOZA'))";
$tdatamapa_ctos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = -1;
$tdatamapa_ctos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamapa_ctos[".arrGroupsPerPage"] = $arrGPP;

$tdatamapa_ctos[".highlightSearchResults"] = true;

$tableKeysmapa_ctos = array();
$tableKeysmapa_ctos[] = "id_Ctos";
$tdatamapa_ctos[".Keys"] = $tableKeysmapa_ctos;


$tdatamapa_ctos[".hideMobileList"] = array();




//	id_Ctos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_Ctos";
	$fdata["GoodName"] = "id_Ctos";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Mapa_ctos","id_Ctos");
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


	$tdatamapa_ctos["id_Ctos"] = $fdata;
		$tdatamapa_ctos[".searchableFields"][] = "id_Ctos";
//	Cto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Cto";
	$fdata["GoodName"] = "Cto";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Mapa_ctos","Cto");
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
	$edata["LookupTable"] = "ctos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "Cto";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Cto";

	

	
	$edata["LookupOrderBy"] = "id_Ctos";

	
	
	
	

	
	
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
		$fdata["filterTotalFields"] = "id_Ctos";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamapa_ctos["Cto"] = $fdata;
		$tdatamapa_ctos[".searchableFields"][] = "Cto";
//	Latitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Latitud";
	$fdata["GoodName"] = "Latitud";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Mapa_ctos","Latitud");
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


	$tdatamapa_ctos["Latitud"] = $fdata;
		$tdatamapa_ctos[".searchableFields"][] = "Latitud";
//	Longitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Longitud";
	$fdata["GoodName"] = "Longitud";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Mapa_ctos","Longitud");
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


	$tdatamapa_ctos["Longitud"] = $fdata;
		$tdatamapa_ctos[".searchableFields"][] = "Longitud";
//	Spliter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Spliter";
	$fdata["GoodName"] = "Spliter";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Mapa_ctos","Spliter");
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
	$edata["LookupTable"] = "spliters";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "spliter";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "spliter";

	

	
	$edata["LookupOrderBy"] = "id_spliters";

	
	
	
	

	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "id_Ctos";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamapa_ctos["Spliter"] = $fdata;
		$tdatamapa_ctos[".searchableFields"][] = "Spliter";
//	Cable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Cable";
	$fdata["GoodName"] = "Cable";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Mapa_ctos","Cable");
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

	
			$edata["LookupUnique"] = true;

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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "id_Ctos";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 1;
		$fdata["descendingOrder"] = true;
	$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamapa_ctos["Cable"] = $fdata;
		$tdatamapa_ctos[".searchableFields"][] = "Cable";
//	Localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Localidad";
	$fdata["GoodName"] = "Localidad";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Mapa_ctos","Localidad");
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
		$edata["listPageId"] = "list";
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdatamapa_ctos["Localidad"] = $fdata;
		$tdatamapa_ctos[".searchableFields"][] = "Localidad";
//	DisplayOnMap
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DisplayOnMap";
	$fdata["GoodName"] = "DisplayOnMap";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Mapa_ctos","DisplayOnMap");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DisplayOnMap";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT(`Cto`, '\\n', `Spliter`, '\\n', `Cable`, '\\n', `Localidad`)";

	
	
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


	$tdatamapa_ctos["DisplayOnMap"] = $fdata;
		$tdatamapa_ctos[".searchableFields"][] = "DisplayOnMap";
//	Ubicacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Ubicacion";
	$fdata["GoodName"] = "Ubicacion";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Mapa_ctos","Ubicacion");
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
	$vdata["mapData"]['desc'] = "DisplayOnMap";
	$vdata["mapData"]['mapIcon'] = "";
	$vdata["mapData"]['isMapIconCustom'] = 0;
		$vdata["mapData"]['zoom'] = 7;

	
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


	$tdatamapa_ctos["Ubicacion"] = $fdata;
		$tdatamapa_ctos[".searchableFields"][] = "Ubicacion";


$tables_data["Mapa_ctos"]=&$tdatamapa_ctos;
$field_labels["Mapa_ctos"] = &$fieldLabelsmapa_ctos;
$fieldToolTips["Mapa_ctos"] = &$fieldToolTipsmapa_ctos;
$placeHolders["Mapa_ctos"] = &$placeHoldersmapa_ctos;
$page_titles["Mapa_ctos"] = &$pageTitlesmapa_ctos;


changeTextControlsToDate( "Mapa_ctos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Mapa_ctos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Mapa_ctos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_mapa_ctos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id_Ctos`,  `Cto`,  `Latitud`,  `Longitud`,  `Spliter`,  `Cable`,  `Localidad`,  CONCAT(`Cto`, '\\n', `Spliter`, '\\n', `Cable`, '\\n', `Localidad`) AS `DisplayOnMap`,  `Ubicacion`";
$proto0["m_strFrom"] = "FROM `ctos`";
$proto0["m_strWhere"] = "(`Localidad` NOT IN ('EL BAGRE', 'ZARAGOZA'))";
$proto0["m_strOrderBy"] = "ORDER BY `id_Ctos`";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "`Localidad` NOT IN ('EL BAGRE', 'ZARAGOZA')";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Localidad",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa_ctos"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "NOT IN ('EL BAGRE', 'ZARAGOZA')";
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
	"m_srcTableName" => "Mapa_ctos"
));

$proto6["m_sql"] = "`id_Ctos`";
$proto6["m_srcTableName"] = "Mapa_ctos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Cto",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa_ctos"
));

$proto8["m_sql"] = "`Cto`";
$proto8["m_srcTableName"] = "Mapa_ctos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Latitud",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa_ctos"
));

$proto10["m_sql"] = "`Latitud`";
$proto10["m_srcTableName"] = "Mapa_ctos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Longitud",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa_ctos"
));

$proto12["m_sql"] = "`Longitud`";
$proto12["m_srcTableName"] = "Mapa_ctos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Spliter",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa_ctos"
));

$proto14["m_sql"] = "`Spliter`";
$proto14["m_srcTableName"] = "Mapa_ctos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Cable",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa_ctos"
));

$proto16["m_sql"] = "`Cable`";
$proto16["m_srcTableName"] = "Mapa_ctos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Localidad",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa_ctos"
));

$proto18["m_sql"] = "`Localidad`";
$proto18["m_srcTableName"] = "Mapa_ctos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$proto21=array();
$proto21["m_functiontype"] = "SQLF_CUSTOM";
$proto21["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "`Cto`"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'\\n'"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "`Spliter`"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'\\n'"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "`Cable`"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'\\n'"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "`Localidad`"
));

$proto21["m_arguments"][]=$obj;
$proto21["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto21);

$proto20["m_sql"] = "CONCAT(`Cto`, '\\n', `Spliter`, '\\n', `Cable`, '\\n', `Localidad`)";
$proto20["m_srcTableName"] = "Mapa_ctos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "DisplayOnMap";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "Ubicacion",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa_ctos"
));

$proto29["m_sql"] = "`Ubicacion`";
$proto29["m_srcTableName"] = "Mapa_ctos";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto31=array();
$proto31["m_link"] = "SQLL_MAIN";
			$proto32=array();
$proto32["m_strName"] = "ctos";
$proto32["m_srcTableName"] = "Mapa_ctos";
$proto32["m_columns"] = array();
$proto32["m_columns"][] = "id_Ctos";
$proto32["m_columns"][] = "Cto";
$proto32["m_columns"][] = "Latitud";
$proto32["m_columns"][] = "Longitud";
$proto32["m_columns"][] = "Spliter";
$proto32["m_columns"][] = "Cable";
$proto32["m_columns"][] = "Localidad";
$proto32["m_columns"][] = "Lat";
$proto32["m_columns"][] = "Lng";
$proto32["m_columns"][] = "Ubicacion";
$proto32["m_columns"][] = "id_spliter";
$obj = new SQLTable($proto32);

$proto31["m_table"] = $obj;
$proto31["m_sql"] = "`ctos`";
$proto31["m_alias"] = "";
$proto31["m_srcTableName"] = "Mapa_ctos";
$proto33=array();
$proto33["m_sql"] = "";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "";
$proto33["m_havingmode"] = false;
$proto33["m_inBrackets"] = false;
$proto33["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto33);

$proto31["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto31);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto35=array();
						$obj = new SQLField(array(
	"m_strName" => "id_Ctos",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa_ctos"
));

$proto35["m_column"]=$obj;
$proto35["m_bAsc"] = 1;
$proto35["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto35);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Mapa_ctos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mapa_ctos = createSqlQuery_mapa_ctos();


	
		;

									

$tdatamapa_ctos[".sqlquery"] = $queryData_mapa_ctos;



include_once(getabspath("include/mapa_ctos_events.php"));
$tdatamapa_ctos[".hasEvents"] = true;

?>