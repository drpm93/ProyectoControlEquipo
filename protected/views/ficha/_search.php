<?php
/* @var $this FichaController */
/* @var $model Ficha */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idficha'); ?>
		<?php echo $form->textField($model,'idficha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nficha'); ?>
		<?php echo $form->textField($model,'nficha',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idarea'); ?>
		<?php echo $form->textField($model,'idarea'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idactividad'); ?>
		<?php echo $form->textField($model,'idactividad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'responsable'); ?>
		<?php echo $form->textField($model,'responsable',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'antiguedad'); ?>
		<?php echo $form->textField($model,'antiguedad',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ip'); ?>
		<?php echo $form->textField($model,'ip',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mac'); ?>
		<?php echo $form->textField($model,'mac',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'wireless'); ?>
		<?php echo $form->textField($model,'wireless',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nomusuequi'); ?>
		<?php echo $form->textField($model,'nomusuequi',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nomusured'); ?>
		<?php echo $form->textField($model,'nomusured',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->