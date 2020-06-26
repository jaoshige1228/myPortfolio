<?php

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ほめティブ日記紹介</title>
  <link rel="stylesheet" href="/sty_coc.css">
</head>
<body>
  <header>
    <span class="backhome"><a href="/"><img src="images/home.png" alt=""></a></span>
    <h1>〜ほめティブ日記〜</h1>
  </header>

  <section class="outline">
    <ul>
      <div class="content">
        <li>概要</li>
        <p>
          その日にあった「いいこと」のみを記録する日記アプリです。日記を書くと、美少女キャラクターが褒めてくれます。
        </p>
      </div>

      <div class="content">
        <li>サイトリンク</li>
        <p>
          <a href="https://positive-diary-555.herokuapp.com" target="_blank">https://positive-diary-555.herokuapp.com</a>
        </p>
      </div>
      
      <div class="content">
        <li>GitHubリポジトリ</li>
        <p><a href="https://github.com/jaoshige1228/positiveDiary" target="_blank">https://github.com/jaoshige1228/positiveDiary</a></p>
      </div>

      <div class="content function">
        <li>機能</li>
        <h3>〜日記機能〜</h3>
        <p>・その日にあった「いいこと」を最大３つまで記録する機能</p>
        <p>・カレンダーから日付を選択し、日記を閲覧及び編集する機能</p>
        <p>・「今日」の日記を編集するページには、ワンクリックで手軽にアクセスできる機能</p>
        <p>・日記を書いた日はカレンダー上に印がつく機能</p>
        <h3>〜マイページ機能〜</h3>
        <p>・アイコン画像を編集する機能</p>
        <p>・日記を書いた総日数を表示する機能</p>
        <p>・現在、連続で何日間、日記を書いているのか表示する機能</p>
        <p>・これまで、最高で何日間、連続で日記を書いたのか表示する機能</p>
        <h3>〜キャラクターのセリフ機能〜</h3>
        <p>・アクセスしているページに応じてセリフが変わる機能</p>
        <p>・一つのページであっても、複数種類のセリフがランダムに表示される機能</p>
        <p>・日記を連続で書いた日数が一定に到達する等、決められた条件に応じてセリフが変化する機能</p>
        <p>・キャラクターの二人称（ユーザーの呼ばれ方）と一人称を編集できる機能</p>
        <h3>〜その他〜</h3>
        <p>・モーダルウィンドウからの手軽なログイン及び新規登録機能</p>
        <p>・CSRF対策として各フォームにはトークンをセット</p>
        <p>・HTML部分に表示する文字にはエスケープ処理</p>
      </div>

      <div class="content">
        <li>使用言語</li>
        <p>
          ＜フロントエンド＞HTML,CSS,JavaScript(jQuery)<br>
          ＜バックエンド＞PHP<br>
          ＜データベース＞MySQL<br>
          ＜PaaS＞heroku
        </p>
      </div>

      <div class="content function">
        <li>工夫点</li>
        <h3>〜設計をしっかりと準備〜</h3>
        <p>　前回作成したTRPG専用のチャットサイトは、一切の設計や計画を立てずに、思いつきのみで作り進めてしまいました。その反省を生かし、今回の日記アプリでは、「実装予定の機能一覧」「製作期日」「各ページのワイヤーフレーム」「データベースのER図」を、まず一番に作りました。<br>
        　また、初めにフロントエンド部分を作り上げ、その後にバックエンド部分の機能を実装したことで、各タスクに集中することができました。これも、その時の気分によってフロントエンド部分やバックエンド部分を交互に作っていた前回の反省を、鑑みたものです。</p>
        <h3>〜直感的かつ手軽な操作性を意識〜</h3>
        <p>　主にヘッダー部分のアイコンクリックにより、ページ移動を行います。可能な限り、アイコンからその機能を推測できるようにしました。また、全ページのレイアウトに統一性を持たせ、スマホアプリのように直感的な操作が可能になるよう、意識しました。</p>
        <h3>〜ブログにてアウトプット〜</h3>
        <p>　このアプリの製作過程を、設計からデプロイまで、ブログにて記しました<a href="https://jaoshige.hatenadiary.com/archive/category/%E3%83%97%E3%83%AD%E3%82%B0%E3%83%A9%E3%83%9F%E3%83%B3%E3%82%B0" target="_brank">（リンク）</a>。自分が作り上げた処理を言葉で説明する、というのは想像以上に難しく、まだまだ改善の余地があります。とはいえ、学習過程を復習する良い手段であり、これから先の未来で読み返すことにより、気づきを得ることもあるかと思われます。</p>
      </div>

      <div class="content function">
        <li>課題点</li>
        <h3>〜GitやLaravelを不使用〜</h3>
        <p>　自分の慣れ親しんでいる技術のみで開発を進めました。サクサクと進みましたが、裏を返せば、新しいものをあまり吸収できなかった、ということになると思います。<br>　次回はGitとLaravelを活用し、技術の幅を広げていきたいと考えております。</p>
        <h3>〜機能が不十分〜</h3>
        <p>　主にユーザー情報周りの機能が不十分だと思います。メールによる二段階認証機能や、メールアドレスとパスワードの再設定機能を、本来であれば取り入れるべきでした。次回の作品は、これらの機能を盛り込んだものにしたいと考えております。</p>
        <h3>〜スマホ表示でのレイアウト崩れ〜</h3>
        <p>　ローカル開発環境と本番環境では、スマホ版の表示に大きな差がありました。原因を追求し、修正を試みます。（※現在修正中）</p>
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