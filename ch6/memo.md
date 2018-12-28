# chapter6

## ひとこと掲示板

### エラーメッセージ

#### count関数

配列の要素数を数えるときlengthではなくcountを使う。
0から数えるが、配列が空のときを0個とする。条件式として使う場合、空のときがfalseとなる。

```php
$ary1 = [0];
$str = 'test';
$void = [];
echo count($ary1), PHP_EOL; //1
echo count($str), PHP_EOL;  //1
echo count($void), PHP_EOL; //0
var_dump (count($void));    //int(0)
```