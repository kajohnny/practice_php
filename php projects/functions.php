<?php
function getMax($num1, $num2, $num3){
  if ($num1>= $num2 && $num2>=$num3) {
    echo "The largest of the three numbers is: $num1 ";
  }
  elseif ($num2>= $num1 && $num1>=$num3) {
    echo "The largest of the three numbers is: $num2";
  }
  elseif ($num1==$num2 && $num2==$num3) {
    echo "All the numbers are equal!";
  }
  else {
    echo "the largest of the three numbers is: $num3";
  }
}
getMax(24, 240, 20);


?>
