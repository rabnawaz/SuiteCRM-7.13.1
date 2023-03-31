<?php
// created: 2023-03-15 18:01:58
$dictionary["accounts_line_items"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'accounts_aos_products_1' => 
    
    // 'member_accounts' => array(
    //   'lhs_module' => 'Accounts',
    //   'lhs_table' => 'accounts',
    //   'lhs_key' => 'id',
    //   'rhs_module' => 'Accounts',
    //   'rhs_table' => 'accounts',
    //   'rhs_key' => 'parent_id',
    //   'relationship_type' => 'one-to-many'

    
    // accont links with line item
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'accounts_line_items',
      'rhs_table' => 'LineItem',
      'rhs_key' => 'LineItemID',
      'relationship_type' => 'many-to-many',
      'join_table' => 'LineItem',
      'join_key_lhs' => 'id',
      'join_key_rhs' => 'LineItemID',
    ),
  ),
  'table' => 'accounts_line_items',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'accounts_line_item',
      'type' => 'varchar',
      'len' => 255,
    ),
    4 => 
    array (
      'name' => 'accounts_line_item_description',
      'type' => 'text',
    ),
  ),
);