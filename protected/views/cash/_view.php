<?php
/* @var $this CashController */
/* @var $data Cash */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('cash_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->cash_id), array('view', 'id'=>$data->cash_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cash_date')); ?>:</b>
	<?php echo CHtml::encode($data->cash_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cash_paid_to')); ?>:</b>
	<?php echo CHtml::encode($data->cash_paid_to); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cash_amount')); ?>:</b>
	<?php echo CHtml::encode($data->cash_amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cash_voucher_no')); ?>:</b>
	<?php echo CHtml::encode($data->cash_voucher_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cash_cheque_no')); ?>:</b>
	<?php echo CHtml::encode($data->cash_cheque_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cash_input_date')); ?>:</b>
	<?php echo CHtml::encode($data->cash_input_date); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('cash_desc')); ?>:</b>
	<?php echo CHtml::encode($data->cash_desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cash_posted')); ?>:</b>
	<?php echo CHtml::encode($data->cash_posted); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cash_type')); ?>:</b>
	<?php echo CHtml::encode($data->cash_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cash_header')); ?>:</b>
	<?php echo CHtml::encode($data->cash_header); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_bank')); ?>:</b>
	<?php echo CHtml::encode($data->id_bank); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paid_via')); ?>:</b>
	<?php echo CHtml::encode($data->paid_via); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('or_type')); ?>:</b>
	<?php echo CHtml::encode($data->or_type); ?>
	<br />

	*/ ?>

</div>