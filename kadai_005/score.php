<!DOCTYPE>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
<p>
  <?php
  // 変数を宣言・代入
  $students = [80, 60, 55, 40, 100, 25, 80, 95, 30, 60];
  $sum = 0;
  $ave = 0;

  for($i = 0; $i < 10; $i++ ){
    echo '生徒' . $i + 1 . 'の点数は:' . $students[$i] . '点<br>';
    $sum += $students[$i];
  }

  $ave = $sum / 10;
  echo "生徒10人の合計点数:{$sum}点<br>";
  echo "生徒10人の平均点数は:{$ave}<br>";




  ?>
</p>

</body>

</html>