<?php
			$optionsArray = array( 'totals' => array( 'id_Ctos' => array( 'totalsType' => '' ),
'Cto' => array( 'totalsType' => '' ),
'Latitud' => array( 'totalsType' => '' ),
'Longitud' => array( 'totalsType' => '' ),
'Spliter' => array( 'totalsType' => '' ),
'Cable' => array( 'totalsType' => '' ),
'Localidad' => array( 'totalsType' => '' ),
'DisplayOnMap' => array( 'totalsType' => '' ),
'Ubicacion' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'Cto',
'Latitud',
'Longitud',
'Spliter',
'Cable',
'Localidad' ),
'exportFields' => array( 'Localidad',
'Cable',
'Spliter',
'Cto',
'Latitud',
'Longitud' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'Cto' => array( 'export_field1' ),
'Latitud' => array( 'export_field2' ),
'Longitud' => array( 'export_field3' ),
'Spliter' => array( 'export_field4' ),
'Cable' => array( 'export_field5' ),
'Localidad' => array( 'export_field6' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field6',
'export_field5',
'export_field4',
'export_field1',
'export_field2',
'export_field3' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field6' => 'grid',
'export_field5' => 'grid',
'export_field4' => 'grid',
'export_field1' => 'grid',
'export_field2' => 'grid',
'export_field3' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'export' => array( 'format' => 2,
'selectFields' => false,
'delimiter' => ',',
'selectDelimiter' => false,
'exportFileTypes' => array( 'excel' => true,
'word' => true,
'csv' => true,
'xml' => false ) ) );
			$pageArray = array( 'id' => 'export',
'type' => 'export',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'export-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'export-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_field6',
'export_field5',
'export_field4',
'export_field1',
'export_field2',
'export_field3' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'export-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'export_export',
'export_cancel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'export_header' => array( 'type' => 'export_header' ),
'export_export' => array( 'type' => 'export_export' ),
'export_cancel' => array( 'type' => 'export_cancel' ),
'export_field1' => array( 'field' => 'Cto',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'Latitud',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'Longitud',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'Spliter',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'Cable',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'Localidad',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>