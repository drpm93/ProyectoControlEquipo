<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarioses'=>array('index'),
	$model->idusuario=>array('view','id'=>$model->idusuario),
	'Update',
);

$this->menu=array(
	
	array('label'=>'Crear usuario', 'url'=>array('create')),
	array('label'=>'Vista de usuario', 'url'=>array('view', 'id'=>$model->idusuario)),
	array('label'=>'Administrar usuarios', 'url'=>array('admin')),
);
?>

<h1>Actualizar usuario # <?php echo $model->idusuario; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>