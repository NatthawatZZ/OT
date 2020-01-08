<?php
/* @var $this TableMemberController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Table Members',
);

$this->menu=array(
	array('label'=>'Create TableMember', 'url'=>array('create')),
	array('label'=>'Manage TableMember', 'url'=>array('admin')),
);
?>

<h1>Table Members</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
