<?php
/*
  Author : Akbar Ilham
  Lang   : PHP
*/
$open = fopen ("php://stdin","r");
fscanf($open,"%d %d %d",$a0,$a1,$a2);
fscanf($open,"%d %d %d",$b0,$b1,$b2);
$alice = $bob = 0;
for ($i = 0; $i < 3; $i++) {
    if (${"a" . $i} > ${"b" . $i}) {
        $alice++;
    }
    else if (${"a" . $i} < ${"b" . $i}) {
        $bob++;
    }
}
echo $alice . " " . $bob;
