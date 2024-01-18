<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include("variables_metodos_estaticos2.php");
        $Antonio = new Compra_Vehiculo("compacto");
        $Antonio ->climatizador();
        $Antonio -> gps();
        echo "Vehiculo de Antonio $" . $Antonio ->precio_final();
        $Maria = new Compra_Vehiculo("furgon");
        $Maria -> gps();    
        echo "<br>Vehiculo de Maria $" . $Maria ->precio_final();
    
    
    
    
    
    
    ?>
</body>
</html>