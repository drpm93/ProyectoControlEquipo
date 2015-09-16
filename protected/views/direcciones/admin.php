<?php
/* @var $this DireccionesController */
/* @var $model Direcciones */

$this->breadcrumbs=array(
	'Direcciones'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Direcciones', 'url'=>array('index')),
	array('label'=>'Create Direcciones', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#direcciones-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Direcciones</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'direcciones-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'iddireccion',
		'idacceso',
		'messenger',
		'googletalk',
		
		'correo',
		'adicional',
		'idficha',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
