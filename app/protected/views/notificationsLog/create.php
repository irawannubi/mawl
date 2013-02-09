<?php
/* @var $this NotificationsLogController */
/* @var $model NotificationsLog */

$this->breadcrumbs=array(
	'Notifications Logs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List NotificationsLog', 'url'=>array('index')),
	array('label'=>'Manage NotificationsLog', 'url'=>array('admin')),
);
?>

<h1>Create NotificationsLog</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>