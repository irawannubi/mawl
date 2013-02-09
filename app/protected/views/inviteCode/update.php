<?php
/* @var $this InviteCodeController */
/* @var $model InviteCode */

$this->breadcrumbs=array(
	'Invite Codes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List InviteCode', 'url'=>array('index')),
	array('label'=>'Create InviteCode', 'url'=>array('create')),
	array('label'=>'View InviteCode', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage InviteCode', 'url'=>array('admin')),
);
?>

<h1>Update InviteCode <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>