<?php

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jao's Portfolio</title>
  <link rel="stylesheet" href="sty.css">
</head>
<body>
  <header>
    <h1>Jao's Portfolio</h1>
  </header>

  <section class="me">
    <h1>〜自己紹介〜</h1>
    <div class="introduction">
      <div class="introductionImage">
        <img src="images/greenSky.jpg" >
      </div>
      <div class="introductionText">
        <p>　大谷 直己(おおたに なおみ)と申します。<br>　明治大学理工学部を中退後、独学にてプログラミングを学習中です。<br>
        　Webアプリの秘める手軽さや汎用性に惹かれ、Webアプリエンジニアを志しています。</p>
      </div>
    </div>
  </section>

  <section class="skillSet">
    <h1>〜学習中の技術〜</h1>
    <div>
      <p><span class="lang">○ HTML\CSS</span>　……フレックスボックスを用いて、Webサイトの基本的なマークアップが可能です。異なるデバイス間でのレスポンシブデザインも作成できます。</p>
      <p><span class="lang">○ JavaScript(jQuery)</span>　……主にjQueryを使用し、モーダルウィンドウやアコーディオンといった動的なデザインを作成できます。また、Ajaxによる非同期通信も実装可能です。</p>
      <p><span class="lang">○ PHP</span>　……バックエンドエンジニアを志しているため、現在最も学習に注力している言語です。自分が実装したいと思った処理は、試行錯誤しつつではありますが、作成可能です。</p>
      <p><span class="lang">○ MySQL</span>　……PHPと連携し、データの挿入や変更、取り出しといった、基本的な処理を実行可能です。</p>
      <p><span class="lang">○ Git</span>　……GitとGitHubを用いて、コミットやプッシュ、プル、ブランチの作成や切り替え、マージ等、基本的なバージョン管理を行えます。</p>
      <p><span class="lang">○ Laravel</span>　……動画教材のレッスンにて、インストールから極簡易的なWebアプリ作成を行いました。次回に作成を構想しているWebアプリは、Laravelを使用して作成する予定です。</p>
    </div>
  </section>

  <section class="work">
    <h1>〜成果物〜</h1>
    <div class="work1 lara">
      <a href="/hometive.php" target="_blank"><img src="images/lara.png" alt="ララの顔"></a>
      <p>美少女キャラクターが<br>褒めてくれる日記です</p>
    </div>
    <!-- <div class="work1">
      <a href="/coc_chat.php" target="_blank"><img src="images/unti.JPG" alt="gazou"></a>
    </div>
    <p>クトゥルフ神話TRPGを遊ぶことに特化したチャットサイトです</p> -->
  </section>

  <footer>
    <div>jao's portfolio</div>
  </footer>
</body>
</html>