<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="../../images/logo_black.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../../images/logo_black.png">
    <link rel="stylesheet" href="../style/style.css" media="(min-width: 900px) and (max-width: 3000px)">
    <link rel="stylesheet" href="../style/mobile.css" media="(min-width: 10px) and (max-width: 900px)">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Turret+Road:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&display=swap" rel="stylesheet">
    <title>Yukikaze_tech | お問い合わせ</title>
  </head>
  <body>
    <header name="top">
      <a href="../index.html"><img src="../../images/logo.png" alt="" class="header-img"></a>
      <img src="../../images/logo_letter.png" alt="" class="header-img">
      <ul id="nav">
          <li><a href="../index.html">HOME</a></li>
          <li><a href="team.html">チーム概要</a></li>
          <li><a href="../frc/frc.html">FRCとは</a></li>
          <li><a href="../partner/part.html">PARTNER</a></li>
          <li><a href="form.php">お問い合わせ</a></li>
      </ul>
      <nav class="NavMenu">
        <ul>
          <li><a href="../index.html">HOME</a></li>
          <li><a href="team.html">ABOUT TEAM</a></li>
          <li><a href="../frc/frc.html">ABOUT FRC</a></li>
          <li><a href="../partner/part.html">PARTNER</a></li>
          <li><a href="form.php">CONTACT</a></li>
        </ul>
      </nav>
      <div class="Toggle">
        <span></span><span></span><span></span>
      </div>
      </header>

    <main>
      <div class="gear">
        <img src="../../images/gear.png" width="100" height="100">
      </div>
      <!--ここから-->
      <?php
      if( empty($_POST['email']) ) {
        echo "<h1 class='non_confirm'>メールを入力してください！</h1>";
      } else {

      	echo "<div class='thanks-message'>";
        echo "<h1>お問い合わせいただきありがとうございます。</h1>";
        echo "<h4>必要ならば後日に連絡させていただきます.</h4>";
        echo "</div>";
        echo "<a href='form.php' id='back'><span id='black'>⇦　</span>戻る</a>";

      	$auto_reply_subject = null;
      	$auto_reply_text = null;
        $admin_reply_subject = null;
        $admin_reply_text = null;
      	date_default_timezone_set('Asia/Tokyo');
      	// 件名を設定
      	$auto_reply_subject = 'お問い合わせありがとうございます。';

      	// 本文を設定
      	$auto_reply_text = "この度は、お問い合わせ頂き誠にありがとうございます。
      下記の内容でお問い合わせを受け付けました。誤送信をした場合は「誤送信」と返信してください。\n\n";
      	$auto_reply_text .= "お問い合わせ日時：" . date("Y-m-d H:i") . "\n";
      	$auto_reply_text .= "年齢：" . $_POST['age'] . "\n";
      	$auto_reply_text .= "メールアドレス：" . $_POST['email'] . "\n";
        $auto_reply_text .= "お問い合わせの種類：" . $_POST['category'] . "\n\n";
      	$auto_reply_text .= "Yukikaze Technology 広報部";

      	// メール送信
      	mb_send_mail( $_POST['email'], $auto_reply_subject, $auto_reply_text);

        // 運営側へ送るメールの件名
        $admin_reply_subject = "お問い合わせを受け付けました";
        // 運営への本文を設定
        $admin_reply_text = "下記の内容でお問い合わせがありました。\n\n";
        $admin_reply_text .= "お問い合わせ日時：" . date("Y-m-d H:i") . "\n";
        $admin_reply_text .= "年齢：" . $_POST['age'] . "\n";
        $admin_reply_text .= "メールアドレス：" . $_POST['email'] . "\n";
        $admin_reply_text .= "お問い合わせの種類：" . $_POST['category'] . "\n\n";
        $admin_reply_text .= " - - - - - - - - - -その他のお問い合わせ- - - - - - - - - -" . "\n";//10
        $admin_reply_text .= "内容：" . $_POST['other_form'] . "\n\n";
        $admin_reply_text .= " - - - - - - - - -活動に関するお問い合わせ- - - - - - - - -" . "\n";//12
        $admin_reply_text .= "内容：" . $_POST['act_form'] . "\n\n";
        $admin_reply_text .= " - - - - - - - - - -活動に関する意見 - - - - - - - - - - -" . "\n";//8
        $admin_reply_text .= "内容：" . $_POST['act_opinion'] . "\n\n";
        $admin_reply_text .= " - - - - - - - メンバー募集に関するお問い合わせ - - - - - - -" . "\n";//16
        $admin_reply_text .= "本名：" . $_POST['member_name'] . "\n";
        $admin_reply_text .= "住所：" . $_POST['address'] . "\n";
        $admin_reply_text .= "特技：" . $_POST['member_skill'] . "\n";
        $admin_reply_text .= "内容：" . $_POST['addMember'] . "\n\n";
        $admin_reply_text .= " - - - - - - - メンター募集に関するお問い合わせ - - - - - - -" . "\n";//16
        $admin_reply_text .= "本名：" . $_POST['menter_name'] . "\n";
        $admin_reply_text .= "職業：" . $_POST['works'] . "\n";
        $admin_reply_text .= "特技：" . $_POST['menter_skill'] . "\n\n";
        $admin_reply_text .= " - - - - - - パートナー契約についてのお問い合わせ - - - - - -" . "\n";//18
        $admin_reply_text .= "会社：" . $_POST['company_name'] . "\n";
        $admin_reply_text .= "内容：" . $_POST['addPartner'] . "\n\n";
        $admin_reply_text .= " - - - - - - - - - 取材に関するお問い合わせ - - - - - - - -" . "\n";//12
        $admin_reply_text .= "分野：" . $_POST['mediaCategory'] . "\n";
        $admin_reply_text .= "内容：" . $_POST['mediaReport'] . "\n";

        // 運営側へメール送信
        mb_send_mail( 'northjapankeipark4@gmail.com', $admin_reply_subject, $admin_reply_text, $header);
      }

       ?>

      <!--ここまで-->
      <style media="screen">
        .non_confirm{
          font-size: 30px;
          color: red;
          margin: 30px;
        }
        .thanks-message{
          margin: 100px;
        }
        #back{
          margin-left: 200px;
          font-size: 20px;
        }
        #black{
          color: black;
        }
      </style>
    </main>
    <footer>
      <div class="footer-wrapper">
        <div class="text-contents">
          <div class="col2">
            <ul><p><a href="../index.html">ホーム</a></p>
              <li><a href="../index.html#blog">ブログ</a></li>
            </ul>
          </div>
          <div class="col2">
            <ul><p><a href="team.html">チーム概要</a></p>
              <li><a href="team.html#in_team">チーム情報</a></li>
              <li><a href="team.html#category">部門紹介</a></li>
              <li><a href="team.html#per">実績</a></li>
              <li><a href="team.html#spi">理念</a></li>
              <li><a href="team.html#in_logo">ロゴについて</a></li>
              <li><a href="team.html#in_fll">FLLとは？</a></li>
              <li><a href="team.html#report">収支一覧</a></li>
            </ul>
          </div>
          <div class="col2">
            <ul><p><a href="../frc/frc.html">FRCとは</a></p>
              <li><a href="../frc/frc.html#frc-info">FRCについて</a></li>
              <li><a href="../frc/frc.html#first-info">FIRST®とは？</a></li>
              <li><a href="../frc/frc.html#feature-info">FRCの特徴</a></li>
            </ul>
          </div>
          <div class="col2">
            <ul><p><a href="../partner/part.html">PARTNER</a></p>
              <li><a href="../partner/part.html#com-info">企業パートナー</a></li>
              <li><a href="../partner/part.html#individual-info">個人パートナー</a></li>
            </ul>
          </div>
        </div>
         <div class="footer-icon">
           <a href="https://www.instagram.com/yukikaze_tech/?hl=ja" target=_blank><img src="../../images/instagram-icon-white-on-black-circle.png" alt=instagramのアイコン id=instagram></a>
           <a href="https://twitter.com/Yukikaze_Tech"  target=_blank><img src=../../images/twitter_logo_white.png alt=twitterのアイコン id=twitter></a>
            <a href="https://www.facebook.com/pages/?category=your_pages&ref=bookmarks"  target=_blank><img src=../../images/facebook_logo.png alt=facebookのアイコン id=facebook></a>
          </div>
         </div>
    </footer>
    <script src="../js/jquery-3.5.1.min.js" charset="utf-8"></script>
    <script src="../js/script.js" charset="utf-8"></script>
    <script src="../js/particles.min.js" charset="utf-8"></script>
    <script src="../js/setting.js" charset="utf-8"></script>
    <script src="../js/smoothScroll.js" charset="utf-8"></script>
    <script src="https://kit.fontawesome.com/a43e22ce3e.js" crossorigin="anonymous"></script>

  </body>
</html>
