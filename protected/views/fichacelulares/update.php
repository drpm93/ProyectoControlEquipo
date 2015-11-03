<?php
/* @var $this FichacelularesController */
/* @var $model Fichacelulares */

$this->breadcrumbs=array(
	'Fichacelulares'=>array('index'),
	$model->idfichacelular=>array('view','id'=>$model->idfichacelular),
	'Update',
);

$this->menu=array(
	array('label'=>'List Fichacelulares', 'url'=>array('index')),
	array('label'=>'Create Fichacelulares', 'url'=>array('create')),
	array('label'=>'View Fichacelulares', 'url'=>array('view', 'id'=>$model->idfichacelular)),
	array('label'=>'Manage Fichacelulares', 'url'=>array('admin')),
);
?>

<h1>Update Fichacelulares <?php echo $model->idfichacelular; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>