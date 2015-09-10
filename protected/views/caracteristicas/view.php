<?php
/* @var $this CaracteristicasController */
/* @var $model Caracteristicas */

$this->breadcrumbs=array(
	'Caracteristicases'=>array('index'),
	$model->idcaracteristica,
);

$this->menu=array(
	array('label'=>'List Caracteristicas', 'url'=>array('index')),
	array('label'=>'Create Caracteristicas', 'url'=>array('create')),
	array('label'=>'Update Caracteristicas', 'url'=>array('update', 'id'=>$model->idcaracteristica)),
	array('label'=>'Delete Caracteristicas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idcaracteristica),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Caracteristicas', 'url'=>array('admin')),
);
?>

<h1>View Caracteristicas #<?php echo $model->idcaracteristica; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idcaracteristica',
		'idficha',
		'descripcion',
		'aplica',
		'noaplica',
		'idmarca',
		'modelo',
		'nserie',
		'cantidad',
		'tipo',
		'caracteristica',
	),
)); ?>
