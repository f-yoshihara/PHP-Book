<?php
$global = 'test';
echo $global, PHP_EOL;            //test
echo $GLOBALS['global'], PHP_EOL; //test

var_dump($_SERVER);