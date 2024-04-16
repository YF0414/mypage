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

<h1 class="big_h2">◯◯さんのMyページ</h1>

<div class="button-box">
  <a href="therapist.php" class="mat-button">セラピスト</a>
  <a href="likeshop.php" class="mat-button">ショップ</a>
  <a href="userprof.php" class="mat-button">ユーザー情報</a>
</div>

<h2 class="member_h22">オススメショップ</h2>

<div class="prof_cal">
  <div class="prof_item_cal"><img src="https://oil-mafia.com/profile_images/images_one_Y3aXUYwHRLSFDljPeE9y1705943123.jpg" alt=""></div>
  <div class="prof_item_cal"><img src="https://oil-mafia.com/profile_images/images_one_gqUWouLpvvZCTRTaDeYx1706025418.jpg" alt=""></div>
  <div class="prof_item_cal"><img src="https://oil-mafia.com/profile_images/images_one_hiOneWyXfLKNoy6Dbon41706092384.jpg" alt=""></div>
  <div class="prof_item_cal"><img src="https://oil-mafia.com/profile_images/images_one_Y3aXUYwHRLSFDljPeE9y1705943123.jpg" alt=""></div>
  <div class="prof_item_cal"><img src="https://oil-mafia.com/profile_images/images_one_gqUWouLpvvZCTRTaDeYx1706025418.jpg" alt=""></div>
</div>

<h2 class="member_h22">本日出勤のMyセラピスト</h2>

<div class="container_photo heightgg">
  <div class="grid-item_photo">
    <a data-micromodal-trigger="remodal_prof_modal">
      <img src="<?=$com_href?>/img/samp01.jpg" loading="lazy">
    </a>
    <p>11:00-18:00
    <br>名前 / 年齢
    </p>
  </div>
  <div class="grid-item_photo">
    <a data-micromodal-trigger="remodal_prof_modal">
      <img src="<?=$com_href?>/img/samp02.jpg" oading="lazy">
    </a>
    <p>12:00-19:00
    <br>名前 / 年齢
    </p>
  </div>
  <div class="grid-item_photo">
    <a data-micromodal-trigger="remodal_prof_modal">
      <img src="<?=$com_href?>/img/samp03.jpg" loading="lazy">
    </a>
    <p>13:00-20:00
    <br>名前 / 年齢
    </p>
  </div>
  <div class="grid-item_photo">
    <a data-micromodal-trigger="remodal_prof_modal">
      <img src="<?=$com_href?>/img/samp01.jpg" loading="lazy">
    </a>
    <p>14:00-21:00
    <br>名前 / 年齢
    </p>
  </div>
  <div class="grid-item_photo">
    <a data-micromodal-trigger="remodal_prof_modal">
      <img src="<?=$com_href?>/img/samp02.jpg" oading="lazy">
    </a>
    <p>15:00-22:00
    <br>名前 / 年齢
    </p>
  </div>
  <div class="grid-item_photo">
    <a data-micromodal-trigger="remodal_prof_modal">
      <img src="<?=$com_href?>/img/samp03.jpg" loading="lazy">
    </a>
    <p>16:00-23:00
    <br>名前 / 年齢
    </p>
  </div>
  <div class="grid-item_photo">
    <a data-micromodal-trigger="remodal_prof_modal">
      <img src="<?=$com_href?>/img/samp01.jpg" loading="lazy">
    </a>
    <div class="table_pos_item">
      <p class="out_time">本日終了
      </p>
    </div>
    <p>11:00-16:00
    <br>名前 / 年齢
    </p>
  </div>
  <div class="grid-item_photo">
    <a data-micromodal-trigger="remodal_prof_modal">
      <img src="<?=$com_href?>/img/samp02.jpg" oading="lazy">
    </a>
    <div class="table_pos_item">
      <p class="out_time">本日終了
      </p>
    </div>
    <p>12:00-18:00
    <br>名前 / 年齢
    </p>
  </div>
</div>


<?php include $inc_path .'/inc/footer_menu.php';?>
</div>
<!-- content -->
<?php include $inc_path .'/inc/prof_modal.php';?>
</div>
<!-- container -->
<?php include $inc_path .'/inc/footer.php';?>
