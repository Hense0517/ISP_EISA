<?php
$dalTablespliters = array();
$dalTablespliters["id_spliters"] = array("type"=>3,"varname"=>"id_spliters", "name" => "id_spliters", "autoInc" => "1");
$dalTablespliters["spliter"] = array("type"=>200,"varname"=>"spliter", "name" => "spliter", "autoInc" => "0");
$dalTablespliters["cable"] = array("type"=>200,"varname"=>"cable", "name" => "cable", "autoInc" => "0");
$dalTablespliters["localidad"] = array("type"=>200,"varname"=>"localidad", "name" => "localidad", "autoInc" => "0");
$dalTablespliters["id_spliters"]["key"]=true;

$dal_info["isp_eisa_at_localhost__spliters"] = &$dalTablespliters;
?>