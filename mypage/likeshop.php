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
  <a href="likeshop.php" class="mat-button pushpush">ショップ</a>
  <a href="userprof.php" class="mat-button">ユーザー情報</a>
</div>

<h2 class="member_h22">Myショップ</h2>

<div class="tabs">
  <input id="all" type="radio" name="tab_item" checked>
  <label class="tab_item" for="all">お気に入り</label>
  <input id="programming" type="radio" name="tab_item">
  <label class="tab_item" for="programming">訪問済み</label>
  <input id="design" type="radio" name="tab_item">
  <label class="tab_item" for="design">NG</label>
  <div class="tab_content" id="all_content">

    <ul class="talk-list_search">
    <li class="talk-item">
      <div class="talk-avatar_story">
        <a href="shop.php">
          <img src="<?=$com_href?>/img/8993466.jpg" loading="lazy">
        </a>
      </div>
      <div class="talk-details">
        <h3 class="talk-name">
          <a href="shop.php">店舗名</a>
        </h3>
        <p class="talk-last-message">エリア名
        </p>
        <span class="talk-timestamp">最終更新時間:20:48 </span>
      </div>
    </li>
    <li class="talk-item">
      <div class="talk-avatar_story">
        <a href="shop.php">
          <img src="<?=$com_href?>/img/8993466.jpg" loading="lazy">
        </a>
      </div>
      <div class="talk-details">
        <h3 class="talk-name">
          <a href="shop.php">店舗名</a>
        </h3>
        <p class="talk-last-message">エリア名
        </p>
        <span class="talk-timestamp">最終更新時間:20:48 </span>
      </div>
    </li>
    <li class="talk-item">
      <div class="talk-avatar_story">
        <a href="shop.php">
          <img src="<?=$com_href?>/img/8993466.jpg" loading="lazy">
        </a>
      </div>
      <div class="talk-details">
        <h3 class="talk-name">
          <a href="shop.php">店舗名</a>
        </h3>
        <p class="talk-last-message">エリア名
        </p>
        <span class="talk-timestamp">最終更新時間:20:48 </span>
      </div>
    </li>
    <li class="talk-item">
      <div class="talk-avatar_story">
        <a href="shop.php">
          <img src="<?=$com_href?>/img/8993466.jpg" loading="lazy">
        </a>
      </div>
      <div class="talk-details">
        <h3 class="talk-name">
          <a href="shop.php">店舗名</a>
        </h3>
        <p class="talk-last-message">エリア名
        </p>
        <span class="talk-timestamp">最終更新時間:20:48 </span>
      </div>
    </li>
    <li class="talk-item">
      <div class="talk-avatar_story">
        <a href="shop.php">
          <img src="<?=$com_href?>/img/8993466.jpg" loading="lazy">
        </a>
      </div>
      <div class="talk-details">
        <h3 class="talk-name">
          <a href="shop.php">店舗名</a>
        </h3>
        <p class="talk-last-message">エリア名
        </p>
        <span class="talk-timestamp">最終更新時間:20:48 </span>
      </div>
    </li>
    <li class="talk-item">
      <div class="talk-avatar_story">
        <a href="shop.php">
          <img src="<?=$com_href?>/img/8993466.jpg" loading="lazy">
        </a>
      </div>
      <div class="talk-details">
        <h3 class="talk-name">
          <a href="shop.php">店舗名</a>
        </h3>
        <p class="talk-last-message">エリア名
        </p>
        <span class="talk-timestamp">最終更新時間:20:48 </span>
      </div>
    </li>
    <li class="talk-item">
      <div class="talk-avatar_story">
        <a href="shop.php">
          <img src="<?=$com_href?>/img/8993466.jpg" loading="lazy">
        </a>
      </div>
      <div class="talk-details">
        <h3 class="talk-name">
          <a href="shop.php">店舗名</a>
        </h3>
        <p class="talk-last-message">エリア名
        </p>
        <span class="talk-timestamp">最終更新時間:20:48 </span>
      </div>
    </li>
    <li class="talk-item">
      <div class="talk-avatar_story">
        <a href="shop.php">
          <img src="<?=$com_href?>/img/8993466.jpg" loading="lazy">
        </a>
      </div>
      <div class="talk-details">
        <h3 class="talk-name">
          <a href="shop.php">店舗名</a>
        </h3>
        <p class="talk-last-message">エリア名
        </p>
        <span class="talk-timestamp">最終更新時間:20:48 </span>
      </div>
    </li>
    <li class="talk-item">
      <div class="talk-avatar_story">
        <a href="shop.php">
          <img src="<?=$com_href?>/img/8993466.jpg" loading="lazy">
        </a>
      </div>
      <div class="talk-details">
        <h3 class="talk-name">
          <a href="shop.php">店舗名</a>
        </h3>
        <p class="talk-last-message">エリア名
        </p>
        <span class="talk-timestamp">最終更新時間:20:48 </span>
      </div>
    </li>
    <!-- 他のトークの項目も同様に追加する -->
    </ul>

  </div>
  <!-- tab -->
  <div class="tab_content" id="programming_content">

    <div class="like_box">

<div class="like_box_in">
<div class="profile-header_story">
    <a href=""><img class="" alt="Story" src="https://oil-mafia.net/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBSdz09IiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--6cbeaf9e8c18b75d86bcaeac03e38f1fb8e08082/cullinan.png" /></a>
  <div class="profile-info">
    <h2><a href=""><i class="fa-solid fa-shield-heart"></i>CULLINAN</a></h2>
    <span>堺筋本町</span>
  </div>
</div>
<ul class="profile-stats">
  <li>
    <span class="stat-count">
      <i class="fa-solid fa-sack-dollar"></i>
    </span>
    <span class="stat-label">90分12,000円〜</span>
  </li>
  <li v-if="shop.shop_type==='room'">
    <span class="stat-count">
      <i class="fa-light fa-house-building"></i>
    </span>
    <span class="stat-label">ROOM型</span>
  </li>
</ul>
      <p></p>
      <div class="post-buttons2">
        <button class="del_girl" type="button">NGリストへ</button>
        <button class="adit_girl">編集</button>
      </div>
      <textarea cols="40" rows="10" class="longer" aria-required="true" aria-invalid="false" name="your-message"></textarea>
      <button class="fish_girl">更新</button>
      <div class="close_like"></div>
      </div>

      <div class="like_box_in">
      <div class="profile-header_story">
          <a href=""><img class="" alt="Story" src="https://oil-mafia.net/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBSdz09IiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--6cbeaf9e8c18b75d86bcaeac03e38f1fb8e08082/cullinan.png" /></a>
        <div class="profile-info">
          <h2><a href=""><i class="fa-solid fa-shield-heart"></i>CULLINAN</a></h2>
          <span>堺筋本町</span>
        </div>
      </div>
      <ul class="profile-stats">
        <li>
          <span class="stat-count">
            <i class="fa-solid fa-sack-dollar"></i>
          </span>
          <span class="stat-label">90分12,000円〜</span>
        </li>
        <li v-if="shop.shop_type==='room'">
          <span class="stat-count">
            <i class="fa-light fa-house-building"></i>
          </span>
          <span class="stat-label">ROOM型</span>
        </li>
      </ul>
      <p>電話対応も良くて部屋もきれいだった。セラピストもなかなかのもの。</p>
      <div class="post-buttons2">
        <button class="del_girl" type="button">NGリストへ</button>
        <button class="adit_girl">編集</button>
      </div>
      <textarea cols="40" rows="10" class="longer" aria-required="true" aria-invalid="false" name="your-message">電話対応も良くて部屋もきれいだった。セラピストもなかなかのもの。</textarea>
      <button class="fish_girl">更新</button>
      <div class="close_like"></div>
      </div>

    </div>

  </div>
<!-- tab-->
<div class="tab_content" id="design_content">

<div class="like_box">

<div class="like_box_in2">
<div class="profile-header_story">
    <a href=""><img class="" alt="Story" src="https://oil-mafia.net/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBSdz09IiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--6cbeaf9e8c18b75d86bcaeac03e38f1fb8e08082/cullinan.png" /></a>
  <div class="profile-info">
    <h2><a href=""><i class="fa-solid fa-shield-heart"></i>CULLINAN</a></h2>
    <span>堺筋本町</span>
  </div>
</div>
<ul class="profile-stats">
  <li>
    <span class="stat-count">
      <i class="fa-solid fa-sack-dollar"></i>
    </span>
    <span class="stat-label">90分12,000円〜</span>
  </li>
  <li v-if="shop.shop_type==='room'">
    <span class="stat-count">
      <i class="fa-light fa-house-building"></i>
    </span>
    <span class="stat-label">ROOM型</span>
  </li>
</ul>
      <p></p>
      <div class="post-buttons2">
        <button class="back_girl" type="button">元に戻す</button>
        <button class="adit_girl">編集</button>
      </div>
      <textarea cols="40" rows="10" class="longer" aria-required="true" aria-invalid="false" name="your-message"></textarea>
      <button class="fish_girl">更新</button>
      <div class="close_like"></div>
      </div>

      <div class="like_box_in2">
      <div class="profile-header_story">
          <a href=""><img class="" alt="Story" src="https://oil-mafia.net/rails/active_storage/blobs/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBSdz09IiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--6cbeaf9e8c18b75d86bcaeac03e38f1fb8e08082/cullinan.png" /></a>
        <div class="profile-info">
          <h2><a href=""><i class="fa-solid fa-shield-heart"></i>CULLINAN</a></h2>
          <span>堺筋本町</span>
        </div>
      </div>
      <ul class="profile-stats">
        <li>
          <span class="stat-count">
            <i class="fa-solid fa-sack-dollar"></i>
          </span>
          <span class="stat-label">90分12,000円〜</span>
        </li>
        <li v-if="shop.shop_type==='room'">
          <span class="stat-count">
            <i class="fa-light fa-house-building"></i>
          </span>
          <span class="stat-label">ROOM型</span>
        </li>
      </ul>
      <p>二度と行くもんか。部屋も汚い。セラピスト小錦。時短。いい所がなかった気がする。</p>
      <div class="post-buttons2">
        <button class="back_girl" type="button">元に戻す</button>
        <button class="adit_girl">編集</button>
      </div>
      <textarea cols="40" rows="10" class="longer" aria-required="true" aria-invalid="false" name="your-message">二度と行くもんか。部屋も汚い。セラピスト小錦。時短。いい所がなかった気がする。</textarea>
      <button class="fish_girl">更新</button>
      <div class="close_like"></div>
      </div>

    </div>

  </div>
  <!-- tab-->
</div>
<!-- tabs -->


<?php include $inc_path .'/inc/footer_menu.php';?>
</div>
<!-- content -->
<?php include $inc_path .'/inc/prof_modal.php';?>
</div>
<!-- container -->
<?php include $inc_path .'/inc/footer.php';?>
