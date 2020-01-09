
<?php
$path_theme = Yii::app()->theme->baseUrl."/inc";
$clientScript = Yii::app()->clientScript;
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<?php
  $clientScript->registerCssFile($path_theme.'/css/signup.css');
 ?>
