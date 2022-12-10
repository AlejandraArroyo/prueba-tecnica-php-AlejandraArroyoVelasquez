<?php
 use App\User;

class UserTest extends \PHPUnit\Framework\TestCase {



  /** @test **/
  public function comprobarqueguarda(){
       
   $user  = new User();
   $person = $user->guardar("Alejandra","arroyoalejandra97@gmail.com","contra","ciudad de guatemala");
   $this->assertEquals(true,$person);

  }
  

  /** @test **/
  public function comprobarquemuestra(){
       
    $user  = new User();
    $person = $user->guardar("Alejandra","arroyoalejandra97@gmail.com","contra","ciudad de guatemala");
    $pintar = $user->printInfo();
    $this->assertEquals(true,$pintar);
 
   }

   
  /** @test **/
  public function comprobarquemuestraNombre(){
       
    $user  = new User();
    $person = $user->guardar("Federico","arroyoalejandra97@gmail.com","contra","ciudad de guatemala");
    $nombre = $user->getNombre();
    $this->assertEquals(true,$nombre);
 
   }

  /** @test **/
   public function comprobarqueGuardaNombre(){
       
    $user  = new User();
    $user->guardar("Alejandra","arroyoalejandra97@gmail.com","contra","ciudad de guatemala");
    $nombre = $user->setNombre("AlejandraArroyo");
    $this->assertEquals(true,$nombre);
 
   }

    /** @test **/
    public function comprobarqueGuardaEmail(){
       
        $user  = new User();
        $user->guardar("Alejandra","arroyoalejandra97@gmail.com","contra","ciudad de guatemala");
        $email = $user->setEmail("arroyoalejandra89@gmail.com");
        $this->assertEquals(true,$email);
     
        }
    /** @test **/
    public function comprobarquemuestraEmail(){
        
        $user  = new User();
        $user->guardar("Ale","arroyoalejandra97@gmail.com","contra","ciudad de guatemala");
        $email = $user->getEmail();
        $this->assertEquals(true,$email);
    
    }




    
    /** @test **/
    public function comprobarqueGuardaDireccion(){
       
        $user  = new User();
        $user->guardar("Alejandra","arroyoalejandra97@gmail.com","contra","ciudad de guatemala");
        $direccion = $user->setDireccion("Antigua Guatemala");
        $this->assertEquals(true,$direccion);
     
        }
    /** @test **/
    public function comprobarquemuestraDireccion(){
        
        $user  = new User();
        $user->guardar("Ale","arroyoalejandra97@gmail.com","contra","ciudad de guatemala");
        $direccion = $user->getDireccion();
        $this->assertEquals(true,$direccion);
    
    }


}



?>  