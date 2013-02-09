<?php
/* @var $this ProductListRecordController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Product List Records',
);

$this->menu=array(
	array('label'=>'Create ProductListRecord', 'url'=>array('create')),
	array('label'=>'Manage ProductListRecord', 'url'=>array('admin')),
);
?>

<h1>Product List Records</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
