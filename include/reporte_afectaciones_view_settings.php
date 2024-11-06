<?php
$tdatareporte_afectaciones_view = array();
$tdatareporte_afectaciones_view[".searchableFields"] = array();
$tdatareporte_afectaciones_view[".ShortName"] = "reporte_afectaciones_view";
$tdatareporte_afectaciones_view[".OwnerID"] = "";
$tdatareporte_afectaciones_view[".OriginalTable"] = "reporte_afectaciones";


$tdatareporte_afectaciones_view[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatareporte_afectaciones_view[".originalPagesByType"] = $tdatareporte_afectaciones_view[".pagesByType"];
$tdatareporte_afectaciones_view[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatareporte_afectaciones_view[".originalPages"] = $tdatareporte_afectaciones_view[".pages"];
$tdatareporte_afectaciones_view[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatareporte_afectaciones_view[".originalDefaultPages"] = $tdatareporte_afectaciones_view[".defaultPages"];

//	field labels
$fieldLabelsreporte_afectaciones_view = array();
$fieldToolTipsreporte_afectaciones_view = array();
$pageTitlesreporte_afectaciones_view = array();
$placeHoldersreporte_afectaciones_view = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsreporte_afectaciones_view["Spanish"] = array();
	$fieldToolTipsreporte_afectaciones_view["Spanish"] = array();
	$placeHoldersreporte_afectaciones_view["Spanish"] = array();
	$pageTitlesreporte_afectaciones_view["Spanish"] = array();
	$fieldLabelsreporte_afectaciones_view["Spanish"]["Id_afectacion"] = "Id Afectacion";
	$fieldToolTipsreporte_afectaciones_view["Spanish"]["Id_afectacion"] = "";
	$placeHoldersreporte_afectaciones_view["Spanish"]["Id_afectacion"] = "";
	$fieldLabelsreporte_afectaciones_view["Spanish"]["Fecha"] = "Fecha";
	$fieldToolTipsreporte_afectaciones_view["Spanish"]["Fecha"] = "";
	$placeHoldersreporte_afectaciones_view["Spanish"]["Fecha"] = "";
	$fieldLabelsreporte_afectaciones_view["Spanish"]["Localidad"] = "Localidad";
	$fieldToolTipsreporte_afectaciones_view["Spanish"]["Localidad"] = "";
	$placeHoldersreporte_afectaciones_view["Spanish"]["Localidad"] = "";
	$fieldLabelsreporte_afectaciones_view["Spanish"]["Cables"] = "Cables";
	$fieldToolTipsreporte_afectaciones_view["Spanish"]["Cables"] = "";
	$placeHoldersreporte_afectaciones_view["Spanish"]["Cables"] = "";
	$fieldLabelsreporte_afectaciones_view["Spanish"]["Spliters"] = "Spliters";
	$fieldToolTipsreporte_afectaciones_view["Spanish"]["Spliters"] = "";
	$placeHoldersreporte_afectaciones_view["Spanish"]["Spliters"] = "";
	$fieldLabelsreporte_afectaciones_view["Spanish"]["Ctos"] = "Ctos";
	$fieldToolTipsreporte_afectaciones_view["Spanish"]["Ctos"] = "";
	$placeHoldersreporte_afectaciones_view["Spanish"]["Ctos"] = "";
	$fieldLabelsreporte_afectaciones_view["Spanish"]["Tipo_Afectacion"] = "Tipo Afectacion";
	$fieldToolTipsreporte_afectaciones_view["Spanish"]["Tipo_Afectacion"] = "";
	$placeHoldersreporte_afectaciones_view["Spanish"]["Tipo_Afectacion"] = "";
	$fieldLabelsreporte_afectaciones_view["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipsreporte_afectaciones_view["Spanish"]["Observaciones"] = "";
	$placeHoldersreporte_afectaciones_view["Spanish"]["Observaciones"] = "";
	$fieldLabelsreporte_afectaciones_view["Spanish"]["Estado"] = "Estado";
	$fieldToolTipsreporte_afectaciones_view["Spanish"]["Estado"] = "";
	$placeHoldersreporte_afectaciones_view["Spanish"]["Estado"] = "";
	$fieldLabelsreporte_afectaciones_view["Spanish"]["Fecha_Solucion"] = "Fecha Solucion";
	$fieldToolTipsreporte_afectaciones_view["Spanish"]["Fecha_Solucion"] = "";
	$placeHoldersreporte_afectaciones_view["Spanish"]["Fecha_Solucion"] = "";
	if (count($fieldToolTipsreporte_afectaciones_view["Spanish"]))
		$tdatareporte_afectaciones_view[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsreporte_afectaciones_view["English"] = array();
	$fieldToolTipsreporte_afectaciones_view["English"] = array();
	$placeHoldersreporte_afectaciones_view["English"] = array();
	$pageTitlesreporte_afectaciones_view["English"] = array();
	$fieldLabelsreporte_afectaciones_view["English"]["Id_afectacion"] = "Id Afectacion";
	$fieldToolTipsreporte_afectaciones_view["English"]["Id_afectacion"] = "";
	$placeHoldersreporte_afectaciones_view["English"]["Id_afectacion"] = "";
	$fieldLabelsreporte_afectaciones_view["English"]["Fecha"] = "Fecha";
	$fieldToolTipsreporte_afectaciones_view["English"]["Fecha"] = "";
	$placeHoldersreporte_afectaciones_view["English"]["Fecha"] = "";
	$fieldLabelsreporte_afectaciones_view["English"]["Localidad"] = "Localidad";
	$fieldToolTipsreporte_afectaciones_view["English"]["Localidad"] = "";
	$placeHoldersreporte_afectaciones_view["English"]["Localidad"] = "";
	$fieldLabelsreporte_afectaciones_view["English"]["Cables"] = "Cables";
	$fieldToolTipsreporte_afectaciones_view["English"]["Cables"] = "";
	$placeHoldersreporte_afectaciones_view["English"]["Cables"] = "";
	$fieldLabelsreporte_afectaciones_view["English"]["Spliters"] = "Spliters";
	$fieldToolTipsreporte_afectaciones_view["English"]["Spliters"] = "";
	$placeHoldersreporte_afectaciones_view["English"]["Spliters"] = "";
	$fieldLabelsreporte_afectaciones_view["English"]["Ctos"] = "Ctos";
	$fieldToolTipsreporte_afectaciones_view["English"]["Ctos"] = "";
	$placeHoldersreporte_afectaciones_view["English"]["Ctos"] = "";
	$fieldLabelsreporte_afectaciones_view["English"]["Tipo_Afectacion"] = "Tipo Afectacion";
	$fieldToolTipsreporte_afectaciones_view["English"]["Tipo_Afectacion"] = "";
	$placeHoldersreporte_afectaciones_view["English"]["Tipo_Afectacion"] = "";
	$fieldLabelsreporte_afectaciones_view["English"]["Observaciones"] = "Observaciones";
	$fieldToolTipsreporte_afectaciones_view["English"]["Observaciones"] = "";
	$placeHoldersreporte_afectaciones_view["English"]["Observaciones"] = "";
	$fieldLabelsreporte_afectaciones_view["English"]["Estado"] = "Estado";
	$fieldToolTipsreporte_afectaciones_view["English"]["Estado"] = "";
	$placeHoldersreporte_afectaciones_view["English"]["Estado"] = "";
	$fieldLabelsreporte_afectaciones_view["English"]["Fecha_Solucion"] = "Fecha Solucion";
	$fieldToolTipsreporte_afectaciones_view["English"]["Fecha_Solucion"] = "";
	$placeHoldersreporte_afectaciones_view["English"]["Fecha_Solucion"] = "";
	if (count($fieldToolTipsreporte_afectaciones_view["English"]))
		$tdatareporte_afectaciones_view[".isUseToolTips"] = true;
}


	$tdatareporte_afectaciones_view[".NCSearch"] = true;



$tdatareporte_afectaciones_view[".shortTableName"] = "reporte_afectaciones_view";
$tdatareporte_afectaciones_view[".nSecOptions"] = 0;

$tdatareporte_afectaciones_view[".mainTableOwnerID"] = "";
$tdatareporte_afectaciones_view[".entityType"] = 1;
$tdatareporte_afectaciones_view[".connId"] = "isp_eisa_at_localhost";


$tdatareporte_afectaciones_view[".strOriginalTableName"] = "reporte_afectaciones";

	



$tdatareporte_afectaciones_view[".showAddInPopup"] = false;

$tdatareporte_afectaciones_view[".showEditInPopup"] = false;

$tdatareporte_afectaciones_view[".showViewInPopup"] = false;

$tdatareporte_afectaciones_view[".listAjax"] = false;
//	temporary
//$tdatareporte_afectaciones_view[".listAjax"] = false;

	$tdatareporte_afectaciones_view[".audit"] = false;

	$tdatareporte_afectaciones_view[".locking"] = false;


$pages = $tdatareporte_afectaciones_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatareporte_afectaciones_view[".edit"] = true;
	$tdatareporte_afectaciones_view[".afterEditAction"] = 1;
	$tdatareporte_afectaciones_view[".closePopupAfterEdit"] = 1;
	$tdatareporte_afectaciones_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatareporte_afectaciones_view[".add"] = true;
$tdatareporte_afectaciones_view[".afterAddAction"] = 1;
$tdatareporte_afectaciones_view[".closePopupAfterAdd"] = 1;
$tdatareporte_afectaciones_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatareporte_afectaciones_view[".list"] = true;
}



$tdatareporte_afectaciones_view[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatareporte_afectaciones_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatareporte_afectaciones_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatareporte_afectaciones_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatareporte_afectaciones_view[".printFriendly"] = true;
}



$tdatareporte_afectaciones_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatareporte_afectaciones_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatareporte_afectaciones_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatareporte_afectaciones_view[".isUseAjaxSuggest"] = true;



			

$tdatareporte_afectaciones_view[".ajaxCodeSnippetAdded"] = false;

$tdatareporte_afectaciones_view[".buttonsAdded"] = false;

$tdatareporte_afectaciones_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdatareporte_afectaciones_view[".isUseTimeForSearch"] = false;


$tdatareporte_afectaciones_view[".badgeColor"] = "DB7093";


$tdatareporte_afectaciones_view[".allSearchFields"] = array();
$tdatareporte_afectaciones_view[".filterFields"] = array();
$tdatareporte_afectaciones_view[".requiredSearchFields"] = array();

$tdatareporte_afectaciones_view[".googleLikeFields"] = array();
$tdatareporte_afectaciones_view[".googleLikeFields"][] = "Id_afectacion";
$tdatareporte_afectaciones_view[".googleLikeFields"][] = "Fecha";
$tdatareporte_afectaciones_view[".googleLikeFields"][] = "Localidad";
$tdatareporte_afectaciones_view[".googleLikeFields"][] = "Cables";
$tdatareporte_afectaciones_view[".googleLikeFields"][] = "Spliters";
$tdatareporte_afectaciones_view[".googleLikeFields"][] = "Ctos";
$tdatareporte_afectaciones_view[".googleLikeFields"][] = "Tipo_Afectacion";
$tdatareporte_afectaciones_view[".googleLikeFields"][] = "Observaciones";
$tdatareporte_afectaciones_view[".googleLikeFields"][] = "Estado";
$tdatareporte_afectaciones_view[".googleLikeFields"][] = "Fecha_Solucion";



$tdatareporte_afectaciones_view[".tableType"] = "list";

$tdatareporte_afectaciones_view[".printerPageOrientation"] = 0;
$tdatareporte_afectaciones_view[".nPrinterPageScale"] = 100;

$tdatareporte_afectaciones_view[".nPrinterSplitRecords"] = 40;

$tdatareporte_afectaciones_view[".geocodingEnabled"] = false;










$tdatareporte_afectaciones_view[".pageSize"] = 20;

$tdatareporte_afectaciones_view[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatareporte_afectaciones_view[".strOrderBy"] = $tstrOrderBy;

$tdatareporte_afectaciones_view[".orderindexes"] = array();


$tdatareporte_afectaciones_view[".sqlHead"] = "SELECT `Id_afectacion`,  `Fecha`,  `Localidad`,  `Cables`,  `Spliters`,  `Ctos`,  `Tipo_Afectacion`,  `Observaciones`,  `Estado`,  `Fecha_Solucion`";
$tdatareporte_afectaciones_view[".sqlFrom"] = "FROM `reporte_afectaciones`";
$tdatareporte_afectaciones_view[".sqlWhereExpr"] = "(`Estado` !=\"RESUELTO\")";
$tdatareporte_afectaciones_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareporte_afectaciones_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareporte_afectaciones_view[".arrGroupsPerPage"] = $arrGPP;

$tdatareporte_afectaciones_view[".highlightSearchResults"] = true;

$tableKeysreporte_afectaciones_view = array();
$tableKeysreporte_afectaciones_view[] = "Id_afectacion";
$tdatareporte_afectaciones_view[".Keys"] = $tableKeysreporte_afectaciones_view;


$tdatareporte_afectaciones_view[".hideMobileList"] = array();




//	Id_afectacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id_afectacion";
	$fdata["GoodName"] = "Id_afectacion";
	$fdata["ownerTable"] = "reporte_afectaciones";
	$fdata["Label"] = GetFieldLabel("reporte_afectaciones_view","Id_afectacion");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "Id_afectacion";

		$fdata["sourceSingle"] = "Id_afectacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Id_afectacion`";

	
	
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


	$tdatareporte_afectaciones_view["Id_afectacion"] = $fdata;
		$tdatareporte_afectaciones_view[".searchableFields"][] = "Id_afectacion";
//	Fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Fecha";
	$fdata["GoodName"] = "Fecha";
	$fdata["ownerTable"] = "reporte_afectaciones";
	$fdata["Label"] = GetFieldLabel("reporte_afectaciones_view","Fecha");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "Fecha";

		$fdata["sourceSingle"] = "Fecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Fecha`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatareporte_afectaciones_view["Fecha"] = $fdata;
		$tdatareporte_afectaciones_view[".searchableFields"][] = "Fecha";
//	Localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Localidad";
	$fdata["GoodName"] = "Localidad";
	$fdata["ownerTable"] = "reporte_afectaciones";
	$fdata["Label"] = GetFieldLabel("reporte_afectaciones_view","Localidad");
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


	$tdatareporte_afectaciones_view["Localidad"] = $fdata;
		$tdatareporte_afectaciones_view[".searchableFields"][] = "Localidad";
//	Cables
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Cables";
	$fdata["GoodName"] = "Cables";
	$fdata["ownerTable"] = "reporte_afectaciones";
	$fdata["Label"] = GetFieldLabel("reporte_afectaciones_view","Cables");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Cables";

		$fdata["sourceSingle"] = "Cables";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Cables`";

	
	
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


	$tdatareporte_afectaciones_view["Cables"] = $fdata;
		$tdatareporte_afectaciones_view[".searchableFields"][] = "Cables";
//	Spliters
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Spliters";
	$fdata["GoodName"] = "Spliters";
	$fdata["ownerTable"] = "reporte_afectaciones";
	$fdata["Label"] = GetFieldLabel("reporte_afectaciones_view","Spliters");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Spliters";

		$fdata["sourceSingle"] = "Spliters";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Spliters`";

	
	
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


	$tdatareporte_afectaciones_view["Spliters"] = $fdata;
		$tdatareporte_afectaciones_view[".searchableFields"][] = "Spliters";
//	Ctos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Ctos";
	$fdata["GoodName"] = "Ctos";
	$fdata["ownerTable"] = "reporte_afectaciones";
	$fdata["Label"] = GetFieldLabel("reporte_afectaciones_view","Ctos");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Ctos";

		$fdata["sourceSingle"] = "Ctos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Ctos`";

	
	
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


	$tdatareporte_afectaciones_view["Ctos"] = $fdata;
		$tdatareporte_afectaciones_view[".searchableFields"][] = "Ctos";
//	Tipo_Afectacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Tipo_Afectacion";
	$fdata["GoodName"] = "Tipo_Afectacion";
	$fdata["ownerTable"] = "reporte_afectaciones";
	$fdata["Label"] = GetFieldLabel("reporte_afectaciones_view","Tipo_Afectacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Tipo_Afectacion";

		$fdata["sourceSingle"] = "Tipo_Afectacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Tipo_Afectacion`";

	
	
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


	$tdatareporte_afectaciones_view["Tipo_Afectacion"] = $fdata;
		$tdatareporte_afectaciones_view[".searchableFields"][] = "Tipo_Afectacion";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "reporte_afectaciones";
	$fdata["Label"] = GetFieldLabel("reporte_afectaciones_view","Observaciones");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Observaciones";

		$fdata["sourceSingle"] = "Observaciones";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Observaciones`";

	
	
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
			$edata["EditParams"].= " maxlength=800";

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


	$tdatareporte_afectaciones_view["Observaciones"] = $fdata;
		$tdatareporte_afectaciones_view[".searchableFields"][] = "Observaciones";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "reporte_afectaciones";
	$fdata["Label"] = GetFieldLabel("reporte_afectaciones_view","Estado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Estado";

		$fdata["sourceSingle"] = "Estado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Estado`";

	
	
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


	$tdatareporte_afectaciones_view["Estado"] = $fdata;
		$tdatareporte_afectaciones_view[".searchableFields"][] = "Estado";
//	Fecha_Solucion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Fecha_Solucion";
	$fdata["GoodName"] = "Fecha_Solucion";
	$fdata["ownerTable"] = "reporte_afectaciones";
	$fdata["Label"] = GetFieldLabel("reporte_afectaciones_view","Fecha_Solucion");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "Fecha_Solucion";

		$fdata["sourceSingle"] = "Fecha_Solucion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Fecha_Solucion`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatareporte_afectaciones_view["Fecha_Solucion"] = $fdata;
		$tdatareporte_afectaciones_view[".searchableFields"][] = "Fecha_Solucion";


$tables_data["reporte_afectaciones_view"]=&$tdatareporte_afectaciones_view;
$field_labels["reporte_afectaciones_view"] = &$fieldLabelsreporte_afectaciones_view;
$fieldToolTips["reporte_afectaciones_view"] = &$fieldToolTipsreporte_afectaciones_view;
$placeHolders["reporte_afectaciones_view"] = &$placeHoldersreporte_afectaciones_view;
$page_titles["reporte_afectaciones_view"] = &$pageTitlesreporte_afectaciones_view;


changeTextControlsToDate( "reporte_afectaciones_view" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["reporte_afectaciones_view"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["reporte_afectaciones_view"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_reporte_afectaciones_view()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`Id_afectacion`,  `Fecha`,  `Localidad`,  `Cables`,  `Spliters`,  `Ctos`,  `Tipo_Afectacion`,  `Observaciones`,  `Estado`,  `Fecha_Solucion`";
$proto0["m_strFrom"] = "FROM `reporte_afectaciones`";
$proto0["m_strWhere"] = "(`Estado` !=\"RESUELTO\")";
$proto0["m_strOrderBy"] = "";
	
										;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "`Estado` !=\"RESUELTO\"";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "reporte_afectaciones",
	"m_srcTableName" => "reporte_afectaciones_view"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "!=\"RESUELTO\"";
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
	"m_strName" => "Id_afectacion",
	"m_strTable" => "reporte_afectaciones",
	"m_srcTableName" => "reporte_afectaciones_view"
));

$proto6["m_sql"] = "`Id_afectacion`";
$proto6["m_srcTableName"] = "reporte_afectaciones_view";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha",
	"m_strTable" => "reporte_afectaciones",
	"m_srcTableName" => "reporte_afectaciones_view"
));

$proto8["m_sql"] = "`Fecha`";
$proto8["m_srcTableName"] = "reporte_afectaciones_view";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Localidad",
	"m_strTable" => "reporte_afectaciones",
	"m_srcTableName" => "reporte_afectaciones_view"
));

$proto10["m_sql"] = "`Localidad`";
$proto10["m_srcTableName"] = "reporte_afectaciones_view";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Cables",
	"m_strTable" => "reporte_afectaciones",
	"m_srcTableName" => "reporte_afectaciones_view"
));

$proto12["m_sql"] = "`Cables`";
$proto12["m_srcTableName"] = "reporte_afectaciones_view";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Spliters",
	"m_strTable" => "reporte_afectaciones",
	"m_srcTableName" => "reporte_afectaciones_view"
));

$proto14["m_sql"] = "`Spliters`";
$proto14["m_srcTableName"] = "reporte_afectaciones_view";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Ctos",
	"m_strTable" => "reporte_afectaciones",
	"m_srcTableName" => "reporte_afectaciones_view"
));

$proto16["m_sql"] = "`Ctos`";
$proto16["m_srcTableName"] = "reporte_afectaciones_view";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo_Afectacion",
	"m_strTable" => "reporte_afectaciones",
	"m_srcTableName" => "reporte_afectaciones_view"
));

$proto18["m_sql"] = "`Tipo_Afectacion`";
$proto18["m_srcTableName"] = "reporte_afectaciones_view";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "reporte_afectaciones",
	"m_srcTableName" => "reporte_afectaciones_view"
));

$proto20["m_sql"] = "`Observaciones`";
$proto20["m_srcTableName"] = "reporte_afectaciones_view";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "reporte_afectaciones",
	"m_srcTableName" => "reporte_afectaciones_view"
));

$proto22["m_sql"] = "`Estado`";
$proto22["m_srcTableName"] = "reporte_afectaciones_view";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha_Solucion",
	"m_strTable" => "reporte_afectaciones",
	"m_srcTableName" => "reporte_afectaciones_view"
));

$proto24["m_sql"] = "`Fecha_Solucion`";
$proto24["m_srcTableName"] = "reporte_afectaciones_view";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "reporte_afectaciones";
$proto27["m_srcTableName"] = "reporte_afectaciones_view";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "Id_afectacion";
$proto27["m_columns"][] = "Fecha";
$proto27["m_columns"][] = "Localidad";
$proto27["m_columns"][] = "Cables";
$proto27["m_columns"][] = "Spliters";
$proto27["m_columns"][] = "Ctos";
$proto27["m_columns"][] = "Tipo_Afectacion";
$proto27["m_columns"][] = "Observaciones";
$proto27["m_columns"][] = "Estado";
$proto27["m_columns"][] = "Fecha_Solucion";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "`reporte_afectaciones`";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "reporte_afectaciones_view";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="reporte_afectaciones_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_reporte_afectaciones_view = createSqlQuery_reporte_afectaciones_view();


	
										;

										

$tdatareporte_afectaciones_view[".sqlquery"] = $queryData_reporte_afectaciones_view;



$tdatareporte_afectaciones_view[".hasEvents"] = false;

?>