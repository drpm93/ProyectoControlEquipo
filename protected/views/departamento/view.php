<?php
/* @var $this DepartamentoController */
/* @var $model Departamento */

$this->breadcrumbs=array(
	'Departamentos'=>array('index'),
	$model->iddepartamento,
);

$this->menu=array(
	
	array('label'=>'Crear departamento', 'url'=>array('create')),
	array('label'=>'Actualizar departamento', 'url'=>array('update', 'id'=>$model->iddepartamento)),
	array('label'=>'Eliminar departamento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->iddepartamento),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administar departamentos', 'url'=>array('admin')),
);
?>

<h1>Vista de departamento #<?php echo $model->iddepartamento; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'iddepartamento',
		'nomdepar',
	),
)); ?>
