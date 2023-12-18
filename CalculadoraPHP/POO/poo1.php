<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progrmacion orientada a objetos</title>
</head>
<body>
    <?php
        //Creacion de clase
        class Coche{
            //Propiedades a cada objeto de tipo coche
            private int $ruedas;
            private string $color;
            private int $motor;
            private int $puertas;

            //Constructor de clase
            public function __construct (){
                $this -> ruedas=4;
                $this -> color ="";
                $this -> motor = 1600;
                $this -> puertas = 5;
            }

            //Métodos
            function arrancar(){
                echo "Arrancó el vehículo";
            }
            function girar(){
                echo "El vehículo esta doblando";
            }
            function frenar(){
                echo "El vehículo está frenando";
            }
        }
        //Instancia de clase
        $renault = new Coche();
        $mazda = new Coche(); 

        $mazda -> arrancar();
        echo "<br>";
        echo $mazda->ruedas;

    ?>
</body>
</html>