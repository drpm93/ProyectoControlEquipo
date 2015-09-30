<?php
/* @var $this AccesosController */
/* @var $model Accesos */

$this->breadcrumbs=array(
	'Accesoses'=>array('index'),
	'Manage',
);

$this->menu=array(
	
	array('label'=>'Crear acceso', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#accesos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Lista de accesos</h1>



<?php $this->widget('booster.widgets.TbGridView', array(
	'id'=>'accesos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idacceso',
		'nomacceso',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
