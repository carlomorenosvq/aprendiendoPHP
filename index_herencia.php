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
    abstract Class Animal{ //Abstract --> es aquella que no va a tener instancias de formas directas, aunqe si habrá instancias indirectas ya que la usaran las subclases que la hereden.Esta hecha solo para ser heredadas


        private $sexo;

        function __construct($sexo) {
        	$this->sexo = $sexo;
        
        }

    
        public function __toString() {
        	return "Sexo: {$this->sexo}";
        }

        public function getSexo() {
        	return $this->sexo;
        }

   
        public function setSexo($sexo) {
        	$this->sexo = $sexo;
        }

        public function dormir(){
            return 'Tu si que me das sueño zzz';
        }
        public function banarse(){
            return 'Me gusta jugar en el agua';
        }
    }



    Class Gato extends Animal{
        private $raza;

        public function __construct($sexo,$raza){
            parent::__construct($sexo);
            $this -> raza = $raza;
        }

        public function __toString() {
            return parent::__toString() . "Raza: {$this->raza}";
        }
    }

    Class Perro extends Animal{
        private $raza;

        public function __construct($sexo,$raza){
            parent::__construct($sexo);
            $this -> raza = $raza;
        }

        public function __toString() {
            return parent::__toString() . "Raza: {$this->raza}";
        }
    }

    Class Ave extends Animal{
        private $tienePlumas;
        public function __construct($sexo, $tienePlumas){
            $this->tienePlumas = $tienePlumas;
            parent::__construct($sexo);
        } 
    
        public function vuela(){
            return 'Estoy volandooOOOOOO';
        }
    }


    Class Reptil extends Animal{
        private $tieneEscamas;
        public function __construct($sexo, $tieneEscamas){
            $this->tieneEscamas = $tieneEscamas;
            parent::__construct($sexo);
        } 
    
        public function seArrastra(){
            return 'Mira como ando quenooooooooooooo';
        }
    }

    Class Lagarto extends Reptil{
        public function __construct($sexo,$tieneEscamas){
            parent::__construct($sexo,$tieneEscamas);
        }
        public function vuela(){
            return 'No puedo volar :c';
        }
    }


    Class Mamifero extends Animal{
        private $tieneVientre;
        public function __construct($sexo, $tieneVientre){
            $this->tieneVientre = $tieneVientre;
            parent::__construct($sexo);
        } 
    
        public function parir(){
            return 'Estoy pariendo';
        }
    }

    Class Pinguino extends Ave{
        public function __construct($sexo,$tienePlumas){
            parent::__construct($sexo,$tienePlumas);
        }
        public function vuela(){
            return 'No puedo volar :c';
        }
    }

    Class Canario extends Ave{
        public function __construct($sexo,$tienePlumas){
            parent::__construct($sexo,$tienePlumas);
        }
        public function vuela(){
            return 'Puedo volar';
        }
    }



    $inseparable = new Ave('Hembra',true);
    $pinguino = new Pinguino('Macho',true);
    $serpiente = new Reptil('Macho',false);
    $vaca = new Mamifero('Macho',true);
    
    print_r($inseparable);
    echo '<br>';
    
    
    
    
    echo '<br>';
    echo '<br>';
    echo ($inseparable->__toString());
    echo '<br>';
    echo '<br>';
    echo '<img src="https://www.petdarling.com/wp-content/uploads/2020/11/pareja-agapornis.jpg" width=30%>';
    echo '<br>';
    echo '<br>';
    echo ($inseparable->vuela());



    echo '<br>';
    echo '<br>';
    print_r($pinguino);   
    echo '<br>';
    echo '<br>';
    
    echo '<img src="https://images.unsplash.com/photo-1598439210625-5067c578f3f6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1172&q=80" width=30%>';
    echo '<br>';
    echo ($pinguino->vuela());
    echo '<br>';
    echo '<br>';
    print_r($serpiente);
    echo '<br>';

    echo '<img src="https://static.dw.com/image/63816098_303.jpg" width=30%>';
    echo '<br>';
    echo ($serpiente->seArrastra());
    

    echo '<br>';

    
    ?>




</body>
</html>