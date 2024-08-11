<?php
$tdatamapa_puertos_libres = array();
$tdatamapa_puertos_libres[".searchableFields"] = array();
$tdatamapa_puertos_libres[".ShortName"] = "mapa_puertos_libres";
$tdatamapa_puertos_libres[".OwnerID"] = "";
$tdatamapa_puertos_libres[".OriginalTable"] = "ctos";


$tdatamapa_puertos_libres[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamapa_puertos_libres[".originalPagesByType"] = $tdatamapa_puertos_libres[".pagesByType"];
$tdatamapa_puertos_libres[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamapa_puertos_libres[".originalPages"] = $tdatamapa_puertos_libres[".pages"];
$tdatamapa_puertos_libres[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamapa_puertos_libres[".originalDefaultPages"] = $tdatamapa_puertos_libres[".defaultPages"];

//	field labels
$fieldLabelsmapa_puertos_libres = array();
$fieldToolTipsmapa_puertos_libres = array();
$pageTitlesmapa_puertos_libres = array();
$placeHoldersmapa_puertos_libres = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmapa_puertos_libres["Spanish"] = array();
	$fieldToolTipsmapa_puertos_libres["Spanish"] = array();
	$placeHoldersmapa_puertos_libres["Spanish"] = array();
	$pageTitlesmapa_puertos_libres["Spanish"] = array();
	$fieldLabelsmapa_puertos_libres["Spanish"]["id_Ctos"] = "Id Ctos";
	$fieldToolTipsmapa_puertos_libres["Spanish"]["id_Ctos"] = "";
	$placeHoldersmapa_puertos_libres["Spanish"]["id_Ctos"] = "";
	$fieldLabelsmapa_puertos_libres["Spanish"]["Cto"] = "Cto";
	$fieldToolTipsmapa_puertos_libres["Spanish"]["Cto"] = "";
	$placeHoldersmapa_puertos_libres["Spanish"]["Cto"] = "";
	$fieldLabelsmapa_puertos_libres["Spanish"]["Latitud"] = "Latitud";
	$fieldToolTipsmapa_puertos_libres["Spanish"]["Latitud"] = "";
	$placeHoldersmapa_puertos_libres["Spanish"]["Latitud"] = "";
	$fieldLabelsmapa_puertos_libres["Spanish"]["Longitud"] = "Longitud";
	$fieldToolTipsmapa_puertos_libres["Spanish"]["Longitud"] = "";
	$placeHoldersmapa_puertos_libres["Spanish"]["Longitud"] = "";
	$fieldLabelsmapa_puertos_libres["Spanish"]["Spliter"] = "Spliter";
	$fieldToolTipsmapa_puertos_libres["Spanish"]["Spliter"] = "";
	$placeHoldersmapa_puertos_libres["Spanish"]["Spliter"] = "";
	$fieldLabelsmapa_puertos_libres["Spanish"]["Cable"] = "Cable";
	$fieldToolTipsmapa_puertos_libres["Spanish"]["Cable"] = "";
	$placeHoldersmapa_puertos_libres["Spanish"]["Cable"] = "";
	$fieldLabelsmapa_puertos_libres["Spanish"]["Ubicacion"] = "Ubicacion";
	$fieldToolTipsmapa_puertos_libres["Spanish"]["Ubicacion"] = "";
	$placeHoldersmapa_puertos_libres["Spanish"]["Ubicacion"] = "";
	$fieldLabelsmapa_puertos_libres["Spanish"]["Localidad"] = "Localidad";
	$fieldToolTipsmapa_puertos_libres["Spanish"]["Localidad"] = "";
	$placeHoldersmapa_puertos_libres["Spanish"]["Localidad"] = "";
	$fieldLabelsmapa_puertos_libres["Spanish"]["puertos_libres"] = "Puertos Libres";
	$fieldToolTipsmapa_puertos_libres["Spanish"]["puertos_libres"] = "";
	$placeHoldersmapa_puertos_libres["Spanish"]["puertos_libres"] = "";
	$fieldLabelsmapa_puertos_libres["Spanish"]["concatenado"] = "Concatenado";
	$fieldToolTipsmapa_puertos_libres["Spanish"]["concatenado"] = "";
	$placeHoldersmapa_puertos_libres["Spanish"]["concatenado"] = "";
	if (count($fieldToolTipsmapa_puertos_libres["Spanish"]))
		$tdatamapa_puertos_libres[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmapa_puertos_libres["English"] = array();
	$fieldToolTipsmapa_puertos_libres["English"] = array();
	$placeHoldersmapa_puertos_libres["English"] = array();
	$pageTitlesmapa_puertos_libres["English"] = array();
	$fieldLabelsmapa_puertos_libres["English"]["id_Ctos"] = "Id Ctos";
	$fieldToolTipsmapa_puertos_libres["English"]["id_Ctos"] = "";
	$placeHoldersmapa_puertos_libres["English"]["id_Ctos"] = "";
	$fieldLabelsmapa_puertos_libres["English"]["Cto"] = "Cto";
	$fieldToolTipsmapa_puertos_libres["English"]["Cto"] = "";
	$placeHoldersmapa_puertos_libres["English"]["Cto"] = "";
	$fieldLabelsmapa_puertos_libres["English"]["Latitud"] = "Latitud";
	$fieldToolTipsmapa_puertos_libres["English"]["Latitud"] = "";
	$placeHoldersmapa_puertos_libres["English"]["Latitud"] = "";
	$fieldLabelsmapa_puertos_libres["English"]["Longitud"] = "Longitud";
	$fieldToolTipsmapa_puertos_libres["English"]["Longitud"] = "";
	$placeHoldersmapa_puertos_libres["English"]["Longitud"] = "";
	$fieldLabelsmapa_puertos_libres["English"]["Spliter"] = "Spliter";
	$fieldToolTipsmapa_puertos_libres["English"]["Spliter"] = "";
	$placeHoldersmapa_puertos_libres["English"]["Spliter"] = "";
	$fieldLabelsmapa_puertos_libres["English"]["Cable"] = "Cable";
	$fieldToolTipsmapa_puertos_libres["English"]["Cable"] = "";
	$placeHoldersmapa_puertos_libres["English"]["Cable"] = "";
	$fieldLabelsmapa_puertos_libres["English"]["Ubicacion"] = "Ubicacion";
	$fieldToolTipsmapa_puertos_libres["English"]["Ubicacion"] = "";
	$placeHoldersmapa_puertos_libres["English"]["Ubicacion"] = "";
	$fieldLabelsmapa_puertos_libres["English"]["Localidad"] = "Localidad";
	$fieldToolTipsmapa_puertos_libres["English"]["Localidad"] = "";
	$placeHoldersmapa_puertos_libres["English"]["Localidad"] = "";
	$fieldLabelsmapa_puertos_libres["English"]["puertos_libres"] = "Puertos Libres";
	$fieldToolTipsmapa_puertos_libres["English"]["puertos_libres"] = "";
	$placeHoldersmapa_puertos_libres["English"]["puertos_libres"] = "";
	$fieldLabelsmapa_puertos_libres["English"]["concatenado"] = "Concatenado";
	$fieldToolTipsmapa_puertos_libres["English"]["concatenado"] = "";
	$placeHoldersmapa_puertos_libres["English"]["concatenado"] = "";
	if (count($fieldToolTipsmapa_puertos_libres["English"]))
		$tdatamapa_puertos_libres[".isUseToolTips"] = true;
}


	$tdatamapa_puertos_libres[".NCSearch"] = true;



$tdatamapa_puertos_libres[".shortTableName"] = "mapa_puertos_libres";
$tdatamapa_puertos_libres[".nSecOptions"] = 0;

$tdatamapa_puertos_libres[".mainTableOwnerID"] = "";
$tdatamapa_puertos_libres[".entityType"] = 1;
$tdatamapa_puertos_libres[".connId"] = "isp_eisa_at_localhost";


$tdatamapa_puertos_libres[".strOriginalTableName"] = "ctos";

	



$tdatamapa_puertos_libres[".showAddInPopup"] = false;

$tdatamapa_puertos_libres[".showEditInPopup"] = false;

$tdatamapa_puertos_libres[".showViewInPopup"] = false;

$tdatamapa_puertos_libres[".listAjax"] = false;
//	temporary
//$tdatamapa_puertos_libres[".listAjax"] = false;

	$tdatamapa_puertos_libres[".audit"] = false;

	$tdatamapa_puertos_libres[".locking"] = false;


$pages = $tdatamapa_puertos_libres[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamapa_puertos_libres[".edit"] = true;
	$tdatamapa_puertos_libres[".afterEditAction"] = 1;
	$tdatamapa_puertos_libres[".closePopupAfterEdit"] = 1;
	$tdatamapa_puertos_libres[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamapa_puertos_libres[".add"] = true;
$tdatamapa_puertos_libres[".afterAddAction"] = 1;
$tdatamapa_puertos_libres[".closePopupAfterAdd"] = 1;
$tdatamapa_puertos_libres[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamapa_puertos_libres[".list"] = true;
}



$tdatamapa_puertos_libres[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamapa_puertos_libres[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamapa_puertos_libres[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamapa_puertos_libres[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamapa_puertos_libres[".printFriendly"] = true;
}



$tdatamapa_puertos_libres[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamapa_puertos_libres[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamapa_puertos_libres[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamapa_puertos_libres[".isUseAjaxSuggest"] = true;



			

$tdatamapa_puertos_libres[".ajaxCodeSnippetAdded"] = false;

$tdatamapa_puertos_libres[".buttonsAdded"] = false;

$tdatamapa_puertos_libres[".addPageEvents"] = true;

// use timepicker for search panel
$tdatamapa_puertos_libres[".isUseTimeForSearch"] = false;

$tdatamapa_puertos_libres[".isUseFieldsMaps"] = true;

$tdatamapa_puertos_libres[".badgeColor"] = "2F4F4F";


$tdatamapa_puertos_libres[".allSearchFields"] = array();
$tdatamapa_puertos_libres[".filterFields"] = array();
$tdatamapa_puertos_libres[".requiredSearchFields"] = array();

$tdatamapa_puertos_libres[".googleLikeFields"] = array();
$tdatamapa_puertos_libres[".googleLikeFields"][] = "id_Ctos";
$tdatamapa_puertos_libres[".googleLikeFields"][] = "Cto";
$tdatamapa_puertos_libres[".googleLikeFields"][] = "Latitud";
$tdatamapa_puertos_libres[".googleLikeFields"][] = "Longitud";
$tdatamapa_puertos_libres[".googleLikeFields"][] = "Spliter";
$tdatamapa_puertos_libres[".googleLikeFields"][] = "Cable";
$tdatamapa_puertos_libres[".googleLikeFields"][] = "Localidad";
$tdatamapa_puertos_libres[".googleLikeFields"][] = "Ubicacion";
$tdatamapa_puertos_libres[".googleLikeFields"][] = "puertos_libres";
$tdatamapa_puertos_libres[".googleLikeFields"][] = "concatenado";



$tdatamapa_puertos_libres[".tableType"] = "list";

$tdatamapa_puertos_libres[".printerPageOrientation"] = 0;
$tdatamapa_puertos_libres[".nPrinterPageScale"] = 100;

$tdatamapa_puertos_libres[".nPrinterSplitRecords"] = 40;

$tdatamapa_puertos_libres[".geocodingEnabled"] = false;










$tdatamapa_puertos_libres[".pageSize"] = 20;

$tdatamapa_puertos_libres[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `ctos`.`Localidad`, `ctos`.`id_Ctos`";
$tdatamapa_puertos_libres[".strOrderBy"] = $tstrOrderBy;

$tdatamapa_puertos_libres[".orderindexes"] = array();
	$tdatamapa_puertos_libres[".orderindexes"][] = array(7, (1 ? "ASC" : "DESC"), "`ctos`.`Localidad`");

	$tdatamapa_puertos_libres[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "`ctos`.`id_Ctos`");



$tdatamapa_puertos_libres[".sqlHead"] = "SELECT `ctos`.`id_Ctos`,  `ctos`.`Cto`,  `ctos`.`Latitud`,  `ctos`.`Longitud`,  `ctos`.`Spliter`,  `ctos`.`Cable`,  `ctos`.`Localidad`,  `ctos`.`Ubicacion`,  COUNT(`puertos_cto`.`Ocupado`) AS `puertos_libres`,  CONCAT(`ctos`.`Localidad`, '\\n', `ctos`.`Cable`, '\\n', `ctos`.`Spliter`, '\\n', `ctos`.`Cto`, '\\n', 'Puertos Libres', ' ', COUNT(`puertos_cto`.`Ocupado`)) AS `concatenado`";
$tdatamapa_puertos_libres[".sqlFrom"] = "FROM `ctos`  INNER JOIN `puertos_cto` ON `ctos`.`Cto` = `puertos_cto`.`Cto` AND `ctos`.`Spliter` = `puertos_cto`.`Spliter` AND `ctos`.`Cable` = `puertos_cto`.`Cable` AND `ctos`.`Localidad` = `puertos_cto`.`Localidad`";
$tdatamapa_puertos_libres[".sqlWhereExpr"] = "(`puertos_cto`.`Ocupado` = 'No')";
$tdatamapa_puertos_libres[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatamapa_puertos_libres[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamapa_puertos_libres[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamapa_puertos_libres[".arrGroupsPerPage"] = $arrGPP;

$tdatamapa_puertos_libres[".highlightSearchResults"] = true;

$tableKeysmapa_puertos_libres = array();
$tableKeysmapa_puertos_libres[] = "id_Ctos";
$tdatamapa_puertos_libres[".Keys"] = $tableKeysmapa_puertos_libres;


$tdatamapa_puertos_libres[".hideMobileList"] = array();




//	id_Ctos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_Ctos";
	$fdata["GoodName"] = "id_Ctos";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Mapa_Puertos_Libres","id_Ctos");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_Ctos";

		$fdata["sourceSingle"] = "id_Ctos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ctos`.`id_Ctos`";

	
	
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


	$tdatamapa_puertos_libres["id_Ctos"] = $fdata;
		$tdatamapa_puertos_libres[".searchableFields"][] = "id_Ctos";
//	Cto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Cto";
	$fdata["GoodName"] = "Cto";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Mapa_Puertos_Libres","Cto");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "ctos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "Cto";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Cto";

	

	
	$edata["LookupOrderBy"] = "id_Ctos";

	
	
	
	

	
	
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


	$tdatamapa_puertos_libres["Cto"] = $fdata;
		$tdatamapa_puertos_libres[".searchableFields"][] = "Cto";
//	Latitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Latitud";
	$fdata["GoodName"] = "Latitud";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Mapa_Puertos_Libres","Latitud");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Latitud";

		$fdata["sourceSingle"] = "Latitud";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ctos`.`Latitud`";

	
	
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


	$tdatamapa_puertos_libres["Latitud"] = $fdata;
		$tdatamapa_puertos_libres[".searchableFields"][] = "Latitud";
//	Longitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Longitud";
	$fdata["GoodName"] = "Longitud";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Mapa_Puertos_Libres","Longitud");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Longitud";

		$fdata["sourceSingle"] = "Longitud";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ctos`.`Longitud`";

	
	
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
			$edata["EditParams"].= " maxlength=32";

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


	$tdatamapa_puertos_libres["Longitud"] = $fdata;
		$tdatamapa_puertos_libres[".searchableFields"][] = "Longitud";
//	Spliter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Spliter";
	$fdata["GoodName"] = "Spliter";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Mapa_Puertos_Libres","Spliter");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Spliter";

		$fdata["sourceSingle"] = "Spliter";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ctos`.`Spliter`";

	
	
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

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "spliter";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "spliter";

	

	
	$edata["LookupOrderBy"] = "id_spliters";

	
	
	
	

	
	
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


	$tdatamapa_puertos_libres["Spliter"] = $fdata;
		$tdatamapa_puertos_libres[".searchableFields"][] = "Spliter";
//	Cable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Cable";
	$fdata["GoodName"] = "Cable";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Mapa_Puertos_Libres","Cable");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Cable";

		$fdata["sourceSingle"] = "Cable";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ctos`.`Cable`";

	
	
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
	$edata["LookupTable"] = "cables";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "cable";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "cable";

	

	
	$edata["LookupOrderBy"] = "id_cables";

	
	
	
	

	
	
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


	$tdatamapa_puertos_libres["Cable"] = $fdata;
		$tdatamapa_puertos_libres[".searchableFields"][] = "Cable";
//	Localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Localidad";
	$fdata["GoodName"] = "Localidad";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Mapa_Puertos_Libres","Localidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Localidad";

		$fdata["sourceSingle"] = "Localidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ctos`.`Localidad`";

	
	
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

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "Localidad";
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


	$tdatamapa_puertos_libres["Localidad"] = $fdata;
		$tdatamapa_puertos_libres[".searchableFields"][] = "Localidad";
//	Ubicacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Ubicacion";
	$fdata["GoodName"] = "Ubicacion";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("Mapa_Puertos_Libres","Ubicacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Ubicacion";

		$fdata["sourceSingle"] = "Ubicacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ctos`.`Ubicacion`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Map");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["mapData"] = array();
	$vdata["mapData"]['width'] = 300;
	$vdata["mapData"]['height'] = 225;
	$vdata["mapData"]['address'] = "Cto";
	$vdata["mapData"]['lat'] = "Latitud";
	$vdata["mapData"]['lng'] = "Longitud";
	$vdata["mapData"]['desc'] = "concatenado";
	$vdata["mapData"]['mapIcon'] = "";
	$vdata["mapData"]['isMapIconCustom'] = 0;
		$vdata["mapData"]['zoom'] = 7;

	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdatamapa_puertos_libres["Ubicacion"] = $fdata;
		$tdatamapa_puertos_libres[".searchableFields"][] = "Ubicacion";
//	puertos_libres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "puertos_libres";
	$fdata["GoodName"] = "puertos_libres";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Mapa_Puertos_Libres","puertos_libres");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "puertos_libres";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(`puertos_cto`.`Ocupado`)";

	
	
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


	$tdatamapa_puertos_libres["puertos_libres"] = $fdata;
		$tdatamapa_puertos_libres[".searchableFields"][] = "puertos_libres";
//	concatenado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "concatenado";
	$fdata["GoodName"] = "concatenado";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Mapa_Puertos_Libres","concatenado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "concatenado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT(`ctos`.`Localidad`, '\\n', `ctos`.`Cable`, '\\n', `ctos`.`Spliter`, '\\n', `ctos`.`Cto`, '\\n', 'Puertos Libres', ' ', COUNT(`puertos_cto`.`Ocupado`))";

	
	
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


	$tdatamapa_puertos_libres["concatenado"] = $fdata;
		$tdatamapa_puertos_libres[".searchableFields"][] = "concatenado";


$tables_data["Mapa Puertos Libres"]=&$tdatamapa_puertos_libres;
$field_labels["Mapa_Puertos_Libres"] = &$fieldLabelsmapa_puertos_libres;
$fieldToolTips["Mapa_Puertos_Libres"] = &$fieldToolTipsmapa_puertos_libres;
$placeHolders["Mapa_Puertos_Libres"] = &$placeHoldersmapa_puertos_libres;
$page_titles["Mapa_Puertos_Libres"] = &$pageTitlesmapa_puertos_libres;


changeTextControlsToDate( "Mapa Puertos Libres" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Mapa Puertos Libres"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Mapa Puertos Libres"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_mapa_puertos_libres()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`ctos`.`id_Ctos`,  `ctos`.`Cto`,  `ctos`.`Latitud`,  `ctos`.`Longitud`,  `ctos`.`Spliter`,  `ctos`.`Cable`,  `ctos`.`Localidad`,  `ctos`.`Ubicacion`,  COUNT(`puertos_cto`.`Ocupado`) AS `puertos_libres`,  CONCAT(`ctos`.`Localidad`, '\\n', `ctos`.`Cable`, '\\n', `ctos`.`Spliter`, '\\n', `ctos`.`Cto`, '\\n', 'Puertos Libres', ' ', COUNT(`puertos_cto`.`Ocupado`)) AS `concatenado`";
$proto0["m_strFrom"] = "FROM `ctos`  INNER JOIN `puertos_cto` ON `ctos`.`Cto` = `puertos_cto`.`Cto` AND `ctos`.`Spliter` = `puertos_cto`.`Spliter` AND `ctos`.`Cable` = `puertos_cto`.`Cable` AND `ctos`.`Localidad` = `puertos_cto`.`Localidad`";
$proto0["m_strWhere"] = "(`puertos_cto`.`Ocupado` = 'No')";
$proto0["m_strOrderBy"] = "ORDER BY `ctos`.`Localidad`, `ctos`.`id_Ctos`";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "`puertos_cto`.`Ocupado` = 'No'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Ocupado",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "Mapa Puertos Libres"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 'No'";
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
	"m_strName" => "id_Ctos",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa Puertos Libres"
));

$proto6["m_sql"] = "`ctos`.`id_Ctos`";
$proto6["m_srcTableName"] = "Mapa Puertos Libres";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Cto",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa Puertos Libres"
));

$proto8["m_sql"] = "`ctos`.`Cto`";
$proto8["m_srcTableName"] = "Mapa Puertos Libres";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Latitud",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa Puertos Libres"
));

$proto10["m_sql"] = "`ctos`.`Latitud`";
$proto10["m_srcTableName"] = "Mapa Puertos Libres";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Longitud",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa Puertos Libres"
));

$proto12["m_sql"] = "`ctos`.`Longitud`";
$proto12["m_srcTableName"] = "Mapa Puertos Libres";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Spliter",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa Puertos Libres"
));

$proto14["m_sql"] = "`ctos`.`Spliter`";
$proto14["m_srcTableName"] = "Mapa Puertos Libres";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Cable",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa Puertos Libres"
));

$proto16["m_sql"] = "`ctos`.`Cable`";
$proto16["m_srcTableName"] = "Mapa Puertos Libres";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Localidad",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa Puertos Libres"
));

$proto18["m_sql"] = "`ctos`.`Localidad`";
$proto18["m_srcTableName"] = "Mapa Puertos Libres";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Ubicacion",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa Puertos Libres"
));

$proto20["m_sql"] = "`ctos`.`Ubicacion`";
$proto20["m_srcTableName"] = "Mapa Puertos Libres";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$proto23=array();
$proto23["m_functiontype"] = "SQLF_COUNT";
$proto23["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "Ocupado",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "Mapa Puertos Libres"
));

$proto23["m_arguments"][]=$obj;
$proto23["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto23);

$proto22["m_sql"] = "COUNT(`puertos_cto`.`Ocupado`)";
$proto22["m_srcTableName"] = "Mapa Puertos Libres";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "puertos_libres";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$proto26=array();
$proto26["m_functiontype"] = "SQLF_CUSTOM";
$proto26["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "`ctos`.`Localidad`"
));

$proto26["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'\\n'"
));

$proto26["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "`ctos`.`Cable`"
));

$proto26["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'\\n'"
));

$proto26["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "`ctos`.`Spliter`"
));

$proto26["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'\\n'"
));

$proto26["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "`ctos`.`Cto`"
));

$proto26["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'\\n'"
));

$proto26["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'Puertos Libres'"
));

$proto26["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto26["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "COUNT(`puertos_cto`.`Ocupado`)"
));

$proto26["m_arguments"][]=$obj;
$proto26["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto26);

$proto25["m_sql"] = "CONCAT(`ctos`.`Localidad`, '\\n', `ctos`.`Cable`, '\\n', `ctos`.`Spliter`, '\\n', `ctos`.`Cto`, '\\n', 'Puertos Libres', ' ', COUNT(`puertos_cto`.`Ocupado`))";
$proto25["m_srcTableName"] = "Mapa Puertos Libres";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "concatenado";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "ctos";
$proto39["m_srcTableName"] = "Mapa Puertos Libres";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "id_Ctos";
$proto39["m_columns"][] = "Cto";
$proto39["m_columns"][] = "Latitud";
$proto39["m_columns"][] = "Longitud";
$proto39["m_columns"][] = "Spliter";
$proto39["m_columns"][] = "Cable";
$proto39["m_columns"][] = "Localidad";
$proto39["m_columns"][] = "Lat";
$proto39["m_columns"][] = "Lng";
$proto39["m_columns"][] = "Ubicacion";
$proto39["m_columns"][] = "id_spliter";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "`ctos`";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "Mapa Puertos Libres";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
												$proto42=array();
$proto42["m_link"] = "SQLL_INNERJOIN";
			$proto43=array();
$proto43["m_strName"] = "puertos_cto";
$proto43["m_srcTableName"] = "Mapa Puertos Libres";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "Id_puertos";
$proto43["m_columns"][] = "Puerto";
$proto43["m_columns"][] = "Cto";
$proto43["m_columns"][] = "Spliter";
$proto43["m_columns"][] = "Cable";
$proto43["m_columns"][] = "Localidad";
$proto43["m_columns"][] = "Cedula";
$proto43["m_columns"][] = "Activo";
$proto43["m_columns"][] = "Ocupado";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "INNER JOIN `puertos_cto` ON `ctos`.`Cto` = `puertos_cto`.`Cto` AND `ctos`.`Spliter` = `puertos_cto`.`Spliter` AND `ctos`.`Cable` = `puertos_cto`.`Cable` AND `ctos`.`Localidad` = `puertos_cto`.`Localidad`";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "Mapa Puertos Libres";
$proto44=array();
$proto44["m_sql"] = "`puertos_cto`.`Cto` = `ctos`.`Cto` AND `puertos_cto`.`Spliter` = `ctos`.`Spliter` AND `puertos_cto`.`Cable` = `ctos`.`Cable` AND `puertos_cto`.`Localidad` = `ctos`.`Localidad`";
$proto44["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "`puertos_cto`.`Cto` = `ctos`.`Cto` AND `puertos_cto`.`Spliter` = `ctos`.`Spliter` AND `puertos_cto`.`Cable` = `ctos`.`Cable` AND `puertos_cto`.`Localidad` = `ctos`.`Localidad`"
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
						$proto46=array();
$proto46["m_sql"] = "`ctos`.`Cto` = `puertos_cto`.`Cto`";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Cto",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa Puertos Libres"
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "= `puertos_cto`.`Cto`";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

			$proto44["m_contained"][]=$obj;
						$proto48=array();
$proto48["m_sql"] = "`ctos`.`Spliter` = `puertos_cto`.`Spliter`";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Spliter",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa Puertos Libres"
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "= `puertos_cto`.`Spliter`";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

			$proto44["m_contained"][]=$obj;
						$proto50=array();
$proto50["m_sql"] = "`ctos`.`Cable` = `puertos_cto`.`Cable`";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Cable",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa Puertos Libres"
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "= `puertos_cto`.`Cable`";
$proto50["m_havingmode"] = false;
$proto50["m_inBrackets"] = false;
$proto50["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto50);

			$proto44["m_contained"][]=$obj;
						$proto52=array();
$proto52["m_sql"] = "`ctos`.`Localidad` = `puertos_cto`.`Localidad`";
$proto52["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Localidad",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa Puertos Libres"
));

$proto52["m_column"]=$obj;
$proto52["m_contained"] = array();
$proto52["m_strCase"] = "= `puertos_cto`.`Localidad`";
$proto52["m_havingmode"] = false;
$proto52["m_inBrackets"] = false;
$proto52["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto52);

			$proto44["m_contained"][]=$obj;
						$proto54=array();
$proto54["m_sql"] = "`puertos_cto`.`Cto` = `ctos`.`Cto`";
$proto54["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Cto",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "Mapa Puertos Libres"
));

$proto54["m_column"]=$obj;
$proto54["m_contained"] = array();
$proto54["m_strCase"] = "= `ctos`.`Cto`";
$proto54["m_havingmode"] = false;
$proto54["m_inBrackets"] = false;
$proto54["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto54);

			$proto44["m_contained"][]=$obj;
						$proto56=array();
$proto56["m_sql"] = "`puertos_cto`.`Spliter` = `ctos`.`Spliter`";
$proto56["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Spliter",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "Mapa Puertos Libres"
));

$proto56["m_column"]=$obj;
$proto56["m_contained"] = array();
$proto56["m_strCase"] = "= `ctos`.`Spliter`";
$proto56["m_havingmode"] = false;
$proto56["m_inBrackets"] = false;
$proto56["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto56);

			$proto44["m_contained"][]=$obj;
						$proto58=array();
$proto58["m_sql"] = "`puertos_cto`.`Cable` = `ctos`.`Cable`";
$proto58["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Cable",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "Mapa Puertos Libres"
));

$proto58["m_column"]=$obj;
$proto58["m_contained"] = array();
$proto58["m_strCase"] = "= `ctos`.`Cable`";
$proto58["m_havingmode"] = false;
$proto58["m_inBrackets"] = false;
$proto58["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto58);

			$proto44["m_contained"][]=$obj;
						$proto60=array();
$proto60["m_sql"] = "`puertos_cto`.`Localidad` = `ctos`.`Localidad`";
$proto60["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Localidad",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "Mapa Puertos Libres"
));

$proto60["m_column"]=$obj;
$proto60["m_contained"] = array();
$proto60["m_strCase"] = "= `ctos`.`Localidad`";
$proto60["m_havingmode"] = false;
$proto60["m_inBrackets"] = false;
$proto60["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto60);

			$proto44["m_contained"][]=$obj;
$proto44["m_strCase"] = "";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto62=array();
						$obj = new SQLField(array(
	"m_strName" => "id_Ctos",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa Puertos Libres"
));

$proto62["m_column"]=$obj;
$obj = new SQLGroupByItem($proto62);

$proto0["m_groupby"][]=$obj;
												$proto64=array();
						$obj = new SQLField(array(
	"m_strName" => "Cto",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa Puertos Libres"
));

$proto64["m_column"]=$obj;
$obj = new SQLGroupByItem($proto64);

$proto0["m_groupby"][]=$obj;
												$proto66=array();
						$obj = new SQLField(array(
	"m_strName" => "Latitud",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa Puertos Libres"
));

$proto66["m_column"]=$obj;
$obj = new SQLGroupByItem($proto66);

$proto0["m_groupby"][]=$obj;
												$proto68=array();
						$obj = new SQLField(array(
	"m_strName" => "Longitud",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa Puertos Libres"
));

$proto68["m_column"]=$obj;
$obj = new SQLGroupByItem($proto68);

$proto0["m_groupby"][]=$obj;
												$proto70=array();
						$obj = new SQLField(array(
	"m_strName" => "Spliter",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa Puertos Libres"
));

$proto70["m_column"]=$obj;
$obj = new SQLGroupByItem($proto70);

$proto0["m_groupby"][]=$obj;
												$proto72=array();
						$obj = new SQLField(array(
	"m_strName" => "Cable",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa Puertos Libres"
));

$proto72["m_column"]=$obj;
$obj = new SQLGroupByItem($proto72);

$proto0["m_groupby"][]=$obj;
												$proto74=array();
						$obj = new SQLField(array(
	"m_strName" => "Localidad",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa Puertos Libres"
));

$proto74["m_column"]=$obj;
$obj = new SQLGroupByItem($proto74);

$proto0["m_groupby"][]=$obj;
												$proto76=array();
						$obj = new SQLField(array(
	"m_strName" => "Ubicacion",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa Puertos Libres"
));

$proto76["m_column"]=$obj;
$obj = new SQLGroupByItem($proto76);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto78=array();
						$obj = new SQLField(array(
	"m_strName" => "Localidad",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa Puertos Libres"
));

$proto78["m_column"]=$obj;
$proto78["m_bAsc"] = 1;
$proto78["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto78);

$proto0["m_orderby"][]=$obj;					
												$proto80=array();
						$obj = new SQLField(array(
	"m_strName" => "id_Ctos",
	"m_strTable" => "ctos",
	"m_srcTableName" => "Mapa Puertos Libres"
));

$proto80["m_column"]=$obj;
$proto80["m_bAsc"] = 1;
$proto80["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto80);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Mapa Puertos Libres";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mapa_puertos_libres = createSqlQuery_mapa_puertos_libres();


	
		;

										

$tdatamapa_puertos_libres[".sqlquery"] = $queryData_mapa_puertos_libres;



include_once(getabspath("include/mapa_puertos_libres_events.php"));
$tdatamapa_puertos_libres[".hasEvents"] = true;

?>