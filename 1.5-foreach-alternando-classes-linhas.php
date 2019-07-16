</html>
<head>
<link rel="stylesheet"  href="1.6-style.css" media="screen" />
</head>
    <body>
        <div>
                <?php
                $row_styles = array('claro', 'vermelho');
                $style_index = 0;
                $cores = array(
                    1 => 'azul',
                    2 => 'verde',
                    3 => 'amarelo',
                    4 => 'branco',
                    5 => 'verde',
                    6 => 'marrom'
                );
                echo "<table border = 'solid'>";
                foreach ($cores as $key => $value) {
                    echo '<tr class= "' . $row_styles[$style_index] . '">';
                    echo "<td>$key</td>";
                    echo "<td>$value</td>";
                    echo "</tr>";

                    $style_index = 1 - $style_index;
                }
                echo "</table>";
                //var_dump($row_styles);
                ?>
        </div>
    </body>
</html>


