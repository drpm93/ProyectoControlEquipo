<?php
/* @var $this ElementosController */
/* @var $model Elementos */

$this->breadcrumbs=array(
	'Elementoses'=>array('index'),
	$model->idelemento,
);

$this->menu=array(
	
	array('label'=>'Crear elemento', 'url'=>array('create')),
	array('label'=>'Actualizar elemento', 'url'=>array('update', 'id'=>$model->idelemento)),
	array('label'=>'Eliminar elemento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idelemento),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar elementos', 'url'=>array('admin')),
);
?>

<h1>VISTA DE ELEMENTO #<?php echo $model->idelemento; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idelemento',
		'nomele',
		
	),
)); ?>
