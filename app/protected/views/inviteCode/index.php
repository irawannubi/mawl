<?php
/* @var $this InviteCodeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Invite Codes',
);

$this->menu=array(
	array('label'=>'Create InviteCode', 'url'=>array('create')),
	array('label'=>'Manage InviteCode', 'url'=>array('admin')),
);
?>

<h1>Invite Codes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
