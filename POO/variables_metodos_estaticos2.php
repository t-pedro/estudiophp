<?php 
    class Compra_Vehiculo{
        private string $color;
        //variable estatica
    private static $descuento = 4500;
        private $precio_base;
        //Constructor
        function __construct($gama){
            if($gama == "urbano"){
                $this->precio_base = 10000;
            }elseif($gama == "compacto"){
                $this->precio_base = 20000;
            }elseif($gama == "furgon"){
                $this->precio_base = 30000;
            }
            }
        //Fin constructor
        //Metodo estatico
        public static function color_vehiculo($color=""){
            return $color;
        }
        //Fin metodo estatico
        //Agregar climatizador
        function climatizador(){
            $this->precio_base += 2000;
        }
        //Fin climatizador
        //Gps
        function gps(){
            $this->precio_base += 2500;
        }
        //Fin gps
        //Precio final
        function precio_final(){
            $total = $this->precio_base - self::$descuento;
            return $total;
        }
        //FIn precio final
    } //Fin clase     
?>