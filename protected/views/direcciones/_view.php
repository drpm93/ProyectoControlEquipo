<?php
/* @var $this DireccionesController */
/* @var $data Direcciones */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('iddireccion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->iddireccion), array('view', 'id'=>$data->iddireccion)); ?>
	<br />

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('idacceso')); ?>:</b>
	<?php echo CHtml::encode($data->idacceso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('messenger')); ?>:</b>
	<?php echo CHtml::encode($data->messenger); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('googletalk')); ?>:</b>
	<?php echo CHtml::encode($data->googletalk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('correo')); ?>:</b>
	<?php echo CHtml::encode($data->correo); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('adicional')); ?>:</b>
	<?php echo CHtml::encode($data->adicional); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idficha')); ?>:</b>
	<?php echo CHtml::encode($data->idficha); ?>
	<br />

	*/ ?>

</div>