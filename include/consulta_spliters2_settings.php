<?php
$tdataconsulta_spliters2 = array();
$tdataconsulta_spliters2[".searchableFields"] = array();
$tdataconsulta_spliters2[".ShortName"] = "consulta_spliters2";
$tdataconsulta_spliters2[".OwnerID"] = "";
$tdataconsulta_spliters2[".OriginalTable"] = "spliters";


$tdataconsulta_spliters2[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataconsulta_spliters2[".originalPagesByType"] = $tdataconsulta_spliters2[".pagesByType"];
$tdataconsulta_spliters2[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataconsulta_spliters2[".originalPages"] = $tdataconsulta_spliters2[".pages"];
$tdataconsulta_spliters2[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataconsulta_spliters2[".originalDefaultPages"] = $tdataconsulta_spliters2[".defaultPages"];

//	field labels
$fieldLabelsconsulta_spliters2 = array();
$fieldToolTipsconsulta_spliters2 = array();
$pageTitlesconsulta_spliters2 = array();
$placeHoldersconsulta_spliters2 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsconsulta_spliters2["Spanish"] = array();
	$fieldToolTipsconsulta_spliters2["Spanish"] = array();
	$placeHoldersconsulta_spliters2["Spanish"] = array();
	$pageTitlesconsulta_spliters2["Spanish"] = array();
	$fieldLabelsconsulta_spliters2["Spanish"]["spliter"] = "Spliter";
	$fieldToolTipsconsulta_spliters2["Spanish"]["spliter"] = "";
	$placeHoldersconsulta_spliters2["Spanish"]["spliter"] = "";
	$fieldLabelsconsulta_spliters2["Spanish"]["cable"] = "Cable";
	$fieldToolTipsconsulta_spliters2["Spanish"]["cable"] = "";
	$placeHoldersconsulta_spliters2["Spanish"]["cable"] = "";
	$fieldLabelsconsulta_spliters2["Spanish"]["localidad"] = "Localidad";
	$fieldToolTipsconsulta_spliters2["Spanish"]["localidad"] = "";
	$placeHoldersconsulta_spliters2["Spanish"]["localidad"] = "";
	$fieldLabelsconsulta_spliters2["Spanish"]["id_spliters"] = "Id Spliters";
	$fieldToolTipsconsulta_spliters2["Spanish"]["id_spliters"] = "";
	$placeHoldersconsulta_spliters2["Spanish"]["id_spliters"] = "";
	$fieldLabelsconsulta_spliters2["Spanish"]["id_cables"] = "Id Cables";
	$fieldToolTipsconsulta_spliters2["Spanish"]["id_cables"] = "";
	$placeHoldersconsulta_spliters2["Spanish"]["id_cables"] = "";
	if (count($fieldToolTipsconsulta_spliters2["Spanish"]))
		$tdataconsulta_spliters2[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsconsulta_spliters2["English"] = array();
	$fieldToolTipsconsulta_spliters2["English"] = array();
	$placeHoldersconsulta_spliters2["English"] = array();
	$pageTitlesconsulta_spliters2["English"] = array();
	$fieldLabelsconsulta_spliters2["English"]["spliter"] = "Spliter";
	$fieldToolTipsconsulta_spliters2["English"]["spliter"] = "";
	$placeHoldersconsulta_spliters2["English"]["spliter"] = "";
	$fieldLabelsconsulta_spliters2["English"]["cable"] = "Cable";
	$fieldToolTipsconsulta_spliters2["English"]["cable"] = "";
	$placeHoldersconsulta_spliters2["English"]["cable"] = "";
	$fieldLabelsconsulta_spliters2["English"]["localidad"] = "Localidad";
	$fieldToolTipsconsulta_spliters2["English"]["localidad"] = "";
	$placeHoldersconsulta_spliters2["English"]["localidad"] = "";
	$fieldLabelsconsulta_spliters2["English"]["id_spliters"] = "Id Spliters";
	$fieldToolTipsconsulta_spliters2["English"]["id_spliters"] = "";
	$placeHoldersconsulta_spliters2["English"]["id_spliters"] = "";
	$fieldLabelsconsulta_spliters2["English"]["id_cables"] = "Id Cables";
	$fieldToolTipsconsulta_spliters2["English"]["id_cables"] = "";
	$placeHoldersconsulta_spliters2["English"]["id_cables"] = "";
	if (count($fieldToolTipsconsulta_spliters2["English"]))
		$tdataconsulta_spliters2[".isUseToolTips"] = true;
}


	$tdataconsulta_spliters2[".NCSearch"] = true;



$tdataconsulta_spliters2[".shortTableName"] = "consulta_spliters2";
$tdataconsulta_spliters2[".nSecOptions"] = 0;

$tdataconsulta_spliters2[".mainTableOwnerID"] = "";
$tdataconsulta_spliters2[".entityType"] = 1;
$tdataconsulta_spliters2[".connId"] = "isp_eisa_at_localhost";


$tdataconsulta_spliters2[".strOriginalTableName"] = "spliters";

	



$tdataconsulta_spliters2[".showAddInPopup"] = false;

$tdataconsulta_spliters2[".showEditInPopup"] = false;

$tdataconsulta_spliters2[".showViewInPopup"] = false;

$tdataconsulta_spliters2[".listAjax"] = false;
//	temporary
//$tdataconsulta_spliters2[".listAjax"] = false;

	$tdataconsulta_spliters2[".audit"] = false;

	$tdataconsulta_spliters2[".locking"] = false;


$pages = $tdataconsulta_spliters2[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataconsulta_spliters2[".edit"] = true;
	$tdataconsulta_spliters2[".afterEditAction"] = 1;
	$tdataconsulta_spliters2[".closePopupAfterEdit"] = 1;
	$tdataconsulta_spliters2[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataconsulta_spliters2[".add"] = true;
$tdataconsulta_spliters2[".afterAddAction"] = 1;
$tdataconsulta_spliters2[".closePopupAfterAdd"] = 1;
$tdataconsulta_spliters2[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataconsulta_spliters2[".list"] = true;
}



$tdataconsulta_spliters2[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataconsulta_spliters2[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataconsulta_spliters2[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataconsulta_spliters2[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataconsulta_spliters2[".printFriendly"] = true;
}



$tdataconsulta_spliters2[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataconsulta_spliters2[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataconsulta_spliters2[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataconsulta_spliters2[".isUseAjaxSuggest"] = true;





$tdataconsulta_spliters2[".ajaxCodeSnippetAdded"] = false;

$tdataconsulta_spliters2[".buttonsAdded"] = false;

$tdataconsulta_spliters2[".addPageEvents"] = false;

// use timepicker for search panel
$tdataconsulta_spliters2[".isUseTimeForSearch"] = false;


$tdataconsulta_spliters2[".badgeColor"] = "6DA5C8";


$tdataconsulta_spliters2[".allSearchFields"] = array();
$tdataconsulta_spliters2[".filterFields"] = array();
$tdataconsulta_spliters2[".requiredSearchFields"] = array();

$tdataconsulta_spliters2[".googleLikeFields"] = array();
$tdataconsulta_spliters2[".googleLikeFields"][] = "id_spliters";
$tdataconsulta_spliters2[".googleLikeFields"][] = "spliter";
$tdataconsulta_spliters2[".googleLikeFields"][] = "cable";
$tdataconsulta_spliters2[".googleLikeFields"][] = "localidad";
$tdataconsulta_spliters2[".googleLikeFields"][] = "id_cables";



$tdataconsulta_spliters2[".tableType"] = "list";

$tdataconsulta_spliters2[".printerPageOrientation"] = 0;
$tdataconsulta_spliters2[".nPrinterPageScale"] = 100;

$tdataconsulta_spliters2[".nPrinterSplitRecords"] = 40;

$tdataconsulta_spliters2[".geocodingEnabled"] = false;










$tdataconsulta_spliters2[".pageSize"] = 50;

$tdataconsulta_spliters2[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `spliters`.`id_spliters`";
$tdataconsulta_spliters2[".strOrderBy"] = $tstrOrderBy;

$tdataconsulta_spliters2[".orderindexes"] = array();
	$tdataconsulta_spliters2[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "`spliters`.`id_spliters`");



$tdataconsulta_spliters2[".sqlHead"] = "SELECT `spliters`.`id_spliters`,  `spliters`.`spliter`,  `spliters`.`cable`,  `spliters`.`localidad`,  `cables`.`id_cables`";
$tdataconsulta_spliters2[".sqlFrom"] = "FROM `spliters`  RIGHT OUTER JOIN `cables` ON `cables`.`cable` = `spliters`.`cable` AND `cables`.`localidad` = `spliters`.`localidad`";
$tdataconsulta_spliters2[".sqlWhereExpr"] = "";
$tdataconsulta_spliters2[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataconsulta_spliters2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataconsulta_spliters2[".arrGroupsPerPage"] = $arrGPP;

$tdataconsulta_spliters2[".highlightSearchResults"] = true;

$tableKeysconsulta_spliters2 = array();
$tableKeysconsulta_spliters2[] = "spliter";
$tdataconsulta_spliters2[".Keys"] = $tableKeysconsulta_spliters2;


$tdataconsulta_spliters2[".hideMobileList"] = array();




//	id_spliters
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_spliters";
	$fdata["GoodName"] = "id_spliters";
	$fdata["ownerTable"] = "spliters";
	$fdata["Label"] = GetFieldLabel("consulta_spliters2","id_spliters");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_spliters";

		$fdata["sourceSingle"] = "id_spliters";

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


	$tdataconsulta_spliters2["id_spliters"] = $fdata;
		$tdataconsulta_spliters2[".searchableFields"][] = "id_spliters";
//	spliter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "spliter";
	$fdata["GoodName"] = "spliter";
	$fdata["ownerTable"] = "spliters";
	$fdata["Label"] = GetFieldLabel("consulta_spliters2","spliter");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "spliter";

		$fdata["sourceSingle"] = "spliter";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`spliters`.`spliter`";

	
	
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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataconsulta_spliters2["spliter"] = $fdata;
		$tdataconsulta_spliters2[".searchableFields"][] = "spliter";
//	cable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cable";
	$fdata["GoodName"] = "cable";
	$fdata["ownerTable"] = "spliters";
	$fdata["Label"] = GetFieldLabel("consulta_spliters2","cable");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cable";

		$fdata["sourceSingle"] = "cable";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`spliters`.`cable`";

	
	
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


	$tdataconsulta_spliters2["cable"] = $fdata;
		$tdataconsulta_spliters2[".searchableFields"][] = "cable";
//	localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "localidad";
	$fdata["GoodName"] = "localidad";
	$fdata["ownerTable"] = "spliters";
	$fdata["Label"] = GetFieldLabel("consulta_spliters2","localidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "localidad";

		$fdata["sourceSingle"] = "localidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`spliters`.`localidad`";

	
	
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


	$tdataconsulta_spliters2["localidad"] = $fdata;
		$tdataconsulta_spliters2[".searchableFields"][] = "localidad";
//	id_cables
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "id_cables";
	$fdata["GoodName"] = "id_cables";
	$fdata["ownerTable"] = "cables";
	$fdata["Label"] = GetFieldLabel("consulta_spliters2","id_cables");
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


	$tdataconsulta_spliters2["id_cables"] = $fdata;
		$tdataconsulta_spliters2[".searchableFields"][] = "id_cables";


$tables_data["consulta_spliters2"]=&$tdataconsulta_spliters2;
$field_labels["consulta_spliters2"] = &$fieldLabelsconsulta_spliters2;
$fieldToolTips["consulta_spliters2"] = &$fieldToolTipsconsulta_spliters2;
$placeHolders["consulta_spliters2"] = &$placeHoldersconsulta_spliters2;
$page_titles["consulta_spliters2"] = &$pageTitlesconsulta_spliters2;


changeTextControlsToDate( "consulta_spliters2" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["consulta_spliters2"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["consulta_spliters2"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_consulta_spliters2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`spliters`.`id_spliters`,  `spliters`.`spliter`,  `spliters`.`cable`,  `spliters`.`localidad`,  `cables`.`id_cables`";
$proto0["m_strFrom"] = "FROM `spliters`  RIGHT OUTER JOIN `cables` ON `cables`.`cable` = `spliters`.`cable` AND `cables`.`localidad` = `spliters`.`localidad`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `spliters`.`id_spliters`";
	
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
	"m_strName" => "id_spliters",
	"m_strTable" => "spliters",
	"m_srcTableName" => "consulta_spliters2"
));

$proto6["m_sql"] = "`spliters`.`id_spliters`";
$proto6["m_srcTableName"] = "consulta_spliters2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "spliter",
	"m_strTable" => "spliters",
	"m_srcTableName" => "consulta_spliters2"
));

$proto8["m_sql"] = "`spliters`.`spliter`";
$proto8["m_srcTableName"] = "consulta_spliters2";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cable",
	"m_strTable" => "spliters",
	"m_srcTableName" => "consulta_spliters2"
));

$proto10["m_sql"] = "`spliters`.`cable`";
$proto10["m_srcTableName"] = "consulta_spliters2";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "localidad",
	"m_strTable" => "spliters",
	"m_srcTableName" => "consulta_spliters2"
));

$proto12["m_sql"] = "`spliters`.`localidad`";
$proto12["m_srcTableName"] = "consulta_spliters2";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cables",
	"m_strTable" => "cables",
	"m_srcTableName" => "consulta_spliters2"
));

$proto14["m_sql"] = "`cables`.`id_cables`";
$proto14["m_srcTableName"] = "consulta_spliters2";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "spliters";
$proto17["m_srcTableName"] = "consulta_spliters2";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id_spliters";
$proto17["m_columns"][] = "spliter";
$proto17["m_columns"][] = "cable";
$proto17["m_columns"][] = "localidad";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "`spliters`";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "consulta_spliters2";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
												$proto20=array();
$proto20["m_link"] = "SQLL_RIGHTJOIN";
			$proto21=array();
$proto21["m_strName"] = "cables";
$proto21["m_srcTableName"] = "consulta_spliters2";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id_cables";
$proto21["m_columns"][] = "cable";
$proto21["m_columns"][] = "localidad";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "RIGHT OUTER JOIN `cables` ON `cables`.`cable` = `spliters`.`cable` AND `cables`.`localidad` = `spliters`.`localidad`";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "consulta_spliters2";
$proto22=array();
$proto22["m_sql"] = "`cables`.`cable` = `spliters`.`cable` AND `cables`.`localidad` = `spliters`.`localidad`";
$proto22["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "`cables`.`cable` = `spliters`.`cable` AND `cables`.`localidad` = `spliters`.`localidad`"
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
						$proto24=array();
$proto24["m_sql"] = "`cables`.`cable` = `spliters`.`cable`";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cable",
	"m_strTable" => "cables",
	"m_srcTableName" => "consulta_spliters2"
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "= `spliters`.`cable`";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

			$proto22["m_contained"][]=$obj;
						$proto26=array();
$proto26["m_sql"] = "`cables`.`localidad` = `spliters`.`localidad`";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "localidad",
	"m_strTable" => "cables",
	"m_srcTableName" => "consulta_spliters2"
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "= `spliters`.`localidad`";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

			$proto22["m_contained"][]=$obj;
						$proto28=array();
$proto28["m_sql"] = "`cables`.`cable` = `spliters`.`cable`";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cable",
	"m_strTable" => "cables",
	"m_srcTableName" => "consulta_spliters2"
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "= `spliters`.`cable`";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

			$proto22["m_contained"][]=$obj;
						$proto30=array();
$proto30["m_sql"] = "`cables`.`localidad` = `spliters`.`localidad`";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "localidad",
	"m_strTable" => "cables",
	"m_srcTableName" => "consulta_spliters2"
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "= `spliters`.`localidad`";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

			$proto22["m_contained"][]=$obj;
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "id_spliters",
	"m_strTable" => "spliters",
	"m_srcTableName" => "consulta_spliters2"
));

$proto32["m_column"]=$obj;
$proto32["m_bAsc"] = 1;
$proto32["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto32);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="consulta_spliters2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_consulta_spliters2 = createSqlQuery_consulta_spliters2();


	
		;

					

$tdataconsulta_spliters2[".sqlquery"] = $queryData_consulta_spliters2;



$tdataconsulta_spliters2[".hasEvents"] = false;

?>