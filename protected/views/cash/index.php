<?php
/* @var $this CashController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cashes',
);

?>
<?php $this->renderPartial('_menu', array('model'=>$model)); ?>

<h1>Cashes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
