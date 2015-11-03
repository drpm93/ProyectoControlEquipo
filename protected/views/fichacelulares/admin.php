<?php
/* @var $this FichacelularesController */
/* @var $model Fichacelulares */

$this->breadcrumbs=array(
	'Fichacelulares'=>array('index'),
	'Lista de fichas de equipos celulares',
);

$this->menu=array(
	array('label'=>'Crear ficha de equipo celular', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#fichacelulares-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Lista de fichas de equipos celulares</h1>

<?php echo CHtml::link('','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('booster.widgets.TbGridView', array(
	'id'=>'fichacelulares-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idfichacelular',
		'numero',
		'duenio',
		'responsable',
		//'simcard',
		//'imei',
		/*
		'marca',
		'modelo',
		'cargador',
		'microsd',
		'auriculares',
		'caja',
		'cupo',
                */
		'fechaini',
		'fechafinal',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
