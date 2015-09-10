<?php
/* @var $this FichaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fichas',
);

$this->menu=array(
	array('label'=>'Create Ficha', 'url'=>array('create')),
	array('label'=>'Manage Ficha', 'url'=>array('admin')),
);
?>

<h1>Fichas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
