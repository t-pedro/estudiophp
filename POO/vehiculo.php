<?php
        //Creacion de clase
        class Vehiculo{
            //Atributos de clase
            protected string $color;
            protected int $motor;
            //Constructor de la clase con paso de parametros
           public function __construct($color="",$motor){  
            $this->color = $color;
            $this->motor = $motor;
           }

            //Métodos
           public function setColorVehiculo($nuevoColor){
            $this->color = $nuevoColor;
           }

           public function getColorVehiculo(){
            return "El color del vehiculo es " . $this->color;
           }

           protected function arrancarVehiculo(){
                echo "<br>El vehiculo esta en marcha";
           }
           public function setMotorVehiculo($nuevoMotor){
                $this->motor = $nuevoMotor;
           }
           public function getMotorVehiculo(){
                echo  "<br>El motor del vehiculo es de " . $this -> motor; 
           }
        }
?>
