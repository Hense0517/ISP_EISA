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
		if( !isset( $lookupTableLinks["spliters"] ) ) {
			$lookupTableLinks["spliters"] = array();
		}
		if( !isset( $lookupTableLinks["spliters"]["ctos.id_spliter"] )) {
			$lookupTableLinks["spliters"]["ctos.id_spliter"] = array();
		}
		$lookupTableLinks["spliters"]["ctos.id_spliter"]["edit"] = array("table" => "ctos", "field" => "id_spliter", "page" => "edit");
		if( !isset( $lookupTableLinks["numeros_de_cables"] ) ) {
			$lookupTableLinks["numeros_de_cables"] = array();
		}
		if( !isset( $lookupTableLinks["numeros_de_cables"]["cables.cable"] )) {
			$lookupTableLinks["numeros_de_cables"]["cables.cable"] = array();
		}
		$lookupTableLinks["numeros_de_cables"]["cables.cable"]["edit"] = array("table" => "cables", "field" => "cable", "page" => "edit");
		if( !isset( $lookupTableLinks["localidad"] ) ) {
			$lookupTableLinks["localidad"] = array();
		}
		if( !isset( $lookupTableLinks["localidad"]["cables.id_localidad"] )) {
			$lookupTableLinks["localidad"]["cables.id_localidad"] = array();
		}
		$lookupTableLinks["localidad"]["cables.id_localidad"]["edit"] = array("table" => "cables", "field" => "id_localidad", "page" => "edit");
		if( !isset( $lookupTableLinks["puertos_olt"] ) ) {
			$lookupTableLinks["puertos_olt"] = array();
		}
		if( !isset( $lookupTableLinks["puertos_olt"]["spliters.id_spliters"] )) {
			$lookupTableLinks["puertos_olt"]["spliters.id_spliters"] = array();
		}
		$lookupTableLinks["puertos_olt"]["spliters.id_spliters"]["edit"] = array("table" => "spliters", "field" => "id_spliters", "page" => "edit");
		if( !isset( $lookupTableLinks["cables"] ) ) {
			$lookupTableLinks["cables"] = array();
		}
		if( !isset( $lookupTableLinks["cables"]["spliters.id_cable"] )) {
			$lookupTableLinks["cables"]["spliters.id_cable"] = array();
		}
		$lookupTableLinks["cables"]["spliters.id_cable"]["edit"] = array("table" => "spliters", "field" => "id_cable", "page" => "edit");
		if( !isset( $lookupTableLinks["numero_puertos"] ) ) {
			$lookupTableLinks["numero_puertos"] = array();
		}
		if( !isset( $lookupTableLinks["numero_puertos"]["puertos_cto.Puerto"] )) {
			$lookupTableLinks["numero_puertos"]["puertos_cto.Puerto"] = array();
		}
		$lookupTableLinks["numero_puertos"]["puertos_cto.Puerto"]["edit"] = array("table" => "puertos_cto", "field" => "Puerto", "page" => "edit");
		if( !isset( $lookupTableLinks["ctos"] ) ) {
			$lookupTableLinks["ctos"] = array();
		}
		if( !isset( $lookupTableLinks["ctos"]["mapa_general.id_Ctos"] )) {
			$lookupTableLinks["ctos"]["mapa_general.id_Ctos"] = array();
		}
		$lookupTableLinks["ctos"]["mapa_general.id_Ctos"]["edit"] = array("table" => "Mapa_General", "field" => "id_Ctos", "page" => "edit");
		if( !isset( $lookupTableLinks["ctos"] ) ) {
			$lookupTableLinks["ctos"] = array();
		}
		if( !isset( $lookupTableLinks["ctos"]["mapa_general.Cto"] )) {
			$lookupTableLinks["ctos"]["mapa_general.Cto"] = array();
		}
		$lookupTableLinks["ctos"]["mapa_general.Cto"]["edit"] = array("table" => "Mapa_General", "field" => "Cto", "page" => "edit");
		if( !isset( $lookupTableLinks["spliters"] ) ) {
			$lookupTableLinks["spliters"] = array();
		}
		if( !isset( $lookupTableLinks["spliters"]["mapa_general.Spliter"] )) {
			$lookupTableLinks["spliters"]["mapa_general.Spliter"] = array();
		}
		$lookupTableLinks["spliters"]["mapa_general.Spliter"]["edit"] = array("table" => "Mapa_General", "field" => "Spliter", "page" => "edit");
		if( !isset( $lookupTableLinks["cables"] ) ) {
			$lookupTableLinks["cables"] = array();
		}
		if( !isset( $lookupTableLinks["cables"]["mapa_general.Cable"] )) {
			$lookupTableLinks["cables"]["mapa_general.Cable"] = array();
		}
		$lookupTableLinks["cables"]["mapa_general.Cable"]["edit"] = array("table" => "Mapa_General", "field" => "Cable", "page" => "edit");
		if( !isset( $lookupTableLinks["localidad"] ) ) {
			$lookupTableLinks["localidad"] = array();
		}
		if( !isset( $lookupTableLinks["localidad"]["mapa_general.Localidad"] )) {
			$lookupTableLinks["localidad"]["mapa_general.Localidad"] = array();
		}
		$lookupTableLinks["localidad"]["mapa_general.Localidad"]["edit"] = array("table" => "Mapa_General", "field" => "Localidad", "page" => "edit");
		if( !isset( $lookupTableLinks["localidad"] ) ) {
			$lookupTableLinks["localidad"] = array();
		}
		if( !isset( $lookupTableLinks["localidad"]["mapa_general.id_localidad"] )) {
			$lookupTableLinks["localidad"]["mapa_general.id_localidad"] = array();
		}
		$lookupTableLinks["localidad"]["mapa_general.id_localidad"]["edit"] = array("table" => "Mapa_General", "field" => "id_localidad", "page" => "edit");
		if( !isset( $lookupTableLinks["cables"] ) ) {
			$lookupTableLinks["cables"] = array();
		}
		if( !isset( $lookupTableLinks["cables"]["mapa_general.id_cables"] )) {
			$lookupTableLinks["cables"]["mapa_general.id_cables"] = array();
		}
		$lookupTableLinks["cables"]["mapa_general.id_cables"]["edit"] = array("table" => "Mapa_General", "field" => "id_cables", "page" => "edit");
		if( !isset( $lookupTableLinks["spliters"] ) ) {
			$lookupTableLinks["spliters"] = array();
		}
		if( !isset( $lookupTableLinks["spliters"]["mapa_general.id_spliters"] )) {
			$lookupTableLinks["spliters"]["mapa_general.id_spliters"] = array();
		}
		$lookupTableLinks["spliters"]["mapa_general.id_spliters"]["edit"] = array("table" => "Mapa_General", "field" => "id_spliters", "page" => "edit");
		if( !isset( $lookupTableLinks["ctos"] ) ) {
			$lookupTableLinks["ctos"] = array();
		}
		if( !isset( $lookupTableLinks["ctos"]["mapa_ctos.id_Ctos"] )) {
			$lookupTableLinks["ctos"]["mapa_ctos.id_Ctos"] = array();
		}
		$lookupTableLinks["ctos"]["mapa_ctos.id_Ctos"]["edit"] = array("table" => "Mapa_ctos", "field" => "id_Ctos", "page" => "edit");
		if( !isset( $lookupTableLinks["ctos"] ) ) {
			$lookupTableLinks["ctos"] = array();
		}
		if( !isset( $lookupTableLinks["ctos"]["mapa_ctos.Cto"] )) {
			$lookupTableLinks["ctos"]["mapa_ctos.Cto"] = array();
		}
		$lookupTableLinks["ctos"]["mapa_ctos.Cto"]["edit"] = array("table" => "Mapa_ctos", "field" => "Cto", "page" => "edit");
		if( !isset( $lookupTableLinks["spliters"] ) ) {
			$lookupTableLinks["spliters"] = array();
		}
		if( !isset( $lookupTableLinks["spliters"]["mapa_ctos.Spliter"] )) {
			$lookupTableLinks["spliters"]["mapa_ctos.Spliter"] = array();
		}
		$lookupTableLinks["spliters"]["mapa_ctos.Spliter"]["edit"] = array("table" => "Mapa_ctos", "field" => "Spliter", "page" => "edit");
		if( !isset( $lookupTableLinks["cables"] ) ) {
			$lookupTableLinks["cables"] = array();
		}
		if( !isset( $lookupTableLinks["cables"]["mapa_ctos.Cable"] )) {
			$lookupTableLinks["cables"]["mapa_ctos.Cable"] = array();
		}
		$lookupTableLinks["cables"]["mapa_ctos.Cable"]["edit"] = array("table" => "Mapa_ctos", "field" => "Cable", "page" => "edit");
		if( !isset( $lookupTableLinks["localidad"] ) ) {
			$lookupTableLinks["localidad"] = array();
		}
		if( !isset( $lookupTableLinks["localidad"]["mapa_ctos.Localidad"] )) {
			$lookupTableLinks["localidad"]["mapa_ctos.Localidad"] = array();
		}
		$lookupTableLinks["localidad"]["mapa_ctos.Localidad"]["edit"] = array("table" => "Mapa_ctos", "field" => "Localidad", "page" => "edit");
		if( !isset( $lookupTableLinks["localidad"] ) ) {
			$lookupTableLinks["localidad"] = array();
		}
		if( !isset( $lookupTableLinks["localidad"]["mapa_ctos.id_localidad"] )) {
			$lookupTableLinks["localidad"]["mapa_ctos.id_localidad"] = array();
		}
		$lookupTableLinks["localidad"]["mapa_ctos.id_localidad"]["edit"] = array("table" => "Mapa_ctos", "field" => "id_localidad", "page" => "edit");
		if( !isset( $lookupTableLinks["cables"] ) ) {
			$lookupTableLinks["cables"] = array();
		}
		if( !isset( $lookupTableLinks["cables"]["mapa_ctos.id_cables"] )) {
			$lookupTableLinks["cables"]["mapa_ctos.id_cables"] = array();
		}
		$lookupTableLinks["cables"]["mapa_ctos.id_cables"]["edit"] = array("table" => "Mapa_ctos", "field" => "id_cables", "page" => "edit");
		if( !isset( $lookupTableLinks["spliters"] ) ) {
			$lookupTableLinks["spliters"] = array();
		}
		if( !isset( $lookupTableLinks["spliters"]["mapa_ctos.id_spliters"] )) {
			$lookupTableLinks["spliters"]["mapa_ctos.id_spliters"] = array();
		}
		$lookupTableLinks["spliters"]["mapa_ctos.id_spliters"]["edit"] = array("table" => "Mapa_ctos", "field" => "id_spliters", "page" => "edit");
		if( !isset( $lookupTableLinks["ctos"] ) ) {
			$lookupTableLinks["ctos"] = array();
		}
		if( !isset( $lookupTableLinks["ctos"]["mapa_puertos_libres.Cto"] )) {
			$lookupTableLinks["ctos"]["mapa_puertos_libres.Cto"] = array();
		}
		$lookupTableLinks["ctos"]["mapa_puertos_libres.Cto"]["edit"] = array("table" => "Mapa Puertos Libres", "field" => "Cto", "page" => "edit");
		if( !isset( $lookupTableLinks["spliters"] ) ) {
			$lookupTableLinks["spliters"] = array();
		}
		if( !isset( $lookupTableLinks["spliters"]["mapa_puertos_libres.Spliter"] )) {
			$lookupTableLinks["spliters"]["mapa_puertos_libres.Spliter"] = array();
		}
		$lookupTableLinks["spliters"]["mapa_puertos_libres.Spliter"]["edit"] = array("table" => "Mapa Puertos Libres", "field" => "Spliter", "page" => "edit");
		if( !isset( $lookupTableLinks["cables"] ) ) {
			$lookupTableLinks["cables"] = array();
		}
		if( !isset( $lookupTableLinks["cables"]["mapa_puertos_libres.Cable"] )) {
			$lookupTableLinks["cables"]["mapa_puertos_libres.Cable"] = array();
		}
		$lookupTableLinks["cables"]["mapa_puertos_libres.Cable"]["edit"] = array("table" => "Mapa Puertos Libres", "field" => "Cable", "page" => "edit");
		if( !isset( $lookupTableLinks["localidad"] ) ) {
			$lookupTableLinks["localidad"] = array();
		}
		if( !isset( $lookupTableLinks["localidad"]["mapa_puertos_libres.Localidad"] )) {
			$lookupTableLinks["localidad"]["mapa_puertos_libres.Localidad"] = array();
		}
		$lookupTableLinks["localidad"]["mapa_puertos_libres.Localidad"]["edit"] = array("table" => "Mapa Puertos Libres", "field" => "Localidad", "page" => "edit");
		if( !isset( $lookupTableLinks["ctos"] ) ) {
			$lookupTableLinks["ctos"] = array();
		}
		if( !isset( $lookupTableLinks["ctos"]["mapa_ventas.Cto"] )) {
			$lookupTableLinks["ctos"]["mapa_ventas.Cto"] = array();
		}
		$lookupTableLinks["ctos"]["mapa_ventas.Cto"]["edit"] = array("table" => "Mapa Ventas", "field" => "Cto", "page" => "edit");
		if( !isset( $lookupTableLinks["spliters"] ) ) {
			$lookupTableLinks["spliters"] = array();
		}
		if( !isset( $lookupTableLinks["spliters"]["mapa_ventas.Spliter"] )) {
			$lookupTableLinks["spliters"]["mapa_ventas.Spliter"] = array();
		}
		$lookupTableLinks["spliters"]["mapa_ventas.Spliter"]["edit"] = array("table" => "Mapa Ventas", "field" => "Spliter", "page" => "edit");
		if( !isset( $lookupTableLinks["cables"] ) ) {
			$lookupTableLinks["cables"] = array();
		}
		if( !isset( $lookupTableLinks["cables"]["mapa_ventas.Cable"] )) {
			$lookupTableLinks["cables"]["mapa_ventas.Cable"] = array();
		}
		$lookupTableLinks["cables"]["mapa_ventas.Cable"]["edit"] = array("table" => "Mapa Ventas", "field" => "Cable", "page" => "edit");
		if( !isset( $lookupTableLinks["localidad"] ) ) {
			$lookupTableLinks["localidad"] = array();
		}
		if( !isset( $lookupTableLinks["localidad"]["mapa_ventas.Localidad"] )) {
			$lookupTableLinks["localidad"]["mapa_ventas.Localidad"] = array();
		}
		$lookupTableLinks["localidad"]["mapa_ventas.Localidad"]["edit"] = array("table" => "Mapa Ventas", "field" => "Localidad", "page" => "edit");
		if( !isset( $lookupTableLinks["numeros_cto"] ) ) {
			$lookupTableLinks["numeros_cto"] = array();
		}
		if( !isset( $lookupTableLinks["numeros_cto"]["vista_digitadores.Cto"] )) {
			$lookupTableLinks["numeros_cto"]["vista_digitadores.Cto"] = array();
		}
		$lookupTableLinks["numeros_cto"]["vista_digitadores.Cto"]["edit"] = array("table" => "Vista_Digitadores", "field" => "Cto", "page" => "edit");
		if( !isset( $lookupTableLinks["numeros_de_spliters"] ) ) {
			$lookupTableLinks["numeros_de_spliters"] = array();
		}
		if( !isset( $lookupTableLinks["numeros_de_spliters"]["vista_digitadores.Spliter"] )) {
			$lookupTableLinks["numeros_de_spliters"]["vista_digitadores.Spliter"] = array();
		}
		$lookupTableLinks["numeros_de_spliters"]["vista_digitadores.Spliter"]["edit"] = array("table" => "Vista_Digitadores", "field" => "Spliter", "page" => "edit");
		if( !isset( $lookupTableLinks["cables"] ) ) {
			$lookupTableLinks["cables"] = array();
		}
		if( !isset( $lookupTableLinks["cables"]["vista_digitadores.Cable"] )) {
			$lookupTableLinks["cables"]["vista_digitadores.Cable"] = array();
		}
		$lookupTableLinks["cables"]["vista_digitadores.Cable"]["edit"] = array("table" => "Vista_Digitadores", "field" => "Cable", "page" => "edit");
		if( !isset( $lookupTableLinks["localidad"] ) ) {
			$lookupTableLinks["localidad"] = array();
		}
		if( !isset( $lookupTableLinks["localidad"]["vista_digitadores.Localidad"] )) {
			$lookupTableLinks["localidad"]["vista_digitadores.Localidad"] = array();
		}
		$lookupTableLinks["localidad"]["vista_digitadores.Localidad"]["edit"] = array("table" => "Vista_Digitadores", "field" => "Localidad", "page" => "edit");
		if( !isset( $lookupTableLinks["numero_puertos"] ) ) {
			$lookupTableLinks["numero_puertos"] = array();
		}
		if( !isset( $lookupTableLinks["numero_puertos"]["ingresar_cliente.Puerto"] )) {
			$lookupTableLinks["numero_puertos"]["ingresar_cliente.Puerto"] = array();
		}
		$lookupTableLinks["numero_puertos"]["ingresar_cliente.Puerto"]["add"] = array("table" => "Ingresar_cliente", "field" => "Puerto", "page" => "add");
		if( !isset( $lookupTableLinks["numero_puertos"] ) ) {
			$lookupTableLinks["numero_puertos"] = array();
		}
		if( !isset( $lookupTableLinks["numero_puertos"]["ingresar_cliente.Puerto"] )) {
			$lookupTableLinks["numero_puertos"]["ingresar_cliente.Puerto"] = array();
		}
		$lookupTableLinks["numero_puertos"]["ingresar_cliente.Puerto"]["search"] = array("table" => "Ingresar_cliente", "field" => "Puerto", "page" => "search");
		if( !isset( $lookupTableLinks["numeros_cto"] ) ) {
			$lookupTableLinks["numeros_cto"] = array();
		}
		if( !isset( $lookupTableLinks["numeros_cto"]["ingresar_cliente.Cto"] )) {
			$lookupTableLinks["numeros_cto"]["ingresar_cliente.Cto"] = array();
		}
		$lookupTableLinks["numeros_cto"]["ingresar_cliente.Cto"]["add"] = array("table" => "Ingresar_cliente", "field" => "Cto", "page" => "add");
		if( !isset( $lookupTableLinks["numeros_cto"] ) ) {
			$lookupTableLinks["numeros_cto"] = array();
		}
		if( !isset( $lookupTableLinks["numeros_cto"]["ingresar_cliente.Cto"] )) {
			$lookupTableLinks["numeros_cto"]["ingresar_cliente.Cto"] = array();
		}
		$lookupTableLinks["numeros_cto"]["ingresar_cliente.Cto"]["search"] = array("table" => "Ingresar_cliente", "field" => "Cto", "page" => "search");
		if( !isset( $lookupTableLinks["numeros_de_spliters"] ) ) {
			$lookupTableLinks["numeros_de_spliters"] = array();
		}
		if( !isset( $lookupTableLinks["numeros_de_spliters"]["ingresar_cliente.Spliter"] )) {
			$lookupTableLinks["numeros_de_spliters"]["ingresar_cliente.Spliter"] = array();
		}
		$lookupTableLinks["numeros_de_spliters"]["ingresar_cliente.Spliter"]["add"] = array("table" => "Ingresar_cliente", "field" => "Spliter", "page" => "add");
		if( !isset( $lookupTableLinks["numeros_de_spliters"] ) ) {
			$lookupTableLinks["numeros_de_spliters"] = array();
		}
		if( !isset( $lookupTableLinks["numeros_de_spliters"]["ingresar_cliente.Spliter"] )) {
			$lookupTableLinks["numeros_de_spliters"]["ingresar_cliente.Spliter"] = array();
		}
		$lookupTableLinks["numeros_de_spliters"]["ingresar_cliente.Spliter"]["search"] = array("table" => "Ingresar_cliente", "field" => "Spliter", "page" => "search");
		if( !isset( $lookupTableLinks["numeros_de_cables"] ) ) {
			$lookupTableLinks["numeros_de_cables"] = array();
		}
		if( !isset( $lookupTableLinks["numeros_de_cables"]["ingresar_cliente.Cable"] )) {
			$lookupTableLinks["numeros_de_cables"]["ingresar_cliente.Cable"] = array();
		}
		$lookupTableLinks["numeros_de_cables"]["ingresar_cliente.Cable"]["add"] = array("table" => "Ingresar_cliente", "field" => "Cable", "page" => "add");
		if( !isset( $lookupTableLinks["numeros_de_cables"] ) ) {
			$lookupTableLinks["numeros_de_cables"] = array();
		}
		if( !isset( $lookupTableLinks["numeros_de_cables"]["ingresar_cliente.Cable"] )) {
			$lookupTableLinks["numeros_de_cables"]["ingresar_cliente.Cable"] = array();
		}
		$lookupTableLinks["numeros_de_cables"]["ingresar_cliente.Cable"]["search"] = array("table" => "Ingresar_cliente", "field" => "Cable", "page" => "search");
		if( !isset( $lookupTableLinks["localidad"] ) ) {
			$lookupTableLinks["localidad"] = array();
		}
		if( !isset( $lookupTableLinks["localidad"]["ingresar_cliente.Localidad"] )) {
			$lookupTableLinks["localidad"]["ingresar_cliente.Localidad"] = array();
		}
		$lookupTableLinks["localidad"]["ingresar_cliente.Localidad"]["add"] = array("table" => "Ingresar_cliente", "field" => "Localidad", "page" => "add");
		if( !isset( $lookupTableLinks["localidad"] ) ) {
			$lookupTableLinks["localidad"] = array();
		}
		if( !isset( $lookupTableLinks["localidad"]["ingresar_cliente.Localidad"] )) {
			$lookupTableLinks["localidad"]["ingresar_cliente.Localidad"] = array();
		}
		$lookupTableLinks["localidad"]["ingresar_cliente.Localidad"]["search"] = array("table" => "Ingresar_cliente", "field" => "Localidad", "page" => "search");
		if( !isset( $lookupTableLinks["localidad"] ) ) {
			$lookupTableLinks["localidad"] = array();
		}
		if( !isset( $lookupTableLinks["localidad"]["reporte_afectaciones.Localidad"] )) {
			$lookupTableLinks["localidad"]["reporte_afectaciones.Localidad"] = array();
		}
		$lookupTableLinks["localidad"]["reporte_afectaciones.Localidad"]["edit"] = array("table" => "reporte_afectaciones", "field" => "Localidad", "page" => "edit");
		if( !isset( $lookupTableLinks["numeros_de_cables"] ) ) {
			$lookupTableLinks["numeros_de_cables"] = array();
		}
		if( !isset( $lookupTableLinks["numeros_de_cables"]["reporte_afectaciones.Cables"] )) {
			$lookupTableLinks["numeros_de_cables"]["reporte_afectaciones.Cables"] = array();
		}
		$lookupTableLinks["numeros_de_cables"]["reporte_afectaciones.Cables"]["edit"] = array("table" => "reporte_afectaciones", "field" => "Cables", "page" => "edit");
		if( !isset( $lookupTableLinks["numeros_de_spliters"] ) ) {
			$lookupTableLinks["numeros_de_spliters"] = array();
		}
		if( !isset( $lookupTableLinks["numeros_de_spliters"]["reporte_afectaciones.Spliters"] )) {
			$lookupTableLinks["numeros_de_spliters"]["reporte_afectaciones.Spliters"] = array();
		}
		$lookupTableLinks["numeros_de_spliters"]["reporte_afectaciones.Spliters"]["edit"] = array("table" => "reporte_afectaciones", "field" => "Spliters", "page" => "edit");
		if( !isset( $lookupTableLinks["numeros_cto"] ) ) {
			$lookupTableLinks["numeros_cto"] = array();
		}
		if( !isset( $lookupTableLinks["numeros_cto"]["reporte_afectaciones.Ctos"] )) {
			$lookupTableLinks["numeros_cto"]["reporte_afectaciones.Ctos"] = array();
		}
		$lookupTableLinks["numeros_cto"]["reporte_afectaciones.Ctos"]["edit"] = array("table" => "reporte_afectaciones", "field" => "Ctos", "page" => "edit");
		if( !isset( $lookupTableLinks["localidad"] ) ) {
			$lookupTableLinks["localidad"] = array();
		}
		if( !isset( $lookupTableLinks["localidad"]["tarjeta_olt.Loclaidad"] )) {
			$lookupTableLinks["localidad"]["tarjeta_olt.Loclaidad"] = array();
		}
		$lookupTableLinks["localidad"]["tarjeta_olt.Loclaidad"]["edit"] = array("table" => "tarjeta_olt", "field" => "Loclaidad", "page" => "edit");
		if( !isset( $lookupTableLinks["tarjeta_olt"] ) ) {
			$lookupTableLinks["tarjeta_olt"] = array();
		}
		if( !isset( $lookupTableLinks["tarjeta_olt"]["puertos_olt.tarjeta"] )) {
			$lookupTableLinks["tarjeta_olt"]["puertos_olt.tarjeta"] = array();
		}
		$lookupTableLinks["tarjeta_olt"]["puertos_olt.tarjeta"]["edit"] = array("table" => "puertos_olt", "field" => "tarjeta", "page" => "edit");
		if( !isset( $lookupTableLinks["localidad"] ) ) {
			$lookupTableLinks["localidad"] = array();
		}
		if( !isset( $lookupTableLinks["localidad"]["puertos_olt.localidad"] )) {
			$lookupTableLinks["localidad"]["puertos_olt.localidad"] = array();
		}
		$lookupTableLinks["localidad"]["puertos_olt.localidad"]["edit"] = array("table" => "puertos_olt", "field" => "localidad", "page" => "edit");
		if( !isset( $lookupTableLinks["cables"] ) ) {
			$lookupTableLinks["cables"] = array();
		}
		if( !isset( $lookupTableLinks["cables"]["puertos_olt.cable"] )) {
			$lookupTableLinks["cables"]["puertos_olt.cable"] = array();
		}
		$lookupTableLinks["cables"]["puertos_olt.cable"]["edit"] = array("table" => "puertos_olt", "field" => "cable", "page" => "edit");
		if( !isset( $lookupTableLinks["spliters"] ) ) {
			$lookupTableLinks["spliters"] = array();
		}
		if( !isset( $lookupTableLinks["spliters"]["puertos_olt.spliter"] )) {
			$lookupTableLinks["spliters"]["puertos_olt.spliter"] = array();
		}
		$lookupTableLinks["spliters"]["puertos_olt.spliter"]["edit"] = array("table" => "puertos_olt", "field" => "spliter", "page" => "edit");
		if( !isset( $lookupTableLinks["spliters"] ) ) {
			$lookupTableLinks["spliters"] = array();
		}
		if( !isset( $lookupTableLinks["spliters"]["clientes_por_puerto.id_spliters"] )) {
			$lookupTableLinks["spliters"]["clientes_por_puerto.id_spliters"] = array();
		}
		$lookupTableLinks["spliters"]["clientes_por_puerto.id_spliters"]["edit"] = array("table" => "Clientes_por_puerto", "field" => "id_spliters", "page" => "edit");
}

?>