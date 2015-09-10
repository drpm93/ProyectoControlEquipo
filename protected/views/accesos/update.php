<?php
/* @var $this AccesosController */
/* @var $model Accesos */

$this->breadcrumbs=array(
	'Accesoses'=>array('index'),
	$model->idacceso=>array('view','id'=>$model->idacceso),
	'Update',
);

$this->menu=array(
	array('label'=>'List Accesos', 'url'=>array('index')),
	array('label'=>'Create Accesos', 'url'=>array('create')),
	array('label'=>'View Accesos', 'url'=>array('view', 'id'=>$model->idacceso)),
	array('label'=>'Manage Accesos', 'url'=>array('admin')),
);
?>

<h1>Update Accesos <?php echo $model->idacceso; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>