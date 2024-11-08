<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => true,
'orientation' => 'portrait',
'scale' => 100 ),
'fields' => array( 'gridFields' => array( 'Cto',
'Latitud',
'Longitud',
'Spliter',
'Cable',
'Localidad',
'Ubicacion' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'Cto' => array( 'integrated_edit_field1' ),
'Latitud' => array( 'integrated_edit_field2' ),
'Longitud' => array( 'integrated_edit_field3' ),
'Spliter' => array( 'integrated_edit_field4' ),
'Cable' => array( 'integrated_edit_field5' ),
'Localidad' => array( 'integrated_edit_field6' ),
'Ubicacion' => array( 'integrated_edit_field' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array(  ),
'below-grid' => array( 'view_back_list',
'view_close',
'hamburger' ),
'top' => array( 'view_header' ),
'grid' => array( 'details_preview',
'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field6',
'integrated_edit_field5',
'integrated_edit_field4',
'master_info',
'integrated_edit_field' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'view_back_list' => 'below-grid',
'view_close' => 'below-grid',
'hamburger' => 'below-grid',
'view_header' => 'top',
'details_preview' => 'grid',
'integrated_edit_field1' => 'grid',
'integrated_edit_field2' => 'grid',
'integrated_edit_field3' => 'grid',
'integrated_edit_field6' => 'grid',
'integrated_edit_field5' => 'grid',
'integrated_edit_field4' => 'grid',
'master_info' => 'grid',
'integrated_edit_field' => 'grid' ),
'itemLocations' => array( 'details_preview' => array( 'location' => 'grid',
'cellId' => 'c5' ),
'integrated_edit_field1' => array( 'location' => 'grid',
'cellId' => 'c9' ),
'integrated_edit_field2' => array( 'location' => 'grid',
'cellId' => 'c10' ),
'integrated_edit_field3' => array( 'location' => 'grid',
'cellId' => 'c11' ),
'integrated_edit_field6' => array( 'location' => 'grid',
'cellId' => 'c12' ),
'integrated_edit_field5' => array( 'location' => 'grid',
'cellId' => 'c13' ),
'integrated_edit_field4' => array( 'location' => 'grid',
'cellId' => 'c14' ),
'master_info' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field' => array( 'location' => 'grid',
'cellId' => 'c16' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'view_header' => array( 'view_header' ),
'view_back_list' => array( 'view_back_list' ),
'view_close' => array( 'view_close' ),
'hamburger' => array( 'hamburger' ),
'integrated_edit_field' => array( 'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field4',
'integrated_edit_field5',
'integrated_edit_field6',
'integrated_edit_field' ),
'view_pdf' => array( 'view_pdf' ),
'details_preview' => array( 'details_preview' ),
'master_info' => array( 'master_info' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0,
1,
2,
3 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'master_info' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c12' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field6' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c13' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field5' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c14' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field4' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c16' => array( 'cols' => array( 3 ),
'rows' => array( 1,
2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c9' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c10' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c11' => array( 'cols' => array( 2 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field3' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 0,
1,
2,
3 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'details_preview' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 0,
1,
2 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c20' => array( 'cols' => array( 3 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 4,
'height' => 5 ) ) ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false ),
'misc' => array( 'type' => 'view',
'breadcrumb' => false,
'nextPrev' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'view',
'type' => 'view',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'view-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1',
'colspan' => 2 ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'view-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'view_back_list',
'view_close' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'hamburger' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'view-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'view_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c3',
'colspan' => 4 ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c12' ),
array( 'cell' => 'c13' ),
array( 'cell' => 'c14' ),
array( 'cell' => 'c16',
'rowspan' => 2 ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c9' ),
array( 'cell' => 'c10' ),
array( 'cell' => 'c11' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c5',
'colspan' => 4 ) ) ),
array( 'cells' => array( array( 'cell' => 'c',
'colspan' => 3 ),
array( 'cell' => 'c20' ) ),
'section' => '' ) ),
'cells' => array( 'c5' => array( 'model' => 'c3',
'items' => array( 'details_preview' ),
'align' => 'center' ),
'c9' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field1' ) ),
'c10' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field2' ) ),
'c11' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field3' ) ),
'c12' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field6' ) ),
'c13' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field5' ) ),
'c14' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field4' ) ),
'c3' => array( 'model' => 'c3',
'items' => array( 'master_info' ) ),
'c' => array( 'model' => 'c3',
'items' => array(  ) ),
'c16' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field' ),
'align' => 'center' ),
'c20' => array( 'model' => 'c3',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'view_header' => array( 'type' => 'view_header' ),
'view_back_list' => array( 'type' => 'view_back_list' ),
'view_close' => array( 'type' => 'view_close' ),
'hamburger' => array( 'type' => 'hamburger',
'items' => array( 'view_pdf' ) ),
'integrated_edit_field1' => array( 'field' => 'Cto',
'type' => 'integrated_edit_field',
'orientation' => 0,
'bold' => true ),
'integrated_edit_field2' => array( 'field' => 'Latitud',
'type' => 'integrated_edit_field',
'orientation' => 0,
'bold' => true ),
'integrated_edit_field3' => array( 'field' => 'Longitud',
'type' => 'integrated_edit_field',
'orientation' => 0,
'bold' => true ),
'integrated_edit_field4' => array( 'field' => 'Spliter',
'type' => 'integrated_edit_field',
'orientation' => 0,
'bold' => true ),
'integrated_edit_field5' => array( 'field' => 'Cable',
'type' => 'integrated_edit_field',
'orientation' => 0,
'bold' => true ),
'integrated_edit_field6' => array( 'field' => 'Localidad',
'type' => 'integrated_edit_field',
'orientation' => 0,
'bold' => true ),
'view_pdf' => array( 'type' => 'view_pdf',
'targetPages' => array(  ),
'splitModes' => array(  ),
'scopes' => array(  ) ),
'details_preview' => array( 'type' => 'details_preview',
'table' => 'puertos_cto',
'items' => array(  ),
'popup' => false,
'pageId' => 'list' ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'localidad' => 'true',
'cables' => 'true',
'spliters' => 'true' ) ),
'integrated_edit_field' => array( 'field' => 'Ubicacion',
'type' => 'integrated_edit_field',
'orientation' => 0,
'bold' => true ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>