<?php
/* @var $this BajacelularesController */
/* @var $model Bajacelulares */

$this->breadcrumbs=array(
	'Bajacelulares'=>array('index'),
	$model->idbajacelular=>array('view','id'=>$model->idbajacelular),
	'Update',
);

$this->menu=array(
	array('label'=>'List Bajacelulares', 'url'=>array('index')),
	array('label'=>'Create Bajacelulares', 'url'=>array('create')),
	array('label'=>'View Bajacelulares', 'url'=>array('view', 'id'=>$model->idbajacelular)),
	array('label'=>'Manage Bajacelulares', 'url'=>array('admin')),
);
?>

<h1>Update Bajacelulares <?php echo $model->idbajacelular; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>