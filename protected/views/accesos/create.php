<?php
/* @var $this AccesosController */
/* @var $model Accesos */

$this->breadcrumbs=array(
	'Accesoses'=>array('index'),
	'Create',
);

$this->menu=array(
	
	array('label'=>'Administrar accesos', 'url'=>array('admin')),
);
?>

<h1>Crear acceso</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>