<?php


//$u = BeanFactory::newBean('Users');
$sql = "SELECT * from users where deleted=0";
$result = $GLOBALS['db']->query($sql);

$users = [];
while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
    $users[] = [
        'id' => $row['id'],
        'name' => $row['user_name'],
        
    ];
}


echo json_encode($users);
exit();