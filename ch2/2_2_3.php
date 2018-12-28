<?php
// 制御構文のブロック文にスコープはない
$array = [1, 2, 3, 4, 5];
foreach($array as $i){
    echo $i, PHP_EOL;
}
echo "Last: ", $i, PHP_EOL;

// function内はローカルスコープになる。
// globalキーワードを使うとグローバルスコープにアクセスできるようになるが使うべきではない。
$foo = 1;

function some_func(){
    global $foo;
    $bar = 20;
}

some_func();

echo $foo, PHP_EOL;
echo $bar, PHP_EOL;