
<?php
    $cores = array(
        1=>'azul',
        2=>'verde',
        3=>'amarelo',
        4=>'branco'
    );
    echo "<table border='solid'>";
    foreach ($cores as $key => $value) {
            echo "<tr>
                    <td>$key</td>
                    <td>$value</td>
                  </tr>";
    }
    echo "</table>";