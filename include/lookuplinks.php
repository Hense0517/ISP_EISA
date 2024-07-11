<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["numeros_cto"] ) ) {
			$lookupTableLinks["numeros_cto"] = array();
		}
		if( !isset( $lookupTableLinks["numeros_cto"]["ctos.Cto"] )) {
			$lookupTableLinks["numeros_cto"]["ctos.Cto"] = array();
		}
		$lookupTableLinks["numeros_cto"]["ctos.Cto"]["edit"] = array("table" => "ctos", "field" => "Cto", "page" => "edit");
		if( !isset( $lookupTableLinks["numeros_de_cables"] ) ) {
			$lookupTableLinks["numeros_de_cables"] = array();
		}
		if( !isset( $lookupTableLinks["numeros_de_cables"]["cables.cable"] )) {
			$lookupTableLinks["numeros_de_cables"]["cables.cable"] = array();
		}
		$lookupTableLinks["numeros_de_cables"]["cables.cable"]["edit"] = array("table" => "cables", "field" => "cable", "page" => "edit");
		if( !isset( $lookupTableLinks["numeros_de_spliters"] ) ) {
			$lookupTableLinks["numeros_de_spliters"] = array();
		}
		if( !isset( $lookupTableLinks["numeros_de_spliters"]["spliters.spliter"] )) {
			$lookupTableLinks["numeros_de_spliters"]["spliters.spliter"] = array();
		}
		$lookupTableLinks["numeros_de_spliters"]["spliters.spliter"]["edit"] = array("table" => "spliters", "field" => "spliter", "page" => "edit");
		if( !isset( $lookupTableLinks["numero_puertos"] ) ) {
			$lookupTableLinks["numero_puertos"] = array();
		}
		if( !isset( $lookupTableLinks["numero_puertos"]["puertos_cto.Puerto"] )) {
			$lookupTableLinks["numero_puertos"]["puertos_cto.Puerto"] = array();
		}
		$lookupTableLinks["numero_puertos"]["puertos_cto.Puerto"]["edit"] = array("table" => "puertos_cto", "field" => "Puerto", "page" => "edit");
		if( !isset( $lookupTableLinks["numeros_cto"] ) ) {
			$lookupTableLinks["numeros_cto"] = array();
		}
		if( !isset( $lookupTableLinks["numeros_cto"]["ctos_view.Cto"] )) {
			$lookupTableLinks["numeros_cto"]["ctos_view.Cto"] = array();
		}
		$lookupTableLinks["numeros_cto"]["ctos_view.Cto"]["edit"] = array("table" => "ctos_view", "field" => "Cto", "page" => "edit");
		if( !isset( $lookupTableLinks["spliters"] ) ) {
			$lookupTableLinks["spliters"] = array();
		}
		if( !isset( $lookupTableLinks["spliters"]["ctos_view.Spliter"] )) {
			$lookupTableLinks["spliters"]["ctos_view.Spliter"] = array();
		}
		$lookupTableLinks["spliters"]["ctos_view.Spliter"]["edit"] = array("table" => "ctos_view", "field" => "Spliter", "page" => "edit");
		if( !isset( $lookupTableLinks["numeros_de_cables"] ) ) {
			$lookupTableLinks["numeros_de_cables"] = array();
		}
		if( !isset( $lookupTableLinks["numeros_de_cables"]["ctos_view.Cable"] )) {
			$lookupTableLinks["numeros_de_cables"]["ctos_view.Cable"] = array();
		}
		$lookupTableLinks["numeros_de_cables"]["ctos_view.Cable"]["edit"] = array("table" => "ctos_view", "field" => "Cable", "page" => "edit");
		if( !isset( $lookupTableLinks["localidad"] ) ) {
			$lookupTableLinks["localidad"] = array();
		}
		if( !isset( $lookupTableLinks["localidad"]["ctos_view.Localidad"] )) {
			$lookupTableLinks["localidad"]["ctos_view.Localidad"] = array();
		}
		$lookupTableLinks["localidad"]["ctos_view.Localidad"]["edit"] = array("table" => "ctos_view", "field" => "Localidad", "page" => "edit");
}

?>