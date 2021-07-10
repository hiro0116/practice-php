<?php

// 今の年月を取得
$year = date('y');
$month = date('n');

// 来月の設定
$next_month = $month + 1;

// 月末日までを取得
$last_day = date('j', mktime(0, 0, 0, $month + 1, 0, $year));

$calendar = array();
$j = 0;

// 月末までループ
for ($i = 1; $i < $last_day + 1; $i++) {

  // 曜日を取得             時, 分, 秒, 月,    日, 年
  $week = date('w', mktime(0, 0, 0, $month, $i, $year));

  // 1日の時
  if ($i == 1) {

    // 1日目の曜日までループ
    for ($s = 1; $s <= $week; $s++) {

      // 空文字をいれる
      $calendar[$j]['day'] = ' ';
      $j++;
    }
  }

  // 配列に日付をセット
  $calendar[$j]['day'] = $i;
  $j++;

  // 月末日の時
  if ($i == $last_day) {

    // 月末日からループ
    for ($e = 1; $e <= 6 - $week; $e++) {

      // 空文字をいれる
      $calendar[$j]['day'] = ' ';
      $j++;
    }
  }
}
?>
<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>予約カレンダー</title>
</head>
<body>

  <div class = "header">
    20<?php echo $year; ?> 年 <?php echo $month; ?> 月
  </div>

  <table>
    <tr>
      <th>日</th>
      <th>月</th>
      <th>火</th>
      <th>水</th>
      <th>木</th>
      <th>金</th>
      <th>土</th>
    </tr>

    <tr>
      <?php $cnt = 0; ?>
      <?php foreach ($calendar as $key => $value): ?>
        <td>
        <?php $cnt++; ?>
        <?php echo $value['day']; ?>
        </td>
      <?php if ($cnt == 7): ?>
    </tr>

    <tr>
    <?php $cnt = 0; ?>
    <?php endif; ?>

    <?php  endforeach; ?>
    </tr>
  </table>

  <div>
    <?php echo $next_month; ?>
  </div>

  <style type="text/css">
    .header {
      height: 50px;
      display: flex;
      align-items: flex-end;
      justify-content: center;
    }
    table {
      width: 100%;
    }
    table th {
      background: #eee;
    }
    table th,
    table td {
      border: 1px solid #ccc;
      text-align: center;
      padding: 5px;
    }
  </style>
</body>

</html>