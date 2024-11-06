<?php
$tdatacables = array();
$tdatacables[".searchableFields"] = array();
$tdatacables[".ShortName"] = "cables";
$tdatacables[".OwnerID"] = "";
$tdatacables[".OriginalTable"] = "cables";


$tdatacables[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacables[".originalPagesByType"] = $tdatacables[".pagesByType"];
$tdatacables[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacables[".originalPages"] = $tdatacables[".pages"];
$tdatacables[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
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
	$fieldLabelscables["Spanish"]["id_localidad"] = "Id Localidad";
	$fieldToolTipscables["Spanish"]["id_localidad"] = "";
	$placeHolderscables["Spanish"]["id_localidad"] = "";
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
	$fieldLabelscables["English"]["id_localidad"] = "Id Localidad";
	$fieldToolTipscables["English"]["id_localidad"] = "";
	$placeHolderscables["English"]["id_localidad"] = "";
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
$tdatacables[".googleLikeFields"][] = "id_localidad";



$tdatacables[".tableType"] = "list";

$tdatacables[".printerPageOrientation"] = 0;
$tdatacables[".nPrinterPageScale"] = 100;

$tdatacables[".nPrinterSplitRecords"] = 40;

$tdatacables[".geocodingEnabled"] = false;










$tdatacables[".pageSize"] = 20;

$tdatacables[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id_cables`, `localidad`";
$tdatacables[".strOrderBy"] = $tstrOrderBy;

$tdatacables[".orderindexes"] = array();
	$tdatacables[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "`id_cables`");

	$tdatacables[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "`localidad`");



$tdatacables[".sqlHead"] = "SELECT `id_cables`,  `cable`,  `localidad`,  `id_localidad`";
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
//	id_localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id_localidad";
	$fdata["GoodName"] = "id_localidad";
	$fdata["ownerTable"] = "cables";
	$fdata["Label"] = GetFieldLabel("cables","id_localidad");
	$fdata["FieldType"] = 3;


	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "localidad";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id_localidad";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "id_localidad";

	

	
	$edata["LookupOrderBy"] = "id_localidad";

	
	
	
	

	
	
	
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


	$tdatacables["id_localidad"] = $fdata;
		$tdatacables[".searchableFields"][] = "id_localidad";


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
//	Mapa_General
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Mapa_General";
		$detailsParam["dOriginalTable"] = "ctos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "mapa_general";
	$detailsParam["dCaptionTable"] = GetTableCaption("Mapa_General");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["cables"][$dIndex] = $detailsParam;

	
		$detailsTablesData["cables"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["cables"][$dIndex]["masterKeys"][]="cable";

	$detailsTablesData["cables"][$dIndex]["masterKeys"][]="localidad";

				$detailsTablesData["cables"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["cables"][$dIndex]["detailKeys"][]="Cable";

		
	$detailsTablesData["cables"][$dIndex]["detailKeys"][]="Localidad";
//	spliters
	
	

		$dIndex = 1;
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

	$detailsTablesData["cables"][$dIndex]["masterKeys"][]="id_cables";

				$detailsTablesData["cables"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["cables"][$dIndex]["detailKeys"][]="cable";

		
	$detailsTablesData["cables"][$dIndex]["detailKeys"][]="localidad";

		
	$detailsTablesData["cables"][$dIndex]["detailKeys"][]="id_cable";
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
				$masterTablesData["cables"][0]["masterKeys"][]="id_localidad";
				$masterTablesData["cables"][0]["detailKeys"] = array();
	$masterTablesData["cables"][0]["detailKeys"][]="localidad";
				$masterTablesData["cables"][0]["detailKeys"][]="id_localidad";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cables()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id_cables`,  `cable`,  `localidad`,  `id_localidad`";
$proto0["m_strFrom"] = "FROM `cables`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `id_cables`, `localidad`";
	
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
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id_localidad",
	"m_strTable" => "cables",
	"m_srcTableName" => "cables"
));

$proto12["m_sql"] = "`id_localidad`";
$proto12["m_srcTableName"] = "cables";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "cables";
$proto15["m_srcTableName"] = "cables";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id_cables";
$proto15["m_columns"][] = "cable";
$proto15["m_columns"][] = "localidad";
$proto15["m_columns"][] = "id_localidad";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "`cables`";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "cables";
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
	"m_strName" => "id_cables",
	"m_strTable" => "cables",
	"m_srcTableName" => "cables"
));

$proto18["m_column"]=$obj;
$proto18["m_bAsc"] = 1;
$proto18["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto18);

$proto0["m_orderby"][]=$obj;					
												$proto20=array();
						$obj = new SQLField(array(
	"m_strName" => "localidad",
	"m_strTable" => "cables",
	"m_srcTableName" => "cables"
));

$proto20["m_column"]=$obj;
$proto20["m_bAsc"] = 1;
$proto20["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto20);

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