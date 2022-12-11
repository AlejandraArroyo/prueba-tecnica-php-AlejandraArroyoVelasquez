<?php
namespace App;

class User {
    public  $nombre;
    public  $email;
    public  $password;
    public  $direccion;


    public function guardar($nombre, $email, $password, $direccion)
    {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->password = $password;
        $this->direccion = $direccion; 
        return true;
    }

    public function printInfo()
    {
          echo "nombre: " . $this->nombre."  Email: " . $this->email."  Direccion: " . $this->direccion."\n";   
          
    }

    public function getNombre()
    {
       return   $this->nombre."\n";
    }

    
    public function setNombre($nombre)
        {
            $this->nombre = $nombre;
            return true;
        }

    public function getEmail()
    {
        return $this->email."\n";
    }

    public function setEmail($email)

    {
        $this->email = $email;
        return true;
    }
    

    public function getDireccion()
    {
        return $this->direccion."\n";
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
        return true;
    }
    /*public function __destruct() {
      //  echo 'Objeto destruido';  
        //return true;  
     }*/
     
    public function setPassword($password)
    {
        $this->password = $password;
        return true;
    }

}


?>