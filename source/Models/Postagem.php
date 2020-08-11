<?php


namespace Source\Models;


use CoffeeCode\DataLayer\DataLayer;

class Postagem extends DataLayer
{
    public function __construct()
    {
        parent::__construct('postagem', ['id_usuario','titulo']);
    }
}