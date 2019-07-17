<?php

    function restaurant_check2($refeicao, $imposto, $gorjeta){
        $tax_total = $refeicao * ($imposto/100); // 15.22 * 0.0825 = 
        $gorjeta_total = $refeicao * ($gorjeta/100);
        $total_sem_gorjeta = $refeicao + $tax_total;
        $total_com_gorjeta = $tax_total + $gorjeta_total;

        return array($total_sem_gorjeta, $total_com_gorjeta);
    }

$valor_a_pagar = restaurant_check2(15.22, 8.25, 15);

if ($valor_a_pagar[0] < 20) {
    echo "O total sem gorjeta é menor que 20 reais";
}
if ($valor_a_pagar[1] < 20) {
    echo "O total sem gorjeta é menor que 20 reais";
}