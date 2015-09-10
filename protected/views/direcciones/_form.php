<?php
/* @var $this DireccionesController */
/* @var $model Direcciones */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'direcciones-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'terminal'); ?>
		<?php echo $form->textField($model,'terminal',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'terminal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idusuario'); ?>
		<?php echo $form->textField($model,'idusuario'); ?>
		<?php echo $form->error($model,'idusuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idacceso'); ?>
		<?php echo $form->textField($model,'idacceso'); ?>
		<?php echo $form->error($model,'idacceso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'messenger'); ?>
		<?php echo $form->checkBox($model,'messenger'); ?>
		<?php echo $form->error($model,'messenger'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'googletalk'); ?>
		<?php echo $form->checkBox($model,'googletalk'); ?>
		<?php echo $form->error($model,'googletalk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'correo'); ?>
		<?php echo $form->checkBox($model,'correo'); ?>
		<?php echo $form->error($model,'correo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'adicional'); ?>
		<?php echo $form->textField($model,'adicional',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'adicional'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idficha'); ?>
		<?php echo $form->textField($model,'idficha'); ?>
		<?php echo $form->error($model,'idficha'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->