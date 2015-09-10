<?php
/* @var $this AccesosController */
/* @var $data Accesos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idacceso')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idacceso), array('view', 'id'=>$data->idacceso)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomacceso')); ?>:</b>
	<?php echo CHtml::encode($data->nomacceso); ?>
	<br />


</div>