<?php
/* @var $this DireccionesController */
/* @var $model Direcciones */

$this->breadcrumbs=array(
	'Direcciones'=>array('index'),
	$model->iddireccion,
);

$this->menu=array(
	
	array('label'=>'Crear dirección', 'url'=>array('create')),
	array('label'=>'Actualizar dirección', 'url'=>array('update', 'id'=>$model->iddireccion)),
	array('label'=>'Eliminar dirección', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->iddireccion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar direcciones', 'url'=>array('admin')),
);
?>

<h1>View Direcciones #<?php echo $model->iddireccion; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'iddireccion',
		'idacceso',
		'messenger',
		'googletalk',
		'correo',
		'adicional',
		'idficha',
	),
)); ?>
