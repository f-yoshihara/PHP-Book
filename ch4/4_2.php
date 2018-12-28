<?php

$add = function($v1, $v2){
    return $v1 + $v2;
};

$array = array(
    '"ダブルクオート"',
    '<tag>',
    '\'シングルクオート\''
);

$escaped = array_map(function($value){
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}, $array);

var_dump($array);