<?php
$tdatamapa_general = array();
$tdatamapa_general[".searchableFields"] = array();
$tdatamapa_general[".ShortName"] = "mapa_general";
$tdatamapa_general[".OwnerID"] = "";
$tdatamapa_general[".OriginalTable"] = "ctos";


$tdatamapa_general[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamapa_general[".originalPagesByType"] = $tdatamapa_general[".pagesByType"];
$tdatamapa_general[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamapa_general[".originalPages"] = $tdatamapa_general[".pages"];
$tdatamapa_general[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamapa_general[".originalDefaultPages"] = $tdatamapa_general[".defaultPages"];

//	field labels
$fieldLabelsmapa_general = array();
$fieldToolTipsmapa_general = array();
$pageTitlesmapa_general = array();
$placeHoldersmapa_general = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmapa_general["Spanish"] = array();
	$fieldToolTipsmapa_general["Spanish"] = array();
	$placeHoldersmapa_general["Spanish"] = array();
	$pageTitlesmapa_general["Spanish"] = array();
	$fieldLabelsmapa_general["Spanish"]["id_Ctos"] = "Ctos";
	$fieldToolTipsmapa_general["Spanish"]["id_Ctos"] = "";
	$placeHoldersmapa_general["Spanish"]["id_Ctos"] = "";
	$fieldLabelsmapa_general["Spanish"]["Cto"] = "Cto";
	$fieldToolTipsmapa_general["Spanish"]["Cto"] = "";
	$placeHoldersmapa_general["Spanish"]["Cto"] = "";
	$fieldLabelsmapa_general["Spanish"]["Latitud"] = "Latitud";
	$fieldToolTipsmapa_general["Spanish"]["Latitud"] = "";
	$placeHoldersmapa_general["Spanish"]["Latitud"] = "";
	$fieldLabelsmapa_general["Spanish"]["Longitud"] = "Longitud";
	$fieldToolTipsmapa_general["Spanish"]["Longitud"] = "";
	$placeHoldersmapa_general["Spanish"]["Longitud"] = "";
	$fieldLabelsmapa_general["Spanish"]["Spliter"] = "Spliter";
	$fieldToolTipsmapa_general["Spanish"]["Spliter"] = "";
	$placeHoldersmapa_general["Spanish"]["Spliter"] = "";
	$fieldLabelsmapa_general["Spanish"]["Cable"] = "Cable";
	$fieldToolTipsmapa_general["Spanish"]["Cable"] = "";
	$placeHoldersmapa_general["Spanish"]["Cable"] = "";
	$fieldLabelsmapa_general["Spanish"]["Localidad"] = "Localidad";
	$fieldToolTipsmapa_general["Spanish"]["Localidad"] = "";
	$placeHoldersmapa_general["Spanish"]["Localidad"] = "";
	$fieldLabelsmapa_general["Spanish"]["DisplayOnMap"] = "Display On Map";
	$fieldToolTipsmapa_general["Spanish"]["DisplayOnMap"] = "";
	$placeHoldersmapa_general["Spanish"]["DisplayOnMap"] = "";
	$fieldLabelsmapa_general["Spanish"]["Ubicacion"] = "Ubicacion";
	$fieldToolTipsmapa_general["Spanish"]["Ubicacion"] = "";
	$placeHoldersmapa_general["Spanish"]["Ubicacion"] = "";
	$fieldLabelsmapa_general["Spanish"]["id_localidad"] = "Localidad";
	$fieldToolTipsmapa_general["Spanish"]["id_localidad"] = "";
	$placeHoldersmapa_general["Spanish"]["id_localidad"] = "";
	$fieldLabelsmapa_general["Spanish"]["id_cables"] = "Cables";
	$fieldToolTipsmapa_general["Spanish"]["id_cables"] = "";
	$placeHoldersmapa_general["Spanish"]["id_cables"] = "";
	$fieldLabelsmapa_general["Spanish"]["id_spliters"] = "Spliters";
	$fieldToolTipsmapa_general["Spanish"]["id_spliters"] = "";
	$placeHoldersmapa_general["Spanish"]["id_spliters"] = "";
	if (count($fieldToolTipsmapa_general["Spanish"]))
		$tdatamapa_general[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmapa_general["English"] = array();
	$fieldToolTipsmapa_general["English"] = array();
	$placeHoldersmapa_general["English"] = array();
	$pageTitlesmapa_general["English"] = array();
	$fieldLabelsmapa_general["English"]["id_Ctos"] = "Id Ctos";
	$fieldToolTipsmapa_general["English"]["id_Ctos"] = "";
	$placeHoldersmapa_general["English"]["id_Ctos"] = "";
	$fieldLabelsmapa_general["English"]["Cto"] = "Cto";
	$fieldToolTipsmapa_general["English"]["Cto"] = "";
	$placeHoldersmapa_general["English"]["Cto"] = "";
	$fieldLabelsmapa_general["English"]["Latitud"] = "Latitud";
	$fieldToolTipsmapa_general["English"]["Latitud"] = "";
	$placeHoldersmapa_general["English"]["Latitud"] = "";
	$fieldLabelsmapa_general["English"]["Longitud"] = "Longitud";
	$fieldToolTipsmapa_general["English"]["Longitud"] = "";
	$placeHoldersmapa_general["English"]["Longitud"] = "";
	$fieldLabelsmapa_general["English"]["Spliter"] = "Spliter";
	$fieldToolTipsmapa_general["English"]["Spliter"] = "";
	$placeHoldersmapa_general["English"]["Spliter"] = "";
	$fieldLabelsmapa_general["English"]["Cable"] = "Cable";
	$fieldToolTipsmapa_general["English"]["Cable"] = "";
	$placeHoldersmapa_general["English"]["Cable"] = "";
	$fieldLabelsmapa_general["English"]["Localidad"] = "Localidad";
	$fieldToolTipsmapa_general["English"]["Localidad"] = "";
	$placeHoldersmapa_general["English"]["Localidad"] = "";
	$fieldLabelsmapa_general["English"]["DisplayOnMap"] = "Display On Map";
	$fieldToolTipsmapa_general["English"]["DisplayOnMap"] = "";
	$placeHoldersmapa_general["English"]["DisplayOnMap"] = "";
	$fieldLabelsmapa_general["English"]["Ubicacion"] = "Ubicacion";
	$fieldToolTipsmapa_general["English"]["Ubicacion"] = "";
	$placeHoldersmapa_general["English"]["Ubicacion"] = "";
	$fieldLabelsmapa_general["English"]["id_localidad"] = "Id Localidad";
	$fieldToolTipsmapa_general["English"]["id_localidad"] = "";
	$placeHoldersmapa_general["English"]["id_localidad"] = "";
	$fieldLabelsmapa_general["English"]["id_cables"] = "Id Cables";
	$fieldToolTipsmapa_general["English"]["id_cables"] = "";
	$placeHoldersmapa_general["English"]["id_cables"] = "";
	$fieldLabelsmapa_general["English"]["id_spliters"] = "Id Spliters";
	$fieldToolTipsmapa_general["English"]["id_spliters"] = "";
	$placeHoldersmapa_general["English"]["id_spliters"] = "";
	if (count($fieldToolTipsmapa_general["English"]))
		$tdatamapa_general[".isUseToolTips"] = true;
}


	$tdatamapa_general[".NCSearch"] = true;



$tdatamapa_general[".shortTableName"] = "mapa_general";
$tdatamapa_general[".nSecOptions"] = 0;

$tdatamapa_general[".mainTableOwnerID"] = "";
$tdatamapa_general[".entityType"] = 1;
$tdatamapa_general[".connId"] = "isp_eisa_at_localhost";


$tdatamapa_general[".strOriginalTableName"] = "ctos";

	



$tdatamapa_general[".showAddInPopup"] = false;

$tdatamapa_general[".showEditInPopup"] = false;

$tdatamapa_general[".showViewInPopup"] = false;

$tdatamapa_general[".listAjax"] = false;
//	temporary
//$tdatamapa_general[".listAjax"] = false;

	$tdatamapa_general[".audit"] = false;

	$tdatamapa_general[".locking"] = false;


$pages = $tdatamapa_general[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamapa_general[".edit"] = true;
	$tdatamapa_general[".afterEditAction"] = 1;
	$tdatamapa_general[".closePopupAfterEdit"] = 1;
	$tdatamapa_general[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamapa_general[".add"] = true;
$tdatamapa_general[".afterAddAction"] = 1;
$tdatamapa_general[".closePopupAfterAdd"] = 1;
$tdatamapa_general[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamapa_general[".list"] = true;
}



$tdatamapa_general[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamapa_general[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamapa_general[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamapa_general[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamapa_general[".printFriendly"] = true;
}



$tdatamapa_general[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamapa_general[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamapa_general[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamapa_general[".isUseAjaxSuggest"] = true;



												

$tdatamapa_general[".ajaxCodeSnippetAdded"] = false;

$tdatamapa_general[".buttonsAdded"] = false;

$tdatamapa_general[".addPageEvents"] = true;

// use timepicker for search panel
$tdatamapa_general[".isUseTimeForSearch"] = false;

$tdatamapa_general[".isUseFieldsMaps"] = true;

$tdatamapa_general[".badgeColor"] = "1e90ff";


$tdatamapa_general[".allSearchFields"] = array();
$tdatamapa_general[".filterFields"] = array();
$tdatamapa_general[".requiredSearchFields"] = array();

$tdatamapa_general[".googleLikeFields"] = array();
$tdatamapa_general[".googleLikeFields"][] = "id_Ctos";
$tdatamapa_general[".googleLikeFields"][] = "Cto";
$tdatamapa_general[".googleLikeFields"][] = "Latitud";
$tdatamapa_general[".googleLikeFields"][] = "Longitud";
$tdatamapa_general[".googleLikeFields"][] = "Spliter";
$tdatamapa_general[".googleLikeFields"][] = "DisplayOnMap";
$tdatamapa_general[".googleLikeFields"][] = "Ubicacion";
$tdatamapa_general[".googleLikeFields"][] = "Cable";
$tdatamapa_general[".googleLikeFields"][] = "Localidad";
$tdatamapa_general[".googleLikeFields"][] = "id_localidad";
$tdatamapa_general[".googleLikeFields"][] = "id_cables";
$tdatamapa_general[".googleLikeFields"][] = "id_spliters";



$tdatamapa_general[".tableType"] = "list";

$tdatamapa_general[".printerPageOrientation"] = 0;
$tdatamapa_general[".nPrinterPageScale"] = 100;

$tdatamapa_general[".nPrinterSplitRecords"] = 40;

$tdatamapa_general[".geocodingEnabled"] = true;
$tdatamapa_general[".geocodingData"] = array();
$tdatamapa_general[".geocodingData"]["latField"] = "Lat";
$tdatamapa_general[".geocodingData"]["lngField"] = "Lng";
$tdatamapa_general[".geocodingData"]["addressFields"] = array();
	$tdatamapa_general[".geocodingData"]["addressFields"][] = "Latitud";
	$tdatamapa_general[".geocodingData"]["addressFields"][] = "Longitud";










$tdatamapa_general[".pageSize"] = 20;

$tdatamapa_general[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `ctos`.`id_Ctos`";
$tdatamapa_general[".strOrderBy"] = $tstrOrderBy;

$tdatamapa_general[".orderindexes"] = array();
	$tdatamapa_general[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "`ctos`.`id_Ctos`");



$tdatamapa_general[".sqlHead"] = "SELECT `ctos`.`id_Ctos`,  `ctos`.`Cto`,  `ctos`.`Latitud`,  `ctos`.`Longitud`,  `ctos`.`Spliter`,  CONCAT(`ctos`.`Cto`, CHAR(10), `ctos`.`Spliter`, CHAR(10), `cables`.`Cable`, CHAR(10), `localidad`.`Localidad`) AS `DisplayOnMap`,  `ctos`.`Ubicacion`,  `ctos`.`Cable`,  `ctos`.`Localidad`,  `localidad`.`id_localidad`,  `cables`.`id_cables`,  `spliters`.`id_spliters`";
$tdatamapa_general[".sqlFrom"] = "FROM `ctos`  INNER JOIN `spliters` ON `ctos`.`id_spliter` = `spliters`.`id_spliters`  INNER JOIN `cables` ON `spliters`.`id_cable` = `cables`.`id_cables`  INNER JOIN `localidad` ON `cables`.`id_localidad` = `localidad`.`id_localidad`";
$tdatamapa_general[".sqlWhereExpr"] = "";
$tdatamapa_general[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamapa_general[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamapa_general[".arrGroupsPerPage"] = $arrGPP;

$tdatamapa_general[".highlightSearchResults"] = true;

$tableKeysmapa_general = array();
$tableKeysmapa_general[] = "id_Ctos";
$tdatamapa_general[".Keys"] = $tableKeysmapa_general;


$tdatamapa_general[".hideMobileList"] = array();




//	id_Ctos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_Ctos";
	$fdata["GoodName"] = "id_Ctos";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Mapa_General","id_Ctos");
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
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id_Ctos";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Cto";

	

	
	$edata["LookupOrderBy"] = "id_Ctos";

	
	
	
	

	
	
	
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


	$tdatamapa_general["id_Ctos"] = $fdata;
		$tdatamapa_general[".searchableFields"][] = "id_Ctos";
//	Cto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Cto";
	$fdata["GoodName"] = "Cto";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Mapa_General","Cto");
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

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "Spliter", "lookup" => "Spliter" );

	
	

	
	
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


	$tdatamapa_general["Cto"] = $fdata;
		$tdatamapa_general[".searchableFields"][] = "Cto";
//	Latitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Latitud";
	$fdata["GoodName"] = "Latitud";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Mapa_General","Latitud");
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


	$tdatamapa_general["Latitud"] = $fdata;
		$tdatamapa_general[".searchableFields"][] = "Latitud";
//	Longitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Longitud";
	$fdata["GoodName"] = "Longitud";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Mapa_General","Longitud");
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


	$tdatamapa_general["Longitud"] = $fdata;
		$tdatamapa_general[".searchableFields"][] = "Longitud";
//	Spliter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Spliter";
	$fdata["GoodName"] = "Spliter";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Mapa_General","Spliter");
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

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "Cable", "lookup" => "cable" );

	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "Cto";

	
	
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


	$tdatamapa_general["Spliter"] = $fdata;
		$tdatamapa_general[".searchableFields"][] = "Spliter";
//	DisplayOnMap
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DisplayOnMap";
	$fdata["GoodName"] = "DisplayOnMap";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Mapa_General","DisplayOnMap");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DisplayOnMap";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT(`ctos`.`Cto`, CHAR(10), `ctos`.`Spliter`, CHAR(10), `cables`.`Cable`, CHAR(10), `localidad`.`Localidad`)";

	
	
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


	$tdatamapa_general["DisplayOnMap"] = $fdata;
		$tdatamapa_general[".searchableFields"][] = "DisplayOnMap";
//	Ubicacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Ubicacion";
	$fdata["GoodName"] = "Ubicacion";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Mapa_General","Ubicacion");
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


	$tdatamapa_general["Ubicacion"] = $fdata;
		$tdatamapa_general[".searchableFields"][] = "Ubicacion";
//	Cable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Cable";
	$fdata["GoodName"] = "Cable";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Mapa_General","Cable");
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

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "Localidad", "lookup" => "localidad" );

	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "Spliter";

	
	
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


	$tdatamapa_general["Cable"] = $fdata;
		$tdatamapa_general[".searchableFields"][] = "Cable";
//	Localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Localidad";
	$fdata["GoodName"] = "Localidad";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Mapa_General","Localidad");
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
	$edata["DependentLookups"][] = "Cable";

	
	
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


	$tdatamapa_general["Localidad"] = $fdata;
		$tdatamapa_general[".searchableFields"][] = "Localidad";
//	id_localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "id_localidad";
	$fdata["GoodName"] = "id_localidad";
	$fdata["ownerTable"] = "localidad";
	$fdata["Label"] = GetFieldLabel("Mapa_General","id_localidad");
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


	$tdatamapa_general["id_localidad"] = $fdata;
		$tdatamapa_general[".searchableFields"][] = "id_localidad";
//	id_cables
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "id_cables";
	$fdata["GoodName"] = "id_cables";
	$fdata["ownerTable"] = "cables";
	$fdata["Label"] = GetFieldLabel("Mapa_General","id_cables");
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

	

	
	$edata["LookupOrderBy"] = "id_cables";

	
	
	
	

	
	
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


	$tdatamapa_general["id_cables"] = $fdata;
		$tdatamapa_general[".searchableFields"][] = "id_cables";
//	id_spliters
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "id_spliters";
	$fdata["GoodName"] = "id_spliters";
	$fdata["ownerTable"] = "spliters";
	$fdata["Label"] = GetFieldLabel("Mapa_General","id_spliters");
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
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id_spliters";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "spliter";

	

	
	$edata["LookupOrderBy"] = "id_spliters";

	
	
	
	

	
	
	
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


	$tdatamapa_general["id_spliters"] = $fdata;
		$tdatamapa_general[".searchableFields"][] = "id_spliters";


$tables_data["Mapa_General"]=&$tdatamapa_general;
$field_labels["Mapa_General"] = &$fieldLabelsmapa_general;
$fieldToolTips["Mapa_General"] = &$fieldToolTipsmapa_general;
$placeHolders["Mapa_General"] = &$placeHoldersmapa_general;
$page_titles["Mapa_General"] = &$pageTitlesmapa_general;


changeTextControlsToDate( "Mapa_General" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Mapa_General"] = array();
//	puertos_cto
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="puertos_cto";
		$detailsParam["dOriginalTable"] = "puertos_cto";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "puertos_cto";
	$detailsParam["dCaptionTable"] = GetTableCaption("puertos_cto");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Mapa_General"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Mapa_General"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Mapa_General"][$dIndex]["masterKeys"][]="Cto";

	$detailsTablesData["Mapa_General"][$dIndex]["masterKeys"][]="Localidad";

	$detailsTablesData["Mapa_General"][$dIndex]["masterKeys"][]="Cable";

	$detailsTablesData["Mapa_General"][$dIndex]["masterKeys"][]="Spliter";

				$detailsTablesData["Mapa_General"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Mapa_General"][$dIndex]["detailKeys"][]="Cto";

		
	$detailsTablesData["Mapa_General"][$dIndex]["detailKeys"][]="Localidad";

		
	$detailsTablesData["Mapa_General"][$dIndex]["detailKeys"][]="Cable";

		
	$detailsTablesData["Mapa_General"][$dIndex]["detailKeys"][]="Spliter";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Mapa_General"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="localidad";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="localidad";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "localidad";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Mapa_General"][0] = $masterParams;
				$masterTablesData["Mapa_General"][0]["masterKeys"] = array();
	$masterTablesData["Mapa_General"][0]["masterKeys"][]="Localidad";
				$masterTablesData["Mapa_General"][0]["detailKeys"] = array();
	$masterTablesData["Mapa_General"][0]["detailKeys"][]="Localidad";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="cables";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="cables";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "cables";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Mapa_General"][1] = $masterParams;
				$masterTablesData["Mapa_General"][1]["masterKeys"] = array();
	$masterTablesData["Mapa_General"][1]["masterKeys"][]="cable";
				$masterTablesData["Mapa_General"][1]["masterKeys"][]="localidad";
				$masterTablesData["Mapa_General"][1]["detailKeys"] = array();
	$masterTablesData["Mapa_General"][1]["detailKeys"][]="Cable";
				$masterTablesData["Mapa_General"][1]["detailKeys"][]="Localidad";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="spliters";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="spliters";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "spliters";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Mapa_General"][2] = $masterParams;
				$masterTablesData["Mapa_General"][2]["masterKeys"] = array();
	$masterTablesData["Mapa_General"][2]["masterKeys"][]="spliter";
				$masterTablesData["Mapa_General"][2]["masterKeys"][]="cable";
				$masterTablesData["Mapa_General"][2]["masterKeys"][]="localidad";
				$masterTablesData["Mapa_General"][2]["detailKeys"] = array();
	$masterTablesData["Mapa_General"][2]["detailKeys"][]="Spliter";
				$masterTablesData["Mapa_General"][2]["detailKeys"][]="Cable";
				$masterTablesData["Mapa_General"][2]["detailKeys"][]="Localidad";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_mapa_general()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`ctos`.`id_Ctos`,  `ctos`.`Cto`,  `ctos`.`Latitud`,  `ctos`.`Longitud`,  `ctos`.`Spliter`,  CONCAT(`ctos`.`Cto`, CHAR(10), `ctos`.`Spliter`, CHAR(10), `cables`.`Cable`, CHAR(10), `localidad`.`Localidad`) AS `DisplayOnMap`,  `ctos`.`Ubicacion`,  `ctos`.`Cable`,  `ctos`.`Localidad`,  `localidad`.`id_localidad`,  `cables`.`id_cables`,  `spliters`.`id_spliters`";
$proto0["m_strFrom"] = "FROM `ctos`  INNER JOIN `spliters` ON `ctos`.`id_spliter` = `spliters`.`id_spliters`  INNER JOIN `cables` ON `spliters`.`id_cable` = `cables`.`id_cables`  INNER JOIN `localidad` ON `cables`.`id_localidad` = `localidad`.`id_localidad`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `ctos`.`id_Ctos`";
	
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
	"m_srcTableName" => "Mapa_General"
));

$proto6["m_sql"] = "`ctos`.`id_Ctos`";
$proto6["m_srcTableName"] = "Mapa_General";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Cto",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa_General"
));

$proto8["m_sql"] = "`ctos`.`Cto`";
$proto8["m_srcTableName"] = "Mapa_General";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Latitud",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa_General"
));

$proto10["m_sql"] = "`ctos`.`Latitud`";
$proto10["m_srcTableName"] = "Mapa_General";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Longitud",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa_General"
));

$proto12["m_sql"] = "`ctos`.`Longitud`";
$proto12["m_srcTableName"] = "Mapa_General";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Spliter",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa_General"
));

$proto14["m_sql"] = "`ctos`.`Spliter`";
$proto14["m_srcTableName"] = "Mapa_General";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$proto17=array();
$proto17["m_functiontype"] = "SQLF_CUSTOM";
$proto17["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "`ctos`.`Cto`"
));

$proto17["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "CHAR(10)"
));

$proto17["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "`ctos`.`Spliter`"
));

$proto17["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "CHAR(10)"
));

$proto17["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "`cables`.`Cable`"
));

$proto17["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "CHAR(10)"
));

$proto17["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "`localidad`.`Localidad`"
));

$proto17["m_arguments"][]=$obj;
$proto17["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto17);

$proto16["m_sql"] = "CONCAT(`ctos`.`Cto`, CHAR(10), `ctos`.`Spliter`, CHAR(10), `cables`.`Cable`, CHAR(10), `localidad`.`Localidad`)";
$proto16["m_srcTableName"] = "Mapa_General";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "DisplayOnMap";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "Ubicacion",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa_General"
));

$proto25["m_sql"] = "`ctos`.`Ubicacion`";
$proto25["m_srcTableName"] = "Mapa_General";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "Cable",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa_General"
));

$proto27["m_sql"] = "`ctos`.`Cable`";
$proto27["m_srcTableName"] = "Mapa_General";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "Localidad",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa_General"
));

$proto29["m_sql"] = "`ctos`.`Localidad`";
$proto29["m_srcTableName"] = "Mapa_General";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "id_localidad",
	"m_strTable" => "localidad",
	"m_srcTableName" => "Mapa_General"
));

$proto31["m_sql"] = "`localidad`.`id_localidad`";
$proto31["m_srcTableName"] = "Mapa_General";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cables",
	"m_strTable" => "cables",
	"m_srcTableName" => "Mapa_General"
));

$proto33["m_sql"] = "`cables`.`id_cables`";
$proto33["m_srcTableName"] = "Mapa_General";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "id_spliters",
	"m_strTable" => "spliters",
	"m_srcTableName" => "Mapa_General"
));

$proto35["m_sql"] = "`spliters`.`id_spliters`";
$proto35["m_srcTableName"] = "Mapa_General";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto37=array();
$proto37["m_link"] = "SQLL_MAIN";
			$proto38=array();
$proto38["m_strName"] = "ctos";
$proto38["m_srcTableName"] = "Mapa_General";
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
$proto37["m_srcTableName"] = "Mapa_General";
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
$proto42["m_srcTableName"] = "Mapa_General";
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
$proto41["m_srcTableName"] = "Mapa_General";
$proto43=array();
$proto43["m_sql"] = "`spliters`.`id_spliters` = `ctos`.`id_spliter`";
$proto43["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_spliters",
	"m_strTable" => "spliters",
	"m_srcTableName" => "Mapa_General"
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
$proto46["m_srcTableName"] = "Mapa_General";
$proto46["m_columns"] = array();
$proto46["m_columns"][] = "id_cables";
$proto46["m_columns"][] = "cable";
$proto46["m_columns"][] = "localidad";
$proto46["m_columns"][] = "id_localidad";
$obj = new SQLTable($proto46);

$proto45["m_table"] = $obj;
$proto45["m_sql"] = "INNER JOIN `cables` ON `spliters`.`id_cable` = `cables`.`id_cables`";
$proto45["m_alias"] = "";
$proto45["m_srcTableName"] = "Mapa_General";
$proto47=array();
$proto47["m_sql"] = "`cables`.`id_cables` = `spliters`.`id_cable`";
$proto47["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_cables",
	"m_strTable" => "cables",
	"m_srcTableName" => "Mapa_General"
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
$proto50["m_srcTableName"] = "Mapa_General";
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
$proto49["m_srcTableName"] = "Mapa_General";
$proto51=array();
$proto51["m_sql"] = "`localidad`.`id_localidad` = `cables`.`id_localidad`";
$proto51["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_localidad",
	"m_strTable" => "localidad",
	"m_srcTableName" => "Mapa_General"
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
	"m_srcTableName" => "Mapa_General"
));

$proto53["m_column"]=$obj;
$proto53["m_bAsc"] = 1;
$proto53["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto53);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Mapa_General";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mapa_general = createSqlQuery_mapa_general();


	
										;

												

$tdatamapa_general[".sqlquery"] = $queryData_mapa_general;



include_once(getabspath("include/mapa_general_events.php"));
$tdatamapa_general[".hasEvents"] = true;

?>