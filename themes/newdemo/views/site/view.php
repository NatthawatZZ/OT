<?php
/* @var $this TableMemberController */
/* @var $model TableMember */

$this->breadcrumbs=array(
	'Table Members'=>array('index'),
	$model->mb_id,
);
?>
<?php //include Yii::app()->basePath .'/../themes/newdemo/include/inc-header.php'; ?>
<?php include Yii::app()->basePath . '/../themes/newdemo/include/inc.php'; ?>
<?php include Yii::app()->basePath . '/../themes/newdemo/include/inc-css.php'; ?>

<main id="content" >
	 <div class="container-login100">
		<div class="wrap-login100 p-l-80 p-r-80 p-t-20 p-b-20">

<h1 class="login100-form-title p-b-20">ข้อมูลสมาชิก <br>คุณ <?php echo $model->mb_name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions' => array('class' => 'login100-form '),
	'attributes'=>array(
		'mb_id',
		'psn_id',
		'mb_title',
		'mb_name',
		'mb_idcard',
		'mb_mobile',
		'mb_email',
		'pst_id',
		'created_date',
		'created_by',
		'update_date',
		'update_by',
		'active',
	)
));
?>
			</div>
		</div>
</main>
