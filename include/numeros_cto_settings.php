<?php
$tdatanumeros_cto = array();
$tdatanumeros_cto[".searchableFields"] = array();
$tdatanumeros_cto[".ShortName"] = "numeros_cto";
$tdatanumeros_cto[".OwnerID"] = "";
$tdatanumeros_cto[".OriginalTable"] = "numeros_cto";


$tdatanumeros_cto[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatanumeros_cto[".originalPagesByType"] = $tdatanumeros_cto[".pagesByType"];
$tdatanumeros_cto[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatanumeros_cto[".originalPages"] = $tdatanumeros_cto[".pages"];
$tdatanumeros_cto[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatanumeros_cto[".originalDefaultPages"] = $tdatanumeros_cto[".defaultPages"];

//	field labels
$fieldLabelsnumeros_cto = array();
$fieldToolTipsnumeros_cto = array();
$pageTitlesnumeros_cto = array();
$placeHoldersnumeros_cto = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsnumeros_cto["Spanish"] = array();
	$fieldToolTipsnumeros_cto["Spanish"] = array();
	$placeHoldersnumeros_cto["Spanish"] = array();
	$pageTitlesnumeros_cto["Spanish"] = array();
	$fieldLabelsnumeros_cto["Spanish"]["Numero_cto"] = "Numero Cto";
	$fieldToolTipsnumeros_cto["Spanish"]["Numero_cto"] = "";
	$placeHoldersnumeros_cto["Spanish"]["Numero_cto"] = "";
	$fieldLabelsnumeros_cto["Spanish"]["id_numeros_ctos"] = "Id Numeros Ctos";
	$fieldToolTipsnumeros_cto["Spanish"]["id_numeros_ctos"] = "";
	$placeHoldersnumeros_cto["Spanish"]["id_numeros_ctos"] = "";
	if (count($fieldToolTipsnumeros_cto["Spanish"]))
		$tdatanumeros_cto[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsnumeros_cto["English"] = array();
	$fieldToolTipsnumeros_cto["English"] = array();
	$placeHoldersnumeros_cto["English"] = array();
	$pageTitlesnumeros_cto["English"] = array();
	$fieldLabelsnumeros_cto["English"]["id_numeros_ctos"] = "Id Numeros Ctos";
	$fieldToolTipsnumeros_cto["English"]["id_numeros_ctos"] = "";
	$placeHoldersnumeros_cto["English"]["id_numeros_ctos"] = "";
	$fieldLabelsnumeros_cto["English"]["Numero_cto"] = "Numero Cto";
	$fieldToolTipsnumeros_cto["English"]["Numero_cto"] = "";
	$placeHoldersnumeros_cto["English"]["Numero_cto"] = "";
	if (count($fieldToolTipsnumeros_cto["English"]))
		$tdatanumeros_cto[".isUseToolTips"] = true;
}


	$tdatanumeros_cto[".NCSearch"] = true;



$tdatanumeros_cto[".shortTableName"] = "numeros_cto";
$tdatanumeros_cto[".nSecOptions"] = 0;

$tdatanumeros_cto[".mainTableOwnerID"] = "";
$tdatanumeros_cto[".entityType"] = 0;
$tdatanumeros_cto[".connId"] = "isp_eisa_at_localhost";


$tdatanumeros_cto[".strOriginalTableName"] = "numeros_cto";

	



$tdatanumeros_cto[".showAddInPopup"] = false;

$tdatanumeros_cto[".showEditInPopup"] = false;

$tdatanumeros_cto[".showViewInPopup"] = false;

$tdatanumeros_cto[".listAjax"] = false;
//	temporary
//$tdatanumeros_cto[".listAjax"] = false;

	$tdatanumeros_cto[".audit"] = false;

	$tdatanumeros_cto[".locking"] = false;


$pages = $tdatanumeros_cto[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatanumeros_cto[".edit"] = true;
	$tdatanumeros_cto[".afterEditAction"] = 1;
	$tdatanumeros_cto[".closePopupAfterEdit"] = 1;
	$tdatanumeros_cto[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatanumeros_cto[".add"] = true;
$tdatanumeros_cto[".afterAddAction"] = 1;
$tdatanumeros_cto[".closePopupAfterAdd"] = 1;
$tdatanumeros_cto[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatanumeros_cto[".list"] = true;
}



$tdatanumeros_cto[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatanumeros_cto[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatanumeros_cto[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatanumeros_cto[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatanumeros_cto[".printFriendly"] = true;
}



$tdatanumeros_cto[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatanumeros_cto[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatanumeros_cto[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatanumeros_cto[".isUseAjaxSuggest"] = true;



			

$tdatanumeros_cto[".ajaxCodeSnippetAdded"] = false;

$tdatanumeros_cto[".buttonsAdded"] = false;

$tdatanumeros_cto[".addPageEvents"] = false;

// use timepicker for search panel
$tdatanumeros_cto[".isUseTimeForSearch"] = false;


$tdatanumeros_cto[".badgeColor"] = "D2691E";


$tdatanumeros_cto[".allSearchFields"] = array();
$tdatanumeros_cto[".filterFields"] = array();
$tdatanumeros_cto[".requiredSearchFields"] = array();

$tdatanumeros_cto[".googleLikeFields"] = array();
$tdatanumeros_cto[".googleLikeFields"][] = "id_numeros_ctos";
$tdatanumeros_cto[".googleLikeFields"][] = "Numero_cto";



$tdatanumeros_cto[".tableType"] = "list";

$tdatanumeros_cto[".printerPageOrientation"] = 0;
$tdatanumeros_cto[".nPrinterPageScale"] = 100;

$tdatanumeros_cto[".nPrinterSplitRecords"] = 40;

$tdatanumeros_cto[".geocodingEnabled"] = false;










$tdatanumeros_cto[".pageSize"] = 30;

$tdatanumeros_cto[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatanumeros_cto[".strOrderBy"] = $tstrOrderBy;

$tdatanumeros_cto[".orderindexes"] = array();


$tdatanumeros_cto[".sqlHead"] = "SELECT `id_numeros_ctos`,  	`Numero_cto`";
$tdatanumeros_cto[".sqlFrom"] = "FROM `numeros_cto`";
$tdatanumeros_cto[".sqlWhereExpr"] = "";
$tdatanumeros_cto[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatanumeros_cto[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatanumeros_cto[".arrGroupsPerPage"] = $arrGPP;

$tdatanumeros_cto[".highlightSearchResults"] = true;

$tableKeysnumeros_cto = array();
$tableKeysnumeros_cto[] = "id_numeros_ctos";
$tdatanumeros_cto[".Keys"] = $tableKeysnumeros_cto;


$tdatanumeros_cto[".hideMobileList"] = array();




//	id_numeros_ctos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_numeros_ctos";
	$fdata["GoodName"] = "id_numeros_ctos";
	$fdata["ownerTable"] = "numeros_cto";
	$fdata["Label"] = GetFieldLabel("numeros_cto","id_numeros_ctos");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_numeros_ctos";

		$fdata["sourceSingle"] = "id_numeros_ctos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`id_numeros_ctos`";

	
	
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


	$tdatanumeros_cto["id_numeros_ctos"] = $fdata;
		$tdatanumeros_cto[".searchableFields"][] = "id_numeros_ctos";
//	Numero_cto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Numero_cto";
	$fdata["GoodName"] = "Numero_cto";
	$fdata["ownerTable"] = "numeros_cto";
	$fdata["Label"] = GetFieldLabel("numeros_cto","Numero_cto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Numero_cto";

		$fdata["sourceSingle"] = "Numero_cto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Numero_cto`";

	
	
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


	$tdatanumeros_cto["Numero_cto"] = $fdata;
		$tdatanumeros_cto[".searchableFields"][] = "Numero_cto";


$tables_data["numeros_cto"]=&$tdatanumeros_cto;
$field_labels["numeros_cto"] = &$fieldLabelsnumeros_cto;
$fieldToolTips["numeros_cto"] = &$fieldToolTipsnumeros_cto;
$placeHolders["numeros_cto"] = &$placeHoldersnumeros_cto;
$page_titles["numeros_cto"] = &$pageTitlesnumeros_cto;


changeTextControlsToDate( "numeros_cto" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["numeros_cto"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["numeros_cto"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_numeros_cto()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id_numeros_ctos`,  	`Numero_cto`";
$proto0["m_strFrom"] = "FROM `numeros_cto`";
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
	"m_strName" => "id_numeros_ctos",
	"m_strTable" => "numeros_cto",
	"m_srcTableName" => "numeros_cto"
));

$proto6["m_sql"] = "`id_numeros_ctos`";
$proto6["m_srcTableName"] = "numeros_cto";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero_cto",
	"m_strTable" => "numeros_cto",
	"m_srcTableName" => "numeros_cto"
));

$proto8["m_sql"] = "`Numero_cto`";
$proto8["m_srcTableName"] = "numeros_cto";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "numeros_cto";
$proto11["m_srcTableName"] = "numeros_cto";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_numeros_ctos";
$proto11["m_columns"][] = "Numero_cto";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "`numeros_cto`";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "numeros_cto";
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
$proto0["m_srcTableName"]="numeros_cto";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_numeros_cto = createSqlQuery_numeros_cto();


	
										;

		

$tdatanumeros_cto[".sqlquery"] = $queryData_numeros_cto;



$tdatanumeros_cto[".hasEvents"] = false;

?>