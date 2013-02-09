<?php
/* @var $this SaleController */
/* @var $data Sale */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transaction_id')); ?>:</b>
	<?php echo CHtml::encode($data->transaction_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipping_id')); ?>:</b>
	<?php echo CHtml::encode($data->shipping_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('buyer_id')); ?>:</b>
	<?php echo CHtml::encode($data->buyer_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('order_number')); ?>:</b>
	<?php echo CHtml::encode($data->order_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('products_cost')); ?>:</b>
	<?php echo CHtml::encode($data->products_cost); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('shipping_cost')); ?>:</b>
	<?php echo CHtml::encode($data->shipping_cost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipping_address')); ?>:</b>
	<?php echo CHtml::encode($data->shipping_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bIlling_address')); ?>:</b>
	<?php echo CHtml::encode($data->bIlling_address); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('modified_by')); ?>:</b>
	<?php echo CHtml::encode($data->modified_by); ?>
	<br />

	*/ ?>

</div>