<?php
/* @var $this ProductListRecordController */
/* @var $model ProductListRecord */

$this->breadcrumbs=array(
	'Product List Records'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ProductListRecord', 'url'=>array('index')),
	array('label'=>'Create ProductListRecord', 'url'=>array('create')),
	array('label'=>'Update ProductListRecord', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ProductListRecord', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductListRecord', 'url'=>array('admin')),
);
?>

<h1>View ProductListRecord #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'product_id',
		'list_id',
		'list_type',
		'price',
		'quantity',
		'commission_pc',
		'created_date',
		'created_by',
		'modified_date',
		'modified_by',
		'sub_product_id',
	),
)); ?>
