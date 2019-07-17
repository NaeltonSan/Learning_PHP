<?php
    $produtos = array(
        'macarrão'=> 1,
        'lasanha' => 3.5,
        'pizza' => 5,
        'prato feito' => 20
    );
    foreach ($produtos as $prato => $novo_preco) {
        $produtos[$prato] = $produtos[$prato] * 2;
    };
    foreach ($produtos as $prato => $novo_preco) {
        echo "<p>$prato - $novo_preco reais</p><hr>";
    }
    