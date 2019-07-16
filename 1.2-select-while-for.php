<?php
// $i = 1;
// print '<select name = "teste">';
// while ($i <=10) {
//     print "<option>$i</option>\n";
//     $i++;
// }
// print'</select>';;

echo '<select name="pessoas">';
for ($i= 1 ; $i <= 10 ; $i++) { 
    echo "<option>$i</option>\n";
}
echo '</select>';