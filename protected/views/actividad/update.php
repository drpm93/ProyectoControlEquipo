<?php
/* @var $this ActividadController */
/* @var $model Actividad */

$this->breadcrumbs=array(
	'Actividads'=>array('index'),
	$model->idactividad=>array('view','id'=>$model->idactividad),
	'Update',
);

$this->menu=array(
	
	array('label'=>'Crear actividad', 'url'=>array('create')),
	array('label'=>'Vista de actividad', 'url'=>array('view', 'id'=>$model->idactividad)),
	array('label'=>'Administrar actividades', 'url'=>array('admin')),
);
?>

<h1>Actualizar actividad #<?php echo $model->idactividad; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>