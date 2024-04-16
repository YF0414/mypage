<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>マイページ</title>
<meta name="description" content="">
<meta name='robots' content='max-image-preview:large' />
<link rel="canonical" href="">
<meta property="og:url" content="">
<meta property="og:type" content="article">
<meta property="og:title" content="">
<meta property="og:description" content="">
<meta property="og:site_name" content="">
<meta property="og:image" content="">
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="" />
<meta name="twitter:title" content="">
<meta name="twitter:description" content="">
<meta name="twitter:image" content="" />
<?php
$loc_href = '.';
$inc_path = $_SERVER["DOCUMENT_ROOT"].'/assets';
$com_href = '/assets';

include $inc_path .'/inc/head.php';
?>
<body>
<div class="container">
  <?php include $inc_path .'/inc/side_left.php';?>
  <div class="member_content">
    <?php include $inc_path .'/inc/header3.php';?>

    <div class="logout_box">
      <p class="logout"><a href="">ログアウト <i class="fa-duotone fa-hands"></i></a></p>
    </div>

    <div class="member_logo">
      <a href="/mypage"><img src="<?=$com_href?>/img/member_logo.webp"></a>
    </div>

<h1 class="big_h2"><a href="/mypage">MyページTop <i class="fa-solid fa-arrow-up-right-from-square"></i></a></h1>


<div class="button-box">
  <a href="therapist.php" class="mat-button">セラピスト</a>
  <a href="likeshop.php" class="mat-button">ショップ</a>
  <a href="userprof.php" class="mat-button pushpush">ユーザー情報</a>
</div>

<h2 class="member_h22">ユーザー情報</h2>



<div class="Edit">
<div class="Edit__formArea">
  <form action="/edit#content" method="post"> <input type="hidden" name="_token" value="AhGNjHhRGXHZuQtv1rXLuAEM4Fx7eqPpHdVXJIA0">
    <div class="Edit__itemWrap">
      <div class="_itemTitle"> <i class="fa-solid fa-user"></i>
        <p>会員番号</p>
      </div> 2 </div>
    <div class="Edit__itemWrap">
      <div class="_itemTitle"> <i class="fa-solid fa-user"></i>
        <p>ニックネーム</p>
      </div> <input type="text" class="_inputText2" name="name" value="testuser"> </div>

    <div class="Edit__itemWrap">
      <div class="_itemTitle"> <i class="fa-solid fa-location-dot"></i>
        <p>利用するメインエリア</p>
      </div>
      <div class="prof-select">
        <select class="prof-style" name="age">
        <option value="">大阪</option>
        <option value="18">札幌</option>
        <option value="19">東京</option>
        <option value="20">横浜</option>
        <option value="21">名古屋</option>
        <option value="23">神戸</option>
        <option value="24">京都</option>
        <option value="25">広島</option>
        <option value="26">福岡</option>
        </select>
      </div>
    </div>

    <div class="Edit__itemWrap">
      <div class="_itemTitle"> <i class="fa-solid fa-lock"></i>
        <p>パスワード変更</p>
      </div> <input type="password2" placeholder="パスワード" class="_inputText3" name="password"> <input type="password3" placeholder="パスワード再確認" class="_inputText3" name="password"> </div>
    <div class="Edit__itemWrap">
      <div class="_itemTitle"> <i class="fa-solid fa-envelope"></i>
        <p>メールアドレス</p>
      </div> <input type="email" class="_inputText4" name="email" value="oilmafia@gmail.com">
    </div>
    <button type="submit" class="push-button">変更する</button>
  </div>

<?php include $inc_path .'/inc/footer_menu.php';?>
</div>
<!-- content -->
<?php include $inc_path .'/inc/prof_modal.php';?>
</div>
<!-- container -->
<?php include $inc_path .'/inc/footer.php';?>
