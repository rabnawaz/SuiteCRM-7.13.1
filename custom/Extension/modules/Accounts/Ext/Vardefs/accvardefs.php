<?php

$dictionary['Account']['fields']['line_items'] = array(
    'required' => false,
    'name' => 'line_items',
    'vname' => 'LBL_LINE_ITEMS',
    'type' => 'function',
    'source' => 'non-db',
    'function' =>
    array(
        'name' => 'diplayLineItems',
        'returns' => 'html',
        'include' => 'custom/modules/Accounts/LineItems/Line_Items.php'
    ),
);

$dictionary['Account']['fields']['acc_relate_field'] = array(
    'required' => false,
    'type' => 'id',
    'name' => 'acc_relate_field',
    'vname' => 'LBL_LINE_ACC_RElATE_FIELD',
    'dbType' => 'varchar',
    'type' => 'link',
    'relationship' => 'accounts_aos_products_1',
    // this is forign key;
    //line item id 

    // line k ander account ka id.
    //foo text food textarea, foo id;
    

);


