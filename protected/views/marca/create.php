<?php
/* @var $this MarcaController */
/* @var $model Marca */

$this->breadcrumbs=array(
	'Marcas'=>array('index'),
	'Create',
);

$this->menu=array(
	
	array('label'=>'Administrar marcas', 'url'=>array('admin')),
);
?>

<h1>Crear marca</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>