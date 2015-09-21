<?php
/* @var $this ElementosController */
/* @var $model Elementos */

$this->breadcrumbs=array(
	'Elementoses'=>array('index'),
	$model->idelemento,
);

$this->menu=array(
	array('label'=>'List Elementos', 'url'=>array('index')),
	array('label'=>'Create Elementos', 'url'=>array('create')),
	array('label'=>'Update Elementos', 'url'=>array('update', 'id'=>$model->idelemento)),
	array('label'=>'Delete Elementos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idelemento),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Elementos', 'url'=>array('admin')),
);
?>

<h1>View Elementos #<?php echo $model->idelemento; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idelemento',
		'nomele',
	),
)); ?>
