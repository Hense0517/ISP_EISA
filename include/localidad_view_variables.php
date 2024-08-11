<?php
$strTableName="localidad_view";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="localidad";

$gstrOrderBy="ORDER BY `localidad`.`id_localidad`, `cables`.`id_cables`, `spliters`.`id_spliters`, `ctos`.`id_Ctos`";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$reportCaseSensitiveGroupFields = false;

?>