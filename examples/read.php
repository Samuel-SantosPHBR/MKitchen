<?php

require __DIR__ ."/../vendor/autoload.php";

use Source\Models\Usuario;

$user = new \Source\Models\Postagem();

$list = $user->find()->fetch(true);

foreach ($list as $userItem){
    var_dump($userItem->titulo);
}