<?php
/* @var $this ActividadController */
/* @var $data Actividad */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idactividad')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idactividad), array('view', 'id'=>$data->idactividad)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomactividad')); ?>:</b>
	<?php echo CHtml::encode($data->nomactividad); ?>
	<br />


</div>