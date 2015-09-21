<?php
/* @var $this ElementosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Elementoses',
);

$this->menu=array(
	array('label'=>'Create Elementos', 'url'=>array('create')),
	array('label'=>'Manage Elementos', 'url'=>array('admin')),
);
?>

<h1>Elementoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
