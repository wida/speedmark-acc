<?php
/* @var $this CashController */
/* @var $model Cash */

$this->breadcrumbs=array(
	'Cashes'=>array('index'),
	$model->cash_id=>array('view','id'=>$model->cash_id),
	'Update',
);

?>
<?php $this->renderPartial('_menu', array('model'=>$model)); ?>

<h1>Update Cash <?php echo $model->cash_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>