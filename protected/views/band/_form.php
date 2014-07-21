<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'band-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'band_name'); ?>
		<?php echo $form->textField($model,'band_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'band_name'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->