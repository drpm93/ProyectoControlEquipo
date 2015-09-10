<?php
/* @var $this DireccionesController */
/* @var $model Direcciones */

$this->breadcrumbs=array(
	'Direcciones'=>array('index'),
	$model->iddireccion,
);

$this->menu=array(
	array('label'=>'List Direcciones', 'url'=>array('index')),
	array('label'=>'Create Direcciones', 'url'=>array('create')),
	array('label'=>'Update Direcciones', 'url'=>array('update', 'id'=>$model->iddireccion)),
	array('label'=>'Delete Direcciones', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->iddireccion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Direcciones', 'url'=>array('admin')),
);
?>

<h1>View Direcciones #<?php echo $model->iddireccion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'iddireccion',
		'terminal',
		'idusuario',
		'idacceso',
		'messenger',
		'googletalk',
		'correo',
		'adicional',
		'idficha',
	),
)); ?>
