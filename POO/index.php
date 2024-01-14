<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>
<body>
    <?php
        include("vehiculo.php");
        include("camion.php");

       $camion1 = new Camion("blanco",3200);
       $camion1 ->setColorVehiculo("Rojo");
       echo $camion1 -> getColorVehiculo();
       $camion1 ->arrancarCamion();
       $camion1 -> doblarCamion();
      $camion1 -> setMotorVehiculo(2300);
       $camion1 -> getMotorVehiculo();
?>
</body>
</html>