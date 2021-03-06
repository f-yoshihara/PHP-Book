# chapter4

## 制御構造

制御構造はプログラムの実行の流れを制御する役割をもつ構文のこと。
繰り返しや条件分岐のこと。

### 文(statement)とグループ文

phpスクリプトは一連の文の集まり。
文は;で終了する。
複数の文を{}で囲むことによってグループ化しグループ文（ブロック文）を作ることができる。
文をグループ化することでグループ文は一つの文として扱われる。
制御構造・括弧・文からなるphpスクリプトで文が実行される箇所はグループ文に置き換え可能。
また、制御構造自体も一つの文とみなされている。制御構造である文に対して制御構造を用いることも可能。つまり例えばif文をネストしたりすることができるということ。

### 式(expression)

phpにおける式は値を持つ全てのもののこと。評価されうる全てのものと言い換えることもできる。rubyでの式は返り値を持つ全てのものだった。またphpでは式と文は異なる。正解にいうと式は文の一部で文の全てが式ではない。例えば下記は文だけど評価はできないので式ではない。なので制御構文の条件式などには適応できない。

```php
 echo $test;
```

これに対して下記は式であり文でもある。

```php
$var = 1;
```

上記の文には三つの式が含まれている。=は右辺の式の返り値を（評価して）左辺に代入する演算子である。=の値は右辺の値になる。この場合=の値は1。

```php
($var = 1);
```

そして上記のように複数の式を()で囲むと一つの式とみなされ最後に評価された値が()内全体の値とみなされるようになる。
なのでこの式の値は1になる。

### 制御構文に関する別の構文

phpはphpブロック内のみをphpスクリプトとして認識し実行するが一つのファイル内であれば、複数のphpブロックをまたぐブロック文を定義することができる。これによって制御構文内に例えばhtmlが入る場合でもブロック文を継続することができるようになる。
このような使い方をする場合は可読性のためブロックの始まりの{を:で表し終わりの}を（例えばif構文であれば）endifと表すことができる。

### do-while

```php
$i = 0;
do {
  echo $i, PHP_EOL;
  $i++;
}while($i < 10);
```

上記のようにするとwhile構文内の条件式に入る前に一度ブロック文を実行する。その後条件式を評価するので初期値が条件にあったものではない場合にも0周目だけはブロック文が実行されることになる。

### for

```php
for(初期化式; 条件式; 反復式;)
    文
```

上記のような構文で繰り返しができる。jsのfor文と同じ。下記の順番で処理する。

1. 初期化式を評価。
2. 条件式を評価し、trueなら文に入る。falseならfor構文を終了。
3. 文を実行。
4. 反復式を評価。
5. 2に戻る。

評価対象のそれぞれの式は下記のようにカンマで区切って複数の式を指定することもできる。ただし条件式と反復式での複数の式の指定は一般的には行われない。

```php
$ary = [1, 2, 3, 4, 5];
for($i = 0, $end = count($ary); $i < $end; ++$i){
  echo $ary[$i], PHP_EOL;
}
```

## 関数

### 関数の呼び出し

関数を呼び出すときは基本的に関数名に()をつけて呼び出す。

### コールバック関数

PHPでも引数に関数を指定することができ、対象となる関数のことをコールバック関数と呼ぶ。

### 無名関数

無名関数とは名前をつけて定義する関数ではなく、コールバックの対象にしたり、変数に代入したりするときに使う関数のこと。