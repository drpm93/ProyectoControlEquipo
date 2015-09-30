<?php
/* @var $this DireccionesController */
/* @var $model Direcciones */

$this->breadcrumbs=array(
	'Direcciones'=>array('index'),
	'Create',
);

$this->menu=array(
	
	array('label'=>'Administrar direcciones', 'url'=>array('admin')),
);
?>

<h1>Crear direcciones</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>