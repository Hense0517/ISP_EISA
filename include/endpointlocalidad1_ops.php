<?php
$topsendpointlocalidad1 = array();
		$topsendpointlocalidad1["selectList"] = array(
		"subtype" => "sql",
		"sql" => "SELECT 
 `id_localidad`,
`Localidad`
  FROM localidad "
	);
		$tables_data["endpointlocalidad"][".operations"] = &$topsendpointlocalidad1;
?>