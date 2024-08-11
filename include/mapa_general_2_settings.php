<?php
$tdatamapa_general_2 = array();
$tdatamapa_general_2[".searchableFields"] = array();
$tdatamapa_general_2[".ShortName"] = "mapa_general_2";
$tdatamapa_general_2[".OwnerID"] = "";
$tdatamapa_general_2[".OriginalTable"] = "ctos";


$tdatamapa_general_2[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamapa_general_2[".originalPagesByType"] = $tdatamapa_general_2[".pagesByType"];
$tdatamapa_general_2[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamapa_general_2[".originalPages"] = $tdatamapa_general_2[".pages"];
$tdatamapa_general_2[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamapa_general_2[".originalDefaultPages"] = $tdatamapa_general_2[".defaultPages"];

//	field labels
$fieldLabelsmapa_general_2 = array();
$fieldToolTipsmapa_general_2 = array();
$pageTitlesmapa_general_2 = array();
$placeHoldersmapa_general_2 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmapa_general_2["Spanish"] = array();
	$fieldToolTipsmapa_general_2["Spanish"] = array();
	$placeHoldersmapa_general_2["Spanish"] = array();
	$pageTitlesmapa_general_2["Spanish"] = array();
	$fieldLabelsmapa_general_2["Spanish"]["id_Ctos"] = "Id Ctos";
	$fieldToolTipsmapa_general_2["Spanish"]["id_Ctos"] = "";
	$placeHoldersmapa_general_2["Spanish"]["id_Ctos"] = "";
	$fieldLabelsmapa_general_2["Spanish"]["Cto"] = "Cto";
	$fieldToolTipsmapa_general_2["Spanish"]["Cto"] = "";
	$placeHoldersmapa_general_2["Spanish"]["Cto"] = "";
	$fieldLabelsmapa_general_2["Spanish"]["Latitud"] = "Latitud";
	$fieldToolTipsmapa_general_2["Spanish"]["Latitud"] = "";
	$placeHoldersmapa_general_2["Spanish"]["Latitud"] = "";
	$fieldLabelsmapa_general_2["Spanish"]["Longitud"] = "Longitud";
	$fieldToolTipsmapa_general_2["Spanish"]["Longitud"] = "";
	$placeHoldersmapa_general_2["Spanish"]["Longitud"] = "";
	$fieldLabelsmapa_general_2["Spanish"]["Spliter"] = "Spliter";
	$fieldToolTipsmapa_general_2["Spanish"]["Spliter"] = "";
	$placeHoldersmapa_general_2["Spanish"]["Spliter"] = "";
	$fieldLabelsmapa_general_2["Spanish"]["Cable"] = "Cable";
	$fieldToolTipsmapa_general_2["Spanish"]["Cable"] = "";
	$placeHoldersmapa_general_2["Spanish"]["Cable"] = "";
	$fieldLabelsmapa_general_2["Spanish"]["Localidad"] = "Localidad";
	$fieldToolTipsmapa_general_2["Spanish"]["Localidad"] = "";
	$placeHoldersmapa_general_2["Spanish"]["Localidad"] = "";
	$fieldLabelsmapa_general_2["Spanish"]["DisplayOnMap"] = "Display On Map";
	$fieldToolTipsmapa_general_2["Spanish"]["DisplayOnMap"] = "";
	$placeHoldersmapa_general_2["Spanish"]["DisplayOnMap"] = "";
	$fieldLabelsmapa_general_2["Spanish"]["Ubicacion"] = "Ubicacion";
	$fieldToolTipsmapa_general_2["Spanish"]["Ubicacion"] = "";
	$placeHoldersmapa_general_2["Spanish"]["Ubicacion"] = "";
	if (count($fieldToolTipsmapa_general_2["Spanish"]))
		$tdatamapa_general_2[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmapa_general_2["English"] = array();
	$fieldToolTipsmapa_general_2["English"] = array();
	$placeHoldersmapa_general_2["English"] = array();
	$pageTitlesmapa_general_2["English"] = array();
	$fieldLabelsmapa_general_2["English"]["id_Ctos"] = "Id Ctos";
	$fieldToolTipsmapa_general_2["English"]["id_Ctos"] = "";
	$placeHoldersmapa_general_2["English"]["id_Ctos"] = "";
	$fieldLabelsmapa_general_2["English"]["Cto"] = "Cto";
	$fieldToolTipsmapa_general_2["English"]["Cto"] = "";
	$placeHoldersmapa_general_2["English"]["Cto"] = "";
	$fieldLabelsmapa_general_2["English"]["Latitud"] = "Latitud";
	$fieldToolTipsmapa_general_2["English"]["Latitud"] = "";
	$placeHoldersmapa_general_2["English"]["Latitud"] = "";
	$fieldLabelsmapa_general_2["English"]["Longitud"] = "Longitud";
	$fieldToolTipsmapa_general_2["English"]["Longitud"] = "";
	$placeHoldersmapa_general_2["English"]["Longitud"] = "";
	$fieldLabelsmapa_general_2["English"]["Spliter"] = "Spliter";
	$fieldToolTipsmapa_general_2["English"]["Spliter"] = "";
	$placeHoldersmapa_general_2["English"]["Spliter"] = "";
	$fieldLabelsmapa_general_2["English"]["Cable"] = "Cable";
	$fieldToolTipsmapa_general_2["English"]["Cable"] = "";
	$placeHoldersmapa_general_2["English"]["Cable"] = "";
	$fieldLabelsmapa_general_2["English"]["Localidad"] = "Localidad";
	$fieldToolTipsmapa_general_2["English"]["Localidad"] = "";
	$placeHoldersmapa_general_2["English"]["Localidad"] = "";
	$fieldLabelsmapa_general_2["English"]["DisplayOnMap"] = "Display On Map";
	$fieldToolTipsmapa_general_2["English"]["DisplayOnMap"] = "";
	$placeHoldersmapa_general_2["English"]["DisplayOnMap"] = "";
	$fieldLabelsmapa_general_2["English"]["Ubicacion"] = "Ubicacion";
	$fieldToolTipsmapa_general_2["English"]["Ubicacion"] = "";
	$placeHoldersmapa_general_2["English"]["Ubicacion"] = "";
	if (count($fieldToolTipsmapa_general_2["English"]))
		$tdatamapa_general_2[".isUseToolTips"] = true;
}


	$tdatamapa_general_2[".NCSearch"] = true;



$tdatamapa_general_2[".shortTableName"] = "mapa_general_2";
$tdatamapa_general_2[".nSecOptions"] = 0;

$tdatamapa_general_2[".mainTableOwnerID"] = "";
$tdatamapa_general_2[".entityType"] = 1;
$tdatamapa_general_2[".connId"] = "isp_eisa_at_localhost";


$tdatamapa_general_2[".strOriginalTableName"] = "ctos";

	



$tdatamapa_general_2[".showAddInPopup"] = false;

$tdatamapa_general_2[".showEditInPopup"] = false;

$tdatamapa_general_2[".showViewInPopup"] = false;

$tdatamapa_general_2[".listAjax"] = false;
//	temporary
//$tdatamapa_general_2[".listAjax"] = false;

	$tdatamapa_general_2[".audit"] = false;

	$tdatamapa_general_2[".locking"] = false;


$pages = $tdatamapa_general_2[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamapa_general_2[".edit"] = true;
	$tdatamapa_general_2[".afterEditAction"] = 1;
	$tdatamapa_general_2[".closePopupAfterEdit"] = 1;
	$tdatamapa_general_2[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamapa_general_2[".add"] = true;
$tdatamapa_general_2[".afterAddAction"] = 1;
$tdatamapa_general_2[".closePopupAfterAdd"] = 1;
$tdatamapa_general_2[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamapa_general_2[".list"] = true;
}



$tdatamapa_general_2[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamapa_general_2[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamapa_general_2[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamapa_general_2[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamapa_general_2[".printFriendly"] = true;
}



$tdatamapa_general_2[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamapa_general_2[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamapa_general_2[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamapa_general_2[".isUseAjaxSuggest"] = true;





$tdatamapa_general_2[".ajaxCodeSnippetAdded"] = false;

$tdatamapa_general_2[".buttonsAdded"] = false;

$tdatamapa_general_2[".addPageEvents"] = true;

// use timepicker for search panel
$tdatamapa_general_2[".isUseTimeForSearch"] = false;

$tdatamapa_general_2[".isUseFieldsMaps"] = true;

$tdatamapa_general_2[".badgeColor"] = "6DA5C8";


$tdatamapa_general_2[".allSearchFields"] = array();
$tdatamapa_general_2[".filterFields"] = array();
$tdatamapa_general_2[".requiredSearchFields"] = array();

$tdatamapa_general_2[".googleLikeFields"] = array();
$tdatamapa_general_2[".googleLikeFields"][] = "id_Ctos";
$tdatamapa_general_2[".googleLikeFields"][] = "Cto";
$tdatamapa_general_2[".googleLikeFields"][] = "Latitud";
$tdatamapa_general_2[".googleLikeFields"][] = "Longitud";
$tdatamapa_general_2[".googleLikeFields"][] = "Spliter";
$tdatamapa_general_2[".googleLikeFields"][] = "Cable";
$tdatamapa_general_2[".googleLikeFields"][] = "Localidad";
$tdatamapa_general_2[".googleLikeFields"][] = "DisplayOnMap";
$tdatamapa_general_2[".googleLikeFields"][] = "Ubicacion";



$tdatamapa_general_2[".tableType"] = "list";

$tdatamapa_general_2[".printerPageOrientation"] = 0;
$tdatamapa_general_2[".nPrinterPageScale"] = 100;

$tdatamapa_general_2[".nPrinterSplitRecords"] = 40;

$tdatamapa_general_2[".geocodingEnabled"] = true;
$tdatamapa_general_2[".geocodingData"] = array();
$tdatamapa_general_2[".geocodingData"]["latField"] = "Lat";
$tdatamapa_general_2[".geocodingData"]["lngField"] = "Lng";
$tdatamapa_general_2[".geocodingData"]["addressFields"] = array();
	$tdatamapa_general_2[".geocodingData"]["addressFields"][] = "Latitud";
	$tdatamapa_general_2[".geocodingData"]["addressFields"][] = "Longitud";










$tdatamapa_general_2[".pageSize"] = 20;

$tdatamapa_general_2[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id_Ctos`";
$tdatamapa_general_2[".strOrderBy"] = $tstrOrderBy;

$tdatamapa_general_2[".orderindexes"] = array();
	$tdatamapa_general_2[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "`id_Ctos`");



$tdatamapa_general_2[".sqlHead"] = "SELECT `id_Ctos`,  `Cto`,  `Latitud`,  `Longitud`,  `Spliter`,  `Cable`,  `Localidad`,  CONCAT(`Cto`, '\\n', `Spliter`, '\\n', `Cable`, '\\n', `Localidad`) AS `DisplayOnMap`,  `Ubicacion`";
$tdatamapa_general_2[".sqlFrom"] = "FROM `ctos`";
$tdatamapa_general_2[".sqlWhereExpr"] = "(`Localidad` NOT IN ('EL BAGRE', 'ZARAGOZA'))";
$tdatamapa_general_2[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamapa_general_2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamapa_general_2[".arrGroupsPerPage"] = $arrGPP;

$tdatamapa_general_2[".highlightSearchResults"] = true;

$tableKeysmapa_general_2 = array();
$tableKeysmapa_general_2[] = "id_Ctos";
$tdatamapa_general_2[".Keys"] = $tableKeysmapa_general_2;


$tdatamapa_general_2[".hideMobileList"] = array();




//	id_Ctos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_Ctos";
	$fdata["GoodName"] = "id_Ctos";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Mapa_General_2","id_Ctos");
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


	$tdatamapa_general_2["id_Ctos"] = $fdata;
		$tdatamapa_general_2[".searchableFields"][] = "id_Ctos";
//	Cto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Cto";
	$fdata["GoodName"] = "Cto";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Mapa_General_2","Cto");
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


	$tdatamapa_general_2["Cto"] = $fdata;
		$tdatamapa_general_2[".searchableFields"][] = "Cto";
//	Latitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Latitud";
	$fdata["GoodName"] = "Latitud";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Mapa_General_2","Latitud");
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


	$tdatamapa_general_2["Latitud"] = $fdata;
		$tdatamapa_general_2[".searchableFields"][] = "Latitud";
//	Longitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Longitud";
	$fdata["GoodName"] = "Longitud";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Mapa_General_2","Longitud");
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


	$tdatamapa_general_2["Longitud"] = $fdata;
		$tdatamapa_general_2[".searchableFields"][] = "Longitud";
//	Spliter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Spliter";
	$fdata["GoodName"] = "Spliter";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Mapa_General_2","Spliter");
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


	$tdatamapa_general_2["Spliter"] = $fdata;
		$tdatamapa_general_2[".searchableFields"][] = "Spliter";
//	Cable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Cable";
	$fdata["GoodName"] = "Cable";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Mapa_General_2","Cable");
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


	$tdatamapa_general_2["Cable"] = $fdata;
		$tdatamapa_general_2[".searchableFields"][] = "Cable";
//	Localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Localidad";
	$fdata["GoodName"] = "Localidad";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Mapa_General_2","Localidad");
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


	$tdatamapa_general_2["Localidad"] = $fdata;
		$tdatamapa_general_2[".searchableFields"][] = "Localidad";
//	DisplayOnMap
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DisplayOnMap";
	$fdata["GoodName"] = "DisplayOnMap";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Mapa_General_2","DisplayOnMap");
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


	$tdatamapa_general_2["DisplayOnMap"] = $fdata;
		$tdatamapa_general_2[".searchableFields"][] = "DisplayOnMap";
//	Ubicacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Ubicacion";
	$fdata["GoodName"] = "Ubicacion";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Mapa_General_2","Ubicacion");
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


	$tdatamapa_general_2["Ubicacion"] = $fdata;
		$tdatamapa_general_2[".searchableFields"][] = "Ubicacion";


$tables_data["Mapa_General_2"]=&$tdatamapa_general_2;
$field_labels["Mapa_General_2"] = &$fieldLabelsmapa_general_2;
$fieldToolTips["Mapa_General_2"] = &$fieldToolTipsmapa_general_2;
$placeHolders["Mapa_General_2"] = &$placeHoldersmapa_general_2;
$page_titles["Mapa_General_2"] = &$pageTitlesmapa_general_2;


changeTextControlsToDate( "Mapa_General_2" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Mapa_General_2"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Mapa_General_2"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_mapa_general_2()
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
	"m_srcTableName" => "Mapa_General_2"
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
	"m_srcTableName" => "Mapa_General_2"
));

$proto6["m_sql"] = "`id_Ctos`";
$proto6["m_srcTableName"] = "Mapa_General_2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Cto",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa_General_2"
));

$proto8["m_sql"] = "`Cto`";
$proto8["m_srcTableName"] = "Mapa_General_2";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Latitud",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa_General_2"
));

$proto10["m_sql"] = "`Latitud`";
$proto10["m_srcTableName"] = "Mapa_General_2";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Longitud",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa_General_2"
));

$proto12["m_sql"] = "`Longitud`";
$proto12["m_srcTableName"] = "Mapa_General_2";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Spliter",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa_General_2"
));

$proto14["m_sql"] = "`Spliter`";
$proto14["m_srcTableName"] = "Mapa_General_2";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Cable",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa_General_2"
));

$proto16["m_sql"] = "`Cable`";
$proto16["m_srcTableName"] = "Mapa_General_2";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Localidad",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa_General_2"
));

$proto18["m_sql"] = "`Localidad`";
$proto18["m_srcTableName"] = "Mapa_General_2";
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
$proto20["m_srcTableName"] = "Mapa_General_2";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "DisplayOnMap";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "Ubicacion",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa_General_2"
));

$proto29["m_sql"] = "`Ubicacion`";
$proto29["m_srcTableName"] = "Mapa_General_2";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto31=array();
$proto31["m_link"] = "SQLL_MAIN";
			$proto32=array();
$proto32["m_strName"] = "ctos";
$proto32["m_srcTableName"] = "Mapa_General_2";
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
$proto31["m_srcTableName"] = "Mapa_General_2";
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
	"m_srcTableName" => "Mapa_General_2"
));

$proto35["m_column"]=$obj;
$proto35["m_bAsc"] = 1;
$proto35["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto35);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Mapa_General_2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mapa_general_2 = createSqlQuery_mapa_general_2();


	
		;

									

$tdatamapa_general_2[".sqlquery"] = $queryData_mapa_general_2;



include_once(getabspath("include/mapa_general_2_events.php"));
$tdatamapa_general_2[".hasEvents"] = true;

?>