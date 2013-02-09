<?php
/* @var $this ShoppingBagController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Shopping Bags',
);

$this->menu=array(
	array('label'=>'Create ShoppingBag', 'url'=>array('create')),
	array('label'=>'Manage ShoppingBag', 'url'=>array('admin')),
);
?>

<h1>Shopping Bags</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
