<?php
/* @var $this ActividadController */
/* @var $model Actividad */

$this->breadcrumbs=array(
	'Actividads'=>array('index'),
	$model->idactividad,
);

$this->menu=array(
	
	array('label'=>'Crear actividad', 'url'=>array('create')),
	array('label'=>'Actualizar actividad', 'url'=>array('update', 'id'=>$model->idactividad)),
	array('label'=>'Eliminar actividad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idactividad),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar actividades', 'url'=>array('admin')),
);
?>

<h1>Vista de actividad #<?php echo $model->idactividad; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idactividad',
		'nomactividad',
	),
)); ?>
