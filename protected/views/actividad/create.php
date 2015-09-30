<?php
/* @var $this ActividadController */
/* @var $model Actividad */

$this->breadcrumbs=array(
	'Actividads'=>array('index'),
	'Create',
);

$this->menu=array(
	
	array('label'=>'Administrar actividades', 'url'=>array('admin')),
);
?>

<h1>Crear actividad</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>