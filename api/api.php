<?php 
    header('Content-type: application/json; charset=utf-8');
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type, Authorization");
    $user = array(
            'id' => 1,
            'username' => 'admin',
            'email' => 'admin@gmail.com'
        );
        $user2 = array(
            'id' => 2,
            'username' => 'admin2',
            'email' => 'admin2@gmail.com'
        );
        $user3 = array(
            'id' => 3,
            'username' => 'arash',
            'email' => 'arash@gmail.com'
        );
    $userList = array($user,$user2,$user3);
    print json_encode($userList);
?>
