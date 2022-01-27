<?php
 
class conexion_segura{
  private $contraseña="";
  private $usuario="root";
  
  function conectar(){
    try{
        $base_de_datos= new PDO('mysql:host=localhost;dbname=julianp', $this->usuario, $this->contraseña);
        echo "<script>alert('La Conexion se realizo correctamente')</script>";
    
    } catch (Exception $e) {
        echo "<script>('Ocurrio un error al conectarse')</script>".$e->getMessege();
    }
  }
}
$instanciar = new conexion_segura();
$instanciar->conectar();



























































