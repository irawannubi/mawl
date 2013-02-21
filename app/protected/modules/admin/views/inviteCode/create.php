<?php
/* @var $this InviteCodeController */
/* @var $model InviteCode */

$this->breadcrumbs=array(
	'Invite Codes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Invite Codes', 'url'=>array('index')),
);
?>

<h1>Create InviteCode</h1>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'invite-code-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('name'=>'InviteCode[submitBtn]')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->