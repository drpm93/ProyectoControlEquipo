<?php
/* @var $this FichaController */
/* @var $model Ficha */

$this->breadcrumbs=array(
	'Fichas'=>array('index'),
	$model->idficha,
);

$this->menu=array(
	array('label'=>'List Ficha', 'url'=>array('index')),
	array('label'=>'Create Ficha', 'url'=>array('create')),
	array('label'=>'Update Ficha', 'url'=>array('update', 'id'=>$model->idficha)),
	array('label'=>'Delete Ficha', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idficha),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ficha', 'url'=>array('admin')),
);
?>

<h1>View Ficha #<?php echo $model->idficha; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idficha',
		'nficha',
		'idarea',
		'idactividad',
		'fecha',
		'responsable',
		'antiguedad',
		'ip',
		'mac',
		'wireless',
		'nomusuequi',
		'nomusured',
	),
)); ?>
