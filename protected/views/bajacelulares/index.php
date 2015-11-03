<?php
/* @var $this BajacelularesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bajacelulares',
);

$this->menu=array(
	array('label'=>'Create Bajacelulares', 'url'=>array('create')),
	array('label'=>'Manage Bajacelulares', 'url'=>array('admin')),
);
?>

<h1>Bajacelulares</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
