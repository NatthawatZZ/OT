<?php
$path_theme = Yii::app()->theme->baseUrl."/assets";
$clientScript = Yii::app()->clientScript;
 ?>
 <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<?php

$clientScript->registerCssFile($path_theme.'/content/vendor/mdi-font/css/material-design-iconic-font.min.css');
$clientScript->registerCssFile($path_theme.'/content/vendor/font-awesome-4.7/css/font-awesome.min.css');
$clientScript->registerCssFile($path_theme.'/content/vendor/select2/select2.min.css');
$clientScript->registerCssFile($path_theme.'/content/vendor/datepicker/daterangepicker.css');
$clientScript->registerCssFile($path_theme.'/content/css/main.css');


$clientScript->registerScriptFile($path_theme.'/content/vendor/jquery/jquery.min.js',CClientScript::POS_END);
$clientScript->registerScriptFile($path_theme.'/content/vendor/select2/select2.min.js',CClientScript::POS_END);
$clientScript->registerScriptFile($path_theme.'/content/vendor/datepicker/moment.min.js',CClientScript::POS_END);
$clientScript->registerScriptFile($path_theme.'/content/vendor/datepicker/daterangepicker.js',CClientScript::POS_END);


$clientScript->registerScriptFile($path_theme.'/content/js/global.js',CClientScript::POS_END);
?>
