<?php

require ("User.php");

use App\User;

class UserRepository extends User{

function guardarUsuario($nombre,$email,$password,$direccion)
{
    
$persona = new User();
$persona->guardar($nombre,$email,$password,$direccion);
return true;
}

function editarUsuario($nombre,$email,$password,$direccion)
{

}

function MostrarUsuario()
{
    $persona = new User();
    echo $persona->printInfo();
}


}


?>