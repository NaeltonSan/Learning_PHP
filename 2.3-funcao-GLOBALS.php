<?php
  $dinner = 'Curry Cuttlefish';

  function macrociotic_dinner(){
      $dinner = "Some Vegetables";
      echo "Dinner id $dinner";
      echo " but I'd rather have ";
      echo $GLOBALS['dinner'];
      echo "<br>";
  }
  macrociotic_dinner();
  echo "Regular dinner is : $dinner";