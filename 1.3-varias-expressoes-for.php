<?php

    echo '<select name = "teste">';

        for ($min=1, $max = 10; $min < 50 ; $min +=10, $max +=10) { 
            echo "<option>$min - $max </option>\n";
        }

    echo '</select>';