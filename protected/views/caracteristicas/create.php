<?php
/* @var $this CaracteristicasController */
/* @var $model Caracteristicas */

$this->breadcrumbs=array(
	'Caracteristicases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Caracteristicas', 'url'=>array('index')),
	array('label'=>'Manage Caracteristicas', 'url'=>array('admin')),
);
?>

<h1>Create Caracteristicas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>