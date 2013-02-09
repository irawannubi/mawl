<?php
/* @var $this SubProductController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sub Products',
);

$this->menu=array(
	array('label'=>'Create SubProduct', 'url'=>array('create')),
	array('label'=>'Manage SubProduct', 'url'=>array('admin')),
);
?>

<h1>Sub Products</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
