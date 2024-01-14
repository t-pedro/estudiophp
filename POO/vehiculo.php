<?php
        //Creacion de clase
        class Vehiculo{
            //Atributos de clase
            protected string $color;
            //Constructor de la clase con paso de parametros
           public function __construct($color=""){  
            $this->color = $color;
           }

            //Métodos
           public function setColorVehiculo($nuevoColor){
            $this->color = $nuevoColor;
            //echo "Se estableció el color " . $color;
           }

           public function getColorVehiculo(){
            return "El color del vehiculo es " . $this->color;
           }

           protected function arrancarVehiculo(){
                echo "<br>El vehiculo esta en marcha";
           }
        }
?>
