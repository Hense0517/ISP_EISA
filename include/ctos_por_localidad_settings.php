<?php
$tdatactos_por_localidad = array();
$tdatactos_por_localidad[".searchableFields"] = array();
$tdatactos_por_localidad[".ShortName"] = "ctos_por_localidad";
$tdatactos_por_localidad[".OwnerID"] = "";
$tdatactos_por_localidad[".OriginalTable"] = "localidad";


$tdatactos_por_localidad[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatactos_por_localidad[".originalPagesByType"] = $tdatactos_por_localidad[".pagesByType"];
$tdatactos_por_localidad[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatactos_por_localidad[".originalPages"] = $tdatactos_por_localidad[".pages"];
$tdatactos_por_localidad[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatactos_por_localidad[".originalDefaultPages"] = $tdatactos_por_localidad[".defaultPages"];

//	field labels
$fieldLabelsctos_por_localidad = array();
$fieldToolTipsctos_por_localidad = array();
$pageTitlesctos_por_localidad = array();
$placeHoldersctos_por_localidad = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsctos_por_localidad["Spanish"] = array();
	$fieldToolTipsctos_por_localidad["Spanish"] = array();
	$placeHoldersctos_por_localidad["Spanish"] = array();
	$pageTitlesctos_por_localidad["Spanish"] = array();
	$fieldLabelsctos_por_localidad["Spanish"]["id_localidad"] = "Id Localidad";
	$fieldToolTipsctos_por_localidad["Spanish"]["id_localidad"] = "";
	$placeHoldersctos_por_localidad["Spanish"]["id_localidad"] = "";
	$fieldLabelsctos_por_localidad["Spanish"]["Localidad"] = "Localidad";
	$fieldToolTipsctos_por_localidad["Spanish"]["Localidad"] = "";
	$placeHoldersctos_por_localidad["Spanish"]["Localidad"] = "";
	$fieldLabelsctos_por_localidad["Spanish"]["Cto"] = "Cto";
	$fieldToolTipsctos_por_localidad["Spanish"]["Cto"] = "";
	$placeHoldersctos_por_localidad["Spanish"]["Cto"] = "";
	$fieldLabelsctos_por_localidad["Spanish"]["Latitud"] = "Latitud";
	$fieldToolTipsctos_por_localidad["Spanish"]["Latitud"] = "";
	$placeHoldersctos_por_localidad["Spanish"]["Latitud"] = "";
	$fieldLabelsctos_por_localidad["Spanish"]["Longitud"] = "Longitud";
	$fieldToolTipsctos_por_localidad["Spanish"]["Longitud"] = "";
	$placeHoldersctos_por_localidad["Spanish"]["Longitud"] = "";
	$fieldLabelsctos_por_localidad["Spanish"]["Spliter"] = "Spliter";
	$fieldToolTipsctos_por_localidad["Spanish"]["Spliter"] = "";
	$placeHoldersctos_por_localidad["Spanish"]["Spliter"] = "";
	$fieldLabelsctos_por_localidad["Spanish"]["Cable"] = "Cable";
	$fieldToolTipsctos_por_localidad["Spanish"]["Cable"] = "";
	$placeHoldersctos_por_localidad["Spanish"]["Cable"] = "";
	$fieldLabelsctos_por_localidad["Spanish"]["DisplayOnMap"] = "Display On Map";
	$fieldToolTipsctos_por_localidad["Spanish"]["DisplayOnMap"] = "";
	$placeHoldersctos_por_localidad["Spanish"]["DisplayOnMap"] = "";
	if (count($fieldToolTipsctos_por_localidad["Spanish"]))
		$tdatactos_por_localidad[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsctos_por_localidad["English"] = array();
	$fieldToolTipsctos_por_localidad["English"] = array();
	$placeHoldersctos_por_localidad["English"] = array();
	$pageTitlesctos_por_localidad["English"] = array();
	$fieldLabelsctos_por_localidad["English"]["id_localidad"] = "Id Localidad";
	$fieldToolTipsctos_por_localidad["English"]["id_localidad"] = "";
	$placeHoldersctos_por_localidad["English"]["id_localidad"] = "";
	$fieldLabelsctos_por_localidad["English"]["Localidad"] = "Localidad";
	$fieldToolTipsctos_por_localidad["English"]["Localidad"] = "";
	$placeHoldersctos_por_localidad["English"]["Localidad"] = "";
	$fieldLabelsctos_por_localidad["English"]["Cto"] = "Cto";
	$fieldToolTipsctos_por_localidad["English"]["Cto"] = "";
	$placeHoldersctos_por_localidad["English"]["Cto"] = "";
	$fieldLabelsctos_por_localidad["English"]["Latitud"] = "Latitud";
	$fieldToolTipsctos_por_localidad["English"]["Latitud"] = "";
	$placeHoldersctos_por_localidad["English"]["Latitud"] = "";
	$fieldLabelsctos_por_localidad["English"]["Longitud"] = "Longitud";
	$fieldToolTipsctos_por_localidad["English"]["Longitud"] = "";
	$placeHoldersctos_por_localidad["English"]["Longitud"] = "";
	$fieldLabelsctos_por_localidad["English"]["Spliter"] = "Spliter";
	$fieldToolTipsctos_por_localidad["English"]["Spliter"] = "";
	$placeHoldersctos_por_localidad["English"]["Spliter"] = "";
	$fieldLabelsctos_por_localidad["English"]["Cable"] = "Cable";
	$fieldToolTipsctos_por_localidad["English"]["Cable"] = "";
	$placeHoldersctos_por_localidad["English"]["Cable"] = "";
	$fieldLabelsctos_por_localidad["English"]["DisplayOnMap"] = "Display On Map";
	$fieldToolTipsctos_por_localidad["English"]["DisplayOnMap"] = "";
	$placeHoldersctos_por_localidad["English"]["DisplayOnMap"] = "";
	if (count($fieldToolTipsctos_por_localidad["English"]))
		$tdatactos_por_localidad[".isUseToolTips"] = true;
}


	$tdatactos_por_localidad[".NCSearch"] = true;



$tdatactos_por_localidad[".shortTableName"] = "ctos_por_localidad";
$tdatactos_por_localidad[".nSecOptions"] = 0;

$tdatactos_por_localidad[".mainTableOwnerID"] = "";
$tdatactos_por_localidad[".entityType"] = 1;
$tdatactos_por_localidad[".connId"] = "isp_eisa_at_localhost";


$tdatactos_por_localidad[".strOriginalTableName"] = "localidad";

	



$tdatactos_por_localidad[".showAddInPopup"] = false;

$tdatactos_por_localidad[".showEditInPopup"] = false;

$tdatactos_por_localidad[".showViewInPopup"] = false;

$tdatactos_por_localidad[".listAjax"] = false;
//	temporary
//$tdatactos_por_localidad[".listAjax"] = false;

	$tdatactos_por_localidad[".audit"] = false;

	$tdatactos_por_localidad[".locking"] = false;


$pages = $tdatactos_por_localidad[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatactos_por_localidad[".edit"] = true;
	$tdatactos_por_localidad[".afterEditAction"] = 1;
	$tdatactos_por_localidad[".closePopupAfterEdit"] = 1;
	$tdatactos_por_localidad[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatactos_por_localidad[".add"] = true;
$tdatactos_por_localidad[".afterAddAction"] = 1;
$tdatactos_por_localidad[".closePopupAfterAdd"] = 1;
$tdatactos_por_localidad[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatactos_por_localidad[".list"] = true;
}



$tdatactos_por_localidad[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatactos_por_localidad[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatactos_por_localidad[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatactos_por_localidad[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatactos_por_localidad[".printFriendly"] = true;
}



$tdatactos_por_localidad[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatactos_por_localidad[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatactos_por_localidad[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatactos_por_localidad[".isUseAjaxSuggest"] = true;





$tdatactos_por_localidad[".ajaxCodeSnippetAdded"] = false;

$tdatactos_por_localidad[".buttonsAdded"] = false;

$tdatactos_por_localidad[".addPageEvents"] = false;

// use timepicker for search panel
$tdatactos_por_localidad[".isUseTimeForSearch"] = false;


$tdatactos_por_localidad[".badgeColor"] = "cd853f";


$tdatactos_por_localidad[".allSearchFields"] = array();
$tdatactos_por_localidad[".filterFields"] = array();
$tdatactos_por_localidad[".requiredSearchFields"] = array();

$tdatactos_por_localidad[".googleLikeFields"] = array();
$tdatactos_por_localidad[".googleLikeFields"][] = "id_localidad";
$tdatactos_por_localidad[".googleLikeFields"][] = "Localidad";
$tdatactos_por_localidad[".googleLikeFields"][] = "Cto";
$tdatactos_por_localidad[".googleLikeFields"][] = "Latitud";
$tdatactos_por_localidad[".googleLikeFields"][] = "Longitud";
$tdatactos_por_localidad[".googleLikeFields"][] = "Spliter";
$tdatactos_por_localidad[".googleLikeFields"][] = "Cable";
$tdatactos_por_localidad[".googleLikeFields"][] = "DisplayOnMap";



$tdatactos_por_localidad[".tableType"] = "list";

$tdatactos_por_localidad[".printerPageOrientation"] = 0;
$tdatactos_por_localidad[".nPrinterPageScale"] = 100;

$tdatactos_por_localidad[".nPrinterSplitRecords"] = 40;

$tdatactos_por_localidad[".geocodingEnabled"] = false;










$tdatactos_por_localidad[".pageSize"] = 15000;

$tdatactos_por_localidad[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatactos_por_localidad[".strOrderBy"] = $tstrOrderBy;

$tdatactos_por_localidad[".orderindexes"] = array();


$tdatactos_por_localidad[".sqlHead"] = "SELECT `localidad`.`id_localidad`,  `localidad`.`Localidad`,  `ctos`.`Cto`,  `ctos`.`Latitud`,  `ctos`.`Longitud`,  `ctos`.`Spliter`,  `ctos`.`Cable`,  CONCAT(`ctos`.`Cto`, '\\n', `ctos`.`Spliter`, '\\n', `ctos`.`Cable`, '\\n', `localidad`.`Localidad`) AS `DisplayOnMap`";
$tdatactos_por_localidad[".sqlFrom"] = "FROM `localidad`  INNER JOIN `ctos` ON `localidad`.`Localidad` = `ctos`.`Localidad`";
$tdatactos_por_localidad[".sqlWhereExpr"] = "";
$tdatactos_por_localidad[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = -1;
$tdatactos_por_localidad[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatactos_por_localidad[".arrGroupsPerPage"] = $arrGPP;

$tdatactos_por_localidad[".highlightSearchResults"] = true;

$tableKeysctos_por_localidad = array();
$tableKeysctos_por_localidad[] = "id_localidad";
$tdatactos_por_localidad[".Keys"] = $tableKeysctos_por_localidad;


$tdatactos_por_localidad[".hideMobileList"] = array();




//	id_localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_localidad";
	$fdata["GoodName"] = "id_localidad";
	$fdata["ownerTable"] = "localidad";
	$fdata["Label"] = GetFieldLabel("ctos_por_localidad","id_localidad");
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


	$tdatactos_por_localidad["id_localidad"] = $fdata;
		$tdatactos_por_localidad[".searchableFields"][] = "id_localidad";
//	Localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Localidad";
	$fdata["GoodName"] = "Localidad";
	$fdata["ownerTable"] = "localidad";
	$fdata["Label"] = GetFieldLabel("ctos_por_localidad","Localidad");
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


	$tdatactos_por_localidad["Localidad"] = $fdata;
		$tdatactos_por_localidad[".searchableFields"][] = "Localidad";
//	Cto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Cto";
	$fdata["GoodName"] = "Cto";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("ctos_por_localidad","Cto");
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


	$tdatactos_por_localidad["Cto"] = $fdata;
		$tdatactos_por_localidad[".searchableFields"][] = "Cto";
//	Latitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Latitud";
	$fdata["GoodName"] = "Latitud";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("ctos_por_localidad","Latitud");
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


	$tdatactos_por_localidad["Latitud"] = $fdata;
		$tdatactos_por_localidad[".searchableFields"][] = "Latitud";
//	Longitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Longitud";
	$fdata["GoodName"] = "Longitud";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("ctos_por_localidad","Longitud");
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


	$tdatactos_por_localidad["Longitud"] = $fdata;
		$tdatactos_por_localidad[".searchableFields"][] = "Longitud";
//	Spliter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Spliter";
	$fdata["GoodName"] = "Spliter";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("ctos_por_localidad","Spliter");
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


	$tdatactos_por_localidad["Spliter"] = $fdata;
		$tdatactos_por_localidad[".searchableFields"][] = "Spliter";
//	Cable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Cable";
	$fdata["GoodName"] = "Cable";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("ctos_por_localidad","Cable");
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


	$tdatactos_por_localidad["Cable"] = $fdata;
		$tdatactos_por_localidad[".searchableFields"][] = "Cable";
//	DisplayOnMap
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DisplayOnMap";
	$fdata["GoodName"] = "DisplayOnMap";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("ctos_por_localidad","DisplayOnMap");
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


	$tdatactos_por_localidad["DisplayOnMap"] = $fdata;
		$tdatactos_por_localidad[".searchableFields"][] = "DisplayOnMap";


$tables_data["ctos_por_localidad"]=&$tdatactos_por_localidad;
$field_labels["ctos_por_localidad"] = &$fieldLabelsctos_por_localidad;
$fieldToolTips["ctos_por_localidad"] = &$fieldToolTipsctos_por_localidad;
$placeHolders["ctos_por_localidad"] = &$placeHoldersctos_por_localidad;
$page_titles["ctos_por_localidad"] = &$pageTitlesctos_por_localidad;


changeTextControlsToDate( "ctos_por_localidad" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["ctos_por_localidad"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["ctos_por_localidad"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="localidad";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="localidad";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "localidad";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["ctos_por_localidad"][0] = $masterParams;
				$masterTablesData["ctos_por_localidad"][0]["masterKeys"] = array();
	$masterTablesData["ctos_por_localidad"][0]["masterKeys"][]="Localidad";
				$masterTablesData["ctos_por_localidad"][0]["detailKeys"] = array();
	$masterTablesData["ctos_por_localidad"][0]["detailKeys"][]="Localidad";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_ctos_por_localidad()
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
	"m_srcTableName" => "ctos_por_localidad"
));

$proto6["m_sql"] = "`localidad`.`id_localidad`";
$proto6["m_srcTableName"] = "ctos_por_localidad";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Localidad",
	"m_strTable" => "localidad",
	"m_srcTableName" => "ctos_por_localidad"
));

$proto8["m_sql"] = "`localidad`.`Localidad`";
$proto8["m_srcTableName"] = "ctos_por_localidad";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Cto",
	"m_strTable" => "ctos",
	"m_srcTableName" => "ctos_por_localidad"
));

$proto10["m_sql"] = "`ctos`.`Cto`";
$proto10["m_srcTableName"] = "ctos_por_localidad";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Latitud",
	"m_strTable" => "ctos",
	"m_srcTableName" => "ctos_por_localidad"
));

$proto12["m_sql"] = "`ctos`.`Latitud`";
$proto12["m_srcTableName"] = "ctos_por_localidad";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Longitud",
	"m_strTable" => "ctos",
	"m_srcTableName" => "ctos_por_localidad"
));

$proto14["m_sql"] = "`ctos`.`Longitud`";
$proto14["m_srcTableName"] = "ctos_por_localidad";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Spliter",
	"m_strTable" => "ctos",
	"m_srcTableName" => "ctos_por_localidad"
));

$proto16["m_sql"] = "`ctos`.`Spliter`";
$proto16["m_srcTableName"] = "ctos_por_localidad";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Cable",
	"m_strTable" => "ctos",
	"m_srcTableName" => "ctos_por_localidad"
));

$proto18["m_sql"] = "`ctos`.`Cable`";
$proto18["m_srcTableName"] = "ctos_por_localidad";
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
$proto20["m_srcTableName"] = "ctos_por_localidad";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "DisplayOnMap";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto29=array();
$proto29["m_link"] = "SQLL_MAIN";
			$proto30=array();
$proto30["m_strName"] = "localidad";
$proto30["m_srcTableName"] = "ctos_por_localidad";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "id_localidad";
$proto30["m_columns"][] = "Localidad";
$obj = new SQLTable($proto30);

$proto29["m_table"] = $obj;
$proto29["m_sql"] = "`localidad`";
$proto29["m_alias"] = "";
$proto29["m_srcTableName"] = "ctos_por_localidad";
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
$proto34["m_srcTableName"] = "ctos_por_localidad";
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
$proto33["m_srcTableName"] = "ctos_por_localidad";
$proto35=array();
$proto35["m_sql"] = "`ctos`.`Localidad` = `localidad`.`Localidad`";
$proto35["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Localidad",
	"m_strTable" => "ctos",
	"m_srcTableName" => "ctos_por_localidad"
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
$proto0["m_srcTableName"]="ctos_por_localidad";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ctos_por_localidad = createSqlQuery_ctos_por_localidad();


	
		;

								

$tdatactos_por_localidad[".sqlquery"] = $queryData_ctos_por_localidad;



$tdatactos_por_localidad[".hasEvents"] = false;

?>