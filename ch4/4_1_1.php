<?php
// if文でも実行したい文が一つしかない場合には{}は不要。ただし可読性のためにはつけたほうが良い。
$test = 'test';
if($test)
    var_dump($test);