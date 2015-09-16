<?php
/* @var $this FichaController */
/* @var $model Ficha */

$this->breadcrumbs=array(
	'Fichas'=>array('admin'),
	'Lista de fichas de equipo',
);

$this->menu=array(
	array('label'=>'Crear ficha de equipo', 'url'=>array('ficha/create')),
	
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('medico-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Lista de fichas de equipo</h1>

<p>

</p>
<?php 
$date = $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                                        // 'model'=>$model,
                                    'name' => 'Ficha[fecha1]',
                                    'value' => $model->fecha1,
                                    // additional javascript options for the date picker plugin
                                    'options'=>array(
                                        'showAnim'=>'fold',
                                        'dateFormat'=>'dd/mm/yy',
                                        'changeMonth' => 'true',
                                        'yearRange'=>'-80:+3',
                                        'monthNames' => array('Enero,Febrero,Marzo,Abril,Mayo,Junio,Julio,Agosto,Septiembre,Octubre,Noviembre,Diciembre'),
                'monthNamesShort' => array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic"),
                                                    'dayNames' => array('Domingo,Lunes,Martes,Miercoles,Jueves,Viernes,Sabado'),
                'dayNamesMin' => array('Do','Lu','Ma','Mi','Ju','Vi','Sa'),
                                    'language'=> Yii::app()->getLanguage(),
   'changeYear'=>'true',
                                        'constrainInput' => 'false',
                                    ),
                                    'htmlOptions'=>array(
                                        'style'=>'height:35px;width:120px;',
                                        'class'=>'span5 form-control',
                                    ),
// DONT FORGET TO ADD TRUE this will create the datepicker return as string
                                ),true);

?>

<?php echo CHtml::link('','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('booster.widgets.TbGridView', array(
	'id'=>'ficha-grid',
	'dataProvider'=>$model->search(),
    'afterAjaxUpdate'=>"function() {
                                                jQuery('#Ficha_fecha1').datepicker(jQuery.extend({showMonthAfterYear:false}, jQuery.datepicker.regional['id'], {'showAnim':'fold','dateFormat':'dd-mm-yy','changeMonth':'true','showButtonPanel':'true','changeYear':'true','constrainInput':'false'}));
                                                }",
	'filter'=>$model,
        'type' => 'striped bordered condensed',
	'columns'=>array(
		'nficha',
                array(
                    'name' =>'idarea',
                    'value'=>'$data->pkdepartamento->nomdepar',
                    'filter'=> CHtml::listData(Departamento::model()->findAll(array('order'=>'nomdepar')), 'iddepartamento', 'nomdepar'),
                    'htmlOptions'=>array('style'=>'height:40px;width:200px'),),
		array(
                    'name' =>'idactividad',
                    'value'=>'$data->pkactividad->nomactividad',
                    'filter'=>false,
                    //'filter'=> CHtml::listData(Actividad::model()->findAll(array('order'=>'nomactividad')), 'idactividad', 'nomactividad'),
                    'htmlOptions'=>array('style'=>'height:40px;width:200px'),),     
		array(
                    'name' =>'fecha',                           
                    'filter'=> $date,
                    'value'=>'$data->fecha',
                    'htmlOptions'=>array('style'=>'height:40px;width:200px'),
                    ),
		'responsable',
            array(
                    'name' =>'idusuario',
                    'value'=>'$data->pkusuario->nomusu',
                    'filter'=>false,
                    //'filter'=> CHtml::listData(Actividad::model()->findAll(array('order'=>'nomactividad')), 'idactividad', 'nomactividad'),
                    'htmlOptions'=>array('style'=>'height:40px;width:200px'),), 
		/*
		'antiguedad',
		'ip',
		'mac',
		'wireless',
		
		'nomusured',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

