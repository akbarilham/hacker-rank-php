<?php
/*
  Author : Akbar Ilham
  Lang   : PHP
*/
$open = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$k = fgets($open);
$list = explode(" ", fgets($open));
$max = (int)max($list);
$candle = array_count_values($list);

print_r ($candle[$max]);
