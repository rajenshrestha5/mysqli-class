<?php

require '../src/App/Database/Model.php';
require '../src/App/Database/Db.php';
require 'Model/User.php';

$data = [
    'name' => 'Gopal Rai',
    'username' => 'gopal',
    'password' => password_hash('secret', PASSWORD_DEFAULT)
];

$user = new \Model\User();

try {
    $user->create($data);
} catch (Exception $e) {
    echo $e->getMessage();
}
