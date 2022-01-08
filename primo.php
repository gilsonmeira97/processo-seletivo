<?php

    function Primo($inicial, $final) {
        $conjunto_primos = array();
        
        foreach( range($inicial + 1 , $final - 1) as $num ) {
            $isPrimo = true;
            if($num == 1 || $num == 2) {
                $conjunto_primos[] = $num;
                continue;
            }
            foreach( range(2, $num - 1 ) as $index ) {
                if($num % $index == 0) {
                    $isPrimo = false;
                    break;
                }
            }
            if( $isPrimo ) {
                $conjunto_primos[] =  $num;
            }
        }
            return $conjunto_primos;
    }

    $conjunto_primos = Primo(10, 20);

    $qtd_primos = count( $conjunto_primos );
    if( $qtd_primos ){
        echo "Encontrados " . $qtd_primos . " números primos, são eles: " ;
        foreach($conjunto_primos as $primo){ 
            echo $primo . ' ';
        };
    } else {
        echo "Nenhum número primo foi encontrado!";
    }

?>