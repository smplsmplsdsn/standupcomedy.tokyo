<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>STAND-UP COMEDY スタンダップコメディ</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./assets/css/common.min.css?<?= filemtime('./assets/css/common.min.css') ?>">
</head>
<body>
  <div class="wrapper">
    <?php /*
    <h1 class="header">
      <img src="./assets/images/standupcomedytokyo.svg" alt="STAND-UP COMEDY TOKYO">
    </h1>
    */ ?>
    <ul class="gallery js-gallery"></ul>
  </div>
  <div class="bg">
    <div class="bg-img js-bg-img"></div>
    <div class="bg-dot"></div>
    <div class="bg-date">
      <span class="bg-date-text">2026-03-30</span>
    </div>
  </div>
  <script src="/assets/js/jquery-4.0.0.min.js"></script>
  <script src="/assets/js/common.min.js?<?= filemtime('./assets/js/common.min.js') ?>"></script>
</body>
</html>