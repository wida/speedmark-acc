<?php
/* @var $this CashController */
/* @var $model Cash */

$this->breadcrumbs=array(
	'Cashes'=>array('index'),
	$model->cash_id,
);

?>
<?php $this->renderPartial('_menu', array('model'=>$model)); ?>

<h1>View Cash #<?php echo $model->cash_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'cash_id',
		'cash_date',
		'cash_paid_to',
		'cash_amount',
		'cash_voucher_no',
		'cash_cheque_no',
		'cash_input_date',
		'cash_desc',
		'cash_posted',
		'cash_type',
		'cash_header',
		'id_bank',
		'paid_via',
		'or_type',
	),
)); ?>
