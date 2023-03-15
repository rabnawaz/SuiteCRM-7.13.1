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
