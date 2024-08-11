<?php
$tdatamapa_spliters = array();
$tdatamapa_spliters[".searchableFields"] = array();
$tdatamapa_spliters[".ShortName"] = "mapa_spliters";
$tdatamapa_spliters[".OwnerID"] = "";
$tdatamapa_spliters[".OriginalTable"] = "spliters";


$tdatamapa_spliters[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamapa_spliters[".originalPagesByType"] = $tdatamapa_spliters[".pagesByType"];
$tdatamapa_spliters[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamapa_spliters[".originalPages"] = $tdatamapa_spliters[".pages"];
$tdatamapa_spliters[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamapa_spliters[".originalDefaultPages"] = $tdatamapa_spliters[".defaultPages"];

//	field labels
$fieldLabelsmapa_spliters = array();
$fieldToolTipsmapa_spliters = array();
$pageTitlesmapa_spliters = array();
$placeHoldersmapa_spliters = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmapa_spliters["Spanish"] = array();
	$fieldToolTipsmapa_spliters["Spanish"] = array();
	$placeHoldersmapa_spliters["Spanish"] = array();
	$pageTitlesmapa_spliters["Spanish"] = array();
	$fieldLabelsmapa_spliters["Spanish"]["spliter"] = "Spliter";
	$fieldToolTipsmapa_spliters["Spanish"]["spliter"] = "";
	$placeHoldersmapa_spliters["Spanish"]["spliter"] = "";
	$fieldLabelsmapa_spliters["Spanish"]["cable"] = "Cable";
	$fieldToolTipsmapa_spliters["Spanish"]["cable"] = "";
	$placeHoldersmapa_spliters["Spanish"]["cable"] = "";
	$fieldLabelsmapa_spliters["Spanish"]["localidad"] = "Localidad";
	$fieldToolTipsmapa_spliters["Spanish"]["localidad"] = "";
	$placeHoldersmapa_spliters["Spanish"]["localidad"] = "";
	$fieldLabelsmapa_spliters["Spanish"]["Cto"] = "Cto";
	$fieldToolTipsmapa_spliters["Spanish"]["Cto"] = "";
	$placeHoldersmapa_spliters["Spanish"]["Cto"] = "";
	$fieldLabelsmapa_spliters["Spanish"]["Latitud"] = "Latitud";
	$fieldToolTipsmapa_spliters["Spanish"]["Latitud"] = "";
	$placeHoldersmapa_spliters["Spanish"]["Latitud"] = "";
	$fieldLabelsmapa_spliters["Spanish"]["Longitud"] = "Longitud";
	$fieldToolTipsmapa_spliters["Spanish"]["Longitud"] = "";
	$placeHoldersmapa_spliters["Spanish"]["Longitud"] = "";
	$fieldLabelsmapa_spliters["Spanish"]["DisplayOnMap"] = "Display On Map";
	$fieldToolTipsmapa_spliters["Spanish"]["DisplayOnMap"] = "";
	$placeHoldersmapa_spliters["Spanish"]["DisplayOnMap"] = "";
	if (count($fieldToolTipsmapa_spliters["Spanish"]))
		$tdatamapa_spliters[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmapa_spliters["English"] = array();
	$fieldToolTipsmapa_spliters["English"] = array();
	$placeHoldersmapa_spliters["English"] = array();
	$pageTitlesmapa_spliters["English"] = array();
	$fieldLabelsmapa_spliters["English"]["DisplayOnMap"] = "Display On Map";
	$fieldToolTipsmapa_spliters["English"]["DisplayOnMap"] = "";
	$placeHoldersmapa_spliters["English"]["DisplayOnMap"] = "";
	$fieldLabelsmapa_spliters["English"]["spliter"] = "Spliter";
	$fieldToolTipsmapa_spliters["English"]["spliter"] = "";
	$placeHoldersmapa_spliters["English"]["spliter"] = "";
	$fieldLabelsmapa_spliters["English"]["cable"] = "Cable";
	$fieldToolTipsmapa_spliters["English"]["cable"] = "";
	$placeHoldersmapa_spliters["English"]["cable"] = "";
	$fieldLabelsmapa_spliters["English"]["localidad"] = "Localidad";
	$fieldToolTipsmapa_spliters["English"]["localidad"] = "";
	$placeHoldersmapa_spliters["English"]["localidad"] = "";
	$fieldLabelsmapa_spliters["English"]["Cto"] = "Cto";
	$fieldToolTipsmapa_spliters["English"]["Cto"] = "";
	$placeHoldersmapa_spliters["English"]["Cto"] = "";
	$fieldLabelsmapa_spliters["English"]["Latitud"] = "Latitud";
	$fieldToolTipsmapa_spliters["English"]["Latitud"] = "";
	$placeHoldersmapa_spliters["English"]["Latitud"] = "";
	$fieldLabelsmapa_spliters["English"]["Longitud"] = "Longitud";
	$fieldToolTipsmapa_spliters["English"]["Longitud"] = "";
	$placeHoldersmapa_spliters["English"]["Longitud"] = "";
	if (count($fieldToolTipsmapa_spliters["English"]))
		$tdatamapa_spliters[".isUseToolTips"] = true;
}


	$tdatamapa_spliters[".NCSearch"] = true;



$tdatamapa_spliters[".shortTableName"] = "mapa_spliters";
$tdatamapa_spliters[".nSecOptions"] = 0;

$tdatamapa_spliters[".mainTableOwnerID"] = "";
$tdatamapa_spliters[".entityType"] = 1;
$tdatamapa_spliters[".connId"] = "isp_eisa_at_localhost";


$tdatamapa_spliters[".strOriginalTableName"] = "spliters";

	



$tdatamapa_spliters[".showAddInPopup"] = false;

$tdatamapa_spliters[".showEditInPopup"] = false;

$tdatamapa_spliters[".showViewInPopup"] = false;

$tdatamapa_spliters[".listAjax"] = false;
//	temporary
//$tdatamapa_spliters[".listAjax"] = false;

	$tdatamapa_spliters[".audit"] = false;

	$tdatamapa_spliters[".locking"] = false;


$pages = $tdatamapa_spliters[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamapa_spliters[".edit"] = true;
	$tdatamapa_spliters[".afterEditAction"] = 1;
	$tdatamapa_spliters[".closePopupAfterEdit"] = 1;
	$tdatamapa_spliters[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamapa_spliters[".add"] = true;
$tdatamapa_spliters[".afterAddAction"] = 1;
$tdatamapa_spliters[".closePopupAfterAdd"] = 1;
$tdatamapa_spliters[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamapa_spliters[".list"] = true;
}



$tdatamapa_spliters[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamapa_spliters[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamapa_spliters[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamapa_spliters[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamapa_spliters[".printFriendly"] = true;
}



$tdatamapa_spliters[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamapa_spliters[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamapa_spliters[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamapa_spliters[".isUseAjaxSuggest"] = true;





$tdatamapa_spliters[".ajaxCodeSnippetAdded"] = false;

$tdatamapa_spliters[".buttonsAdded"] = false;

$tdatamapa_spliters[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamapa_spliters[".isUseTimeForSearch"] = false;


$tdatamapa_spliters[".badgeColor"] = "cfae83";


$tdatamapa_spliters[".allSearchFields"] = array();
$tdatamapa_spliters[".filterFields"] = array();
$tdatamapa_spliters[".requiredSearchFields"] = array();

$tdatamapa_spliters[".googleLikeFields"] = array();
$tdatamapa_spliters[".googleLikeFields"][] = "spliter";
$tdatamapa_spliters[".googleLikeFields"][] = "cable";
$tdatamapa_spliters[".googleLikeFields"][] = "localidad";
$tdatamapa_spliters[".googleLikeFields"][] = "Cto";
$tdatamapa_spliters[".googleLikeFields"][] = "Latitud";
$tdatamapa_spliters[".googleLikeFields"][] = "Longitud";
$tdatamapa_spliters[".googleLikeFields"][] = "DisplayOnMap";



$tdatamapa_spliters[".tableType"] = "list";

$tdatamapa_spliters[".printerPageOrientation"] = 0;
$tdatamapa_spliters[".nPrinterPageScale"] = 100;

$tdatamapa_spliters[".nPrinterSplitRecords"] = 40;

$tdatamapa_spliters[".geocodingEnabled"] = false;










$tdatamapa_spliters[".pageSize"] = 15000;

$tdatamapa_spliters[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamapa_spliters[".strOrderBy"] = $tstrOrderBy;

$tdatamapa_spliters[".orderindexes"] = array();


$tdatamapa_spliters[".sqlHead"] = "SELECT `s`.`spliter`,  `s`.`cable`,  `s`.`localidad`,  `c`.`Cto`,  `c`.`Latitud`,  `c`.`Longitud`,  CONCAT(c.Cto, '\\n', c.Spliter, '\\n', s.cable, '\\n', c.Localidad) AS `DisplayOnMap`";
$tdatamapa_spliters[".sqlFrom"] = "FROM `spliters` AS `s`  INNER JOIN `ctos` AS `c` ON `s`.`spliter` = `c`.`Spliter` AND `s`.`cable` = `c`.`Cable` AND `s`.`localidad` = `c`.`Localidad`";
$tdatamapa_spliters[".sqlWhereExpr"] = "";
$tdatamapa_spliters[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamapa_spliters[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamapa_spliters[".arrGroupsPerPage"] = $arrGPP;

$tdatamapa_spliters[".highlightSearchResults"] = true;

$tableKeysmapa_spliters = array();
$tableKeysmapa_spliters[] = "spliter";
$tdatamapa_spliters[".Keys"] = $tableKeysmapa_spliters;


$tdatamapa_spliters[".hideMobileList"] = array();




//	spliter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "spliter";
	$fdata["GoodName"] = "spliter";
	$fdata["ownerTable"] = "spliters";
	$fdata["Label"] = GetFieldLabel("Mapa_spliters","spliter");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "spliter";

		$fdata["sourceSingle"] = "spliter";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`s`.`spliter`";

	
	
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


	$tdatamapa_spliters["spliter"] = $fdata;
		$tdatamapa_spliters[".searchableFields"][] = "spliter";
//	cable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cable";
	$fdata["GoodName"] = "cable";
	$fdata["ownerTable"] = "spliters";
	$fdata["Label"] = GetFieldLabel("Mapa_spliters","cable");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cable";

		$fdata["sourceSingle"] = "cable";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`s`.`cable`";

	
	
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


	$tdatamapa_spliters["cable"] = $fdata;
		$tdatamapa_spliters[".searchableFields"][] = "cable";
//	localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "localidad";
	$fdata["GoodName"] = "localidad";
	$fdata["ownerTable"] = "spliters";
	$fdata["Label"] = GetFieldLabel("Mapa_spliters","localidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "localidad";

		$fdata["sourceSingle"] = "localidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`s`.`localidad`";

	
	
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


	$tdatamapa_spliters["localidad"] = $fdata;
		$tdatamapa_spliters[".searchableFields"][] = "localidad";
//	Cto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Cto";
	$fdata["GoodName"] = "Cto";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Mapa_spliters","Cto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Cto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`c`.`Cto`";

	
	
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


	$tdatamapa_spliters["Cto"] = $fdata;
		$tdatamapa_spliters[".searchableFields"][] = "Cto";
//	Latitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Latitud";
	$fdata["GoodName"] = "Latitud";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Mapa_spliters","Latitud");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Latitud";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`c`.`Latitud`";

	
	
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


	$tdatamapa_spliters["Latitud"] = $fdata;
		$tdatamapa_spliters[".searchableFields"][] = "Latitud";
//	Longitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Longitud";
	$fdata["GoodName"] = "Longitud";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Mapa_spliters","Longitud");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Longitud";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`c`.`Longitud`";

	
	
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


	$tdatamapa_spliters["Longitud"] = $fdata;
		$tdatamapa_spliters[".searchableFields"][] = "Longitud";
//	DisplayOnMap
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DisplayOnMap";
	$fdata["GoodName"] = "DisplayOnMap";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Mapa_spliters","DisplayOnMap");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DisplayOnMap";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT(c.Cto, '\\n', c.Spliter, '\\n', s.cable, '\\n', c.Localidad)";

	
	
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


	$tdatamapa_spliters["DisplayOnMap"] = $fdata;
		$tdatamapa_spliters[".searchableFields"][] = "DisplayOnMap";


$tables_data["Mapa_spliters"]=&$tdatamapa_spliters;
$field_labels["Mapa_spliters"] = &$fieldLabelsmapa_spliters;
$fieldToolTips["Mapa_spliters"] = &$fieldToolTipsmapa_spliters;
$placeHolders["Mapa_spliters"] = &$placeHoldersmapa_spliters;
$page_titles["Mapa_spliters"] = &$pageTitlesmapa_spliters;


changeTextControlsToDate( "Mapa_spliters" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Mapa_spliters"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Mapa_spliters"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="spliters";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="spliters";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "spliters";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Mapa_spliters"][0] = $masterParams;
				$masterTablesData["Mapa_spliters"][0]["masterKeys"] = array();
	$masterTablesData["Mapa_spliters"][0]["masterKeys"][]="spliter";
				$masterTablesData["Mapa_spliters"][0]["masterKeys"][]="cable";
				$masterTablesData["Mapa_spliters"][0]["masterKeys"][]="localidad";
				$masterTablesData["Mapa_spliters"][0]["detailKeys"] = array();
	$masterTablesData["Mapa_spliters"][0]["detailKeys"][]="spliter";
				$masterTablesData["Mapa_spliters"][0]["detailKeys"][]="cable";
				$masterTablesData["Mapa_spliters"][0]["detailKeys"][]="localidad";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_mapa_spliters()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`s`.`spliter`,  `s`.`cable`,  `s`.`localidad`,  `c`.`Cto`,  `c`.`Latitud`,  `c`.`Longitud`,  CONCAT(c.Cto, '\\n', c.Spliter, '\\n', s.cable, '\\n', c.Localidad) AS `DisplayOnMap`";
$proto0["m_strFrom"] = "FROM `spliters` AS `s`  INNER JOIN `ctos` AS `c` ON `s`.`spliter` = `c`.`Spliter` AND `s`.`cable` = `c`.`Cable` AND `s`.`localidad` = `c`.`Localidad`";
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
	"m_strName" => "spliter",
	"m_strTable" => "s",
	"m_srcTableName" => "Mapa_spliters"
));

$proto6["m_sql"] = "`s`.`spliter`";
$proto6["m_srcTableName"] = "Mapa_spliters";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cable",
	"m_strTable" => "s",
	"m_srcTableName" => "Mapa_spliters"
));

$proto8["m_sql"] = "`s`.`cable`";
$proto8["m_srcTableName"] = "Mapa_spliters";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "localidad",
	"m_strTable" => "s",
	"m_srcTableName" => "Mapa_spliters"
));

$proto10["m_sql"] = "`s`.`localidad`";
$proto10["m_srcTableName"] = "Mapa_spliters";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Cto",
	"m_strTable" => "c",
	"m_srcTableName" => "Mapa_spliters"
));

$proto12["m_sql"] = "`c`.`Cto`";
$proto12["m_srcTableName"] = "Mapa_spliters";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Latitud",
	"m_strTable" => "c",
	"m_srcTableName" => "Mapa_spliters"
));

$proto14["m_sql"] = "`c`.`Latitud`";
$proto14["m_srcTableName"] = "Mapa_spliters";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Longitud",
	"m_strTable" => "c",
	"m_srcTableName" => "Mapa_spliters"
));

$proto16["m_sql"] = "`c`.`Longitud`";
$proto16["m_srcTableName"] = "Mapa_spliters";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$proto19=array();
$proto19["m_functiontype"] = "SQLF_CUSTOM";
$proto19["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "c.Cto"
));

$proto19["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'\\n'"
));

$proto19["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "c.Spliter"
));

$proto19["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'\\n'"
));

$proto19["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "s.cable"
));

$proto19["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'\\n'"
));

$proto19["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "c.Localidad"
));

$proto19["m_arguments"][]=$obj;
$proto19["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto19);

$proto18["m_sql"] = "CONCAT(c.Cto, '\\n', c.Spliter, '\\n', s.cable, '\\n', c.Localidad)";
$proto18["m_srcTableName"] = "Mapa_spliters";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "DisplayOnMap";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto27=array();
$proto27["m_link"] = "SQLL_MAIN";
			$proto28=array();
$proto28["m_strName"] = "spliters";
$proto28["m_srcTableName"] = "Mapa_spliters";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "id_spliters";
$proto28["m_columns"][] = "spliter";
$proto28["m_columns"][] = "cable";
$proto28["m_columns"][] = "localidad";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_sql"] = "`spliters` AS `s`";
$proto27["m_alias"] = "s";
$proto27["m_srcTableName"] = "Mapa_spliters";
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
$proto31["m_link"] = "SQLL_INNERJOIN";
			$proto32=array();
$proto32["m_strName"] = "ctos";
$proto32["m_srcTableName"] = "Mapa_spliters";
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
$proto31["m_sql"] = "INNER JOIN `ctos` AS `c` ON `s`.`spliter` = `c`.`Spliter` AND `s`.`cable` = `c`.`Cable` AND `s`.`localidad` = `c`.`Localidad`";
$proto31["m_alias"] = "c";
$proto31["m_srcTableName"] = "Mapa_spliters";
$proto33=array();
$proto33["m_sql"] = "`c`.`Spliter` = `s`.`spliter` AND `c`.`Cable` = `s`.`cable` AND `c`.`Localidad` = `s`.`localidad`";
$proto33["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "`c`.`Spliter` = `s`.`spliter` AND `c`.`Cable` = `s`.`cable` AND `c`.`Localidad` = `s`.`localidad`"
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
						$proto35=array();
$proto35["m_sql"] = "`s`.`spliter` = `c`.`Spliter`";
$proto35["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "spliter",
	"m_strTable" => "s",
	"m_srcTableName" => "Mapa_spliters"
));

$proto35["m_column"]=$obj;
$proto35["m_contained"] = array();
$proto35["m_strCase"] = "= `c`.`Spliter`";
$proto35["m_havingmode"] = false;
$proto35["m_inBrackets"] = false;
$proto35["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto35);

			$proto33["m_contained"][]=$obj;
						$proto37=array();
$proto37["m_sql"] = "`s`.`cable` = `c`.`Cable`";
$proto37["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cable",
	"m_strTable" => "s",
	"m_srcTableName" => "Mapa_spliters"
));

$proto37["m_column"]=$obj;
$proto37["m_contained"] = array();
$proto37["m_strCase"] = "= `c`.`Cable`";
$proto37["m_havingmode"] = false;
$proto37["m_inBrackets"] = false;
$proto37["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto37);

			$proto33["m_contained"][]=$obj;
						$proto39=array();
$proto39["m_sql"] = "`s`.`localidad` = `c`.`Localidad`";
$proto39["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "localidad",
	"m_strTable" => "s",
	"m_srcTableName" => "Mapa_spliters"
));

$proto39["m_column"]=$obj;
$proto39["m_contained"] = array();
$proto39["m_strCase"] = "= `c`.`Localidad`";
$proto39["m_havingmode"] = false;
$proto39["m_inBrackets"] = false;
$proto39["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto39);

			$proto33["m_contained"][]=$obj;
						$proto41=array();
$proto41["m_sql"] = "`c`.`Spliter` = `s`.`spliter`";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Spliter",
	"m_strTable" => "c",
	"m_srcTableName" => "Mapa_spliters"
));

$proto41["m_column"]=$obj;
$proto41["m_contained"] = array();
$proto41["m_strCase"] = "= `s`.`spliter`";
$proto41["m_havingmode"] = false;
$proto41["m_inBrackets"] = false;
$proto41["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto41);

			$proto33["m_contained"][]=$obj;
						$proto43=array();
$proto43["m_sql"] = "`c`.`Cable` = `s`.`cable`";
$proto43["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Cable",
	"m_strTable" => "c",
	"m_srcTableName" => "Mapa_spliters"
));

$proto43["m_column"]=$obj;
$proto43["m_contained"] = array();
$proto43["m_strCase"] = "= `s`.`cable`";
$proto43["m_havingmode"] = false;
$proto43["m_inBrackets"] = false;
$proto43["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto43);

			$proto33["m_contained"][]=$obj;
						$proto45=array();
$proto45["m_sql"] = "`c`.`Localidad` = `s`.`localidad`";
$proto45["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Localidad",
	"m_strTable" => "c",
	"m_srcTableName" => "Mapa_spliters"
));

$proto45["m_column"]=$obj;
$proto45["m_contained"] = array();
$proto45["m_strCase"] = "= `s`.`localidad`";
$proto45["m_havingmode"] = false;
$proto45["m_inBrackets"] = false;
$proto45["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto45);

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
$proto0["m_srcTableName"]="Mapa_spliters";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mapa_spliters = createSqlQuery_mapa_spliters();


	
		;

							

$tdatamapa_spliters[".sqlquery"] = $queryData_mapa_spliters;



$tdatamapa_spliters[".hasEvents"] = false;

?>