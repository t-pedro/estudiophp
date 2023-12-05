<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables estaticas</title>
</head>
<body>
    <?php
        function incrementarVariable(){
            static $contador = 0;
            $contador++;
            echo "<br>La variable vale: " . $contador;
        }
        incrementarVariable();
        incrementarVariable();
        incrementarVariable();
        incrementarVariable();


    ?>
</body>
</html>