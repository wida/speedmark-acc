<?php
/* @var $this CashController */
/* @var $model Cash */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cash-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cash_id'); ?>
		<?php echo $form->textField($model,'cash_id',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'cash_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cash_date'); ?>
		<?php //echo $form->textField($model,'cash_date'); ?>
		<?php
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(
			    'model' => $model,
			    'attribute' => 'cash_date',
			    'options' => array(
			        'showOn' => 'both',             // also opens with a button
			        'dateFormat' => Yii::app()->params['dateFormat'],     // format of "2012-12-25"
			        'showOtherMonths' => true,      // show dates in other months
			        'selectOtherMonths' => true,    // can seelect dates in other months
			        'changeYear' => true,           // can change year
			        'changeMonth' => true,          // can change month
			        'yearRange' => '2000:2099',     // range of year
			        'minDate' => '2000-01-01',      // minimum date
			        'maxDate' => '2099-12-31',      // maximum date
			        'showButtonPanel' => true,      // show button panel
			    ),
			    'htmlOptions' => array(
			        'size' => '10',         // textField size
			        'maxlength' => '10',    // textField maxlength
			    ),
			));
			?>
		<?php echo $form->error($model,'cash_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cash_paid_to'); ?>
		<?php echo $form->textField($model,'cash_paid_to',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'cash_paid_to'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cash_amount'); ?>
		<?php echo $form->textField($model,'cash_amount',array('size'=>19,'maxlength'=>19)); ?>
		<?php echo $form->error($model,'cash_amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cash_voucher_no'); ?>
		<?php echo $form->textField($model,'cash_voucher_no',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'cash_voucher_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cash_cheque_no'); ?>
		<?php echo $form->textField($model,'cash_cheque_no',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'cash_cheque_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cash_input_date'); ?>
		<?php echo CHtml::encode($model->cash_input_date); ?>
		<?php echo $form->error($model,'cash_input_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cash_desc'); ?>
		<?php echo $form->textField($model,'cash_desc',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'cash_desc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cash_posted'); ?>
		<?php $list = Yii::app()->params['TFBooleanValue']; ?>
		<?php echo $form->dropDownList($model, 'cash_posted', $list); ?>
		<?php echo $form->error($model,'cash_posted'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cash_type'); ?>
		<?php $list = Yii::app()->params['cashType']; ?>
		<?php echo $form->dropDownList($model, 'cash_type', $list, array('empty'=>'(Pilih tipe cash)')); ?>
		<?php echo $form->error($model,'cash_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cash_header'); ?>
		<?php echo $form->textField($model,'cash_header',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'cash_header'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_bank'); ?>
		<?php $list = CHtml::listData(Bank::model()->findAll(),'bank_account', 'bank_name'); ?>
		<?php echo $form->dropDownList($model, 'id_bank', $list, array('empty'=>'(Pilih bank)')); ?>
		<?php echo $form->error($model,'id_bank'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paid_via'); ?>
		<?php $list = Yii::app()->params['paidVia']; ?>
		<?php echo $form->dropDownList($model, 'paid_via', $list, array('empty'=>'(Pilih metode pembayaran)')); ?>
		<?php echo $form->error($model,'paid_via'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'or_type'); ?>
		<?php $list = CHtml::listData(TipeOr::model()->findAll(),'tipe_or_id', 'tipe_or'); ?>
		<?php echo $form->dropDownList($model, 'or_type', $list, array('empty'=>'(Pilih tipe OR)')); ?>
		<?php echo $form->error($model,'or_type'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->