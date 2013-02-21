<?php
/* @var $this ProductController */
/* @var $data Product */
?>

<pre>
	<?php //print_r($data);?>
</pre>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('approved_by')); ?>:</b>
	<?php echo CHtml::encode($data->approved_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('commission_pc')); ?>:</b>
	<?php echo CHtml::encode($data->commission_pc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_id')); ?>:</b>
	<?php echo CHtml::encode($data->category_id); ?>
	<br />

	<?php if($data->r_seller){ ?>
		<b><?php echo CHtml::encode($data->getAttributeLabel('r_seller')); ?>:</b>
		<?php echo CHtml::encode($data->r_seller->last_name); ?>
		<br />
	<?php } ?>
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('current_price')); ?>:</b>
	<?php echo CHtml::encode($data->current_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('previous_price')); ?>:</b>
	<?php echo CHtml::encode($data->previous_price); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('approved')); ?>:</b>
	<?php echo CHtml::encode($data->approved); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sku')); ?>:</b>
	<?php echo CHtml::encode($data->sku); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity')); ?>:</b>
	<?php echo CHtml::encode($data->quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('short_description')); ?>:</b>
	<?php echo CHtml::encode($data->short_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('visibility')); ?>:</b>
	<?php echo CHtml::encode($data->visibility); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('featured')); ?>:</b>
	<?php echo CHtml::encode($data->featured); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shipping_cost')); ?>:</b>
	<?php echo CHtml::encode($data->shipping_cost); ?>
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