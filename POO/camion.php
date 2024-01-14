<?php
    class Camion extends Vehiculo{
        //Atributos de clase

        //Constructor
        
        //Metodos propios
        public function arrancarCamion(){
            parent::arrancarVehiculo();
        }
        public function doblarCamion(){
            echo "<br>El camion esta doblando";
        }
    }

?>