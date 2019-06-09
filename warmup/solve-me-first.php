<?php
/*
  Author : Akbar Ilham
  Lang   : PHP
*/
$open = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$_a = fgets($handle);
$_b = fgets($handle);
$sum = (int)$_a + (int)$_b;
print $sum;
