<?php
$path_theme = Yii::app()->theme->baseUrl."/login";
$clientScript = Yii::app()->clientScript;

								
$clientScript->registerCssFile($path_theme.'/vendor/bootstrap/css/bootstrap.min.css');
$clientScript->registerCssFile($path_theme.'/fonts/font-awesome-4.7.0/css/font-awesome.min.css');
$clientScript->registerCssFile($path_theme.'/fonts/Linearicons-Free-v1.0.0/icon-font.min.css');
$clientScript->registerCssFile($path_theme.'/vendor/animate/animate.css');
$clientScript->registerCssFile($path_theme.'/vendor/css-hamburgers/hamburgers.min.css');
$clientScript->registerCssFile($path_theme.'/vendor/animsition/css/animsition.min.css');
$clientScript->registerCssFile($path_theme.'/vendor/select2/select2.min.css');
$clientScript->registerCssFile($path_theme.'/vendor/daterangepicker/daterangepicker.css');
$clientScript->registerCssFile($path_theme.'/css/util.css');
$clientScript->registerCssFile($path_theme.'/css/main.css');

$clientScript->registerScriptFile($path_theme.'/vendor/jquery/jquery-3.2.1.min.js',CClientScript::POS_END);

$clientScript->registerScriptFile($path_theme.'/vendor/animsition/js/animsition.min.js',CClientScript::POS_END);

$clientScript->registerScriptFile($path_theme.'/vendor/bootstrap/js/popper.js',CClientScript::POS_END);
$clientScript->registerScriptFile($path_theme.'/vendor/bootstrap/js/bootstrap.min.js',CClientScript::POS_END);

$clientScript->registerScriptFile($path_theme.'/vendor/select2/select2.min.js',CClientScript::POS_END);

$clientScript->registerScriptFile($path_theme.'/vendor/daterangepicker/moment.min.js',CClientScript::POS_END);
$clientScript->registerScriptFile($path_theme.'/vendor/daterangepicker/daterangepicker.js',CClientScript::POS_END);

$clientScript->registerScriptFile($path_theme.'/vendor/countdowntime/countdowntime.js',CClientScript::POS_END);

$clientScript->registerScriptFile($path_theme.'/js/main.js',CClientScript::POS_END);

?>
