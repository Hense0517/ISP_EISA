<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'details' => array( 'puertos_cto' => array( 'displayPreview' => 1,
'previewPageId' => 'list' ) ),
'master' => array( 'spliters' => array( 'preview' => false ) ),
'fields' => array( 'gridFields' => array( 'Cto',
'Latitud',
'Longitud',
'Spliter',
'Cable',
'Localidad',
'id_Ctos',
'Ubicacion' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'Cto' => array( 'integrated_edit_field1' ),
'Latitud' => array( 'integrated_edit_field2' ),
'Longitud' => array( 'integrated_edit_field3' ),
'Spliter' => array( 'integrated_edit_field4' ),
'Cable' => array( 'integrated_edit_field5' ),
'Localidad' => array( 'integrated_edit_field6' ),
'id_Ctos' => array( 'integrated_edit_field' ),
'Ubicacion' => array( 'integrated_edit_field7' ) ) ),
'pageLinks' => array( 'edit' => true,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array(  ),
'below-grid' => array( 'view_back_list',
'view_close',
'hamburger' ),
'top' => array( 'view_header' ),
'grid' => array( 'integrated_edit_field1',
'integrated_edit_field3',
'integrated_edit_field2',
'integrated_edit_field4',
'integrated_edit_field5',
'integrated_edit_field6',
'integrated_edit_field',
'details_preview',
'integrated_edit_field7' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'view_back_list' => 'below-grid',
'view_close' => 'below-grid',
'hamburger' => 'below-grid',
'view_header' => 'top',
'integrated_edit_field1' => 'grid',
'integrated_edit_field3' => 'grid',
'integrated_edit_field2' => 'grid',
'integrated_edit_field4' => 'grid',
'integrated_edit_field5' => 'grid',
'integrated_edit_field6' => 'grid',
'integrated_edit_field' => 'grid',
'details_preview' => 'grid',
'integrated_edit_field7' => 'grid' ),
'itemLocations' => array( 'integrated_edit_field1' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field3' => array( 'location' => 'grid',
'cellId' => 'c' ),
'integrated_edit_field2' => array( 'location' => 'grid',
'cellId' => 'c4' ),
'integrated_edit_field4' => array( 'location' => 'grid',
'cellId' => 'c1' ),
'integrated_edit_field5' => array( 'location' => 'grid',
'cellId' => 'c2' ),
'integrated_edit_field6' => array( 'location' => 'grid',
'cellId' => 'c5' ),
'integrated_edit_field' => array( 'location' => 'grid',
'cellId' => 'c6' ),
'details_preview' => array( 'location' => 'grid',
'cellId' => 'c9' ),
'integrated_edit_field7' => array( 'location' => 'grid',
'cellId' => 'c10' ) ),
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
'integrated_edit_field',
'integrated_edit_field7' ),
'details_preview' => array( 'details_preview' ),
'view_edit' => array( 'view_edit' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c6' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c7' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c8' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c10' => array( 'cols' => array( 3 ),
'rows' => array( 0,
1,
2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field7' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c3' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field3' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c1' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field4' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c2' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field5' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 2 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field6' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c9' => array( 'cols' => array( 0,
1,
2,
3 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'details_preview' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 4,
'height' => 4 ) ) ),
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
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c6' ),
array( 'cell' => 'c7' ),
array( 'cell' => 'c8' ),
array( 'cell' => 'c10',
'rowspan' => 3 ) ) ),
array( 'cells' => array( array( 'cell' => 'c3' ),
array( 'cell' => 'c4' ),
array( 'cell' => 'c' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ),
array( 'cell' => 'c5' ) ) ),
array( 'cells' => array( array( 'cell' => 'c9',
'colspan' => 4 ) ),
'section' => '' ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field1' ),
'align' => 'center' ),
'c' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field3' ),
'align' => 'center' ),
'c4' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field2' ),
'align' => 'center' ),
'c1' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field4' ),
'align' => 'center' ),
'c2' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field5' ),
'align' => 'center' ),
'c5' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field6' ),
'align' => 'center' ),
'c6' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field' ) ),
'c7' => array( 'model' => 'c3',
'items' => array(  ) ),
'c8' => array( 'model' => 'c3',
'items' => array(  ) ),
'c9' => array( 'model' => 'c3',
'items' => array( 'details_preview' ) ),
'c10' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field7' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'view_header' => array( 'type' => 'view_header' ),
'view_back_list' => array( 'type' => 'view_back_list' ),
'view_close' => array( 'type' => 'view_close' ),
'hamburger' => array( 'type' => 'hamburger',
'items' => array( 'view_edit' ) ),
'integrated_edit_field1' => array( 'field' => 'Cto',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field2' => array( 'field' => 'Latitud',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field3' => array( 'field' => 'Longitud',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field4' => array( 'field' => 'Spliter',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field5' => array( 'field' => 'Cable',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field6' => array( 'field' => 'Localidad',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field' => array( 'field' => 'id_Ctos',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'details_preview' => array( 'type' => 'details_preview',
'table' => 'puertos_cto',
'items' => array(  ),
'popup' => false,
'pageId' => 'list' ),
'integrated_edit_field7' => array( 'field' => 'Ubicacion',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'view_edit' => array( 'type' => 'view_edit' ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>