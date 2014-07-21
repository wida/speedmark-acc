<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('band_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->band_id), array('view', 'id'=>$data->band_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('band_name')); ?>:</b>
	<?php echo CHtml::encode($data->band_name); ?>
	<br />


</div>