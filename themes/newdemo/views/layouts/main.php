<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BWS</title>
  <?php include Yii::app()->basePath .'/../themes/newdemo/inc/inc-css.php'; ?>
  <?php include Yii::app()->basePath .'/../themes/newdemo/include/inc-css.php'; ?>
  <?php include Yii::app()->basePath .'/../themes/newdemo/inc/inc-js.php'; ?>
</head>

<body>
  <body id="page-top">
    <div id="home" class="intro route bg-image"style="background-image: url(#fff)">
    <br><br><center><img src="<?php echo Yii::app()->theme->baseUrl.'/inc/image/logo1.png'?>" width="270" height="78"></center>
      <div class="intro-content display-table">
        <div class="table-cell">
              <?php echo $content; ?>
        </div>
      </div>
    </div>
    <div id="preloader"></div>
    <?php include Yii::app()->basePath .'/../themes/newdemo/include/inc-js.php'; ?>
  </body>
