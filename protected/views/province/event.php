<?php
$this->breadcrumbs=array(
	'Provinces'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Province', 'url'=>array('index')),
	array('label'=>'Manage Province', 'url'=>array('admin')),
);
?>

<h1>Create Province</h1>

<?php echo $this->renderPartial('_formEvent', array('model'=>$model)); ?>