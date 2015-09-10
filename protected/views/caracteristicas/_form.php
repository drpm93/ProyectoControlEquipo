<?php
/* @var $this CaracteristicasController */
/* @var $model Caracteristicas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'caracteristicas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idficha'); ?>
		<?php echo $form->textField($model,'idficha'); ?>
		<?php echo $form->error($model,'idficha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aplica'); ?>
		<?php echo $form->checkBox($model,'aplica'); ?>
		<?php echo $form->error($model,'aplica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'noaplica'); ?>
		<?php echo $form->checkBox($model,'noaplica'); ?>
		<?php echo $form->error($model,'noaplica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idmarca'); ?>
		<?php echo $form->textField($model,'idmarca'); ?>
		<?php echo $form->error($model,'idmarca'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modelo'); ?>
		<?php echo $form->textField($model,'modelo',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'modelo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nserie'); ?>
		<?php echo $form->textField($model,'nserie',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'nserie'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad'); ?>
		<?php echo $form->error($model,'cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'caracteristica'); ?>
		<?php echo $form->textField($model,'caracteristica',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'caracteristica'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->