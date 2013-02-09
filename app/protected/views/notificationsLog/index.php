<?php
/* @var $this NotificationsLogController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Notifications Logs',
);

$this->menu=array(
	array('label'=>'Create NotificationsLog', 'url'=>array('create')),
	array('label'=>'Manage NotificationsLog', 'url'=>array('admin')),
);
?>

<h1>Notifications Logs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
