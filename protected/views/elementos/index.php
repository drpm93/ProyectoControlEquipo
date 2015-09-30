<?php
/* @var $this ElementosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Elementoses',
);

$this->menu=array(
	array('label'=>'Crear elementos', 'url'=>array('create')),
	array('label'=>'Administrar elementos', 'url'=>array('admin')),
);
?>

<h1>Elementoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
