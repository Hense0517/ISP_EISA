<?php
$dalTabletarjeta_olt = array();
$dalTabletarjeta_olt["Id_Tarjetas"] = array("type"=>3,"varname"=>"Id_Tarjetas", "name" => "Id_Tarjetas", "autoInc" => "1");
$dalTabletarjeta_olt["Numero_Tarjeta"] = array("type"=>3,"varname"=>"Numero_Tarjeta", "name" => "Numero_Tarjeta", "autoInc" => "0");
$dalTabletarjeta_olt["Loclaidad"] = array("type"=>3,"varname"=>"Loclaidad", "name" => "Loclaidad", "autoInc" => "0");
$dalTabletarjeta_olt["Id_Tarjetas"]["key"]=true;

$dal_info["isp_eisa_at_localhost__tarjeta_olt"] = &$dalTabletarjeta_olt;
?>