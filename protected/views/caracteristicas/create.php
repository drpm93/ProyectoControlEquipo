<?php
/* @var $this CaracteristicasController */
/* @var $model Caracteristicas */

$this->breadcrumbs=array(
	'Caracteristicases'=>array('index'),
	'Create',
);

$this->menu=array(
	
	array('label'=>'Administrar caracteristicas', 'url'=>array('admin')),
);
?>

<h1>Crear caracteristica</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>