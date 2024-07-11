<?php
$strTableName="numero_puertos";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="numero_puertos";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$reportCaseSensitiveGroupFields = false;

?>