<?php
/* @var $this NotificationsLogController */
/* @var $model NotificationsLog */

$this->breadcrumbs=array(
	'Notifications Logs'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List NotificationsLog', 'url'=>array('index')),
	array('label'=>'Create NotificationsLog', 'url'=>array('create')),
	array('label'=>'View NotificationsLog', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage NotificationsLog', 'url'=>array('admin')),
);
?>

<h1>Update NotificationsLog <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>