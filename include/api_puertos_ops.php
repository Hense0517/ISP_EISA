<?php
$topsapi_puertos = array();
		$topsapi_puertos["selectList"] = array(
		"subtype" => "sql",
		"sql" => "SELECT * FROM puertos_cto"
	);
				$topsapi_puertos["update"] = array(
		"subtype" => "sql",
		"sql" => "SELECT * FROM puertos_cto"
	);
		$tables_data["Api_puertos"][".operations"] = &$topsapi_puertos;
?>