<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'totals' => array( 'Localidad' => array( 'totalsType' => '' ),
'cable' => array( 'totalsType' => '' ),
'spliter' => array( 'totalsType' => '' ),
'Cto' => array( 'totalsType' => '' ),
'Latitud' => array( 'totalsType' => '' ),
'Longitud' => array( 'totalsType' => '' ),
'DisplayOnMap' => array( 'totalsType' => '' ),
'id_localidad' => array( 'totalsType' => '' ),
'id_cables' => array( 'totalsType' => '' ),
'id_spliters' => array( 'totalsType' => '' ),
'id_Ctos' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'Localidad',
'cable',
'spliter',
'Cto',
'Latitud',
'Longitud' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'Localidad' => array( 'simple_grid_field1',
'simple_grid_field6' ),
'cable' => array( 'simple_grid_field',
'simple_grid_field7' ),
'spliter' => array( 'simple_grid_field2',
'simple_grid_field8' ),
'Cto' => array( 'simple_grid_field3',
'simple_grid_field9' ),
'Latitud' => array( 'simple_grid_field4',
'simple_grid_field10' ),
'Longitud' => array( 'simple_grid_field5',
'simple_grid_field11' ) ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'print_pages' ),
'below-grid' => array(  ),
'top' => array( 'print_header',
'print_subheader' ),
'grid' => array( 'simple_grid_field6',
'simple_grid_field1',
'simple_grid_field7',
'simple_grid_field',
'simple_grid_field8',
'simple_grid_field2',
'simple_grid_field9',
'simple_grid_field3',
'simple_grid_field10',
'simple_grid_field4',
'simple_grid_field11',
'simple_grid_field5' ) ),
'formXtTags' => array( 'above-grid' => array( 'print_pages' ),
'below-grid' => array(  ) ),
'itemForms' => array( 'print_pages' => 'above-grid',
'print_header' => 'top',
'print_subheader' => 'top',
'simple_grid_field6' => 'grid',
'simple_grid_field1' => 'grid',
'simple_grid_field7' => 'grid',
'simple_grid_field' => 'grid',
'simple_grid_field8' => 'grid',
'simple_grid_field2' => 'grid',
'simple_grid_field9' => 'grid',
'simple_grid_field3' => 'grid',
'simple_grid_field10' => 'grid',
'simple_grid_field4' => 'grid',
'simple_grid_field11' => 'grid',
'simple_grid_field5' => 'grid' ),
'itemLocations' => array( 'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field8' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'simple_grid_field9' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'simple_grid_field10' => array( 'location' => 'grid',
'cellId' => 'headcell_field4' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ),
'simple_grid_field11' => array( 'location' => 'grid',
'cellId' => 'headcell_field5' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'cell_field5' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'print_header' => array( 'print_header' ),
'print_subheader' => array( 'print_subheader' ),
'print_pages' => array( 'print_pages' ),
'grid_field' => array( 'simple_grid_field1',
'simple_grid_field',
'simple_grid_field2',
'simple_grid_field3',
'simple_grid_field4',
'simple_grid_field5' ),
'grid_field_label' => array( 'simple_grid_field6',
'simple_grid_field7',
'simple_grid_field8',
'simple_grid_field9',
'simple_grid_field10',
'simple_grid_field11' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array( 'Localidad_fieldheadercolumn' ),
'items' => array( 'simple_grid_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array( 'cable_fieldheadercolumn' ),
'items' => array( 'simple_grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array( 'spliter_fieldheadercolumn' ),
'items' => array( 'simple_grid_field8' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'Cto_fieldheadercolumn' ),
'items' => array( 'simple_grid_field9' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'Latitud_fieldheadercolumn' ),
'items' => array( 'simple_grid_field10' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 'Longitud_fieldheadercolumn' ),
'items' => array( 'simple_grid_field11' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'Localidad_fieldcolumn' ),
'items' => array( 'simple_grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'cable_fieldcolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array( 'spliter_fieldcolumn' ),
'items' => array( 'simple_grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'Cto_fieldcolumn' ),
'items' => array( 'simple_grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'Latitud_fieldcolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 'Longitud_fieldcolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 6,
'height' => 3 ) ) ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array( 'print_pages' => array( 'tag' => 'PRINT_PAGES',
'type' => 2 ) ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'gridType' => 0,
'recsPerRow' => 1,
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false ),
'misc' => array( 'type' => 'print',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'print',
'type' => 'print',
'layoutId' => 'basic',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'print-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'print_pages' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'print-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'print-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'print_header',
'print_subheader' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_field' ),
array( 'cell' => 'headcell_field1' ),
array( 'cell' => 'headcell_field2' ),
array( 'cell' => 'headcell_field3' ),
array( 'cell' => 'headcell_field4' ),
array( 'cell' => 'headcell_field5' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_field' ),
array( 'cell' => 'cell_field1' ),
array( 'cell' => 'cell_field2' ),
array( 'cell' => 'cell_field3' ),
array( 'cell' => 'cell_field4' ),
array( 'cell' => 'cell_field5' ) ) ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_field' ),
array( 'cell' => 'footcell_field1' ),
array( 'cell' => 'footcell_field2' ),
array( 'cell' => 'footcell_field3' ),
array( 'cell' => 'footcell_field4' ),
array( 'cell' => 'footcell_field5' ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field6' ),
'field' => 'Localidad',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field1' ),
'field' => 'Localidad',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field7' ),
'field' => 'cable',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field' ),
'field' => 'cable',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field8' ),
'field' => 'spliter',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field2' ),
'field' => 'spliter',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field9' ),
'field' => 'Cto',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field3' ),
'field' => 'Cto',
'columnName' => 'field' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field4' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field10' ),
'field' => 'Latitud',
'columnName' => 'field' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 'Latitud',
'columnName' => 'field' ),
'footcell_field4' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field5' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field11' ),
'field' => 'Longitud',
'columnName' => 'field' ),
'cell_field5' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field5' ),
'field' => 'Longitud',
'columnName' => 'field' ),
'footcell_field5' => array( 'model' => 'footcell_field',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'print_header' => array( 'type' => 'print_header' ),
'print_subheader' => array( 'type' => 'print_subheader' ),
'print_pages' => array( 'type' => 'print_pages' ),
'simple_grid_field1' => array( 'field' => 'Localidad',
'type' => 'grid_field' ),
'simple_grid_field6' => array( 'type' => 'grid_field_label',
'field' => 'Localidad' ),
'simple_grid_field' => array( 'field' => 'cable',
'type' => 'grid_field' ),
'simple_grid_field7' => array( 'type' => 'grid_field_label',
'field' => 'cable' ),
'simple_grid_field2' => array( 'field' => 'spliter',
'type' => 'grid_field' ),
'simple_grid_field8' => array( 'type' => 'grid_field_label',
'field' => 'spliter' ),
'simple_grid_field3' => array( 'field' => 'Cto',
'type' => 'grid_field' ),
'simple_grid_field9' => array( 'type' => 'grid_field_label',
'field' => 'Cto' ),
'simple_grid_field4' => array( 'field' => 'Latitud',
'type' => 'grid_field' ),
'simple_grid_field10' => array( 'type' => 'grid_field_label',
'field' => 'Latitud' ),
'simple_grid_field5' => array( 'field' => 'Longitud',
'type' => 'grid_field' ),
'simple_grid_field11' => array( 'type' => 'grid_field_label',
'field' => 'Longitud' ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>