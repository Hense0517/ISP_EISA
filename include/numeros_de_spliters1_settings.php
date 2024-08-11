<?php
$tdatanumeros_de_spliters1 = array();
$tdatanumeros_de_spliters1[".searchableFields"] = array();
$tdatanumeros_de_spliters1[".ShortName"] = "numeros_de_spliters1";
$tdatanumeros_de_spliters1[".OwnerID"] = "";
$tdatanumeros_de_spliters1[".OriginalTable"] = "numeros_de_spliters";


$tdatanumeros_de_spliters1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatanumeros_de_spliters1[".originalPagesByType"] = $tdatanumeros_de_spliters1[".pagesByType"];
$tdatanumeros_de_spliters1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatanumeros_de_spliters1[".originalPages"] = $tdatanumeros_de_spliters1[".pages"];
$tdatanumeros_de_spliters1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatanumeros_de_spliters1[".originalDefaultPages"] = $tdatanumeros_de_spliters1[".defaultPages"];

//	field labels
$fieldLabelsnumeros_de_spliters1 = array();
$fieldToolTipsnumeros_de_spliters1 = array();
$pageTitlesnumeros_de_spliters1 = array();
$placeHoldersnumeros_de_spliters1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsnumeros_de_spliters1["Spanish"] = array();
	$fieldToolTipsnumeros_de_spliters1["Spanish"] = array();
	$placeHoldersnumeros_de_spliters1["Spanish"] = array();
	$pageTitlesnumeros_de_spliters1["Spanish"] = array();
	$fieldLabelsnumeros_de_spliters1["Spanish"]["Spliter"] = "Spliter";
	$fieldToolTipsnumeros_de_spliters1["Spanish"]["Spliter"] = "";
	$placeHoldersnumeros_de_spliters1["Spanish"]["Spliter"] = "";
	$fieldLabelsnumeros_de_spliters1["Spanish"]["id_Spliters"] = "Id Spliters";
	$fieldToolTipsnumeros_de_spliters1["Spanish"]["id_Spliters"] = "";
	$placeHoldersnumeros_de_spliters1["Spanish"]["id_Spliters"] = "";
	if (count($fieldToolTipsnumeros_de_spliters1["Spanish"]))
		$tdatanumeros_de_spliters1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsnumeros_de_spliters1["English"] = array();
	$fieldToolTipsnumeros_de_spliters1["English"] = array();
	$placeHoldersnumeros_de_spliters1["English"] = array();
	$pageTitlesnumeros_de_spliters1["English"] = array();
	$fieldLabelsnumeros_de_spliters1["English"]["id_Spliters"] = "Id Spliters";
	$fieldToolTipsnumeros_de_spliters1["English"]["id_Spliters"] = "";
	$placeHoldersnumeros_de_spliters1["English"]["id_Spliters"] = "";
	$fieldLabelsnumeros_de_spliters1["English"]["Spliter"] = "Spliter";
	$fieldToolTipsnumeros_de_spliters1["English"]["Spliter"] = "";
	$placeHoldersnumeros_de_spliters1["English"]["Spliter"] = "";
	if (count($fieldToolTipsnumeros_de_spliters1["English"]))
		$tdatanumeros_de_spliters1[".isUseToolTips"] = true;
}


	$tdatanumeros_de_spliters1[".NCSearch"] = true;



$tdatanumeros_de_spliters1[".shortTableName"] = "numeros_de_spliters1";
$tdatanumeros_de_spliters1[".nSecOptions"] = 0;

$tdatanumeros_de_spliters1[".mainTableOwnerID"] = "";
$tdatanumeros_de_spliters1[".entityType"] = 0;
$tdatanumeros_de_spliters1[".connId"] = "isp_eisa_at_localhost";


$tdatanumeros_de_spliters1[".strOriginalTableName"] = "numeros_de_spliters";

	



$tdatanumeros_de_spliters1[".showAddInPopup"] = false;

$tdatanumeros_de_spliters1[".showEditInPopup"] = false;

$tdatanumeros_de_spliters1[".showViewInPopup"] = false;

$tdatanumeros_de_spliters1[".listAjax"] = false;
//	temporary
//$tdatanumeros_de_spliters1[".listAjax"] = false;

	$tdatanumeros_de_spliters1[".audit"] = false;

	$tdatanumeros_de_spliters1[".locking"] = false;


$pages = $tdatanumeros_de_spliters1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatanumeros_de_spliters1[".edit"] = true;
	$tdatanumeros_de_spliters1[".afterEditAction"] = 1;
	$tdatanumeros_de_spliters1[".closePopupAfterEdit"] = 1;
	$tdatanumeros_de_spliters1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatanumeros_de_spliters1[".add"] = true;
$tdatanumeros_de_spliters1[".afterAddAction"] = 1;
$tdatanumeros_de_spliters1[".closePopupAfterAdd"] = 1;
$tdatanumeros_de_spliters1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatanumeros_de_spliters1[".list"] = true;
}



$tdatanumeros_de_spliters1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatanumeros_de_spliters1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatanumeros_de_spliters1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatanumeros_de_spliters1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatanumeros_de_spliters1[".printFriendly"] = true;
}



$tdatanumeros_de_spliters1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatanumeros_de_spliters1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatanumeros_de_spliters1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatanumeros_de_spliters1[".isUseAjaxSuggest"] = true;



			

$tdatanumeros_de_spliters1[".ajaxCodeSnippetAdded"] = false;

$tdatanumeros_de_spliters1[".buttonsAdded"] = false;

$tdatanumeros_de_spliters1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatanumeros_de_spliters1[".isUseTimeForSearch"] = false;


$tdatanumeros_de_spliters1[".badgeColor"] = "778899";


$tdatanumeros_de_spliters1[".allSearchFields"] = array();
$tdatanumeros_de_spliters1[".filterFields"] = array();
$tdatanumeros_de_spliters1[".requiredSearchFields"] = array();

$tdatanumeros_de_spliters1[".googleLikeFields"] = array();
$tdatanumeros_de_spliters1[".googleLikeFields"][] = "id_Spliters";
$tdatanumeros_de_spliters1[".googleLikeFields"][] = "Spliter";



$tdatanumeros_de_spliters1[".tableType"] = "list";

$tdatanumeros_de_spliters1[".printerPageOrientation"] = 0;
$tdatanumeros_de_spliters1[".nPrinterPageScale"] = 100;

$tdatanumeros_de_spliters1[".nPrinterSplitRecords"] = 40;

$tdatanumeros_de_spliters1[".geocodingEnabled"] = false;










$tdatanumeros_de_spliters1[".pageSize"] = 50;

$tdatanumeros_de_spliters1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatanumeros_de_spliters1[".strOrderBy"] = $tstrOrderBy;

$tdatanumeros_de_spliters1[".orderindexes"] = array();


$tdatanumeros_de_spliters1[".sqlHead"] = "SELECT `id_Spliters`,  	`Spliter`";
$tdatanumeros_de_spliters1[".sqlFrom"] = "FROM `numeros_de_spliters`";
$tdatanumeros_de_spliters1[".sqlWhereExpr"] = "";
$tdatanumeros_de_spliters1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatanumeros_de_spliters1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatanumeros_de_spliters1[".arrGroupsPerPage"] = $arrGPP;

$tdatanumeros_de_spliters1[".highlightSearchResults"] = true;

$tableKeysnumeros_de_spliters1 = array();
$tableKeysnumeros_de_spliters1[] = "id_Spliters";
$tdatanumeros_de_spliters1[".Keys"] = $tableKeysnumeros_de_spliters1;


$tdatanumeros_de_spliters1[".hideMobileList"] = array();




//	id_Spliters
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_Spliters";
	$fdata["GoodName"] = "id_Spliters";
	$fdata["ownerTable"] = "numeros_de_spliters";
	$fdata["Label"] = GetFieldLabel("numeros_de_spliters","id_Spliters");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_Spliters";

		$fdata["sourceSingle"] = "id_Spliters";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`id_Spliters`";

	
	
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


	$tdatanumeros_de_spliters1["id_Spliters"] = $fdata;
		$tdatanumeros_de_spliters1[".searchableFields"][] = "id_Spliters";
//	Spliter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Spliter";
	$fdata["GoodName"] = "Spliter";
	$fdata["ownerTable"] = "numeros_de_spliters";
	$fdata["Label"] = GetFieldLabel("numeros_de_spliters","Spliter");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=11";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");

	
//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
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


	$tdatanumeros_de_spliters1["Spliter"] = $fdata;
		$tdatanumeros_de_spliters1[".searchableFields"][] = "Spliter";


$tables_data["numeros_de_spliters"]=&$tdatanumeros_de_spliters1;
$field_labels["numeros_de_spliters"] = &$fieldLabelsnumeros_de_spliters1;
$fieldToolTips["numeros_de_spliters"] = &$fieldToolTipsnumeros_de_spliters1;
$placeHolders["numeros_de_spliters"] = &$placeHoldersnumeros_de_spliters1;
$page_titles["numeros_de_spliters"] = &$pageTitlesnumeros_de_spliters1;


changeTextControlsToDate( "numeros_de_spliters" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["numeros_de_spliters"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["numeros_de_spliters"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_numeros_de_spliters1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id_Spliters`,  	`Spliter`";
$proto0["m_strFrom"] = "FROM `numeros_de_spliters`";
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
	"m_strName" => "id_Spliters",
	"m_strTable" => "numeros_de_spliters",
	"m_srcTableName" => "numeros_de_spliters"
));

$proto6["m_sql"] = "`id_Spliters`";
$proto6["m_srcTableName"] = "numeros_de_spliters";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Spliter",
	"m_strTable" => "numeros_de_spliters",
	"m_srcTableName" => "numeros_de_spliters"
));

$proto8["m_sql"] = "`Spliter`";
$proto8["m_srcTableName"] = "numeros_de_spliters";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "numeros_de_spliters";
$proto11["m_srcTableName"] = "numeros_de_spliters";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_Spliters";
$proto11["m_columns"][] = "Spliter";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "`numeros_de_spliters`";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "numeros_de_spliters";
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
$proto0["m_srcTableName"]="numeros_de_spliters";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_numeros_de_spliters1 = createSqlQuery_numeros_de_spliters1();


	
		;

		

$tdatanumeros_de_spliters1[".sqlquery"] = $queryData_numeros_de_spliters1;



$tdatanumeros_de_spliters1[".hasEvents"] = false;

?>