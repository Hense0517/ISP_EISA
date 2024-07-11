<?php
$tdatacables = array();
$tdatacables[".searchableFields"] = array();
$tdatacables[".ShortName"] = "cables";
$tdatacables[".OwnerID"] = "";
$tdatacables[".OriginalTable"] = "cables";


$tdatacables[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacables[".originalPagesByType"] = $tdatacables[".pagesByType"];
$tdatacables[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacables[".originalPages"] = $tdatacables[".pages"];
$tdatacables[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacables[".originalDefaultPages"] = $tdatacables[".defaultPages"];

//	field labels
$fieldLabelscables = array();
$fieldToolTipscables = array();
$pageTitlescables = array();
$placeHolderscables = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscables["Spanish"] = array();
	$fieldToolTipscables["Spanish"] = array();
	$placeHolderscables["Spanish"] = array();
	$pageTitlescables["Spanish"] = array();
	$fieldLabelscables["Spanish"]["id_cables"] = "Id Cables";
	$fieldToolTipscables["Spanish"]["id_cables"] = "";
	$placeHolderscables["Spanish"]["id_cables"] = "";
	$fieldLabelscables["Spanish"]["cable"] = "Cable";
	$fieldToolTipscables["Spanish"]["cable"] = "";
	$placeHolderscables["Spanish"]["cable"] = "";
	$fieldLabelscables["Spanish"]["localidad"] = "Localidad";
	$fieldToolTipscables["Spanish"]["localidad"] = "";
	$placeHolderscables["Spanish"]["localidad"] = "";
	if (count($fieldToolTipscables["Spanish"]))
		$tdatacables[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscables["English"] = array();
	$fieldToolTipscables["English"] = array();
	$placeHolderscables["English"] = array();
	$pageTitlescables["English"] = array();
	$fieldLabelscables["English"]["id_cables"] = "Id Cables";
	$fieldToolTipscables["English"]["id_cables"] = "";
	$placeHolderscables["English"]["id_cables"] = "";
	$fieldLabelscables["English"]["cable"] = "Cable";
	$fieldToolTipscables["English"]["cable"] = "";
	$placeHolderscables["English"]["cable"] = "";
	$fieldLabelscables["English"]["localidad"] = "Localidad";
	$fieldToolTipscables["English"]["localidad"] = "";
	$placeHolderscables["English"]["localidad"] = "";
	if (count($fieldToolTipscables["English"]))
		$tdatacables[".isUseToolTips"] = true;
}


	$tdatacables[".NCSearch"] = true;



$tdatacables[".shortTableName"] = "cables";
$tdatacables[".nSecOptions"] = 0;

$tdatacables[".mainTableOwnerID"] = "";
$tdatacables[".entityType"] = 0;
$tdatacables[".connId"] = "isp_eisa_at_localhost";


$tdatacables[".strOriginalTableName"] = "cables";

	



$tdatacables[".showAddInPopup"] = false;

$tdatacables[".showEditInPopup"] = false;

$tdatacables[".showViewInPopup"] = false;

$tdatacables[".listAjax"] = false;
//	temporary
//$tdatacables[".listAjax"] = false;

	$tdatacables[".audit"] = false;

	$tdatacables[".locking"] = false;


$pages = $tdatacables[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacables[".edit"] = true;
	$tdatacables[".afterEditAction"] = 1;
	$tdatacables[".closePopupAfterEdit"] = 1;
	$tdatacables[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacables[".add"] = true;
$tdatacables[".afterAddAction"] = 1;
$tdatacables[".closePopupAfterAdd"] = 1;
$tdatacables[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacables[".list"] = true;
}



$tdatacables[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacables[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacables[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacables[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacables[".printFriendly"] = true;
}



$tdatacables[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacables[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacables[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacables[".isUseAjaxSuggest"] = true;





$tdatacables[".ajaxCodeSnippetAdded"] = false;

$tdatacables[".buttonsAdded"] = false;

$tdatacables[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacables[".isUseTimeForSearch"] = false;


$tdatacables[".badgeColor"] = "9acd32";


$tdatacables[".allSearchFields"] = array();
$tdatacables[".filterFields"] = array();
$tdatacables[".requiredSearchFields"] = array();

$tdatacables[".googleLikeFields"] = array();
$tdatacables[".googleLikeFields"][] = "id_cables";
$tdatacables[".googleLikeFields"][] = "cable";
$tdatacables[".googleLikeFields"][] = "localidad";



$tdatacables[".tableType"] = "list";

$tdatacables[".printerPageOrientation"] = 0;
$tdatacables[".nPrinterPageScale"] = 100;

$tdatacables[".nPrinterSplitRecords"] = 40;

$tdatacables[".geocodingEnabled"] = false;










$tdatacables[".pageSize"] = 20;

$tdatacables[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id_cables`";
$tdatacables[".strOrderBy"] = $tstrOrderBy;

$tdatacables[".orderindexes"] = array();
	$tdatacables[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "`id_cables`");



$tdatacables[".sqlHead"] = "SELECT `id_cables`,  `cable`,  `localidad`";
$tdatacables[".sqlFrom"] = "FROM `cables`";
$tdatacables[".sqlWhereExpr"] = "";
$tdatacables[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacables[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacables[".arrGroupsPerPage"] = $arrGPP;

$tdatacables[".highlightSearchResults"] = true;

$tableKeyscables = array();
$tableKeyscables[] = "id_cables";
$tdatacables[".Keys"] = $tableKeyscables;


$tdatacables[".hideMobileList"] = array();




//	id_cables
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_cables";
	$fdata["GoodName"] = "id_cables";
	$fdata["ownerTable"] = "cables";
	$fdata["Label"] = GetFieldLabel("cables","id_cables");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_cables";

		$fdata["sourceSingle"] = "id_cables";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`id_cables`";

	
	
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


	$tdatacables["id_cables"] = $fdata;
		$tdatacables[".searchableFields"][] = "id_cables";
//	cable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cable";
	$fdata["GoodName"] = "cable";
	$fdata["ownerTable"] = "cables";
	$fdata["Label"] = GetFieldLabel("cables","cable");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "numeros_de_cables";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Cable";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Cable";

	

	
	$edata["LookupOrderBy"] = "Cable";

	
	
	
	

	
	
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


	$tdatacables["cable"] = $fdata;
		$tdatacables[".searchableFields"][] = "cable";
//	localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "localidad";
	$fdata["GoodName"] = "localidad";
	$fdata["ownerTable"] = "cables";
	$fdata["Label"] = GetFieldLabel("cables","localidad");
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


	$tdatacables["localidad"] = $fdata;
		$tdatacables[".searchableFields"][] = "localidad";


$tables_data["cables"]=&$tdatacables;
$field_labels["cables"] = &$fieldLabelscables;
$fieldToolTips["cables"] = &$fieldToolTipscables;
$placeHolders["cables"] = &$placeHolderscables;
$page_titles["cables"] = &$pageTitlescables;


changeTextControlsToDate( "cables" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cables"] = array();
//	spliters
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="spliters";
		$detailsParam["dOriginalTable"] = "spliters";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "spliters";
	$detailsParam["dCaptionTable"] = GetTableCaption("spliters");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["cables"][$dIndex] = $detailsParam;

	
		$detailsTablesData["cables"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["cables"][$dIndex]["masterKeys"][]="cable";

	$detailsTablesData["cables"][$dIndex]["masterKeys"][]="localidad";

				$detailsTablesData["cables"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["cables"][$dIndex]["detailKeys"][]="cable";

		
	$detailsTablesData["cables"][$dIndex]["detailKeys"][]="localidad";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cables"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="localidad";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="localidad";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "localidad";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["cables"][0] = $masterParams;
				$masterTablesData["cables"][0]["masterKeys"] = array();
	$masterTablesData["cables"][0]["masterKeys"][]="Localidad";
				$masterTablesData["cables"][0]["detailKeys"] = array();
	$masterTablesData["cables"][0]["detailKeys"][]="localidad";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cables()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id_cables`,  `cable`,  `localidad`";
$proto0["m_strFrom"] = "FROM `cables`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `id_cables`";
	
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
	"m_strName" => "id_cables",
	"m_strTable" => "cables",
	"m_srcTableName" => "cables"
));

$proto6["m_sql"] = "`id_cables`";
$proto6["m_srcTableName"] = "cables";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cable",
	"m_strTable" => "cables",
	"m_srcTableName" => "cables"
));

$proto8["m_sql"] = "`cable`";
$proto8["m_srcTableName"] = "cables";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "localidad",
	"m_strTable" => "cables",
	"m_srcTableName" => "cables"
));

$proto10["m_sql"] = "`localidad`";
$proto10["m_srcTableName"] = "cables";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "cables";
$proto13["m_srcTableName"] = "cables";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id_cables";
$proto13["m_columns"][] = "cable";
$proto13["m_columns"][] = "localidad";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "`cables`";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "cables";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto16=array();
						$obj = new SQLField(array(
	"m_strName" => "id_cables",
	"m_strTable" => "cables",
	"m_srcTableName" => "cables"
));

$proto16["m_column"]=$obj;
$proto16["m_bAsc"] = 1;
$proto16["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto16);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="cables";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cables = createSqlQuery_cables();


	
		;

			

$tdatacables[".sqlquery"] = $queryData_cables;



$tdatacables[".hasEvents"] = false;

?>