<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

class Persona{

    private $nombre;

    private $apellido;

    private $peinado;

    function __construct($nombre, $apellido, $peinado){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->peinado = $peinado;

    }
    
    public function decirHola(){
        return 'Hola! me llamo '.$this->nombre;
    
    }
   
    public function __toString() {
        return "Nombre: {$this->nombre}, Apellido: {$this->apellido}, Peinado: {$this->peinado}";
    }
    
    

    public function getNombre() {
    	return $this->nombre;
    }
    
    public function setNombre($nombre) {
    	$this->nombre = $nombre;
    }

    public function getApellido() {
    	return $this->apellido;
    }

    /**
    * @param $apellido
    */
    public function setApellido($apellido) {
    	$this->apellido = $apellido;
    }

    public function getPeinado() {
    	return $this->peinado;
    }
}


    $persona1 = new Persona('Gabri ', 'Martin', 'Corto liso');
    echo($persona1->getNombre());
    echo('<br>');
    echo($persona1->setNombre('Joselu' ));
    echo('<br>');
    echo($persona1->getNombre());
    echo('<br>');
    echo($persona1->__toString());


    print_r( $persona1->decirHola());
    ?>
    





</body>
</html>