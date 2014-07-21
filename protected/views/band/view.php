<?php
$this->breadcrumbs=array(
	'Bands'=>array('index'),
	$model->band_id,
);

$this->menu=array(
	array('label'=>'List Band', 'url'=>array('index')),
	array('label'=>'Create Band', 'url'=>array('create')),
	array('label'=>'Update Band', 'url'=>array('update', 'id'=>$model->band_id)),
	array('label'=>'Delete Band', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->band_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Band', 'url'=>array('admin')),
);
?>

<h1>View Band #<?php echo $model->band_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'band_id',
		'band_name',
	),
)); ?>
