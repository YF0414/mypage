<footer class="fixed-menu">
  <ul class="menu-list">
    <li>
      <a href="/">
        <i class="fa-solid fa-house"></i>
      </a>
    </li>
    <li>
      <a href="https://sample.serapigram.com<?php echo $_SERVER["REQUEST_URI"]; ?>">
        <i class="fa-solid fa-rotate-right"></i>
      </a>
    </li>
    <li>
      <a class="page-top" id="js-button">
        <i class="fa-solid fa-up"></i>
      </a>
    </li>
    <li>
      <a data-micromodal-trigger="remodal_member_modal">
        <i class="fa-solid fa-user"></i>
      </a>
    </li>
  </ul>
</footer>

<div id="remodal_member_modal" class="modal micromodal-slide" aria-hidden="true">
<div class="overlay" tabindex="-1" data-micromodal-close>
<div class="modal-container_prof" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
<div class="close_prof">
<button class="modal-close" aria-label="Close modal" data-micromodal-close></button>
</div>
<div class="modal__content_prof menu_cont">

  <h2 class="member_h2">Member Login</h2>

  <div class="form_cont plus">

    <form class="register-form"> <input type="text" placeholder="メールアドレス" /> <button>再発行</button>
      <p class="message">ログインしますか？ <a href="#">ログイン画面</a></p>
    </form>
    <form class="login-form"> <input type="text" placeholder="メールアドレス" /> <input type="password" placeholder="パスワード" /> <button>ログイン</button>
      <p class="message">パスワードをお忘れですか？ <a href="#">再発行</a></p>
      <p style="margin-top:20px; font-size:15px;"><a href="reissue.php">再発行ページサンプルはコチラをクリック</a></p>
    </form>
    <a href="create.php" class="fanform_cont_bt">アカウント登録（無料）</a>
    <a href="/mypage" class="fanform_cont_bt">ログインしている場合</a>

  </div>

</div>
</div>
</div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/c9e6893f52.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/micromodal/dist/micromodal.min.js"></script>
<script>function redirectTo(o){window.location.href=o}</script>
<script>
MicroModal.init({
  disableScroll: true,
  awaitOpenAnimation: true,
});
</script>
<script>scrollTop('js-button', 300);

function scrollTop(elem,duration) {
  let target = document.getElementById(elem);
  target.addEventListener('click', function() {
    let currentY = window.pageYOffset;
    let step = duration/currentY > 1 ? 10 : 100;
    let timeStep = duration/currentY * step;
    let intervalID = setInterval(scrollUp, timeStep);

    function scrollUp(){
      currentY = window.pageYOffset;
      if(currentY === 0) {
          clearInterval(intervalID);
      } else {
          scrollBy( 0, -step );
      }
    }
  });
}</script>
<script>
  $('.message a').click(function(){
     $('form').animate({height: "toggle", opacity: "toggle"}, "400");
  });
</script>
</body>
</html>
