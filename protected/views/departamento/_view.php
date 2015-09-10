<?php
/* @var $this DepartamentoController */
/* @var $data Departamento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('iddepartamento')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->iddepartamento), array('view', 'id'=>$data->iddepartamento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomdepar')); ?>:</b>
	<?php echo CHtml::encode($data->nomdepar); ?>
	<br />


</div>