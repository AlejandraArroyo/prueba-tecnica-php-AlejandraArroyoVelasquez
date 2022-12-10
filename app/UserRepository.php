<?php

require ("User.php");

use App\User;

$persona = new User();
$persona->guardar("Alejandra","arroyoalejandra97@gmail.com","contra","ciudad de guatemala");
$persona->setNombre("alew");
echo $persona->printInfo();



?>