<?php
$dalTablepuertos_olt = array();
$dalTablepuertos_olt["Id_puerto"] = array("type"=>3,"varname"=>"Id_puerto", "name" => "Id_puerto", "autoInc" => "1");
$dalTablepuertos_olt["Id_Tarjteta"] = array("type"=>3,"varname"=>"Id_Tarjteta", "name" => "Id_Tarjteta", "autoInc" => "0");
$dalTablepuertos_olt["Id_localidad"] = array("type"=>200,"varname"=>"Id_localidad", "name" => "Id_localidad", "autoInc" => "0");
$dalTablepuertos_olt["Id_cable"] = array("type"=>200,"varname"=>"Id_cable", "name" => "Id_cable", "autoInc" => "0");
$dalTablepuertos_olt["Id_spliter"] = array("type"=>3,"varname"=>"Id_spliter", "name" => "Id_spliter", "autoInc" => "0");
$dalTablepuertos_olt["Numero_del_Puerto"] = array("type"=>3,"varname"=>"Numero_del_Puerto", "name" => "Numero_del_Puerto", "autoInc" => "0");
$dalTablepuertos_olt["Odf"] = array("type"=>3,"varname"=>"Odf", "name" => "Odf", "autoInc" => "0");
$dalTablepuertos_olt["Bandeja"] = array("type"=>3,"varname"=>"Bandeja", "name" => "Bandeja", "autoInc" => "0");
$dalTablepuertos_olt["Puerto_del_odf"] = array("type"=>3,"varname"=>"Puerto_del_odf", "name" => "Puerto_del_odf", "autoInc" => "0");
$dalTablepuertos_olt["Observaciones"] = array("type"=>200,"varname"=>"Observaciones", "name" => "Observaciones", "autoInc" => "0");
$dalTablepuertos_olt["Barrio"] = array("type"=>200,"varname"=>"Barrio", "name" => "Barrio", "autoInc" => "0");
$dalTablepuertos_olt["Fin_de_Fibra"] = array("type"=>3,"varname"=>"Fin_de_Fibra", "name" => "Fin_de_Fibra", "autoInc" => "0");
$dalTablepuertos_olt["Id_puerto"]["key"]=true;

$dal_info["isp_eisa_at_localhost__puertos_olt"] = &$dalTablepuertos_olt;
?>