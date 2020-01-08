<?php
/* @var $this TableMemberController */
/* @var $model TableMember */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'mb_id'); ?>
		<?php echo $form->textField($model,'mb_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'psn_id'); ?>
		<?php echo $form->textField($model,'psn_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mb_title'); ?>
		<?php echo $form->textField($model,'mb_title',array('size'=>18,'maxlength'=>18)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mb_name'); ?>
		<?php echo $form->textField($model,'mb_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mb_idcard'); ?>
		<?php echo $form->textField($model,'mb_idcard'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mb_mobile'); ?>
		<?php echo $form->textField($model,'mb_mobile',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mb_email'); ?>
		<?php echo $form->textField($model,'mb_email',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pst_id'); ?>
		<?php echo $form->textField($model,'pst_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_date'); ?>
		<?php echo $form->textField($model,'created_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_date'); ?>
		<?php echo $form->textField($model,'update_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_by'); ?>
		<?php echo $form->textField($model,'update_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'active'); ?>
		<?php echo $form->textField($model,'active',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->