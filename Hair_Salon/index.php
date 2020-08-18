<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hair Salon</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Hair Salon</h1>
    <ul class = "header_lists">
      <li class = "header_list">
        <a href="#">お知らせ</a>
      </li>
      <li class = "header_list">
        <a href="#">予約</a>
      </li>
      <li class = "header_list">
        <a href="#">メニュー</a>
      </li>
      <li class = "header_list">
        <a href="#">商品</a>
      </li>
      <li class = "header_list">
        <a href="#">採用情報</a>
      </li>
    </ul>
  </header>
  <main>
    <div class = "contents">
      <div class = "store_name">
        <h2>横浜店</h2>
        <p>※クーポンは、下記お電話・ネット予約にてご確認いただけます。</p>
        <p>駅から徒歩5分</p>
      </div>
      <div class = "store_info">
        <h3>information</h3>
        <dl class = "information">
          <dt class = "info-title">受付時間
            <dd class = "info-explain">
              <月〜土> 09:00 ~ 19:00
              <br>
              <日・祝> カラー・パーマ 09:00 ~ 17:00 / カット 09:00 ~ 18:00
            </dd>
          </dt>
        </dl>
        <dl class = "information">
          <dt class = "info-title">定休日
            <dd class = "info-explain">年中無休</dd>
          </dt>
        </dl>
        <dl class = "information">
          <dt class = "info-title">住所
            <dd class = "info-explain">
              〒000-0000
              <br>
              神奈川県横浜市
            </dd>
          </dt>
        </dl>
        <dl class = "information">
          <dt class = "info-title">アクセス
            <dd class = "info-explain">R東海道線 横浜駅 徒歩５分</dd>
          </dt>
        </dl>
      </div>
      <div class = "store_recommend">
        <h3>recommended</h3>
        <dl class = "recommend">
          <dt class = "recommend-title">豊富なカラーをご用意
            <dd class = "recommend-explain">5種類のハーブエキスが髪へのダメージを和らげ美しい髪色へ導く『オーガニックカラー』や、白髪もナチュラルに染まる『モイスチャライジングカラー』など、幅広いラインナップをご用意。お客様の髪質に合わせたカラーをご提案いたします。</dd>
          </dt>
        </dl>
        <dl class = "recommend">
          <dt class = "recommend-title">最新トリートメントを導入
            <dd class = "recommend-explain">「TOKIOトリートメント」や「ザラメラメトリートメント」、「ファイバープレックス」など、今話題の最新トリートメントを各種ご用意。サロンならではのヘアケア体験をぜひご体感ください。</dd>
          </dt>
        </dl>
        <dl class = "recommend">
          <dt class = "recommend-title">トレンド×似合わせスタイルをご提案
            <dd class = "recommend-explain">ヘアカタ撮影やカットコンテスト、ヘアショーなどで培った技術や最新トレンドを、ライフスタイルや髪質に合わせてご提案いたします。髪のお悩みなどもお気軽にご相談ください。</dd>
          </dt>
        </dl>
      </div>
      <div class = "store_staff">
        <h3>staff</h3>
        <ul class = "staff-lists">
          <li class = "staff-list">
            <img src="images/staff1.jpg" alt="#" width="150" height="190">
            <p>田中</p>
          </li>
          <li class = "staff-list">
            <img src="images/staff2.jpg" alt="#" width="150" height="190">
            <p>山田</p>
          </li>
          <li class = "staff-list">
            <img src="images/staff3.jpg" alt="#" width="150" height="190">
            <p>佐藤</p>
          </li>
        </ul>
      </div>
      <div class = "store_contact">
        <h3>お問い合わせ</h3>
        <div class = "contact_form">
        <form action="sent.php" method = "post">
          <div class = "contact-item">件名</div>
          <input type="text" name = "name">
          <div class = "contact-item">お問い合わせ内容</div>
          <textarea name="form"></textarea>
          <input type="submit" value = "送信">
        </form>
        </div>
      </div>
    </div>
  </main>
  <footer>
    <ul class = "footer-lists">
      <li class = "footer-list">
        <a href="#">お知らせ</a>
      </li>
      <li class = "footer-list">
        <a href="#">予約</a>
      </li>
      <li class = "footer-list">
        <a href="#">メニュー</a>
      </li>
      <li class = "footer-list">
        <a href="#">商品</a>
      </li>
      <li class = "footer-list">
        <a href="#">採用情報</a>
      </li>
    </ul>
  </footer>
</body>
</html>