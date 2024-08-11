<?php
			$optionsArray = array( 'list' => array( 'inlineAdd' => false,
'detailsAdd' => true,
'inlineEdit' => true,
'spreadsheetMode' => false,
'reorderRows' => false,
'addToBottom' => false,
'delete' => true,
'updateSelected' => true,
'clickSort' => true,
'sortDropdown' => false,
'showHideFields' => false,
'reorderFields' => false ),
'allDetails' => array( 'linkType' => 1 ),
'details' => array( 'puertos_cto' => array( 'displayPreview' => 2,
'previewPageId' => '',
'showCount' => true,
'hideEmptyChild' => false,
'hideEmptyPreview' => null,
'showProceedLink' => null,
'printDetails' => false ) ),
'master' => array( 'spliters' => array( 'preview' => true ) ),
'listSearch' => array( 'alwaysOnPanelFields' => array(  ),
'searchPanel' => true,
'fixedSearchPanel' => false,
'simpleSearchOptions' => false,
'searchSaving' => false ),
'totals' => array( 'id_Ctos' => array( 'totalsType' => '' ),
'Cto' => array( 'totalsType' => '' ),
'Latitud' => array( 'totalsType' => '' ),
'Longitud' => array( 'totalsType' => '' ),
'Spliter' => array( 'totalsType' => '' ),
'Cable' => array( 'totalsType' => '' ),
'Localidad' => array( 'totalsType' => '' ),
'DisplayOnMap' => array( 'totalsType' => '' ),
'Ubicacion' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'Cto',
'Spliter',
'Cable',
'Localidad',
'Latitud',
'Longitud' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array( 'Cto',
'id_Ctos',
'Localidad',
'Cable',
'Spliter',
'Longitud',
'Latitud' ),
'filterFields' => array(  ),
'inlineAddFields' => array(  ),
'inlineEditFields' => array( 'Cto',
'Spliter',
'Cable',
'Localidad',
'Latitud',
'Longitud' ),
'fieldItems' => array( 'Cto' => array( 'simple_grid_field',
'simple_grid_field1' ),
'Spliter' => array( 'grid_field',
'grid_field_label' ),
'Cable' => array( 'grid_field1',
'grid_field_label1' ),
'Localidad' => array( 'grid_field2',
'grid_field_label2' ),
'Latitud' => array( 'grid_field3',
'grid_field_label3' ),
'Longitud' => array( 'grid_field4',
'grid_field_label4' ) ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => true,
'add' => true,
'view' => true,
'print' => true ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'add',
'inline_add',
'inline_save_all',
'inline_cancel_all',
'delete',
'update_selected',
'details_found',
'page_size',
'print_panel' ),
'below-grid' => array( 'pagination' ),
'left' => array( 'logo',
'expand_button',
'menu',
'search_panel',
'image' ),
'supertop' => array( 'expand_menu_button',
'collapse_button',
'breadcrumb',
'simple_search',
'list_options',
'loginform_login',
'username_button' ),
'grid' => array( 'grid_checkbox_head',
'grid_checkbox',
'simple_grid_field',
'simple_grid_field1',
'grid_field_label',
'grid_field',
'grid_field_label1',
'grid_field1',
'grid_field_label2',
'grid_field2',
'grid_details_link',
'grid_edit',
'grid_inline_edit',
'grid_inline_save',
'grid_inline_cancel',
'grid_view',
'grid_field_label3',
'grid_field3',
'grid_field_label4',
'grid_field4' ),
'top' => array( 'master_info',
'map' ) ),
'formXtTags' => array( 'above-grid' => array( 'add_link',
'inlineadd_link',
'saveall_link',
'cancelall_link',
'deleteselected_link',
'updateselected_link',
'details_found',
'recsPerPage',
'print_friendly' ),
'below-grid' => array( 'pagination' ) ),
'itemForms' => array( 'add' => 'above-grid',
'inline_add' => 'above-grid',
'inline_save_all' => 'above-grid',
'inline_cancel_all' => 'above-grid',
'delete' => 'above-grid',
'update_selected' => 'above-grid',
'details_found' => 'above-grid',
'page_size' => 'above-grid',
'print_panel' => 'above-grid',
'pagination' => 'below-grid',
'logo' => 'left',
'expand_button' => 'left',
'menu' => 'left',
'search_panel' => 'left',
'image' => 'left',
'expand_menu_button' => 'supertop',
'collapse_button' => 'supertop',
'breadcrumb' => 'supertop',
'simple_search' => 'supertop',
'list_options' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'grid_checkbox_head' => 'grid',
'grid_checkbox' => 'grid',
'simple_grid_field' => 'grid',
'simple_grid_field1' => 'grid',
'grid_field_label' => 'grid',
'grid_field' => 'grid',
'grid_field_label1' => 'grid',
'grid_field1' => 'grid',
'grid_field_label2' => 'grid',
'grid_field2' => 'grid',
'grid_details_link' => 'grid',
'grid_edit' => 'grid',
'grid_inline_edit' => 'grid',
'grid_inline_save' => 'grid',
'grid_inline_cancel' => 'grid',
'grid_view' => 'grid',
'grid_field_label3' => 'grid',
'grid_field3' => 'grid',
'grid_field_label4' => 'grid',
'grid_field4' => 'grid',
'master_info' => 'top',
'map' => 'top' ),
'itemLocations' => array( 'grid_checkbox_head' => array( 'location' => 'grid',
'cellId' => 'headcell_checkbox' ),
'grid_checkbox' => array( 'location' => 'grid',
'cellId' => 'cell_checkbox' ),
'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'headcell_details' ),
'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_details' ),
'grid_field_label' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'grid_field_label1' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'grid_field_label2' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'grid_details_link' => array( 'location' => 'grid',
'cellId' => 'headcell_details2' ),
'grid_edit' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_inline_edit' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_inline_save' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_inline_cancel' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_view' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_field_label3' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'grid_field3' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'grid_field_label4' => array( 'location' => 'grid',
'cellId' => 'headcell_field4' ),
'grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ) ),
'itemVisiblity' => array( 'breadcrumb' => 5,
'expand_menu_button' => 2,
'print_panel' => 5,
'expand_button' => 5 ) ),
'itemsByType' => array( 'page_size' => array( 'page_size' ),
'details_found' => array( 'details_found' ),
'breadcrumb' => array( 'breadcrumb' ),
'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'simple_search' => array( 'simple_search' ),
'pagination' => array( 'pagination' ),
'grid_checkbox' => array( 'grid_checkbox' ),
'grid_checkbox_head' => array( 'grid_checkbox_head' ),
'search_panel' => array( 'search_panel' ),
'list_options' => array( 'list_options' ),
'show_search_panel' => array( 'show_search_panel' ),
'hide_search_panel' => array( 'hide_search_panel' ),
'search_panel_field' => array( 'search_panel_field',
'search_panel_field1',
'search_panel_field2',
'search_panel_field3',
'search_panel_field4',
'search_panel_field5',
'search_panel_field6' ),
'expand_menu_button' => array( 'expand_menu_button' ),
'collapse_button' => array( 'collapse_button' ),
'print_panel' => array( 'print_panel' ),
'print_scope' => array( 'print_scope' ),
'print_button' => array( 'print_button' ),
'print_records' => array( 'print_records' ),
'export' => array( 'export' ),
'-' => array( '-',
'-1',
'-2',
'-3',
'-4' ),
'export_selected' => array( 'export_selected' ),
'advsearch_link' => array( 'advsearch_link' ),
'grid_field_label' => array( 'simple_grid_field',
'grid_field_label',
'grid_field_label1',
'grid_field_label2',
'grid_field_label3',
'grid_field_label4' ),
'grid_field' => array( 'simple_grid_field1',
'grid_field',
'grid_field1',
'grid_field2',
'grid_field3',
'grid_field4' ),
'master_info' => array( 'master_info' ),
'grid_details_link' => array( 'grid_details_link' ),
'lang_selector' => array( 'lang_selector' ),
'grid_view' => array( 'grid_view' ),
'map' => array( 'map' ),
'grid_edit' => array( 'grid_edit' ),
'update_selected' => array( 'update_selected' ),
'edit_selected' => array( 'edit_selected' ),
'grid_inline_edit' => array( 'grid_inline_edit' ),
'grid_inline_save' => array( 'grid_inline_save' ),
'grid_inline_cancel' => array( 'grid_inline_cancel' ),
'inline_save_all' => array( 'inline_save_all' ),
'inline_cancel_all' => array( 'inline_cancel_all' ),
'add' => array( 'add' ),
'delete' => array( 'delete' ),
'delete_selected' => array( 'delete_selected' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'logout_link' => array( 'logout_link' ),
'adminarea_link' => array( 'adminarea_link' ),
'userinfo_link' => array( 'userinfo_link' ),
'image' => array( 'image' ),
'expand_button' => array( 'expand_button' ),
'inline_add' => array( 'inline_add' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array( 'checkbox_column' ),
'items' => array( 'grid_checkbox_head' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_details' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array( 'Cto_fieldheadercolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'Spliter_fieldheadercolumn' ),
'items' => array( 'grid_field_label' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'Cable_fieldheadercolumn' ),
'items' => array( 'grid_field_label1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 'Localidad_fieldheadercolumn' ),
'items' => array( 'grid_field_label2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 6 ),
'rows' => array( 0 ),
'tags' => array( 'Latitud_fieldheadercolumn' ),
'items' => array( 'grid_field_label3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field4' => array( 'cols' => array( 7 ),
'rows' => array( 0 ),
'tags' => array( 'Longitud_fieldheadercolumn' ),
'items' => array( 'grid_field_label4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_details1' => array( 'cols' => array( 8 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'edit_column',
'inlineedit_column',
'inline_save',
'inline_cancel',
'view_column' ),
'items' => array( 'grid_edit',
'grid_inline_edit',
'grid_inline_save',
'grid_inline_cancel',
'grid_view' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'checkbox_column' ),
'items' => array( 'grid_checkbox' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_details' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array( 'Cto_fieldcolumn' ),
'items' => array( 'simple_grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'Spliter_fieldcolumn' ),
'items' => array( 'grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'Cable_fieldcolumn' ),
'items' => array( 'grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 'Localidad_fieldcolumn' ),
'items' => array( 'grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 6 ),
'rows' => array( 1 ),
'tags' => array( 'Latitud_fieldcolumn' ),
'items' => array( 'grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 7 ),
'rows' => array( 1 ),
'tags' => array( 'Longitud_fieldcolumn' ),
'items' => array( 'grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_details2' => array( 'cols' => array( 8 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'grid_details_link' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'footcell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_details' => array( 'cols' => array( 2 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 3 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field1' => array( 'cols' => array( 4 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field2' => array( 'cols' => array( 5 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field3' => array( 'cols' => array( 6 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field4' => array( 'cols' => array( 7 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_details3' => array( 'cols' => array( 8 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 9,
'height' => 3 ) ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'verticalBar' => true,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array( 'details_found' => array( 'tag' => 'DISPLAYING',
'type' => 2 ) ) ),
'gridType' => 0,
'recsPerRow' => 1,
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false ),
'misc' => array( 'type' => 'list',
'breadcrumb' => true ),
'events' => array( 'maps' => array( 'ctos_map' ),
'mapsData' => array( 'ctos_map' => array( 'height' => 250 ) ),
'buttons' => array(  ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'list',
'type' => 'list',
'layoutId' => 'leftbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'list-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add',
'inline_add',
'inline_save_all',
'inline_cancel_all',
'delete',
'update_selected' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'details_found',
'page_size',
'print_panel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'list-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'pagination' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'left' => array( 'modelId' => 'leftbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c0',
'rowspan' => 1 ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ) ) ),
array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c0' => array( 'model' => 'c0',
'items' => array( 'logo',
'expand_button' ) ),
'c1' => array( 'model' => 'c1',
'items' => array( 'menu',
'search_panel' ) ),
'c' => array( 'model' => 'c1',
'items' => array( 'image' ),
'background' => '#fdfdfd' ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'leftbar-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'expand_menu_button',
'collapse_button',
'breadcrumb' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'simple_search',
'list_options',
'loginform_login',
'username_button' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_icons' ),
array( 'cell' => 'headcell_checkbox' ),
array( 'cell' => 'headcell_details' ),
array( 'cell' => 'headcell_field' ),
array( 'cell' => 'headcell_field1' ),
array( 'cell' => 'headcell_field2' ),
array( 'cell' => 'headcell_field3' ),
array( 'cell' => 'headcell_field4' ),
array( 'cell' => 'headcell_details1' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_icons' ),
array( 'cell' => 'cell_checkbox' ),
array( 'cell' => 'cell_details' ),
array( 'cell' => 'cell_field' ),
array( 'cell' => 'cell_field1' ),
array( 'cell' => 'cell_field2' ),
array( 'cell' => 'cell_field3' ),
array( 'cell' => 'cell_field4' ),
array( 'cell' => 'headcell_details2' ) ) ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_icons' ),
array( 'cell' => 'footcell_checkbox' ),
array( 'cell' => 'footcell_details' ),
array( 'cell' => 'footcell_field' ),
array( 'cell' => 'footcell_field1' ),
array( 'cell' => 'footcell_field2' ),
array( 'cell' => 'footcell_field3' ),
array( 'cell' => 'footcell_field4' ),
array( 'cell' => 'headcell_details3' ) ) ) ),
'cells' => array( 'headcell_checkbox' => array( 'model' => 'headcell_checkbox',
'items' => array( 'grid_checkbox_head' ) ),
'cell_checkbox' => array( 'model' => 'cell_checkbox',
'items' => array( 'grid_checkbox' ) ),
'footcell_checkbox' => array( 'model' => 'footcell_checkbox',
'items' => array(  ) ),
'headcell_details' => array( 'model' => 'headcell_details',
'items' => array( 'simple_grid_field' ),
'field' => 'Cto',
'columnName' => 'field' ),
'cell_details' => array( 'model' => 'cell_details',
'items' => array( 'simple_grid_field1' ),
'field' => 'Cto',
'columnName' => 'field' ),
'footcell_details' => array( 'model' => 'footcell_details',
'items' => array(  ) ),
'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'grid_field_label' ),
'field' => 'Spliter',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'grid_field' ),
'field' => 'Spliter',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'grid_field_label1' ),
'field' => 'Cable',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'grid_field1' ),
'field' => 'Cable',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'grid_field_label2' ),
'field' => 'Localidad',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'grid_field2' ),
'field' => 'Localidad',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_details1' => array( 'model' => 'headcell_details',
'items' => array(  ) ),
'headcell_details2' => array( 'model' => 'cell_details',
'items' => array( 'grid_details_link' ) ),
'headcell_details3' => array( 'model' => 'footcell_details',
'items' => array(  ) ),
'headcell_icons' => array( 'model' => 'headcell_icons',
'items' => array(  ) ),
'cell_icons' => array( 'model' => 'cell_icons',
'items' => array( 'grid_edit',
'grid_inline_edit',
'grid_inline_save',
'grid_inline_cancel',
'grid_view' ) ),
'footcell_icons' => array( 'model' => 'footcell_icons',
'items' => array(  ) ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'grid_field_label3' ),
'field' => 'Latitud',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'grid_field3' ),
'field' => 'Latitud',
'columnName' => 'field' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field4' => array( 'model' => 'headcell_field',
'items' => array( 'grid_field_label4' ),
'field' => 'Longitud',
'columnName' => 'field' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'grid_field4' ),
'field' => 'Longitud',
'columnName' => 'field' ),
'footcell_field4' => array( 'model' => 'footcell_field',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'list-sidebar-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c3' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ) ) ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'master_info' ) ),
'c' => array( 'model' => 'c2',
'items' => array(  ) ),
'c3' => array( 'model' => 'c3',
'items' => array( 'map' ),
'align' => 'center' ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'page_size' => array( 'type' => 'page_size' ),
'details_found' => array( 'type' => 'details_found' ),
'breadcrumb' => array( 'type' => 'breadcrumb' ),
'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'simple_search' => array( 'type' => 'simple_search' ),
'pagination' => array( 'type' => 'pagination' ),
'grid_checkbox' => array( 'type' => 'grid_checkbox' ),
'grid_checkbox_head' => array( 'type' => 'grid_checkbox_head' ),
'search_panel' => array( 'type' => 'search_panel',
'items' => array( 'search_panel_field',
'search_panel_field1',
'search_panel_field6',
'search_panel_field5',
'search_panel_field4',
'search_panel_field3',
'search_panel_field2' ) ),
'list_options' => array( 'type' => 'list_options',
'items' => array( 'edit_selected',
'export_selected',
'delete_selected',
'-3',
'advsearch_link',
'show_search_panel',
'hide_search_panel',
'-1',
'export',
'-2',
'lang_selector' ) ),
'show_search_panel' => array( 'type' => 'show_search_panel' ),
'hide_search_panel' => array( 'type' => 'hide_search_panel' ),
'search_panel_field' => array( 'field' => 'Cto',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field1' => array( 'field' => 'id_Ctos',
'type' => 'search_panel_field',
'required' => false ),
'expand_menu_button' => array( 'type' => 'expand_menu_button' ),
'collapse_button' => array( 'type' => 'collapse_button' ),
'print_panel' => array( 'type' => 'print_panel',
'items' => array( 'print_scope',
'print_records',
'print_button' ) ),
'print_scope' => array( 'type' => 'print_scope' ),
'print_button' => array( 'type' => 'print_button' ),
'print_records' => array( 'type' => 'print_records' ),
'export' => array( 'type' => 'export' ),
'-' => array( 'type' => '-' ),
'export_selected' => array( 'type' => 'export_selected' ),
'-1' => array( 'type' => '-' ),
'-2' => array( 'type' => '-' ),
'advsearch_link' => array( 'type' => 'advsearch_link' ),
'-3' => array( 'type' => '-' ),
'simple_grid_field' => array( 'type' => 'grid_field_label',
'field' => 'Cto' ),
'simple_grid_field1' => array( 'field' => 'Cto',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => true ),
'search_panel_field2' => array( 'field' => 'Latitud',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field3' => array( 'field' => 'Longitud',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field4' => array( 'field' => 'Spliter',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field5' => array( 'field' => 'Cable',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field6' => array( 'field' => 'Localidad',
'type' => 'search_panel_field',
'required' => false ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'spliters' => 'true' ) ),
'grid_details_link' => array( 'type' => 'grid_details_link',
'table' => 'puertos_cto',
'badge' => false,
'hideIfNone' => false,
'showCount' => true ),
'lang_selector' => array( 'type' => 'lang_selector' ),
'-4' => array( 'type' => '-' ),
'grid_field' => array( 'field' => 'Spliter',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => true ),
'grid_field_label' => array( 'type' => 'grid_field_label',
'field' => 'Spliter' ),
'grid_field1' => array( 'field' => 'Cable',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => true ),
'grid_field_label1' => array( 'type' => 'grid_field_label',
'field' => 'Cable' ),
'grid_field2' => array( 'field' => 'Localidad',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => true ),
'grid_field_label2' => array( 'type' => 'grid_field_label',
'field' => 'Localidad' ),
'grid_view' => array( 'type' => 'grid_view' ),
'grid_field3' => array( 'field' => 'Latitud',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => true ),
'grid_field_label3' => array( 'type' => 'grid_field_label',
'field' => 'Latitud' ),
'grid_field4' => array( 'field' => 'Longitud',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => true ),
'grid_field_label4' => array( 'type' => 'grid_field_label',
'field' => 'Longitud' ),
'map' => array( 'eventId' => 'ctos_map',
'label' => array( 'text' => 'ctos_map',
'type' => 0 ),
'type' => 'map',
'height' => '250px',
'width' => '' ),
'grid_edit' => array( 'type' => 'grid_edit' ),
'update_selected' => array( 'type' => 'update_selected' ),
'edit_selected' => array( 'type' => 'edit_selected' ),
'grid_inline_edit' => array( 'type' => 'grid_inline_edit' ),
'grid_inline_save' => array( 'type' => 'grid_inline_save' ),
'grid_inline_cancel' => array( 'type' => 'grid_inline_cancel' ),
'inline_save_all' => array( 'type' => 'inline_save_all' ),
'inline_cancel_all' => array( 'type' => 'inline_cancel_all' ),
'add' => array( 'type' => 'add' ),
'delete' => array( 'type' => 'delete' ),
'delete_selected' => array( 'type' => 'delete_selected' ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'userinfo_link',
'logout_link',
'adminarea_link' ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'logout_link' => array( 'type' => 'logout_link' ),
'adminarea_link' => array( 'type' => 'adminarea_link' ),
'userinfo_link' => array( 'type' => 'userinfo_link' ),
'image' => array( 'type' => 'image',
'image' => array( 'image' => 'logo-eiasa-new.png',
'source' => 2 ) ),
'expand_button' => array( 'type' => 'expand_button' ),
'inline_add' => array( 'type' => 'inline_add',
'detailsOnly' => true ) ),
'dbProps' => array(  ),
'spreadsheetGrid' => false,
'version' => 11,
'pageWidth' => 'standard',
'reorderRows' => false,
'addToBottom' => false,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>