<?php
$path_theme = Yii::app()->theme->baseUrl."/assets";
$clientScript = Yii::app()->clientScript;
?>

<!-- JavaScript Libraries -->
<!-- $clientScript->registerScriptFile($path_theme.'lib/jquery/jquery.min.js',CClientScript::POS_END); -->

<?php
$clientScript->registerScriptFile($path_theme.'/lib/jquery/jquery.min.js',CClientScript::POS_END);
$clientScript->registerScriptFile($path_theme.'/lib/jquery/jquery-migrate.min.js',CClientScript::POS_END);
$clientScript->registerScriptFile($path_theme.'/lib/popper/popper.min.js',CClientScript::POS_END);
$clientScript->registerScriptFile($path_theme.'/lib/bootstrap/js/bootstrap.min.js',CClientScript::POS_END);
$clientScript->registerScriptFile($path_theme.'/lib/easing/easing.min.js',CClientScript::POS_END);
$clientScript->registerScriptFile($path_theme.'/lib/counterup/jquery.waypoints.min.js',CClientScript::POS_END);
$clientScript->registerScriptFile($path_theme.'/lib/counterup/jquery.counterup.js',CClientScript::POS_END);
$clientScript->registerScriptFile($path_theme.'/lib/owlcarousel/owl.carousel.min.js',CClientScript::POS_END);
$clientScript->registerScriptFile($path_theme.'/lib/lightbox/js/lightbox.min.js',CClientScript::POS_END);
$clientScript->registerScriptFile($path_theme.'/lib/typed/typed.min.js',CClientScript::POS_END);
// <!-- Contact Form JavaScript File -->
$clientScript->registerScriptFile($path_theme.'/contactform/contactform.js',CClientScript::POS_END);

// <!-- Template Main Javascript File -->
$clientScript->registerScriptFile($path_theme.'/js/main.js',CClientScript::POS_END);
 ?>
