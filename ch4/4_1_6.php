<?php
$ary = [1, 2, 3, 4, 5];
for($i = 0, $end = count($ary); $i < $end; $i++){
  echo $ary[$i], PHP_EOL;
}

$ary1 = [0];
$str = 'test';
$void = [];
echo count($ary1), PHP_EOL; //1
echo count($str), PHP_EOL;  //1
echo count($void), PHP_EOL; //0
var_dump (count($void));    //int(0)