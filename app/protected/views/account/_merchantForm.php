<?php
/* @var $this AccountController */
/* @var $model Account */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'account-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->hiddenField($model,'role',array('value'=>'merchant')); ?>
		<?php echo $form->error($model,'role'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'first_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'last_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'merchant_brand_name'); ?>
		<?php echo $form->textField($model,'merchant_brand_name',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'merchant_brand_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'merchant_bank_number'); ?>
		<?php echo $form->textField($model,'merchant_bank_number',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'merchant_bank_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'merchant_bank_sort_code'); ?>
		<?php echo $form->textField($model,'merchant_bank_sort_code',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'merchant_bank_sort_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'merchant_phone'); ?>
		<?php echo $form->textField($model,'merchant_phone',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'merchant_phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'merchant_bio'); ?>
		<?php echo $form->textArea($model,'merchant_bio',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'merchant_bio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'merchant_photo_url'); ?>
		<?php echo $form->textArea($model,'merchant_photo_url',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'merchant_photo_url'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'invite_code'); ?>
		<?php echo $form->textField($model,'invite_code',array('size'=>60, 'maxlength'=>100)); ?>
		<?php echo $form->error($model,'invite_code'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->