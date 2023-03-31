<?php

/**
 * Advanced OpenSales, Advanced, robust set of sales modules.
 * @package Advanced OpenSales for SugarCRM
 * @copyright SalesAgility Ltd http://www.salesagility.com
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU AFFERO GENERAL PUBLIC LICENSE
 * along with this program; if not, see http://www.gnu.org/licenses
 * or write to the Free Software Foundation,Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301  USA
 *
 * @author SalesAgility <info@salesagility.com>
 */

function diplayLineItems($focus, $field, $value, $view)
{
    $ss = new Sugar_Smarty();
    $name = 'Rab Nawaz';
    $fruits = ['mango','apple', 'Pinapple'];
    $ss->assign('name',$name);
    $ss->assign('fruits',$fruits);

    $sql = "SELECT * FROM LineItem";
    $result = $GLOBALS['db']->query($sql);

    $lineItem = [];

    while($row = $GLOBALS['db']->fetchByAssoc($result)){
        $lineItem[] = [
            'itemName' => $row['LineItemName'],
            'itemDes' => $row['LineItemDes']
        ];
    };

    $ss->assign("items", $lineItem);
    echo json_encode($lineItem);

    
    $deleteQuery = "'DELETE FROM LineItem WHERE LineItemID=1";
    //echo '{result:"done"}';

    return  $ss->fetch('custom/modules/Accounts/LineItems/lineItem.tpl');
}
