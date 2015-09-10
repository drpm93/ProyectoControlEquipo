<?php
/* @var $this CaracteristicasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Caracteristicases',
);

$this->menu=array(
	array('label'=>'Create Caracteristicas', 'url'=>array('create')),
	array('label'=>'Manage Caracteristicas', 'url'=>array('admin')),
);
?>

<h1>Caracteristicases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
