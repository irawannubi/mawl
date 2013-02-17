<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'product-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'category_id'); ?>
		<?php echo $form->dropDownList($model, 'category_id', $categories); ?>
		<?php echo $form->error($model,'category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'current_price'); ?>
		<div class="input-prepend">
			<span class="add-on">£</span>
			<?php echo $form->textField($model,'current_price'); ?>
		</div>
		<?php echo $form->error($model,'current_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'previous_price'); ?>
		<div class="input-prepend">
			<span class="add-on">£</span>
			<?php echo $form->textField($model,'previous_price'); ?>
		</div>
		<?php echo $form->error($model,'previous_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sku'); ?>
		<?php echo $form->textField($model,'sku',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'sku'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quantity'); ?>
		<?php echo $form->textField($model,'quantity'); ?>
		<?php echo $form->error($model,'quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'short_description'); ?>
		<?php echo $form->textArea($model,'short_description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'short_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'visibility'); ?>
		<?php echo $form->dropDownList($model, 'visibility', array(1=>'Yes', 0=>'No')); ?>
		<?php echo $form->error($model,'visibility'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shipping_cost'); ?>
		<div class="input-prepend">
			<span class="add-on">£</span>
			<?php echo $form->textField($model,'shipping_cost'); ?>
		</div>
		<?php echo $form->error($model,'shipping_cost'); ?>
	</div>
	
	<?php if(Yii::app()->user->checkAccess('admin')){ ?>
	
		<h1>Admin Options</h1>
		
		<div class="row">
			<?php echo $form->labelEx($model,'approved'); ?>
			<?php echo $form->checkbox($model,'approved'); ?>
			<?php echo $form->error($model,'approved'); ?>
		</div>
		
		<div class="row">
			<?php echo $form->labelEx($model,'featured'); ?>
			<?php echo $form->checkbox($model,'featured'); ?>
			<?php echo $form->error($model,'featured'); ?>
		</div>
	
		<div class="row">
			<?php echo $form->labelEx($model,'commission_pc'); ?>
			<div class="input-append">
				<?php echo $form->textField($model,'commission_pc'); ?>
				<span class="add-on">%</span>
			</div>
			<?php echo $form->error($model,'commission_pc'); ?>
		</div>
		
	<?php } ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->