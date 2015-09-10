<?php
/* @var $this FichaController */
/* @var $model Ficha */

$this->breadcrumbs=array(
	'Fichas'=>array('index'),
	$model->idficha=>array('view','id'=>$model->idficha),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ficha', 'url'=>array('index')),
	array('label'=>'Create Ficha', 'url'=>array('create')),
	array('label'=>'View Ficha', 'url'=>array('view', 'id'=>$model->idficha)),
	array('label'=>'Manage Ficha', 'url'=>array('admin')),
);
?>

<h1>Update Ficha <?php echo $model->idficha; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>