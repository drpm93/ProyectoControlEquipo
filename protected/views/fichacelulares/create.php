<?php
/* @var $this FichacelularesController */
/* @var $model Fichacelulares */

$this->breadcrumbs=array(
	'Fichacelulares'=>array('index'),
	'Create',
);

$this->menu=array(
	
	array('label'=>'Administrar fichas', 'url'=>array('admin')),
);
?>

<h1>Crear ficha de equipo celular</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>