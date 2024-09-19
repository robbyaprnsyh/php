<?php
$a = 10;
$b = "10";

var_dump($a = $b); // Output: false - sama dengan
var_dump($a != $b); // Output: true - tidak sama dengan
var_dump($a < $b); // Output: true - lebih kecil dari
var_dump($a > $b); // Output: false - lebih besar dari
var_dump($a >= $b); // Output: false - lebih besar sama dengan
var_dump($a <= $b); // Output: true - lebih kecil sama dengan
