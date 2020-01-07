
<head>
  <meta charset="utf-8">
  <title>True Incube</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <?php include Yii::app()->basePath .'/../themes/newdemo/include/inc-css.php'; ?>
</head>
<link href="<?php echo Yii::app()->theme->baseUrl.'/assets/img/favicon.png'?>" rel="icon">
<link href="<?php echo Yii::app()->theme->baseUrl.'/assets/img/apple-touch-icon.png'?>" rel="apple-touch-icon">


<body id="page-top">
  <div id="home" class="intro route bg-image" style="background-image: url(<?php echo Yii::app()->theme->baseUrl.'/assets/img/intro-bg.jpg'?>)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
            <?php echo $content; ?>
      </div>
    </div>
  </div>
  <div id="preloader"></div>
  <?php include Yii::app()->basePath .'/../themes/newdemo/include/inc-js.php'; ?>
</body>
