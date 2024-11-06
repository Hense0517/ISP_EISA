<?php
$tdataingresar_cliente = array();
$tdataingresar_cliente[".searchableFields"] = array();
$tdataingresar_cliente[".ShortName"] = "ingresar_cliente";
$tdataingresar_cliente[".OwnerID"] = "";
$tdataingresar_cliente[".OriginalTable"] = "puertos_cto";


$tdataingresar_cliente[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataingresar_cliente[".originalPagesByType"] = $tdataingresar_cliente[".pagesByType"];
$tdataingresar_cliente[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataingresar_cliente[".originalPages"] = $tdataingresar_cliente[".pages"];
$tdataingresar_cliente[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataingresar_cliente[".originalDefaultPages"] = $tdataingresar_cliente[".defaultPages"];

//	field labels
$fieldLabelsingresar_cliente = array();
$fieldToolTipsingresar_cliente = array();
$pageTitlesingresar_cliente = array();
$placeHoldersingresar_cliente = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsingresar_cliente["Spanish"] = array();
	$fieldToolTipsingresar_cliente["Spanish"] = array();
	$placeHoldersingresar_cliente["Spanish"] = array();
	$pageTitlesingresar_cliente["Spanish"] = array();
	$fieldLabelsingresar_cliente["Spanish"]["Id_puertos"] = "Id Puertos";
	$fieldToolTipsingresar_cliente["Spanish"]["Id_puertos"] = "";
	$placeHoldersingresar_cliente["Spanish"]["Id_puertos"] = "";
	$fieldLabelsingresar_cliente["Spanish"]["Puerto"] = "Puerto";
	$fieldToolTipsingresar_cliente["Spanish"]["Puerto"] = "";
	$placeHoldersingresar_cliente["Spanish"]["Puerto"] = "";
	$fieldLabelsingresar_cliente["Spanish"]["Cto"] = "Cto";
	$fieldToolTipsingresar_cliente["Spanish"]["Cto"] = "";
	$placeHoldersingresar_cliente["Spanish"]["Cto"] = "";
	$fieldLabelsingresar_cliente["Spanish"]["Spliter"] = "Spliter";
	$fieldToolTipsingresar_cliente["Spanish"]["Spliter"] = "";
	$placeHoldersingresar_cliente["Spanish"]["Spliter"] = "";
	$fieldLabelsingresar_cliente["Spanish"]["Cable"] = "Cable";
	$fieldToolTipsingresar_cliente["Spanish"]["Cable"] = "";
	$placeHoldersingresar_cliente["Spanish"]["Cable"] = "";
	$fieldLabelsingresar_cliente["Spanish"]["Localidad"] = "Localidad";
	$fieldToolTipsingresar_cliente["Spanish"]["Localidad"] = "";
	$placeHoldersingresar_cliente["Spanish"]["Localidad"] = "";
	$fieldLabelsingresar_cliente["Spanish"]["Cedula"] = "Cedula";
	$fieldToolTipsingresar_cliente["Spanish"]["Cedula"] = "";
	$placeHoldersingresar_cliente["Spanish"]["Cedula"] = "";
	$fieldLabelsingresar_cliente["Spanish"]["Activo"] = "Activo";
	$fieldToolTipsingresar_cliente["Spanish"]["Activo"] = "";
	$placeHoldersingresar_cliente["Spanish"]["Activo"] = "";
	$fieldLabelsingresar_cliente["Spanish"]["Ocupado"] = "Ocupado";
	$fieldToolTipsingresar_cliente["Spanish"]["Ocupado"] = "";
	$placeHoldersingresar_cliente["Spanish"]["Ocupado"] = "";
	$fieldLabelsingresar_cliente["Spanish"]["id_cto"] = "Id Cto";
	$fieldToolTipsingresar_cliente["Spanish"]["id_cto"] = "";
	$placeHoldersingresar_cliente["Spanish"]["id_cto"] = "";
	$fieldLabelsingresar_cliente["Spanish"]["id_spliter"] = "Id Spliter";
	$fieldToolTipsingresar_cliente["Spanish"]["id_spliter"] = "";
	$placeHoldersingresar_cliente["Spanish"]["id_spliter"] = "";
	$fieldLabelsingresar_cliente["Spanish"]["id_cable"] = "Id Cable";
	$fieldToolTipsingresar_cliente["Spanish"]["id_cable"] = "";
	$placeHoldersingresar_cliente["Spanish"]["id_cable"] = "";
	$fieldLabelsingresar_cliente["Spanish"]["id_localidad"] = "Id Localidad";
	$fieldToolTipsingresar_cliente["Spanish"]["id_localidad"] = "";
	$placeHoldersingresar_cliente["Spanish"]["id_localidad"] = "";
	$pageTitlesingresar_cliente["Spanish"]["view"] = "Id Puerto {%Id_puertos}";
	if (count($fieldToolTipsingresar_cliente["Spanish"]))
		$tdataingresar_cliente[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsingresar_cliente["English"] = array();
	$fieldToolTipsingresar_cliente["English"] = array();
	$placeHoldersingresar_cliente["English"] = array();
	$pageTitlesingresar_cliente["English"] = array();
	$fieldLabelsingresar_cliente["English"]["Id_puertos"] = "Id Puertos";
	$fieldToolTipsingresar_cliente["English"]["Id_puertos"] = "";
	$placeHoldersingresar_cliente["English"]["Id_puertos"] = "";
	$fieldLabelsingresar_cliente["English"]["Puerto"] = "Puerto";
	$fieldToolTipsingresar_cliente["English"]["Puerto"] = "";
	$placeHoldersingresar_cliente["English"]["Puerto"] = "";
	$fieldLabelsingresar_cliente["English"]["Cto"] = "Cto";
	$fieldToolTipsingresar_cliente["English"]["Cto"] = "";
	$placeHoldersingresar_cliente["English"]["Cto"] = "";
	$fieldLabelsingresar_cliente["English"]["Spliter"] = "Spliter";
	$fieldToolTipsingresar_cliente["English"]["Spliter"] = "";
	$placeHoldersingresar_cliente["English"]["Spliter"] = "";
	$fieldLabelsingresar_cliente["English"]["Cable"] = "Cable";
	$fieldToolTipsingresar_cliente["English"]["Cable"] = "";
	$placeHoldersingresar_cliente["English"]["Cable"] = "";
	$fieldLabelsingresar_cliente["English"]["Localidad"] = "Localidad";
	$fieldToolTipsingresar_cliente["English"]["Localidad"] = "";
	$placeHoldersingresar_cliente["English"]["Localidad"] = "";
	$fieldLabelsingresar_cliente["English"]["Cedula"] = "Cedula";
	$fieldToolTipsingresar_cliente["English"]["Cedula"] = "";
	$placeHoldersingresar_cliente["English"]["Cedula"] = "";
	$fieldLabelsingresar_cliente["English"]["Activo"] = "Activo";
	$fieldToolTipsingresar_cliente["English"]["Activo"] = "";
	$placeHoldersingresar_cliente["English"]["Activo"] = "";
	$fieldLabelsingresar_cliente["English"]["Ocupado"] = "Ocupado";
	$fieldToolTipsingresar_cliente["English"]["Ocupado"] = "";
	$placeHoldersingresar_cliente["English"]["Ocupado"] = "";
	$fieldLabelsingresar_cliente["English"]["id_cto"] = "Id Cto";
	$fieldToolTipsingresar_cliente["English"]["id_cto"] = "";
	$placeHoldersingresar_cliente["English"]["id_cto"] = "";
	$fieldLabelsingresar_cliente["English"]["id_spliter"] = "Id Spliter";
	$fieldToolTipsingresar_cliente["English"]["id_spliter"] = "";
	$placeHoldersingresar_cliente["English"]["id_spliter"] = "";
	$fieldLabelsingresar_cliente["English"]["id_cable"] = "Id Cable";
	$fieldToolTipsingresar_cliente["English"]["id_cable"] = "";
	$placeHoldersingresar_cliente["English"]["id_cable"] = "";
	$fieldLabelsingresar_cliente["English"]["id_localidad"] = "Id Localidad";
	$fieldToolTipsingresar_cliente["English"]["id_localidad"] = "";
	$placeHoldersingresar_cliente["English"]["id_localidad"] = "";
	if (count($fieldToolTipsingresar_cliente["English"]))
		$tdataingresar_cliente[".isUseToolTips"] = true;
}


	$tdataingresar_cliente[".NCSearch"] = true;



$tdataingresar_cliente[".shortTableName"] = "ingresar_cliente";
$tdataingresar_cliente[".nSecOptions"] = 0;

$tdataingresar_cliente[".mainTableOwnerID"] = "";
$tdataingresar_cliente[".entityType"] = 1;
$tdataingresar_cliente[".connId"] = "isp_eisa_at_localhost";


$tdataingresar_cliente[".strOriginalTableName"] = "puertos_cto";

	



$tdataingresar_cliente[".showAddInPopup"] = false;

$tdataingresar_cliente[".showEditInPopup"] = false;

$tdataingresar_cliente[".showViewInPopup"] = false;

$tdataingresar_cliente[".listAjax"] = false;
//	temporary
//$tdataingresar_cliente[".listAjax"] = false;

	$tdataingresar_cliente[".audit"] = false;

	$tdataingresar_cliente[".locking"] = false;


$pages = $tdataingresar_cliente[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataingresar_cliente[".edit"] = true;
	$tdataingresar_cliente[".afterEditAction"] = 2;
	$tdataingresar_cliente[".closePopupAfterEdit"] = 1;
	$tdataingresar_cliente[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdataingresar_cliente[".add"] = true;
$tdataingresar_cliente[".afterAddAction"] = 1;
$tdataingresar_cliente[".closePopupAfterAdd"] = 1;
$tdataingresar_cliente[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataingresar_cliente[".list"] = true;
}



$tdataingresar_cliente[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataingresar_cliente[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataingresar_cliente[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataingresar_cliente[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataingresar_cliente[".printFriendly"] = true;
}



$tdataingresar_cliente[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataingresar_cliente[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataingresar_cliente[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataingresar_cliente[".isUseAjaxSuggest"] = true;



			

$tdataingresar_cliente[".ajaxCodeSnippetAdded"] = false;

$tdataingresar_cliente[".buttonsAdded"] = false;

$tdataingresar_cliente[".addPageEvents"] = false;

// use timepicker for search panel
$tdataingresar_cliente[".isUseTimeForSearch"] = false;


$tdataingresar_cliente[".badgeColor"] = "CFAE83";


$tdataingresar_cliente[".allSearchFields"] = array();
$tdataingresar_cliente[".filterFields"] = array();
$tdataingresar_cliente[".requiredSearchFields"] = array();

$tdataingresar_cliente[".googleLikeFields"] = array();
$tdataingresar_cliente[".googleLikeFields"][] = "Id_puertos";
$tdataingresar_cliente[".googleLikeFields"][] = "Puerto";
$tdataingresar_cliente[".googleLikeFields"][] = "Cto";
$tdataingresar_cliente[".googleLikeFields"][] = "Spliter";
$tdataingresar_cliente[".googleLikeFields"][] = "Cable";
$tdataingresar_cliente[".googleLikeFields"][] = "Localidad";
$tdataingresar_cliente[".googleLikeFields"][] = "Cedula";
$tdataingresar_cliente[".googleLikeFields"][] = "Activo";
$tdataingresar_cliente[".googleLikeFields"][] = "Ocupado";
$tdataingresar_cliente[".googleLikeFields"][] = "id_cto";
$tdataingresar_cliente[".googleLikeFields"][] = "id_spliter";
$tdataingresar_cliente[".googleLikeFields"][] = "id_cable";
$tdataingresar_cliente[".googleLikeFields"][] = "id_localidad";



$tdataingresar_cliente[".tableType"] = "list";

$tdataingresar_cliente[".printerPageOrientation"] = 0;
$tdataingresar_cliente[".nPrinterPageScale"] = 100;

$tdataingresar_cliente[".nPrinterSplitRecords"] = 40;

$tdataingresar_cliente[".geocodingEnabled"] = false;







$tdataingresar_cliente[".noRecordsFirstPage"] = true;



$tdataingresar_cliente[".pageSize"] = 20;

$tdataingresar_cliente[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataingresar_cliente[".strOrderBy"] = $tstrOrderBy;

$tdataingresar_cliente[".orderindexes"] = array();


$tdataingresar_cliente[".sqlHead"] = "SELECT `Id_puertos`,  	`Puerto`,  	`Cto`,  	`Spliter`,  	`Cable`,  	`Localidad`,  	`Cedula`,  	`Activo`,  	`Ocupado`,  	`id_cto`,  	`id_spliter`,  	`id_cable`,  	`id_localidad`";
$tdataingresar_cliente[".sqlFrom"] = "FROM `puertos_cto`";
$tdataingresar_cliente[".sqlWhereExpr"] = "";
$tdataingresar_cliente[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataingresar_cliente[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataingresar_cliente[".arrGroupsPerPage"] = $arrGPP;

$tdataingresar_cliente[".highlightSearchResults"] = true;

$tableKeysingresar_cliente = array();
$tableKeysingresar_cliente[] = "Id_puertos";
$tdataingresar_cliente[".Keys"] = $tableKeysingresar_cliente;


$tdataingresar_cliente[".hideMobileList"] = array();




//	Id_puertos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id_puertos";
	$fdata["GoodName"] = "Id_puertos";
	$fdata["ownerTable"] = "puertos_cto";
	$fdata["Label"] = GetFieldLabel("Ingresar_cliente","Id_puertos");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "Id_puertos";

		$fdata["sourceSingle"] = "Id_puertos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Id_puertos`";

	
	
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


	$tdataingresar_cliente["Id_puertos"] = $fdata;
		$tdataingresar_cliente[".searchableFields"][] = "Id_puertos";
//	Puerto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Puerto";
	$fdata["GoodName"] = "Puerto";
	$fdata["ownerTable"] = "puertos_cto";
	$fdata["Label"] = GetFieldLabel("Ingresar_cliente","Puerto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Puerto";

		$fdata["sourceSingle"] = "Puerto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Puerto`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "numero_puertos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "numero_puerto";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "numero_puerto";

	

	
	$edata["LookupOrderBy"] = "id_numero_puertos";

	
	
	
	

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "numero_puertos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "numero_puerto";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "numero_puerto";

	

	
	$edata["LookupOrderBy"] = "id_numero_puertos";

	
	
	
	

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




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


	$tdataingresar_cliente["Puerto"] = $fdata;
		$tdataingresar_cliente[".searchableFields"][] = "Puerto";
//	Cto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Cto";
	$fdata["GoodName"] = "Cto";
	$fdata["ownerTable"] = "puertos_cto";
	$fdata["Label"] = GetFieldLabel("Ingresar_cliente","Cto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Cto";

		$fdata["sourceSingle"] = "Cto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Cto`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "numeros_cto";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Numero_cto";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Numero_cto";

	

	
	$edata["LookupOrderBy"] = "id_numeros_ctos";

	
	
	
	

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "numeros_cto";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Numero_cto";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Numero_cto";

	

	
	$edata["LookupOrderBy"] = "id_numeros_ctos";

	
	
	
	

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




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


	$tdataingresar_cliente["Cto"] = $fdata;
		$tdataingresar_cliente[".searchableFields"][] = "Cto";
//	Spliter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Spliter";
	$fdata["GoodName"] = "Spliter";
	$fdata["ownerTable"] = "puertos_cto";
	$fdata["Label"] = GetFieldLabel("Ingresar_cliente","Spliter");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Spliter";

		$fdata["sourceSingle"] = "Spliter";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Spliter`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "numeros_de_spliters";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Spliter";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Spliter";

	

	
	$edata["LookupOrderBy"] = "id_Spliters";

	
	
	
	

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "numeros_de_spliters";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Spliter";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Spliter";

	

	
	$edata["LookupOrderBy"] = "id_Spliters";

	
	
	
	

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




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


	$tdataingresar_cliente["Spliter"] = $fdata;
		$tdataingresar_cliente[".searchableFields"][] = "Spliter";
//	Cable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Cable";
	$fdata["GoodName"] = "Cable";
	$fdata["ownerTable"] = "puertos_cto";
	$fdata["Label"] = GetFieldLabel("Ingresar_cliente","Cable");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Cable";

		$fdata["sourceSingle"] = "Cable";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Cable`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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

	

	
	$edata["LookupOrderBy"] = "id_Cables";

	
	
	
	

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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

	

	
	$edata["LookupOrderBy"] = "id_Cables";

	
	
	
	

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




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


	$tdataingresar_cliente["Cable"] = $fdata;
		$tdataingresar_cliente[".searchableFields"][] = "Cable";
//	Localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Localidad";
	$fdata["GoodName"] = "Localidad";
	$fdata["ownerTable"] = "puertos_cto";
	$fdata["Label"] = GetFieldLabel("Ingresar_cliente","Localidad");
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
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "localidad";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "localidad";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




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


	$tdataingresar_cliente["Localidad"] = $fdata;
		$tdataingresar_cliente[".searchableFields"][] = "Localidad";
//	Cedula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Cedula";
	$fdata["GoodName"] = "Cedula";
	$fdata["ownerTable"] = "puertos_cto";
	$fdata["Label"] = GetFieldLabel("Ingresar_cliente","Cedula");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Cedula";

		$fdata["sourceSingle"] = "Cedula";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Cedula`";

	
	
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


	$tdataingresar_cliente["Cedula"] = $fdata;
		$tdataingresar_cliente[".searchableFields"][] = "Cedula";
//	Activo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Activo";
	$fdata["GoodName"] = "Activo";
	$fdata["ownerTable"] = "puertos_cto";
	$fdata["Label"] = GetFieldLabel("Ingresar_cliente","Activo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Activo";

		$fdata["sourceSingle"] = "Activo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Activo`";

	
	
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


	$tdataingresar_cliente["Activo"] = $fdata;
		$tdataingresar_cliente[".searchableFields"][] = "Activo";
//	Ocupado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Ocupado";
	$fdata["GoodName"] = "Ocupado";
	$fdata["ownerTable"] = "puertos_cto";
	$fdata["Label"] = GetFieldLabel("Ingresar_cliente","Ocupado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Ocupado";

		$fdata["sourceSingle"] = "Ocupado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Ocupado`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




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


	$tdataingresar_cliente["Ocupado"] = $fdata;
		$tdataingresar_cliente[".searchableFields"][] = "Ocupado";
//	id_cto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "id_cto";
	$fdata["GoodName"] = "id_cto";
	$fdata["ownerTable"] = "puertos_cto";
	$fdata["Label"] = GetFieldLabel("Ingresar_cliente","id_cto");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_cto";

		$fdata["sourceSingle"] = "id_cto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`id_cto`";

	
	
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


	$tdataingresar_cliente["id_cto"] = $fdata;
		$tdataingresar_cliente[".searchableFields"][] = "id_cto";
//	id_spliter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "id_spliter";
	$fdata["GoodName"] = "id_spliter";
	$fdata["ownerTable"] = "puertos_cto";
	$fdata["Label"] = GetFieldLabel("Ingresar_cliente","id_spliter");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_spliter";

		$fdata["sourceSingle"] = "id_spliter";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`id_spliter`";

	
	
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


	$tdataingresar_cliente["id_spliter"] = $fdata;
		$tdataingresar_cliente[".searchableFields"][] = "id_spliter";
//	id_cable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "id_cable";
	$fdata["GoodName"] = "id_cable";
	$fdata["ownerTable"] = "puertos_cto";
	$fdata["Label"] = GetFieldLabel("Ingresar_cliente","id_cable");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_cable";

		$fdata["sourceSingle"] = "id_cable";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`id_cable`";

	
	
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


	$tdataingresar_cliente["id_cable"] = $fdata;
		$tdataingresar_cliente[".searchableFields"][] = "id_cable";
//	id_localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "id_localidad";
	$fdata["GoodName"] = "id_localidad";
	$fdata["ownerTable"] = "puertos_cto";
	$fdata["Label"] = GetFieldLabel("Ingresar_cliente","id_localidad");
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


	$tdataingresar_cliente["id_localidad"] = $fdata;
		$tdataingresar_cliente[".searchableFields"][] = "id_localidad";


$tables_data["Ingresar_cliente"]=&$tdataingresar_cliente;
$field_labels["Ingresar_cliente"] = &$fieldLabelsingresar_cliente;
$fieldToolTips["Ingresar_cliente"] = &$fieldToolTipsingresar_cliente;
$placeHolders["Ingresar_cliente"] = &$placeHoldersingresar_cliente;
$page_titles["Ingresar_cliente"] = &$pageTitlesingresar_cliente;


changeTextControlsToDate( "Ingresar_cliente" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Ingresar_cliente"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Ingresar_cliente"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_ingresar_cliente()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`Id_puertos`,  	`Puerto`,  	`Cto`,  	`Spliter`,  	`Cable`,  	`Localidad`,  	`Cedula`,  	`Activo`,  	`Ocupado`,  	`id_cto`,  	`id_spliter`,  	`id_cable`,  	`id_localidad`";
$proto0["m_strFrom"] = "FROM `puertos_cto`";
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
	"m_strName" => "Id_puertos",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "Ingresar_cliente"
));

$proto6["m_sql"] = "`Id_puertos`";
$proto6["m_srcTableName"] = "Ingresar_cliente";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Puerto",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "Ingresar_cliente"
));

$proto8["m_sql"] = "`Puerto`";
$proto8["m_srcTableName"] = "Ingresar_cliente";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Cto",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "Ingresar_cliente"
));

$proto10["m_sql"] = "`Cto`";
$proto10["m_srcTableName"] = "Ingresar_cliente";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Spliter",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "Ingresar_cliente"
));

$proto12["m_sql"] = "`Spliter`";
$proto12["m_srcTableName"] = "Ingresar_cliente";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Cable",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "Ingresar_cliente"
));

$proto14["m_sql"] = "`Cable`";
$proto14["m_srcTableName"] = "Ingresar_cliente";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Localidad",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "Ingresar_cliente"
));

$proto16["m_sql"] = "`Localidad`";
$proto16["m_srcTableName"] = "Ingresar_cliente";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Cedula",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "Ingresar_cliente"
));

$proto18["m_sql"] = "`Cedula`";
$proto18["m_srcTableName"] = "Ingresar_cliente";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Activo",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "Ingresar_cliente"
));

$proto20["m_sql"] = "`Activo`";
$proto20["m_srcTableName"] = "Ingresar_cliente";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Ocupado",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "Ingresar_cliente"
));

$proto22["m_sql"] = "`Ocupado`";
$proto22["m_srcTableName"] = "Ingresar_cliente";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cto",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "Ingresar_cliente"
));

$proto24["m_sql"] = "`id_cto`";
$proto24["m_srcTableName"] = "Ingresar_cliente";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "id_spliter",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "Ingresar_cliente"
));

$proto26["m_sql"] = "`id_spliter`";
$proto26["m_srcTableName"] = "Ingresar_cliente";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cable",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "Ingresar_cliente"
));

$proto28["m_sql"] = "`id_cable`";
$proto28["m_srcTableName"] = "Ingresar_cliente";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "id_localidad",
	"m_strTable" => "puertos_cto",
	"m_srcTableName" => "Ingresar_cliente"
));

$proto30["m_sql"] = "`id_localidad`";
$proto30["m_srcTableName"] = "Ingresar_cliente";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "puertos_cto";
$proto33["m_srcTableName"] = "Ingresar_cliente";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "Id_puertos";
$proto33["m_columns"][] = "Puerto";
$proto33["m_columns"][] = "Cto";
$proto33["m_columns"][] = "Spliter";
$proto33["m_columns"][] = "Cable";
$proto33["m_columns"][] = "Localidad";
$proto33["m_columns"][] = "Cedula";
$proto33["m_columns"][] = "Activo";
$proto33["m_columns"][] = "Ocupado";
$proto33["m_columns"][] = "id_cto";
$proto33["m_columns"][] = "id_spliter";
$proto33["m_columns"][] = "id_cable";
$proto33["m_columns"][] = "id_localidad";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "`puertos_cto`";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "Ingresar_cliente";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Ingresar_cliente";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ingresar_cliente = createSqlQuery_ingresar_cliente();


	
										;

													

$tdataingresar_cliente[".sqlquery"] = $queryData_ingresar_cliente;



$tdataingresar_cliente[".hasEvents"] = false;

?>