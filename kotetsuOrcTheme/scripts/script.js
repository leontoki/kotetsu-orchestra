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

  $('img').fadeIn(1500);
  $('#title').fadeIn(2500);


});



