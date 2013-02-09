<?php
/* @var $this SaleController */
/* @var $model Sale */

$this->breadcrumbs=array(
	'Sales'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Sale', 'url'=>array('index')),
	array('label'=>'Create Sale', 'url'=>array('create')),
	array('label'=>'Update Sale', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Sale', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sale', 'url'=>array('admin')),
);
?>

<h1>View Sale #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'transaction_id',
		'shipping_id',
		'buyer_id',
		'status',
		'order_number',
		'products_cost',
		'shipping_cost',
		'shipping_address',
		'bIlling_address',
		'created_date',
		'created_by',
		'modified_date',
		'modified_by',
	),
)); ?>
