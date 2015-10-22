<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'evento-form',
    'enableAjaxValidation'=>false,
'enableClientValidation'=>true,
    'type'=>'horizontal',
'clientOptions' => array(
'validateOnSubmit' => true,)
)); ?>
<p class="help-block">Los Campos con <span class="required">*</span> son requeridos.</p>

	
        <?php $datosac = CHtml::listData(Accesos::model()->findAll(),'idacceso','nomacceso'); ?>
	<?php echo $form->dropDownListGroup($model, 'idacceso',array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),'widgetOptions' => array('data' => $datosac))); ?>

	<?php echo $form->checkBoxGroup($model,'messenger'); ?>
        <?php echo $form->checkBoxGroup($model,'googletalk'); ?>
	<?php echo $form->checkBoxGroup($model,'correo'); ?>	
        <?php echo $form->textFieldGroup($model,'adicional',array('widgetOptions'=>array('htmlOptions'=>array('autocomplete'=>'off','style'=>'text-transform:uppercase','onblur'=>'this.value=this.value.toUpperCase()')))); ?>

	
        <?php $datos1 = CHtml::listData(Ficha::model()->findAll(),'idficha','ip'); ?>
	<?php echo $form->dropDownListGroup($model, 'idficha',array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),'widgetOptions' => array('data' => $datos1))); ?>

	

	<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Guardar',
		)); ?>
</div>

<?php $this->endWidget(); ?>

