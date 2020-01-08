<?php
/* @var $this TableMemberController */
/* @var $data TableMember */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('mb_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->mb_id), array('view', 'id'=>$data->mb_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('psn_id')); ?>:</b>
	<?php echo CHtml::encode($data->psn_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mb_title')); ?>:</b>
	<?php echo CHtml::encode($data->mb_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mb_name')); ?>:</b>
	<?php echo CHtml::encode($data->mb_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mb_idcard')); ?>:</b>
	<?php echo CHtml::encode($data->mb_idcard); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mb_mobile')); ?>:</b>
	<?php echo CHtml::encode($data->mb_mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mb_email')); ?>:</b>
	<?php echo CHtml::encode($data->mb_email); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('pst_id')); ?>:</b>
	<?php echo CHtml::encode($data->pst_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_date')); ?>:</b>
	<?php echo CHtml::encode($data->created_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_date')); ?>:</b>
	<?php echo CHtml::encode($data->update_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_by')); ?>:</b>
	<?php echo CHtml::encode($data->update_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br />

	*/ ?>

</div>