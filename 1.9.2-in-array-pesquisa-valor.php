<?php

    //in_array , pesquisa pelo valor, retorna true OR false.
$meals = array('Walnut Bun' => 1,
'Cashew Nuts and White Mushrooms' => 4.95,
'Dried Mulberries' => 3.00,
'Eggplant with Chili Sauce' => 6.50,
'Shrimp Puffs' => 0); // Shrimp Puffs are free!
$books = array("The Eater's Guide to Chinese Characters",
'How to Cook and Eat in Chinese');

// This is true
// if (in_array(1,$meals)) {
// print "Yes, we have Shrimp Puffs<br>";
// }
//This is false
// if (in_array(9999,$meals)) {
// print "We have a Steak Sandwich";
// }
// This is true
if (in_array("The Eater's Guide to Chinese Characters", $books)) {
print "The Eater's Guide to Chinese Characters";
}
