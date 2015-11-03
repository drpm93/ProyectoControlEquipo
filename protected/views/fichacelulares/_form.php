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

	<?php echo $form->textFieldGroup($model,'numero',array('widgetOptions'=>array('htmlOptions'=>array('autocomplete'=>'off','style'=>'text-transform:uppercase','onblur'=>'this.value=this.value.toUpperCase()')))); ?>
        <?php echo $form->textFieldGroup($model,'duenio',array('widgetOptions'=>array('htmlOptions'=>array('autocomplete'=>'off','style'=>'text-transform:uppercase','onblur'=>'this.value=this.value.toUpperCase()')))); ?>
        <?php echo $form->textFieldGroup($model,'responsable',array('widgetOptions'=>array('htmlOptions'=>array('autocomplete'=>'off','style'=>'text-transform:uppercase','onblur'=>'this.value=this.value.toUpperCase()')))); ?>
        <?php echo $form->textFieldGroup($model,'simcard',array('widgetOptions'=>array('htmlOptions'=>array('autocomplete'=>'off','style'=>'text-transform:uppercase','onblur'=>'this.value=this.value.toUpperCase()')))); ?>
        <?php echo $form->textFieldGroup($model,'imei',array('widgetOptions'=>array('htmlOptions'=>array('autocomplete'=>'off','style'=>'text-transform:uppercase','onblur'=>'this.value=this.value.toUpperCase()')))); ?>
        <?php echo $form->textFieldGroup($model,'marca',array('widgetOptions'=>array('htmlOptions'=>array('autocomplete'=>'off','style'=>'text-transform:uppercase','onblur'=>'this.value=this.value.toUpperCase()')))); ?>
        <?php echo $form->textFieldGroup($model,'modelo',array('widgetOptions'=>array('htmlOptions'=>array('autocomplete'=>'off','style'=>'text-transform:uppercase','onblur'=>'this.value=this.value.toUpperCase()')))); ?>

	<?php echo $form->checkBoxGroup($model,'cargador'); ?>
        <?php echo $form->checkBoxGroup($model,'microsd'); ?>
        <?php echo $form->checkBoxGroup($model,'auriculares'); ?>
        <?php echo $form->checkBoxGroup($model,'caja'); ?>
	
        <?php echo $form->textFieldGroup($model,'cupo',array('widgetOptions'=>array('htmlOptions'=>array('autocomplete'=>'off','style'=>'text-transform:uppercase','onblur'=>'this.value=this.value.toUpperCase()')))); ?>

        <?php echo $form->datePickerGroup($model,'fechaini',array('widgetOptions'=>array('options'=>array('format'=>'yyyy/mm/dd'),'htmlOptions'=>array('class'=>'span5')), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>', 'append'=>'Selecciona la Fecha de creación')); ?>
        <?php echo $form->datePickerGroup($model,'fechafinal',array('widgetOptions'=>array('options'=>array('format'=>'yyyy/mm/dd'),'htmlOptions'=>array('class'=>'span5')), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>', 'append'=>'Selecciona la Fecha de creación')); ?>


	<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Guardar',
		)); ?>
</div>


<?php $this->endWidget(); ?>

</div><!-- form -->