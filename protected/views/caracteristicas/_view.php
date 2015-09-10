<?php
/* @var $this CaracteristicasController */
/* @var $data Caracteristicas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcaracteristica')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idcaracteristica), array('view', 'id'=>$data->idcaracteristica)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idficha')); ?>:</b>
	<?php echo CHtml::encode($data->idficha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aplica')); ?>:</b>
	<?php echo CHtml::encode($data->aplica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('noaplica')); ?>:</b>
	<?php echo CHtml::encode($data->noaplica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idmarca')); ?>:</b>
	<?php echo CHtml::encode($data->idmarca); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modelo')); ?>:</b>
	<?php echo CHtml::encode($data->modelo); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('nserie')); ?>:</b>
	<?php echo CHtml::encode($data->nserie); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('caracteristica')); ?>:</b>
	<?php echo CHtml::encode($data->caracteristica); ?>
	<br />

	*/ ?>

</div>