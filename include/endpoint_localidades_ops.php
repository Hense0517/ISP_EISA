<?php
$topsendpoint_localidades = array();
		$topsendpoint_localidades["selectList"] = array(
		"subtype" => "sql",
		"sql" => "SELECT
`id_localidad`,
`Localidad`,
`Tipo_Olt`,
`Serial_Olt`,
`Tipo_Mikrotik`,
`Serial_Mikrotik`,
`Serial_Ont_Prueba`,
`Serial_Raspberry`,
`Serial_Camara`,
`Nombre_del_custodio`,
`Telefono_del_custodio`,
`Contrato_de_energia`,
`Latitud`,
`Longitud`,
`Mapa`,
`Direccion`,
`Observaciones`,
`Foto`,
CONCAT(`Localidad`, '\\n', \"Propiedad de Isp Eiasa\") AS `qr`
FROM `localidad`
WHERE (`Localidad` NOT IN ('EL BAGRE', 'ZARAGOZA'))
ORDER BY `Localidad`"
	);
		$tables_data["endpoint_localidades"][".operations"] = &$topsendpoint_localidades;
?>