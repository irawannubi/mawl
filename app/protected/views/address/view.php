<?php
/* @var $this AddressController */
/* @var $model Address */

$this->breadcrumbs=array(
	'Addresses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Address', 'url'=>array('index')),
	array('label'=>'Create Address', 'url'=>array('create')),
	array('label'=>'Update Address', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Address', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Address', 'url'=>array('admin')),
);
?>

<h1>View Address #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'account_id',
		'address_line_1',
		'address_line_2',
		'address_line_3',
		'county',
		'postcode',
		'country',
		'type',
		'created_date',
		'created_by',
		'modified_date',
		'modified_by',
	),
)); ?>
