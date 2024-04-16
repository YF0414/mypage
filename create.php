<?php
include 'define.php';
?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<meta name="description" content="" >
<meta name='robots' content='max-image-preview:large' />
<link rel="canonical" href="">
<meta property="og:url" content="">
<meta property="og:type" content="article">
<meta property="og:title" content="">
<meta property="og:description" content="">
<meta property="og:site_name" content="">
<meta property="og:image" content="">
<meta name="twitter:card" content="" />
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
  <div class="content">
    <?php include $inc_path .'/inc/header.php';?>

    <div class="form_cont mainasu">

<h1 class="big_h1"><i class="fa-solid fa-user"></i> 会員新規登録 <i class="fa-solid fa-user"></i></h1>

<h2 class="gradient_h2">当サービスについて</h2>

<p class="caria_message">オイルマフィア会員サービスは完全無料！セラピスト探しがとっても便利になるサービスが満載！お気に入り機能、訪問済みセラピスト一覧はメモ機能も搭載！過去に利用したお店、セラピストも漏れなく管理できます。まだ会員登録がお済でない方は是非ご登録下さいませ。登録は1分で終わります。</p>

<h2 class="gradient_h2">登録フロー</h2>

<p class="attend_message">登録ボタンを押したあとに、ご登録のメールアドレスへ承認メッセージが届きます。そちらに記載されているURLをクリックして頂き登録完了となります。</p>
<p class="caria_message">※携帯のメールアドレスの場合、ドメイン指定受信されている方は 【oil-mafia.net】をご指定下さい。</p>

<form class="register-form">
  <input type="text" placeholder="メールアドレス" />
  <input type="password" placeholder="パスワード" />
  <button>ログイン</button>
</form>
<form class="login-form">
  <h3 class="sub_page">ユーザー情報</h3>
  <input type="text" placeholder="メールアドレス" />
  <input type="text" placeholder="ニックネーム" />
  <h3 class="sub_page">利用するメインエリア</h3>
  <div class="prof-select">
    <select class="prof-style" name="age">
    <option value="">---</option>
    <option value="18">札幌</option>
    <option value="19">東京</option>
    <option value="20">横浜</option>
    <option value="21">名古屋</option>
    <option value="22">大阪</option>
    <option value="23">神戸</option>
    <option value="24">京都</option>
    <option value="25">広島</option>
    <option value="26">福岡</option>
    </select>
  </div>
<h3 class="sub_page">パスワード</h3>
  <input type="password" placeholder="パスワード" />
  <input type="password" placeholder="パスワード再確認" />
  </form>
  <div class="box-004">
   <p>8桁以上の半角英数字でご設定ください</p>
 </div>

<div class="poricy_message">
  <p>オイルマフィア運営事務局（以下、弊社という）個人情報保護法その他の法令を誠実に遵守し、オイルマフィア（以下、本サービスという）のご利用時にご提供頂いた個人情報について次の通り管理しております。個人情報とは、ユーザー個人に関する情報であって、その情報を構成する氏名、住所、電話番号、メールアドレス、生年月日、その他の記述等によりユーザー個人を識別できるものを指します。</p>

  <h3 class="sub_page"><i class="fa-shield-check fa-solid"></i>1.情報の取得</h3>

  <p>本サービスでは、一部のコンテンツについて、ユーザー名やメールアドレスなどをご登録いただく場合があります。<br>
  これらの情報は、サービスご利用時に、ご利用者の確認・照会のために使用され、特定した利用目的の達成に必要な範囲を超えて個人情報を取り扱うことはありません。利用目的を超えて個人情報の取り扱いを行う場合には、あらかじめご本人の同意を得ます。</p>

  <h3 class="sub_page"><i class="fa-shield-check fa-solid"></i>2.個人情報収集の利用目的について</h3>

  <p>本サービスにおける個人情報の利用目的は、次の通りです。以下の範囲を越えた利用は致しません。<br>
  ユーザーの承諾に基づく、掲載店舗への情報開示・提供<br>
  ユーザーへのサービスの提供と、会員サービス利用時の個人認証<br>
  ユーザーの承諾に基づく、各種情報の配信<br>
  ユーザーの問い合わせに対する回答</p>

  <h3 class="sub_page"><i class="fa-shield-check fa-solid"></i>3.個人情報の管理</h3>

  <p>弊社はお客様の個人情報を不正アクセス・改変・破壊・漏洩・紛失から守るため、責任をもって安全に保管管理し、裁判所・警察機関等からの提出要請があった場合以外、第三者に譲渡またはこれを利用する事は一切ございません。</p>

  <h3 class="sub_page"><i class="fa-shield-check fa-solid"></i>4.クッキー及びIPアドレス</h3>

  <p>本サービスでは、一部のコンテンツについて、情報の収集にクッキーを使用しています。クッキーは、ユーザーがサイトを訪れた際に、そのユーザーのコンピュータ内に記録されます。<br>
  ただし、記録される情報には、ユーザー名やメールアドレスなど、個人を特定するものは一切含まれません。<br>
  IPアドレスとは、インターネットを利用するユーザーのパソコンを特定するために割り振られる数字で、ユーザーのパソコンから自動的にウェブサイトに送信されます。弊社では統計データやウェブサイトの利用状況を調査するためにIPアドレスを取得しますが、ユーザーを特定するデータとは結びつけて利用することはありません。ただし、ユーザーによる弊社への侵害行為がなされたと判断した場合には、IPアドレスにより個人を特定して対策を実施することがあります。</p>

  <h3 class="sub_page"><i class="fa-shield-check fa-solid"></i>5. コミュニティにおける注意事項</h3>

  <p>弊社ではユーザーの皆さまによって登録された個人情報の保護に細心の注意を払っています。<br>
  ただし、twitterをはじめとするコミュニティなど、ほかのユーザーが閲覧できるサービス上にユーザー本人が自発的に個人情報を登録された場合、意図しない利用がなされる可能性があることに十分ご留意ください。<br>
  このように弊社が用意した個人情報の登録箇所以外の場所において登録された情報は個人情報の保護の対象外となりユーザーご自身の責任となりますので、あらかじめご了承ください。</p>
</div>


<div class="box9">
<p>利用規約、個人情報の取り扱いについてを確認し、
同意のうえでご登録をお願いいたします。</p>
</div>

  <button>登録</button>
  <p style="margin-top:20px; font-size:18px;"><a href="thanx.php">thanxページサンプルはコチラをクリック</a></p>
</form>
</div>


    <?php include $inc_path .'/inc/footer_menu.php';?>
  </div>
  <!-- content -->
  <?php include $inc_path .'/inc/prof_modal.php';?>
</div>
<!-- container -->
<?php include $inc_path .'/inc/footer.php';?>
