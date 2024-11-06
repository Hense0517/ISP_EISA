<?php
$tdatapuertos_olt = array();
$tdatapuertos_olt[".searchableFields"] = array();
$tdatapuertos_olt[".ShortName"] = "puertos_olt";
$tdatapuertos_olt[".OwnerID"] = "";
$tdatapuertos_olt[".OriginalTable"] = "puertos_olt";


$tdatapuertos_olt[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapuertos_olt[".originalPagesByType"] = $tdatapuertos_olt[".pagesByType"];
$tdatapuertos_olt[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapuertos_olt[".originalPages"] = $tdatapuertos_olt[".pages"];
$tdatapuertos_olt[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapuertos_olt[".originalDefaultPages"] = $tdatapuertos_olt[".defaultPages"];

//	field labels
$fieldLabelspuertos_olt = array();
$fieldToolTipspuertos_olt = array();
$pageTitlespuertos_olt = array();
$placeHolderspuertos_olt = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspuertos_olt["Spanish"] = array();
	$fieldToolTipspuertos_olt["Spanish"] = array();
	$placeHolderspuertos_olt["Spanish"] = array();
	$pageTitlespuertos_olt["Spanish"] = array();
	$fieldLabelspuertos_olt["Spanish"]["Id_puerto"] = "Id Puerto";
	$fieldToolTipspuertos_olt["Spanish"]["Id_puerto"] = "";
	$placeHolderspuertos_olt["Spanish"]["Id_puerto"] = "";
	$fieldLabelspuertos_olt["Spanish"]["tarjeta"] = "Tarjeta";
	$fieldToolTipspuertos_olt["Spanish"]["tarjeta"] = "";
	$placeHolderspuertos_olt["Spanish"]["tarjeta"] = "";
	$fieldLabelspuertos_olt["Spanish"]["localidad"] = "Localidad";
	$fieldToolTipspuertos_olt["Spanish"]["localidad"] = "";
	$placeHolderspuertos_olt["Spanish"]["localidad"] = "";
	$fieldLabelspuertos_olt["Spanish"]["cable"] = "Cable";
	$fieldToolTipspuertos_olt["Spanish"]["cable"] = "";
	$placeHolderspuertos_olt["Spanish"]["cable"] = "";
	$fieldLabelspuertos_olt["Spanish"]["spliter"] = "Spliter";
	$fieldToolTipspuertos_olt["Spanish"]["spliter"] = "";
	$placeHolderspuertos_olt["Spanish"]["spliter"] = "";
	$fieldLabelspuertos_olt["Spanish"]["puerto"] = "Puerto";
	$fieldToolTipspuertos_olt["Spanish"]["puerto"] = "";
	$placeHolderspuertos_olt["Spanish"]["puerto"] = "";
	$fieldLabelspuertos_olt["Spanish"]["Odf"] = "Odf";
	$fieldToolTipspuertos_olt["Spanish"]["Odf"] = "";
	$placeHolderspuertos_olt["Spanish"]["Odf"] = "";
	$fieldLabelspuertos_olt["Spanish"]["Bandeja"] = "Bandeja";
	$fieldToolTipspuertos_olt["Spanish"]["Bandeja"] = "";
	$placeHolderspuertos_olt["Spanish"]["Bandeja"] = "";
	$fieldLabelspuertos_olt["Spanish"]["Puerto_del_odf"] = "Puerto Del Odf";
	$fieldToolTipspuertos_olt["Spanish"]["Puerto_del_odf"] = "";
	$placeHolderspuertos_olt["Spanish"]["Puerto_del_odf"] = "";
	$fieldLabelspuertos_olt["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipspuertos_olt["Spanish"]["Observaciones"] = "";
	$placeHolderspuertos_olt["Spanish"]["Observaciones"] = "";
	$fieldLabelspuertos_olt["Spanish"]["Barrio"] = "Barrio";
	$fieldToolTipspuertos_olt["Spanish"]["Barrio"] = "";
	$placeHolderspuertos_olt["Spanish"]["Barrio"] = "";
	$fieldLabelspuertos_olt["Spanish"]["Fin_de_Fibra"] = "Fin De Fibra";
	$fieldToolTipspuertos_olt["Spanish"]["Fin_de_Fibra"] = "";
	$placeHolderspuertos_olt["Spanish"]["Fin_de_Fibra"] = "";
	if (count($fieldToolTipspuertos_olt["Spanish"]))
		$tdatapuertos_olt[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspuertos_olt["English"] = array();
	$fieldToolTipspuertos_olt["English"] = array();
	$placeHolderspuertos_olt["English"] = array();
	$pageTitlespuertos_olt["English"] = array();
	$fieldLabelspuertos_olt["English"]["Id_puerto"] = "Id Puerto";
	$fieldToolTipspuertos_olt["English"]["Id_puerto"] = "";
	$placeHolderspuertos_olt["English"]["Id_puerto"] = "";
	$fieldLabelspuertos_olt["English"]["tarjeta"] = "Tarjeta";
	$fieldToolTipspuertos_olt["English"]["tarjeta"] = "";
	$placeHolderspuertos_olt["English"]["tarjeta"] = "";
	$fieldLabelspuertos_olt["English"]["localidad"] = "Localidad";
	$fieldToolTipspuertos_olt["English"]["localidad"] = "";
	$placeHolderspuertos_olt["English"]["localidad"] = "";
	$fieldLabelspuertos_olt["English"]["cable"] = "Cable";
	$fieldToolTipspuertos_olt["English"]["cable"] = "";
	$placeHolderspuertos_olt["English"]["cable"] = "";
	$fieldLabelspuertos_olt["English"]["spliter"] = "Spliter";
	$fieldToolTipspuertos_olt["English"]["spliter"] = "";
	$placeHolderspuertos_olt["English"]["spliter"] = "";
	$fieldLabelspuertos_olt["English"]["puerto"] = "Puerto";
	$fieldToolTipspuertos_olt["English"]["puerto"] = "";
	$placeHolderspuertos_olt["English"]["puerto"] = "";
	$fieldLabelspuertos_olt["English"]["Odf"] = "Odf";
	$fieldToolTipspuertos_olt["English"]["Odf"] = "";
	$placeHolderspuertos_olt["English"]["Odf"] = "";
	$fieldLabelspuertos_olt["English"]["Bandeja"] = "Bandeja";
	$fieldToolTipspuertos_olt["English"]["Bandeja"] = "";
	$placeHolderspuertos_olt["English"]["Bandeja"] = "";
	$fieldLabelspuertos_olt["English"]["Puerto_del_odf"] = "Puerto Del Odf";
	$fieldToolTipspuertos_olt["English"]["Puerto_del_odf"] = "";
	$placeHolderspuertos_olt["English"]["Puerto_del_odf"] = "";
	$fieldLabelspuertos_olt["English"]["Observaciones"] = "Observaciones";
	$fieldToolTipspuertos_olt["English"]["Observaciones"] = "";
	$placeHolderspuertos_olt["English"]["Observaciones"] = "";
	$fieldLabelspuertos_olt["English"]["Barrio"] = "Barrio";
	$fieldToolTipspuertos_olt["English"]["Barrio"] = "";
	$placeHolderspuertos_olt["English"]["Barrio"] = "";
	$fieldLabelspuertos_olt["English"]["Fin_de_Fibra"] = "Fin De Fibra";
	$fieldToolTipspuertos_olt["English"]["Fin_de_Fibra"] = "";
	$placeHolderspuertos_olt["English"]["Fin_de_Fibra"] = "";
	if (count($fieldToolTipspuertos_olt["English"]))
		$tdatapuertos_olt[".isUseToolTips"] = true;
}


	$tdatapuertos_olt[".NCSearch"] = true;



$tdatapuertos_olt[".shortTableName"] = "puertos_olt";
$tdatapuertos_olt[".nSecOptions"] = 0;

$tdatapuertos_olt[".mainTableOwnerID"] = "";
$tdatapuertos_olt[".entityType"] = 0;
$tdatapuertos_olt[".connId"] = "isp_eisa_at_localhost";


$tdatapuertos_olt[".strOriginalTableName"] = "puertos_olt";

	



$tdatapuertos_olt[".showAddInPopup"] = false;

$tdatapuertos_olt[".showEditInPopup"] = false;

$tdatapuertos_olt[".showViewInPopup"] = false;

$tdatapuertos_olt[".listAjax"] = false;
//	temporary
//$tdatapuertos_olt[".listAjax"] = false;

	$tdatapuertos_olt[".audit"] = false;

	$tdatapuertos_olt[".locking"] = false;


$pages = $tdatapuertos_olt[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapuertos_olt[".edit"] = true;
	$tdatapuertos_olt[".afterEditAction"] = 1;
	$tdatapuertos_olt[".closePopupAfterEdit"] = 1;
	$tdatapuertos_olt[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapuertos_olt[".add"] = true;
$tdatapuertos_olt[".afterAddAction"] = 1;
$tdatapuertos_olt[".closePopupAfterAdd"] = 1;
$tdatapuertos_olt[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapuertos_olt[".list"] = true;
}



$tdatapuertos_olt[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapuertos_olt[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapuertos_olt[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapuertos_olt[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapuertos_olt[".printFriendly"] = true;
}



$tdatapuertos_olt[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapuertos_olt[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapuertos_olt[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapuertos_olt[".isUseAjaxSuggest"] = true;



						

$tdatapuertos_olt[".ajaxCodeSnippetAdded"] = false;

$tdatapuertos_olt[".buttonsAdded"] = false;

$tdatapuertos_olt[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapuertos_olt[".isUseTimeForSearch"] = false;


$tdatapuertos_olt[".badgeColor"] = "e67349";


$tdatapuertos_olt[".allSearchFields"] = array();
$tdatapuertos_olt[".filterFields"] = array();
$tdatapuertos_olt[".requiredSearchFields"] = array();

$tdatapuertos_olt[".googleLikeFields"] = array();
$tdatapuertos_olt[".googleLikeFields"][] = "tarjeta";
$tdatapuertos_olt[".googleLikeFields"][] = "localidad";
$tdatapuertos_olt[".googleLikeFields"][] = "cable";
$tdatapuertos_olt[".googleLikeFields"][] = "spliter";
$tdatapuertos_olt[".googleLikeFields"][] = "puerto";
$tdatapuertos_olt[".googleLikeFields"][] = "Odf";
$tdatapuertos_olt[".googleLikeFields"][] = "Bandeja";
$tdatapuertos_olt[".googleLikeFields"][] = "Puerto_del_odf";
$tdatapuertos_olt[".googleLikeFields"][] = "Observaciones";
$tdatapuertos_olt[".googleLikeFields"][] = "Barrio";
$tdatapuertos_olt[".googleLikeFields"][] = "Fin_de_Fibra";



$tdatapuertos_olt[".tableType"] = "list";

$tdatapuertos_olt[".printerPageOrientation"] = 0;
$tdatapuertos_olt[".nPrinterPageScale"] = 100;

$tdatapuertos_olt[".nPrinterSplitRecords"] = 40;

$tdatapuertos_olt[".geocodingEnabled"] = false;










$tdatapuertos_olt[".pageSize"] = 20;

$tdatapuertos_olt[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapuertos_olt[".strOrderBy"] = $tstrOrderBy;

$tdatapuertos_olt[".orderindexes"] = array();


$tdatapuertos_olt[".sqlHead"] = "SELECT `Id_puerto`,  `Id_Tarjteta` AS `tarjeta`,  `Id_localidad` AS `localidad`,  `Id_cable` AS `cable`,  `Id_spliter` AS `spliter`,  `Numero_del_Puerto` AS `puerto`,  `Odf`,  `Bandeja`,  `Puerto_del_odf`,  `Observaciones`,  `Barrio`,  `Fin_de_Fibra`";
$tdatapuertos_olt[".sqlFrom"] = "FROM `puertos_olt`";
$tdatapuertos_olt[".sqlWhereExpr"] = "";
$tdatapuertos_olt[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapuertos_olt[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapuertos_olt[".arrGroupsPerPage"] = $arrGPP;

$tdatapuertos_olt[".highlightSearchResults"] = true;

$tableKeyspuertos_olt = array();
$tableKeyspuertos_olt[] = "Id_puerto";
$tdatapuertos_olt[".Keys"] = $tableKeyspuertos_olt;


$tdatapuertos_olt[".hideMobileList"] = array();




//	Id_puerto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id_puerto";
	$fdata["GoodName"] = "Id_puerto";
	$fdata["ownerTable"] = "puertos_olt";
	$fdata["Label"] = GetFieldLabel("puertos_olt","Id_puerto");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "Id_puerto";

		$fdata["sourceSingle"] = "Id_puerto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Id_puerto`";

	
	
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


	$tdatapuertos_olt["Id_puerto"] = $fdata;
		$tdatapuertos_olt[".searchableFields"][] = "Id_puerto";
//	tarjeta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tarjeta";
	$fdata["GoodName"] = "tarjeta";
	$fdata["ownerTable"] = "puertos_olt";
	$fdata["Label"] = GetFieldLabel("puertos_olt","tarjeta");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Id_Tarjteta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Id_Tarjteta`";

	
	
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
	$edata["LookupTable"] = "tarjeta_olt";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Id_Tarjetas";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Numero_Tarjeta";

	

	
	$edata["LookupOrderBy"] = "Id_Tarjetas";

	
	
	
	

	
	
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


	$tdatapuertos_olt["tarjeta"] = $fdata;
		$tdatapuertos_olt[".searchableFields"][] = "tarjeta";
//	localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "localidad";
	$fdata["GoodName"] = "localidad";
	$fdata["ownerTable"] = "puertos_olt";
	$fdata["Label"] = GetFieldLabel("puertos_olt","localidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Id_localidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Id_localidad`";

	
	
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

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "cable";

	
	
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


	$tdatapuertos_olt["localidad"] = $fdata;
		$tdatapuertos_olt[".searchableFields"][] = "localidad";
//	cable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cable";
	$fdata["GoodName"] = "cable";
	$fdata["ownerTable"] = "puertos_olt";
	$fdata["Label"] = GetFieldLabel("puertos_olt","cable");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Id_cable";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Id_cable`";

	
	
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

	
		
	$edata["LinkField"] = "id_cables";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "cable";

	

	
	$edata["LookupOrderBy"] = "id_cables";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "localidad", "lookup" => "id_localidad" );

	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "spliter";

	
	
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


	$tdatapuertos_olt["cable"] = $fdata;
		$tdatapuertos_olt[".searchableFields"][] = "cable";
//	spliter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "spliter";
	$fdata["GoodName"] = "spliter";
	$fdata["ownerTable"] = "puertos_olt";
	$fdata["Label"] = GetFieldLabel("puertos_olt","spliter");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Id_spliter";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Id_spliter`";

	
	
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

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "cable", "lookup" => "id_cable" );

	
	

	
	
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


	$tdatapuertos_olt["spliter"] = $fdata;
		$tdatapuertos_olt[".searchableFields"][] = "spliter";
//	puerto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "puerto";
	$fdata["GoodName"] = "puerto";
	$fdata["ownerTable"] = "puertos_olt";
	$fdata["Label"] = GetFieldLabel("puertos_olt","puerto");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Numero_del_Puerto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Numero_del_Puerto`";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatapuertos_olt["puerto"] = $fdata;
		$tdatapuertos_olt[".searchableFields"][] = "puerto";
//	Odf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Odf";
	$fdata["GoodName"] = "Odf";
	$fdata["ownerTable"] = "puertos_olt";
	$fdata["Label"] = GetFieldLabel("puertos_olt","Odf");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Odf";

		$fdata["sourceSingle"] = "Odf";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Odf`";

	
	
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


	$tdatapuertos_olt["Odf"] = $fdata;
		$tdatapuertos_olt[".searchableFields"][] = "Odf";
//	Bandeja
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Bandeja";
	$fdata["GoodName"] = "Bandeja";
	$fdata["ownerTable"] = "puertos_olt";
	$fdata["Label"] = GetFieldLabel("puertos_olt","Bandeja");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Bandeja";

		$fdata["sourceSingle"] = "Bandeja";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Bandeja`";

	
	
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


	$tdatapuertos_olt["Bandeja"] = $fdata;
		$tdatapuertos_olt[".searchableFields"][] = "Bandeja";
//	Puerto_del_odf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Puerto_del_odf";
	$fdata["GoodName"] = "Puerto_del_odf";
	$fdata["ownerTable"] = "puertos_olt";
	$fdata["Label"] = GetFieldLabel("puertos_olt","Puerto_del_odf");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Puerto_del_odf";

		$fdata["sourceSingle"] = "Puerto_del_odf";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Puerto_del_odf`";

	
	
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
	$edata["LookupValues"][] = "10";
	$edata["LookupValues"][] = "11";
	$edata["LookupValues"][] = "12";
	$edata["LookupValues"][] = "13";
	$edata["LookupValues"][] = "14";
	$edata["LookupValues"][] = "15";
	$edata["LookupValues"][] = "16";
	$edata["LookupValues"][] = "17";
	$edata["LookupValues"][] = "18";
	$edata["LookupValues"][] = "19";
	$edata["LookupValues"][] = "20";
	$edata["LookupValues"][] = "21";
	$edata["LookupValues"][] = "22";
	$edata["LookupValues"][] = "23";
	$edata["LookupValues"][] = "24";

	
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


	$tdatapuertos_olt["Puerto_del_odf"] = $fdata;
		$tdatapuertos_olt[".searchableFields"][] = "Puerto_del_odf";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "puertos_olt";
	$fdata["Label"] = GetFieldLabel("puertos_olt","Observaciones");
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
			$edata["EditParams"].= " maxlength=500";

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


	$tdatapuertos_olt["Observaciones"] = $fdata;
		$tdatapuertos_olt[".searchableFields"][] = "Observaciones";
//	Barrio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Barrio";
	$fdata["GoodName"] = "Barrio";
	$fdata["ownerTable"] = "puertos_olt";
	$fdata["Label"] = GetFieldLabel("puertos_olt","Barrio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Barrio";

		$fdata["sourceSingle"] = "Barrio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Barrio`";

	
	
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
			$edata["EditParams"].= " maxlength=500";

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


	$tdatapuertos_olt["Barrio"] = $fdata;
		$tdatapuertos_olt[".searchableFields"][] = "Barrio";
//	Fin_de_Fibra
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Fin_de_Fibra";
	$fdata["GoodName"] = "Fin_de_Fibra";
	$fdata["ownerTable"] = "puertos_olt";
	$fdata["Label"] = GetFieldLabel("puertos_olt","Fin_de_Fibra");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Fin_de_Fibra";

		$fdata["sourceSingle"] = "Fin_de_Fibra";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Fin_de_Fibra`";

	
	
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


	$tdatapuertos_olt["Fin_de_Fibra"] = $fdata;
		$tdatapuertos_olt[".searchableFields"][] = "Fin_de_Fibra";


$tables_data["puertos_olt"]=&$tdatapuertos_olt;
$field_labels["puertos_olt"] = &$fieldLabelspuertos_olt;
$fieldToolTips["puertos_olt"] = &$fieldToolTipspuertos_olt;
$placeHolders["puertos_olt"] = &$placeHolderspuertos_olt;
$page_titles["puertos_olt"] = &$pageTitlespuertos_olt;


changeTextControlsToDate( "puertos_olt" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["puertos_olt"] = array();
//	spliters
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="spliters";
		$detailsParam["dOriginalTable"] = "spliters";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "spliters";
	$detailsParam["dCaptionTable"] = GetTableCaption("spliters");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["puertos_olt"][$dIndex] = $detailsParam;

	
		$detailsTablesData["puertos_olt"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["puertos_olt"][$dIndex]["masterKeys"][]="spliter";

				$detailsTablesData["puertos_olt"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["puertos_olt"][$dIndex]["detailKeys"][]="id_spliters";
//	Clientes_por_puerto
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Clientes_por_puerto";
		$detailsParam["dOriginalTable"] = "puertos_cto";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "clientes_por_puerto";
	$detailsParam["dCaptionTable"] = GetTableCaption("Clientes_por_puerto");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["puertos_olt"][$dIndex] = $detailsParam;

	
		$detailsTablesData["puertos_olt"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["puertos_olt"][$dIndex]["masterKeys"][]="spliter";

				$detailsTablesData["puertos_olt"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["puertos_olt"][$dIndex]["detailKeys"][]="id_spliters";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["puertos_olt"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="tarjeta_olt";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tarjeta_olt";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tarjeta_olt";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["puertos_olt"][0] = $masterParams;
				$masterTablesData["puertos_olt"][0]["masterKeys"] = array();
	$masterTablesData["puertos_olt"][0]["masterKeys"][]="Id_Tarjetas";
				$masterTablesData["puertos_olt"][0]["detailKeys"] = array();
	$masterTablesData["puertos_olt"][0]["detailKeys"][]="tarjeta";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_puertos_olt()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`Id_puerto`,  `Id_Tarjteta` AS `tarjeta`,  `Id_localidad` AS `localidad`,  `Id_cable` AS `cable`,  `Id_spliter` AS `spliter`,  `Numero_del_Puerto` AS `puerto`,  `Odf`,  `Bandeja`,  `Puerto_del_odf`,  `Observaciones`,  `Barrio`,  `Fin_de_Fibra`";
$proto0["m_strFrom"] = "FROM `puertos_olt`";
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
	"m_strName" => "Id_puerto",
	"m_strTable" => "puertos_olt",
	"m_srcTableName" => "puertos_olt"
));

$proto6["m_sql"] = "`Id_puerto`";
$proto6["m_srcTableName"] = "puertos_olt";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Id_Tarjteta",
	"m_strTable" => "puertos_olt",
	"m_srcTableName" => "puertos_olt"
));

$proto8["m_sql"] = "`Id_Tarjteta`";
$proto8["m_srcTableName"] = "puertos_olt";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "tarjeta";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Id_localidad",
	"m_strTable" => "puertos_olt",
	"m_srcTableName" => "puertos_olt"
));

$proto10["m_sql"] = "`Id_localidad`";
$proto10["m_srcTableName"] = "puertos_olt";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "localidad";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Id_cable",
	"m_strTable" => "puertos_olt",
	"m_srcTableName" => "puertos_olt"
));

$proto12["m_sql"] = "`Id_cable`";
$proto12["m_srcTableName"] = "puertos_olt";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "cable";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Id_spliter",
	"m_strTable" => "puertos_olt",
	"m_srcTableName" => "puertos_olt"
));

$proto14["m_sql"] = "`Id_spliter`";
$proto14["m_srcTableName"] = "puertos_olt";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "spliter";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero_del_Puerto",
	"m_strTable" => "puertos_olt",
	"m_srcTableName" => "puertos_olt"
));

$proto16["m_sql"] = "`Numero_del_Puerto`";
$proto16["m_srcTableName"] = "puertos_olt";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "puerto";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Odf",
	"m_strTable" => "puertos_olt",
	"m_srcTableName" => "puertos_olt"
));

$proto18["m_sql"] = "`Odf`";
$proto18["m_srcTableName"] = "puertos_olt";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Bandeja",
	"m_strTable" => "puertos_olt",
	"m_srcTableName" => "puertos_olt"
));

$proto20["m_sql"] = "`Bandeja`";
$proto20["m_srcTableName"] = "puertos_olt";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Puerto_del_odf",
	"m_strTable" => "puertos_olt",
	"m_srcTableName" => "puertos_olt"
));

$proto22["m_sql"] = "`Puerto_del_odf`";
$proto22["m_srcTableName"] = "puertos_olt";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "puertos_olt",
	"m_srcTableName" => "puertos_olt"
));

$proto24["m_sql"] = "`Observaciones`";
$proto24["m_srcTableName"] = "puertos_olt";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Barrio",
	"m_strTable" => "puertos_olt",
	"m_srcTableName" => "puertos_olt"
));

$proto26["m_sql"] = "`Barrio`";
$proto26["m_srcTableName"] = "puertos_olt";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Fin_de_Fibra",
	"m_strTable" => "puertos_olt",
	"m_srcTableName" => "puertos_olt"
));

$proto28["m_sql"] = "`Fin_de_Fibra`";
$proto28["m_srcTableName"] = "puertos_olt";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "puertos_olt";
$proto31["m_srcTableName"] = "puertos_olt";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "Id_puerto";
$proto31["m_columns"][] = "Id_Tarjteta";
$proto31["m_columns"][] = "Id_localidad";
$proto31["m_columns"][] = "Id_cable";
$proto31["m_columns"][] = "Id_spliter";
$proto31["m_columns"][] = "Numero_del_Puerto";
$proto31["m_columns"][] = "Odf";
$proto31["m_columns"][] = "Bandeja";
$proto31["m_columns"][] = "Puerto_del_odf";
$proto31["m_columns"][] = "Observaciones";
$proto31["m_columns"][] = "Barrio";
$proto31["m_columns"][] = "Fin_de_Fibra";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "`puertos_olt`";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "puertos_olt";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="puertos_olt";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_puertos_olt = createSqlQuery_puertos_olt();


	
										;

												

$tdatapuertos_olt[".sqlquery"] = $queryData_puertos_olt;



$tdatapuertos_olt[".hasEvents"] = false;

?>