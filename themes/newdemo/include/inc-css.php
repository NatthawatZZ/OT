<?php
$path_theme = Yii::app()->theme->baseUrl."/assets";
$clientScript = Yii::app()->clientScript;
?>

<?php
// <!-- Bootstrap CSS File -->
$clientScript->registerCssFile($path_theme.'/lib/bootstrap/css/bootstrap.min.css');

// <!-- Libraries CSS Files -->
$clientScript->registerCssFile($path_theme.'/lib/font-awesome/css/font-awesome.min.css');
$clientScript->registerCssFile($path_theme.'/lib/animate/animate.min.css');
$clientScript->registerCssFile($path_theme.'/lib/ionicons/css/ionicons.min.css');
$clientScript->registerCssFile($path_theme.'/lib/owlcarousel/assets/owl.carousel.min.css');
$clientScript->registerCssFile($path_theme.'/lib/lightbox/css/lightbox.min.css');

// <!-- Main Stylesheet File -->
$clientScript->registerCssFile($path_theme.'/css/style.css');
?>
