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
		
		'idficha',    
		
		
		/*array('name'=> 'aplica',
                'value'=> '$data->aplica ? "X": "";',
                    'sortable'=>false,
                    'filter' =>false,
                    'htmlOptions'=>array('style'=>'height:40px;width:100px'),
                ),*/
                array(
                    'name' =>'caracteristica',
                    'value'=>'$data->caracteristica',
                    'filter'=>false,
                    'htmlOptions'=>array('style'=>'height:40px;width:150px'),),     
		
                array(
                    'name' =>'idelemento',
                    'value'=>'$data->pkelemento->nomele',
                    'filter'=>false,
                    'htmlOptions'=>array('style'=>'height:40px;width:200px'),), 
		
		
		array(
                    'name' =>'idmarca',
                    'value'=>'$data->pkmarca->nommarca',
                    'filter'=>false,
                    'htmlOptions'=>array('style'=>'height:40px;width:200px'),), 
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