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
	$fieldLabelsmapa_ctos["Spanish"]["id_Ctos"] = "Ctos";
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
	$fieldLabelsmapa_ctos["Spanish"]["id_localidad"] = "Localidad";
	$fieldToolTipsmapa_ctos["Spanish"]["id_localidad"] = "";
	$placeHoldersmapa_ctos["Spanish"]["id_localidad"] = "";
	$fieldLabelsmapa_ctos["Spanish"]["id_cables"] = "Cables";
	$fieldToolTipsmapa_ctos["Spanish"]["id_cables"] = "";
	$placeHoldersmapa_ctos["Spanish"]["id_cables"] = "";
	$fieldLabelsmapa_ctos["Spanish"]["id_spliters"] = "Spliters";
	$fieldToolTipsmapa_ctos["Spanish"]["id_spliters"] = "";
	$placeHoldersmapa_ctos["Spanish"]["id_spliters"] = "";
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
	$fieldLabelsmapa_ctos["English"]["id_localidad"] = "Id Localidad";
	$fieldToolTipsmapa_ctos["English"]["id_localidad"] = "";
	$placeHoldersmapa_ctos["English"]["id_localidad"] = "";
	$fieldLabelsmapa_ctos["English"]["id_cables"] = "Id Cables";
	$fieldToolTipsmapa_ctos["English"]["id_cables"] = "";
	$placeHoldersmapa_ctos["English"]["id_cables"] = "";
	$fieldLabelsmapa_ctos["English"]["id_spliters"] = "Id Spliters";
	$fieldToolTipsmapa_ctos["English"]["id_spliters"] = "";
	$placeHoldersmapa_ctos["English"]["id_spliters"] = "";
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
$tdatamapa_ctos[".googleLikeFields"][] = "id_localidad";
$tdatamapa_ctos[".googleLikeFields"][] = "id_cables";
$tdatamapa_ctos[".googleLikeFields"][] = "id_spliters";



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



$tstrOrderBy = "ORDER BY `ctos`.`id_Ctos`";
$tdatamapa_ctos[".strOrderBy"] = $tstrOrderBy;

$tdatamapa_ctos[".orderindexes"] = array();
	$tdatamapa_ctos[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "`ctos`.`id_Ctos`");



$tdatamapa_ctos[".sqlHead"] = "SELECT `ctos`.`id_Ctos`,  `ctos`.`Cto`,  `ctos`.`Latitud`,  `ctos`.`Longitud`,  `ctos`.`Spliter`,  `ctos`.`Cable`,  `ctos`.`Localidad`,  CONCAT(`ctos`.`Cto`, CHAR(10), `ctos`.`Spliter`, CHAR(10), `ctos`.`Cable`, CHAR(10), `ctos`.`Localidad`) AS `DisplayOnMap`,  `ctos`.`Ubicacion`,  `localidad`.`id_localidad`,  `cables`.`id_cables`,  `spliters`.`id_spliters`";
$tdatamapa_ctos[".sqlFrom"] = "FROM `ctos`  INNER JOIN `spliters` ON `ctos`.`id_spliter` = `spliters`.`id_spliters`  INNER JOIN `cables` ON `spliters`.`id_cable` = `cables`.`id_cables`  INNER JOIN `localidad` ON `cables`.`id_localidad` = `localidad`.`id_localidad`";
$tdatamapa_ctos[".sqlWhereExpr"] = "(`ctos`.`Localidad` NOT IN ('EL BAGRE', 'ZARAGOZA'))";
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
	$fdata["FullName"] = "`ctos`.`id_Ctos`";

	
	
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

	
		
	$edata["LinkField"] = "id_Ctos";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Cto";

	

	
	$edata["LookupOrderBy"] = "id_Ctos";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "Spliter", "lookup" => "Spliter" );

	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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

		$fdata["sortValueType"] = 1;
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
	$fdata["FullName"] = "`ctos`.`Cto`";

	
	
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
	$fdata["FullName"] = "`ctos`.`Latitud`";

	
	
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
	$fdata["FullName"] = "`ctos`.`Longitud`";

	
	
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
	$fdata["FullName"] = "`ctos`.`Spliter`";

	
	
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

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "id_Ctos";

	
	
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
	$fdata["FullName"] = "`ctos`.`Cable`";

	
	
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

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "id_spliters";

	
	
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
	$fdata["FullName"] = "`ctos`.`Localidad`";

	
	
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

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "id_cables";

	
	
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
	$fdata["FullName"] = "CONCAT(`ctos`.`Cto`, CHAR(10), `ctos`.`Spliter`, CHAR(10), `ctos`.`Cable`, CHAR(10), `ctos`.`Localidad`)";

	
	
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
	$fdata["FullName"] = "`ctos`.`Ubicacion`";

	
	
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
//	id_localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "id_localidad";
	$fdata["GoodName"] = "id_localidad";
	$fdata["ownerTable"] = "localidad";
	$fdata["Label"] = GetFieldLabel("Mapa_ctos","id_localidad");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_localidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`localidad`.`id_localidad`";

	
	
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


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatamapa_ctos["id_localidad"] = $fdata;
		$tdatamapa_ctos[".searchableFields"][] = "id_localidad";
//	id_cables
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "id_cables";
	$fdata["GoodName"] = "id_cables";
	$fdata["ownerTable"] = "cables";
	$fdata["Label"] = GetFieldLabel("Mapa_ctos","id_cables");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_cables";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`cables`.`id_cables`";

	
	
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

	
		
	$edata["LinkField"] = "id_cables";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "cable";

	

	
	$edata["LookupOrderBy"] = "cable";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "Localidad", "lookup" => "localidad" );

	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatamapa_ctos["id_cables"] = $fdata;
		$tdatamapa_ctos[".searchableFields"][] = "id_cables";
//	id_spliters
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "id_spliters";
	$fdata["GoodName"] = "id_spliters";
	$fdata["ownerTable"] = "spliters";
	$fdata["Label"] = GetFieldLabel("Mapa_ctos","id_spliters");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_spliters";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`spliters`.`id_spliters`";

	
	
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

	
		
	$edata["LinkField"] = "id_spliters";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "spliter";

	

	
	$edata["LookupOrderBy"] = "id_spliters";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "Cable", "lookup" => "cable" );

	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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

		$fdata["sortValueType"] = 1;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamapa_ctos["id_spliters"] = $fdata;
		$tdatamapa_ctos[".searchableFields"][] = "id_spliters";


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
$proto0["m_strFieldList"] = "`ctos`.`id_Ctos`,  `ctos`.`Cto`,  `ctos`.`Latitud`,  `ctos`.`Longitud`,  `ctos`.`Spliter`,  `ctos`.`Cable`,  `ctos`.`Localidad`,  CONCAT(`ctos`.`Cto`, CHAR(10), `ctos`.`Spliter`, CHAR(10), `ctos`.`Cable`, CHAR(10), `ctos`.`Localidad`) AS `DisplayOnMap`,  `ctos`.`Ubicacion`,  `localidad`.`id_localidad`,  `cables`.`id_cables`,  `spliters`.`id_spliters`";
$proto0["m_strFrom"] = "FROM `ctos`  INNER JOIN `spliters` ON `ctos`.`id_spliter` = `spliters`.`id_spliters`  INNER JOIN `cables` ON `spliters`.`id_cable` = `cables`.`id_cables`  INNER JOIN `localidad` ON `cables`.`id_localidad` = `localidad`.`id_localidad`";
$proto0["m_strWhere"] = "(`ctos`.`Localidad` NOT IN ('EL BAGRE', 'ZARAGOZA'))";
$proto0["m_strOrderBy"] = "ORDER BY `ctos`.`id_Ctos`";
	
										;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "`ctos`.`Localidad` NOT IN ('EL BAGRE', 'ZARAGOZA')";
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

$proto6["m_sql"] = "`ctos`.`id_Ctos`";
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

$proto8["m_sql"] = "`ctos`.`Cto`";
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

$proto10["m_sql"] = "`ctos`.`Latitud`";
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

$proto12["m_sql"] = "`ctos`.`Longitud`";
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

$proto14["m_sql"] = "`ctos`.`Spliter`";
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

$proto16["m_sql"] = "`ctos`.`Cable`";
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

$proto18["m_sql"] = "`ctos`.`Localidad`";
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
	"m_sql" => "`ctos`.`Cto`"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "CHAR(10)"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "`ctos`.`Spliter`"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "CHAR(10)"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "`ctos`.`Cable`"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "CHAR(10)"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "`ctos`.`Localidad`"
));

$proto21["m_arguments"][]=$obj;
$proto21["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto21);

$proto20["m_sql"] = "CONCAT(`ctos`.`Cto`, CHAR(10), `ctos`.`Spliter`, CHAR(10), `ctos`.`Cable`, CHAR(10), `ctos`.`Localidad`)";
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

$proto29["m_sql"] = "`ctos`.`Ubicacion`";
$proto29["m_srcTableName"] = "Mapa_ctos";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "id_localidad",
	"m_strTable" => "localidad",
	"m_srcTableName" => "Mapa_ctos"
));

$proto31["m_sql"] = "`localidad`.`id_localidad`";
$proto31["m_srcTableName"] = "Mapa_ctos";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cables",
	"m_strTable" => "cables",
	"m_srcTableName" => "Mapa_ctos"
));

$proto33["m_sql"] = "`cables`.`id_cables`";
$proto33["m_srcTableName"] = "Mapa_ctos";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "id_spliters",
	"m_strTable" => "spliters",
	"m_srcTableName" => "Mapa_ctos"
));

$proto35["m_sql"] = "`spliters`.`id_spliters`";
$proto35["m_srcTableName"] = "Mapa_ctos";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto37=array();
$proto37["m_link"] = "SQLL_MAIN";
			$proto38=array();
$proto38["m_strName"] = "ctos";
$proto38["m_srcTableName"] = "Mapa_ctos";
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
$proto37["m_srcTableName"] = "Mapa_ctos";
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
												$proto41=array();
$proto41["m_link"] = "SQLL_INNERJOIN";
			$proto42=array();
$proto42["m_strName"] = "spliters";
$proto42["m_srcTableName"] = "Mapa_ctos";
$proto42["m_columns"] = array();
$proto42["m_columns"][] = "id_spliters";
$proto42["m_columns"][] = "spliter";
$proto42["m_columns"][] = "cable";
$proto42["m_columns"][] = "localidad";
$proto42["m_columns"][] = "id_cable";
$proto42["m_columns"][] = "Numero_de_tarjeta";
$proto42["m_columns"][] = "Numero_de_puerto";
$proto42["m_columns"][] = "Barrio";
$proto42["m_columns"][] = "id_localidad";
$obj = new SQLTable($proto42);

$proto41["m_table"] = $obj;
$proto41["m_sql"] = "INNER JOIN `spliters` ON `ctos`.`id_spliter` = `spliters`.`id_spliters`";
$proto41["m_alias"] = "";
$proto41["m_srcTableName"] = "Mapa_ctos";
$proto43=array();
$proto43["m_sql"] = "`spliters`.`id_spliters` = `ctos`.`id_spliter`";
$proto43["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_spliters",
	"m_strTable" => "spliters",
	"m_srcTableName" => "Mapa_ctos"
));

$proto43["m_column"]=$obj;
$proto43["m_contained"] = array();
$proto43["m_strCase"] = "= `ctos`.`id_spliter`";
$proto43["m_havingmode"] = false;
$proto43["m_inBrackets"] = false;
$proto43["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto43);

$proto41["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto41);

$proto0["m_fromlist"][]=$obj;
												$proto45=array();
$proto45["m_link"] = "SQLL_INNERJOIN";
			$proto46=array();
$proto46["m_strName"] = "cables";
$proto46["m_srcTableName"] = "Mapa_ctos";
$proto46["m_columns"] = array();
$proto46["m_columns"][] = "id_cables";
$proto46["m_columns"][] = "cable";
$proto46["m_columns"][] = "localidad";
$proto46["m_columns"][] = "id_localidad";
$obj = new SQLTable($proto46);

$proto45["m_table"] = $obj;
$proto45["m_sql"] = "INNER JOIN `cables` ON `spliters`.`id_cable` = `cables`.`id_cables`";
$proto45["m_alias"] = "";
$proto45["m_srcTableName"] = "Mapa_ctos";
$proto47=array();
$proto47["m_sql"] = "`cables`.`id_cables` = `spliters`.`id_cable`";
$proto47["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_cables",
	"m_strTable" => "cables",
	"m_srcTableName" => "Mapa_ctos"
));

$proto47["m_column"]=$obj;
$proto47["m_contained"] = array();
$proto47["m_strCase"] = "= `spliters`.`id_cable`";
$proto47["m_havingmode"] = false;
$proto47["m_inBrackets"] = false;
$proto47["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto47);

$proto45["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto45);

$proto0["m_fromlist"][]=$obj;
												$proto49=array();
$proto49["m_link"] = "SQLL_INNERJOIN";
			$proto50=array();
$proto50["m_strName"] = "localidad";
$proto50["m_srcTableName"] = "Mapa_ctos";
$proto50["m_columns"] = array();
$proto50["m_columns"][] = "id_localidad";
$proto50["m_columns"][] = "Localidad";
$proto50["m_columns"][] = "Tipo_Olt";
$proto50["m_columns"][] = "Serial_Olt";
$proto50["m_columns"][] = "Tipo_Mikrotik";
$proto50["m_columns"][] = "Serial_Mikrotik";
$proto50["m_columns"][] = "Serial_Ont_Prueba";
$proto50["m_columns"][] = "Serial_Raspberry";
$proto50["m_columns"][] = "Serial_Camara";
$proto50["m_columns"][] = "Nombre_del_custodio";
$proto50["m_columns"][] = "Telefono_del_custodio";
$proto50["m_columns"][] = "Contrato_de_energia";
$proto50["m_columns"][] = "Latitud";
$proto50["m_columns"][] = "Longitud";
$proto50["m_columns"][] = "Mapa";
$proto50["m_columns"][] = "Direccion";
$proto50["m_columns"][] = "Observaciones";
$proto50["m_columns"][] = "Foto";
$obj = new SQLTable($proto50);

$proto49["m_table"] = $obj;
$proto49["m_sql"] = "INNER JOIN `localidad` ON `cables`.`id_localidad` = `localidad`.`id_localidad`";
$proto49["m_alias"] = "";
$proto49["m_srcTableName"] = "Mapa_ctos";
$proto51=array();
$proto51["m_sql"] = "`localidad`.`id_localidad` = `cables`.`id_localidad`";
$proto51["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_localidad",
	"m_strTable" => "localidad",
	"m_srcTableName" => "Mapa_ctos"
));

$proto51["m_column"]=$obj;
$proto51["m_contained"] = array();
$proto51["m_strCase"] = "= `cables`.`id_localidad`";
$proto51["m_havingmode"] = false;
$proto51["m_inBrackets"] = false;
$proto51["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto51);

$proto49["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto49);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto53=array();
						$obj = new SQLField(array(
	"m_strName" => "id_Ctos",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa_ctos"
));

$proto53["m_column"]=$obj;
$proto53["m_bAsc"] = 1;
$proto53["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto53);

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