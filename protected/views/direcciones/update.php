<?php
/* @var $this DireccionesController */
/* @var $model Direcciones */

$this->breadcrumbs=array(
	'Direcciones'=>array('index'),
	$model->iddireccion=>array('view','id'=>$model->iddireccion),
	'Update',
);

$this->menu=array(
	
	array('label'=>'Crear dirección', 'url'=>array('create')),
	array('label'=>'Ver dirección', 'url'=>array('view', 'id'=>$model->iddireccion)),
	array('label'=>'Administrar direcciones', 'url'=>array('admin')),
);
?>

<h1>Actualizar dirección # <?php echo $model->iddireccion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>