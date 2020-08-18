<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>お問い合わせフォーム</title>
</head>
<body>
  <h1>お問い合わせありがとうございます</h1>
  <div>
    <h2>入力内容</h2>
    <div>メールアドレス
      <?php echo $_POST['email']; ?>
    </div>
  </div>
</body>
</html>