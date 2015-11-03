<?php
/* @var $this BajacelularesController */
/* @var $model Bajacelulares */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idbajacelular'); ?>
		<?php echo $form->textField($model,'idbajacelular'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idfichacelular'); ?>
		<?php echo $form->textField($model,'idfichacelular'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numero'); ?>
		<?php echo $form->textField($model,'numero',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'duenio'); ?>
		<?php echo $form->textField($model,'duenio',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'responsable'); ?>
		<?php echo $form->textField($model,'responsable',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'simcard'); ?>
		<?php echo $form->textField($model,'simcard',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'imei'); ?>
		<?php echo $form->textField($model,'imei',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'marca'); ?>
		<?php echo $form->textField($model,'marca',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'modelo'); ?>
		<?php echo $form->textField($model,'modelo',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cargador'); ?>
		<?php echo $form->checkBox($model,'cargador'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'microsd'); ?>
		<?php echo $form->checkBox($model,'microsd'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'auriculares'); ?>
		<?php echo $form->checkBox($model,'auriculares'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'caja'); ?>
		<?php echo $form->checkBox($model,'caja'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cupo'); ?>
		<?php echo $form->textField($model,'cupo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaini'); ?>
		<?php echo $form->textField($model,'fechaini'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechafinal'); ?>
		<?php echo $form->textField($model,'fechafinal'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->