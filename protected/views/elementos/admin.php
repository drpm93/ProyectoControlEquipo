<?php
/* @var $this ElementosController */
/* @var $model Elementos */

$this->breadcrumbs=array(
	'Elementoses'=>array('index'),
	'Administrar elementos',
);

$this->menu=array(
	array('label'=>'Crear elemento', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#elementos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Lista de elementos</h1>



<?php $this->widget('booster.widgets.TbGridView', array(
	'id'=>'elementos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idelemento',
		'nomele',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
