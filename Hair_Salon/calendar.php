<?php

// 今の年月を取得
$year = date('y');
$month = date('m');

// 月末日までを取得
$last_day = date('d', mktime(0, 0, 0, $month + 1, 0, $year));

$calendar = array();
$j = 0;

for ($i = 1; $i < $last_day + 1; $i++) {
  $week = date('w', mktime(0, 0, 0, $month, $i, $year));
  if ($i == 1) {
    for ($s = 1; $s <= $week; $s++) {
      $calendar[$j]['day'] = ' ';
      $j++;
    }
  }
  $calendar[$j]['day'] = $i;
  $j++;
  if ($i == $last_day) {
    for ($e = 1; $e <= 6 - $week; $e++) {
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

  20<?php echo $year; ?> 年 <select name="month"></select><?php echo $month; ?> 月のカレンダー

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

  <style type="text/css">
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