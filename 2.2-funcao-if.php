<?php
        function restaurant_check2($refeicao, $imposto, $gorjeta){
            $tax_total = $refeicao * ($imposto/100);  
            $gorjeta_total = $refeicao * ($gorjeta/100);
            $total = $tax_total + $gorjeta_total;
        
    
            return $total;
        }
    
    if (restaurant_check2(15.22, 8.25, 15) < 20) {
        echo " A conta deu abaixo de 20, irei pagar no dinheiro";
    }
    else {
       echo 'Irei pagar no cartão';
    }