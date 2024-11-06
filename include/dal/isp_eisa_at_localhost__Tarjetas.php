<?php
$dalTableTarjetas = array();
$dalTableTarjetas["ID"] = array("type"=>3,"varname"=>"ID", "name" => "ID", "autoInc" => "1");
$dalTableTarjetas["id_tarjeta"] = array("type"=>3,"varname"=>"id_tarjeta", "name" => "id_tarjeta", "autoInc" => "0");
$dalTableTarjetas["Numero_Tarjeta"] = array("type"=>3,"varname"=>"Numero_Tarjeta", "name" => "Numero_Tarjeta", "autoInc" => "0");
$dalTableTarjetas["Id_localidad"] = array("type"=>3,"varname"=>"Id_localidad", "name" => "Id_localidad", "autoInc" => "0");
$dalTableTarjetas["ID"]["key"]=true;

$dal_info["isp_eisa_at_localhost__Tarjetas"] = &$dalTableTarjetas;
?>