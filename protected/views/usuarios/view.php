<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarioses'=>array('index'),
	$model->idusuario,
);

$this->menu=array(
	
	array('label'=>'Crear usuario', 'url'=>array('create')),
	array('label'=>'Actualizar usuario', 'url'=>array('update', 'id'=>$model->idusuario)),
	array('label'=>'Eliminar usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idusuario),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar usuarios', 'url'=>array('admin')),
);
?>

<h1>View Usuarios #<?php echo $model->idusuario; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idusuario',
		'nomusu',
	),
)); ?>
