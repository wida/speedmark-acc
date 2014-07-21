<?php
/* @var $this CashController */
/* @var $model Cash */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cash_id'); ?>
		<?php echo $form->textField($model,'cash_id',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<!--div class="row">
		<?php echo $form->label($model,'cash_date'); ?>
		<?php echo $form->textField($model,'cash_date'); ?>
	</div-->

	<div class="row">
		<?php echo $form->label($model,'cash_paid_to'); ?>
		<?php echo $form->textField($model,'cash_paid_to',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<!--div class="row">
		<?php echo $form->label($model,'cash_amount'); ?>
		<?php echo $form->textField($model,'cash_amount',array('size'=>19,'maxlength'=>19)); ?>
	</div-->

	<!--div class="row">
		<?php echo $form->label($model,'cash_voucher_no'); ?>
		<?php echo $form->textField($model,'cash_voucher_no',array('size'=>20,'maxlength'=>20)); ?>
	</div-->

	<!--div class="row">
		<?php echo $form->label($model,'cash_cheque_no'); ?>
		<?php echo $form->textField($model,'cash_cheque_no',array('size'=>20,'maxlength'=>20)); ?>
	</div-->

	<div class="row">
		<?php echo $form->label($model,'cash_input_date'); ?>
		<?php echo $form->textField($model,'cash_input_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cash_desc'); ?>
		<?php echo $form->textField($model,'cash_desc',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cash_posted'); ?>
		<?php echo $form->textField($model,'cash_posted',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cash_type'); ?>
		<?php echo $form->textField($model,'cash_type',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cash_header'); ?>
		<?php echo $form->textField($model,'cash_header',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_bank'); ?>
		<?php echo $form->textField($model,'id_bank',array('size'=>7,'maxlength'=>7)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'paid_via'); ?>
		<?php echo $form->textField($model,'paid_via',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'or_type'); ?>
		<?php echo $form->textField($model,'or_type'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->