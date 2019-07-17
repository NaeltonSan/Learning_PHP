<?php
    $prato = array('lasanha',
                    'pizza',
                    'estrogonofe');
    for ($i = 0, $total_pratos = count($prato); $i < $total_pratos; $i++) {
    echo "O numero  $i é $prato[$i]<br>";
    }