<?php
$tdatanumero_puertos = array();
$tdatanumero_puertos[".searchableFields"] = array();
$tdatanumero_puertos[".ShortName"] = "numero_puertos";
$tdatanumero_puertos[".OwnerID"] = "";
$tdatanumero_puertos[".OriginalTable"] = "numero_puertos";


$tdatanumero_puertos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatanumero_puertos[".originalPagesByType"] = $tdatanumero_puertos[".pagesByType"];
$tdatanumero_puertos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatanumero_puertos[".originalPages"] = $tdatanumero_puertos[".pages"];
$tdatanumero_puertos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatanumero_puertos[".originalDefaultPages"] = $tdatanumero_puertos[".defaultPages"];

//	field labels
$fieldLabelsnumero_puertos = array();
$fieldToolTipsnumero_puertos = array();
$pageTitlesnumero_puertos = array();
$placeHoldersnumero_puertos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsnumero_puertos["Spanish"] = array();
	$fieldToolTipsnumero_puertos["Spanish"] = array();
	$placeHoldersnumero_puertos["Spanish"] = array();
	$pageTitlesnumero_puertos["Spanish"] = array();
	$fieldLabelsnumero_puertos["Spanish"]["id_numero_puertos"] = "Id Numero Puertos";
	$fieldToolTipsnumero_puertos["Spanish"]["id_numero_puertos"] = "";
	$placeHoldersnumero_puertos["Spanish"]["id_numero_puertos"] = "";
	$fieldLabelsnumero_puertos["Spanish"]["numero_puerto"] = "Numero Puerto";
	$fieldToolTipsnumero_puertos["Spanish"]["numero_puerto"] = "";
	$placeHoldersnumero_puertos["Spanish"]["numero_puerto"] = "";
	if (count($fieldToolTipsnumero_puertos["Spanish"]))
		$tdatanumero_puertos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsnumero_puertos["English"] = array();
	$fieldToolTipsnumero_puertos["English"] = array();
	$placeHoldersnumero_puertos["English"] = array();
	$pageTitlesnumero_puertos["English"] = array();
	$fieldLabelsnumero_puertos["English"]["id_numero_puertos"] = "Id Numero Puertos";
	$fieldToolTipsnumero_puertos["English"]["id_numero_puertos"] = "";
	$placeHoldersnumero_puertos["English"]["id_numero_puertos"] = "";
	$fieldLabelsnumero_puertos["English"]["numero_puerto"] = "Numero Puerto";
	$fieldToolTipsnumero_puertos["English"]["numero_puerto"] = "";
	$placeHoldersnumero_puertos["English"]["numero_puerto"] = "";
	if (count($fieldToolTipsnumero_puertos["English"]))
		$tdatanumero_puertos[".isUseToolTips"] = true;
}


	$tdatanumero_puertos[".NCSearch"] = true;



$tdatanumero_puertos[".shortTableName"] = "numero_puertos";
$tdatanumero_puertos[".nSecOptions"] = 0;

$tdatanumero_puertos[".mainTableOwnerID"] = "";
$tdatanumero_puertos[".entityType"] = 0;
$tdatanumero_puertos[".connId"] = "isp_eisa_at_localhost";


$tdatanumero_puertos[".strOriginalTableName"] = "numero_puertos";

	



$tdatanumero_puertos[".showAddInPopup"] = false;

$tdatanumero_puertos[".showEditInPopup"] = false;

$tdatanumero_puertos[".showViewInPopup"] = false;

$tdatanumero_puertos[".listAjax"] = false;
//	temporary
//$tdatanumero_puertos[".listAjax"] = false;

	$tdatanumero_puertos[".audit"] = false;

	$tdatanumero_puertos[".locking"] = false;


$pages = $tdatanumero_puertos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatanumero_puertos[".edit"] = true;
	$tdatanumero_puertos[".afterEditAction"] = 1;
	$tdatanumero_puertos[".closePopupAfterEdit"] = 1;
	$tdatanumero_puertos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatanumero_puertos[".add"] = true;
$tdatanumero_puertos[".afterAddAction"] = 1;
$tdatanumero_puertos[".closePopupAfterAdd"] = 1;
$tdatanumero_puertos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatanumero_puertos[".list"] = true;
}



$tdatanumero_puertos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatanumero_puertos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatanumero_puertos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatanumero_puertos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatanumero_puertos[".printFriendly"] = true;
}



$tdatanumero_puertos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatanumero_puertos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatanumero_puertos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatanumero_puertos[".isUseAjaxSuggest"] = true;



			

$tdatanumero_puertos[".ajaxCodeSnippetAdded"] = false;

$tdatanumero_puertos[".buttonsAdded"] = false;

$tdatanumero_puertos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatanumero_puertos[".isUseTimeForSearch"] = false;


$tdatanumero_puertos[".badgeColor"] = "6493EA";


$tdatanumero_puertos[".allSearchFields"] = array();
$tdatanumero_puertos[".filterFields"] = array();
$tdatanumero_puertos[".requiredSearchFields"] = array();

$tdatanumero_puertos[".googleLikeFields"] = array();
$tdatanumero_puertos[".googleLikeFields"][] = "id_numero_puertos";
$tdatanumero_puertos[".googleLikeFields"][] = "numero_puerto";



$tdatanumero_puertos[".tableType"] = "list";

$tdatanumero_puertos[".printerPageOrientation"] = 0;
$tdatanumero_puertos[".nPrinterPageScale"] = 100;

$tdatanumero_puertos[".nPrinterSplitRecords"] = 40;

$tdatanumero_puertos[".geocodingEnabled"] = false;










$tdatanumero_puertos[".pageSize"] = 20;

$tdatanumero_puertos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatanumero_puertos[".strOrderBy"] = $tstrOrderBy;

$tdatanumero_puertos[".orderindexes"] = array();


$tdatanumero_puertos[".sqlHead"] = "SELECT `id_numero_puertos`,  	`numero_puerto`";
$tdatanumero_puertos[".sqlFrom"] = "FROM `numero_puertos`";
$tdatanumero_puertos[".sqlWhereExpr"] = "";
$tdatanumero_puertos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatanumero_puertos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatanumero_puertos[".arrGroupsPerPage"] = $arrGPP;

$tdatanumero_puertos[".highlightSearchResults"] = true;

$tableKeysnumero_puertos = array();
$tableKeysnumero_puertos[] = "id_numero_puertos";
$tdatanumero_puertos[".Keys"] = $tableKeysnumero_puertos;


$tdatanumero_puertos[".hideMobileList"] = array();




//	id_numero_puertos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_numero_puertos";
	$fdata["GoodName"] = "id_numero_puertos";
	$fdata["ownerTable"] = "numero_puertos";
	$fdata["Label"] = GetFieldLabel("numero_puertos","id_numero_puertos");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_numero_puertos";

		$fdata["sourceSingle"] = "id_numero_puertos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`id_numero_puertos`";

	
	
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


	$tdatanumero_puertos["id_numero_puertos"] = $fdata;
		$tdatanumero_puertos[".searchableFields"][] = "id_numero_puertos";
//	numero_puerto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "numero_puerto";
	$fdata["GoodName"] = "numero_puerto";
	$fdata["ownerTable"] = "numero_puertos";
	$fdata["Label"] = GetFieldLabel("numero_puertos","numero_puerto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "numero_puerto";

		$fdata["sourceSingle"] = "numero_puerto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`numero_puerto`";

	
	
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


	$tdatanumero_puertos["numero_puerto"] = $fdata;
		$tdatanumero_puertos[".searchableFields"][] = "numero_puerto";


$tables_data["numero_puertos"]=&$tdatanumero_puertos;
$field_labels["numero_puertos"] = &$fieldLabelsnumero_puertos;
$fieldToolTips["numero_puertos"] = &$fieldToolTipsnumero_puertos;
$placeHolders["numero_puertos"] = &$placeHoldersnumero_puertos;
$page_titles["numero_puertos"] = &$pageTitlesnumero_puertos;


changeTextControlsToDate( "numero_puertos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["numero_puertos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["numero_puertos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_numero_puertos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id_numero_puertos`,  	`numero_puerto`";
$proto0["m_strFrom"] = "FROM `numero_puertos`";
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
	"m_strName" => "id_numero_puertos",
	"m_strTable" => "numero_puertos",
	"m_srcTableName" => "numero_puertos"
));

$proto6["m_sql"] = "`id_numero_puertos`";
$proto6["m_srcTableName"] = "numero_puertos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "numero_puerto",
	"m_strTable" => "numero_puertos",
	"m_srcTableName" => "numero_puertos"
));

$proto8["m_sql"] = "`numero_puerto`";
$proto8["m_srcTableName"] = "numero_puertos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "numero_puertos";
$proto11["m_srcTableName"] = "numero_puertos";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_numero_puertos";
$proto11["m_columns"][] = "numero_puerto";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "`numero_puertos`";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "numero_puertos";
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
$proto0["m_srcTableName"]="numero_puertos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_numero_puertos = createSqlQuery_numero_puertos();


	
		;

		

$tdatanumero_puertos[".sqlquery"] = $queryData_numero_puertos;



$tdatanumero_puertos[".hasEvents"] = false;

?>