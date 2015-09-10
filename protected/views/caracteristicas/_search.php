<?php
/* @var $this CaracteristicasController */
/* @var $model Caracteristicas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idcaracteristica'); ?>
		<?php echo $form->textField($model,'idcaracteristica'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idficha'); ?>
		<?php echo $form->textField($model,'idficha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'aplica'); ?>
		<?php echo $form->checkBox($model,'aplica'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'noaplica'); ?>
		<?php echo $form->checkBox($model,'noaplica'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idmarca'); ?>
		<?php echo $form->textField($model,'idmarca'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'modelo'); ?>
		<?php echo $form->textField($model,'modelo',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nserie'); ?>
		<?php echo $form->textField($model,'nserie',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'caracteristica'); ?>
		<?php echo $form->textField($model,'caracteristica',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->