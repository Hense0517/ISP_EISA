<?php
$strTableName="localidad";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="localidad";

$gstrOrderBy="ORDER BY `Localidad`";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$reportCaseSensitiveGroupFields = false;

?>