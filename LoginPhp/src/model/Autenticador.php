<?php
include (__DIR__ . "/../vendor/autoload.php");
use App\model\Usuario;
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 
    $usuário = $_POST ['usuário'] ?? '';
    $senha = $_POST ['senha'] ?? '';
 
    if ($usuário == 'admin' && $senha == 'admin123'){
    echo "<script>alert('Login com sucesso')</script>";
    } else {
    echo "<script>alert('Algo está errado')</script>";
  }
}
?>