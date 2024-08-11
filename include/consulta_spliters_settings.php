<?php
$tdataconsulta_spliters = array();
$tdataconsulta_spliters[".searchableFields"] = array();
$tdataconsulta_spliters[".ShortName"] = "consulta_spliters";
$tdataconsulta_spliters[".OwnerID"] = "";
$tdataconsulta_spliters[".OriginalTable"] = "spliters";


$tdataconsulta_spliters[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataconsulta_spliters[".originalPagesByType"] = $tdataconsulta_spliters[".pagesByType"];
$tdataconsulta_spliters[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataconsulta_spliters[".originalPages"] = $tdataconsulta_spliters[".pages"];
$tdataconsulta_spliters[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataconsulta_spliters[".originalDefaultPages"] = $tdataconsulta_spliters[".defaultPages"];

//	field labels
$fieldLabelsconsulta_spliters = array();
$fieldToolTipsconsulta_spliters = array();
$pageTitlesconsulta_spliters = array();
$placeHoldersconsulta_spliters = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsconsulta_spliters["Spanish"] = array();
	$fieldToolTipsconsulta_spliters["Spanish"] = array();
	$placeHoldersconsulta_spliters["Spanish"] = array();
	$pageTitlesconsulta_spliters["Spanish"] = array();
	$fieldLabelsconsulta_spliters["Spanish"]["spliter"] = "Spliter";
	$fieldToolTipsconsulta_spliters["Spanish"]["spliter"] = "";
	$placeHoldersconsulta_spliters["Spanish"]["spliter"] = "";
	$fieldLabelsconsulta_spliters["Spanish"]["cable"] = "Cable";
	$fieldToolTipsconsulta_spliters["Spanish"]["cable"] = "";
	$placeHoldersconsulta_spliters["Spanish"]["cable"] = "";
	$fieldLabelsconsulta_spliters["Spanish"]["localidad"] = "Localidad";
	$fieldToolTipsconsulta_spliters["Spanish"]["localidad"] = "";
	$placeHoldersconsulta_spliters["Spanish"]["localidad"] = "";
	$fieldLabelsconsulta_spliters["Spanish"]["id_spliters"] = "Id Spliters";
	$fieldToolTipsconsulta_spliters["Spanish"]["id_spliters"] = "";
	$placeHoldersconsulta_spliters["Spanish"]["id_spliters"] = "";
	if (count($fieldToolTipsconsulta_spliters["Spanish"]))
		$tdataconsulta_spliters[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsconsulta_spliters["English"] = array();
	$fieldToolTipsconsulta_spliters["English"] = array();
	$placeHoldersconsulta_spliters["English"] = array();
	$pageTitlesconsulta_spliters["English"] = array();
	$fieldLabelsconsulta_spliters["English"]["spliter"] = "Spliter";
	$fieldToolTipsconsulta_spliters["English"]["spliter"] = "";
	$placeHoldersconsulta_spliters["English"]["spliter"] = "";
	$fieldLabelsconsulta_spliters["English"]["cable"] = "Cable";
	$fieldToolTipsconsulta_spliters["English"]["cable"] = "";
	$placeHoldersconsulta_spliters["English"]["cable"] = "";
	$fieldLabelsconsulta_spliters["English"]["localidad"] = "Localidad";
	$fieldToolTipsconsulta_spliters["English"]["localidad"] = "";
	$placeHoldersconsulta_spliters["English"]["localidad"] = "";
	$fieldLabelsconsulta_spliters["English"]["id_spliters"] = "Id Spliters";
	$fieldToolTipsconsulta_spliters["English"]["id_spliters"] = "";
	$placeHoldersconsulta_spliters["English"]["id_spliters"] = "";
	if (count($fieldToolTipsconsulta_spliters["English"]))
		$tdataconsulta_spliters[".isUseToolTips"] = true;
}


	$tdataconsulta_spliters[".NCSearch"] = true;



$tdataconsulta_spliters[".shortTableName"] = "consulta_spliters";
$tdataconsulta_spliters[".nSecOptions"] = 0;

$tdataconsulta_spliters[".mainTableOwnerID"] = "";
$tdataconsulta_spliters[".entityType"] = 1;
$tdataconsulta_spliters[".connId"] = "isp_eisa_at_localhost";


$tdataconsulta_spliters[".strOriginalTableName"] = "spliters";

	



$tdataconsulta_spliters[".showAddInPopup"] = false;

$tdataconsulta_spliters[".showEditInPopup"] = false;

$tdataconsulta_spliters[".showViewInPopup"] = false;

$tdataconsulta_spliters[".listAjax"] = false;
//	temporary
//$tdataconsulta_spliters[".listAjax"] = false;

	$tdataconsulta_spliters[".audit"] = false;

	$tdataconsulta_spliters[".locking"] = false;


$pages = $tdataconsulta_spliters[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataconsulta_spliters[".edit"] = true;
	$tdataconsulta_spliters[".afterEditAction"] = 1;
	$tdataconsulta_spliters[".closePopupAfterEdit"] = 1;
	$tdataconsulta_spliters[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataconsulta_spliters[".add"] = true;
$tdataconsulta_spliters[".afterAddAction"] = 1;
$tdataconsulta_spliters[".closePopupAfterAdd"] = 1;
$tdataconsulta_spliters[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataconsulta_spliters[".list"] = true;
}



$tdataconsulta_spliters[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataconsulta_spliters[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataconsulta_spliters[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataconsulta_spliters[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataconsulta_spliters[".printFriendly"] = true;
}



$tdataconsulta_spliters[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataconsulta_spliters[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataconsulta_spliters[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataconsulta_spliters[".isUseAjaxSuggest"] = true;





$tdataconsulta_spliters[".ajaxCodeSnippetAdded"] = false;

$tdataconsulta_spliters[".buttonsAdded"] = false;

$tdataconsulta_spliters[".addPageEvents"] = false;

// use timepicker for search panel
$tdataconsulta_spliters[".isUseTimeForSearch"] = false;


$tdataconsulta_spliters[".badgeColor"] = "D2AF80";


$tdataconsulta_spliters[".allSearchFields"] = array();
$tdataconsulta_spliters[".filterFields"] = array();
$tdataconsulta_spliters[".requiredSearchFields"] = array();

$tdataconsulta_spliters[".googleLikeFields"] = array();
$tdataconsulta_spliters[".googleLikeFields"][] = "id_spliters";
$tdataconsulta_spliters[".googleLikeFields"][] = "spliter";
$tdataconsulta_spliters[".googleLikeFields"][] = "cable";
$tdataconsulta_spliters[".googleLikeFields"][] = "localidad";



$tdataconsulta_spliters[".tableType"] = "list";

$tdataconsulta_spliters[".printerPageOrientation"] = 0;
$tdataconsulta_spliters[".nPrinterPageScale"] = 100;

$tdataconsulta_spliters[".nPrinterSplitRecords"] = 40;

$tdataconsulta_spliters[".geocodingEnabled"] = false;










$tdataconsulta_spliters[".pageSize"] = 50;

$tdataconsulta_spliters[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `spliters`.`id_spliters`";
$tdataconsulta_spliters[".strOrderBy"] = $tstrOrderBy;

$tdataconsulta_spliters[".orderindexes"] = array();
	$tdataconsulta_spliters[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "`spliters`.`id_spliters`");



$tdataconsulta_spliters[".sqlHead"] = "SELECT `spliters`.`id_spliters`,  `spliters`.`spliter`,  `spliters`.`cable`,  `spliters`.`localidad`";
$tdataconsulta_spliters[".sqlFrom"] = "FROM `spliters`  INNER JOIN `cables` ON `spliters`.`cable` = `cables`.`cable` AND `spliters`.`localidad` = `cables`.`localidad`";
$tdataconsulta_spliters[".sqlWhereExpr"] = "";
$tdataconsulta_spliters[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataconsulta_spliters[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataconsulta_spliters[".arrGroupsPerPage"] = $arrGPP;

$tdataconsulta_spliters[".highlightSearchResults"] = true;

$tableKeysconsulta_spliters = array();
$tableKeysconsulta_spliters[] = "spliter";
$tdataconsulta_spliters[".Keys"] = $tableKeysconsulta_spliters;


$tdataconsulta_spliters[".hideMobileList"] = array();




//	id_spliters
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_spliters";
	$fdata["GoodName"] = "id_spliters";
	$fdata["ownerTable"] = "spliters";
	$fdata["Label"] = GetFieldLabel("consulta_spliters","id_spliters");
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


	$tdataconsulta_spliters["id_spliters"] = $fdata;
		$tdataconsulta_spliters[".searchableFields"][] = "id_spliters";
//	spliter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "spliter";
	$fdata["GoodName"] = "spliter";
	$fdata["ownerTable"] = "spliters";
	$fdata["Label"] = GetFieldLabel("consulta_spliters","spliter");
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


	$tdataconsulta_spliters["spliter"] = $fdata;
		$tdataconsulta_spliters[".searchableFields"][] = "spliter";
//	cable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cable";
	$fdata["GoodName"] = "cable";
	$fdata["ownerTable"] = "spliters";
	$fdata["Label"] = GetFieldLabel("consulta_spliters","cable");
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


	$tdataconsulta_spliters["cable"] = $fdata;
		$tdataconsulta_spliters[".searchableFields"][] = "cable";
//	localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "localidad";
	$fdata["GoodName"] = "localidad";
	$fdata["ownerTable"] = "spliters";
	$fdata["Label"] = GetFieldLabel("consulta_spliters","localidad");
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


	$tdataconsulta_spliters["localidad"] = $fdata;
		$tdataconsulta_spliters[".searchableFields"][] = "localidad";


$tables_data["consulta_spliters"]=&$tdataconsulta_spliters;
$field_labels["consulta_spliters"] = &$fieldLabelsconsulta_spliters;
$fieldToolTips["consulta_spliters"] = &$fieldToolTipsconsulta_spliters;
$placeHolders["consulta_spliters"] = &$placeHoldersconsulta_spliters;
$page_titles["consulta_spliters"] = &$pageTitlesconsulta_spliters;


changeTextControlsToDate( "consulta_spliters" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["consulta_spliters"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["consulta_spliters"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_consulta_spliters()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`spliters`.`id_spliters`,  `spliters`.`spliter`,  `spliters`.`cable`,  `spliters`.`localidad`";
$proto0["m_strFrom"] = "FROM `spliters`  INNER JOIN `cables` ON `spliters`.`cable` = `cables`.`cable` AND `spliters`.`localidad` = `cables`.`localidad`";
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
	"m_srcTableName" => "consulta_spliters"
));

$proto6["m_sql"] = "`spliters`.`id_spliters`";
$proto6["m_srcTableName"] = "consulta_spliters";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "spliter",
	"m_strTable" => "spliters",
	"m_srcTableName" => "consulta_spliters"
));

$proto8["m_sql"] = "`spliters`.`spliter`";
$proto8["m_srcTableName"] = "consulta_spliters";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cable",
	"m_strTable" => "spliters",
	"m_srcTableName" => "consulta_spliters"
));

$proto10["m_sql"] = "`spliters`.`cable`";
$proto10["m_srcTableName"] = "consulta_spliters";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "localidad",
	"m_strTable" => "spliters",
	"m_srcTableName" => "consulta_spliters"
));

$proto12["m_sql"] = "`spliters`.`localidad`";
$proto12["m_srcTableName"] = "consulta_spliters";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "spliters";
$proto15["m_srcTableName"] = "consulta_spliters";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id_spliters";
$proto15["m_columns"][] = "spliter";
$proto15["m_columns"][] = "cable";
$proto15["m_columns"][] = "localidad";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "`spliters`";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "consulta_spliters";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
												$proto18=array();
$proto18["m_link"] = "SQLL_INNERJOIN";
			$proto19=array();
$proto19["m_strName"] = "cables";
$proto19["m_srcTableName"] = "consulta_spliters";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id_cables";
$proto19["m_columns"][] = "cable";
$proto19["m_columns"][] = "localidad";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "INNER JOIN `cables` ON `spliters`.`cable` = `cables`.`cable` AND `spliters`.`localidad` = `cables`.`localidad`";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "consulta_spliters";
$proto20=array();
$proto20["m_sql"] = "`cables`.`cable` = `spliters`.`cable` AND `cables`.`localidad` = `spliters`.`localidad`";
$proto20["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "`cables`.`cable` = `spliters`.`cable` AND `cables`.`localidad` = `spliters`.`localidad`"
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
						$proto22=array();
$proto22["m_sql"] = "`spliters`.`cable` = `cables`.`cable`";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cable",
	"m_strTable" => "spliters",
	"m_srcTableName" => "consulta_spliters"
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "= `cables`.`cable`";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

			$proto20["m_contained"][]=$obj;
						$proto24=array();
$proto24["m_sql"] = "`spliters`.`localidad` = `cables`.`localidad`";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "localidad",
	"m_strTable" => "spliters",
	"m_srcTableName" => "consulta_spliters"
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "= `cables`.`localidad`";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

			$proto20["m_contained"][]=$obj;
						$proto26=array();
$proto26["m_sql"] = "`cables`.`cable` = `spliters`.`cable`";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cable",
	"m_strTable" => "cables",
	"m_srcTableName" => "consulta_spliters"
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "= `spliters`.`cable`";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

			$proto20["m_contained"][]=$obj;
						$proto28=array();
$proto28["m_sql"] = "`cables`.`localidad` = `spliters`.`localidad`";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "localidad",
	"m_strTable" => "cables",
	"m_srcTableName" => "consulta_spliters"
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "= `spliters`.`localidad`";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

			$proto20["m_contained"][]=$obj;
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "id_spliters",
	"m_strTable" => "spliters",
	"m_srcTableName" => "consulta_spliters"
));

$proto30["m_column"]=$obj;
$proto30["m_bAsc"] = 1;
$proto30["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto30);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="consulta_spliters";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_consulta_spliters = createSqlQuery_consulta_spliters();


	
		;

				

$tdataconsulta_spliters[".sqlquery"] = $queryData_consulta_spliters;



$tdataconsulta_spliters[".hasEvents"] = false;

?>