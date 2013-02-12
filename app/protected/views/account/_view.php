<?php
/* @var $this AccountController */
/* @var $data Account */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('role')); ?>:</b>
	<?php echo CHtml::encode($data->role); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
	<?php echo CHtml::encode($data->first_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>:</b>
	<?php echo CHtml::encode($data->last_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_login')); ?>:</b>
	<?php echo CHtml::encode($data->last_login); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('merchant_brand_name')); ?>:</b>
	<?php echo CHtml::encode($data->merchant_brand_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('merchant_bank_number')); ?>:</b>
	<?php echo CHtml::encode($data->merchant_bank_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('merchant_bank_sort_code')); ?>:</b>
	<?php echo CHtml::encode($data->merchant_bank_sort_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('merchant_phone')); ?>:</b>
	<?php echo CHtml::encode($data->merchant_phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('merchant_bio')); ?>:</b>
	<?php echo CHtml::encode($data->merchant_bio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('merchant_photo_url')); ?>:</b>
	<?php echo CHtml::encode($data->merchant_photo_url); ?>
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