<?php
/* @var $this ElementosController */
/* @var $model Elementos */

$this->breadcrumbs=array(
	'Elementoses'=>array('index'),
	$model->idelemento=>array('view','id'=>$model->idelemento),
	'Update',
);

$this->menu=array(
	array('label'=>'List Elementos', 'url'=>array('index')),
	array('label'=>'Create Elementos', 'url'=>array('create')),
	array('label'=>'View Elementos', 'url'=>array('view', 'id'=>$model->idelemento)),
	array('label'=>'Manage Elementos', 'url'=>array('admin')),
);
?>

<h1>Update Elementos <?php echo $model->idelemento; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>