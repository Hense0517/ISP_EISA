<?php
$dalTablereporte_afectaciones = array();
$dalTablereporte_afectaciones["Id_afectacion"] = array("type"=>3,"varname"=>"Id_afectacion", "name" => "Id_afectacion", "autoInc" => "1");
$dalTablereporte_afectaciones["Fecha"] = array("type"=>135,"varname"=>"Fecha", "name" => "Fecha", "autoInc" => "0");
$dalTablereporte_afectaciones["Localidad"] = array("type"=>200,"varname"=>"Localidad", "name" => "Localidad", "autoInc" => "0");
$dalTablereporte_afectaciones["Cables"] = array("type"=>200,"varname"=>"Cables", "name" => "Cables", "autoInc" => "0");
$dalTablereporte_afectaciones["Spliters"] = array("type"=>200,"varname"=>"Spliters", "name" => "Spliters", "autoInc" => "0");
$dalTablereporte_afectaciones["Ctos"] = array("type"=>200,"varname"=>"Ctos", "name" => "Ctos", "autoInc" => "0");
$dalTablereporte_afectaciones["Tipo_Afectacion"] = array("type"=>200,"varname"=>"Tipo_Afectacion", "name" => "Tipo_Afectacion", "autoInc" => "0");
$dalTablereporte_afectaciones["Observaciones"] = array("type"=>200,"varname"=>"Observaciones", "name" => "Observaciones", "autoInc" => "0");
$dalTablereporte_afectaciones["Estado"] = array("type"=>200,"varname"=>"Estado", "name" => "Estado", "autoInc" => "0");
$dalTablereporte_afectaciones["Fecha_Solucion"] = array("type"=>135,"varname"=>"Fecha_Solucion", "name" => "Fecha_Solucion", "autoInc" => "0");
$dalTablereporte_afectaciones["Id_afectacion"]["key"]=true;

$dal_info["isp_eisa_at_localhost__reporte_afectaciones"] = &$dalTablereporte_afectaciones;
?>