<?php
 // created: 2023-03-15 18:01:58
$layout_defs["AOS_Products"]["subpanel_setup"]['accounts_aos_products_1'] = array (
  'order' => 100,
  'module' => 'Accounts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_AOS_PRODUCTS_1_FROM_ACCOUNTS_TITLE',
  'get_subpanel_data' => 'accounts_aos_products_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
