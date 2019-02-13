<?php
/*
  Author : Akbar Ilham
  Lang   : PHP
*/
$open = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$k = fgets($open);
$list = explode(" ", $k);

$min = 1111111110;
$max = 0;
$sum = 0;

foreach ($list as $value) {
    if ($min > $value) {
      $min = $value;
    }
    if ($max < $value){
      $max = $value;
    }
    $sum += $value;
}

$lowest_sum = $sum - $max;
$highest_sum = $sum - $min;

echo $lowest_sum." ".$highest_sum;
