<?php
/* @var $this DepartamentoController */
/* @var $model Departamento */

$this->breadcrumbs=array(
	'Departamentos'=>array('index'),
	'Create',
);

$this->menu=array(
	
	array('label'=>'Administrar departamentos', 'url'=>array('admin')),
);
?>

<h1>Crear departamento</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>