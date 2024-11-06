<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => true,
'orientation' => 'portrait',
'scale' => 100 ),
'fields' => array( 'gridFields' => array( 'Puerto',
'Cto',
'Spliter',
'Cable',
'Localidad',
'Cedula',
'Ocupado',
'id_cto',
'id_spliter',
'id_cable',
'id_localidad' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'Puerto' => array( 'integrated_edit_field1' ),
'Cto' => array( 'integrated_edit_field2' ),
'Spliter' => array( 'integrated_edit_field3' ),
'Cable' => array( 'integrated_edit_field4' ),
'Localidad' => array( 'integrated_edit_field5' ),
'Cedula' => array( 'integrated_edit_field6' ),
'Ocupado' => array( 'integrated_edit_field8' ),
'id_cto' => array( 'integrated_edit_field' ),
'id_spliter' => array( 'integrated_edit_field7' ),
'id_cable' => array( 'integrated_edit_field9' ),
'id_localidad' => array( 'integrated_edit_field10' ) ) ),
'pageLinks' => array( 'edit' => true,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'view_header' ),
'below-grid' => array( 'view_back_list',
'view_close',
'hamburger' ),
'top' => array( 'image' ),
'grid' => array( 'integrated_edit_field5',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field4',
'integrated_edit_field1',
'integrated_edit_field7',
'integrated_edit_field6',
'integrated_edit_field9',
'integrated_edit_field8',
'integrated_edit_field10',
'integrated_edit_field' ) ),
'formXtTags' => array(  ),
'itemForms' => array( 'view_header' => 'above-grid',
'view_back_list' => 'below-grid',
'view_close' => 'below-grid',
'hamburger' => 'below-grid',
'image' => 'top',
'integrated_edit_field5' => 'grid',
'integrated_edit_field2' => 'grid',
'integrated_edit_field3' => 'grid',
'integrated_edit_field4' => 'grid',
'integrated_edit_field1' => 'grid',
'integrated_edit_field7' => 'grid',
'integrated_edit_field6' => 'grid',
'integrated_edit_field9' => 'grid',
'integrated_edit_field8' => 'grid',
'integrated_edit_field10' => 'grid',
'integrated_edit_field' => 'grid' ),
'itemLocations' => array( 'integrated_edit_field5' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field2' => array( 'location' => 'grid',
'cellId' => 'c' ),
'integrated_edit_field3' => array( 'location' => 'grid',
'cellId' => 'c4' ),
'integrated_edit_field4' => array( 'location' => 'grid',
'cellId' => 'c5' ),
'integrated_edit_field1' => array( 'location' => 'grid',
'cellId' => 'c10' ),
'integrated_edit_field7' => array( 'location' => 'grid',
'cellId' => 'c10' ),
'integrated_edit_field6' => array( 'location' => 'grid',
'cellId' => 'c11' ),
'integrated_edit_field9' => array( 'location' => 'grid',
'cellId' => 'c11' ),
'integrated_edit_field8' => array( 'location' => 'grid',
'cellId' => 'c12' ),
'integrated_edit_field10' => array( 'location' => 'grid',
'cellId' => 'c12' ),
'integrated_edit_field' => array( 'location' => 'grid',
'cellId' => 'c13' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'view_header' => array( 'view_header' ),
'view_back_list' => array( 'view_back_list' ),
'view_close' => array( 'view_close' ),
'hamburger' => array( 'hamburger' ),
'view_edit' => array( 'view_edit' ),
'integrated_edit_field' => array( 'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field4',
'integrated_edit_field5',
'integrated_edit_field6',
'integrated_edit_field8',
'integrated_edit_field',
'integrated_edit_field7',
'integrated_edit_field9',
'integrated_edit_field10' ),
'view_pdf' => array( 'view_pdf' ),
'image' => array( 'image' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field5' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field4' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field3' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c10' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field1',
'integrated_edit_field7' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c11' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field6',
'integrated_edit_field9' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c12' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field8',
'integrated_edit_field10' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c13' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 4,
'height' => 2 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
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
'items' => array( 'view_header' ) ) ),
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
'items' => array( 'image' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c3' ),
array( 'cell' => 'c5' ),
array( 'cell' => 'c4' ),
array( 'cell' => 'c' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c10' ),
array( 'cell' => 'c11' ),
array( 'cell' => 'c12' ),
array( 'cell' => 'c13' ) ) ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field5' ) ),
'c' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field2' ) ),
'c4' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field3' ) ),
'c5' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field4' ) ),
'c10' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field1',
'integrated_edit_field7' ) ),
'c11' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field6',
'integrated_edit_field9' ) ),
'c12' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field8',
'integrated_edit_field10' ) ),
'c13' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'view_header' => array( 'type' => 'view_header',
'title' => array( 'page' => 'view',
'table' => 'Ingresar_cliente',
'type' => 7 ) ),
'view_back_list' => array( 'type' => 'view_back_list' ),
'view_close' => array( 'type' => 'view_close' ),
'hamburger' => array( 'type' => 'hamburger',
'items' => array( 'view_edit',
'view_pdf' ) ),
'view_edit' => array( 'type' => 'view_edit' ),
'integrated_edit_field1' => array( 'field' => 'Puerto',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field2' => array( 'field' => 'Cto',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field3' => array( 'field' => 'Spliter',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field4' => array( 'field' => 'Cable',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field5' => array( 'field' => 'Localidad',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field6' => array( 'field' => 'Cedula',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field8' => array( 'field' => 'Ocupado',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'view_pdf' => array( 'type' => 'view_pdf',
'targetPages' => array(  ),
'splitModes' => array(  ),
'scopes' => array(  ) ),
'image' => array( 'type' => 'image',
'image' => array( 'image' => 'logo-eiasa-new.png',
'source' => 2 ) ),
'integrated_edit_field' => array( 'field' => 'id_cto',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field7' => array( 'field' => 'id_spliter',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field9' => array( 'field' => 'id_cable',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field10' => array( 'field' => 'id_localidad',
'type' => 'integrated_edit_field',
'orientation' => 0 ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>