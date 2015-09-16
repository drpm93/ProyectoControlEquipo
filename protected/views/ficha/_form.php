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
        
       <?php echo $form->textFieldGroup($model,'nficha',array('widgetOptions'=>array('htmlOptions'=>array('autocomplete'=>'off','style'=>'text-transform:uppercase','onblur'=>'this.value=this.value.toUpperCase()')))); ?>
        <?php echo $form->textFieldGroup($model,'ubicacion',array('widgetOptions'=>array('htmlOptions'=>array('autocomplete'=>'off','style'=>'text-transform:uppercase','onblur'=>'this.value=this.value.toUpperCase()')))); ?>

        <?php $datos1 = CHtml::listData(Departamento::model()->findAll(),'iddepartamento','nomdepar'); ?>
	<?php echo $form->dropDownListGroup($model, 'idarea',array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),'widgetOptions' => array('data' => $datos1))); ?>

        <?php $datos2 = CHtml::listData(Actividad::model()->findAll(),'idactividad','nomactividad'); ?>
	<?php echo $form->dropDownListGroup($model, 'idactividad',array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),'widgetOptions' => array('data' => $datos2))); ?>

	
	

	        <?php echo $form->datePickerGroup($model,'fecha',array('widgetOptions'=>array('options'=>array('format'=>'yyyy/mm/dd'),'htmlOptions'=>array('class'=>'span5')), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>', 'append'=>'Selecciona la Fecha de creación')); ?>

                <?php echo $form->textFieldGroup($model,'responsable',array('widgetOptions'=>array('htmlOptions'=>array('autocomplete'=>'off','style'=>'text-transform:uppercase','onblur'=>'this.value=this.value.toUpperCase()')))); ?>

                <?php echo $form->textFieldGroup($model,'antiguedad',array('widgetOptions'=>array('htmlOptions'=>array('autocomplete'=>'off','style'=>'text-transform:uppercase','onblur'=>'this.value=this.value.toUpperCase()')))); ?>


	<?php echo $form->textFieldGroup($model,'ip',array('widgetOptions'=>array('htmlOptions'=>array('autocomplete'=>'off','style'=>'text-transform:uppercase','onblur'=>'this.value=this.value.toUpperCase()')))); ?>


	<?php echo $form->textFieldGroup($model,'mac',array('widgetOptions'=>array('htmlOptions'=>array('autocomplete'=>'off','style'=>'text-transform:uppercase','onblur'=>'this.value=this.value.toUpperCase()')))); ?>


	<?php echo $form->textFieldGroup($model,'wireless',array('widgetOptions'=>array('htmlOptions'=>array('autocomplete'=>'off','style'=>'text-transform:uppercase','onblur'=>'this.value=this.value.toUpperCase()')))); ?>


        <?php $datos = CHtml::listData(Usuarios::model()->findAll(),'idusuario','nomusu'); ?>
	<?php echo $form->dropDownListGroup($model, 'idusuario',array('wrapperHtmlOptions' => array('class' => 'col-sm-5',),'widgetOptions' => array('data' => $datos))); ?>


	<?php echo $form->textFieldGroup($model,'nomusured',array('widgetOptions'=>array('htmlOptions'=>array('autocomplete'=>'off','style'=>'text-transform:uppercase','onblur'=>'this.value=this.value.toUpperCase()')))); ?>


	<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Guardar',
		)); ?>
</div>


<?php $this->endWidget(); ?>

</div><!-- form -->