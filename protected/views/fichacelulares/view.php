<?php
/* @var $this FichacelularesController */
/* @var $model Fichacelulares */

$this->breadcrumbs=array(
	'Fichacelulares'=>array('index'),
	$model->idfichacelular,
);

$this->menu=array(
	array('label'=>'List Fichacelulares', 'url'=>array('index')),
	array('label'=>'Create Fichacelulares', 'url'=>array('create')),
	array('label'=>'Update Fichacelulares', 'url'=>array('update', 'id'=>$model->idfichacelular)),
	array('label'=>'Delete Fichacelulares', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idfichacelular),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Fichacelulares', 'url'=>array('admin')),
);
?>

<h1>View Fichacelulares #<?php echo $model->idfichacelular; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
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
