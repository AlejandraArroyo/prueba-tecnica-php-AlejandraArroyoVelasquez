<?php

require ("User.php");

use App\User;

class UserRepository extends User{
  public  $usuarios = array();
function guardarUsuario($nombre,$email,$password,$direccion)
{
    
$persona = new User();
$persona->guardar($nombre,$email,$password,$direccion); 
$user =  $persona->printInfo();
foreach ($usuarios as $dato) {
    if($dato == null)
    $dato = $user;
    break;
  }
}

function editarUsuario($usuario)
{

}

function MostrarUsuario($persona)
{
   
    echo $persona->printInfo();
}

function eliminarUsuario($usuario)
{

}


}


?>