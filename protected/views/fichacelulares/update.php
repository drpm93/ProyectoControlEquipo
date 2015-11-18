<?php
/* @var $this FichacelularesController */
/* @var $model Fichacelulares */

$this->breadcrumbs=array(
	'Fichacelulares'=>array('index'),
	$model->idfichacelular=>array('view','id'=>$model->idfichacelular),
	'Update',
);

$this->menu=array(
	
	array('label'=>'Crear ficha', 'url'=>array('create')),
	array('label'=>'Administrar fichas', 'url'=>array('admin')),
);
?>

<h1>Actualizar ficha <?php echo $model->idfichacelular; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>