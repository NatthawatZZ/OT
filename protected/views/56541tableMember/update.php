<?php
/* @var $this TableMemberController */
/* @var $model TableMember */

$this->breadcrumbs=array(
	'Table Members'=>array('index'),
	$model->mb_id=>array('view','id'=>$model->mb_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TableMember', 'url'=>array('index')),
	array('label'=>'Create TableMember', 'url'=>array('create')),
	array('label'=>'View TableMember', 'url'=>array('view', 'id'=>$model->mb_id)),
	array('label'=>'Manage TableMember', 'url'=>array('admin')),
);
?>

<h1>Update TableMember <?php echo $model->mb_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>