<?php
$this->breadcrumbs=array(
	'Provinces'=>array('index'),
	$model->pro_id=>array('view','id'=>$model->pro_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Province', 'url'=>array('index')),
	array('label'=>'Create Province', 'url'=>array('create')),
	array('label'=>'View Province', 'url'=>array('view', 'id'=>$model->pro_id)),
	array('label'=>'Manage Province', 'url'=>array('admin')),
);
?>

<h1>Update Province <?php echo $model->pro_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>