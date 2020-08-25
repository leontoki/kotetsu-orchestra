<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>管弦楽団虎鉄</title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="body-wrapper">

<header>
  <nav class="nav__box">
    <ul>
      <li><a href="<?php echo esc_url(home_url()); ?>">トップページ</a></li>
      <li><a href="<?php echo esc_url(home_url('/vision')); ?>">活動方針</a></li>
      <li><a href="<?php echo esc_url(home_url('/member')); ?>">団員紹介</a></li>
      <li><a href="<?php echo esc_url(home_url('/past')); ?>">これまでの演奏会</a></li>
      <li><a href="<?php echo esc_url(home_url('/mail')); ?>">お問い合わせ</a></li>
      <li><a href="<?php echo esc_url(home_url('/writing')); ?>">掲示板</a></li>
    </ul>
  </nav>

<!-- ハンバーガーメニュー -->
  <!-- <nav class="menu hidden" id="nav_drawer">
  <i class="fas fa-bars" id="btn"></i>
    <div id="nav_content">
      <div class="side_wrapper">
        <div class="side_top">
        </div>
        <ul class="hover_blue">
          <i class="fas fa-times" id="close"></i>
          <li><a href="<?php echo esc_url(home_url()); ?>">トップページ</a></li>
          <li><a href="<?php echo esc_url(home_url('/vision')); ?>">活動方針</a></li>
          <li><a href="<?php echo esc_url(home_url('/member')); ?>">団員紹介</a></li>
          <li><a href="<?php echo esc_url(home_url('/past')); ?>">これまでの演奏会</a></li>
          <li><a href="<?php echo esc_url(home_url('/mail')); ?>">お問い合わせ</a></li>
          <li><a href="<?php echo esc_url(home_url('/writing')); ?>">掲示板</a></li>
        </ul>
      </div>
    </div>
  </nav> -->


  <div class="bread">
  <!-- トップページ以外にパンくずリスト表示 -->
  <?php if ( !is_home() && !is_front_page() ) : ?>
    <?php
    if(function_exists('bcn_display')){
      bcn_display();
    }
    ?>
  <?php endif; ?>
  </div>

</header>