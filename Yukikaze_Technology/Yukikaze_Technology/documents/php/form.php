<?php
require_once('data.php');
 ?>
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
    <script src="../js/jquery-1.11.0.min.js"></script>
    <script src="../js/turnBox.js" charset="utf-8"></script>
    <title>Yukikaze_tech | お問い合わせ</title>
  </head>
  <body>
    <header name="top">
      <a href="../index.html"><img src="../../images/logo.png" alt="" class="header-img"></a>
      <img src="../../images/logo_letter.png" alt="" class="header-img">
      <ul id="nav">
          <li><a href="../index.html">HOME</a></li>
          <li><a href="../team/team.html">チーム概要</a></li>
          <li><a href="../frc/frc.html">FRCとは</a></li>
          <li><a href="../partner/part.html">PARTNER</a></li>
          <li><a href="form.php">お問い合わせ</a></li>
      </ul>
      <nav class="NavMenu">
        <ul>
          <li><a href="../index.html">HOME</a></li>
          <li><a href="../team/team.html">ABOUT TEAM</a></li>
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
      <!--ここから内容-->
      <div class="form-wrapper">
        <div class="form" id="in_team">
          <div class="wrapper">
            <div class="heading">
              <p>CONTACT<span class="horizon-bar">──────</span><span class="heading-jp">お問い合わせ</span></p><!--チームデータ-->
            </div>
            <div class="contents">
              <div class="wrapper">
                 <form method="post" action="sent.php" name="form1">
                   <div class="nessesary">
                     <div class="turn-mail turn">
                       <div>
                         <p class="form-item turnBoxButton focus">メールアドレス</p>
                       </div>
                       <div>
                         <div class="turnBorder">
                           <span>メール</span><input type="email" name="email" class="focusTarget">
                         </div>
                       </div>
                     </div>
                     <div class="turn-age turn">
                       <div>
                         <p class="form-item turnBoxButton">年齢</>
                       </div>
                       <div>
                         <div class="turnBorder">
                           <span>年齢</span>
                           <div class="select">
                             <select name="age"class="custom-select">
                               <option value="未選択">選択してください</option>
                               <?php
                                 for($i=6;$i<=100;$i++){
                                   echo "<option value='{$i}'>{$i}</option>";
                                 }
                               ?>
                             </select>
                           </div>
                         </div>
                         </div>
                     </div>
                     <div class="turn-category turn">
                       <div>
                         <p class="form-item turnBoxButton">お問い合わせの種類</>
                       </div>
                       <div class="turnBorder" id="categoryTurn">
                         <span>種類</span>
                         <div class="select">
                           <select id="category_select" name="category" class="custom-select">
                             <option value="その他">その他</option>
                             <?php
                             foreach ($types as $type){
                               echo "<option value='{$type}'>{$type}</option>";
                              }
                             ?>
                           </select>
                         </div>
                       </div>
                     </div>
                   </div>
                   <div class="multi">
                     <div class="form-type form-multi" id="type0">
                       <textarea name="other_form" rows="10" cols="100" spellcheck="true"  class="textareas" id="otherText"></textarea>
                     </div>
                     <div class="form-type form-multi" id="type1">
                       <h2>活動内容に関してのお問い合わせ</h2>
                       <div class="turn multi-turn">
                         <div>
                           <p class="turnBoxButton form-item">質問の種類</p>
                         </div>
                         <div class="turnBorder" id="actTurn">
                           <span>質問</span>
                           <div class="select">
                             <select class="category_act custom-select">
                               <option value="">未選択</option>
                               <?php
                               foreach ($acts as $act){
                                    echo "<option value='{$act}'>{$act}に関するお問い合わせ</option>";
                               }
                               ?>
                             </select>
                           </div>
                         </div>
                       </div>
                       <h2>内容</h2>
                       <textarea name="act_form" rows="8" cols="70" class="textareas"></textarea>
                     </div>
                     <div class="form-type form-multi" id="type2">
                       <h2>活動に対してのご意見</h2>
                       <h2>内容</h2>
                       <textarea name="act_opinion" rows="8" cols="70" class="textareas"></textarea>
                     </div>
                     <div class="form-type form-multi" id="type3">
                       <h2>メンバー加入に関するお問い合わせ</h2>
                       <p class="form-item turnBoxButton turn multi-turn"><a href="メンバー募集要項.pdf" target="_blank" id="memberLinked">メンバー募集要項(PDF)</a></p>
                       <div class="turn-name turn multi-turn">
                         <div>
                           <p class="form-item turnBoxButton focus">本名</p>
                         </div>
                         <div>
                           <div class="turnBorder">
                             <span>本名</span><input type="text" name="member_name" class="focusTarget">
                           </div>
                         </div>
                       </div>
                       <div class="turn-name turn multi-turn">
                         <div>
                           <p class="form-item turnBoxButton focus">ご住所（町名まで）</p>
                         </div>
                         <div>
                           <div class="turnBorder">
                             <span>住所</span><input type="text" name="address" class="focusTarget">
                           </div>
                         </div>
                       </div>
                       <div class="turn-name turn multi-turn">
                         <div>
                           <p class="form-item turnBoxButton focus">扱える技術（複数回答可）</p>
                         </div>
                         <div>
                           <div class="turnBorder">
                             <span>特技</span><input type="text" name="member_skill" class="focusTarget program" autocomplete="off">
                           </div>
                         </div>
                       </div>
                       <h2>加入の理由・意気込みなどをご記入ください。</h2>
                       <textarea name="addMember" rows="8" cols="70" class="textareas"></textarea>
                     </div>
                     <div class="form-type form-multi" id="type4">
                       <h2>メンター募集に関するお問い合わせ</h2>
                       <div class="turn-name turn multi-turn">
                         <div>
                           <p class="form-item turnBoxButton focus">本名</p>
                         </div>
                         <div>
                           <div class="turnBorder">
                             <span>本名</span><input type="text" name="menter_name" class="focusTarget">
                           </div>
                         </div>
                       </div>
                       <div class="turn-name turn multi-turn">
                         <div>
                           <p class="form-item turnBoxButton focus">職業</p>
                         </div>
                         <div>
                           <div class="turnBorder">
                             <span>職業</span><input type="text" name="works" class="focusTarget">
                           </div>
                         </div>
                       </div>
                       <div class="turn-name turn multi-turn">
                         <div>
                           <p class="form-item turnBoxButton focus">扱える技術（複数回答可）</p>
                         </div>
                         <div>
                           <div class="turnBorder">
                             <span>特技</span><input type="text" name="menter_skill" class="focusTarget program">
                           </div>
                         </div>
                       </div>
                       <p>メンター希望の方には後日追い追い連絡させていただきます</p>
                     </div>
                     <div class="form-type form-multi" id="type5">
                       <h2>パートナーシップに関するお問い合わせ</h2>
                       <div class="turn-name turn multi-turn">
                         <div>
                           <p class="form-item turnBoxButton focus">社名・個人名</p>
                         </div>
                         <div>
                           <div class="turnBorder">
                             <span>特技</span><input type="text" name="company_name" class="focusTarget">
                           </div>
                         </div>
                       </div>
                       <h2>内容</h2>
                       <textarea name="addPartner" rows="8" cols="70" class="textareas"></textarea>
                     </div>
                     <div class="form-type form-multi" id="type6">
                       <h2>取材・メディア関連のお問い合わせ</h2>
                       <div class="turn-category turn multi-turn">
                         <div>
                           <p class="form-item turnBoxButton">取材希望の分野</>
                         </div>
                         <div class="turnBorder" id="mediaTurn">
                           <span>分野</span>
                           <div class="select">
                             <select id="media_select" name="mediaCategory" class="custom-select">
                               <option value="">その他</option>
                               <?php
                               foreach ($articles as $article){
                                 echo "<option value='{$article}'>{$article}についての取材</option>";
                                }
                               ?>
                             </select>
                           </div>
                           <h2>内容</h2>
                           <textarea name="mediaReport" rows="8" cols="70" class="textareas"></textarea>
                         </div>
                       </div>
                      </div>
                     </div>
                   </div>
                   <div id="workarea">
                     <div class="position">
                       <div class="svg-wrapper">
                         <svg height="40" width="150" xmlns="http://www.w3.org/2000/svg">
                           <rect id="shape" height="40" width="150" />
                           <div id="text">
                             <a href=""><span class="spot"></span><input type="submit" value="送信" class="submitButton" name="btn_confirm"></a>
                           </div>
                         </svg>
                       </div>
                     </div>
                   </div>
                 </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--ここまで内容-->
      <div class="totop">
        <div class="stoker">
          <p><a href="#">　topへ　</a></p>
        </div>
      </div>
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
         <script src="../js/particles.min.js" charset="utf-8"></script>
         <script src="../js/setting.js" charset="utf-8"></script>
         <script src="../js/smoothScroll.js" charset="utf-8"></script>
         <script src="https://kit.fontawesome.com/a43e22ce3e.js" crossorigin="anonymous"></script>
    </footer>
    <script src="php.js"></script>
  </body>
</html>
