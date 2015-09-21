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

	<?php echo $form->textFieldGroup($model,'nommarca',array('widgetOptions'=>array('htmlOptions'=>array('autocomplete'=>'off','style'=>'text-transform:uppercase','onblur'=>'this.value=this.value.toUpperCase()')))); ?>
    
	<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Guardar',
		)); ?>
</div>

<?php $this->endWidget(); ?>

