<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="sent.css">
  <title>お問い合わせフォーム</title>
</head>
<body>
  <div class = "contact">
    <h1>お問い合わせありがとうございます</h1>
    <div class = "form-result">
      <div class = "result-title">入力内容</div>
      <div class = "result-item">■ メールアドレス</div>
        <br>
        <?php echo $_POST['email']; ?>
      <div class = "result-item">■ 件名</div>
        <br>
        <?php echo $_POST['subject']; ?>
      <div class = "result-item">■ お問い合わせ内容</div>
        <br>
        <?php echo $_POST['form']; ?>
    </div>
    <div class = "back-btn">
      <a href="index.php" class = "back">戻る</a>
    </div>
  </div>
</body>
</html>