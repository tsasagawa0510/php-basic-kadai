<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ここにコードを書いていく
        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];

        // 定数で降順・昇順を宣言
        const SORT = true;
        const RSORT = false;

        // 関数の宣言
        function sort_2way(array $array, bool $order){

          if($order){
            
            echo '昇順にソートする<br>';
            // 配列を昇順にソートする
            sort($array,SORT_NUMERIC);

          }else{
            echo '降順にソートする<br>';
            // 配列を降順にソートする
            rsort($array,SORT_NUMERIC);

          }

          // 配列の値を1つずつ出力
          foreach($array as $num){
            echo $num . '<br>';
          }
        }

        // 関数の呼び出し
        sort_2way($nums, RSORT);

        ?>
    </p>
</body>

</html>
