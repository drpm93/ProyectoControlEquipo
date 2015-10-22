<?php
/* @var $this CaracteristicasController */
/* @var $model Caracteristicas */

$this->breadcrumbs=array(
	'Caracteristicases'=>array('index'),
	$model->idcaracteristica,
);

$this->menu=array(
	
	array('label'=>'Crear caracteristica a nueva ficha', 'url'=>array('create')),
        array('label'=>'Administrar caracteristicas', 'url'=>array('admin')),
);
?>

<h1>Vista de caracteristica #<?php echo $model->idcaracteristica; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idcaracteristica',
		
		array(
                    'name' =>'idficha',
                    'value'=>$model->pkficha->nficha),
                array(
                    'name' =>'idelemento',
                    'value'=>$model->pkelemento->nomele),
		'aplica',
		'noaplica',
		array(
                    'name' =>'idmarca',
                    'value'=>$model->pkmarca->nommarca),
		'modelo',
		'nserie',
		'cantidad',
		'tipo',
		'caracteristica',
	),
)); 
?>

<?php 
echo CHtml::link(CHtml::image(Yii::app()->baseUrl."/images/nuevo.jpg","Agregar a la misma ficha",array("title"=>"Agregar a la misma ficha")),array('create_nuevo','id'=>$model->idficha)); ?>

