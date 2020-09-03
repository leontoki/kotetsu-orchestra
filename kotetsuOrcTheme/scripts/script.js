jQuery(function ($) {

  // メニューホバー時の処理
  $('.nav__menu').hover(
    function () {
      $(this).css(
        "background", "#f6f6f6"
      )
      $(this).css(
        "color", "#5c330a"
      )
    }, function () {
      $(this).css(
        "background", "none")
      $(this).css(
        "color", "azure")
    }
  );

  // 画像等のフェードイン実装
  $('#title').fadeIn(1500);
  $('#nav__box').fadeIn(2500);
  $('img').fadeIn(3000);

});



