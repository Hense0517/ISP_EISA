<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => true,
'orientation' => 'portrait',
'scale' => 100 ),
'details' => array( 'spliters' => array( 'displayPreview' => 1,
'previewPageId' => 'list' ),
'Clientes_por_puerto' => array( 'displayPreview' => 1,
'previewPageId' => 'list' ) ),
'master' => array( 'tarjeta_olt' => array( 'preview' => false ) ),
'fields' => array( 'gridFields' => array( 'Odf',
'tarjeta',
'localidad',
'cable',
'spliter',
'puerto',
'Bandeja',
'Puerto_del_odf',
'Observaciones',
'Barrio',
'Fin_de_Fibra' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'Odf' => array( 'integrated_edit_field' ),
'tarjeta' => array( 'integrated_edit_field1' ),
'localidad' => array( 'integrated_edit_field2' ),
'cable' => array( 'integrated_edit_field3' ),
'spliter' => array( 'integrated_edit_field4' ),
'puerto' => array( 'integrated_edit_field5' ),
'Bandeja' => array( 'integrated_edit_field6' ),
'Puerto_del_odf' => array( 'integrated_edit_field7' ),
'Observaciones' => array( 'integrated_edit_field8' ),
'Barrio' => array( 'integrated_edit_field9' ),
'Fin_de_Fibra' => array( 'integrated_edit_field10' ) ) ),
'pageLinks' => array( 'edit' => true,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array(  ),
'below-grid' => array( 'view_back_list',
'view_close',
'hamburger' ),
'top' => array( 'view_header' ),
'grid' => array( 'integrated_edit_field5',
'integrated_edit_field2',
'integrated_edit_field1',
'integrated_edit_field6',
'integrated_edit_field7',
'integrated_edit_field9',
'integrated_edit_field3',
'integrated_edit_field4',
'integrated_edit_field',
'integrated_edit_field8',
'details_preview',
'details_preview1',
'details_preview2',
'integrated_edit_field10' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'view_back_list' => 'below-grid',
'view_close' => 'below-grid',
'hamburger' => 'below-grid',
'view_header' => 'top',
'integrated_edit_field5' => 'grid',
'integrated_edit_field2' => 'grid',
'integrated_edit_field1' => 'grid',
'integrated_edit_field6' => 'grid',
'integrated_edit_field7' => 'grid',
'integrated_edit_field9' => 'grid',
'integrated_edit_field3' => 'grid',
'integrated_edit_field4' => 'grid',
'integrated_edit_field' => 'grid',
'integrated_edit_field8' => 'grid',
'details_preview' => 'grid',
'details_preview1' => 'grid',
'details_preview2' => 'grid',
'integrated_edit_field10' => 'grid' ),
'itemLocations' => array( 'integrated_edit_field5' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field2' => array( 'location' => 'grid',
'cellId' => 'c' ),
'integrated_edit_field1' => array( 'location' => 'grid',
'cellId' => 'c4' ),
'integrated_edit_field6' => array( 'location' => 'grid',
'cellId' => 'c5' ),
'integrated_edit_field7' => array( 'location' => 'grid',
'cellId' => 'c6' ),
'integrated_edit_field9' => array( 'location' => 'grid',
'cellId' => 'c7' ),
'integrated_edit_field3' => array( 'location' => 'grid',
'cellId' => 'c8' ),
'integrated_edit_field4' => array( 'location' => 'grid',
'cellId' => 'c9' ),
'integrated_edit_field' => array( 'location' => 'grid',
'cellId' => 'c10' ),
'integrated_edit_field8' => array( 'location' => 'grid',
'cellId' => 'c11' ),
'details_preview' => array( 'location' => 'grid',
'cellId' => 'c12' ),
'details_preview1' => array( 'location' => 'grid',
'cellId' => 'c12' ),
'details_preview2' => array( 'location' => 'grid',
'cellId' => 'c12' ),
'integrated_edit_field10' => array( 'location' => 'grid',
'cellId' => 'c14' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'view_header' => array( 'view_header' ),
'view_back_list' => array( 'view_back_list' ),
'view_close' => array( 'view_close' ),
'hamburger' => array( 'hamburger' ),
'view_edit' => array( 'view_edit' ),
'integrated_edit_field' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field4',
'integrated_edit_field5',
'integrated_edit_field6',
'integrated_edit_field7',
'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field10' ),
'details_preview' => array( 'details_preview',
'details_preview1',
'details_preview2' ),
'view_pdf' => array( 'view_pdf' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field5' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c8' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field3' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c9' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field4' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c10' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field6' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c6' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field7' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c7' => array( 'cols' => array( 2 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field9' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c14' => array( 'cols' => array( 0,
1,
2 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field10' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c11' => array( 'cols' => array( 0,
1,
2 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field8' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c12' => array( 'cols' => array( 0,
1,
2 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array( 'details_preview',
'details_preview1',
'details_preview2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c13' => array( 'cols' => array( 0,
1,
2 ),
'rows' => array( 6 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 3,
'height' => 7 ) ) ),
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
'grid' => array( array( 'cells' => array( array( 'cell' => 'c3' ),
array( 'cell' => 'c4' ),
array( 'cell' => 'c' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c8' ),
array( 'cell' => 'c9' ),
array( 'cell' => 'c10' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c5' ),
array( 'cell' => 'c6' ),
array( 'cell' => 'c7' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c14',
'colspan' => 3 ) ) ),
array( 'cells' => array( array( 'cell' => 'c11',
'colspan' => 3 ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c12',
'colspan' => 3 ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c13',
'colspan' => 3 ) ),
'section' => '' ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field5' ) ),
'c' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field2' ) ),
'c4' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field1' ) ),
'c5' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field6' ) ),
'c6' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field7' ) ),
'c7' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field9' ) ),
'c8' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field3' ) ),
'c9' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field4' ) ),
'c10' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field' ) ),
'c11' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field8' ) ),
'c12' => array( 'model' => 'c3',
'items' => array( 'details_preview',
'details_preview1',
'details_preview2' ) ),
'c13' => array( 'model' => 'c3',
'items' => array(  ) ),
'c14' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field10' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'view_header' => array( 'type' => 'view_header' ),
'view_back_list' => array( 'type' => 'view_back_list' ),
'view_close' => array( 'type' => 'view_close' ),
'hamburger' => array( 'type' => 'hamburger',
'items' => array( 'view_edit',
'view_pdf' ) ),
'view_edit' => array( 'type' => 'view_edit' ),
'integrated_edit_field' => array( 'field' => 'Odf',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field1' => array( 'field' => 'tarjeta',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field2' => array( 'field' => 'localidad',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field3' => array( 'field' => 'cable',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field4' => array( 'field' => 'spliter',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field5' => array( 'field' => 'puerto',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field6' => array( 'field' => 'Bandeja',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field7' => array( 'field' => 'Puerto_del_odf',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'details_preview' => array( 'type' => 'details_preview',
'table' => 'spliters',
'items' => array(  ),
'popup' => false,
'pageId' => 'list' ),
'details_preview1' => array( 'type' => 'details_preview',
'table' => 'puertos_cto_view',
'items' => array(  ),
'popup' => false ),
'details_preview2' => array( 'type' => 'details_preview',
'table' => 'Clientes_por_puerto',
'items' => array(  ),
'popup' => false,
'pageId' => 'list' ),
'integrated_edit_field8' => array( 'field' => 'Observaciones',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'view_pdf' => array( 'type' => 'view_pdf',
'targetPages' => array(  ),
'splitModes' => array(  ),
'scopes' => array(  ) ),
'integrated_edit_field9' => array( 'field' => 'Barrio',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field10' => array( 'field' => 'Fin_de_Fibra',
'type' => 'integrated_edit_field',
'orientation' => 0 ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>