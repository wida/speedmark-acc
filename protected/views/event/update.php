<?php
$this->breadcrumbs=array(
	'Events'=>array('index'),
	$model->event_id=>array('view','id'=>$model->event_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Event', 'url'=>array('index')),
	array('label'=>'Create Event', 'url'=>array('create')),
	array('label'=>'View Event', 'url'=>array('view', 'id'=>$model->event_id)),
	array('label'=>'Manage Event', 'url'=>array('admin')),
);
?>

<h1>Update Event <?php echo $model->event_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>