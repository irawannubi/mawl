<?php
/* @var $this ProductListRecordController */
/* @var $model ProductListRecord */

$this->breadcrumbs=array(
	'Product List Records'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProductListRecord', 'url'=>array('index')),
	array('label'=>'Manage ProductListRecord', 'url'=>array('admin')),
);
?>

<h1>Create ProductListRecord</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>