<?php

    //if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

    

    class before_save_class
    {
        function before_save_method($accountBean, $event, $arguments)
        {
            // $sql = "CREATE TABLE LineItem (
            //     LineItemID int,
            //     LineItemName varchar(255),
            //     LineItemDes varchar(255)
            // )";
            // $result = $GLOBALS['db']->query($sql);
            //$lineITemTable = $GLOBALS['db']->lineItem;
            //$itemText = $_REQUEST['itemText'][0];
            $itemText = $_REQUEST['itemText'][0];
            $itemDes = $_REQUEST['itemDescription'][0];

            $inserItemSql = "INSERT INTO LineItem  VALUES (22, '$itemText',
            '$itemDes')";
            $linInsert = $GLOBALS['db']->query($inserItemSql);
            $GLOBALS['log']->fatal('========Crearte Line item table====== ', $inserItemSql );
            
        }
    }

?>
