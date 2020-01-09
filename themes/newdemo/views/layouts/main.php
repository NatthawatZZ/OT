
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BWS</title>

  <?php include Yii::app()->basePath .'/../themes/newdemo/inc/inc-css.php'; ?>
  <?php include Yii::app()->basePath .'/../themes/newdemo/inc/inc-js.php'; ?>

</head>
<body><br><br>
  <center><img src="<?php echo Yii::app()->theme->baseUrl.'/inc/image/logo1.png'?>" width="270" height="78"></center>
    <main id="content" >
      <?php echo $content; ?>
    </main>



</body>
