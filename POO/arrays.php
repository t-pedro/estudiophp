<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //Arrays indexados
        $semana [] = "Lunes";
        $semana [] = "Martes";
        $semana [] = "Miercoles";
        $semana [] = "Jueves";
        $semana [] = "Viernes";
        $semana [] = "Sabado";
        $semana [] = "Domingo";
        echo $semana[1];
        $autos = array("renault","fiat","peugeot","ford","chevrolet",12,18);
        echo "<br>" . $autos[1];

        //Arrays asociativos
        $persona = array(
        array("Nombre" => "Leandro", "Apellido" => "Suarez", "Edad" => 9),
        array("Nombre" => "Yury", "Apellido" => "Garcia", "Edad" => 28));
        echo "<br>". $persona[1]["Nombre"];
        echo "<br>". $persona[1]["Apellido"];
        echo "<br>". $persona[1]["Edad"];    
        
        //Imprimimos con bucle foreach
        echo "<br><br>";
        echo "-----Imprimimos con bucle foreach-----";
        foreach($semana as $valor){
            echo "<br>Dia de la semana: $valor";
        }
        echo "<br><br>";
        foreach($autos as $valor){
            echo "<br>Marca del auto: $valor";
        }
        echo "<br><br>";
        foreach($persona[0] as $llave => $valor){
            echo "<br>$llave => $valor";
        }
        echo "<br><br>";
        foreach($persona[1] as $llave => $valor){
            echo "<br>$llave => $valor";

        }
        echo "<br><br>";
        echo "-----Comprobamos si la variable introducida es un array-----";
        //Comprobamos si la variable es un array
        if(is_array($autos)){
            foreach($autos as $valor){
                echo "<br>Valor del array: $valor";
            }
        }else{
            echo "La variable no es un array";
        }
        
    
    
    
    
    
    
    ?>
</body>
</html>