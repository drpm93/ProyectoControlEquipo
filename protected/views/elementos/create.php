<?php
/* @var $this ElementosController */
/* @var $model Elementos */

$this->breadcrumbs=array(
	'Elementoses'=>array('index'),
	'Crear elemento',
);

$this->menu=array(
	
	array('label'=>'Administrar elementos', 'url'=>array('admin')),
);
?>

<h1>Crear elemento</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>