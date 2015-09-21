<?php
/* @var $this ElementosController */
/* @var $data Elementos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idelemento')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idelemento), array('view', 'id'=>$data->idelemento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomele')); ?>:</b>
	<?php echo CHtml::encode($data->nomele); ?>
	<br />


</div>