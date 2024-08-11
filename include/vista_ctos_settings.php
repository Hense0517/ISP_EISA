<?php
$tdatavista_ctos = array();
$tdatavista_ctos[".searchableFields"] = array();
$tdatavista_ctos[".ShortName"] = "vista_ctos";
$tdatavista_ctos[".OwnerID"] = "";
$tdatavista_ctos[".OriginalTable"] = "localidad";


$tdatavista_ctos[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatavista_ctos[".originalPagesByType"] = $tdatavista_ctos[".pagesByType"];
$tdatavista_ctos[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatavista_ctos[".originalPages"] = $tdatavista_ctos[".pages"];
$tdatavista_ctos[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatavista_ctos[".originalDefaultPages"] = $tdatavista_ctos[".defaultPages"];

//	field labels
$fieldLabelsvista_ctos = array();
$fieldToolTipsvista_ctos = array();
$pageTitlesvista_ctos = array();
$placeHoldersvista_ctos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsvista_ctos["Spanish"] = array();
	$fieldToolTipsvista_ctos["Spanish"] = array();
	$placeHoldersvista_ctos["Spanish"] = array();
	$pageTitlesvista_ctos["Spanish"] = array();
	$fieldLabelsvista_ctos["Spanish"]["id_localidad"] = "Id Localidad";
	$fieldToolTipsvista_ctos["Spanish"]["id_localidad"] = "";
	$placeHoldersvista_ctos["Spanish"]["id_localidad"] = "";
	$fieldLabelsvista_ctos["Spanish"]["Localidad"] = "Localidad";
	$fieldToolTipsvista_ctos["Spanish"]["Localidad"] = "";
	$placeHoldersvista_ctos["Spanish"]["Localidad"] = "";
	$fieldLabelsvista_ctos["Spanish"]["Cto"] = "Cto";
	$fieldToolTipsvista_ctos["Spanish"]["Cto"] = "";
	$placeHoldersvista_ctos["Spanish"]["Cto"] = "";
	$fieldLabelsvista_ctos["Spanish"]["Latitud"] = "Latitud";
	$fieldToolTipsvista_ctos["Spanish"]["Latitud"] = "";
	$placeHoldersvista_ctos["Spanish"]["Latitud"] = "";
	$fieldLabelsvista_ctos["Spanish"]["Longitud"] = "Longitud";
	$fieldToolTipsvista_ctos["Spanish"]["Longitud"] = "";
	$placeHoldersvista_ctos["Spanish"]["Longitud"] = "";
	$fieldLabelsvista_ctos["Spanish"]["Spliter"] = "Spliter";
	$fieldToolTipsvista_ctos["Spanish"]["Spliter"] = "";
	$placeHoldersvista_ctos["Spanish"]["Spliter"] = "";
	$fieldLabelsvista_ctos["Spanish"]["Cable"] = "Cable";
	$fieldToolTipsvista_ctos["Spanish"]["Cable"] = "";
	$placeHoldersvista_ctos["Spanish"]["Cable"] = "";
	$fieldLabelsvista_ctos["Spanish"]["DisplayOnMap"] = "Display On Map";
	$fieldToolTipsvista_ctos["Spanish"]["DisplayOnMap"] = "";
	$placeHoldersvista_ctos["Spanish"]["DisplayOnMap"] = "";
	if (count($fieldToolTipsvista_ctos["Spanish"]))
		$tdatavista_ctos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvista_ctos["English"] = array();
	$fieldToolTipsvista_ctos["English"] = array();
	$placeHoldersvista_ctos["English"] = array();
	$pageTitlesvista_ctos["English"] = array();
	$fieldLabelsvista_ctos["English"]["id_localidad"] = "Id Localidad";
	$fieldToolTipsvista_ctos["English"]["id_localidad"] = "";
	$placeHoldersvista_ctos["English"]["id_localidad"] = "";
	$fieldLabelsvista_ctos["English"]["Localidad"] = "Localidad";
	$fieldToolTipsvista_ctos["English"]["Localidad"] = "";
	$placeHoldersvista_ctos["English"]["Localidad"] = "";
	$fieldLabelsvista_ctos["English"]["Cto"] = "Cto";
	$fieldToolTipsvista_ctos["English"]["Cto"] = "";
	$placeHoldersvista_ctos["English"]["Cto"] = "";
	$fieldLabelsvista_ctos["English"]["Latitud"] = "Latitud";
	$fieldToolTipsvista_ctos["English"]["Latitud"] = "";
	$placeHoldersvista_ctos["English"]["Latitud"] = "";
	$fieldLabelsvista_ctos["English"]["Longitud"] = "Longitud";
	$fieldToolTipsvista_ctos["English"]["Longitud"] = "";
	$placeHoldersvista_ctos["English"]["Longitud"] = "";
	$fieldLabelsvista_ctos["English"]["Spliter"] = "Spliter";
	$fieldToolTipsvista_ctos["English"]["Spliter"] = "";
	$placeHoldersvista_ctos["English"]["Spliter"] = "";
	$fieldLabelsvista_ctos["English"]["Cable"] = "Cable";
	$fieldToolTipsvista_ctos["English"]["Cable"] = "";
	$placeHoldersvista_ctos["English"]["Cable"] = "";
	$fieldLabelsvista_ctos["English"]["DisplayOnMap"] = "Display On Map";
	$fieldToolTipsvista_ctos["English"]["DisplayOnMap"] = "";
	$placeHoldersvista_ctos["English"]["DisplayOnMap"] = "";
	if (count($fieldToolTipsvista_ctos["English"]))
		$tdatavista_ctos[".isUseToolTips"] = true;
}


	$tdatavista_ctos[".NCSearch"] = true;



$tdatavista_ctos[".shortTableName"] = "vista_ctos";
$tdatavista_ctos[".nSecOptions"] = 0;

$tdatavista_ctos[".mainTableOwnerID"] = "";
$tdatavista_ctos[".entityType"] = 1;
$tdatavista_ctos[".connId"] = "isp_eisa_at_localhost";


$tdatavista_ctos[".strOriginalTableName"] = "localidad";

	



$tdatavista_ctos[".showAddInPopup"] = false;

$tdatavista_ctos[".showEditInPopup"] = false;

$tdatavista_ctos[".showViewInPopup"] = false;

$tdatavista_ctos[".listAjax"] = false;
//	temporary
//$tdatavista_ctos[".listAjax"] = false;

	$tdatavista_ctos[".audit"] = false;

	$tdatavista_ctos[".locking"] = false;


$pages = $tdatavista_ctos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavista_ctos[".edit"] = true;
	$tdatavista_ctos[".afterEditAction"] = 1;
	$tdatavista_ctos[".closePopupAfterEdit"] = 1;
	$tdatavista_ctos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavista_ctos[".add"] = true;
$tdatavista_ctos[".afterAddAction"] = 1;
$tdatavista_ctos[".closePopupAfterAdd"] = 1;
$tdatavista_ctos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavista_ctos[".list"] = true;
}



$tdatavista_ctos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavista_ctos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavista_ctos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavista_ctos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavista_ctos[".printFriendly"] = true;
}



$tdatavista_ctos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavista_ctos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavista_ctos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavista_ctos[".isUseAjaxSuggest"] = true;





$tdatavista_ctos[".ajaxCodeSnippetAdded"] = false;

$tdatavista_ctos[".buttonsAdded"] = false;

$tdatavista_ctos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavista_ctos[".isUseTimeForSearch"] = false;


$tdatavista_ctos[".badgeColor"] = "9acd32";


$tdatavista_ctos[".allSearchFields"] = array();
$tdatavista_ctos[".filterFields"] = array();
$tdatavista_ctos[".requiredSearchFields"] = array();

$tdatavista_ctos[".googleLikeFields"] = array();
$tdatavista_ctos[".googleLikeFields"][] = "id_localidad";
$tdatavista_ctos[".googleLikeFields"][] = "Localidad";
$tdatavista_ctos[".googleLikeFields"][] = "Cto";
$tdatavista_ctos[".googleLikeFields"][] = "Latitud";
$tdatavista_ctos[".googleLikeFields"][] = "Longitud";
$tdatavista_ctos[".googleLikeFields"][] = "Spliter";
$tdatavista_ctos[".googleLikeFields"][] = "Cable";
$tdatavista_ctos[".googleLikeFields"][] = "DisplayOnMap";



$tdatavista_ctos[".tableType"] = "list";

$tdatavista_ctos[".printerPageOrientation"] = 0;
$tdatavista_ctos[".nPrinterPageScale"] = 100;

$tdatavista_ctos[".nPrinterSplitRecords"] = 40;

$tdatavista_ctos[".geocodingEnabled"] = false;










$tdatavista_ctos[".pageSize"] = 15000;

$tdatavista_ctos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatavista_ctos[".strOrderBy"] = $tstrOrderBy;

$tdatavista_ctos[".orderindexes"] = array();


$tdatavista_ctos[".sqlHead"] = "SELECT `localidad`.`id_localidad`,  `localidad`.`Localidad`,  `ctos`.`Cto`,  `ctos`.`Latitud`,  `ctos`.`Longitud`,  `ctos`.`Spliter`,  `ctos`.`Cable`,  CONCAT(`ctos`.`Cto`, '\\n', `ctos`.`Spliter`, '\\n', `ctos`.`Cable`, '\\n', `localidad`.`Localidad`) AS `DisplayOnMap`";
$tdatavista_ctos[".sqlFrom"] = "FROM `localidad`  INNER JOIN `ctos` ON `localidad`.`Localidad` = `ctos`.`Localidad`";
$tdatavista_ctos[".sqlWhereExpr"] = "";
$tdatavista_ctos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = -1;
$tdatavista_ctos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavista_ctos[".arrGroupsPerPage"] = $arrGPP;

$tdatavista_ctos[".highlightSearchResults"] = true;

$tableKeysvista_ctos = array();
$tableKeysvista_ctos[] = "id_localidad";
$tdatavista_ctos[".Keys"] = $tableKeysvista_ctos;


$tdatavista_ctos[".hideMobileList"] = array();




//	id_localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_localidad";
	$fdata["GoodName"] = "id_localidad";
	$fdata["ownerTable"] = "localidad";
	$fdata["Label"] = GetFieldLabel("vista_ctos","id_localidad");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_localidad";

		$fdata["sourceSingle"] = "id_localidad";

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


	$tdatavista_ctos["id_localidad"] = $fdata;
		$tdatavista_ctos[".searchableFields"][] = "id_localidad";
//	Localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Localidad";
	$fdata["GoodName"] = "Localidad";
	$fdata["ownerTable"] = "localidad";
	$fdata["Label"] = GetFieldLabel("vista_ctos","Localidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Localidad";

		$fdata["sourceSingle"] = "Localidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`localidad`.`Localidad`";

	
	
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


	$tdatavista_ctos["Localidad"] = $fdata;
		$tdatavista_ctos[".searchableFields"][] = "Localidad";
//	Cto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Cto";
	$fdata["GoodName"] = "Cto";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("vista_ctos","Cto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Cto";

	
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


	$tdatavista_ctos["Cto"] = $fdata;
		$tdatavista_ctos[".searchableFields"][] = "Cto";
//	Latitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Latitud";
	$fdata["GoodName"] = "Latitud";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("vista_ctos","Latitud");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Latitud";

	
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


	$tdatavista_ctos["Latitud"] = $fdata;
		$tdatavista_ctos[".searchableFields"][] = "Latitud";
//	Longitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Longitud";
	$fdata["GoodName"] = "Longitud";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("vista_ctos","Longitud");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Longitud";

	
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


	$tdatavista_ctos["Longitud"] = $fdata;
		$tdatavista_ctos[".searchableFields"][] = "Longitud";
//	Spliter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Spliter";
	$fdata["GoodName"] = "Spliter";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("vista_ctos","Spliter");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Spliter";

	
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


	$tdatavista_ctos["Spliter"] = $fdata;
		$tdatavista_ctos[".searchableFields"][] = "Spliter";
//	Cable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Cable";
	$fdata["GoodName"] = "Cable";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("vista_ctos","Cable");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Cable";

	
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


	$tdatavista_ctos["Cable"] = $fdata;
		$tdatavista_ctos[".searchableFields"][] = "Cable";
//	DisplayOnMap
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DisplayOnMap";
	$fdata["GoodName"] = "DisplayOnMap";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vista_ctos","DisplayOnMap");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DisplayOnMap";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT(`ctos`.`Cto`, '\\n', `ctos`.`Spliter`, '\\n', `ctos`.`Cable`, '\\n', `localidad`.`Localidad`)";

	
	
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


	$tdatavista_ctos["DisplayOnMap"] = $fdata;
		$tdatavista_ctos[".searchableFields"][] = "DisplayOnMap";


$tables_data["vista_ctos"]=&$tdatavista_ctos;
$field_labels["vista_ctos"] = &$fieldLabelsvista_ctos;
$fieldToolTips["vista_ctos"] = &$fieldToolTipsvista_ctos;
$placeHolders["vista_ctos"] = &$placeHoldersvista_ctos;
$page_titles["vista_ctos"] = &$pageTitlesvista_ctos;


changeTextControlsToDate( "vista_ctos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["vista_ctos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["vista_ctos"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="localidad";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="localidad";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "localidad";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["vista_ctos"][0] = $masterParams;
				$masterTablesData["vista_ctos"][0]["masterKeys"] = array();
	$masterTablesData["vista_ctos"][0]["masterKeys"][]="Localidad";
				$masterTablesData["vista_ctos"][0]["detailKeys"] = array();
	$masterTablesData["vista_ctos"][0]["detailKeys"][]="Localidad";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vista_ctos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`localidad`.`id_localidad`,  `localidad`.`Localidad`,  `ctos`.`Cto`,  `ctos`.`Latitud`,  `ctos`.`Longitud`,  `ctos`.`Spliter`,  `ctos`.`Cable`,  CONCAT(`ctos`.`Cto`, '\\n', `ctos`.`Spliter`, '\\n', `ctos`.`Cable`, '\\n', `localidad`.`Localidad`) AS `DisplayOnMap`";
$proto0["m_strFrom"] = "FROM `localidad`  INNER JOIN `ctos` ON `localidad`.`Localidad` = `ctos`.`Localidad`";
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
	"m_strName" => "id_localidad",
	"m_strTable" => "localidad",
	"m_srcTableName" => "vista_ctos"
));

$proto6["m_sql"] = "`localidad`.`id_localidad`";
$proto6["m_srcTableName"] = "vista_ctos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Localidad",
	"m_strTable" => "localidad",
	"m_srcTableName" => "vista_ctos"
));

$proto8["m_sql"] = "`localidad`.`Localidad`";
$proto8["m_srcTableName"] = "vista_ctos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Cto",
	"m_strTable" => "ctos",
	"m_srcTableName" => "vista_ctos"
));

$proto10["m_sql"] = "`ctos`.`Cto`";
$proto10["m_srcTableName"] = "vista_ctos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Latitud",
	"m_strTable" => "ctos",
	"m_srcTableName" => "vista_ctos"
));

$proto12["m_sql"] = "`ctos`.`Latitud`";
$proto12["m_srcTableName"] = "vista_ctos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Longitud",
	"m_strTable" => "ctos",
	"m_srcTableName" => "vista_ctos"
));

$proto14["m_sql"] = "`ctos`.`Longitud`";
$proto14["m_srcTableName"] = "vista_ctos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Spliter",
	"m_strTable" => "ctos",
	"m_srcTableName" => "vista_ctos"
));

$proto16["m_sql"] = "`ctos`.`Spliter`";
$proto16["m_srcTableName"] = "vista_ctos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Cable",
	"m_strTable" => "ctos",
	"m_srcTableName" => "vista_ctos"
));

$proto18["m_sql"] = "`ctos`.`Cable`";
$proto18["m_srcTableName"] = "vista_ctos";
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
	"m_sql" => "'\\n'"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "`ctos`.`Spliter`"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'\\n'"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "`ctos`.`Cable`"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'\\n'"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "`localidad`.`Localidad`"
));

$proto21["m_arguments"][]=$obj;
$proto21["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto21);

$proto20["m_sql"] = "CONCAT(`ctos`.`Cto`, '\\n', `ctos`.`Spliter`, '\\n', `ctos`.`Cable`, '\\n', `localidad`.`Localidad`)";
$proto20["m_srcTableName"] = "vista_ctos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "DisplayOnMap";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto29=array();
$proto29["m_link"] = "SQLL_MAIN";
			$proto30=array();
$proto30["m_strName"] = "localidad";
$proto30["m_srcTableName"] = "vista_ctos";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "id_localidad";
$proto30["m_columns"][] = "Localidad";
$obj = new SQLTable($proto30);

$proto29["m_table"] = $obj;
$proto29["m_sql"] = "`localidad`";
$proto29["m_alias"] = "";
$proto29["m_srcTableName"] = "vista_ctos";
$proto31=array();
$proto31["m_sql"] = "";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "";
$proto31["m_havingmode"] = false;
$proto31["m_inBrackets"] = false;
$proto31["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto31);

$proto29["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto29);

$proto0["m_fromlist"][]=$obj;
												$proto33=array();
$proto33["m_link"] = "SQLL_INNERJOIN";
			$proto34=array();
$proto34["m_strName"] = "ctos";
$proto34["m_srcTableName"] = "vista_ctos";
$proto34["m_columns"] = array();
$proto34["m_columns"][] = "id_Ctos";
$proto34["m_columns"][] = "Cto";
$proto34["m_columns"][] = "Latitud";
$proto34["m_columns"][] = "Longitud";
$proto34["m_columns"][] = "Spliter";
$proto34["m_columns"][] = "Cable";
$proto34["m_columns"][] = "Localidad";
$proto34["m_columns"][] = "Lat";
$proto34["m_columns"][] = "Lng";
$obj = new SQLTable($proto34);

$proto33["m_table"] = $obj;
$proto33["m_sql"] = "INNER JOIN `ctos` ON `localidad`.`Localidad` = `ctos`.`Localidad`";
$proto33["m_alias"] = "";
$proto33["m_srcTableName"] = "vista_ctos";
$proto35=array();
$proto35["m_sql"] = "`ctos`.`Localidad` = `localidad`.`Localidad`";
$proto35["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Localidad",
	"m_strTable" => "ctos",
	"m_srcTableName" => "vista_ctos"
));

$proto35["m_column"]=$obj;
$proto35["m_contained"] = array();
$proto35["m_strCase"] = "= `localidad`.`Localidad`";
$proto35["m_havingmode"] = false;
$proto35["m_inBrackets"] = false;
$proto35["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto35);

$proto33["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto33);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="vista_ctos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vista_ctos = createSqlQuery_vista_ctos();


	
		;

								

$tdatavista_ctos[".sqlquery"] = $queryData_vista_ctos;



$tdatavista_ctos[".hasEvents"] = false;

?>