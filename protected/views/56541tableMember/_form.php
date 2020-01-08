<?php
/* @var $this TableMemberController */
/* @var $model TableMember */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'table-member-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

<?php  $nav1=""; ?>
<?php  $nav2=""; ?>
<?php  $nav3=""; ?>
<?php include Yii::app()->basePath .'/../themes/newdemo/include/inc-header.php'; ?>
<?php include Yii::app()->basePath . '/../themes/newdemo/include/inc.php'; ?>
<?php include Yii::app()->basePath . '/../themes/newdemo/include/inc-css.php'; ?>
<link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
    <style >
      ::placeholder{
        opacity: 50%;
       }
    </style>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

			<?php echo $form->errorSummary($model); ?>

			<div class="row">
				<?php echo $form->labelEx($model,'psn_id'); ?>
				<?php echo $form->textField($model,'psn_id'); ?>
				<?php echo $form->error($model,'psn_id'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'mb_title'); ?>
				<?php echo $form->textField($model,'mb_title',array('size'=>18,'maxlength'=>18)); ?>
				<?php echo $form->error($model,'mb_title'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'mb_name'); ?>
				<?php echo $form->textField($model,'mb_name',array('size'=>60,'maxlength'=>255)); ?>
				<?php echo $form->error($model,'mb_name'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'mb_idcard'); ?>
				<?php echo $form->textField($model,'mb_idcard'); ?>
				<?php echo $form->error($model,'mb_idcard'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'mb_mobile'); ?>
				<?php echo $form->textField($model,'mb_mobile',array('size'=>12,'maxlength'=>12)); ?>
				<?php echo $form->error($model,'mb_mobile'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'mb_email'); ?>
				<?php echo $form->textField($model,'mb_email',array('size'=>60,'maxlength'=>255)); ?>
				<?php echo $form->error($model,'mb_email'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'pst_id'); ?>
				<?php echo $form->textField($model,'pst_id'); ?>
				<?php echo $form->error($model,'pst_id'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'created_date'); ?>
				<?php echo $form->textField($model,'created_date'); ?>
				<?php echo $form->error($model,'created_date'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'created_by'); ?>
				<?php echo $form->textField($model,'created_by'); ?>
				<?php echo $form->error($model,'created_by'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'update_date'); ?>
				<?php echo $form->textField($model,'update_date'); ?>
				<?php echo $form->error($model,'update_date'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'update_by'); ?>
				<?php echo $form->textField($model,'update_by'); ?>
				<?php echo $form->error($model,'update_by'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'active'); ?>
				<?php echo $form->textField($model,'active',array('size'=>1,'maxlength'=>1)); ?>
				<?php echo $form->error($model,'active'); ?>
			</div>

			<div class="row buttons">
				<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
			</div>

		<?php $this->endWidget(); ?>

		</div><!-- form -->
