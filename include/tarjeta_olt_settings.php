<?php
$tdatatarjeta_olt = array();
$tdatatarjeta_olt[".searchableFields"] = array();
$tdatatarjeta_olt[".ShortName"] = "tarjeta_olt";
$tdatatarjeta_olt[".OwnerID"] = "";
$tdatatarjeta_olt[".OriginalTable"] = "tarjeta_olt";


$tdatatarjeta_olt[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatarjeta_olt[".originalPagesByType"] = $tdatatarjeta_olt[".pagesByType"];
$tdatatarjeta_olt[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatarjeta_olt[".originalPages"] = $tdatatarjeta_olt[".pages"];
$tdatatarjeta_olt[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatarjeta_olt[".originalDefaultPages"] = $tdatatarjeta_olt[".defaultPages"];

//	field labels
$fieldLabelstarjeta_olt = array();
$fieldToolTipstarjeta_olt = array();
$pageTitlestarjeta_olt = array();
$placeHolderstarjeta_olt = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstarjeta_olt["Spanish"] = array();
	$fieldToolTipstarjeta_olt["Spanish"] = array();
	$placeHolderstarjeta_olt["Spanish"] = array();
	$pageTitlestarjeta_olt["Spanish"] = array();
	$fieldLabelstarjeta_olt["Spanish"]["Id_Tarjetas"] = "Id Tarjetas";
	$fieldToolTipstarjeta_olt["Spanish"]["Id_Tarjetas"] = "";
	$placeHolderstarjeta_olt["Spanish"]["Id_Tarjetas"] = "";
	$fieldLabelstarjeta_olt["Spanish"]["Numero_Tarjeta"] = "Numero Tarjeta";
	$fieldToolTipstarjeta_olt["Spanish"]["Numero_Tarjeta"] = "";
	$placeHolderstarjeta_olt["Spanish"]["Numero_Tarjeta"] = "";
	$fieldLabelstarjeta_olt["Spanish"]["Loclaidad"] = "Localidad";
	$fieldToolTipstarjeta_olt["Spanish"]["Loclaidad"] = "";
	$placeHolderstarjeta_olt["Spanish"]["Loclaidad"] = "";
	$pageTitlestarjeta_olt["Spanish"]["masterlist"] = "Tarjeta Olt {%Numero_Tarjeta}";
	if (count($fieldToolTipstarjeta_olt["Spanish"]))
		$tdatatarjeta_olt[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstarjeta_olt["English"] = array();
	$fieldToolTipstarjeta_olt["English"] = array();
	$placeHolderstarjeta_olt["English"] = array();
	$pageTitlestarjeta_olt["English"] = array();
	$fieldLabelstarjeta_olt["English"]["Id_Tarjetas"] = "Id Tarjetas";
	$fieldToolTipstarjeta_olt["English"]["Id_Tarjetas"] = "";
	$placeHolderstarjeta_olt["English"]["Id_Tarjetas"] = "";
	$fieldLabelstarjeta_olt["English"]["Numero_Tarjeta"] = "Numero Tarjeta";
	$fieldToolTipstarjeta_olt["English"]["Numero_Tarjeta"] = "";
	$placeHolderstarjeta_olt["English"]["Numero_Tarjeta"] = "";
	$fieldLabelstarjeta_olt["English"]["Loclaidad"] = "Loclaidad";
	$fieldToolTipstarjeta_olt["English"]["Loclaidad"] = "";
	$placeHolderstarjeta_olt["English"]["Loclaidad"] = "";
	if (count($fieldToolTipstarjeta_olt["English"]))
		$tdatatarjeta_olt[".isUseToolTips"] = true;
}


	$tdatatarjeta_olt[".NCSearch"] = true;



$tdatatarjeta_olt[".shortTableName"] = "tarjeta_olt";
$tdatatarjeta_olt[".nSecOptions"] = 0;

$tdatatarjeta_olt[".mainTableOwnerID"] = "";
$tdatatarjeta_olt[".entityType"] = 0;
$tdatatarjeta_olt[".connId"] = "isp_eisa_at_localhost";


$tdatatarjeta_olt[".strOriginalTableName"] = "tarjeta_olt";

	



$tdatatarjeta_olt[".showAddInPopup"] = false;

$tdatatarjeta_olt[".showEditInPopup"] = false;

$tdatatarjeta_olt[".showViewInPopup"] = false;

$tdatatarjeta_olt[".listAjax"] = false;
//	temporary
//$tdatatarjeta_olt[".listAjax"] = false;

	$tdatatarjeta_olt[".audit"] = false;

	$tdatatarjeta_olt[".locking"] = false;


$pages = $tdatatarjeta_olt[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatarjeta_olt[".edit"] = true;
	$tdatatarjeta_olt[".afterEditAction"] = 1;
	$tdatatarjeta_olt[".closePopupAfterEdit"] = 1;
	$tdatatarjeta_olt[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatarjeta_olt[".add"] = true;
$tdatatarjeta_olt[".afterAddAction"] = 1;
$tdatatarjeta_olt[".closePopupAfterAdd"] = 1;
$tdatatarjeta_olt[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatarjeta_olt[".list"] = true;
}



$tdatatarjeta_olt[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatarjeta_olt[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatarjeta_olt[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatarjeta_olt[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatarjeta_olt[".printFriendly"] = true;
}



$tdatatarjeta_olt[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatarjeta_olt[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatarjeta_olt[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatarjeta_olt[".isUseAjaxSuggest"] = true;



						

$tdatatarjeta_olt[".ajaxCodeSnippetAdded"] = false;

$tdatatarjeta_olt[".buttonsAdded"] = false;

$tdatatarjeta_olt[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatarjeta_olt[".isUseTimeForSearch"] = false;


$tdatatarjeta_olt[".badgeColor"] = "6da5c8";


$tdatatarjeta_olt[".allSearchFields"] = array();
$tdatatarjeta_olt[".filterFields"] = array();
$tdatatarjeta_olt[".requiredSearchFields"] = array();

$tdatatarjeta_olt[".googleLikeFields"] = array();
$tdatatarjeta_olt[".googleLikeFields"][] = "Id_Tarjetas";
$tdatatarjeta_olt[".googleLikeFields"][] = "Numero_Tarjeta";
$tdatatarjeta_olt[".googleLikeFields"][] = "Loclaidad";



$tdatatarjeta_olt[".tableType"] = "list";

$tdatatarjeta_olt[".printerPageOrientation"] = 0;
$tdatatarjeta_olt[".nPrinterPageScale"] = 100;

$tdatatarjeta_olt[".nPrinterSplitRecords"] = 40;

$tdatatarjeta_olt[".geocodingEnabled"] = false;










$tdatatarjeta_olt[".pageSize"] = 20;

$tdatatarjeta_olt[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatarjeta_olt[".strOrderBy"] = $tstrOrderBy;

$tdatatarjeta_olt[".orderindexes"] = array();


$tdatatarjeta_olt[".sqlHead"] = "SELECT `Id_Tarjetas`,  	`Numero_Tarjeta`,  	`Loclaidad`";
$tdatatarjeta_olt[".sqlFrom"] = "FROM `tarjeta_olt`";
$tdatatarjeta_olt[".sqlWhereExpr"] = "";
$tdatatarjeta_olt[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatarjeta_olt[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatarjeta_olt[".arrGroupsPerPage"] = $arrGPP;

$tdatatarjeta_olt[".highlightSearchResults"] = true;

$tableKeystarjeta_olt = array();
$tableKeystarjeta_olt[] = "Id_Tarjetas";
$tdatatarjeta_olt[".Keys"] = $tableKeystarjeta_olt;


$tdatatarjeta_olt[".hideMobileList"] = array();




//	Id_Tarjetas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id_Tarjetas";
	$fdata["GoodName"] = "Id_Tarjetas";
	$fdata["ownerTable"] = "tarjeta_olt";
	$fdata["Label"] = GetFieldLabel("tarjeta_olt","Id_Tarjetas");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "Id_Tarjetas";

		$fdata["sourceSingle"] = "Id_Tarjetas";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Id_Tarjetas`";

	
	
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


	$tdatatarjeta_olt["Id_Tarjetas"] = $fdata;
		$tdatatarjeta_olt[".searchableFields"][] = "Id_Tarjetas";
//	Numero_Tarjeta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Numero_Tarjeta";
	$fdata["GoodName"] = "Numero_Tarjeta";
	$fdata["ownerTable"] = "tarjeta_olt";
	$fdata["Label"] = GetFieldLabel("tarjeta_olt","Numero_Tarjeta");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Numero_Tarjeta";

		$fdata["sourceSingle"] = "Numero_Tarjeta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Numero_Tarjeta`";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "1";
	$edata["LookupValues"][] = "2";
	$edata["LookupValues"][] = "3";
	$edata["LookupValues"][] = "4";
	$edata["LookupValues"][] = "5";
	$edata["LookupValues"][] = "6";
	$edata["LookupValues"][] = "7";
	$edata["LookupValues"][] = "8";
	$edata["LookupValues"][] = "9";

	
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


	$tdatatarjeta_olt["Numero_Tarjeta"] = $fdata;
		$tdatatarjeta_olt[".searchableFields"][] = "Numero_Tarjeta";
//	Loclaidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Loclaidad";
	$fdata["GoodName"] = "Loclaidad";
	$fdata["ownerTable"] = "tarjeta_olt";
	$fdata["Label"] = GetFieldLabel("tarjeta_olt","Loclaidad");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Loclaidad";

		$fdata["sourceSingle"] = "Loclaidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Loclaidad`";

	
	
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
	$edata["LookupTable"] = "localidad";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_localidad";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Localidad";

	

	
	$edata["LookupOrderBy"] = "Localidad";

	
	
	
	

	
	
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


	$tdatatarjeta_olt["Loclaidad"] = $fdata;
		$tdatatarjeta_olt[".searchableFields"][] = "Loclaidad";


$tables_data["tarjeta_olt"]=&$tdatatarjeta_olt;
$field_labels["tarjeta_olt"] = &$fieldLabelstarjeta_olt;
$fieldToolTips["tarjeta_olt"] = &$fieldToolTipstarjeta_olt;
$placeHolders["tarjeta_olt"] = &$placeHolderstarjeta_olt;
$page_titles["tarjeta_olt"] = &$pageTitlestarjeta_olt;


changeTextControlsToDate( "tarjeta_olt" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tarjeta_olt"] = array();
//	puertos_olt
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="puertos_olt";
		$detailsParam["dOriginalTable"] = "puertos_olt";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "puertos_olt";
	$detailsParam["dCaptionTable"] = GetTableCaption("puertos_olt");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tarjeta_olt"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tarjeta_olt"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tarjeta_olt"][$dIndex]["masterKeys"][]="Id_Tarjetas";

				$detailsTablesData["tarjeta_olt"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tarjeta_olt"][$dIndex]["detailKeys"][]="tarjeta";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tarjeta_olt"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="localidad";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="localidad";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "localidad";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tarjeta_olt"][0] = $masterParams;
				$masterTablesData["tarjeta_olt"][0]["masterKeys"] = array();
	$masterTablesData["tarjeta_olt"][0]["masterKeys"][]="id_localidad";
				$masterTablesData["tarjeta_olt"][0]["detailKeys"] = array();
	$masterTablesData["tarjeta_olt"][0]["detailKeys"][]="Loclaidad";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tarjeta_olt()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`Id_Tarjetas`,  	`Numero_Tarjeta`,  	`Loclaidad`";
$proto0["m_strFrom"] = "FROM `tarjeta_olt`";
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
	"m_strName" => "Id_Tarjetas",
	"m_strTable" => "tarjeta_olt",
	"m_srcTableName" => "tarjeta_olt"
));

$proto6["m_sql"] = "`Id_Tarjetas`";
$proto6["m_srcTableName"] = "tarjeta_olt";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero_Tarjeta",
	"m_strTable" => "tarjeta_olt",
	"m_srcTableName" => "tarjeta_olt"
));

$proto8["m_sql"] = "`Numero_Tarjeta`";
$proto8["m_srcTableName"] = "tarjeta_olt";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Loclaidad",
	"m_strTable" => "tarjeta_olt",
	"m_srcTableName" => "tarjeta_olt"
));

$proto10["m_sql"] = "`Loclaidad`";
$proto10["m_srcTableName"] = "tarjeta_olt";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "tarjeta_olt";
$proto13["m_srcTableName"] = "tarjeta_olt";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "Id_Tarjetas";
$proto13["m_columns"][] = "Numero_Tarjeta";
$proto13["m_columns"][] = "Loclaidad";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "`tarjeta_olt`";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "tarjeta_olt";
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
$proto0["m_srcTableName"]="tarjeta_olt";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tarjeta_olt = createSqlQuery_tarjeta_olt();


	
										;

			

$tdatatarjeta_olt[".sqlquery"] = $queryData_tarjeta_olt;



$tdatatarjeta_olt[".hasEvents"] = false;

?>