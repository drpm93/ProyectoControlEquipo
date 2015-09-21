<?php
/* @var $this ElementosController */
/* @var $model Elementos */

$this->breadcrumbs=array(
	'Elementoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Elementos', 'url'=>array('index')),
	array('label'=>'Manage Elementos', 'url'=>array('admin')),
);
?>

<h1>Create Elementos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>