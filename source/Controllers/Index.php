<?php


namespace Source\Controllers;


class Index
{

    public function __construct($router)
    {
        $this->router = $router;
    }

    public function home(): void
    {
        echo "<a href='".$this->router->route('Index.login')."'> Botao </a>";
    }

    public function login(): void
    {
        echo "<a href='".$this->router->route('Index.home')."'> Botao 1 </a>";
    }

    public function logout(): void
    {

    }
}