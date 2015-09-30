<?php
/* @var $this FichaController */
/* @var $model Ficha */

$this->breadcrumbs=array(
	'Fichas'=>array('index'),
	'Crear ficha',
);

$this->menu=array(
	
	array('label'=>'Administrar fichas', 'url'=>array('admin')),
);
?>

<h1>Crear ficha de equipo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>