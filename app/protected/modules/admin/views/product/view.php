<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Product', 'url'=>array('index')),
	array('label'=>'Create Product', 'url'=>array('create')),
	array('label'=>'Update Product', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Product', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Product', 'url'=>array('admin')),
);
?>

<h1>View Product #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'approved_by',
		'commission_pc',
		'category_id',
		'seller_id',
		'current_price',
		'previous_price',
		'approved',
		'sku',
		'quantity',
		'description',
		'short_description',
		'visibility',
		'title',
		'featured',
		'shipping_cost',
		'created_date',
		'created_by',
		'modified_date',
		'modified_by',
	),
)); ?>

<?php echo $modified_by->attributes['first_name'] . ' ' . $modified_by->attributes['last_name']; ?>
