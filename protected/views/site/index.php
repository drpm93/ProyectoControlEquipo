<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<div class="page-header" style="padding-top: 0px;margin-top: 0px;">
<h2 style="margin-top: 0px;padding-top: 0px;" >GONDI S.A <small>Registro de equipos</small></h2>
<?php if(!Yii::app()->user->isGuest) {
        print 'Bienvenido administrador';
    }?>
</div>
<?php
    $this->widget(
    'booster.widgets.TbCarousel',
    array(
    'items' => array(
    array(
    'image' => 'images/GONDISA.png',
    ),
    array(
    'image' => 'images/gondi-15.jpg',
    ),
    array(
    'image' => 'images/gondi1.jpg',
    ),
    ),
'htmlOptions' => array('class' => '','style'=>'width:1080px'),
    )
    );
?>
