<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Calculator</title>
  </head>
  <body>
    <form action="calculator.php" method="post">
    <label for="fNumber"> First Number </label>
    <input type="number" id="fNumber" name="fNumber" required>
    <br><br>
    <label for="opr"> Operator </label>
    <input type="text" id="op" name="op" required>
    <br><br>
    <label for="sNumber"> Second Number </label>
    <input type="number" id="sNumber" name="sNumber" required>
    <br><br>
    <button type="submit"> Calculate </button>
    <br><br>


    <?php
    $fNumber= $_POST['fNumber'];
    $sNumber= $_POST['sNumber'];
    $op= $_POST['op'];

    if ($op == '+') {
      echo "$fNumber + $sNumber= ".$fNumber + $sNumber;
    }elseif ($op == '-') {
      echo "$fNumber - $sNumber= ".$fNumber - $sNumber;
    }elseif ($op == '/') {
      echo "$fNumber / $sNumber= ".$fNumber / $sNumber;
    }elseif ($op == '*') {
      echo "$fNumber X $sNumber= ".$fNumber * $sNumber;
    }
    else{
      echo "Invalid Operator!";
    }


     ?>
  </body>
  </html>
