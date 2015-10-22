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

	
        <?php $datosele = CHtml::listData(Elementos::model()->findAll(),'idelemento','nomele'); ?>
	<?php echo $form->dropDownListGroup($model, 'idelemento',array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),'widgetOptions' => array('data' => $datosele))); ?>
       
        <?php echo $form->checkBoxGroup($model,'aplica'); ?>
        <?php echo $form->checkBoxGroup($model,'noaplica'); ?>

	<?php $datosma = CHtml::listData(Marca::model()->findAll(),'idmarca','nommarca'); ?>
	<?php echo $form->dropDownListGroup($model, 'idmarca',array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),'widgetOptions' => array('data' => $datosma))); ?>
       
	<?php echo $form->textFieldGroup($model,'modelo',array('widgetOptions'=>array('htmlOptions'=>array('autocomplete'=>'off','style'=>'text-transform:uppercase','onblur'=>'this.value=this.value.toUpperCase()')))); ?>
        <?php echo $form->textFieldGroup($model,'nserie',array('widgetOptions'=>array('htmlOptions'=>array('autocomplete'=>'off','style'=>'text-transform:uppercase','onblur'=>'this.value=this.value.toUpperCase()')))); ?>
	<?php echo $form->textFieldGroup($model,'cantidad',array('widgetOptions'=>array('htmlOptions'=>array('autocomplete'=>'off','style'=>'text-transform:uppercase','onblur'=>'this.value=this.value.toUpperCase()')))); ?>
	<?php echo $form->textFieldGroup($model,'tipo',array('widgetOptions'=>array('htmlOptions'=>array('autocomplete'=>'off','style'=>'text-transform:uppercase','onblur'=>'this.value=this.value.toUpperCase()')))); ?>
	<?php echo $form->textFieldGroup($model,'caracteristica',array('widgetOptions'=>array('htmlOptions'=>array('autocomplete'=>'off','style'=>'text-transform:uppercase','onblur'=>'this.value=this.value.toUpperCase()')))); ?>



	<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Guardar',
		)); ?>
</div>

<?php $this->endWidget(); ?>

