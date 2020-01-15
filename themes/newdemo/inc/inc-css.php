
<?php
$path_theme = Yii::app()->theme->baseUrl."/inc";
$clientScript = Yii::app()->clientScript;
?>
<?php
  $clientScript->registerCssFile($path_theme.'/css/signup.css');
  $clientScript->registerCssFile($path_theme.'/css/login.css');
  $clientScript->registerCssFile($path_theme.'/css/bootstrap-grid.css');
  $clientScript->registerCssFile($path_theme.'/css/bootstrap.css');
  $clientScript->registerCssFile($path_theme.'/css/bootstrap.min.css');
  $clientScript->registerCssFile($path_theme.'/css/bootstrap-grid.min.css');
 ?>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns"
       crossorigin="anonymous">
