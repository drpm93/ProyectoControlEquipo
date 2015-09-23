<?php
/* @var $this CaracteristicasController */
/* @var $model Caracteristicas */

$this->breadcrumbs=array(
	'Caracteristicases'=>array('index'),
	'Manage',
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#caracteristicas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>REPORTE DE FICHAS</h1>
<?php $this->widget('booster.widgets.TbGridView', array(
	'id'=>'caracteristicas-grid',
        'type' => 'striped bordered condensed',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idcaracteristica',
		'idficha',
		
		'aplica',
		'noaplica',
		'idmarca',
		/*
		'modelo',
		'nserie',
		'cantidad',
		'tipo',
		'caracteristica',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
<br>
<br>
<center>
<div class="enlaceboton" style="width: 180px">
<?php echo CHtml::link(CHtml::image(Yii::app()->baseUrl."/images/pdf.jpg","Generar reporte PDF",array("title"=>"Exportar a PDF")),array("generarpdf"), array('target'=>'_blank')); ?>
</div>
    
</center>