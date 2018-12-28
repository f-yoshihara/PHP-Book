<?php
// インクリメント
$hoge = 0;
$fuga = $hoge++;
echo $fuga, PHP_EOL;   //0
echo $hoge++, PHP_EOL; //1
echo $hoge, PHP_EOL;   //2

$hoge = 0;
var_dump ($hoge == ++$hoge); //bool(true)
var_dump ($hoge <= $hoge++); //bool(false) 最後に評価するのが<=ではない
$hoge = 0;
var_dump ($hoge++);          //int(0)