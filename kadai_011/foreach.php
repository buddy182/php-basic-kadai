<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>11章課題</title>
</head>
<body>
  <p>
    <?php
    $item_prices = ['名前' => '玉ねぎ', '値段' => '200', '産地' => '北海道'];
        foreach($item_prices as $key => $value){
          echo "{$key}：{$value}<br>";
        }

    ?>
  </p>
  
</body>
</html>