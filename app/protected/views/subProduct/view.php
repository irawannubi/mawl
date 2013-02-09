<?php
/* @var $this SubProductController */
/* @var $model SubProduct */

$this->breadcrumbs=array(
	'Sub Products'=>array('index'),
	$model->tItle,
);

$this->menu=array(
	array('label'=>'List SubProduct', 'url'=>array('index')),
	array('label'=>'Create SubProduct', 'url'=>array('create')),
	array('label'=>'Update SubProduct', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SubProduct', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SubProduct', 'url'=>array('admin')),
);
?>

<h1>View SubProduct #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'parent_product_id',
		'tItle',
		'quantity',
		'price',
		'shipping_cost',
		'description',
		'created_date',
		'created_by',
		'modified_date',
		'modified_by',
		'sku',
		'visibility',
	),
)); ?>
