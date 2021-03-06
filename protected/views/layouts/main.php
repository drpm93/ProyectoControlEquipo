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
array('label' => 'Lista de fichas', 'url' =>array('/ficha/admin')),
    
 '---',
    
array('label' => 'Crear Departamento', 'url' => array('/departamento/create')),
array('label' => 'Crear Actividad', 'url' =>array('/actividad/create')),
    '---',
    '---',
array('label' => 'Agregar caracteristicas a fichas', 'url' => array('/caracteristicas/create')),
array('label' => 'Crear marca de equipo', 'url' =>array('/marca/create')),
array('label' => 'Crear elemento', 'url' =>array('/elementos/create')),
    '---',
    '---',
array('label' => 'Crear usuario', 'url' => array('/usuarios/create')),
array('label' => 'Lista de usuarios', 'url' =>array('/usuarios/admin')),
)
),
    array(
        'label'=>'Ficha de celulares',
        'url' =>'#',
        'visible' =>!YII::app()->user->isGuest,
        'items' => array(
        array('label'=>'Crear ficha de equipo celular', 'url'=>array('fichacelulares/create')),
            array('label' => 'Lista de celulares registrados', 'url' =>array('/fichacelulares/admin')),
           // '---',
            
            
            

            ),
        
    ),
    array(
        'label'=>'Direccionamiento',
        'url' =>'#',
        'visible' =>!YII::app()->user->isGuest,
        'items' => array(
        array('label'=>'Crear direccionamiento', 'url'=>array('direcciones/create')),
            array('label' => 'Lista de direcciones', 'url' =>array('/direcciones/admin')),
            '---',
            array('label'=>'Crear acceso', 'url'=>array('accesos/create')),
            
            

            ),
        
    ),
    array(
        'label'=>'Reportes',
        'url' =>'#',
        'visible' =>!YII::app()->user->isGuest,
        'items' => array(
        array('label'=>'Fichas de equipos', 'url'=>array('caracteristicas/admin')),
        array('label'=>'Fichas de equipos celulares', 'url'=>array('fichacelulares/admin')),  
        array('label'=>'Actas de equipos celulares', 'url'=>array('fichacelulares/reporte')), 
        //array('label'=>'Equipos', 'url'=>array('/direcciones/adminequipos')),
            

            ),
        
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
