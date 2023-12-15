<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes del Año</title>
</head>
<body>
    <h2>Transformador de Números a Meses</h2>
    <form name="form1" method="post" action="">
        <label for="mesNumero">Selecciona un número:</label>
        <select name="mesNumero" id="mesNumero">
            <option value="1">Enero</option>
            <option value="2">Febrero</option>
            <option value="3">Marzo</option>
            <option value="4">Abril</option>
            <option value="5">Mayo</option>
            <option value="6">Junio</option>
            <option value="7">Julio</option>
            <option value="8">Agosto</option>
            <option value="9">Septiembre</option>
            <option value="10">Octubre</option>
            <option value="11">Noviembre</option>
            <option value="12">Diciembre</option>
        </select>
        <br><br>
        <input type="submit" name="button" id="button" value="Transformar">
    </form>

    <?php
    if (isset($_POST["button"])) {
        $mesNumero = $_POST["mesNumero"];
        transformarAMes($mesNumero);
    }

    function transformarAMes($mesNumero) {
        switch ($mesNumero) {
            case 1:
                echo "El número $mesNumero corresponde a Enero.";
                break;
            case 2:
                echo "El número $mesNumero corresponde a Febrero.";
                break;
            case 3:
                echo "El número $mesNumero corresponde a Marzo.";
                break;
            case 4:
                echo "El número $mesNumero corresponde a Abril.";
                break;
            case 5:
                echo "El número $mesNumero corresponde a Mayo.";
                break;
            case 6:
                echo "El número $mesNumero corresponde a Junio.";
                break;
            case 7:
                echo "El número $mesNumero corresponde a Julio.";
                break;
            case 8:
                echo "El número $mesNumero corresponde a Agosto.";
                break;
            case 9:
                echo "El número $mesNumero corresponde a Septiembre.";
                break;
            case 10:
                echo "El número $mesNumero corresponde a Octubre.";
                break;
            case 11:
                echo "El número $mesNumero corresponde a Noviembre.";
                break;
            case 12:
                echo "El número $mesNumero corresponde a Diciembre.";
                break;
            default:
                echo "Número no válido. Selecciona un número del 1 al 12.";
        }
    }
    ?>
</body>
</html>
