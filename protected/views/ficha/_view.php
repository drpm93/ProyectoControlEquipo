<?php
/* @var $this FichaController */
/* @var $data Ficha */
?>

<div class="view">

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('idficha')); ?>:</b>
	<?php echo CHtml::encode($data->nficha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idarea')); ?>:</b>
	<?php echo CHtml::encode($data->idarea); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idactividad')); ?>:</b>
	<?php echo CHtml::encode($data->idactividad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('responsable')); ?>:</b>
	<?php echo CHtml::encode($data->responsable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('antiguedad')); ?>:</b>
	<?php echo CHtml::encode($data->antiguedad); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ip')); ?>:</b>
	<?php echo CHtml::encode($data->ip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mac')); ?>:</b>
	<?php echo CHtml::encode($data->mac); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wireless')); ?>:</b>
	<?php echo CHtml::encode($data->wireless); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomusuequi')); ?>:</b>
	<?php echo CHtml::encode($data->nomusuequi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomusured')); ?>:</b>
	<?php echo CHtml::encode($data->nomusured); ?>
	<br />

	*/ ?>

</div>