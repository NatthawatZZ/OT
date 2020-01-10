
<?php
$path_theme = Yii::app()->theme->baseUrl."/inc";
$clientScript = Yii::app()->clientScript;
?>
<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/sweetalert2.min.css">
<?php
  $clientScript->registerCssFile($path_theme.'/css/signup.css');
  $clientScript->registerCssFile($path_theme.'/css/login.css');
  $clientScript->registerCssFile($path_theme.'/css/bootstrap-grid.css');
  $clientScript->registerCssFile($path_theme.'/css/bootstrap.css');
  $clientScript->registerCssFile($path_theme.'/css/bootstrap.min.css');
  $clientScript->registerCssFile($path_theme.'/css/bootstrap-grid.min.css');


 ?>
