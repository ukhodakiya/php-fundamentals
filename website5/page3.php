<?php
$user  = ['name' => 'Brad','email' => 'test@test.com','age' => 35];

$user = serialize($user);
setcookie('user', $user,time() + (8600 * 30));

$user = unserialize($_COOKIE['user']);
echo $user['name'];

?>