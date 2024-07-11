<?php
$strTableName="cables";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="cables";

$gstrOrderBy="ORDER BY `id_cables`";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

$reportCaseSensitiveGroupFields = false;

?>