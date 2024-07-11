<?php
$tdatactos_view = array();
$tdatactos_view[".searchableFields"] = array();
$tdatactos_view[".ShortName"] = "ctos_view";
$tdatactos_view[".OwnerID"] = "";
$tdatactos_view[".OriginalTable"] = "ctos";


$tdatactos_view[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatactos_view[".originalPagesByType"] = $tdatactos_view[".pagesByType"];
$tdatactos_view[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatactos_view[".originalPages"] = $tdatactos_view[".pages"];
$tdatactos_view[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatactos_view[".originalDefaultPages"] = $tdatactos_view[".defaultPages"];

//	field labels
$fieldLabelsctos_view = array();
$fieldToolTipsctos_view = array();
$pageTitlesctos_view = array();
$placeHoldersctos_view = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsctos_view["Spanish"] = array();
	$fieldToolTipsctos_view["Spanish"] = array();
	$placeHoldersctos_view["Spanish"] = array();
	$pageTitlesctos_view["Spanish"] = array();
	$fieldLabelsctos_view["Spanish"]["id_Ctos"] = "Id Ctos";
	$fieldToolTipsctos_view["Spanish"]["id_Ctos"] = "";
	$placeHoldersctos_view["Spanish"]["id_Ctos"] = "";
	$fieldLabelsctos_view["Spanish"]["Cto"] = "Cto";
	$fieldToolTipsctos_view["Spanish"]["Cto"] = "";
	$placeHoldersctos_view["Spanish"]["Cto"] = "";
	$fieldLabelsctos_view["Spanish"]["Latitud"] = "Latitud";
	$fieldToolTipsctos_view["Spanish"]["Latitud"] = "";
	$placeHoldersctos_view["Spanish"]["Latitud"] = "";
	$fieldLabelsctos_view["Spanish"]["Longitud"] = "Longitud";
	$fieldToolTipsctos_view["Spanish"]["Longitud"] = "";
	$placeHoldersctos_view["Spanish"]["Longitud"] = "";
	$fieldLabelsctos_view["Spanish"]["Spliter"] = "Spliter";
	$fieldToolTipsctos_view["Spanish"]["Spliter"] = "";
	$placeHoldersctos_view["Spanish"]["Spliter"] = "";
	$fieldLabelsctos_view["Spanish"]["Cable"] = "Cable";
	$fieldToolTipsctos_view["Spanish"]["Cable"] = "";
	$placeHoldersctos_view["Spanish"]["Cable"] = "";
	$fieldLabelsctos_view["Spanish"]["Localidad"] = "Localidad";
	$fieldToolTipsctos_view["Spanish"]["Localidad"] = "";
	$placeHoldersctos_view["Spanish"]["Localidad"] = "";
	$fieldLabelsctos_view["Spanish"]["DisplayOnMap"] = "Display On Map";
	$fieldToolTipsctos_view["Spanish"]["DisplayOnMap"] = "";
	$placeHoldersctos_view["Spanish"]["DisplayOnMap"] = "";
	if (count($fieldToolTipsctos_view["Spanish"]))
		$tdatactos_view[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsctos_view["English"] = array();
	$fieldToolTipsctos_view["English"] = array();
	$placeHoldersctos_view["English"] = array();
	$pageTitlesctos_view["English"] = array();
	$fieldLabelsctos_view["English"]["id_Ctos"] = "Id Ctos";
	$fieldToolTipsctos_view["English"]["id_Ctos"] = "";
	$placeHoldersctos_view["English"]["id_Ctos"] = "";
	$fieldLabelsctos_view["English"]["Cto"] = "Cto";
	$fieldToolTipsctos_view["English"]["Cto"] = "";
	$placeHoldersctos_view["English"]["Cto"] = "";
	$fieldLabelsctos_view["English"]["Latitud"] = "Latitud";
	$fieldToolTipsctos_view["English"]["Latitud"] = "";
	$placeHoldersctos_view["English"]["Latitud"] = "";
	$fieldLabelsctos_view["English"]["Longitud"] = "Longitud";
	$fieldToolTipsctos_view["English"]["Longitud"] = "";
	$placeHoldersctos_view["English"]["Longitud"] = "";
	$fieldLabelsctos_view["English"]["Spliter"] = "Spliter";
	$fieldToolTipsctos_view["English"]["Spliter"] = "";
	$placeHoldersctos_view["English"]["Spliter"] = "";
	$fieldLabelsctos_view["English"]["Cable"] = "Cable";
	$fieldToolTipsctos_view["English"]["Cable"] = "";
	$placeHoldersctos_view["English"]["Cable"] = "";
	$fieldLabelsctos_view["English"]["Localidad"] = "Localidad";
	$fieldToolTipsctos_view["English"]["Localidad"] = "";
	$placeHoldersctos_view["English"]["Localidad"] = "";
	$fieldLabelsctos_view["English"]["DisplayOnMap"] = "Display On Map";
	$fieldToolTipsctos_view["English"]["DisplayOnMap"] = "";
	$placeHoldersctos_view["English"]["DisplayOnMap"] = "";
	if (count($fieldToolTipsctos_view["English"]))
		$tdatactos_view[".isUseToolTips"] = true;
}


	$tdatactos_view[".NCSearch"] = true;



$tdatactos_view[".shortTableName"] = "ctos_view";
$tdatactos_view[".nSecOptions"] = 0;

$tdatactos_view[".mainTableOwnerID"] = "";
$tdatactos_view[".entityType"] = 1;
$tdatactos_view[".connId"] = "isp_eisa_at_localhost";


$tdatactos_view[".strOriginalTableName"] = "ctos";

	



$tdatactos_view[".showAddInPopup"] = false;

$tdatactos_view[".showEditInPopup"] = false;

$tdatactos_view[".showViewInPopup"] = false;

$tdatactos_view[".listAjax"] = false;
//	temporary
//$tdatactos_view[".listAjax"] = false;

	$tdatactos_view[".audit"] = false;

	$tdatactos_view[".locking"] = false;


$pages = $tdatactos_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatactos_view[".edit"] = true;
	$tdatactos_view[".afterEditAction"] = 1;
	$tdatactos_view[".closePopupAfterEdit"] = 1;
	$tdatactos_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatactos_view[".add"] = true;
$tdatactos_view[".afterAddAction"] = 1;
$tdatactos_view[".closePopupAfterAdd"] = 1;
$tdatactos_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatactos_view[".list"] = true;
}



$tdatactos_view[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatactos_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatactos_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatactos_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatactos_view[".printFriendly"] = true;
}



$tdatactos_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatactos_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatactos_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatactos_view[".isUseAjaxSuggest"] = true;





$tdatactos_view[".ajaxCodeSnippetAdded"] = false;

$tdatactos_view[".buttonsAdded"] = false;

$tdatactos_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdatactos_view[".isUseTimeForSearch"] = false;


$tdatactos_view[".badgeColor"] = "1E90FF";


$tdatactos_view[".allSearchFields"] = array();
$tdatactos_view[".filterFields"] = array();
$tdatactos_view[".requiredSearchFields"] = array();

$tdatactos_view[".googleLikeFields"] = array();
$tdatactos_view[".googleLikeFields"][] = "id_Ctos";
$tdatactos_view[".googleLikeFields"][] = "Cto";
$tdatactos_view[".googleLikeFields"][] = "Latitud";
$tdatactos_view[".googleLikeFields"][] = "Longitud";
$tdatactos_view[".googleLikeFields"][] = "Spliter";
$tdatactos_view[".googleLikeFields"][] = "Cable";
$tdatactos_view[".googleLikeFields"][] = "Localidad";
$tdatactos_view[".googleLikeFields"][] = "DisplayOnMap";



$tdatactos_view[".tableType"] = "list";

$tdatactos_view[".printerPageOrientation"] = 0;
$tdatactos_view[".nPrinterPageScale"] = 100;

$tdatactos_view[".nPrinterSplitRecords"] = 40;

$tdatactos_view[".geocodingEnabled"] = true;
$tdatactos_view[".geocodingData"] = array();
$tdatactos_view[".geocodingData"]["latField"] = "Lat";
$tdatactos_view[".geocodingData"]["lngField"] = "Lng";
$tdatactos_view[".geocodingData"]["addressFields"] = array();
	$tdatactos_view[".geocodingData"]["addressFields"][] = "Latitud";
	$tdatactos_view[".geocodingData"]["addressFields"][] = "Longitud";










$tdatactos_view[".pageSize"] = 20;

$tdatactos_view[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id_Ctos`";
$tdatactos_view[".strOrderBy"] = $tstrOrderBy;

$tdatactos_view[".orderindexes"] = array();
	$tdatactos_view[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "`id_Ctos`");



$tdatactos_view[".sqlHead"] = "SELECT `id_Ctos`,  `Cto`,  `Latitud`,  `Longitud`,  `Spliter`,  `Cable`,  `Localidad`,  concat(Cto, '\\n', Spliter, '\\n', Cable, '\\n', Localidad) AS `DisplayOnMap`";
$tdatactos_view[".sqlFrom"] = "FROM `ctos`";
$tdatactos_view[".sqlWhereExpr"] = "";
$tdatactos_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatactos_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatactos_view[".arrGroupsPerPage"] = $arrGPP;

$tdatactos_view[".highlightSearchResults"] = true;

$tableKeysctos_view = array();
$tableKeysctos_view[] = "id_Ctos";
$tdatactos_view[".Keys"] = $tableKeysctos_view;


$tdatactos_view[".hideMobileList"] = array();




//	id_Ctos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_Ctos";
	$fdata["GoodName"] = "id_Ctos";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("ctos_view","id_Ctos");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_Ctos";

		$fdata["sourceSingle"] = "id_Ctos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`id_Ctos`";

	
	
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


	$tdatactos_view["id_Ctos"] = $fdata;
		$tdatactos_view[".searchableFields"][] = "id_Ctos";
//	Cto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Cto";
	$fdata["GoodName"] = "Cto";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("ctos_view","Cto");
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
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

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


	$tdatactos_view["Cto"] = $fdata;
		$tdatactos_view[".searchableFields"][] = "Cto";
//	Latitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Latitud";
	$fdata["GoodName"] = "Latitud";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("ctos_view","Latitud");
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


	$tdatactos_view["Latitud"] = $fdata;
		$tdatactos_view[".searchableFields"][] = "Latitud";
//	Longitud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Longitud";
	$fdata["GoodName"] = "Longitud";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("ctos_view","Longitud");
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


	$tdatactos_view["Longitud"] = $fdata;
		$tdatactos_view[".searchableFields"][] = "Longitud";
//	Spliter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Spliter";
	$fdata["GoodName"] = "Spliter";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("ctos_view","Spliter");
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
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "spliters";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "id_Ctos";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatactos_view["Spliter"] = $fdata;
		$tdatactos_view[".searchableFields"][] = "Spliter";
//	Cable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Cable";
	$fdata["GoodName"] = "Cable";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("ctos_view","Cable");
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
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "numeros_de_cables";
		$edata["listPageId"] = "list";
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "id_Ctos";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 1;
		$fdata["descendingOrder"] = true;
	$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatactos_view["Cable"] = $fdata;
		$tdatactos_view[".searchableFields"][] = "Cable";
//	Localidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Localidad";
	$fdata["GoodName"] = "Localidad";
	$fdata["ownerTable"] = "ctos";
	$fdata["Label"] = GetFieldLabel("ctos_view","Localidad");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "localidad";
		$edata["listPageId"] = "list";
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdatactos_view["Localidad"] = $fdata;
		$tdatactos_view[".searchableFields"][] = "Localidad";
//	DisplayOnMap
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DisplayOnMap";
	$fdata["GoodName"] = "DisplayOnMap";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("ctos_view","DisplayOnMap");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DisplayOnMap";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(Cto, '\\n', Spliter, '\\n', Cable, '\\n', Localidad)";

	
	
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


	$tdatactos_view["DisplayOnMap"] = $fdata;
		$tdatactos_view[".searchableFields"][] = "DisplayOnMap";


$tables_data["ctos_view"]=&$tdatactos_view;
$field_labels["ctos_view"] = &$fieldLabelsctos_view;
$fieldToolTips["ctos_view"] = &$fieldToolTipsctos_view;
$placeHolders["ctos_view"] = &$placeHoldersctos_view;
$page_titles["ctos_view"] = &$pageTitlesctos_view;


changeTextControlsToDate( "ctos_view" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["ctos_view"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["ctos_view"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_ctos_view()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id_Ctos`,  `Cto`,  `Latitud`,  `Longitud`,  `Spliter`,  `Cable`,  `Localidad`,  concat(Cto, '\\n', Spliter, '\\n', Cable, '\\n', Localidad) AS `DisplayOnMap`";
$proto0["m_strFrom"] = "FROM `ctos`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `id_Ctos`";
	
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
	"m_strName" => "id_Ctos",
	"m_strTable" => "ctos",
	"m_srcTableName" => "ctos_view"
));

$proto6["m_sql"] = "`id_Ctos`";
$proto6["m_srcTableName"] = "ctos_view";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Cto",
	"m_strTable" => "ctos",
	"m_srcTableName" => "ctos_view"
));

$proto8["m_sql"] = "`Cto`";
$proto8["m_srcTableName"] = "ctos_view";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Latitud",
	"m_strTable" => "ctos",
	"m_srcTableName" => "ctos_view"
));

$proto10["m_sql"] = "`Latitud`";
$proto10["m_srcTableName"] = "ctos_view";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Longitud",
	"m_strTable" => "ctos",
	"m_srcTableName" => "ctos_view"
));

$proto12["m_sql"] = "`Longitud`";
$proto12["m_srcTableName"] = "ctos_view";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Spliter",
	"m_strTable" => "ctos",
	"m_srcTableName" => "ctos_view"
));

$proto14["m_sql"] = "`Spliter`";
$proto14["m_srcTableName"] = "ctos_view";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Cable",
	"m_strTable" => "ctos",
	"m_srcTableName" => "ctos_view"
));

$proto16["m_sql"] = "`Cable`";
$proto16["m_srcTableName"] = "ctos_view";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Localidad",
	"m_strTable" => "ctos",
	"m_srcTableName" => "ctos_view"
));

$proto18["m_sql"] = "`Localidad`";
$proto18["m_srcTableName"] = "ctos_view";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$proto21=array();
$proto21["m_functiontype"] = "SQLF_CUSTOM";
$proto21["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Cto"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'\\n'"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "Spliter"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'\\n'"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "Cable"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'\\n'"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "Localidad"
));

$proto21["m_arguments"][]=$obj;
$proto21["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto21);

$proto20["m_sql"] = "concat(Cto, '\\n', Spliter, '\\n', Cable, '\\n', Localidad)";
$proto20["m_srcTableName"] = "ctos_view";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "DisplayOnMap";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto29=array();
$proto29["m_link"] = "SQLL_MAIN";
			$proto30=array();
$proto30["m_strName"] = "ctos";
$proto30["m_srcTableName"] = "ctos_view";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "id_Ctos";
$proto30["m_columns"][] = "Cto";
$proto30["m_columns"][] = "Latitud";
$proto30["m_columns"][] = "Longitud";
$proto30["m_columns"][] = "Spliter";
$proto30["m_columns"][] = "Cable";
$proto30["m_columns"][] = "Localidad";
$proto30["m_columns"][] = "Lat";
$proto30["m_columns"][] = "Lng";
$obj = new SQLTable($proto30);

$proto29["m_table"] = $obj;
$proto29["m_sql"] = "`ctos`";
$proto29["m_alias"] = "";
$proto29["m_srcTableName"] = "ctos_view";
$proto31=array();
$proto31["m_sql"] = "";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "";
$proto31["m_havingmode"] = false;
$proto31["m_inBrackets"] = false;
$proto31["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto31);

$proto29["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto29);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto33=array();
						$obj = new SQLField(array(
	"m_strName" => "id_Ctos",
	"m_strTable" => "ctos",
	"m_srcTableName" => "ctos_view"
));

$proto33["m_column"]=$obj;
$proto33["m_bAsc"] = 1;
$proto33["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto33);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="ctos_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ctos_view = createSqlQuery_ctos_view();


	
		;

								

$tdatactos_view[".sqlquery"] = $queryData_ctos_view;



$tdatactos_view[".hasEvents"] = false;

?>