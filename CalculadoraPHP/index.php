<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
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
                <option value="Incremento">Incremento</option>
                <option value="Decremento">Decremento</option>
            </select>
        </p>
        <p>
            <input type="submit" name="button" id="button" value="Calcular">
        </p>
    </form>
    <?php
        include("calculadora.php");
        //Cuando el usuario pulse el botón enviar hará la siguiente instrucción
        if(isset($_POST["button"])){
            $numero1=$_POST["num1"];
            $numero2=$_POST["num2"];
            $operacion=$_POST["operacion"];
            calcular($operacion);
        }
    ?>
</body>
</html>