<?php
/* @var $this DireccionesController */
/* @var $model Direcciones */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'iddireccion'); ?>
		<?php echo $form->textField($model,'iddireccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'terminal'); ?>
		<?php echo $form->textField($model,'terminal',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idusuario'); ?>
		<?php echo $form->textField($model,'idusuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idacceso'); ?>
		<?php echo $form->textField($model,'idacceso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'messenger'); ?>
		<?php echo $form->checkBox($model,'messenger'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'googletalk'); ?>
		<?php echo $form->checkBox($model,'googletalk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'correo'); ?>
		<?php echo $form->checkBox($model,'correo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'adicional'); ?>
		<?php echo $form->textField($model,'adicional',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idficha'); ?>
		<?php echo $form->textField($model,'idficha'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->