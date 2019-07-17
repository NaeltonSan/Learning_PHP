<?php
    function countdown($top){
        while ($top > 0) {
            echo "$top...";
            $top--;
        }
        echo "boom!";
    }

    countdown(5);