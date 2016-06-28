<?php

require '../src/App/Database/Model.php';
require '../src/App/Database/Db.php';
require 'Model/News.php';

$data = [
    'from' => '',
    'email' => '',
    'subject' => 'Lorem ipsum',
    'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A consequatur dicta, dignissimos dolor dolore dolorum in libero maxime molestias mollitia perferendis quasi ratione rem reprehenderit sequi voluptas voluptates! Itaque, veritatis'
];

$user = new \Model\News;

try {
    $user->create($data);
} catch (Exception $e) {
    echo $e->getMessage();
}

?>