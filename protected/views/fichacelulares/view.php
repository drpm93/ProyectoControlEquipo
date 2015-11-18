<?php
/* @var $this FichacelularesController */
/* @var $model Fichacelulares */

$this->breadcrumbs=array(
	'Fichacelulares'=>array('index'),
	$model->idfichacelular,
);

$this->menu=array(
	
	array('label'=>'Crear ficha', 'url'=>array('create')),
	array('label'=>'Actualizar ficha', 'url'=>array('update', 'id'=>$model->idfichacelular)),
	array('label'=>'Eliminar ficha', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idfichacelular),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar fichas', 'url'=>array('admin')),
);
?>

<h1>Ver Ficha #<?php echo $model->idfichacelular; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idfichacelular',
		'numero',
		'duenio',
		'responsable',
		'simcard',
		'imei',
		'marca',
		'modelo',
		'cargador',
		'microsd',
		'auriculares',
		'caja',
		'cupo',
		'fechaini',
		'fechafinal',
	),
)); ?>
