<?php
/* @var $this MarcaController */
/* @var $model Marca */

$this->breadcrumbs=array(
	'Marcas'=>array('index'),
	$model->idmarca,
);

$this->menu=array(
	
	array('label'=>'Crear marca', 'url'=>array('create')),
	array('label'=>'Actualizar marca', 'url'=>array('update', 'id'=>$model->idmarca)),
	array('label'=>'Eliminar marca', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idmarca),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar marcas', 'url'=>array('admin')),
);
?>

<h1>Vista de marca #<?php echo $model->idmarca; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idmarca',
		'nommarca',
	),
)); ?>
