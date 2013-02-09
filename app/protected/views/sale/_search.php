<?php
/* @var $this SaleController */
/* @var $model Sale */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'transaction_id'); ?>
		<?php echo $form->textField($model,'transaction_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shipping_id'); ?>
		<?php echo $form->textField($model,'shipping_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'buyer_id'); ?>
		<?php echo $form->textField($model,'buyer_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'order_number'); ?>
		<?php echo $form->textField($model,'order_number',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'products_cost'); ?>
		<?php echo $form->textField($model,'products_cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shipping_cost'); ?>
		<?php echo $form->textField($model,'shipping_cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shipping_address'); ?>
		<?php echo $form->textField($model,'shipping_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bIlling_address'); ?>
		<?php echo $form->textField($model,'bIlling_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_date'); ?>
		<?php echo $form->textField($model,'created_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'modified_date'); ?>
		<?php echo $form->textField($model,'modified_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'modified_by'); ?>
		<?php echo $form->textField($model,'modified_by'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->