<?php
$this->breadcrumbs=array(
	'Bands'=>array('index'),
	$model->band_id=>array('view','id'=>$model->band_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Band', 'url'=>array('index')),
	array('label'=>'Create Band', 'url'=>array('create')),
	array('label'=>'View Band', 'url'=>array('view', 'id'=>$model->band_id)),
	array('label'=>'Manage Band', 'url'=>array('admin')),
);
?>

<h1>Update Band <?php echo $model->band_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>