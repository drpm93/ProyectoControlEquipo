<?php
/* @var $this DireccionesController */
/* @var $model Direcciones */

$this->breadcrumbs=array(
	'Direcciones'=>array('index'),
	'Manage',
);

$this->menu=array(
	
	array('label'=>'Crear Dirección', 'url'=>array('create')),
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

<h1>Lista de direcciones</h1>


<?php $this->widget('booster.widgets.TbGridView', array(
	'id'=>'direcciones-grid',
	'dataProvider'=>$model->search(),
        'type' => 'striped bordered condensed',
	'filter'=>$model,
	'columns'=>array(
		array(
                    'name' =>'IP',
                    'value'=>'$data->pkficha->ip',
                    'filter'=>false,
                    'htmlOptions'=>array('style'=>'height:40px;width:200px'),),
		array(
                    'name' =>'TERMINAL',
                    'value'=>'$data->pkficha->pkdepartamento->nomdepar',
                    'filter'=>false,
                    'htmlOptions'=>array('style'=>'height:40px;width:200px'),),
                array(
                    'name' =>'USUARIO',
                    'value'=>'$data->pkficha->pkusuario->nomusu',
                    'filter'=>false,
                    'htmlOptions'=>array('style'=>'height:40px;width:200px'),),
                array(
                    'name' =>'ACCESO',
                    'value'=>'$data->pkacceso->nomacceso',
                    'filter'=>false,
                    'htmlOptions'=>array('style'=>'height:40px;width:200px'),),
		array('name'=> 'messenger',
                'value'=> '$data->messenger ? "Si": "No";',
                    'sortable'=>false,
                    'filter' =>false
                ),
                array('name'=> 'googletalk',
                'value'=> '$data->googletalk ? "Si": "No";',
                    'sortable'=>false,
                    'filter' =>false
                ),
		array('name'=> 'correo',
                'value'=> '$data->correo ? "Si": "No";',
                //'filter'=> array(1=>'si',0=>'no'),
                    'sortable'=>false,
                    'filter' =>false
                ),
		
		array(
                    'name' =>'adicional',
                    'value'=>'$data->adicional',
                    'filter'=>false,
                    'htmlOptions'=>array('style'=>'height:40px;width:200px'),),
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
