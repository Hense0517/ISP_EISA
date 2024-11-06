<?php
$topsdepartamentos = array();
			$topsdepartamentos["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => ":{filter.departamento}:{c_digo_dane_del_departamento}",
		"payload" => "[]"
	);
	$tables_data["Departamentos"][".operations"] = &$topsdepartamentos;
?>