<?php
    
    function SequenciaCrescente($array) {
        $sequencia_crescente = false;
        foreach($array as $key => $num_atual) {
            $numeros = $array;
            array_splice($numeros, $key, 1);
            for($i = 1; $i < count($numeros); $i++) {
                $num_atual = $numeros[$i];
                $num_anterior = $numeros[$i - 1];
                if($num_atual > $num_anterior) {
                    $sequencia_crescente = true;
                } else {
                    $sequencia_crescente = false;
                    break;
                }
            }
            if($sequencia_crescente) {
                return true;
            }
        }
        return $sequencia_crescente;
    }

    var_export(SequenciaCrescente([1, 1, 1, 2, 3]));

?>