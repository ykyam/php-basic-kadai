<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
    function sort_2way($array, $order) {
      if ($order === 'asc') {
        sort($array);
      } elseif ($order === 'desc') {
        rsort($array);
      }
      return $array;
    }
    $nums = [15, 4, 18, 23, 10];
    echo "昇順にソートします。<br>";
    $sorted_nums = sort_2way($nums, 'asc');
    foreach ($sorted_nums as $num) {
      echo $num . "<br>";
    }
    echo "降順にソートします。<br>";
    $sorted_nums = sort_2way($nums, 'desc');
    foreach ($sorted_nums as $num) {
      echo $num . "<br>";
    }
    ?>
  </p>
</body>
</html>