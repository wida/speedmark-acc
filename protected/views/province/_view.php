<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pro_id), array('view', 'id'=>$data->pro_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pro_name')); ?>:</b>
	<?php echo CHtml::encode($data->pro_name); ?>
	<br />


</div>