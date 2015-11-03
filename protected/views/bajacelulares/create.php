<?php
/* @var $this BajacelularesController */
/* @var $model Bajacelulares */

$this->breadcrumbs=array(
	'Bajacelulares'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Bajacelulares', 'url'=>array('index')),
	array('label'=>'Manage Bajacelulares', 'url'=>array('admin')),
);
?>

<h1>Create Bajacelulares</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>