<?php
	Yii::app()->clientScript->registerCssFile(
        Yii::app()->clientScript->getCoreScriptUrl().
        '/jui/css/base/jquery-ui.css'
	);
?>

<?php Yii::app()->clientScript->registerCoreScript('jquery.ui'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.table.addrow.js'); ?>
<script type="text/javascript">
    $("document").ready(function(){
        $(".alternativeRow").btnAddRow({
            oddRowCSS:"odd",
            evenRowCSS:"even",
            rowNumColumn:"rowNumber"
        }, function(row){
			var idBefore    = row.find(".city").attr('id');
            var idNumber    = idBefore.substring(4) * 1 + 1;
			row.find('.tanggal').attr('id', 'tanggal' + idNumber).removeClass('hasDatepicker').datepicker({
				dateFormat: 'yy-mm-dd',
				changeMonth: true,
				changeYear: true
			});
			
			row.find(".city").attr('id', 'city' + idNumber).autocomplete({
				source : "<?php echo $this->createUrl('city/autoComplete') ?>",
				dataType: 'json',
				search: function(event, ui) {
					$(this).parent().parent().find(".city-id").val('');
				},
				select: function(event, ui) {  
					//alert(ui.item.id);
					$(this).parent().parent().find(".city-id").val(ui.item.id);
				}
			});
		});
		
		$(".delRow").btnDelRow();
	});
	
	$(function() {
		$('.tanggal').removeClass('hasDatepicker').datepicker({
            dateFormat: 'yy-mm-dd',
            changeMonth: true,
            changeYear: true
        });
		
		$(".city").autocomplete({
            source : "<?php echo $this->createUrl('city/autoComplete') ?>",
            dataType: 'json',
            search: function(event, ui) {
                $(this).parent().parent().find(".city-id").val('');
            },
            select: function(event, ui) {  
                //alert(ui.item.id);
                $(this).parent().parent().find(".city-id").val(ui.item.id);
            }
        });
	});
</script>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'event-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">		
		<?php echo $form->labelEx($model,'band_id'); ?>
		<?php echo $form->dropDownList($model,'band_id', CHtml::listData(Band::model()->findAll(), 'band_id', 'band_name')); ?>
		<?php echo $form->error($model,'band_id'); ?>
	</div>
	
	<table class="items">
		<thead>
		<tr>
			<th><?php echo $form->labelEx($model,'city_id'); ?></th>
			<th><?php echo $form->labelEx($model,'event_date'); ?></th>
			<th><?php echo $form->labelEx($model,'event_desc'); ?></th>
			<th><input type="button" name="alternativeRow" value="Add" class="alternativeRow" /></th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td>
				<?php echo $form->hiddenField($model,'city_id[]', array('class'=>'city-id')); ?>
				<?php echo $form->textField($model,'city_name[]', array('class'=>'city', 'id'=>'city1')); ?>
			</td>
			<td><?php echo $form->textField($model,'event_date[]', array('class'=>'tanggal')); ?></td>
			<td><?php echo $form->textArea($model,'event_desc[]',array('rows'=>3, 'cols'=>50)); ?></td>
			<td><input type="button" name="delRow" value="Delete" class="delRow" /></td>
		</tr>
		</tbody>
	</table>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->