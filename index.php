<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo PHP</title>
</head>
<body>
    <?php 
        //Comentario de una linea
        print "Bienvenidos al curso de PHP <br>";
        print "Hola Mundo <br>";
        /* Comentario
            de varias
            lineas
        */
        //Variables
        $nombre = "Federico";
        print "El nombre del usuario es: " . $nombre;
        $apellido = "Suarez";
        print "<br>El apellido es: $apellido";
        print '<br>Probamos imprimir con comilla simple: ' . $nombre;
        echo "<br>" . $nombre;
        //Funciones
        echo "<br>Antes de la funcion";
        function dameDatos(){
            echo "<br>Soy una funcion <br>";
        }
        echo "<br>Despues de la funcion";
        dameDatos();
        include("externo.php");

        
        
        
        
        
        
    ?>
</body>
</html>