<?php
/* @var $this BajacelularesController */
/* @var $model Bajacelulares */

$this->breadcrumbs=array(
	'Bajacelulares'=>array('index'),
	$model->idbajacelular,
);

$this->menu=array(
	array('label'=>'List Bajacelulares', 'url'=>array('index')),
	array('label'=>'Create Bajacelulares', 'url'=>array('create')),
	array('label'=>'Update Bajacelulares', 'url'=>array('update', 'id'=>$model->idbajacelular)),
	array('label'=>'Delete Bajacelulares', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idbajacelular),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Bajacelulares', 'url'=>array('admin')),
);
?>

<h1>View Bajacelulares #<?php echo $model->idbajacelular; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idbajacelular',
		'idfichacelular',
		'numero',
		'duenio',
		'responsable',
		'simcard',
		'imei',
		'marca',
		'modelo',
		'cargador',
		'microsd',
		'auriculares',
		'caja',
		'cupo',
		'fechaini',
		'fechafinal',
	),
)); ?>
