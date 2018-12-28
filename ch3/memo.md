# chapter3

## 型

### 論理型

[PHP 型の比較表](http://php.net/manual/ja/types.comparisons.php)
phpでは文字列"0"などでもfalseになる。

## 演算子

### 可算子・減算子（インクリメント・デクリメント）

インクリメント(++)とデクリメント(--)は対象の変数に1を足す/引くという演算を行い結果を変数に代入する。前置か後置かで返り値が変わる。値を返す処理と演算の処理の順番が変わり、前置の場合は先に演算を行い、後置の場合はあとで演算を行う。

```php
$hoge = 0;
var_dump ($hoge == ++$hoge); //bool(true)
var_dump ($hoge <= $hoge++); //bool(false)
$hoge = 0;
var_dump ($hoge++);          //int(0)
```

### 型演算子

型演算子(instanceof)は左辺のインスタンスが右辺の型である場合にtrueを返す演算子。
当てはまらない場合はfalseを返す。

```php
if($a instanceof Some){
  ehco '$a is instance of Some class.'
}
```