<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'evento-form',
    'enableAjaxValidation'=>false,
'enableClientValidation'=>true,
    'type'=>'horizontal',
'clientOptions' => array(
'validateOnSubmit' => true,)
)); ?>
<p class="help-block">Los Campos con <span class="required">*</span> son requeridos.</p>


	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nficha'); ?>
		<?php echo $form->textField($model,'nficha',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'nficha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idarea'); ?>
		<?php echo $form->textField($model,'idarea'); ?>
		<?php echo $form->error($model,'idarea'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idactividad'); ?>
		<?php echo $form->textField($model,'idactividad'); ?>
		<?php echo $form->error($model,'idactividad'); ?>
	</div>

	        <?php echo $form->datePickerGroup($model,'fecha',array('widgetOptions'=>array('options'=>array('format'=>'yyyy/mm/dd'),'htmlOptions'=>array('class'=>'span5')), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>', 'append'=>'Selecciona la Fecha Inicial del Evento')); ?>


	<div class="row">
		<?php echo $form->labelEx($model,'responsable'); ?>
		<?php echo $form->textField($model,'responsable',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'responsable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'antiguedad'); ?>
		<?php echo $form->textField($model,'antiguedad',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'antiguedad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ip'); ?>
		<?php echo $form->textField($model,'ip',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'ip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mac'); ?>
		<?php echo $form->textField($model,'mac',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'mac'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'wireless'); ?>
		<?php echo $form->textField($model,'wireless',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'wireless'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nomusuequi'); ?>
		<?php echo $form->textField($model,'nomusuequi',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nomusuequi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nomusured'); ?>
		<?php echo $form->textField($model,'nomusured',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nomusured'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->