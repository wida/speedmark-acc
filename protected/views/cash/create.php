<?php
/* @var $this CashController */
/* @var $model Cash */

$this->breadcrumbs=array(
	'Cashes'=>array('index'),
	'Create',
);

?>
<?php $this->renderPartial('_menu', array('model'=>$model)); ?>

<h1>Create Cash</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>