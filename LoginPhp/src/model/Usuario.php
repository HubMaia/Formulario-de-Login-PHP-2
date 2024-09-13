<?php
namespace App\model;
 
class Usuario{
    private $usuário;
    private $senha;
 
    function __construct ($usuário, $senha){
        $this->usuário = $usuário;
        $this->senha = $senha;
    }
}