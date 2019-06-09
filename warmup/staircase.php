<?php
/*
  Author : Akbar Ilham
  Lang   : PHP
*/
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$total = intval(fgets($_fp));

for ($i=1; $i <= $total; $i++) {
    for ($spasi = 0; $spasi < ($total-$i); $spasi++) {
      echo " ";
    }
    for ($star = 0; $star < $i; $star++) {
      echo "#";
    }
    echo "\n";
}
