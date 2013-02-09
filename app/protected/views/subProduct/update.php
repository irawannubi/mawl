<?php
/* @var $this SubProductController */
/* @var $model SubProduct */

$this->breadcrumbs=array(
	'Sub Products'=>array('index'),
	$model->tItle=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SubProduct', 'url'=>array('index')),
	array('label'=>'Create SubProduct', 'url'=>array('create')),
	array('label'=>'View SubProduct', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SubProduct', 'url'=>array('admin')),
);
?>

<h1>Update SubProduct <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>