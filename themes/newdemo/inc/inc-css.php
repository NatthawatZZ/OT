
<?php
$path_theme = Yii::app()->theme->baseUrl."/inc";
$clientScript = Yii::app()->clientScript;
?>
<?php
  $clientScript->registerCssFile($path_theme.'/css/signup.css');
  $clientScript->registerCssFile($path_theme.'/css/login.css');
  $clientScript->registerCssFile($path_theme.'/css/bootstrap.min.css');
  $clientScript->registerCssFile($path_theme.'/css/bootstrap.css');
 ?>
