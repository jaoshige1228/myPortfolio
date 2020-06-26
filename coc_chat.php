<?php

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COC専用チャットサイト紹介</title>
  <link rel="stylesheet" href="/sty_coc.css">
</head>
<body>
  <header>
    <span class="backhome"><a href="/"><img src="images/home.png" alt=""></a></span>
    <h1>COC専用チャットサイト</h1>
  </header>

  <section class="outline">
    <ul>
      <li>概要</li>
      <p>
        「クトゥルフの呼び声」、通称COC(Call of Cthuluhu)というTRPG(テーブルトーク・ロールプレイングゲーム)を遊ぶことに特化したチャットサイトです。
      </p>

      <li>サイトリンク</li>
      <p>
        <a href="https://positive-diary-555.herokuapp.com" target="_blank">https://positive-diary-555.herokuapp.com</a>
      </p>
      
      <li>コード</li>
      <p>
        <a href="https://github.com/jaoshige1228/coc_chat" target="_blank">https://github.com/jaoshige1228/coc_chat</a>
      </p>

      <div class="content function">
        <li>機能</li>
        <h3>〜キャラクターシート登録機能〜</h3>
        <p>・ゲームで使用するキャラクターのデータ（通称：キャラシ）を作成、保管する機能</p>
        <p>・キャラシ作成中、入力したステータスに関連する他のステータスを自動で計算し、入力する機能</p>
        <p>・「今日」の日記を編集するページには、ワンクリックで手軽にアクセスできる機能</p>
        <h3>〜チャット機能〜</h3>
        <p>・チャットルーム作成機能</p>
        <p>・チャットルーム検索機能</p>
        <p>・チャットルーム作成者が許可したユーザーのみ書き込みを行える機能</p>
        <p>・チャット上でサイコロを振る機能</p>
        <p>・登録したキャラシと連携し、アイコンや名前を自動設定</p>
        <p>・登録したキャラシと連携し、技能ロールをボタン一つで投下可能</p>
        <p>・同じ部屋にいる他のユーザーのキャラシを一括閲覧できる機能</p>
        <h3>〜その他〜</h3>
        <p>・ログイン及び新規登録機能</p>
        <p>・CSRF対策として各フォームにはトークンをセット</p>
        <p>・HTML部分に表示する文字にはエスケープ処理</p>
        <p>・レスポンシブデザイン</p>
      </div>
      <li>使用技術</li>
      <p>
        ＜フロントエンド＞HTML,CSS,JavaScript(jQuery)<br>
        ＜バックエンド＞PHP<br>
        ＜データベース＞MySQL<br>
        ＜PaaS＞heroku
      </p>

      <section class="whatTRPG">
        <h3 class="ACDButton"><span class="ACDmark">▼</span>TRPGとは？</h3>
        <div class="TRPGWrap">
          <section>
            <div class="quote">
            "主に3～5人で集まって、1人の進行役と登場人物役として遊ぶ側を決め、「サイコロ(ダイス)と会話で物語を作る」遊び。　それがテーブルトーク・ロールプレイング・ゲーム(以下、TRPG)です。
            「テーブルトーク」とは、文字通り机(卓)を囲んで話すこと。そして「ロールプレイング・ゲーム」とは、ゲーム内の役=キャラクターを演じて遊ぶことを意味します。
            簡単に言ってしまえば、子供がやるごっこ遊びやおままごと、あるいは演劇のひとつであるエチュード(即興劇)を思い浮かべるとわかりやすいかもしれませんね。"
            </div>
            <div class="quote">
            "日本の主流なRPGといえばゲーム機を使ったデジタルなものですが、TRPGはコンピューターを使わず、代わりに紙とペン、そしてサイコロを使って話しながら遊ぶアナログなゲームになります。友達数人で集まって遊ぶゲームなのでワイワイ賑やかに遊べば仲もより深まりやすく、また即興から生まれる予想もしていなかったストーリーや結末という自由度の高さが魅力です。"
            </div>
            <p><a href="https://fujimi-trpg-online.jp/about/trpg.html" target="_blank">富士見書房公式 TRPG ONLINE</a>より抜粋</p>
          </section>
        </div>
      </section>

      <div class="content function">
        <li>工夫点</li>
        <h3>〜他のサイトにはない利便性を追求〜</h3>
        <p>　サイコロを振れるチャットサイト、というものは、数多く存在します。そういったサイトでTRPGを遊ぶ際には、サイト上でサイコロを振り、手元のキャラクターシートでステータスを確認し、技能ロールの成否を自力で判定する必要がありました。当サイトでは、技能ロールの成否はシステムが自動で判定を行ってくれます。<br>　また、他のユーザーのキャラシを手軽に確認できたり、キャラクターシート保管庫として扱えたりと、他のサイトでは揃うことのなかった機能を盛り込みました。</p>
      </div>

      <div class="content function">
        <li>課題点</li>
        <h3>〜開発計画を立てなかった〜</h3>
        <p>　開発にあたって、特に計画を立てることなく、その日その時にやりたいように開発を進めました。結果、デザインを幾度も変更することになったり、後に必要だった機能が次々に判明したりと、修正の工程に多くの時間をかけてしまいました。</p>
        <h3>〜ゲーム的処理の実装に膨大な時間をかけた〜</h3>
        <p>　ゲームを遊ぶためのサイト、という性質上、ステータスの計算処理が必要となりました。煩雑な計算をシステムに行わせる工程には、莫大な時間と手間を投下しました。jQueryを用いた表計算の練習にはなりましたが、Webプログラマーとしては無関係な処理に時間を使ってしまったと思います。</p>
      </div>
    </ul>
  </section>

  <footer>
    <div>jao's portfolio</div>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script>
    $(function(){
      $('.ACDButton').on('click',function(){
        var thisWrap = $(this).next('div');
        var thisClass = "." + $(thisWrap).attr('class');
        var thisDisp = $(thisClass).css('display');
        var thisSpan = $(this).children('span');
        // console.log(thisSpan);
        if(thisDisp == 'none'){
          $(thisWrap).slideDown();
          // $('.TRPGWrap').slideDown();
          $(thisSpan).html('▲');
        }else{
          $(thisWrap).slideUp();
          $(thisSpan).html('▼');
        }
      })
    });
  </script>
</body>
</html>