<?php
/* @var $this CashController */
/* @var $model Cash */

$this->breadcrumbs=array(
	'Cashes'=>array('index'),
	'Manage',
);

$this->renderPartial('_menu', array('model'=>$model)); 

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cash-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Cashes</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cash-grid',
	'dataProvider'=>$model->search(),
	/*'filter'=>$model,*/
	'columns'=>array(
		'cash_id',
		'tanggal' => array(
				'type' => 'date',
				'name' => 'cash_date',
			),
		'cash_paid_to',
		'cash_amount',
		'cash_voucher_no',
		'cash_cheque_no',
		/*
		'cash_input_date',
		'cash_desc',
		'cash_posted',
		'cash_type',
		'cash_header',
		'id_bank',
		'paid_via',
		'or_type',
		*/
		array(
			'class'=>'CButtonColumn',
			'deleteConfirmation'=>"js:'Cash Payment ID '+$(this).parent().parent().children(':first-child').text()+' akan dihapus. Apakah anda yakin?'",
			'template'=>'{update}{delete}',
		    'buttons'=>array
		    (
		        'update' => array
		        (
		            'label'=>'Update this cash payment',
		            'imageUrl'=>Yii::app()->request->baseUrl.'/images/update.png',
		            'url'=>'Yii::app()->createUrl("cash/update", array("cash_id"=>trim($data->cash_id)))',
		        ),
		        'delete' => array
		        (
		            'label'=>'Delete this cash payment',
		            'imageUrl'=>Yii::app()->request->baseUrl.'/images/delete.png',
		            'url'=>'Yii::app()->createUrl("cash/delete", array("cash_id"=>trim($data->cash_id)))',
		        ),
		    ),
		),
	),
)); ?>
