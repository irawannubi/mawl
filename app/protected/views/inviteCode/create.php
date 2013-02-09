<?php
/* @var $this InviteCodeController */
/* @var $model InviteCode */

$this->breadcrumbs=array(
	'Invite Codes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List InviteCode', 'url'=>array('index')),
	array('label'=>'Manage InviteCode', 'url'=>array('admin')),
);
?>

<h1>Create InviteCode</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>