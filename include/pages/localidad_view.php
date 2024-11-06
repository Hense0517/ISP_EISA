<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => true,
'orientation' => 'portrait',
'scale' => 100 ),
'details' => array( 'cables' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'Mapa_General' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'tarjeta_olt' => array( 'displayPreview' => 1 ) ),
'fields' => array( 'gridFields' => array( 'Localidad',
'Tipo_Olt',
'Serial_Olt',
'Tipo_Mikrotik',
'Serial_Mikrotik',
'Serial_Ont_Prueba',
'Serial_Raspberry',
'Serial_Camara',
'Nombre_del_custodio',
'Telefono_del_custodio',
'Contrato_de_energia',
'Latitud',
'Longitud',
'Direccion',
'Observaciones',
'Mapa',
'Foto',
'qr' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'Localidad' => array( 'integrated_edit_field1' ),
'Tipo_Olt' => array( 'integrated_edit_field2' ),
'Serial_Olt' => array( 'integrated_edit_field3' ),
'Tipo_Mikrotik' => array( 'integrated_edit_field4' ),
'Serial_Mikrotik' => array( 'integrated_edit_field5' ),
'Serial_Ont_Prueba' => array( 'integrated_edit_field6' ),
'Serial_Raspberry' => array( 'integrated_edit_field7' ),
'Serial_Camara' => array( 'integrated_edit_field8' ),
'Nombre_del_custodio' => array( 'integrated_edit_field9' ),
'Telefono_del_custodio' => array( 'integrated_edit_field10' ),
'Contrato_de_energia' => array( 'integrated_edit_field11' ),
'Latitud' => array( 'integrated_edit_field12' ),
'Longitud' => array( 'integrated_edit_field13' ),
'Direccion' => array( 'integrated_edit_field15' ),
'Observaciones' => array( 'integrated_edit_field16' ),
'Mapa' => array( 'integrated_edit_field' ),
'Foto' => array( 'integrated_edit_field14' ),
'qr' => array( 'integrated_edit_field17' ) ) ),
'pageLinks' => array( 'edit' => true,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array(  ),
'below-grid' => array( 'view_back_list',
'view_close',
'hamburger' ),
'top' => array( 'view_header' ),
'grid' => array( 'tabs',
'details_preview' ),
'section' => array( 'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field11',
'integrated_edit_field3',
'integrated_edit_field14',
'integrated_edit_field17' ),
'section1' => array( 'integrated_edit_field8',
'integrated_edit_field4',
'integrated_edit_field6',
'integrated_edit_field5',
'integrated_edit_field7' ),
'section2' => array( 'integrated_edit_field9',
'integrated_edit_field10' ),
'section3' => array( 'integrated_edit_field16' ),
'section4' => array( 'integrated_edit_field12',
'integrated_edit_field13',
'integrated_edit_field15',
'integrated_edit_field' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'view_back_list' => 'below-grid',
'view_close' => 'below-grid',
'hamburger' => 'below-grid',
'view_header' => 'top',
'tabs' => 'grid',
'details_preview' => 'grid',
'integrated_edit_field1' => 'section',
'integrated_edit_field2' => 'section',
'integrated_edit_field11' => 'section',
'integrated_edit_field3' => 'section',
'integrated_edit_field14' => 'section',
'integrated_edit_field17' => 'section',
'integrated_edit_field8' => 'section1',
'integrated_edit_field4' => 'section1',
'integrated_edit_field6' => 'section1',
'integrated_edit_field5' => 'section1',
'integrated_edit_field7' => 'section1',
'integrated_edit_field9' => 'section2',
'integrated_edit_field10' => 'section2',
'integrated_edit_field16' => 'section3',
'integrated_edit_field12' => 'section4',
'integrated_edit_field13' => 'section4',
'integrated_edit_field15' => 'section4',
'integrated_edit_field' => 'section4' ),
'itemLocations' => array( 'tabs' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'details_preview' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field1' => array( 'location' => 'section',
'cellId' => 'c' ),
'integrated_edit_field2' => array( 'location' => 'section',
'cellId' => 'c2' ),
'integrated_edit_field11' => array( 'location' => 'section',
'cellId' => 'c8' ),
'integrated_edit_field3' => array( 'location' => 'section',
'cellId' => 'c9' ),
'integrated_edit_field14' => array( 'location' => 'section',
'cellId' => 'c10' ),
'integrated_edit_field17' => array( 'location' => 'section',
'cellId' => 'c11' ),
'integrated_edit_field8' => array( 'location' => 'section1',
'cellId' => 'c1' ),
'integrated_edit_field4' => array( 'location' => 'section1',
'cellId' => 'c' ),
'integrated_edit_field6' => array( 'location' => 'section1',
'cellId' => 'c2' ),
'integrated_edit_field5' => array( 'location' => 'section1',
'cellId' => 'c3' ),
'integrated_edit_field7' => array( 'location' => 'section1',
'cellId' => 'c4' ),
'integrated_edit_field9' => array( 'location' => 'section2',
'cellId' => 'c1' ),
'integrated_edit_field10' => array( 'location' => 'section2',
'cellId' => 'c' ),
'integrated_edit_field16' => array( 'location' => 'section3',
'cellId' => 'c1' ),
'integrated_edit_field12' => array( 'location' => 'section4',
'cellId' => 'c1' ),
'integrated_edit_field13' => array( 'location' => 'section4',
'cellId' => 'c' ),
'integrated_edit_field15' => array( 'location' => 'section4',
'cellId' => 'c7' ),
'integrated_edit_field' => array( 'location' => 'section4',
'cellId' => 'c8' ) ),
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
'integrated_edit_field7',
'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field10',
'integrated_edit_field11',
'integrated_edit_field12',
'integrated_edit_field13',
'integrated_edit_field15',
'integrated_edit_field16',
'integrated_edit_field',
'integrated_edit_field14',
'integrated_edit_field17' ),
'tabs' => array( 'tabs' ),
'view_edit' => array( 'view_edit' ),
'view_pdf' => array( 'view_pdf' ),
'details_preview' => array( 'details_preview' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'tabs',
'details_preview' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ),
'section' => array( 'cells' => array( 'c' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c8' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field11' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c2' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c9' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field3' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c10' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field14' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c11' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field17' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c12' => array( 'cols' => array( 2 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 3,
'height' => 3 ),
'section1' => array( 'cells' => array( 'c' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field4' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c3' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field5' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c2' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field6' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field7' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c1' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field8' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 3 ),
'section2' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field9' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field10' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 1 ),
'section3' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field16' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ),
'section4' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field12' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field13' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c8' => array( 'cols' => array( 2 ),
'rows' => array( 0,
1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c7' => array( 'cols' => array( 0,
1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field15' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 3,
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
'grid' => array( array( 'cells' => array( array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'tabs',
'details_preview' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ),
array( 'cell' => 'c8' ),
array( 'cell' => 'c4' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c2' ),
array( 'cell' => 'c9' ),
array( 'cell' => 'c5' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c10' ),
array( 'cell' => 'c11' ),
array( 'cell' => 'c12' ) ) ) ),
'cells' => array( 'c' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field1' ) ),
'c2' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field2' ) ),
'c4' => array( 'model' => 'c1',
'items' => array(  ) ),
'c5' => array( 'model' => 'c1',
'items' => array(  ) ),
'c8' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field11' ) ),
'c9' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field3' ) ),
'c10' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field14' ) ),
'c11' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field17' ) ),
'c12' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section1' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ),
array( 'cell' => 'c3' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c2' ),
array( 'cell' => 'c4' ) ) ),
array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c5' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field8' ) ),
'c' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field4' ) ),
'c2' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field6' ) ),
'c3' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field5' ) ),
'c4' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field7' ) ),
'c5' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section2' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field9' ) ),
'c' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field10' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section3' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field16' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section4' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1',
'rowspan' => 1 ),
array( 'cell' => 'c',
'rowspan' => 1,
'colspan' => 1 ),
array( 'cell' => 'c8',
'rowspan' => 2 ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c7',
'colspan' => 2 ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field12' ) ),
'c' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field13' ) ),
'c7' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field15' ) ),
'c8' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field' ) ) ),
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
'integrated_edit_field1' => array( 'field' => 'Localidad',
'type' => 'integrated_edit_field',
'orientation' => 0,
'bold' => true ),
'integrated_edit_field2' => array( 'field' => 'Tipo_Olt',
'type' => 'integrated_edit_field',
'orientation' => 0,
'bold' => true ),
'integrated_edit_field3' => array( 'field' => 'Serial_Olt',
'type' => 'integrated_edit_field',
'orientation' => 0,
'bold' => true ),
'integrated_edit_field4' => array( 'field' => 'Tipo_Mikrotik',
'type' => 'integrated_edit_field',
'orientation' => 0,
'bold' => true ),
'integrated_edit_field5' => array( 'field' => 'Serial_Mikrotik',
'type' => 'integrated_edit_field',
'orientation' => 0,
'bold' => true ),
'integrated_edit_field6' => array( 'field' => 'Serial_Ont_Prueba',
'type' => 'integrated_edit_field',
'orientation' => 0,
'bold' => true ),
'integrated_edit_field7' => array( 'field' => 'Serial_Raspberry',
'type' => 'integrated_edit_field',
'orientation' => 0,
'bold' => true ),
'integrated_edit_field8' => array( 'field' => 'Serial_Camara',
'type' => 'integrated_edit_field',
'orientation' => 0,
'bold' => true ),
'integrated_edit_field9' => array( 'field' => 'Nombre_del_custodio',
'type' => 'integrated_edit_field',
'orientation' => 0,
'bold' => true ),
'integrated_edit_field10' => array( 'field' => 'Telefono_del_custodio',
'type' => 'integrated_edit_field',
'orientation' => 0,
'bold' => true ),
'integrated_edit_field11' => array( 'field' => 'Contrato_de_energia',
'type' => 'integrated_edit_field',
'orientation' => 0,
'bold' => true ),
'integrated_edit_field12' => array( 'field' => 'Latitud',
'type' => 'integrated_edit_field',
'orientation' => 0,
'bold' => true ),
'integrated_edit_field13' => array( 'field' => 'Longitud',
'type' => 'integrated_edit_field',
'orientation' => 0,
'bold' => true ),
'integrated_edit_field15' => array( 'field' => 'Direccion',
'type' => 'integrated_edit_field',
'orientation' => 0,
'bold' => true ),
'integrated_edit_field16' => array( 'field' => 'Observaciones',
'type' => 'integrated_edit_field',
'orientation' => 0,
'bold' => true ),
'tabs' => array( 'type' => 'tabs',
'titles' => array( array( 'text' => 'Datos Generales',
'type' => 0 ),
array( 'text' => 'Ubicación',
'type' => 0 ),
array( 'text' => 'Equipos Instalados',
'type' => 0 ),
array( 'text' => 'Datos del Custodio',
'type' => 0 ),
array( 'text' => 'Observaciones',
'type' => 0 ) ),
'locations' => array( 'section',
'section4',
'section1',
'section2',
'section3' ),
'bsStyle' => 'default',
'panelType' => 2 ),
'view_edit' => array( 'type' => 'view_edit' ),
'view_pdf' => array( 'type' => 'view_pdf',
'targetPages' => array(  ),
'splitModes' => array(  ),
'scopes' => array(  ) ),
'integrated_edit_field' => array( 'field' => 'Mapa',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field14' => array( 'field' => 'Foto',
'type' => 'integrated_edit_field',
'orientation' => 0,
'bold' => true ),
'integrated_edit_field17' => array( 'field' => 'qr',
'type' => 'integrated_edit_field',
'orientation' => 0,
'bold' => true ),
'details_preview' => array( 'type' => 'details_preview',
'table' => 'tarjeta_olt',
'items' => array(  ),
'popup' => false ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image',
'image' => null,
'shadow' => false,
'fullSize' => true ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>