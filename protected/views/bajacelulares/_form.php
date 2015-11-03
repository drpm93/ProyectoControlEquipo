<?php
/* @var $this BajacelularesController */
/* @var $model Bajacelulares */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bajacelulares-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idfichacelular'); ?>
		<?php echo $form->textField($model,'idfichacelular'); ?>
		<?php echo $form->error($model,'idfichacelular'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numero'); ?>
		<?php echo $form->textField($model,'numero',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'numero'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'duenio'); ?>
		<?php echo $form->textField($model,'duenio',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'duenio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'responsable'); ?>
		<?php echo $form->textField($model,'responsable',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'responsable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'simcard'); ?>
		<?php echo $form->textField($model,'simcard',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'simcard'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'imei'); ?>
		<?php echo $form->textField($model,'imei',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'imei'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'marca'); ?>
		<?php echo $form->textField($model,'marca',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'marca'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modelo'); ?>
		<?php echo $form->textField($model,'modelo',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'modelo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cargador'); ?>
		<?php echo $form->checkBox($model,'cargador'); ?>
		<?php echo $form->error($model,'cargador'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'microsd'); ?>
		<?php echo $form->checkBox($model,'microsd'); ?>
		<?php echo $form->error($model,'microsd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'auriculares'); ?>
		<?php echo $form->checkBox($model,'auriculares'); ?>
		<?php echo $form->error($model,'auriculares'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'caja'); ?>
		<?php echo $form->checkBox($model,'caja'); ?>
		<?php echo $form->error($model,'caja'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cupo'); ?>
		<?php echo $form->textField($model,'cupo'); ?>
		<?php echo $form->error($model,'cupo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaini'); ?>
		<?php echo $form->textField($model,'fechaini'); ?>
		<?php echo $form->error($model,'fechaini'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fechafinal'); ?>
		<?php echo $form->textField($model,'fechafinal'); ?>
		<?php echo $form->error($model,'fechafinal'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->