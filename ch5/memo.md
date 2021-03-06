# chapter5

## クラス

### 継承

PHPでは継承は下記のように行う。

```PHP
class クラス名 extends 親クラス名{
}
```

また多重継承は許されておらず、一つのクラスしか継承することができない。

### オーバーライド

親クラスで定義されたプロパティやメソッドを子クラスで同じ名前で定義すると子クラスでそれを上書きすることができる。これをオーバーライドと呼ぶ。オーバーライドしたメソッドは親クラスと異なる数の引数を持ってはいけない。ただし、デフォルト値をもつ引数を追加することは許されている。また、コンストラクタも例外的に異なる引数を持つことができる。

### parentキーワード

クラスコンテキストの中ではparentは親クラスを意味するキーワードになる。
使い方はselfと同じ。
キーワードは変数ではないので$thisのように$はつけない。
下記のようにすると親のメソッドを呼び出すことができる。
これによって子クラスで重複する定義をなくすことができる。

```php
parent::メソッド(引数)
```

### インスタンスの生成

phpではnew演算子を使ってオブジェクトをインスタンス化する。
それを変数に代入するとオブジェクトへの参照が変数に渡されるようになる。
オブジェクトにラベルが貼られるようなイメージ。
なので下記のようにすると同じ一つのインスタンスを二つの変数が参照するようになる。

```php
$test = new Test();
$test1 = $test;
```

もしも別のインスタンスを複製したい場合は下記のようにする。
これでインスタンスが二つ作られてそれぞれが別の変数に参照されるようになる。

```php
$test1 = clone $test;
```

phpではメソッドの呼び出しに->(アロー演算子)が使われる。

### アクセス修飾子

オブジェクトのアクセス修飾子とはメソッドやプロパティがどこからアクセス可能かを定義するのに使用する。3つのアクセス修飾子がある。

* public
  * どこからでも参照・呼び出しが可能。
* private
  * クラス内でのみ参照・呼び出しが可能。
* protected
  * クラス内とそのクラスを継承したクラス内でのみ参照・呼び出しが可能。

protectedを宣言すると継承した先でプロパティやメソッドを使い回すことができる。

### this

オブジェクトがインスタンス化されると$thisという変数が自動的に定義される。
$thisは自分自身のオブジェクトへの参照である。
オブジェクトは自分自身のプロパティやメソッドへは$thisを経由してアクセスするようになる。

### staticプロパティ

staticプロパティはクラスの持っているプロパティ。
クラス定義の際下記のように定義する。
これで初期値'static property'の設定も行われている。

```php
private static $property = 'static property'
```

### staticメソッド

staticメソッドはクラスメソッドのようなもの。
インスタンスに対しては使えない。
クラス定義の際下記のように定義する。

```php
public static function getStaticProperty(){
  return self::$staticProperty;
}
```

selfキーワードはクラスコンテキストの内部でクラス自体にアクセスする時に利用する。
self::で自分のクラス自体にアクセスすることができるようになる。
selfは変数ではなくキーワードなのでそれ自体に$をつけず::の後のプロパティには$をつける。

## 名前空間

### 概要

名前空間とはクラスや関数の使える名前の集合を限定することで名前の衝突を防ぎ、意味を明瞭にするための機能。
名前空間はディレクトリシステムに似ている。

### 定義

名前空間の区切りには\を使う。
同じ名前空間の中では名前空間の指定を省略することができる。
別の別の名前空間から他の名前空間のクラスや関数を呼び出すときは常に完全修飾名(絶対パスのようなもの)を指定しないといけない。
同じ理由から名前空間を定義しグローバルなクラスや関数を用いる際にはその頭に\をつけないといけない。
グローバルな空間にいる場合は装飾名(相対パスのようなもの)からの呼び出しが可能。

```PHP
namespace 名前空間\サブ名前空間;
```

上記のように宣言する。
名前空間の宣言よりも前に出力や文が存在してはいけない。
名前空間の影響を受けるのは下記の3種類。

* クラス
* 関数
* 定数(constで定義したもの。define()では影響を受けない。)

一つのファイルに複数の名前空間を作る時は下記のように宣言する。

```PHP
<?PHP

namespace Project\Module {
  class Directory{}
}

namespace Project\Module2 {
  class Directory{}
}
```

この場合、namespaceのブロックの外に文や出力があってはいけない。
一つのときと同じようにnamespaceの外に文や出力があってはいけない。

### インポート

useを使って別の名前空間のクラスをインポートすることができるが関数や定数を使うことはできない。

```PHP
use \クラス名;
use 名前空間;
use 名前空間 as 別名;
use 名前空間\クラス名;
```

asを使った場合別名でインポートすることができる。
使わなかった場合は最後の被修飾名でインポートされる。

```php
use Foo\Bar\Baz;
$baz = new Baz();
```
