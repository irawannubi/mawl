<?php
/* @var $this NotificationsLogController */
/* @var $model NotificationsLog */

$this->breadcrumbs=array(
	'Notifications Logs'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List NotificationsLog', 'url'=>array('index')),
	array('label'=>'Create NotificationsLog', 'url'=>array('create')),
	array('label'=>'Update NotificationsLog', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete NotificationsLog', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage NotificationsLog', 'url'=>array('admin')),
);
?>

<h1>View NotificationsLog #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'sale_id',
		'title',
		'body',
		'type',
		'email_sent',
		'created_date',
		'created_by',
		'modified_date',
		'modified_by',
	),
)); ?>
