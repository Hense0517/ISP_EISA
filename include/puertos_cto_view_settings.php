<?php
$tdatapuertos_cto_view = array();
$tdatapuertos_cto_view[".searchableFields"] = array();
$tdatapuertos_cto_view[".ShortName"] = "puertos_cto_view";
$tdatapuertos_cto_view[".OwnerID"] = "";
$tdatapuertos_cto_view[".OriginalTable"] = "puertos_cto";


$tdatapuertos_cto_view[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatapuertos_cto_view[".originalPagesByType"] = $tdatapuertos_cto_view[".pagesByType"];
$tdatapuertos_cto_view[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatapuertos_cto_view[".originalPages"] = $tdatapuertos_cto_view[".pages"];
$tdatapuertos_cto_view[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatapuertos_cto_view[".originalDefaultPages"] = $tdatapuertos_cto_view[".defaultPages"];

//	field labels
$fieldLabelspuertos_cto_view = array();
$fieldToolTipspuertos_cto_view = array();
$pageTitlespuertos_cto_view = array();
$placeHolderspuertos_cto_view = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspuertos_cto_view["Spanish"] = array();
	$fieldToolTipspuertos_cto_view["Spanish"] = array();
	$placeHolderspuertos_cto_view["Spanish"] = array();
	$pageTitlespuertos_cto_view["Spanish"] = array();
	$fieldLabelspuertos_cto_view["Spanish"]["Cto"] = "Cto";
	$fieldToolTipspuertos_cto_view["Spanish"]["Cto"] = "";
	$placeHolderspuertos_cto_view["Spanish"]["Cto"] = "";
	$fieldLabelspuertos_cto_view["Spanish"]["Cedula"] = "Cedula";
	$fieldToolTipspuertos_cto_view["Spanish"]["Cedula"] = "";
	$placeHolderspuertos_cto_view["Spanish"]["Cedula"] = "";
	$fieldLabelspuertos_cto_view["Spanish"]["id_spliters"] = "Id Spliters";
	$fieldToolTipspuertos_cto_view["Spanish"]["id_spliters"] = "";
	$placeHolderspuertos_cto_view["Spanish"]["id_spliters"] = "";
	if (count($fieldToolTipspuertos_cto_view["Spanish"]))
		$tdatapuertos_cto_view[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspuertos_cto_view["English"] = array();
	$fieldToolTipspuertos_cto_view["English"] = array();
	$placeHolderspuertos_cto_view["English"] = array();
	$pageTitlespuertos_cto_view["English"] = array();
	$fieldLabelspuertos_cto_view["English"]["Cto"] = "Cto";
	$fieldToolTipspuertos_cto_view["English"]["Cto"] = "";
	$placeHolderspuertos_cto_view["English"]["Cto"] = "";
	$fieldLabelspuertos_cto_view["English"]["Cedula"] = "Cedula";
	$fieldToolTipspuertos_cto_view["English"]["Cedula"] = "";
	$placeHolderspuertos_cto_view["English"]["Cedula"] = "";
	$fieldLabelspuertos_cto_view["English"]["id_spliters"] = "Id Spliters";
	$fieldToolTipspuertos_cto_view["English"]["id_spliters"] = "";
	$placeHolderspuertos_cto_view["English"]["id_spliters"] = "";
	if (count($fieldToolTipspuertos_cto_view["English"]))
		$tdatapuertos_cto_view[".isUseToolTips"] = true;
}


	$tdatapuertos_cto_view[".NCSearch"] = true;



$tdatapuertos_cto_view[".shortTableName"] = "puertos_cto_view";
$tdatapuertos_cto_view[".nSecOptions"] = 0;

$tdatapuertos_cto_view[".mainTableOwnerID"] = "";
$tdatapuertos_cto_view[".entityType"] = 1;
$tdatapuertos_cto_view[".connId"] = "isp_eisa_at_localhost";


$tdatapuertos_cto_view[".strOriginalTableName"] = "puertos_cto";

	



$tdatapuertos_cto_view[".showAddInPopup"] = false;

$tdatapuertos_cto_view[".showEditInPopup"] = false;

$tdatapuertos_cto_view[".showViewInPopup"] = false;

$tdatapuertos_cto_view[".listAjax"] = false;
//	temporary
//$tdatapuertos_cto_view[".listAjax"] = false;

	$tdatapuertos_cto_view[".audit"] = false;

	$tdatapuertos_cto_view[".locking"] = false;


$pages = $tdatapuertos_cto_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapuertos_cto_view[".edit"] = true;
	$tdatapuertos_cto_view[".afterEditAction"] = 1;
	$tdatapuertos_cto_view[".closePopupAfterEdit"] = 1;
	$tdatapuertos_cto_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapuertos_cto_view[".add"] = true;
$tdatapuertos_cto_view[".afterAddAction"] = 1;
$tdatapuertos_cto_view[".closePopupAfterAdd"] = 1;
$tdatapuertos_cto_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapuertos_cto_view[".list"] = true;
}



$tdatapuertos_cto_view[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapuertos_cto_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapuertos_cto_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapuertos_cto_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapuertos_cto_view[".printFriendly"] = true;
}



$tdatapuertos_cto_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapuertos_cto_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapuertos_cto_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapuertos_cto_view[".isUseAjaxSuggest"] = true;



						

$tdatapuertos_cto_view[".ajaxCodeSnippetAdded"] = false;

$tdatapuertos_cto_view[".buttonsAdded"] = false;

$tdatapuertos_cto_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapuertos_cto_view[".isUseTimeForSearch"] = false;


$tdatapuertos_cto_view[".badgeColor"] = "dc143c";


$tdatapuertos_cto_view[".allSearchFields"] = array();
$tdatapuertos_cto_view[".filterFields"] = array();
$tdatapuertos_cto_view[".requiredSearchFields"] = array();

$tdatapuertos_cto_view[".googleLikeFields"] = array();
$tdatapuertos_cto_view[".googleLikeFields"][] = "id_spliters";
$tdatapuertos_cto_view[".googleLikeFields"][] = "Cto";
$tdatapuertos_cto_view[".googleLikeFields"][] = "Cedula";



$tdatapuertos_cto_view[".tableType"] = "list";

$tdatapuertos_cto_view[".printerPageOrientation"] = 0;
$tdatapuertos_cto_view[".nPrinterPageScale"] = 100;

$tdatapuertos_cto_view[".nPrinterSplitRecords"] = 40;

$tdatapuertos_cto_view[".geocodingEnabled"] = false;










$tdatapuertos_cto_view[".pageSize"] = 20;

$tdatapuertos_cto_view[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapuertos_cto_view[".strOrderBy"] = $tstrOrderBy;

$tdatapuertos_cto_view[".orderindexes"] = array();


$tdatapuertos_cto_view[".sqlHead"] = "SELECT `spliters`.`id_spliters`,  `ctos`.`Cto`,  `puertos_cto`.`Cedula`";
$tdatapuertos_cto_view[".sqlFrom"] = "FROM `puertos_cto`  INNER JOIN `ctos` ON `puertos_cto`.`Cto` = `ctos`.`Cto` AND `puertos_cto`.`Spliter` = `ctos`.`Spliter` AND `puertos_cto`.`Cable` = `ctos`.`Cable` AND `puertos_cto`.`Localidad` = `ctos`.`Localidad`  INNER JOIN `spliters` ON `ctos`.`id_spliter` = `spliters`.`id_spliters` AND `ctos`.`Localidad` = `spliters`.`localidad` AND `ctos`.`Cable` = `spliters`.`cable`";
$tdatapuertos_cto_view[".sqlWhereExpr"] = "(`puertos_cto`.`Cedula` >0)";
$tdatapuertos_cto_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapuertos_cto_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapuertos_cto_view[".arrGroupsPerPage"] = $arrGPP;

$tdatapuertos_cto_view[".highlightSearchResults"] = true;

$tableKeyspuertos_cto_view = array();
$tdatapuertos_cto_view[".Keys"] = $tableKeyspuertos_cto_view;


$tdatapuertos_cto_view[".hideMobileList"] = array();




//	id_spliters
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_spliters";
	$fdata["GoodName"] = "id_spliters";
	$fdata["ownerTable"] = "spliters";
	$fdata["Label"] = GetFieldLabel("puertos_cto_view","id_spliters");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_spliters";

	
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


	$tdatapuertos_cto_view["id_spliters"] = $fdata;
		$tdatapuertos_cto_view[".searchableFields"][] = "id_spliters";
//	Cto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Cto";
	$fdata["GoodName"] = "Cto";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("puertos_cto_view","Cto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Cto";

		$fdata["sourceSingle"] = "Cto";

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


	$tdatapuertos_cto_view["Cto"] = $fdata;
		$tdatapuertos_cto_view[".searchableFields"][] = "Cto";
//	Cedula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Cedula";
	$fdata["GoodName"] = "Cedula";
	$fdata["ownerTable"] = "puertos_cto";
	$fdata["Label"] = GetFieldLabel("puertos_cto_view","Cedula");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Cedula";

		$fdata["sourceSingle"] = "Cedula";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`puertos_cto`.`Cedula`";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatapuertos_cto_view["Cedula"] = $fdata;
		$tdatapuertos_cto_view[".searchableFields"][] = "Cedula";


$tables_data["puertos_cto_view"]=&$tdatapuertos_cto_view;
$field_labels["puertos_cto_view"] = &$fieldLabelspuertos_cto_view;
$fieldToolTips["puertos_cto_view"] = &$fieldToolTipspuertos_cto_view;
$placeHolders["puertos_cto_view"] = &$placeHolderspuertos_cto_view;
$page_titles["puertos_cto_view"] = &$pageTitlespuertos_cto_view;


changeTextControlsToDate( "puertos_cto_view" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["puertos_cto_view"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["puertos_cto_view"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="puertos_olt";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="puertos_olt";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "puertos_olt";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["puertos_cto_view"][0] = $masterParams;
				$masterTablesData["puertos_cto_view"][0]["masterKeys"] = array();
	$masterTablesData["puertos_cto_view"][0]["masterKeys"][]="spliter";
				$masterTablesData["puertos_cto_view"][0]["detailKeys"] = array();
	$masterTablesData["puertos_cto_view"][0]["detailKeys"][]="id_spliters";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_puertos_cto_view()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`spliters`.`id_spliters`,  `ctos`.`Cto`,  `puertos_cto`.`Cedula`";
$proto0["m_strFrom"] = "FROM `puertos_cto`  INNER JOIN `ctos` ON `puertos_cto`.`Cto` = `ctos`.`Cto` AND `puertos_cto`.`Spliter` = `ctos`.`Spliter` AND `puertos_cto`.`Cable` = `ctos`.`Cable` AND `puertos_cto`.`Localidad` = `ctos`.`Localidad`  INNER JOIN `spliters` ON `ctos`.`id_spliter` = `spliters`.`id_spliters` AND `ctos`.`Localidad` = `spliters`.`localidad` AND `ctos`.`Cable` = `spliters`.`cable`";
$proto0["m_strWhere"] = "(`puertos_cto`.`Cedula` >0)";
$proto0["m_strOrderBy"] = "";
	
										;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "`puertos_cto`.`Cedula` >0";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Cedula",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "puertos_cto_view"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = ">0";
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
	"m_srcTableName" => "puertos_cto_view"
));

$proto6["m_sql"] = "`spliters`.`id_spliters`";
$proto6["m_srcTableName"] = "puertos_cto_view";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Cto",
	"m_strTable" => "ctos",
	"m_srcTableName" => "puertos_cto_view"
));

$proto8["m_sql"] = "`ctos`.`Cto`";
$proto8["m_srcTableName"] = "puertos_cto_view";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Cedula",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "puertos_cto_view"
));

$proto10["m_sql"] = "`puertos_cto`.`Cedula`";
$proto10["m_srcTableName"] = "puertos_cto_view";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "puertos_cto";
$proto13["m_srcTableName"] = "puertos_cto_view";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "Id_puertos";
$proto13["m_columns"][] = "Puerto";
$proto13["m_columns"][] = "Cto";
$proto13["m_columns"][] = "Spliter";
$proto13["m_columns"][] = "Cable";
$proto13["m_columns"][] = "Localidad";
$proto13["m_columns"][] = "Cedula";
$proto13["m_columns"][] = "Activo";
$proto13["m_columns"][] = "Ocupado";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "`puertos_cto`";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "puertos_cto_view";
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
												$proto16=array();
$proto16["m_link"] = "SQLL_INNERJOIN";
			$proto17=array();
$proto17["m_strName"] = "ctos";
$proto17["m_srcTableName"] = "puertos_cto_view";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id_Ctos";
$proto17["m_columns"][] = "Cto";
$proto17["m_columns"][] = "Latitud";
$proto17["m_columns"][] = "Longitud";
$proto17["m_columns"][] = "Spliter";
$proto17["m_columns"][] = "Cable";
$proto17["m_columns"][] = "Localidad";
$proto17["m_columns"][] = "Lat";
$proto17["m_columns"][] = "Lng";
$proto17["m_columns"][] = "Ubicacion";
$proto17["m_columns"][] = "id_spliter";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "INNER JOIN `ctos` ON `puertos_cto`.`Cto` = `ctos`.`Cto` AND `puertos_cto`.`Spliter` = `ctos`.`Spliter` AND `puertos_cto`.`Cable` = `ctos`.`Cable` AND `puertos_cto`.`Localidad` = `ctos`.`Localidad`";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "puertos_cto_view";
$proto18=array();
$proto18["m_sql"] = "`ctos`.`Cto` = `puertos_cto`.`Cto` AND `ctos`.`Spliter` = `puertos_cto`.`Spliter` AND `ctos`.`Cable` = `puertos_cto`.`Cable` AND `ctos`.`Localidad` = `puertos_cto`.`Localidad`";
$proto18["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "`ctos`.`Cto` = `puertos_cto`.`Cto` AND `ctos`.`Spliter` = `puertos_cto`.`Spliter` AND `ctos`.`Cable` = `puertos_cto`.`Cable` AND `ctos`.`Localidad` = `puertos_cto`.`Localidad`"
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
						$proto20=array();
$proto20["m_sql"] = "`puertos_cto`.`Cto` = `ctos`.`Cto`";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Cto",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "puertos_cto_view"
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "= `ctos`.`Cto`";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

			$proto18["m_contained"][]=$obj;
						$proto22=array();
$proto22["m_sql"] = "`puertos_cto`.`Spliter` = `ctos`.`Spliter`";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Spliter",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "puertos_cto_view"
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "= `ctos`.`Spliter`";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

			$proto18["m_contained"][]=$obj;
						$proto24=array();
$proto24["m_sql"] = "`puertos_cto`.`Cable` = `ctos`.`Cable`";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Cable",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "puertos_cto_view"
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "= `ctos`.`Cable`";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

			$proto18["m_contained"][]=$obj;
						$proto26=array();
$proto26["m_sql"] = "`puertos_cto`.`Localidad` = `ctos`.`Localidad`";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Localidad",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "puertos_cto_view"
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "= `ctos`.`Localidad`";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

			$proto18["m_contained"][]=$obj;
						$proto28=array();
$proto28["m_sql"] = "`ctos`.`Cto` = `puertos_cto`.`Cto`";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Cto",
	"m_strTable" => "ctos",
	"m_srcTableName" => "puertos_cto_view"
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "= `puertos_cto`.`Cto`";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

			$proto18["m_contained"][]=$obj;
						$proto30=array();
$proto30["m_sql"] = "`ctos`.`Spliter` = `puertos_cto`.`Spliter`";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Spliter",
	"m_strTable" => "ctos",
	"m_srcTableName" => "puertos_cto_view"
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "= `puertos_cto`.`Spliter`";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

			$proto18["m_contained"][]=$obj;
						$proto32=array();
$proto32["m_sql"] = "`ctos`.`Cable` = `puertos_cto`.`Cable`";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Cable",
	"m_strTable" => "ctos",
	"m_srcTableName" => "puertos_cto_view"
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "= `puertos_cto`.`Cable`";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

			$proto18["m_contained"][]=$obj;
						$proto34=array();
$proto34["m_sql"] = "`ctos`.`Localidad` = `puertos_cto`.`Localidad`";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Localidad",
	"m_strTable" => "ctos",
	"m_srcTableName" => "puertos_cto_view"
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "= `puertos_cto`.`Localidad`";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

			$proto18["m_contained"][]=$obj;
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
												$proto36=array();
$proto36["m_link"] = "SQLL_INNERJOIN";
			$proto37=array();
$proto37["m_strName"] = "spliters";
$proto37["m_srcTableName"] = "puertos_cto_view";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "id_spliters";
$proto37["m_columns"][] = "spliter";
$proto37["m_columns"][] = "cable";
$proto37["m_columns"][] = "localidad";
$proto37["m_columns"][] = "id_cable";
$proto37["m_columns"][] = "Numero_de_tarjeta";
$proto37["m_columns"][] = "Numero_de_puerto";
$proto37["m_columns"][] = "Barrio";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "INNER JOIN `spliters` ON `ctos`.`id_spliter` = `spliters`.`id_spliters` AND `ctos`.`Localidad` = `spliters`.`localidad` AND `ctos`.`Cable` = `spliters`.`cable`";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "puertos_cto_view";
$proto38=array();
$proto38["m_sql"] = "`spliters`.`id_spliters` = `ctos`.`id_spliter` AND `spliters`.`localidad` = `ctos`.`Localidad` AND `spliters`.`cable` = `ctos`.`Cable`";
$proto38["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "`spliters`.`id_spliters` = `ctos`.`id_spliter` AND `spliters`.`localidad` = `ctos`.`Localidad` AND `spliters`.`cable` = `ctos`.`Cable`"
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
						$proto40=array();
$proto40["m_sql"] = "`ctos`.`id_spliter` = `spliters`.`id_spliters`";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_spliter",
	"m_strTable" => "ctos",
	"m_srcTableName" => "puertos_cto_view"
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "= `spliters`.`id_spliters`";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

			$proto38["m_contained"][]=$obj;
						$proto42=array();
$proto42["m_sql"] = "`ctos`.`Localidad` = `spliters`.`localidad`";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Localidad",
	"m_strTable" => "ctos",
	"m_srcTableName" => "puertos_cto_view"
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "= `spliters`.`localidad`";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

			$proto38["m_contained"][]=$obj;
						$proto44=array();
$proto44["m_sql"] = "`ctos`.`Cable` = `spliters`.`cable`";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Cable",
	"m_strTable" => "ctos",
	"m_srcTableName" => "puertos_cto_view"
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "= `spliters`.`cable`";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

			$proto38["m_contained"][]=$obj;
						$proto46=array();
$proto46["m_sql"] = "`spliters`.`id_spliters` = `ctos`.`id_spliter`";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_spliters",
	"m_strTable" => "spliters",
	"m_srcTableName" => "puertos_cto_view"
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "= `ctos`.`id_spliter`";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

			$proto38["m_contained"][]=$obj;
						$proto48=array();
$proto48["m_sql"] = "`spliters`.`localidad` = `ctos`.`Localidad`";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "localidad",
	"m_strTable" => "spliters",
	"m_srcTableName" => "puertos_cto_view"
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "= `ctos`.`Localidad`";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

			$proto38["m_contained"][]=$obj;
						$proto50=array();
$proto50["m_sql"] = "`spliters`.`cable` = `ctos`.`Cable`";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cable",
	"m_strTable" => "spliters",
	"m_srcTableName" => "puertos_cto_view"
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "= `ctos`.`Cable`";
$proto50["m_havingmode"] = false;
$proto50["m_inBrackets"] = false;
$proto50["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto50);

			$proto38["m_contained"][]=$obj;
$proto38["m_strCase"] = "";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="puertos_cto_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_puertos_cto_view = createSqlQuery_puertos_cto_view();


	
										;

			

$tdatapuertos_cto_view[".sqlquery"] = $queryData_puertos_cto_view;



$tdatapuertos_cto_view[".hasEvents"] = false;

?>