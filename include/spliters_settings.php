<?php
$tdataspliters = array();
$tdataspliters[".searchableFields"] = array();
$tdataspliters[".ShortName"] = "spliters";
$tdataspliters[".OwnerID"] = "";
$tdataspliters[".OriginalTable"] = "spliters";


$tdataspliters[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataspliters[".originalPagesByType"] = $tdataspliters[".pagesByType"];
$tdataspliters[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataspliters[".originalPages"] = $tdataspliters[".pages"];
$tdataspliters[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataspliters[".originalDefaultPages"] = $tdataspliters[".defaultPages"];

//	field labels
$fieldLabelsspliters = array();
$fieldToolTipsspliters = array();
$pageTitlesspliters = array();
$placeHoldersspliters = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsspliters["Spanish"] = array();
	$fieldToolTipsspliters["Spanish"] = array();
	$placeHoldersspliters["Spanish"] = array();
	$pageTitlesspliters["Spanish"] = array();
	$fieldLabelsspliters["Spanish"]["spliter"] = "Spliter";
	$fieldToolTipsspliters["Spanish"]["spliter"] = "";
	$placeHoldersspliters["Spanish"]["spliter"] = "";
	$fieldLabelsspliters["Spanish"]["cable"] = "Cable";
	$fieldToolTipsspliters["Spanish"]["cable"] = "";
	$placeHoldersspliters["Spanish"]["cable"] = "";
	$fieldLabelsspliters["Spanish"]["localidad"] = "Localidad";
	$fieldToolTipsspliters["Spanish"]["localidad"] = "";
	$placeHoldersspliters["Spanish"]["localidad"] = "";
	$fieldLabelsspliters["Spanish"]["id_spliters"] = "Id Spliters";
	$fieldToolTipsspliters["Spanish"]["id_spliters"] = "";
	$placeHoldersspliters["Spanish"]["id_spliters"] = "";
	if (count($fieldToolTipsspliters["Spanish"]))
		$tdataspliters[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsspliters["English"] = array();
	$fieldToolTipsspliters["English"] = array();
	$placeHoldersspliters["English"] = array();
	$pageTitlesspliters["English"] = array();
	$fieldLabelsspliters["English"]["spliter"] = "Spliter";
	$fieldToolTipsspliters["English"]["spliter"] = "";
	$placeHoldersspliters["English"]["spliter"] = "";
	$fieldLabelsspliters["English"]["cable"] = "Cable";
	$fieldToolTipsspliters["English"]["cable"] = "";
	$placeHoldersspliters["English"]["cable"] = "";
	$fieldLabelsspliters["English"]["localidad"] = "Localidad";
	$fieldToolTipsspliters["English"]["localidad"] = "";
	$placeHoldersspliters["English"]["localidad"] = "";
	$fieldLabelsspliters["English"]["id_spliters"] = "Id Spliters";
	$fieldToolTipsspliters["English"]["id_spliters"] = "";
	$placeHoldersspliters["English"]["id_spliters"] = "";
	if (count($fieldToolTipsspliters["English"]))
		$tdataspliters[".isUseToolTips"] = true;
}


	$tdataspliters[".NCSearch"] = true;



$tdataspliters[".shortTableName"] = "spliters";
$tdataspliters[".nSecOptions"] = 0;

$tdataspliters[".mainTableOwnerID"] = "";
$tdataspliters[".entityType"] = 0;
$tdataspliters[".connId"] = "isp_eisa_at_localhost";


$tdataspliters[".strOriginalTableName"] = "spliters";

	



$tdataspliters[".showAddInPopup"] = false;

$tdataspliters[".showEditInPopup"] = false;

$tdataspliters[".showViewInPopup"] = false;

$tdataspliters[".listAjax"] = false;
//	temporary
//$tdataspliters[".listAjax"] = false;

	$tdataspliters[".audit"] = false;

	$tdataspliters[".locking"] = false;


$pages = $tdataspliters[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataspliters[".edit"] = true;
	$tdataspliters[".afterEditAction"] = 1;
	$tdataspliters[".closePopupAfterEdit"] = 1;
	$tdataspliters[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataspliters[".add"] = true;
$tdataspliters[".afterAddAction"] = 1;
$tdataspliters[".closePopupAfterAdd"] = 1;
$tdataspliters[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataspliters[".list"] = true;
}



$tdataspliters[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataspliters[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataspliters[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataspliters[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataspliters[".printFriendly"] = true;
}



$tdataspliters[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataspliters[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataspliters[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataspliters[".isUseAjaxSuggest"] = true;





$tdataspliters[".ajaxCodeSnippetAdded"] = false;

$tdataspliters[".buttonsAdded"] = false;

$tdataspliters[".addPageEvents"] = false;

// use timepicker for search panel
$tdataspliters[".isUseTimeForSearch"] = false;


$tdataspliters[".badgeColor"] = "daa520";


$tdataspliters[".allSearchFields"] = array();
$tdataspliters[".filterFields"] = array();
$tdataspliters[".requiredSearchFields"] = array();

$tdataspliters[".googleLikeFields"] = array();
$tdataspliters[".googleLikeFields"][] = "id_spliters";
$tdataspliters[".googleLikeFields"][] = "spliter";
$tdataspliters[".googleLikeFields"][] = "cable";
$tdataspliters[".googleLikeFields"][] = "localidad";



$tdataspliters[".tableType"] = "list";

$tdataspliters[".printerPageOrientation"] = 0;
$tdataspliters[".nPrinterPageScale"] = 100;

$tdataspliters[".nPrinterSplitRecords"] = 40;

$tdataspliters[".geocodingEnabled"] = false;










$tdataspliters[".pageSize"] = 50;

$tdataspliters[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id_spliters`";
$tdataspliters[".strOrderBy"] = $tstrOrderBy;

$tdataspliters[".orderindexes"] = array();
	$tdataspliters[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "`id_spliters`");



$tdataspliters[".sqlHead"] = "SELECT `id_spliters`,  `spliter`,  `cable`,  `localidad`";
$tdataspliters[".sqlFrom"] = "FROM `spliters`";
$tdataspliters[".sqlWhereExpr"] = "";
$tdataspliters[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataspliters[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataspliters[".arrGroupsPerPage"] = $arrGPP;

$tdataspliters[".highlightSearchResults"] = true;

$tableKeysspliters = array();
$tableKeysspliters[] = "spliter";
$tdataspliters[".Keys"] = $tableKeysspliters;


$tdataspliters[".hideMobileList"] = array();




//	id_spliters
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_spliters";
	$fdata["GoodName"] = "id_spliters";
	$fdata["ownerTable"] = "spliters";
	$fdata["Label"] = GetFieldLabel("spliters","id_spliters");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_spliters";

		$fdata["sourceSingle"] = "id_spliters";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`id_spliters`";

	
	
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


	$tdataspliters["id_spliters"] = $fdata;
		$tdataspliters[".searchableFields"][] = "id_spliters";
//	spliter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "spliter";
	$fdata["GoodName"] = "spliter";
	$fdata["ownerTable"] = "spliters";
	$fdata["Label"] = GetFieldLabel("spliters","spliter");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "spliter";

		$fdata["sourceSingle"] = "spliter";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`spliter`";

	
	
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


	$tdataspliters["spliter"] = $fdata;
		$tdataspliters[".searchableFields"][] = "spliter";
//	cable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cable";
	$fdata["GoodName"] = "cable";
	$fdata["ownerTable"] = "spliters";
	$fdata["Label"] = GetFieldLabel("spliters","cable");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cable";

		$fdata["sourceSingle"] = "cable";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`cable`";

	
	
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


	$tdataspliters["cable"] = $fdata;
		$tdataspliters[".searchableFields"][] = "cable";
//	localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "localidad";
	$fdata["GoodName"] = "localidad";
	$fdata["ownerTable"] = "spliters";
	$fdata["Label"] = GetFieldLabel("spliters","localidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "localidad";

		$fdata["sourceSingle"] = "localidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`localidad`";

	
	
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


	$tdataspliters["localidad"] = $fdata;
		$tdataspliters[".searchableFields"][] = "localidad";


$tables_data["spliters"]=&$tdataspliters;
$field_labels["spliters"] = &$fieldLabelsspliters;
$fieldToolTips["spliters"] = &$fieldToolTipsspliters;
$placeHolders["spliters"] = &$placeHoldersspliters;
$page_titles["spliters"] = &$pageTitlesspliters;


changeTextControlsToDate( "spliters" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["spliters"] = array();
//	ctos
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="ctos";
		$detailsParam["dOriginalTable"] = "ctos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "ctos";
	$detailsParam["dCaptionTable"] = GetTableCaption("ctos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["spliters"][$dIndex] = $detailsParam;

	
		$detailsTablesData["spliters"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["spliters"][$dIndex]["masterKeys"][]="spliter";

	$detailsTablesData["spliters"][$dIndex]["masterKeys"][]="cable";

	$detailsTablesData["spliters"][$dIndex]["masterKeys"][]="localidad";

				$detailsTablesData["spliters"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["spliters"][$dIndex]["detailKeys"][]="Spliter";

		
	$detailsTablesData["spliters"][$dIndex]["detailKeys"][]="Cable";

		
	$detailsTablesData["spliters"][$dIndex]["detailKeys"][]="Localidad";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["spliters"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="cables";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="cables";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "cables";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["spliters"][0] = $masterParams;
				$masterTablesData["spliters"][0]["masterKeys"] = array();
	$masterTablesData["spliters"][0]["masterKeys"][]="cable";
				$masterTablesData["spliters"][0]["masterKeys"][]="localidad";
				$masterTablesData["spliters"][0]["detailKeys"] = array();
	$masterTablesData["spliters"][0]["detailKeys"][]="cable";
				$masterTablesData["spliters"][0]["detailKeys"][]="localidad";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_spliters()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id_spliters`,  `spliter`,  `cable`,  `localidad`";
$proto0["m_strFrom"] = "FROM `spliters`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `id_spliters`";
	
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
	"m_srcTableName" => "spliters"
));

$proto6["m_sql"] = "`id_spliters`";
$proto6["m_srcTableName"] = "spliters";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "spliter",
	"m_strTable" => "spliters",
	"m_srcTableName" => "spliters"
));

$proto8["m_sql"] = "`spliter`";
$proto8["m_srcTableName"] = "spliters";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cable",
	"m_strTable" => "spliters",
	"m_srcTableName" => "spliters"
));

$proto10["m_sql"] = "`cable`";
$proto10["m_srcTableName"] = "spliters";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "localidad",
	"m_strTable" => "spliters",
	"m_srcTableName" => "spliters"
));

$proto12["m_sql"] = "`localidad`";
$proto12["m_srcTableName"] = "spliters";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "spliters";
$proto15["m_srcTableName"] = "spliters";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id_spliters";
$proto15["m_columns"][] = "spliter";
$proto15["m_columns"][] = "cable";
$proto15["m_columns"][] = "localidad";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "`spliters`";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "spliters";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto18=array();
						$obj = new SQLField(array(
	"m_strName" => "id_spliters",
	"m_strTable" => "spliters",
	"m_srcTableName" => "spliters"
));

$proto18["m_column"]=$obj;
$proto18["m_bAsc"] = 1;
$proto18["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto18);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="spliters";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_spliters = createSqlQuery_spliters();


	
		;

				

$tdataspliters[".sqlquery"] = $queryData_spliters;



$tdataspliters[".hasEvents"] = false;

?>