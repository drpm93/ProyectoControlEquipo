<!DOCTYPE html>
<html lang="<?php echo Yii::app()->language;?>">
<meta charset="utf-8">
<head>
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<meta charset="<?php echo Yii::app()->charset;?>">
 
<link href="css/main.css" type="text/css" rel="stylesheet">
</head>
<body style="background-image: url('images/gondisa.gif');  background-repeat: no-repeat; background-position: top right;">
<header>
<?php
$this->widget(
'booster.widgets.TbNavbar',
array(
//'type' => 'inverse',
'brand' => '',
'brandUrl' => '#',
'collapse' => true, // requires bootstrap-responsive.css
'fixed' => false,
'fluid' => true,
'items' => array(
array(
'class' => 'booster.widgets.TbMenu',
'type' => 'navbar',
'items' => array(
array('label' => 'Inicio', 'url' =>array('/site/index'), ),
        array(
'label' => 'Fichas de equipos',
'url' => '#',
'visible'=>!Yii::app()->user->isGuest,
'items' => array(
array('label' => 'Crear ficha de equipo', 'url' => array('/ficha/create')),
//array('label' => 'Lista de Médicos', 'url' => array('/medico/index')),
array('label' => 'Lista de fichas', 'url' =>array('/ficha/admin')),
    
 '---',
    '---',
array('label' => 'Crear Departamento', 'url' => array('/departamento/create')),
array('label' => 'Crear Actividad', 'url' =>array('/actividad/create')),
)
),
),
),
     array(
'class' => 'booster.widgets.TbMenu',
'type' => 'navbar',
'htmlOptions' => array('class' => 'pull-right'),
'items' => array(
array('label' => 'Iniciar Sesión', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
array('label'=>'Cerrar Sesión ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
'---',

),
),
),
)
);
?>
</header>
<div class="container" id="main" >
 <?php if(isset($this->breadcrumbs)):?>
 <?php $this->widget('booster.widgets.TbBreadcrumbs', array(
 'links'=>$this->breadcrumbs,
 )); ?>
 <?php endif?>
 <?php echo $content; ?>
 <hr>
 
<footer>
 Copyright &copy; <?php echo date('Y'); ?> <?php //echo CHtml::encode(Yii::app()->params['empresa']); ?> | <?php echo CHtml::encode((Yii::app()->name).' '.Yii::app()->params['version']); ?> - All Rights Reserved.<br/>
 <?php //echo Yii::powered(); ?>
 </footer>
 
</div>
</body>
</html>
