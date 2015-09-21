<?php
/* @var $this ElementosController */
/* @var $model Elementos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idelemento'); ?>
		<?php echo $form->textField($model,'idelemento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nomele'); ?>
		<?php echo $form->textField($model,'nomele',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->