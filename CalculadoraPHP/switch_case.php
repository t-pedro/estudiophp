<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional Switch Case</title>
</head>
<body>
    <h1>Condicional switch-case</h1>
    <form name="form1" method="post">
        <p>
            <label for="mesNumero">Seleccione un numero para saber que mes corresponde:</label>
            <br><br>
            <select name="mesNumero" id="mesNumero">
                <option value="1">Enero</option>
                <option value="2">Febrero</option>
                <option value="3">Marzo</option>
                <option value="4">Abril</option>
                <option value="5">Mayo</option>
            </select>
        </p>
        <p>
            <input type="submit" name="button" id="button" value="Ejecutar">
        </p>
    </form>
    <?php
        //Cuando el usuario pulse el boton se ejecutara el cambio de numero a mes.
        if(isset($_POST["button"])){
            $mes=$_POST["mesNumero"];
            transformarMes($mes);
        }
        function transformarMes($mes){
            switch($mes){
                case 1:
                    echo "Enero corresponde al 1 mes del año";
                    break;
                case 2:
                    echo "Febrero corresponde al 2 mes del año";
                    break;
                case 3:
                    echo "Marzo corresponde al 3 mes del año";
                    break;
                case 4:
                    echo "Abril corresponde al 4 mes del año";
                    break;
                case 5:
                    echo "Mayo corresponde al 5 mes del año";
                default:
                    echo "Mes incorrecto";
            }
        }
        
        
    ?>
</body>
</html>