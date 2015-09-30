<?php
/* @var $this AccesosController */
/* @var $model Accesos */

$this->breadcrumbs=array(
	'Accesoses'=>array('index'),
	$model->idacceso,
);

$this->menu=array(
	
	array('label'=>'Crear acceso', 'url'=>array('create')),
	array('label'=>'Actualizar acceso', 'url'=>array('update', 'id'=>$model->idacceso)),
	array('label'=>'Eliminar acceso', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idacceso),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar accesos', 'url'=>array('admin')),
);
?>

<h1>Vista de acceso #<?php echo $model->idacceso; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idacceso',
		'nomacceso',
	),
)); ?>
