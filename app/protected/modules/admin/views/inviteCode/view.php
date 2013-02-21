<?php
/* @var $this InviteCodeController */
/* @var $model InviteCode */

$this->breadcrumbs=array(
	'Invite Codes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Invite Codes', 'url'=>array('index')),
	array('label'=>'Create Invite Code', 'url'=>array('create')),
	array('label'=>'Delete Invite Code', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View InviteCode #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'account_id',
		'code',
		'created_date',
		'created_by',
		'modified_date',
		'modified_by',
	),
)); ?>
