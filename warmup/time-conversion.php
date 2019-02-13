<?php
/*
  Author : Akbar Ilham
  Lang   : PHP
*/
$open = fopen("php://stdin", "r");
$k = fgets($open);
echo date("H:i:s", strtotime($k));
