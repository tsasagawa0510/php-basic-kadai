<!DOCTYPE>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
<p>
  <?php
  // 連想配列を宣言・代入
  $vegetables = [ 'name' => '玉ねぎ', 'price' => 200, 'area' => 160 ];
  

  foreach($vegetables as $key => $value){
    echo "{$key} : {$value}<br>";
  };




  ?>
</p>

</body>

</html>