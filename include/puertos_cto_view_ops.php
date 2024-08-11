<?php
$topspuertos_cto_view = array();
		$topspuertos_cto_view["delete"] = array(
		"subtype" => "sql",
		"sql" => "DELETE FROM `puertos_cto`
WHERE
`Id_puertos` = :{keys.Id_puertos}
"
	);
				$topspuertos_cto_view["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO `puertos_cto` (
	`Puerto`,
	`Cto`,
	`Spliter`,
	`Cable`,
	`Localidad`,
	`Cedula`,
	`Activo`,
	`Ocupado`
)
VALUES
(
	':{new.Puerto}',
	':{new.Cto}',
	':{new.Spliter}',
	':{new.Cable}',
	':{new.Localidad}',
	:{new.Cedula},
	':{new.Activo}',
	':{new.Ocupado}'
)"
	);
				$topspuertos_cto_view["selectList"] = array(
		"subtype" => "sql",
		"sql" => "SELECT
 	`Id_puertos`,
	`Puerto`,
	`Cto`,
	`Spliter`,
	`Cable`,
	`Localidad`,
	`Cedula`,
	`Activo`,
	`Ocupado`
FROM `puertos_cto`"
	);
				$topspuertos_cto_view["selectOne"] = array(
		"subtype" => "sql",
		"sql" => "SELECT
 	`Id_puertos`,
	`Puerto`,
	`Cto`,
	`Spliter`,
	`Cable`,
	`Localidad`,
	`Cedula`,
	`Activo`,
	`Ocupado`
FROM `puertos_cto`
WHERE
`Id_puertos` = :{keys.Id_puertos}
"
	);
				$topspuertos_cto_view["update"] = array(
		"subtype" => "sql",
		"sql" => "UPDATE `puertos_cto` SET
	`Puerto` = ':{new.Puerto}',
	`Cto` = ':{new.Cto}',
	`Spliter` = ':{new.Spliter}',
	`Cable` = ':{new.Cable}',
	`Localidad` = ':{new.Localidad}',
	`Cedula` = :{new.Cedula},
	`Activo` = ':{new.Activo}',
	`Ocupado` = ':{new.Ocupado}'
WHERE
`Id_puertos` = :{keys.Id_puertos}
"
	);
		$tables_data["puertos_cto_view"][".operations"] = &$topspuertos_cto_view;
?>