<?php
/* @var $this ShippingController */
/* @var $data Shipping */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('carrier')); ?>:</b>
	<?php echo CHtml::encode($data->carrier); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tracking_code')); ?>:</b>
	<?php echo CHtml::encode($data->tracking_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_shipped')); ?>:</b>
	<?php echo CHtml::encode($data->is_shipped); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_date')); ?>:</b>
	<?php echo CHtml::encode($data->created_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified_date')); ?>:</b>
	<?php echo CHtml::encode($data->modified_date); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('modified_by')); ?>:</b>
	<?php echo CHtml::encode($data->modified_by); ?>
	<br />

	*/ ?>

</div>