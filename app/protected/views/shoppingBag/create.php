<?php
/* @var $this ShoppingBagController */
/* @var $model ShoppingBag */

$this->breadcrumbs=array(
	'Shopping Bags'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ShoppingBag', 'url'=>array('index')),
	array('label'=>'Manage ShoppingBag', 'url'=>array('admin')),
);
?>

<h1>Create ShoppingBag</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>