<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
    <?php
        $variable1 = "Casa";
        $variable2 = "CasA";
        //La función strcmp() compara si ambas cadenas son iguales,
        //si son iguales devuelve 0, si son distintas devuelve 1.
        $resultado = strcmp($variable1,$variable2); 
        if($resultado==0){
            echo "Las cadenas son iguales";
        }else{
            echo "Las cadenas son distintas";
        }
        
        
    ?>
</body>
</html>