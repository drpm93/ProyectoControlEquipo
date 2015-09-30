<?php
/* @var $this AccesosController */
/* @var $model Accesos */

$this->breadcrumbs=array(
	'Accesoses'=>array('index'),
	$model->idacceso=>array('view','id'=>$model->idacceso),
	'Update',
);

$this->menu=array(
	
	array('label'=>'Crear acceso', 'url'=>array('create')),
	array('label'=>'Ver acceso', 'url'=>array('view', 'id'=>$model->idacceso)),
	array('label'=>'Administrar accesos', 'url'=>array('admin')),
);
?>

<h1>Actualizar acceso # <?php echo $model->idacceso; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>