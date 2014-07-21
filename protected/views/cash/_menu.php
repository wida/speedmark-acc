<?php
$this->menu=array(
	array('label'=>'Create Cash', 'url'=>array('create')),
	array('label'=>'Manage Cash', 'url'=>array('admin')),
);

if(!empty($model->cash_id))
{
	$this->menu = array_merge($this->menu, 
		array(
			array('label'=>'Update Cash', 'url'=>array('update', 'cash_id'=>$model->cash_id)),
			array('label'=>'Delete Cash', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','cash_id'=>$model->cash_id),'confirm'=>'Cash payment ID ' .$model->cash_id. ' akan dihapus. Apakah anda yakin?')),
			)
		);
}
?>