<?php
/* @var $this CaracteristicasController */
/* @var $model Caracteristicas */

$this->breadcrumbs=array(
	'Caracteristicases'=>array('index'),
	$model->idcaracteristica=>array('view','id'=>$model->idcaracteristica),
	'Update',
);

$this->menu=array(
	
	array('label'=>'Crear caracteristica', 'url'=>array('create')),
	array('label'=>'Ver Caracteristica', 'url'=>array('view', 'id'=>$model->idcaracteristica)),
	array('label'=>'Administrar caracteristicas', 'url'=>array('admin')),
);
?>

<h1>Update Caracteristicas <?php echo $model->idcaracteristica; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>