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
    <span class="backhome"><a href="/">あ</a></span>
    <h1>〜COC専用チャットサイト〜</h1>
  </header>

  <section class="outline">
    <ul>
      <li>概要</li>
      <p>
        「クトゥルフの呼び声」、通称COC(Call of Cthuluhu)というTRPG(テーブルトーク・ロールプレイングゲーム)を遊ぶことに特化したチャットサイトです。
      </p>

      <li>サイトリンク</li>
      <p>
        これでも読んどけ
      </p>
      
      <li>コード</li>
      <p>githubのリンクここ</p>

      <li>機能紹介</li>
      <p>動画ここ</p>
      <li>使用技術</li>
      <p>
        ＜フロントエンド＞HTML,CSS,JavaScript(jQuery)<br>
        ＜バックエンド＞PHP<br>
        ＜データベース＞MySQL<br>
        ＜サーバー＞レンタルサーバー(さくらサーバー)
      </p>
    </ul>
  </section>

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

      <div class="illustSectionsWrap">
        <h3>ゲームの流れ</h3>
        <section class="illustSections">
          <div class="illustSection">
            <div class="image">
              <img src="images/unti.JPG" alt="">
            </div>
            <div class="text">
              うんちをします
            </div>
          </div>
          <div class="illustSection">
            <div class="image">
              <img src="images/unti.JPG" alt="">
            </div>
            <div class="text">
              うんちをします
            </div>
          </div>
          <div class="illustSection">
            <div class="image">
              <img src="images/unti.JPG" alt="">
            </div>
            <div class="text">
              うんちをします
            </div>
          </div>
          <div class="illustSection">
            <div class="image">
              <img src="images/unti.JPG" alt="">
            </div>
            <div class="text">
              うんちをします
            </div>
          </div>
        </section>
      </div>
    </div>
  </section>

  <section class="createReason">
    <h3 class="ACDButton"><span class="ACDmark">▼</span>製作理由</h3>
    <div class="ReasonWrap">
      <p>"サイコロが振れるチャットサイト"は数多く存在します。
        そういったサイトでTRPGを遊ぶ際に、以下のような手間が発生しがちでした。
      </p>
      <div class="createIllustWrap">
        <div class="createIllust">
          <img src="images/unti.JPG">
          <img src="images/unti.JPG">
          <p>うんち</p>
        </div>
        <div class="createIllust">
          <img src="images/unti.JPG">
          <img src="images/unti.JPG">
          <p>うんち</p>
        </div>
        <div class="createIllust">
          <img src="images/unti.JPG">
          <img src="images/unti.JPG">
          <p>うんち</p>
        </div>
      </div>
    </div>

    <section>
      <h3 class="ACDButton"><span class="ACDmark">▼</span>課題点</h3>
      <div class="point">
        <ul>
          <li>ウンチを漏らした</li>
          <li>うんちしたかった</li>
        </ul>
      </div>
    </section>
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