<?php
/* @var $this FichaController */
/* @var $model Ficha */

$this->breadcrumbs=array(
	'Fichas'=>array('index'),
	$model->idficha,
);

$this->menu=array(
	
	array('label'=>'Crear ficha', 'url'=>array('create')),
	array('label'=>'Actualizar ficha', 'url'=>array('update', 'id'=>$model->idficha)),
	array('label'=>'Eliminar ficha', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idficha),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar fichas', 'url'=>array('admin')),
);
?>

<h1>Vista de ficha #<?php echo $model->nficha; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nficha',
		array(
                    'name' =>'idarea',
                    'value'=>$model->pkdepartamento->nomdepar),
		array(
                    'name' =>'idactividad',
                    'value'=>$model->pkactividad->nomactividad),
                
		'fecha',
		'responsable',
		'antiguedad',
		'ip',
		'mac',
		'wireless',
		array(
                    'name' =>'idusuario',
                    'value'=>$model->pkusuario->nomusu),
		'nomusured',
	),
)); ?>
