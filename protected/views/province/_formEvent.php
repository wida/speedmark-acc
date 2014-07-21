<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'province-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pro_name'); ?>
		<?php $this->widget('ext.appendo.JAppendo',array(
			'id' => 'pro_name',        
			'model' => $model,
			'viewName' => 'Province',
			'labelDel' => 'Remove Row'
			//'cssFile' => 'css/jquery.appendo2.css'
		)); ?>
		<?php echo $form->error($model,'pro_name'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->