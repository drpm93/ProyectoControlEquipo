<?php
/* @var $this FichaController */
/* @var $model Ficha */

$this->breadcrumbs=array(
	'Fichas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ficha', 'url'=>array('index')),
	array('label'=>'Manage Ficha', 'url'=>array('admin')),
);
?>

<h1>Create Ficha</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>