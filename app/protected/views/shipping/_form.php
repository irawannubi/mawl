<?php
/* @var $this ShippingController */
/* @var $model Shipping */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'shipping-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'carrier'); ?>
		<?php echo $form->textField($model,'carrier',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'carrier'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tracking_code'); ?>
		<?php echo $form->textArea($model,'tracking_code',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tracking_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_shipped'); ?>
		<?php echo $form->textField($model,'is_shipped'); ?>
		<?php echo $form->error($model,'is_shipped'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_date'); ?>
		<?php echo $form->textField($model,'created_date'); ?>
		<?php echo $form->error($model,'created_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by'); ?>
		<?php echo $form->error($model,'created_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modified_date'); ?>
		<?php echo $form->textField($model,'modified_date'); ?>
		<?php echo $form->error($model,'modified_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modified_by'); ?>
		<?php echo $form->textField($model,'modified_by'); ?>
		<?php echo $form->error($model,'modified_by'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->