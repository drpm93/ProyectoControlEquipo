<?php
/* @var $this FichaController */
/* @var $model Ficha */

$this->breadcrumbs=array(
	'Fichas'=>array('index'),
	$model->idficha=>array('view','id'=>$model->idficha),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de Fichas', 'url'=>array('index')),
	array('label'=>'Crear Ficha', 'url'=>array('create')),
	array('label'=>'Ver Ficha', 'url'=>array('view', 'id'=>$model->idficha)),
	array('label'=>'Administración de fichas', 'url'=>array('admin')),
);
?>

<h1>Modificación de Ficha #<?php echo $model->nficha; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>