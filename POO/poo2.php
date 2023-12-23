<?php
    class Camion{
        public int $ruedas;
        private string $motor;
        private int $puertas;
        private string $color;

        public function __construct(){
            $this -> color = "verde";
            $this -> ruedas = 6;
            $this -> motor = 3600;
            $this -> puertas = 2;
        }
    }

?>