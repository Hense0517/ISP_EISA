<?php
$tdatalocalidad = array();
$tdatalocalidad[".searchableFields"] = array();
$tdatalocalidad[".ShortName"] = "localidad";
$tdatalocalidad[".OwnerID"] = "";
$tdatalocalidad[".OriginalTable"] = "localidad";


$tdatalocalidad[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatalocalidad[".originalPagesByType"] = $tdatalocalidad[".pagesByType"];
$tdatalocalidad[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatalocalidad[".originalPages"] = $tdatalocalidad[".pages"];
$tdatalocalidad[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatalocalidad[".originalDefaultPages"] = $tdatalocalidad[".defaultPages"];

//	field labels
$fieldLabelslocalidad = array();
$fieldToolTipslocalidad = array();
$pageTitleslocalidad = array();
$placeHolderslocalidad = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelslocalidad["Spanish"] = array();
	$fieldToolTipslocalidad["Spanish"] = array();
	$placeHolderslocalidad["Spanish"] = array();
	$pageTitleslocalidad["Spanish"] = array();
	$fieldLabelslocalidad["Spanish"]["Localidad"] = "Localidad";
	$fieldToolTipslocalidad["Spanish"]["Localidad"] = "";
	$placeHolderslocalidad["Spanish"]["Localidad"] = "";
	$fieldLabelslocalidad["Spanish"]["id_localidad"] = "Id Localidad";
	$fieldToolTipslocalidad["Spanish"]["id_localidad"] = "";
	$placeHolderslocalidad["Spanish"]["id_localidad"] = "";
	if (count($fieldToolTipslocalidad["Spanish"]))
		$tdatalocalidad[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslocalidad["English"] = array();
	$fieldToolTipslocalidad["English"] = array();
	$placeHolderslocalidad["English"] = array();
	$pageTitleslocalidad["English"] = array();
	$fieldLabelslocalidad["English"]["id_localidad"] = "Id Localidad";
	$fieldToolTipslocalidad["English"]["id_localidad"] = "";
	$placeHolderslocalidad["English"]["id_localidad"] = "";
	$fieldLabelslocalidad["English"]["Localidad"] = "Localidad";
	$fieldToolTipslocalidad["English"]["Localidad"] = "";
	$placeHolderslocalidad["English"]["Localidad"] = "";
	if (count($fieldToolTipslocalidad["English"]))
		$tdatalocalidad[".isUseToolTips"] = true;
}


	$tdatalocalidad[".NCSearch"] = true;



$tdatalocalidad[".shortTableName"] = "localidad";
$tdatalocalidad[".nSecOptions"] = 0;

$tdatalocalidad[".mainTableOwnerID"] = "";
$tdatalocalidad[".entityType"] = 0;
$tdatalocalidad[".connId"] = "isp_eisa_at_localhost";


$tdatalocalidad[".strOriginalTableName"] = "localidad";

	



$tdatalocalidad[".showAddInPopup"] = false;

$tdatalocalidad[".showEditInPopup"] = false;

$tdatalocalidad[".showViewInPopup"] = false;

$tdatalocalidad[".listAjax"] = false;
//	temporary
//$tdatalocalidad[".listAjax"] = false;

	$tdatalocalidad[".audit"] = false;

	$tdatalocalidad[".locking"] = false;


$pages = $tdatalocalidad[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalocalidad[".edit"] = true;
	$tdatalocalidad[".afterEditAction"] = 1;
	$tdatalocalidad[".closePopupAfterEdit"] = 1;
	$tdatalocalidad[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalocalidad[".add"] = true;
$tdatalocalidad[".afterAddAction"] = 1;
$tdatalocalidad[".closePopupAfterAdd"] = 1;
$tdatalocalidad[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalocalidad[".list"] = true;
}



$tdatalocalidad[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalocalidad[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalocalidad[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalocalidad[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalocalidad[".printFriendly"] = true;
}



$tdatalocalidad[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalocalidad[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalocalidad[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalocalidad[".isUseAjaxSuggest"] = true;





$tdatalocalidad[".ajaxCodeSnippetAdded"] = false;

$tdatalocalidad[".buttonsAdded"] = false;

$tdatalocalidad[".addPageEvents"] = true;

// use timepicker for search panel
$tdatalocalidad[".isUseTimeForSearch"] = false;


$tdatalocalidad[".badgeColor"] = "EDCA00";


$tdatalocalidad[".allSearchFields"] = array();
$tdatalocalidad[".filterFields"] = array();
$tdatalocalidad[".requiredSearchFields"] = array();

$tdatalocalidad[".googleLikeFields"] = array();
$tdatalocalidad[".googleLikeFields"][] = "id_localidad";
$tdatalocalidad[".googleLikeFields"][] = "Localidad";



$tdatalocalidad[".tableType"] = "list";

$tdatalocalidad[".printerPageOrientation"] = 0;
$tdatalocalidad[".nPrinterPageScale"] = 100;

$tdatalocalidad[".nPrinterSplitRecords"] = 40;

$tdatalocalidad[".geocodingEnabled"] = false;










$tdatalocalidad[".pageSize"] = 30;

$tdatalocalidad[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `Localidad`";
$tdatalocalidad[".strOrderBy"] = $tstrOrderBy;

$tdatalocalidad[".orderindexes"] = array();
	$tdatalocalidad[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "`Localidad`");



$tdatalocalidad[".sqlHead"] = "SELECT `id_localidad`,  `Localidad`";
$tdatalocalidad[".sqlFrom"] = "FROM `localidad`";
$tdatalocalidad[".sqlWhereExpr"] = "";
$tdatalocalidad[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalocalidad[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalocalidad[".arrGroupsPerPage"] = $arrGPP;

$tdatalocalidad[".highlightSearchResults"] = true;

$tableKeyslocalidad = array();
$tdatalocalidad[".Keys"] = $tableKeyslocalidad;


$tdatalocalidad[".hideMobileList"] = array();




//	id_localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_localidad";
	$fdata["GoodName"] = "id_localidad";
	$fdata["ownerTable"] = "localidad";
	$fdata["Label"] = GetFieldLabel("localidad","id_localidad");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_localidad";

		$fdata["sourceSingle"] = "id_localidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`id_localidad`";

	
	
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


	$tdatalocalidad["id_localidad"] = $fdata;
		$tdatalocalidad[".searchableFields"][] = "id_localidad";
//	Localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Localidad";
	$fdata["GoodName"] = "Localidad";
	$fdata["ownerTable"] = "localidad";
	$fdata["Label"] = GetFieldLabel("localidad","Localidad");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatalocalidad["Localidad"] = $fdata;
		$tdatalocalidad[".searchableFields"][] = "Localidad";


$tables_data["localidad"]=&$tdatalocalidad;
$field_labels["localidad"] = &$fieldLabelslocalidad;
$fieldToolTips["localidad"] = &$fieldToolTipslocalidad;
$placeHolders["localidad"] = &$placeHolderslocalidad;
$page_titles["localidad"] = &$pageTitleslocalidad;


changeTextControlsToDate( "localidad" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["localidad"] = array();
//	cables
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="cables";
		$detailsParam["dOriginalTable"] = "cables";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "cables";
	$detailsParam["dCaptionTable"] = GetTableCaption("cables");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["localidad"][$dIndex] = $detailsParam;

	
		$detailsTablesData["localidad"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["localidad"][$dIndex]["masterKeys"][]="Localidad";

				$detailsTablesData["localidad"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["localidad"][$dIndex]["detailKeys"][]="localidad";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["localidad"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_localidad()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id_localidad`,  `Localidad`";
$proto0["m_strFrom"] = "FROM `localidad`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `Localidad`";
	
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
	"m_srcTableName" => "localidad"
));

$proto6["m_sql"] = "`id_localidad`";
$proto6["m_srcTableName"] = "localidad";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Localidad",
	"m_strTable" => "localidad",
	"m_srcTableName" => "localidad"
));

$proto8["m_sql"] = "`Localidad`";
$proto8["m_srcTableName"] = "localidad";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "localidad";
$proto11["m_srcTableName"] = "localidad";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_localidad";
$proto11["m_columns"][] = "Localidad";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "`localidad`";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "localidad";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto14=array();
						$obj = new SQLField(array(
	"m_strName" => "Localidad",
	"m_strTable" => "localidad",
	"m_srcTableName" => "localidad"
));

$proto14["m_column"]=$obj;
$proto14["m_bAsc"] = 1;
$proto14["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto14);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="localidad";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_localidad = createSqlQuery_localidad();


	
		;

		

$tdatalocalidad[".sqlquery"] = $queryData_localidad;



include_once(getabspath("include/localidad_events.php"));
$tdatalocalidad[".hasEvents"] = true;

?>