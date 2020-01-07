<!-- Favicons -->
<?php
$path_theme = Yii::app()->theme->baseUrl."/demo";
$clientScript = Yii::app()->clientScript;
 ?>

<?php
// <!-- Bootstrap CSS File -->
$clientScript->registerCssFile($path_theme.'lib/bootstrap/css/bootstrap.min.css');

// <!-- Libraries CSS Files -->
$clientScript->registerCssFile($path_theme.'lib/font-awesome/css/font-awesome.min.css');
$clientScript->registerCssFile($path_theme.'lib/animate/animate.min.css');
$clientScript->registerCssFile($path_theme.'lib/ionicons/css/ionicons.min.css');
$clientScript->registerCssFile($path_theme.'lib/owlcarousel/assets/owl.carousel.min.css');
$clientScript->registerCssFile($path_theme.'lib/lightbox/css/lightbox.min.css');

// <!-- Main Stylesheet File -->
$clientScript->registerCssFile($path_theme.'css/style.css');
?>
<?php
$clientScript->registerScriptFile($path_theme.'lib/jquery/jquery.min.js',CClientScript::POS_END);
$clientScript->registerScriptFile($path_theme.'lib/jquery/jquery-migrate.min.js',CClientScript::POS_END);
$clientScript->registerScriptFile($path_theme.'lib/popper/popper.min.js',CClientScript::POS_END);
$clientScript->registerScriptFile($path_theme.'lib/bootstrap/js/bootstrap.min.js',CClientScript::POS_END);
$clientScript->registerScriptFile($path_theme.'lib/easing/easing.min.js',CClientScript::POS_END);
$clientScript->registerScriptFile($path_theme.'lib/counterup/jquery.waypoints.min.js',CClientScript::POS_END);
$clientScript->registerScriptFile($path_theme.'lib/counterup/jquery.counterup.js',CClientScript::POS_END);
$clientScript->registerScriptFile($path_theme.'lib/owlcarousel/owl.carousel.min.js',CClientScript::POS_END);
$clientScript->registerScriptFile($path_theme.'lib/lightbox/js/lightbox.min.js',CClientScript::POS_END);
$clientScript->registerScriptFile($path_theme.'lib/typed/typed.min.js',CClientScript::POS_END);
// <!-- Contact Form JavaScript File -->
$clientScript->registerScriptFile($path_theme.'contactform/contactform.js',CClientScript::POS_END);

// <!-- Template Main Javascript File -->
$clientScript->registerScriptFile($path_theme.'js/main.js',CClientScript::POS_END);

 ?>
