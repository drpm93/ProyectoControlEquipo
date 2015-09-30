<?php
/* @var $this DepartamentoController */
/* @var $model Departamento */

$this->breadcrumbs=array(
	'Departamentos'=>array('index'),
	$model->iddepartamento=>array('view','id'=>$model->iddepartamento),
	'Update',
);

$this->menu=array(
	
	array('label'=>'Crear departamento', 'url'=>array('create')),
	array('label'=>'Ver departamento', 'url'=>array('view', 'id'=>$model->iddepartamento)),
	array('label'=>'Administrar departamentos', 'url'=>array('admin')),
);
?>

<h1>Actualizar departamento # <?php echo $model->iddepartamento; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>