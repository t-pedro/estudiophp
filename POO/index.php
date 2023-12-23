<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>
<body>
    <?php
        include("poo1.php");
        include("poo2.php");

        //Instanciamos un objeto
        $mazda = new Camion();
        $renault = new  Coche();

        echo "El mazda tiene " . $mazda->ruedas . " ruedas";
    ?>
</body>
</html>