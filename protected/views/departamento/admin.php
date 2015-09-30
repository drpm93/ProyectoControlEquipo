<?php
/* @var $this DepartamentoController */
/* @var $model Departamento */

$this->breadcrumbs=array(
	'Departamentos'=>array('index'),
	'Manage',
);

$this->menu=array(
	
	array('label'=>'Crear departamento', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#departamento-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Lista de departamentos</h1>



<?php $this->widget('booster.widgets.TbGridView', array(
	'id'=>'departamento-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'iddepartamento',
		'nomdepar',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
