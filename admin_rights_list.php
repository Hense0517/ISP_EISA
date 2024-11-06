<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT");

require_once("include/admin_rights_variables.php");

if( !Security::processAdminPageSecurity( false ) )
	return;


$tables = array();
$pageMask = array();
$table = "numeros_de_cables";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("numeros_de_cables1", " " . GetTableCaption("numeros_de_cables"));
$table = "numeros_de_spliters";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("numeros_de_spliters1", " " . GetTableCaption("numeros_de_spliters"));
$table = "ctos";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("ctos", " " . GetTableCaption("ctos"));
$table = "localidad";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("localidad", " " . GetTableCaption("localidad"));
$table = "cables";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("cables", " " . GetTableCaption("cables"));
$table = "spliters";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("spliters", " " . GetTableCaption("spliters"));
$table = "numeros_cto";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("numeros_cto", " " . GetTableCaption("numeros_cto"));
$table = "numero_puertos";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("numero_puertos", " " . GetTableCaption("numero_puertos"));
$table = "puertos_cto";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("puertos_cto", " " . GetTableCaption("puertos_cto"));
$table = "Mapa_General";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("mapa_general", " " . GetTableCaption("Mapa_General"));
$table = "Mapa_ctos";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("mapa_ctos", " " . GetTableCaption("Mapa_ctos"));
$table = "Mapa Puertos Libres";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("mapa_puertos_libres", " " . GetTableCaption("Mapa_Puertos_Libres"));
$table = "Mapa Ventas";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("mapa_ventas", " " . GetTableCaption("Mapa_Ventas"));
$table = "Puertos_Libres";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("puertos_libres", " " . GetTableCaption("Puertos_Libres"));
$table = "usuarios";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("usuarios", " " . GetTableCaption("usuarios"));
$table = "Vista_Digitadores";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("vista_digitadores", " " . GetTableCaption("Vista_Digitadores"));
$table = "Ingresar_cliente";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("ingresar_cliente", " " . GetTableCaption("Ingresar_cliente"));
$table = "reporte_afectaciones";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("reporte_afectaciones", " " . GetTableCaption("reporte_afectaciones"));
$table = "reporte_afectaciones_view";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("reporte_afectaciones_view", " " . GetTableCaption("reporte_afectaciones_view"));
$table = "tarjeta_olt";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("tarjeta_olt", " " . GetTableCaption("tarjeta_olt"));
$table = "puertos_olt";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("puertos_olt", " " . GetTableCaption("puertos_olt"));
$table = "Clientes_por_puerto";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("clientes_por_puerto", " " . GetTableCaption("Clientes_por_puerto"));
$table = "Departamentos";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("departamentos", " " . GetTableCaption("Departamentos"));
$table = "Ciudades";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("ciudades", " " . GetTableCaption("Ciudades"));

if ( pageEnabled(GLOBAL_PAGES, 'menu') )
	$pageMask[GLOBAL_PAGES] = "S";
else
	$pageMask[GLOBAL_PAGES] = "";
$tables[GLOBAL_PAGES] = array(GoodFieldName(GLOBAL_PAGES_SHORT), " " . GLOBAL_PAGES);

require_once('include/xtempl.php');
require_once('classes/listpage.php');
require_once('classes/rightspage.php');

$xt = new Xtempl();

$options = array();
$options["pageType"] = "admin_rights_list";
$options["pageTable"] = GLOBAL_PAGES;
$options["id"] = postvalue_number("id") ? postvalue_number("id") : 1;
$options["mode"] = RIGHTS_PAGE;
$options['xt'] = &$xt;
$options["requestGoto"] = postvalue_number("goto");


$options["tables"] = $tables;
$options["pageMasks"] = $pageMask;

$pageObject = ListPage::createListPage($strTableName, $options);

if( postvalue("a") == "saveRights" )
{
	//	CSRF protection
	if( !isPostRequest() )
		return;
	$modifiedRights = my_json_decode(postvalue('data'));
	$pageObject->saveRights( $modifiedRights );
	return;
}


// add buttons if exist

// prepare code for build page
$pageObject->prepareForBuildPage();

// show page depends of mode
$pageObject->showPage();



?>
