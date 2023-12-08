<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Matemáticos</title>
</head>
<body>
    <h2>Calculo con operadores matemáticos</h2>
    <form name="form1" method="post" action="">
        <p>
            <label for="num1">Número 1</label>
            <input type="text" name="num1" id="num1">
            <br><br>
            <label for="num2">Número 2</label>
            <input type="text" name="num2" id="num2">
            <br><br>
            <label for="operacion">Seleccione una opción:</label>
            <br><br>
            <select name="operacion" id="operacion">
                <option value="Suma">Suma</option>
                <option value="Resta">Resta</option>
                <option value="Multiplicacion">Multiplicación</option>
                <option value="Division">División</option>
                <option value="Modulo">Módulo</option>
            </select>
        </p>
        <p>
            <input type="submit" name="button" id="button" value="Calcular">
        </p>
    </form>
    <h3>Resultado de la operación</h3>
    <?php
        //Cuando el usuario pulse el botón enviar hará la siguiente instrucción
        if(isset($_POST["button"])){
            $numero1=$_POST["num1"];
            $numero2=$_POST["num2"];
            $operacion=$_POST["operacion"];
            if(!strcmp("Suma",$operacion)){
                echo "El resultado es: " . ($numero1+$numero2);
            }
            if(!strcmp("Resta",$operacion)){
                echo "El resultado es: " . ($numero1-$numero2);
            }
            if(!strcmp("Multiplicacion",$operacion)){
                echo "El resultado es: " . ($numero1*$numero2);
            }
            if(!strcmp("Division",$operacion)){
                echo "El resultado es: " . ($numero1/$numero2);
            }
            if(!strcmp("Modulo",$operacion)){
                echo "El resultado es: " . ($numero1%$numero2);
            }

        }

    ?>
</body>
</html>