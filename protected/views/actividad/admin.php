<?php
/* @var $this ActividadController */
/* @var $model Actividad */

$this->breadcrumbs=array(
	'Actividads'=>array('index'),
	'Manage',
);

$this->menu=array(
	
	array('label'=>'Crear actividad', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#actividad-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Lista de actividades</h1>



<?php $this->widget('booster.widgets.TbGridView', array(
	'id'=>'actividad-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idactividad',
		'nomactividad',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
