<?php
    class Camion extends Coche{
       

        public function __construct(){
            $this -> ruedas = 6;
            $this -> motor = 3600;
            $this -> puertas = 2;
        }
        function establece_color($color_camion){
            $this -> color = $color_camion;
            echo "<br>El color de este camión es: " . $this->color;
        }
        function arrancar(){
            parent::arrancar();
            echo "<br>Inicio marcha el camión";
        }
    }

?>