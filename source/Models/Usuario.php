<?php
namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Usuario extends DataLayer
{
    function __construct()
    {
        parent::__construct('usuarios', ['nome','email','senha']);
    }

}