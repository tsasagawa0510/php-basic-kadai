<!DOCTYPE>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
<p>
  <?php
  
  // クラスの宣言
  // FOODクラス
  class Food {
    // プロパティの宣言
    private $name;
    private $price;

    // コンストラクタの宣言
    public function __construct(string $name, int $price){
      $this->name = $name;
      $this->price = $price;
    }

    // 自身の値段を出力するメソッドの宣言
    public function show_price(){
      echo $this->price . '<br>';
    }
  }

  // ANIMALクラス
  class Animal {
    // プロパティの宣言
    private $name;
    private $height;
    private $weight;

    // コンストラクタの宣言
    public function __construct(string $name, int $height, int $weight){
      $this->name = $name;
      $this->height = $height;
      $this->weight = $weight;
    }

    // 自身の値段を出力するメソッドの宣言
    public function show_height(){
      echo $this->height . '<br>';
    }
  }

  // インスタンス化
  $potato = new Food('potato', 250);
  $dog = new Animal('dog', 60, 5000);

  // インスタンスのプロパティを出力
  print_r($potato);

  // 改行
  echo '<br>';

  print_r($dog);

  // 改行
  echo '<br>';

  // potatoインスタンスのメソッドを実行
  $potato->show_price();
  
  // dogインスタンスのメソッドを実行
  $dog->show_height();





  ?>
</p>

</body>

</html>