<?php
/* @var $this FichacelularesController */
/* @var $data Fichacelulares */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idfichacelular')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idfichacelular), array('view', 'id'=>$data->idfichacelular)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero')); ?>:</b>
	<?php echo CHtml::encode($data->numero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('duenio')); ?>:</b>
	<?php echo CHtml::encode($data->duenio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('responsable')); ?>:</b>
	<?php echo CHtml::encode($data->responsable); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('simcard')); ?>:</b>
	<?php echo CHtml::encode($data->simcard); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imei')); ?>:</b>
	<?php echo CHtml::encode($data->imei); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marca')); ?>:</b>
	<?php echo CHtml::encode($data->marca); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('modelo')); ?>:</b>
	<?php echo CHtml::encode($data->modelo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cargador')); ?>:</b>
	<?php echo CHtml::encode($data->cargador); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('microsd')); ?>:</b>
	<?php echo CHtml::encode($data->microsd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('auriculares')); ?>:</b>
	<?php echo CHtml::encode($data->auriculares); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('caja')); ?>:</b>
	<?php echo CHtml::encode($data->caja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cupo')); ?>:</b>
	<?php echo CHtml::encode($data->cupo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaini')); ?>:</b>
	<?php echo CHtml::encode($data->fechaini); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechafinal')); ?>:</b>
	<?php echo CHtml::encode($data->fechafinal); ?>
	<br />

	*/ ?>

</div>