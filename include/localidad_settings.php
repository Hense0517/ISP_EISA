<?php
$tdatalocalidad = array();
$tdatalocalidad[".searchableFields"] = array();
$tdatalocalidad[".ShortName"] = "localidad";
$tdatalocalidad[".OwnerID"] = "";
$tdatalocalidad[".OriginalTable"] = "localidad";


$tdatalocalidad[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatalocalidad[".originalPagesByType"] = $tdatalocalidad[".pagesByType"];
$tdatalocalidad[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatalocalidad[".originalPages"] = $tdatalocalidad[".pages"];
$tdatalocalidad[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatalocalidad[".originalDefaultPages"] = $tdatalocalidad[".defaultPages"];

//	field labels
$fieldLabelslocalidad = array();
$fieldToolTipslocalidad = array();
$pageTitleslocalidad = array();
$placeHolderslocalidad = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelslocalidad["Spanish"] = array();
	$fieldToolTipslocalidad["Spanish"] = array();
	$placeHolderslocalidad["Spanish"] = array();
	$pageTitleslocalidad["Spanish"] = array();
	$fieldLabelslocalidad["Spanish"]["Localidad"] = "Localidad";
	$fieldToolTipslocalidad["Spanish"]["Localidad"] = "";
	$placeHolderslocalidad["Spanish"]["Localidad"] = "";
	$fieldLabelslocalidad["Spanish"]["id_localidad"] = "Id Localidad";
	$fieldToolTipslocalidad["Spanish"]["id_localidad"] = "";
	$placeHolderslocalidad["Spanish"]["id_localidad"] = "";
	$fieldLabelslocalidad["Spanish"]["Tipo_Olt"] = "Tipo Olt";
	$fieldToolTipslocalidad["Spanish"]["Tipo_Olt"] = "";
	$placeHolderslocalidad["Spanish"]["Tipo_Olt"] = "";
	$fieldLabelslocalidad["Spanish"]["Serial_Olt"] = "Serial Olt";
	$fieldToolTipslocalidad["Spanish"]["Serial_Olt"] = "";
	$placeHolderslocalidad["Spanish"]["Serial_Olt"] = "";
	$fieldLabelslocalidad["Spanish"]["Tipo_Mikrotik"] = "Tipo Mikrotik";
	$fieldToolTipslocalidad["Spanish"]["Tipo_Mikrotik"] = "";
	$placeHolderslocalidad["Spanish"]["Tipo_Mikrotik"] = "";
	$fieldLabelslocalidad["Spanish"]["Serial_Mikrotik"] = "Serial Mikrotik";
	$fieldToolTipslocalidad["Spanish"]["Serial_Mikrotik"] = "";
	$placeHolderslocalidad["Spanish"]["Serial_Mikrotik"] = "";
	$fieldLabelslocalidad["Spanish"]["Serial_Ont_Prueba"] = "Serial Ont Prueba";
	$fieldToolTipslocalidad["Spanish"]["Serial_Ont_Prueba"] = "";
	$placeHolderslocalidad["Spanish"]["Serial_Ont_Prueba"] = "";
	$fieldLabelslocalidad["Spanish"]["Serial_Raspberry"] = "Serial Raspberry";
	$fieldToolTipslocalidad["Spanish"]["Serial_Raspberry"] = "";
	$placeHolderslocalidad["Spanish"]["Serial_Raspberry"] = "";
	$fieldLabelslocalidad["Spanish"]["Serial_Camara"] = "Serial Camara";
	$fieldToolTipslocalidad["Spanish"]["Serial_Camara"] = "";
	$placeHolderslocalidad["Spanish"]["Serial_Camara"] = "";
	$fieldLabelslocalidad["Spanish"]["Nombre_del_custodio"] = "Nombre Del Custodio";
	$fieldToolTipslocalidad["Spanish"]["Nombre_del_custodio"] = "";
	$placeHolderslocalidad["Spanish"]["Nombre_del_custodio"] = "";
	$fieldLabelslocalidad["Spanish"]["Telefono_del_custodio"] = "Telefono Del Custodio";
	$fieldToolTipslocalidad["Spanish"]["Telefono_del_custodio"] = "";
	$placeHolderslocalidad["Spanish"]["Telefono_del_custodio"] = "";
	$fieldLabelslocalidad["Spanish"]["Contrato_de_energia"] = "Contrato De Energia";
	$fieldToolTipslocalidad["Spanish"]["Contrato_de_energia"] = "";
	$placeHolderslocalidad["Spanish"]["Contrato_de_energia"] = "";
	$fieldLabelslocalidad["Spanish"]["Latitud"] = "Latitud";
	$fieldToolTipslocalidad["Spanish"]["Latitud"] = "";
	$placeHolderslocalidad["Spanish"]["Latitud"] = "";
	$fieldLabelslocalidad["Spanish"]["Longitud"] = "Longitud";
	$fieldToolTipslocalidad["Spanish"]["Longitud"] = "";
	$placeHolderslocalidad["Spanish"]["Longitud"] = "";
	$fieldLabelslocalidad["Spanish"]["Mapa"] = "Mapa";
	$fieldToolTipslocalidad["Spanish"]["Mapa"] = "";
	$placeHolderslocalidad["Spanish"]["Mapa"] = "";
	$fieldLabelslocalidad["Spanish"]["Direccion"] = "Direccion";
	$fieldToolTipslocalidad["Spanish"]["Direccion"] = "";
	$placeHolderslocalidad["Spanish"]["Direccion"] = "";
	$fieldLabelslocalidad["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipslocalidad["Spanish"]["Observaciones"] = "";
	$placeHolderslocalidad["Spanish"]["Observaciones"] = "";
	$fieldLabelslocalidad["Spanish"]["Foto"] = "Foto";
	$fieldToolTipslocalidad["Spanish"]["Foto"] = "";
	$placeHolderslocalidad["Spanish"]["Foto"] = "";
	$fieldLabelslocalidad["Spanish"]["qr"] = "Qr";
	$fieldToolTipslocalidad["Spanish"]["qr"] = "";
	$placeHolderslocalidad["Spanish"]["qr"] = "";
	if (count($fieldToolTipslocalidad["Spanish"]))
		$tdatalocalidad[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslocalidad["English"] = array();
	$fieldToolTipslocalidad["English"] = array();
	$placeHolderslocalidad["English"] = array();
	$pageTitleslocalidad["English"] = array();
	$fieldLabelslocalidad["English"]["id_localidad"] = "Id Localidad";
	$fieldToolTipslocalidad["English"]["id_localidad"] = "";
	$placeHolderslocalidad["English"]["id_localidad"] = "";
	$fieldLabelslocalidad["English"]["Localidad"] = "Localidad";
	$fieldToolTipslocalidad["English"]["Localidad"] = "";
	$placeHolderslocalidad["English"]["Localidad"] = "";
	$fieldLabelslocalidad["English"]["Tipo_Olt"] = "Tipo Olt";
	$fieldToolTipslocalidad["English"]["Tipo_Olt"] = "";
	$placeHolderslocalidad["English"]["Tipo_Olt"] = "";
	$fieldLabelslocalidad["English"]["Serial_Olt"] = "Serial Olt";
	$fieldToolTipslocalidad["English"]["Serial_Olt"] = "";
	$placeHolderslocalidad["English"]["Serial_Olt"] = "";
	$fieldLabelslocalidad["English"]["Tipo_Mikrotik"] = "Tipo Mikrotik";
	$fieldToolTipslocalidad["English"]["Tipo_Mikrotik"] = "";
	$placeHolderslocalidad["English"]["Tipo_Mikrotik"] = "";
	$fieldLabelslocalidad["English"]["Serial_Mikrotik"] = "Serial Mikrotik";
	$fieldToolTipslocalidad["English"]["Serial_Mikrotik"] = "";
	$placeHolderslocalidad["English"]["Serial_Mikrotik"] = "";
	$fieldLabelslocalidad["English"]["Serial_Ont_Prueba"] = "Serial Ont Prueba";
	$fieldToolTipslocalidad["English"]["Serial_Ont_Prueba"] = "";
	$placeHolderslocalidad["English"]["Serial_Ont_Prueba"] = "";
	$fieldLabelslocalidad["English"]["Serial_Raspberry"] = "Serial Raspberry";
	$fieldToolTipslocalidad["English"]["Serial_Raspberry"] = "";
	$placeHolderslocalidad["English"]["Serial_Raspberry"] = "";
	$fieldLabelslocalidad["English"]["Serial_Camara"] = "Serial Camara";
	$fieldToolTipslocalidad["English"]["Serial_Camara"] = "";
	$placeHolderslocalidad["English"]["Serial_Camara"] = "";
	$fieldLabelslocalidad["English"]["Nombre_del_custodio"] = "Nombre Del Custodio";
	$fieldToolTipslocalidad["English"]["Nombre_del_custodio"] = "";
	$placeHolderslocalidad["English"]["Nombre_del_custodio"] = "";
	$fieldLabelslocalidad["English"]["Telefono_del_custodio"] = "Telefono Del Custodio";
	$fieldToolTipslocalidad["English"]["Telefono_del_custodio"] = "";
	$placeHolderslocalidad["English"]["Telefono_del_custodio"] = "";
	$fieldLabelslocalidad["English"]["Contrato_de_energia"] = "Contrato De Energia";
	$fieldToolTipslocalidad["English"]["Contrato_de_energia"] = "";
	$placeHolderslocalidad["English"]["Contrato_de_energia"] = "";
	$fieldLabelslocalidad["English"]["Latitud"] = "Latitud";
	$fieldToolTipslocalidad["English"]["Latitud"] = "";
	$placeHolderslocalidad["English"]["Latitud"] = "";
	$fieldLabelslocalidad["English"]["Longitud"] = "Longitud";
	$fieldToolTipslocalidad["English"]["Longitud"] = "";
	$placeHolderslocalidad["English"]["Longitud"] = "";
	$fieldLabelslocalidad["English"]["Mapa"] = "Mapa";
	$fieldToolTipslocalidad["English"]["Mapa"] = "";
	$placeHolderslocalidad["English"]["Mapa"] = "";
	$fieldLabelslocalidad["English"]["Direccion"] = "Direccion";
	$fieldToolTipslocalidad["English"]["Direccion"] = "";
	$placeHolderslocalidad["English"]["Direccion"] = "";
	$fieldLabelslocalidad["English"]["Observaciones"] = "Observaciones";
	$fieldToolTipslocalidad["English"]["Observaciones"] = "";
	$placeHolderslocalidad["English"]["Observaciones"] = "";
	$fieldLabelslocalidad["English"]["Foto"] = "Foto";
	$fieldToolTipslocalidad["English"]["Foto"] = "";
	$placeHolderslocalidad["English"]["Foto"] = "";
	$fieldLabelslocalidad["English"]["qr"] = "Qr";
	$fieldToolTipslocalidad["English"]["qr"] = "";
	$placeHolderslocalidad["English"]["qr"] = "";
	if (count($fieldToolTipslocalidad["English"]))
		$tdatalocalidad[".isUseToolTips"] = true;
}


	$tdatalocalidad[".NCSearch"] = true;



$tdatalocalidad[".shortTableName"] = "localidad";
$tdatalocalidad[".nSecOptions"] = 0;

$tdatalocalidad[".mainTableOwnerID"] = "";
$tdatalocalidad[".entityType"] = 0;
$tdatalocalidad[".connId"] = "isp_eisa_at_localhost";


$tdatalocalidad[".strOriginalTableName"] = "localidad";

	



$tdatalocalidad[".showAddInPopup"] = false;

$tdatalocalidad[".showEditInPopup"] = false;

$tdatalocalidad[".showViewInPopup"] = false;

$tdatalocalidad[".listAjax"] = false;
//	temporary
//$tdatalocalidad[".listAjax"] = false;

	$tdatalocalidad[".audit"] = false;

	$tdatalocalidad[".locking"] = false;


$pages = $tdatalocalidad[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalocalidad[".edit"] = true;
	$tdatalocalidad[".afterEditAction"] = 1;
	$tdatalocalidad[".closePopupAfterEdit"] = 1;
	$tdatalocalidad[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalocalidad[".add"] = true;
$tdatalocalidad[".afterAddAction"] = 1;
$tdatalocalidad[".closePopupAfterAdd"] = 1;
$tdatalocalidad[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalocalidad[".list"] = true;
}



$tdatalocalidad[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalocalidad[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalocalidad[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalocalidad[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalocalidad[".printFriendly"] = true;
}



$tdatalocalidad[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalocalidad[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalocalidad[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalocalidad[".isUseAjaxSuggest"] = true;



			

$tdatalocalidad[".ajaxCodeSnippetAdded"] = false;

$tdatalocalidad[".buttonsAdded"] = false;

$tdatalocalidad[".addPageEvents"] = true;

// use timepicker for search panel
$tdatalocalidad[".isUseTimeForSearch"] = false;

$tdatalocalidad[".isUseFieldsMaps"] = true;

$tdatalocalidad[".badgeColor"] = "EDCA00";


$tdatalocalidad[".allSearchFields"] = array();
$tdatalocalidad[".filterFields"] = array();
$tdatalocalidad[".requiredSearchFields"] = array();

$tdatalocalidad[".googleLikeFields"] = array();
$tdatalocalidad[".googleLikeFields"][] = "id_localidad";
$tdatalocalidad[".googleLikeFields"][] = "Localidad";
$tdatalocalidad[".googleLikeFields"][] = "Tipo_Olt";
$tdatalocalidad[".googleLikeFields"][] = "Serial_Olt";
$tdatalocalidad[".googleLikeFields"][] = "Tipo_Mikrotik";
$tdatalocalidad[".googleLikeFields"][] = "Serial_Mikrotik";
$tdatalocalidad[".googleLikeFields"][] = "Serial_Ont_Prueba";
$tdatalocalidad[".googleLikeFields"][] = "Serial_Raspberry";
$tdatalocalidad[".googleLikeFields"][] = "Serial_Camara";
$tdatalocalidad[".googleLikeFields"][] = "Nombre_del_custodio";
$tdatalocalidad[".googleLikeFields"][] = "Telefono_del_custodio";
$tdatalocalidad[".googleLikeFields"][] = "Contrato_de_energia";
$tdatalocalidad[".googleLikeFields"][] = "Latitud";
$tdatalocalidad[".googleLikeFields"][] = "Longitud";
$tdatalocalidad[".googleLikeFields"][] = "Mapa";
$tdatalocalidad[".googleLikeFields"][] = "Direccion";
$tdatalocalidad[".googleLikeFields"][] = "Observaciones";
$tdatalocalidad[".googleLikeFields"][] = "Foto";
$tdatalocalidad[".googleLikeFields"][] = "qr";



$tdatalocalidad[".tableType"] = "list";

$tdatalocalidad[".printerPageOrientation"] = 0;
$tdatalocalidad[".nPrinterPageScale"] = 100;

$tdatalocalidad[".nPrinterSplitRecords"] = 40;

$tdatalocalidad[".geocodingEnabled"] = false;










$tdatalocalidad[".pageSize"] = 30;

$tdatalocalidad[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `Localidad`";
$tdatalocalidad[".strOrderBy"] = $tstrOrderBy;

$tdatalocalidad[".orderindexes"] = array();
	$tdatalocalidad[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "`Localidad`");



$tdatalocalidad[".sqlHead"] = "SELECT `id_localidad`,  `Localidad`,  `Tipo_Olt`,  `Serial_Olt`,  `Tipo_Mikrotik`,  `Serial_Mikrotik`,  `Serial_Ont_Prueba`,  `Serial_Raspberry`,  `Serial_Camara`,  `Nombre_del_custodio`,  `Telefono_del_custodio`,  `Contrato_de_energia`,  `Latitud`,  `Longitud`,  `Mapa`,  `Direccion`,  `Observaciones`,  `Foto`,  CONCAT(`Localidad`, '\\n', \"Propiedad de Isp Eiasa\") AS `qr`";
$tdatalocalidad[".sqlFrom"] = "FROM `localidad`";
$tdatalocalidad[".sqlWhereExpr"] = "(`Localidad` NOT IN ('EL BAGRE', 'ZARAGOZA'))";
$tdatalocalidad[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalocalidad[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalocalidad[".arrGroupsPerPage"] = $arrGPP;

$tdatalocalidad[".highlightSearchResults"] = true;

$tableKeyslocalidad = array();
$tableKeyslocalidad[] = "id_localidad";
$tdatalocalidad[".Keys"] = $tableKeyslocalidad;


$tdatalocalidad[".hideMobileList"] = array();




//	id_localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_localidad";
	$fdata["GoodName"] = "id_localidad";
	$fdata["ownerTable"] = "localidad";
	$fdata["Label"] = GetFieldLabel("localidad","id_localidad");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdatalocalidad["id_localidad"] = $fdata;
		$tdatalocalidad[".searchableFields"][] = "id_localidad";
//	Localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Localidad";
	$fdata["GoodName"] = "Localidad";
	$fdata["ownerTable"] = "localidad";
	$fdata["Label"] = GetFieldLabel("localidad","Localidad");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatalocalidad["Localidad"] = $fdata;
		$tdatalocalidad[".searchableFields"][] = "Localidad";
//	Tipo_Olt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Tipo_Olt";
	$fdata["GoodName"] = "Tipo_Olt";
	$fdata["ownerTable"] = "localidad";
	$fdata["Label"] = GetFieldLabel("localidad","Tipo_Olt");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Tipo_Olt";

		$fdata["sourceSingle"] = "Tipo_Olt";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Tipo_Olt`";

	
	
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
	$edata["LookupValues"][] = "Gabinete";
	$edata["LookupValues"][] = "Rack";

	
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


	$tdatalocalidad["Tipo_Olt"] = $fdata;
		$tdatalocalidad[".searchableFields"][] = "Tipo_Olt";
//	Serial_Olt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Serial_Olt";
	$fdata["GoodName"] = "Serial_Olt";
	$fdata["ownerTable"] = "localidad";
	$fdata["Label"] = GetFieldLabel("localidad","Serial_Olt");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Serial_Olt";

		$fdata["sourceSingle"] = "Serial_Olt";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Serial_Olt`";

	
	
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


	$tdatalocalidad["Serial_Olt"] = $fdata;
		$tdatalocalidad[".searchableFields"][] = "Serial_Olt";
//	Tipo_Mikrotik
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Tipo_Mikrotik";
	$fdata["GoodName"] = "Tipo_Mikrotik";
	$fdata["ownerTable"] = "localidad";
	$fdata["Label"] = GetFieldLabel("localidad","Tipo_Mikrotik");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Tipo_Mikrotik";

		$fdata["sourceSingle"] = "Tipo_Mikrotik";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Tipo_Mikrotik`";

	
	
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
	$edata["LookupValues"][] = "CCR2116-12G";
	$edata["LookupValues"][] = "CCR2004-16G";

	
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


	$tdatalocalidad["Tipo_Mikrotik"] = $fdata;
		$tdatalocalidad[".searchableFields"][] = "Tipo_Mikrotik";
//	Serial_Mikrotik
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Serial_Mikrotik";
	$fdata["GoodName"] = "Serial_Mikrotik";
	$fdata["ownerTable"] = "localidad";
	$fdata["Label"] = GetFieldLabel("localidad","Serial_Mikrotik");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Serial_Mikrotik";

		$fdata["sourceSingle"] = "Serial_Mikrotik";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Serial_Mikrotik`";

	
	
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


	$tdatalocalidad["Serial_Mikrotik"] = $fdata;
		$tdatalocalidad[".searchableFields"][] = "Serial_Mikrotik";
//	Serial_Ont_Prueba
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Serial_Ont_Prueba";
	$fdata["GoodName"] = "Serial_Ont_Prueba";
	$fdata["ownerTable"] = "localidad";
	$fdata["Label"] = GetFieldLabel("localidad","Serial_Ont_Prueba");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Serial_Ont_Prueba";

		$fdata["sourceSingle"] = "Serial_Ont_Prueba";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Serial_Ont_Prueba`";

	
	
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


	$tdatalocalidad["Serial_Ont_Prueba"] = $fdata;
		$tdatalocalidad[".searchableFields"][] = "Serial_Ont_Prueba";
//	Serial_Raspberry
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Serial_Raspberry";
	$fdata["GoodName"] = "Serial_Raspberry";
	$fdata["ownerTable"] = "localidad";
	$fdata["Label"] = GetFieldLabel("localidad","Serial_Raspberry");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Serial_Raspberry";

		$fdata["sourceSingle"] = "Serial_Raspberry";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Serial_Raspberry`";

	
	
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


	$tdatalocalidad["Serial_Raspberry"] = $fdata;
		$tdatalocalidad[".searchableFields"][] = "Serial_Raspberry";
//	Serial_Camara
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Serial_Camara";
	$fdata["GoodName"] = "Serial_Camara";
	$fdata["ownerTable"] = "localidad";
	$fdata["Label"] = GetFieldLabel("localidad","Serial_Camara");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Serial_Camara";

		$fdata["sourceSingle"] = "Serial_Camara";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Serial_Camara`";

	
	
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


	$tdatalocalidad["Serial_Camara"] = $fdata;
		$tdatalocalidad[".searchableFields"][] = "Serial_Camara";
//	Nombre_del_custodio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Nombre_del_custodio";
	$fdata["GoodName"] = "Nombre_del_custodio";
	$fdata["ownerTable"] = "localidad";
	$fdata["Label"] = GetFieldLabel("localidad","Nombre_del_custodio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Nombre_del_custodio";

		$fdata["sourceSingle"] = "Nombre_del_custodio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Nombre_del_custodio`";

	
	
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


	$tdatalocalidad["Nombre_del_custodio"] = $fdata;
		$tdatalocalidad[".searchableFields"][] = "Nombre_del_custodio";
//	Telefono_del_custodio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Telefono_del_custodio";
	$fdata["GoodName"] = "Telefono_del_custodio";
	$fdata["ownerTable"] = "localidad";
	$fdata["Label"] = GetFieldLabel("localidad","Telefono_del_custodio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Telefono_del_custodio";

		$fdata["sourceSingle"] = "Telefono_del_custodio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Telefono_del_custodio`";

	
	
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


	$tdatalocalidad["Telefono_del_custodio"] = $fdata;
		$tdatalocalidad[".searchableFields"][] = "Telefono_del_custodio";
//	Contrato_de_energia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Contrato_de_energia";
	$fdata["GoodName"] = "Contrato_de_energia";
	$fdata["ownerTable"] = "localidad";
	$fdata["Label"] = GetFieldLabel("localidad","Contrato_de_energia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Contrato_de_energia";

		$fdata["sourceSingle"] = "Contrato_de_energia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Contrato_de_energia`";

	
	
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


	$tdatalocalidad["Contrato_de_energia"] = $fdata;
		$tdatalocalidad[".searchableFields"][] = "Contrato_de_energia";
//	Latitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Latitud";
	$fdata["GoodName"] = "Latitud";
	$fdata["ownerTable"] = "localidad";
	$fdata["Label"] = GetFieldLabel("localidad","Latitud");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Latitud";

		$fdata["sourceSingle"] = "Latitud";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Latitud`";

	
	
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


	$tdatalocalidad["Latitud"] = $fdata;
		$tdatalocalidad[".searchableFields"][] = "Latitud";
//	Longitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Longitud";
	$fdata["GoodName"] = "Longitud";
	$fdata["ownerTable"] = "localidad";
	$fdata["Label"] = GetFieldLabel("localidad","Longitud");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Longitud";

		$fdata["sourceSingle"] = "Longitud";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Longitud`";

	
	
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


	$tdatalocalidad["Longitud"] = $fdata;
		$tdatalocalidad[".searchableFields"][] = "Longitud";
//	Mapa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Mapa";
	$fdata["GoodName"] = "Mapa";
	$fdata["ownerTable"] = "localidad";
	$fdata["Label"] = GetFieldLabel("localidad","Mapa");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Mapa";

		$fdata["sourceSingle"] = "Mapa";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Mapa`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Map");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["mapData"] = array();
	$vdata["mapData"]['width'] = 300;
	$vdata["mapData"]['height'] = 225;
	$vdata["mapData"]['address'] = "Localidad";
	$vdata["mapData"]['lat'] = "Latitud";
	$vdata["mapData"]['lng'] = "Longitud";
	$vdata["mapData"]['desc'] = "Localidad";
	$vdata["mapData"]['mapIcon'] = "";
	$vdata["mapData"]['isMapIconCustom'] = 0;
		$vdata["mapData"]['zoom'] = 15;

	
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


	$tdatalocalidad["Mapa"] = $fdata;
		$tdatalocalidad[".searchableFields"][] = "Mapa";
//	Direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Direccion";
	$fdata["GoodName"] = "Direccion";
	$fdata["ownerTable"] = "localidad";
	$fdata["Label"] = GetFieldLabel("localidad","Direccion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Direccion";

		$fdata["sourceSingle"] = "Direccion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Direccion`";

	
	
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


	$tdatalocalidad["Direccion"] = $fdata;
		$tdatalocalidad[".searchableFields"][] = "Direccion";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "localidad";
	$fdata["Label"] = GetFieldLabel("localidad","Observaciones");
	$fdata["FieldType"] = 201;


	
	
			

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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatalocalidad["Observaciones"] = $fdata;
		$tdatalocalidad[".searchableFields"][] = "Observaciones";
//	Foto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Foto";
	$fdata["GoodName"] = "Foto";
	$fdata["ownerTable"] = "localidad";
	$fdata["Label"] = GetFieldLabel("localidad","Foto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Foto";

		$fdata["sourceSingle"] = "Foto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Foto`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 400;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 2;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = array();
			$edata["acceptFileTypes"][] = strtoupper("bmp");
						$edata["acceptFileTypesHtml"] = ".bmp";
			$edata["acceptFileTypes"][] = strtoupper("gif");
						$edata["acceptFileTypesHtml"] .= ",.gif";
			$edata["acceptFileTypes"][] = strtoupper("jpg");
						$edata["acceptFileTypesHtml"] .= ",.jpg";
			$edata["acceptFileTypes"][] = strtoupper("png");
						$edata["acceptFileTypesHtml"] .= ",.png";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 600;

	
	
	
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


	$tdatalocalidad["Foto"] = $fdata;
		$tdatalocalidad[".searchableFields"][] = "Foto";
//	qr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "qr";
	$fdata["GoodName"] = "qr";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("localidad","qr");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "qr";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT(`Localidad`, '\\n', \"Propiedad de Isp Eiasa\")";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "QRCode");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatalocalidad["qr"] = $fdata;
		$tdatalocalidad[".searchableFields"][] = "qr";


$tables_data["localidad"]=&$tdatalocalidad;
$field_labels["localidad"] = &$fieldLabelslocalidad;
$fieldToolTips["localidad"] = &$fieldToolTipslocalidad;
$placeHolders["localidad"] = &$placeHolderslocalidad;
$page_titles["localidad"] = &$pageTitleslocalidad;


changeTextControlsToDate( "localidad" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["localidad"] = array();
//	cables
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="cables";
		$detailsParam["dOriginalTable"] = "cables";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "cables";
	$detailsParam["dCaptionTable"] = GetTableCaption("cables");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["localidad"][$dIndex] = $detailsParam;

	
		$detailsTablesData["localidad"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["localidad"][$dIndex]["masterKeys"][]="Localidad";

	$detailsTablesData["localidad"][$dIndex]["masterKeys"][]="id_localidad";

				$detailsTablesData["localidad"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["localidad"][$dIndex]["detailKeys"][]="localidad";

		
	$detailsTablesData["localidad"][$dIndex]["detailKeys"][]="id_localidad";
//	Mapa_General
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Mapa_General";
		$detailsParam["dOriginalTable"] = "ctos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "mapa_general";
	$detailsParam["dCaptionTable"] = GetTableCaption("Mapa_General");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["localidad"][$dIndex] = $detailsParam;

	
		$detailsTablesData["localidad"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["localidad"][$dIndex]["masterKeys"][]="Localidad";

				$detailsTablesData["localidad"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["localidad"][$dIndex]["detailKeys"][]="Localidad";
//	tarjeta_olt
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tarjeta_olt";
		$detailsParam["dOriginalTable"] = "tarjeta_olt";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tarjeta_olt";
	$detailsParam["dCaptionTable"] = GetTableCaption("tarjeta_olt");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["localidad"][$dIndex] = $detailsParam;

	
		$detailsTablesData["localidad"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["localidad"][$dIndex]["masterKeys"][]="id_localidad";

				$detailsTablesData["localidad"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["localidad"][$dIndex]["detailKeys"][]="Loclaidad";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["localidad"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_localidad()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id_localidad`,  `Localidad`,  `Tipo_Olt`,  `Serial_Olt`,  `Tipo_Mikrotik`,  `Serial_Mikrotik`,  `Serial_Ont_Prueba`,  `Serial_Raspberry`,  `Serial_Camara`,  `Nombre_del_custodio`,  `Telefono_del_custodio`,  `Contrato_de_energia`,  `Latitud`,  `Longitud`,  `Mapa`,  `Direccion`,  `Observaciones`,  `Foto`,  CONCAT(`Localidad`, '\\n', \"Propiedad de Isp Eiasa\") AS `qr`";
$proto0["m_strFrom"] = "FROM `localidad`";
$proto0["m_strWhere"] = "(`Localidad` NOT IN ('EL BAGRE', 'ZARAGOZA'))";
$proto0["m_strOrderBy"] = "ORDER BY `Localidad`";
	
										;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "`Localidad` NOT IN ('EL BAGRE', 'ZARAGOZA')";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Localidad",
	"m_strTable" => "localidad",
	"m_srcTableName" => "localidad"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "NOT IN ('EL BAGRE', 'ZARAGOZA')";
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
	"m_strName" => "id_localidad",
	"m_strTable" => "localidad",
	"m_srcTableName" => "localidad"
));

$proto6["m_sql"] = "`id_localidad`";
$proto6["m_srcTableName"] = "localidad";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Localidad",
	"m_strTable" => "localidad",
	"m_srcTableName" => "localidad"
));

$proto8["m_sql"] = "`Localidad`";
$proto8["m_srcTableName"] = "localidad";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo_Olt",
	"m_strTable" => "localidad",
	"m_srcTableName" => "localidad"
));

$proto10["m_sql"] = "`Tipo_Olt`";
$proto10["m_srcTableName"] = "localidad";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Serial_Olt",
	"m_strTable" => "localidad",
	"m_srcTableName" => "localidad"
));

$proto12["m_sql"] = "`Serial_Olt`";
$proto12["m_srcTableName"] = "localidad";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo_Mikrotik",
	"m_strTable" => "localidad",
	"m_srcTableName" => "localidad"
));

$proto14["m_sql"] = "`Tipo_Mikrotik`";
$proto14["m_srcTableName"] = "localidad";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Serial_Mikrotik",
	"m_strTable" => "localidad",
	"m_srcTableName" => "localidad"
));

$proto16["m_sql"] = "`Serial_Mikrotik`";
$proto16["m_srcTableName"] = "localidad";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Serial_Ont_Prueba",
	"m_strTable" => "localidad",
	"m_srcTableName" => "localidad"
));

$proto18["m_sql"] = "`Serial_Ont_Prueba`";
$proto18["m_srcTableName"] = "localidad";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Serial_Raspberry",
	"m_strTable" => "localidad",
	"m_srcTableName" => "localidad"
));

$proto20["m_sql"] = "`Serial_Raspberry`";
$proto20["m_srcTableName"] = "localidad";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Serial_Camara",
	"m_strTable" => "localidad",
	"m_srcTableName" => "localidad"
));

$proto22["m_sql"] = "`Serial_Camara`";
$proto22["m_srcTableName"] = "localidad";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre_del_custodio",
	"m_strTable" => "localidad",
	"m_srcTableName" => "localidad"
));

$proto24["m_sql"] = "`Nombre_del_custodio`";
$proto24["m_srcTableName"] = "localidad";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Telefono_del_custodio",
	"m_strTable" => "localidad",
	"m_srcTableName" => "localidad"
));

$proto26["m_sql"] = "`Telefono_del_custodio`";
$proto26["m_srcTableName"] = "localidad";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Contrato_de_energia",
	"m_strTable" => "localidad",
	"m_srcTableName" => "localidad"
));

$proto28["m_sql"] = "`Contrato_de_energia`";
$proto28["m_srcTableName"] = "localidad";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Latitud",
	"m_strTable" => "localidad",
	"m_srcTableName" => "localidad"
));

$proto30["m_sql"] = "`Latitud`";
$proto30["m_srcTableName"] = "localidad";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Longitud",
	"m_strTable" => "localidad",
	"m_srcTableName" => "localidad"
));

$proto32["m_sql"] = "`Longitud`";
$proto32["m_srcTableName"] = "localidad";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Mapa",
	"m_strTable" => "localidad",
	"m_srcTableName" => "localidad"
));

$proto34["m_sql"] = "`Mapa`";
$proto34["m_srcTableName"] = "localidad";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Direccion",
	"m_strTable" => "localidad",
	"m_srcTableName" => "localidad"
));

$proto36["m_sql"] = "`Direccion`";
$proto36["m_srcTableName"] = "localidad";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "localidad",
	"m_srcTableName" => "localidad"
));

$proto38["m_sql"] = "`Observaciones`";
$proto38["m_srcTableName"] = "localidad";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Foto",
	"m_strTable" => "localidad",
	"m_srcTableName" => "localidad"
));

$proto40["m_sql"] = "`Foto`";
$proto40["m_srcTableName"] = "localidad";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$proto43=array();
$proto43["m_functiontype"] = "SQLF_CUSTOM";
$proto43["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "`Localidad`"
));

$proto43["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'\\n'"
));

$proto43["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"Propiedad de Isp Eiasa\""
));

$proto43["m_arguments"][]=$obj;
$proto43["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto43);

$proto42["m_sql"] = "CONCAT(`Localidad`, '\\n', \"Propiedad de Isp Eiasa\")";
$proto42["m_srcTableName"] = "localidad";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "qr";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto47=array();
$proto47["m_link"] = "SQLL_MAIN";
			$proto48=array();
$proto48["m_strName"] = "localidad";
$proto48["m_srcTableName"] = "localidad";
$proto48["m_columns"] = array();
$proto48["m_columns"][] = "id_localidad";
$proto48["m_columns"][] = "Localidad";
$proto48["m_columns"][] = "Tipo_Olt";
$proto48["m_columns"][] = "Serial_Olt";
$proto48["m_columns"][] = "Tipo_Mikrotik";
$proto48["m_columns"][] = "Serial_Mikrotik";
$proto48["m_columns"][] = "Serial_Ont_Prueba";
$proto48["m_columns"][] = "Serial_Raspberry";
$proto48["m_columns"][] = "Serial_Camara";
$proto48["m_columns"][] = "Nombre_del_custodio";
$proto48["m_columns"][] = "Telefono_del_custodio";
$proto48["m_columns"][] = "Contrato_de_energia";
$proto48["m_columns"][] = "Latitud";
$proto48["m_columns"][] = "Longitud";
$proto48["m_columns"][] = "Mapa";
$proto48["m_columns"][] = "Direccion";
$proto48["m_columns"][] = "Observaciones";
$proto48["m_columns"][] = "Foto";
$obj = new SQLTable($proto48);

$proto47["m_table"] = $obj;
$proto47["m_sql"] = "`localidad`";
$proto47["m_alias"] = "";
$proto47["m_srcTableName"] = "localidad";
$proto49=array();
$proto49["m_sql"] = "";
$proto49["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto49["m_column"]=$obj;
$proto49["m_contained"] = array();
$proto49["m_strCase"] = "";
$proto49["m_havingmode"] = false;
$proto49["m_inBrackets"] = false;
$proto49["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto49);

$proto47["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto47);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto51=array();
						$obj = new SQLField(array(
	"m_strName" => "Localidad",
	"m_strTable" => "localidad",
	"m_srcTableName" => "localidad"
));

$proto51["m_column"]=$obj;
$proto51["m_bAsc"] = 1;
$proto51["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto51);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="localidad";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_localidad = createSqlQuery_localidad();


	
										;

																			

$tdatalocalidad[".sqlquery"] = $queryData_localidad;



include_once(getabspath("include/localidad_events.php"));
$tdatalocalidad[".hasEvents"] = true;

?>