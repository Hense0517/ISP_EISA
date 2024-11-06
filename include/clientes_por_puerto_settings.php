<?php
$tdataclientes_por_puerto = array();
$tdataclientes_por_puerto[".searchableFields"] = array();
$tdataclientes_por_puerto[".ShortName"] = "clientes_por_puerto";
$tdataclientes_por_puerto[".OwnerID"] = "";
$tdataclientes_por_puerto[".OriginalTable"] = "puertos_cto";


$tdataclientes_por_puerto[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataclientes_por_puerto[".originalPagesByType"] = $tdataclientes_por_puerto[".pagesByType"];
$tdataclientes_por_puerto[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataclientes_por_puerto[".originalPages"] = $tdataclientes_por_puerto[".pages"];
$tdataclientes_por_puerto[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataclientes_por_puerto[".originalDefaultPages"] = $tdataclientes_por_puerto[".defaultPages"];

//	field labels
$fieldLabelsclientes_por_puerto = array();
$fieldToolTipsclientes_por_puerto = array();
$pageTitlesclientes_por_puerto = array();
$placeHoldersclientes_por_puerto = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsclientes_por_puerto["Spanish"] = array();
	$fieldToolTipsclientes_por_puerto["Spanish"] = array();
	$placeHoldersclientes_por_puerto["Spanish"] = array();
	$pageTitlesclientes_por_puerto["Spanish"] = array();
	$fieldLabelsclientes_por_puerto["Spanish"]["Cto"] = "Cto";
	$fieldToolTipsclientes_por_puerto["Spanish"]["Cto"] = "";
	$placeHoldersclientes_por_puerto["Spanish"]["Cto"] = "";
	$fieldLabelsclientes_por_puerto["Spanish"]["Cedula"] = "Cedula";
	$fieldToolTipsclientes_por_puerto["Spanish"]["Cedula"] = "";
	$placeHoldersclientes_por_puerto["Spanish"]["Cedula"] = "";
	$fieldLabelsclientes_por_puerto["Spanish"]["id_spliters"] = "Id Spliters";
	$fieldToolTipsclientes_por_puerto["Spanish"]["id_spliters"] = "";
	$placeHoldersclientes_por_puerto["Spanish"]["id_spliters"] = "";
	if (count($fieldToolTipsclientes_por_puerto["Spanish"]))
		$tdataclientes_por_puerto[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsclientes_por_puerto["English"] = array();
	$fieldToolTipsclientes_por_puerto["English"] = array();
	$placeHoldersclientes_por_puerto["English"] = array();
	$pageTitlesclientes_por_puerto["English"] = array();
	$fieldLabelsclientes_por_puerto["English"]["Cto"] = "Cto";
	$fieldToolTipsclientes_por_puerto["English"]["Cto"] = "";
	$placeHoldersclientes_por_puerto["English"]["Cto"] = "";
	$fieldLabelsclientes_por_puerto["English"]["Cedula"] = "Cedula";
	$fieldToolTipsclientes_por_puerto["English"]["Cedula"] = "";
	$placeHoldersclientes_por_puerto["English"]["Cedula"] = "";
	$fieldLabelsclientes_por_puerto["English"]["id_spliters"] = "Id Spliters";
	$fieldToolTipsclientes_por_puerto["English"]["id_spliters"] = "";
	$placeHoldersclientes_por_puerto["English"]["id_spliters"] = "";
	if (count($fieldToolTipsclientes_por_puerto["English"]))
		$tdataclientes_por_puerto[".isUseToolTips"] = true;
}


	$tdataclientes_por_puerto[".NCSearch"] = true;



$tdataclientes_por_puerto[".shortTableName"] = "clientes_por_puerto";
$tdataclientes_por_puerto[".nSecOptions"] = 0;

$tdataclientes_por_puerto[".mainTableOwnerID"] = "";
$tdataclientes_por_puerto[".entityType"] = 1;
$tdataclientes_por_puerto[".connId"] = "isp_eisa_at_localhost";


$tdataclientes_por_puerto[".strOriginalTableName"] = "puertos_cto";

	



$tdataclientes_por_puerto[".showAddInPopup"] = false;

$tdataclientes_por_puerto[".showEditInPopup"] = false;

$tdataclientes_por_puerto[".showViewInPopup"] = false;

$tdataclientes_por_puerto[".listAjax"] = false;
//	temporary
//$tdataclientes_por_puerto[".listAjax"] = false;

	$tdataclientes_por_puerto[".audit"] = false;

	$tdataclientes_por_puerto[".locking"] = false;


$pages = $tdataclientes_por_puerto[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataclientes_por_puerto[".edit"] = true;
	$tdataclientes_por_puerto[".afterEditAction"] = 1;
	$tdataclientes_por_puerto[".closePopupAfterEdit"] = 1;
	$tdataclientes_por_puerto[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataclientes_por_puerto[".add"] = true;
$tdataclientes_por_puerto[".afterAddAction"] = 1;
$tdataclientes_por_puerto[".closePopupAfterAdd"] = 1;
$tdataclientes_por_puerto[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataclientes_por_puerto[".list"] = true;
}



$tdataclientes_por_puerto[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataclientes_por_puerto[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataclientes_por_puerto[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataclientes_por_puerto[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataclientes_por_puerto[".printFriendly"] = true;
}



$tdataclientes_por_puerto[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataclientes_por_puerto[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataclientes_por_puerto[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataclientes_por_puerto[".isUseAjaxSuggest"] = true;



						

$tdataclientes_por_puerto[".ajaxCodeSnippetAdded"] = false;

$tdataclientes_por_puerto[".buttonsAdded"] = false;

$tdataclientes_por_puerto[".addPageEvents"] = false;

// use timepicker for search panel
$tdataclientes_por_puerto[".isUseTimeForSearch"] = false;


$tdataclientes_por_puerto[".badgeColor"] = "dc143c";


$tdataclientes_por_puerto[".allSearchFields"] = array();
$tdataclientes_por_puerto[".filterFields"] = array();
$tdataclientes_por_puerto[".requiredSearchFields"] = array();

$tdataclientes_por_puerto[".googleLikeFields"] = array();
$tdataclientes_por_puerto[".googleLikeFields"][] = "id_spliters";
$tdataclientes_por_puerto[".googleLikeFields"][] = "Cto";
$tdataclientes_por_puerto[".googleLikeFields"][] = "Cedula";



$tdataclientes_por_puerto[".tableType"] = "list";

$tdataclientes_por_puerto[".printerPageOrientation"] = 0;
$tdataclientes_por_puerto[".nPrinterPageScale"] = 100;

$tdataclientes_por_puerto[".nPrinterSplitRecords"] = 40;

$tdataclientes_por_puerto[".geocodingEnabled"] = false;










$tdataclientes_por_puerto[".pageSize"] = 20;

$tdataclientes_por_puerto[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataclientes_por_puerto[".strOrderBy"] = $tstrOrderBy;

$tdataclientes_por_puerto[".orderindexes"] = array();


$tdataclientes_por_puerto[".sqlHead"] = "SELECT `spliters`.`id_spliters`,  `ctos`.`Cto`,  `puertos_cto`.`Cedula`";
$tdataclientes_por_puerto[".sqlFrom"] = "FROM `puertos_cto`  INNER JOIN `ctos` ON `puertos_cto`.`Cto` = `ctos`.`Cto` AND `puertos_cto`.`Spliter` = `ctos`.`Spliter` AND `puertos_cto`.`Cable` = `ctos`.`Cable` AND `puertos_cto`.`Localidad` = `ctos`.`Localidad`  INNER JOIN `spliters` ON `ctos`.`id_spliter` = `spliters`.`id_spliters` AND `ctos`.`Localidad` = `spliters`.`localidad` AND `ctos`.`Cable` = `spliters`.`cable`";
$tdataclientes_por_puerto[".sqlWhereExpr"] = "(`puertos_cto`.`Cedula` >0)";
$tdataclientes_por_puerto[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataclientes_por_puerto[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataclientes_por_puerto[".arrGroupsPerPage"] = $arrGPP;

$tdataclientes_por_puerto[".highlightSearchResults"] = true;

$tableKeysclientes_por_puerto = array();
$tableKeysclientes_por_puerto[] = "Cedula";
$tdataclientes_por_puerto[".Keys"] = $tableKeysclientes_por_puerto;


$tdataclientes_por_puerto[".hideMobileList"] = array();




//	id_spliters
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_spliters";
	$fdata["GoodName"] = "id_spliters";
	$fdata["ownerTable"] = "spliters";
	$fdata["Label"] = GetFieldLabel("Clientes_por_puerto","id_spliters");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "spliters";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_spliters";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "spliter";

	

	
	$edata["LookupOrderBy"] = "id_spliters";

	
	
	
	

	
	
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


	$tdataclientes_por_puerto["id_spliters"] = $fdata;
		$tdataclientes_por_puerto[".searchableFields"][] = "id_spliters";
//	Cto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Cto";
	$fdata["GoodName"] = "Cto";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Clientes_por_puerto","Cto");
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


	$tdataclientes_por_puerto["Cto"] = $fdata;
		$tdataclientes_por_puerto[".searchableFields"][] = "Cto";
//	Cedula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Cedula";
	$fdata["GoodName"] = "Cedula";
	$fdata["ownerTable"] = "puertos_cto";
	$fdata["Label"] = GetFieldLabel("Clientes_por_puerto","Cedula");
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


	$tdataclientes_por_puerto["Cedula"] = $fdata;
		$tdataclientes_por_puerto[".searchableFields"][] = "Cedula";


$tables_data["Clientes_por_puerto"]=&$tdataclientes_por_puerto;
$field_labels["Clientes_por_puerto"] = &$fieldLabelsclientes_por_puerto;
$fieldToolTips["Clientes_por_puerto"] = &$fieldToolTipsclientes_por_puerto;
$placeHolders["Clientes_por_puerto"] = &$placeHoldersclientes_por_puerto;
$page_titles["Clientes_por_puerto"] = &$pageTitlesclientes_por_puerto;


changeTextControlsToDate( "Clientes_por_puerto" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Clientes_por_puerto"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Clientes_por_puerto"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="puertos_olt";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="puertos_olt";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "puertos_olt";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Clientes_por_puerto"][0] = $masterParams;
				$masterTablesData["Clientes_por_puerto"][0]["masterKeys"] = array();
	$masterTablesData["Clientes_por_puerto"][0]["masterKeys"][]="spliter";
				$masterTablesData["Clientes_por_puerto"][0]["detailKeys"] = array();
	$masterTablesData["Clientes_por_puerto"][0]["detailKeys"][]="id_spliters";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_clientes_por_puerto()
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
	"m_srcTableName" => "Clientes_por_puerto"
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
	"m_srcTableName" => "Clientes_por_puerto"
));

$proto6["m_sql"] = "`spliters`.`id_spliters`";
$proto6["m_srcTableName"] = "Clientes_por_puerto";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Cto",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Clientes_por_puerto"
));

$proto8["m_sql"] = "`ctos`.`Cto`";
$proto8["m_srcTableName"] = "Clientes_por_puerto";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Cedula",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "Clientes_por_puerto"
));

$proto10["m_sql"] = "`puertos_cto`.`Cedula`";
$proto10["m_srcTableName"] = "Clientes_por_puerto";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "puertos_cto";
$proto13["m_srcTableName"] = "Clientes_por_puerto";
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
$proto13["m_columns"][] = "id_cto";
$proto13["m_columns"][] = "id_spliter";
$proto13["m_columns"][] = "id_cable";
$proto13["m_columns"][] = "id_localidad";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "`puertos_cto`";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "Clientes_por_puerto";
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
$proto17["m_srcTableName"] = "Clientes_por_puerto";
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
$proto17["m_columns"][] = "id_cable";
$proto17["m_columns"][] = "id_localidad";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "INNER JOIN `ctos` ON `puertos_cto`.`Cto` = `ctos`.`Cto` AND `puertos_cto`.`Spliter` = `ctos`.`Spliter` AND `puertos_cto`.`Cable` = `ctos`.`Cable` AND `puertos_cto`.`Localidad` = `ctos`.`Localidad`";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "Clientes_por_puerto";
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
	"m_srcTableName" => "Clientes_por_puerto"
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
	"m_srcTableName" => "Clientes_por_puerto"
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
	"m_srcTableName" => "Clientes_por_puerto"
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
	"m_srcTableName" => "Clientes_por_puerto"
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
	"m_srcTableName" => "Clientes_por_puerto"
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
	"m_srcTableName" => "Clientes_por_puerto"
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
	"m_srcTableName" => "Clientes_por_puerto"
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
	"m_srcTableName" => "Clientes_por_puerto"
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
$proto37["m_srcTableName"] = "Clientes_por_puerto";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "id_spliters";
$proto37["m_columns"][] = "spliter";
$proto37["m_columns"][] = "cable";
$proto37["m_columns"][] = "localidad";
$proto37["m_columns"][] = "id_cable";
$proto37["m_columns"][] = "Numero_de_tarjeta";
$proto37["m_columns"][] = "Numero_de_puerto";
$proto37["m_columns"][] = "Barrio";
$proto37["m_columns"][] = "id_localidad";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "INNER JOIN `spliters` ON `ctos`.`id_spliter` = `spliters`.`id_spliters` AND `ctos`.`Localidad` = `spliters`.`localidad` AND `ctos`.`Cable` = `spliters`.`cable`";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "Clientes_por_puerto";
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
	"m_srcTableName" => "Clientes_por_puerto"
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
	"m_srcTableName" => "Clientes_por_puerto"
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
	"m_srcTableName" => "Clientes_por_puerto"
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
	"m_srcTableName" => "Clientes_por_puerto"
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
	"m_srcTableName" => "Clientes_por_puerto"
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
	"m_srcTableName" => "Clientes_por_puerto"
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
$proto0["m_srcTableName"]="Clientes_por_puerto";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_clientes_por_puerto = createSqlQuery_clientes_por_puerto();


	
										;

			

$tdataclientes_por_puerto[".sqlquery"] = $queryData_clientes_por_puerto;



$tdataclientes_por_puerto[".hasEvents"] = false;

?>