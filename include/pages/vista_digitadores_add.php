<?php
			$optionsArray = array( 'master' => array( 'spliters' => array( 'preview' => false ) ),
'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array( 'Cto',
'Latitud',
'Longitud',
'Spliter',
'Cable',
'Localidad' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'Cto' => array( 'integrated_edit_field' ),
'Latitud' => array( 'integrated_edit_field1' ),
'Longitud' => array( 'integrated_edit_field2' ),
'Spliter' => array( 'integrated_edit_field3' ),
'Cable' => array( 'integrated_edit_field4' ),
'Localidad' => array( 'integrated_edit_field5' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'add_message' ),
'below-grid' => array( 'add_save',
'add_reset',
'add_back_list',
'add_cancel' ),
'top' => array( 'add_header' ),
'grid' => array( 'integrated_edit_field',
'integrated_edit_field2',
'integrated_edit_field1',
'integrated_edit_field5',
'integrated_edit_field3',
'integrated_edit_field4',
'custom_button' ) ),
'formXtTags' => array( 'above-grid' => array( 'message_block' ) ),
'itemForms' => array( 'add_message' => 'above-grid',
'add_save' => 'below-grid',
'add_reset' => 'below-grid',
'add_back_list' => 'below-grid',
'add_cancel' => 'below-grid',
'add_header' => 'top',
'integrated_edit_field' => 'grid',
'integrated_edit_field2' => 'grid',
'integrated_edit_field1' => 'grid',
'integrated_edit_field5' => 'grid',
'integrated_edit_field3' => 'grid',
'integrated_edit_field4' => 'grid',
'custom_button' => 'grid' ),
'itemLocations' => array( 'integrated_edit_field' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field2' => array( 'location' => 'grid',
'cellId' => 'c' ),
'integrated_edit_field1' => array( 'location' => 'grid',
'cellId' => 'c4' ),
'integrated_edit_field5' => array( 'location' => 'grid',
'cellId' => 'c1' ),
'integrated_edit_field3' => array( 'location' => 'grid',
'cellId' => 'c2' ),
'integrated_edit_field4' => array( 'location' => 'grid',
'cellId' => 'c5' ),
'custom_button' => array( 'location' => 'grid',
'cellId' => 'c6' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'add_header' => array( 'add_header' ),
'add_back_list' => array( 'add_back_list' ),
'add_cancel' => array( 'add_cancel' ),
'add_message' => array( 'add_message' ),
'add_save' => array( 'add_save' ),
'add_reset' => array( 'add_reset' ),
'integrated_edit_field' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field4',
'integrated_edit_field5' ),
'custom_button' => array( 'custom_button' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field' ),
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
'c1' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field5' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c2' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field3' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field4' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c6' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => true,
'fixedAtClient' => true ),
'c7' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c8' => array( 'cols' => array( 2 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 3,
'height' => 3 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => true,
'customButtons' => array( 'refrescar_' ),
'hasNotifications' => false ),
'misc' => array( 'type' => 'add',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array( 'refrescar_' ) ) );
			$pageArray = array( 'id' => 'add',
'type' => 'add',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'add-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_message' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'add-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_save',
'add_reset',
'add_back_list',
'add_cancel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'add-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c3' ),
array( 'cell' => 'c4' ),
array( 'cell' => 'c' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ),
array( 'cell' => 'c5' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c6' ),
array( 'cell' => 'c7' ),
array( 'cell' => 'c8' ) ) ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field' ) ),
'c' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field2' ) ),
'c4' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field1' ) ),
'c1' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field5' ) ),
'c2' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field3' ) ),
'c5' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field4' ) ),
'c6' => array( 'model' => 'c3',
'items' => array( 'custom_button' ) ),
'c7' => array( 'model' => 'c3',
'items' => array(  ) ),
'c8' => array( 'model' => 'c3',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'add_header' => array( 'type' => 'add_header' ),
'add_back_list' => array( 'type' => 'add_back_list' ),
'add_cancel' => array( 'type' => 'add_cancel' ),
'add_message' => array( 'type' => 'add_message' ),
'add_save' => array( 'type' => 'add_save' ),
'add_reset' => array( 'type' => 'add_reset' ),
'integrated_edit_field' => array( 'field' => 'Cto',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field1' => array( 'field' => 'Latitud',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field2' => array( 'field' => 'Longitud',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'custom_button' => array( 'type' => 'custom_button',
'eventId' => 'refrescar_',
'label' => array( 'type' => 0,
'text' => 'Actualizar Ubicación' ),
'buttonStyle' => 'warning' ),
'integrated_edit_field3' => array( 'field' => 'Spliter',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field4' => array( 'field' => 'Cable',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field5' => array( 'field' => 'Localidad',
'type' => 'integrated_edit_field',
'orientation' => 0 ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>