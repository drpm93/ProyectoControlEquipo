<?php
/* @var $this DireccionesController */
/* @var $model Direcciones */

$this->breadcrumbs=array(
	'Direcciones'=>array('index'),
	$model->iddireccion=>array('view','id'=>$model->iddireccion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Direcciones', 'url'=>array('index')),
	array('label'=>'Create Direcciones', 'url'=>array('create')),
	array('label'=>'View Direcciones', 'url'=>array('view', 'id'=>$model->iddireccion)),
	array('label'=>'Manage Direcciones', 'url'=>array('admin')),
);
?>

<h1>Update Direcciones <?php echo $model->iddireccion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>