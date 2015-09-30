<?php
/* @var $this MarcaController */
/* @var $model Marca */

$this->breadcrumbs=array(
	'Marcas'=>array('index'),
	$model->idmarca=>array('view','id'=>$model->idmarca),
	'Update',
);

$this->menu=array(
	
	array('label'=>'Crear marca', 'url'=>array('create')),
	array('label'=>'Ver marca', 'url'=>array('view', 'id'=>$model->idmarca)),
	array('label'=>'Administrar marcas', 'url'=>array('admin')),
);
?>

<h1>Actualizar marca #<?php echo $model->idmarca; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>