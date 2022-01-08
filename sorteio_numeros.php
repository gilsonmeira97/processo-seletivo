<?php 

    function sortear_numeros() {
        $numeros_gerados = array();
        $numeros_repetidos = array();

        foreach( range(1, 20) as $num ) {
            $sorteado = rand(1, 10);
            if( in_array($sorteado, $numeros_gerados)) {
                $numeros_repetidos[] = $sorteado;
            }
            $numeros_gerados[] = $sorteado;
        }

        $numeros_unicos = array_diff($numeros_gerados, $numeros_repetidos);

        echo "Array sorteado: ";
        foreach($numeros_gerados as $n) {
            echo $n . " ";
        }

        echo nl2br("\n Os números que não se repetem são: ");
        foreach($numeros_unicos as $n) {
            echo $n . " ";
        }

    }

    sortear_numeros();

?>