<?php
/* @var $this ShoppingBagController */
/* @var $model ShoppingBag */

$this->breadcrumbs=array(
	'Shopping Bags'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ShoppingBag', 'url'=>array('index')),
	array('label'=>'Create ShoppingBag', 'url'=>array('create')),
	array('label'=>'Update ShoppingBag', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ShoppingBag', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ShoppingBag', 'url'=>array('admin')),
);
?>

<h1>View ShoppingBag #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'customer_id',
		'created_date',
		'created_by',
		'modified_date',
		'modified_by',
	),
)); ?>
