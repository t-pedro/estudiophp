
    <h1>Resultado del cálculo</h1>
    <?php
            function calcular($calculo){
                if(!strcmp("Suma",$calculo)){
                    global $numero1,$numero2;
                    echo "El resultado es: " . ($numero1+$numero2);
                }
                if(!strcmp("Resta",$calculo)){
                    global $numero1,$numero2;
                    echo "El resultado es: " . ($numero1-$numero2);
                }
                if(!strcmp("Multiplicacion",$calculo)){
                    global $numero1,$numero2;
                    echo "El resultado es: " . ($numero1*$numero2);
                }
                if(!strcmp("Division",$calculo)){
                    global $numero1,$numero2;
                    echo "El resultado es: " . ($numero1/$numero2);
                }
                if(!strcmp("Modulo",$calculo)){
                    global $numero1,$numero2;
                    echo "El resultado es: " . ($numero1%$numero2);
                }
                if(!strcmp("Incremento",$calculo)){
                    global $numero1,$numero2;
                    echo "Se hizo el calculo: ($numero1+1)";
                    echo "<br>El resultado del primer valor es: " . ++$numero1;
                    echo "<hr>";
                    echo "Se hizo el calculo: ($numero2+1)";
                    echo "<br>El resultado del segundo valor es: " . ++$numero2;
                }
                if(!strcmp("Decremento",$calculo)){
                    global $numero1,$numero2;
                    echo "Se hizo el calculo: ($numero1-1)";
                    echo "<br>El resultado del primer valor es: " . --$numero1;
                    echo "<hr>";
                    echo "Se hizo el calculo: ($numero2-1)";
                    echo "<br>El resultado del segundo valor es: " . --$numero2;
                }
            }

    ?>
    
