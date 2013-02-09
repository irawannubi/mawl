<?php
/* @var $this SubProductController */
/* @var $model SubProduct */

$this->breadcrumbs=array(
	'Sub Products'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SubProduct', 'url'=>array('index')),
	array('label'=>'Manage SubProduct', 'url'=>array('admin')),
);
?>

<h1>Create SubProduct</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>