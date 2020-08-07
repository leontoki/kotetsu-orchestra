<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>管弦楽団虎鉄</title>
  <?php wp_head(); ?>
</head>

<body>
  <div class="body-wrapper">

    <header>
      <div class="orche-name-box">
        <h1 class="orche-name">管弦楽団虎鉄</h1>
      </div>

      <nav class="nav-box">
        <ul>
          <li><a href="<?php echo esc_url(home_url()); ?>">HOME</a></li>
          <li><a href="<?php echo esc_url(home_url('/kotei1')); ?>">活動方針</a></li>
          <li><a href="<?php echo esc_url(home_url('/mail')); ?>">お問い合わせ</a></li>
        </ul>
      </nav>
    </header>