<?php
/* @var $this TableMemberController */
/* @var $model TableMember */

$this->breadcrumbs=array(
	'Table Members'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TableMember', 'url'=>array('index')),
	array('label'=>'Manage TableMember', 'url'=>array('admin')),
);
?>

<h1>Create TableMember</h1>

<?php $this->renderPartial('signup', array('model'=>$model,'position'=>$position,'employ'=>$employ)); ?>
