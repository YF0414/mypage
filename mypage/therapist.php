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
  <a href="therapist.php" class="mat-button pushpush">セラピスト</a>
  <a href="likeshop.php" class="mat-button">ショップ</a>
  <a href="userprof.php" class="mat-button">ユーザー情報</a>
</div>

<h2 class="member_h22">Myセラピスト</h2>

<div class="tabs">
  <input id="all" type="radio" name="tab_item" checked>
  <label class="tab_item" for="all">お気に入り</label>
  <input id="programming" type="radio" name="tab_item">
  <label class="tab_item" for="programming">訪問済み</label>
  <input id="design" type="radio" name="tab_item">
  <label class="tab_item" for="design">NG</label>
  <div class="tab_content" id="all_content">

    <div class="container_photo">
      <div class="grid-item_photo">
        <a data-micromodal-trigger="remodal_prof_modal">
          <img src="<?=$com_href?>/img/samp01.jpg" loading="lazy">
        </a>
        <p>-
        <br>名前 / 年齢
        </p>
      </div>
      <div class="grid-item_photo">
        <a data-micromodal-trigger="remodal_prof_modal">
          <img src="<?=$com_href?>/img/samp02.jpg" oading="lazy">
        </a>
        <p>13:00-20:00
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
        <p>-
        <br>名前 / 年齢
        </p>
      </div>
      <div class="grid-item_photo">
        <a data-micromodal-trigger="remodal_prof_modal">
          <img src="<?=$com_href?>/img/samp02.jpg" oading="lazy">
        </a>
        <p>13:00-20:00
        <br>名前 / 年齢
        </p>
      </div>
      <div class="grid-item_photo">
        <a data-micromodal-trigger="remodal_prof_modal">
          <img src="<?=$com_href?>/img/samp03.jpg" loading="lazy">
        </a>
        <p>-
        <br>名前 / 年齢
        </p>
      </div>
    </div>

  </div>
  <!-- tab -->
  <div class="tab_content" id="programming_content">

<div class="like_box">

  <div class="like_box_in">
    <div class="profile-header_story hand_push">
      <a data-micromodal-trigger="remodal_prof_modal">
      <img src="<?=$com_href?>/img/samp03.jpg" >
      <div class="profile-info">
      <h2>
        </i>セラピスト名
      </h2>
      <span>21歳 / T155</span>
      </a>
      </div>
    </div>
    <h3 class="shop_modal">
      <span class="stat-count2">
        <i class="fa-solid fa-shop"></i>
      </span>
      <span class="shop_modaltxt">エリア名</span>
      <a href="">店舗名</a>
    </h3>
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
    <div class="profile-header_story hand_push">
      <a data-micromodal-trigger="remodal_prof_modal">
      <img src="<?=$com_href?>/img/samp03.jpg" >
      <div class="profile-info">
      <h2>
        </i>セラピスト名
      </h2>
      <span>21歳 / T155</span>
      </a>
      </div>
    </div>
    <h3 class="shop_modal">
      <span class="stat-count2">
        <i class="fa-solid fa-shop"></i>
      </span>
      <span class="shop_modaltxt">エリア名</span>
      <a href="">店舗名</a>
    </h3>
  <p>3月11日にフリーで訪問。なかなかよかったのでまた行こうと思う。</p>
  <div class="post-buttons2">
    <button class="del_girl" type="button">NGリストへ</button>
    <button class="adit_girl" onclick="f();">編集</button>
  </div>
  <textarea cols="40" rows="10" class="longer" aria-required="true" aria-invalid="false" name="your-message">3月11日にフリーで訪問。なかなかよかったのでまた行こうと思う。</textarea>
  <button class="fish_girl">更新</button>
  <div class="close_like"></div>
  </div>

  <div class="like_box_in">
    <div class="profile-header_story hand_push">
      <a data-micromodal-trigger="remodal_prof_modal">
      <img src="<?=$com_href?>/img/samp03.jpg" >
      <div class="profile-info">
      <h2>
        </i>セラピスト名
      </h2>
      <span>21歳 / T155</span>
      </a>
      </div>
    </div>
    <h3 class="shop_modal">
      <span class="stat-count2">
        <i class="fa-solid fa-shop"></i>
      </span>
      <span class="shop_modaltxt">エリア名</span>
      <a href="">店舗名</a>
    </h3>
  <p>3月11日にフリーで訪問。なかなかよかったのでまた行こうと思う。</p>
  <div class="post-buttons2">
    <button class="del_girl" type="button">NGリストへ</button>
    <button class="adit_girl">編集</button>
  </div>
  <textarea cols="40" rows="10" class="longer" aria-required="true" aria-invalid="false" name="your-message">3月11日にフリーで訪問。なかなかよかったのでまた行こうと思う。</textarea>
  <button class="fish_girl">更新</button>
  <div class="close_like"></div>
  </div>

</div>

</div>
<!-- tab-->
<div class="tab_content" id="design_content">

  <div class="like_box">

    <div class="like_box_in2">
      <div class="profile-header_story hand_push">
        <a data-micromodal-trigger="remodal_prof_modal">
        <img src="<?=$com_href?>/img/samp03.jpg" >
        <div class="profile-info">
        <h2>
          </i>セラピスト名
        </h2>
        <span>21歳 / T155</span>
        </a>
        </div>
      </div>
      <h3 class="shop_modal">
        <span class="stat-count2">
          <i class="fa-solid fa-shop"></i>
        </span>
        <span class="shop_modaltxt">エリア名</span>
        <a href="">店舗名</a>
      </h3>
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
      <div class="profile-header_story hand_push">
        <a data-micromodal-trigger="remodal_prof_modal">
        <img src="<?=$com_href?>/img/samp03.jpg" >
        <div class="profile-info">
        <h2>
          </i>セラピスト名
        </h2>
        <span>21歳 / T155</span>
        </a>
        </div>
      </div>
      <h3 class="shop_modal">
        <span class="stat-count2">
          <i class="fa-solid fa-shop"></i>
        </span>
        <span class="shop_modaltxt">エリア名</span>
        <a href="">店舗名</a>
      </h3>
    <p>二度と行かない</p>
    <div class="post-buttons2">
      <button class="back_girl" type="button">元に戻す</button>
      <button class="adit_girl" onclick="f();">編集</button>
    </div>
    <textarea cols="40" rows="10" class="longer" aria-required="true" aria-invalid="false" name="your-message">二度と行かない</textarea>
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
