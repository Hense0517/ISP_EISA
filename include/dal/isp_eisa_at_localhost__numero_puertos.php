<?php
$dalTablenumero_puertos = array();
$dalTablenumero_puertos["id_numero_puertos"] = array("type"=>3,"varname"=>"id_numero_puertos", "name" => "id_numero_puertos", "autoInc" => "1");
$dalTablenumero_puertos["numero_puerto"] = array("type"=>200,"varname"=>"numero_puerto", "name" => "numero_puerto", "autoInc" => "0");
$dalTablenumero_puertos["id_numero_puertos"]["key"]=true;

$dal_info["isp_eisa_at_localhost__numero_puertos"] = &$dalTablenumero_puertos;
?>