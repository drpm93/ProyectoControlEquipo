<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Inicio Sesión',
);
?>
<div class="conten">
    <div style='width:50%; margin: 0 auto;'>
    
        <center><h2>Inicio de sesión</h2></center>

<p>Por favor llene con sus respectivos datos:</p>

	<!--<p class="note">Campos con <span class="required">*</span> son requeridos.</p>-->	
        <?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
            'type'=>'horizontal',
  
)
);
?>


 <?php

//echo $form->textFieldGroup($model, 'username',array('widgetOptions'=>array('htmlOptions'=>array('autocomplete'=>'off','style'=>'text-transform:uppercase','onblur'=>'this.value=this.value.toUpperCase()'))));
echo $form->textFieldGroup($model, 'username',array('widgetOptions'=>array('htmlOptions'=>array('autocomplete'=>'off'))));

echo $form->passwordFieldGroup($model, 'password',array('widgetOptions'=>array('htmlOptions'=>array('autocomplete'=>'off'))));
//echo $form->checkboxGroup($model, 'rememberMe');
$this->widget('booster.widgets.TbButton', 
array('buttonType' => 'submit', 'label' => 'Iniciar sesión','context'=>'primary',)
);
 ?>
<?php
$this->endWidget();
unset($form);
?>
</div>
</div>
    