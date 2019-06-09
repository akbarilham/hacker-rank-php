<?php
/*
  Author : Akbar Ilham
  Lang   : PHP
*/
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$t = fgets($_fp);
$list = explode(" ", fgets($_fp));

$sum = 0;
foreach($list as $index => $input) {
   $sum += $input;
}

print($sum) . "\n";
