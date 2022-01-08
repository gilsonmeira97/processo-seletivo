<?php 
    function SeculoAno($ano) {
        $seculos = $ano / 100;
        if($ano % 100 == 0) {
            return $seculos;
        } else {
            return ceil($seculos) ;
        }
    }

    echo seculoAno(1805);
?>