<?php
/* @var $this ProductListRecordController */
/* @var $model ProductListRecord */

$this->breadcrumbs=array(
	'Product List Records'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProductListRecord', 'url'=>array('index')),
	array('label'=>'Create ProductListRecord', 'url'=>array('create')),
	array('label'=>'View ProductListRecord', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ProductListRecord', 'url'=>array('admin')),
);
?>

<h1>Update ProductListRecord <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>