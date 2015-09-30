<?php
/* @var $this ElementosController */
/* @var $model Elementos */

$this->breadcrumbs=array(
	'Elementoses'=>array('index'),
	$model->idelemento=>array('view','id'=>$model->idelemento),
	'Update',
);

$this->menu=array(
	
	array('label'=>'Crear elemento', 'url'=>array('create')),
	array('label'=>'Vista de elemento', 'url'=>array('view', 'id'=>$model->idelemento)),
	array('label'=>'Administrar elementos', 'url'=>array('admin')),
);
?>

<h1>MODIFICACIÓN DE ELEMENTO # <?php echo $model->idelemento; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>