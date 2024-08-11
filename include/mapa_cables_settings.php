<?php
$tdatamapa_cables = array();
$tdatamapa_cables[".searchableFields"] = array();
$tdatamapa_cables[".ShortName"] = "mapa_cables";
$tdatamapa_cables[".OwnerID"] = "";
$tdatamapa_cables[".OriginalTable"] = "cables";


$tdatamapa_cables[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamapa_cables[".originalPagesByType"] = $tdatamapa_cables[".pagesByType"];
$tdatamapa_cables[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamapa_cables[".originalPages"] = $tdatamapa_cables[".pages"];
$tdatamapa_cables[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamapa_cables[".originalDefaultPages"] = $tdatamapa_cables[".defaultPages"];

//	field labels
$fieldLabelsmapa_cables = array();
$fieldToolTipsmapa_cables = array();
$pageTitlesmapa_cables = array();
$placeHoldersmapa_cables = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmapa_cables["Spanish"] = array();
	$fieldToolTipsmapa_cables["Spanish"] = array();
	$placeHoldersmapa_cables["Spanish"] = array();
	$pageTitlesmapa_cables["Spanish"] = array();
	$fieldLabelsmapa_cables["Spanish"]["cable"] = "Cable";
	$fieldToolTipsmapa_cables["Spanish"]["cable"] = "";
	$placeHoldersmapa_cables["Spanish"]["cable"] = "";
	$fieldLabelsmapa_cables["Spanish"]["Localidad"] = "Localidad";
	$fieldToolTipsmapa_cables["Spanish"]["Localidad"] = "";
	$placeHoldersmapa_cables["Spanish"]["Localidad"] = "";
	$fieldLabelsmapa_cables["Spanish"]["Cto"] = "Cto";
	$fieldToolTipsmapa_cables["Spanish"]["Cto"] = "";
	$placeHoldersmapa_cables["Spanish"]["Cto"] = "";
	$fieldLabelsmapa_cables["Spanish"]["Latitud"] = "Latitud";
	$fieldToolTipsmapa_cables["Spanish"]["Latitud"] = "";
	$placeHoldersmapa_cables["Spanish"]["Latitud"] = "";
	$fieldLabelsmapa_cables["Spanish"]["Longitud"] = "Longitud";
	$fieldToolTipsmapa_cables["Spanish"]["Longitud"] = "";
	$placeHoldersmapa_cables["Spanish"]["Longitud"] = "";
	$fieldLabelsmapa_cables["Spanish"]["Spliter"] = "Spliter";
	$fieldToolTipsmapa_cables["Spanish"]["Spliter"] = "";
	$placeHoldersmapa_cables["Spanish"]["Spliter"] = "";
	$fieldLabelsmapa_cables["Spanish"]["DisplayOnMap"] = "Display On Map";
	$fieldToolTipsmapa_cables["Spanish"]["DisplayOnMap"] = "";
	$placeHoldersmapa_cables["Spanish"]["DisplayOnMap"] = "";
	if (count($fieldToolTipsmapa_cables["Spanish"]))
		$tdatamapa_cables[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmapa_cables["English"] = array();
	$fieldToolTipsmapa_cables["English"] = array();
	$placeHoldersmapa_cables["English"] = array();
	$pageTitlesmapa_cables["English"] = array();
	$fieldLabelsmapa_cables["English"]["DisplayOnMap"] = "Display On Map";
	$fieldToolTipsmapa_cables["English"]["DisplayOnMap"] = "";
	$placeHoldersmapa_cables["English"]["DisplayOnMap"] = "";
	$fieldLabelsmapa_cables["English"]["cable"] = "Cable";
	$fieldToolTipsmapa_cables["English"]["cable"] = "";
	$placeHoldersmapa_cables["English"]["cable"] = "";
	$fieldLabelsmapa_cables["English"]["Cto"] = "Cto";
	$fieldToolTipsmapa_cables["English"]["Cto"] = "";
	$placeHoldersmapa_cables["English"]["Cto"] = "";
	$fieldLabelsmapa_cables["English"]["Latitud"] = "Latitud";
	$fieldToolTipsmapa_cables["English"]["Latitud"] = "";
	$placeHoldersmapa_cables["English"]["Latitud"] = "";
	$fieldLabelsmapa_cables["English"]["Longitud"] = "Longitud";
	$fieldToolTipsmapa_cables["English"]["Longitud"] = "";
	$placeHoldersmapa_cables["English"]["Longitud"] = "";
	$fieldLabelsmapa_cables["English"]["Localidad"] = "Localidad";
	$fieldToolTipsmapa_cables["English"]["Localidad"] = "";
	$placeHoldersmapa_cables["English"]["Localidad"] = "";
	$fieldLabelsmapa_cables["English"]["Spliter"] = "Spliter";
	$fieldToolTipsmapa_cables["English"]["Spliter"] = "";
	$placeHoldersmapa_cables["English"]["Spliter"] = "";
	if (count($fieldToolTipsmapa_cables["English"]))
		$tdatamapa_cables[".isUseToolTips"] = true;
}


	$tdatamapa_cables[".NCSearch"] = true;



$tdatamapa_cables[".shortTableName"] = "mapa_cables";
$tdatamapa_cables[".nSecOptions"] = 0;

$tdatamapa_cables[".mainTableOwnerID"] = "";
$tdatamapa_cables[".entityType"] = 1;
$tdatamapa_cables[".connId"] = "isp_eisa_at_localhost";


$tdatamapa_cables[".strOriginalTableName"] = "cables";

	



$tdatamapa_cables[".showAddInPopup"] = false;

$tdatamapa_cables[".showEditInPopup"] = false;

$tdatamapa_cables[".showViewInPopup"] = false;

$tdatamapa_cables[".listAjax"] = false;
//	temporary
//$tdatamapa_cables[".listAjax"] = false;

	$tdatamapa_cables[".audit"] = false;

	$tdatamapa_cables[".locking"] = false;


$pages = $tdatamapa_cables[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamapa_cables[".edit"] = true;
	$tdatamapa_cables[".afterEditAction"] = 1;
	$tdatamapa_cables[".closePopupAfterEdit"] = 1;
	$tdatamapa_cables[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamapa_cables[".add"] = true;
$tdatamapa_cables[".afterAddAction"] = 1;
$tdatamapa_cables[".closePopupAfterAdd"] = 1;
$tdatamapa_cables[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamapa_cables[".list"] = true;
}



$tdatamapa_cables[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamapa_cables[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamapa_cables[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamapa_cables[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamapa_cables[".printFriendly"] = true;
}



$tdatamapa_cables[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamapa_cables[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamapa_cables[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamapa_cables[".isUseAjaxSuggest"] = true;





$tdatamapa_cables[".ajaxCodeSnippetAdded"] = false;

$tdatamapa_cables[".buttonsAdded"] = false;

$tdatamapa_cables[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamapa_cables[".isUseTimeForSearch"] = false;


$tdatamapa_cables[".badgeColor"] = "6493ea";


$tdatamapa_cables[".allSearchFields"] = array();
$tdatamapa_cables[".filterFields"] = array();
$tdatamapa_cables[".requiredSearchFields"] = array();

$tdatamapa_cables[".googleLikeFields"] = array();
$tdatamapa_cables[".googleLikeFields"][] = "cable";
$tdatamapa_cables[".googleLikeFields"][] = "Cto";
$tdatamapa_cables[".googleLikeFields"][] = "Latitud";
$tdatamapa_cables[".googleLikeFields"][] = "Longitud";
$tdatamapa_cables[".googleLikeFields"][] = "Localidad";
$tdatamapa_cables[".googleLikeFields"][] = "Spliter";
$tdatamapa_cables[".googleLikeFields"][] = "DisplayOnMap";



$tdatamapa_cables[".tableType"] = "list";

$tdatamapa_cables[".printerPageOrientation"] = 0;
$tdatamapa_cables[".nPrinterPageScale"] = 100;

$tdatamapa_cables[".nPrinterSplitRecords"] = 40;

$tdatamapa_cables[".geocodingEnabled"] = false;










$tdatamapa_cables[".pageSize"] = 15000;

$tdatamapa_cables[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamapa_cables[".strOrderBy"] = $tstrOrderBy;

$tdatamapa_cables[".orderindexes"] = array();


$tdatamapa_cables[".sqlHead"] = "SELECT `cables`.`cable`,  `ctos`.`Cto`,  `ctos`.`Latitud`,  `ctos`.`Longitud`,  `ctos`.`Localidad`,  `ctos`.`Spliter`,  CONCAT(ctos.Cto, '\\n', ctos.Spliter, '\\n', cables.cable, '\\n', ctos.Localidad) AS `DisplayOnMap`";
$tdatamapa_cables[".sqlFrom"] = "FROM `cables`  LEFT OUTER JOIN `ctos` ON `cables`.`cable` = `ctos`.`Cable` AND `cables`.`localidad` = `ctos`.`Localidad`";
$tdatamapa_cables[".sqlWhereExpr"] = "";
$tdatamapa_cables[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamapa_cables[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamapa_cables[".arrGroupsPerPage"] = $arrGPP;

$tdatamapa_cables[".highlightSearchResults"] = true;

$tableKeysmapa_cables = array();
$tableKeysmapa_cables[] = "cable";
$tdatamapa_cables[".Keys"] = $tableKeysmapa_cables;


$tdatamapa_cables[".hideMobileList"] = array();




//	cable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "cable";
	$fdata["GoodName"] = "cable";
	$fdata["ownerTable"] = "cables";
	$fdata["Label"] = GetFieldLabel("Mapa_cables","cable");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cable";

		$fdata["sourceSingle"] = "cable";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`cables`.`cable`";

	
	
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


	$tdatamapa_cables["cable"] = $fdata;
		$tdatamapa_cables[".searchableFields"][] = "cable";
//	Cto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Cto";
	$fdata["GoodName"] = "Cto";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Mapa_cables","Cto");
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


	$tdatamapa_cables["Cto"] = $fdata;
		$tdatamapa_cables[".searchableFields"][] = "Cto";
//	Latitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Latitud";
	$fdata["GoodName"] = "Latitud";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Mapa_cables","Latitud");
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


	$tdatamapa_cables["Latitud"] = $fdata;
		$tdatamapa_cables[".searchableFields"][] = "Latitud";
//	Longitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Longitud";
	$fdata["GoodName"] = "Longitud";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Mapa_cables","Longitud");
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


	$tdatamapa_cables["Longitud"] = $fdata;
		$tdatamapa_cables[".searchableFields"][] = "Longitud";
//	Localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Localidad";
	$fdata["GoodName"] = "Localidad";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Mapa_cables","Localidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Localidad";

		$fdata["sourceSingle"] = "localidad";

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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=80";

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


	$tdatamapa_cables["Localidad"] = $fdata;
		$tdatamapa_cables[".searchableFields"][] = "Localidad";
//	Spliter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Spliter";
	$fdata["GoodName"] = "Spliter";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Mapa_cables","Spliter");
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


	$tdatamapa_cables["Spliter"] = $fdata;
		$tdatamapa_cables[".searchableFields"][] = "Spliter";
//	DisplayOnMap
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DisplayOnMap";
	$fdata["GoodName"] = "DisplayOnMap";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Mapa_cables","DisplayOnMap");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DisplayOnMap";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT(ctos.Cto, '\\n', ctos.Spliter, '\\n', cables.cable, '\\n', ctos.Localidad)";

	
	
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


	$tdatamapa_cables["DisplayOnMap"] = $fdata;
		$tdatamapa_cables[".searchableFields"][] = "DisplayOnMap";


$tables_data["Mapa_cables"]=&$tdatamapa_cables;
$field_labels["Mapa_cables"] = &$fieldLabelsmapa_cables;
$fieldToolTips["Mapa_cables"] = &$fieldToolTipsmapa_cables;
$placeHolders["Mapa_cables"] = &$placeHoldersmapa_cables;
$page_titles["Mapa_cables"] = &$pageTitlesmapa_cables;


changeTextControlsToDate( "Mapa_cables" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Mapa_cables"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Mapa_cables"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="cables";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="cables";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "cables";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Mapa_cables"][0] = $masterParams;
				$masterTablesData["Mapa_cables"][0]["masterKeys"] = array();
	$masterTablesData["Mapa_cables"][0]["masterKeys"][]="cable";
				$masterTablesData["Mapa_cables"][0]["masterKeys"][]="localidad";
				$masterTablesData["Mapa_cables"][0]["detailKeys"] = array();
	$masterTablesData["Mapa_cables"][0]["detailKeys"][]="cable";
				$masterTablesData["Mapa_cables"][0]["detailKeys"][]="Localidad";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_mapa_cables()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`cables`.`cable`,  `ctos`.`Cto`,  `ctos`.`Latitud`,  `ctos`.`Longitud`,  `ctos`.`Localidad`,  `ctos`.`Spliter`,  CONCAT(ctos.Cto, '\\n', ctos.Spliter, '\\n', cables.cable, '\\n', ctos.Localidad) AS `DisplayOnMap`";
$proto0["m_strFrom"] = "FROM `cables`  LEFT OUTER JOIN `ctos` ON `cables`.`cable` = `ctos`.`Cable` AND `cables`.`localidad` = `ctos`.`Localidad`";
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
	"m_strName" => "cable",
	"m_strTable" => "cables",
	"m_srcTableName" => "Mapa_cables"
));

$proto6["m_sql"] = "`cables`.`cable`";
$proto6["m_srcTableName"] = "Mapa_cables";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Cto",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa_cables"
));

$proto8["m_sql"] = "`ctos`.`Cto`";
$proto8["m_srcTableName"] = "Mapa_cables";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Latitud",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa_cables"
));

$proto10["m_sql"] = "`ctos`.`Latitud`";
$proto10["m_srcTableName"] = "Mapa_cables";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Longitud",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa_cables"
));

$proto12["m_sql"] = "`ctos`.`Longitud`";
$proto12["m_srcTableName"] = "Mapa_cables";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Localidad",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa_cables"
));

$proto14["m_sql"] = "`ctos`.`Localidad`";
$proto14["m_srcTableName"] = "Mapa_cables";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Spliter",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa_cables"
));

$proto16["m_sql"] = "`ctos`.`Spliter`";
$proto16["m_srcTableName"] = "Mapa_cables";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$proto19=array();
$proto19["m_functiontype"] = "SQLF_CUSTOM";
$proto19["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "ctos.Cto"
));

$proto19["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'\\n'"
));

$proto19["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ctos.Spliter"
));

$proto19["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'\\n'"
));

$proto19["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "cables.cable"
));

$proto19["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'\\n'"
));

$proto19["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ctos.Localidad"
));

$proto19["m_arguments"][]=$obj;
$proto19["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto19);

$proto18["m_sql"] = "CONCAT(ctos.Cto, '\\n', ctos.Spliter, '\\n', cables.cable, '\\n', ctos.Localidad)";
$proto18["m_srcTableName"] = "Mapa_cables";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "DisplayOnMap";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto27=array();
$proto27["m_link"] = "SQLL_MAIN";
			$proto28=array();
$proto28["m_strName"] = "cables";
$proto28["m_srcTableName"] = "Mapa_cables";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "id_cables";
$proto28["m_columns"][] = "cable";
$proto28["m_columns"][] = "localidad";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_sql"] = "`cables`";
$proto27["m_alias"] = "";
$proto27["m_srcTableName"] = "Mapa_cables";
$proto29=array();
$proto29["m_sql"] = "";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "";
$proto29["m_havingmode"] = false;
$proto29["m_inBrackets"] = false;
$proto29["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto29);

$proto27["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto27);

$proto0["m_fromlist"][]=$obj;
												$proto31=array();
$proto31["m_link"] = "SQLL_LEFTJOIN";
			$proto32=array();
$proto32["m_strName"] = "ctos";
$proto32["m_srcTableName"] = "Mapa_cables";
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
$obj = new SQLTable($proto32);

$proto31["m_table"] = $obj;
$proto31["m_sql"] = "LEFT OUTER JOIN `ctos` ON `cables`.`cable` = `ctos`.`Cable` AND `cables`.`localidad` = `ctos`.`Localidad`";
$proto31["m_alias"] = "";
$proto31["m_srcTableName"] = "Mapa_cables";
$proto33=array();
$proto33["m_sql"] = "`ctos`.`Cable` = `cables`.`cable` AND `ctos`.`Localidad` = `cables`.`localidad`";
$proto33["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "`ctos`.`Cable` = `cables`.`cable` AND `ctos`.`Localidad` = `cables`.`localidad`"
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
						$proto35=array();
$proto35["m_sql"] = "`cables`.`cable` = `ctos`.`Cable`";
$proto35["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cable",
	"m_strTable" => "cables",
	"m_srcTableName" => "Mapa_cables"
));

$proto35["m_column"]=$obj;
$proto35["m_contained"] = array();
$proto35["m_strCase"] = "= `ctos`.`Cable`";
$proto35["m_havingmode"] = false;
$proto35["m_inBrackets"] = false;
$proto35["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto35);

			$proto33["m_contained"][]=$obj;
						$proto37=array();
$proto37["m_sql"] = "`cables`.`localidad` = `ctos`.`Localidad`";
$proto37["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "localidad",
	"m_strTable" => "cables",
	"m_srcTableName" => "Mapa_cables"
));

$proto37["m_column"]=$obj;
$proto37["m_contained"] = array();
$proto37["m_strCase"] = "= `ctos`.`Localidad`";
$proto37["m_havingmode"] = false;
$proto37["m_inBrackets"] = false;
$proto37["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto37);

			$proto33["m_contained"][]=$obj;
						$proto39=array();
$proto39["m_sql"] = "`ctos`.`Cable` = `cables`.`cable`";
$proto39["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Cable",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa_cables"
));

$proto39["m_column"]=$obj;
$proto39["m_contained"] = array();
$proto39["m_strCase"] = "= `cables`.`cable`";
$proto39["m_havingmode"] = false;
$proto39["m_inBrackets"] = false;
$proto39["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto39);

			$proto33["m_contained"][]=$obj;
						$proto41=array();
$proto41["m_sql"] = "`ctos`.`Localidad` = `cables`.`localidad`";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Localidad",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa_cables"
));

$proto41["m_column"]=$obj;
$proto41["m_contained"] = array();
$proto41["m_strCase"] = "= `cables`.`localidad`";
$proto41["m_havingmode"] = false;
$proto41["m_inBrackets"] = false;
$proto41["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto41);

			$proto33["m_contained"][]=$obj;
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
$proto0["m_srcTableName"]="Mapa_cables";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mapa_cables = createSqlQuery_mapa_cables();


	
		;

							

$tdatamapa_cables[".sqlquery"] = $queryData_mapa_cables;



$tdatamapa_cables[".hasEvents"] = false;

?>