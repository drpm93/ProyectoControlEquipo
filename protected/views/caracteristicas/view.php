<?php
/* @var $this CaracteristicasController */
/* @var $model Caracteristicas */

$this->breadcrumbs=array(
	'Caracteristicases'=>array('index'),
	$model->idcaracteristica,
);

$this->menu=array(
	
	array('label'=>'Crear caracteristica a nueva ficha', 'url'=>array('create')),
        array('label'=>'Lista de caracteristicas', 'url'=>array('admin')),
);
?>

<h1>View Caracteristicas #<?php echo $model->idcaracteristica; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idcaracteristica',
		'idficha',
		
		'aplica',
		'noaplica',
		'idmarca',
		'modelo',
		'nserie',
		'cantidad',
		'tipo',
		'caracteristica',
	),
)); ?>

<?php echo CHtml::link(CHtml::image(Yii::app()->baseUrl."/images/nuevo.jpg","Agregar a la misma ficha",array("title"=>"Agregar a la misma ficha")),array("create_nuevo")); ?>

