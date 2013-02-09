<?php
/* @var $this ShoppingBagController */
/* @var $model ShoppingBag */

$this->breadcrumbs=array(
	'Shopping Bags'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ShoppingBag', 'url'=>array('index')),
	array('label'=>'Create ShoppingBag', 'url'=>array('create')),
	array('label'=>'View ShoppingBag', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ShoppingBag', 'url'=>array('admin')),
);
?>

<h1>Update ShoppingBag <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>