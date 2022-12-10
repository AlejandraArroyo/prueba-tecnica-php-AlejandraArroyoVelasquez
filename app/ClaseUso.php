<?php

require ("User.php");

use App\User;

$persona = new User();
$persona->guardar("Alejandra","arroyoalejandra97@gmail.com","contra","ciudad de guatemala");
echo $persona->printInfo();
$persona->setNombre("alew");
$persona->setEmail("alew@alew.com");
$persona->setDireccion("Antigua Guatemala");
echo $persona->printInfo();
$persona->setNombre("Alejandra");
echo $persona->printInfo();
echo $persona->getNombre();
echo $persona->getEmail();
echo $persona->getDireccion();




?>