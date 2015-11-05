<?php $contador=count($model); if ($model !== null):?>

<html>
<head>
<style>
 body {font-family: sans-serif;
 font-size: 10pt;
 }
 p { margin: 0pt;
 }
 td { vertical-align: top; }
 .items td {
 border-left: 0.1mm solid #000000;
 border-right: 0.1mm solid #000000;
 }
 table thead td { background-color: #EEEEEE;
 text-align: center;
 border: 0.1mm solid #000000;
 }
 .items td.blanktotal {
 background-color: #FFFFFF;
 border: 0mm none #000000;
 border-top: 0.1mm solid #000000;
 }
 .items td.totals {
 text-align: right;
 border: 0.1mm solid #000000;
 }
</style>
</head>
<body>
 
<!--mpdf
 <htmlpageheader name="myheader">
 <table width="100%"><tr>
 <td width="50%"  style="color:#0000BB;"><span style="font-weight: bold; font-size: 14pt;">GONDI S.A</span><br />Manta-Ecuador<br /><span style="font-size: 15pt;">&#9742;</span> falta</td>
<td width='25%' align='right' rowspan='3'><img src='images/gondisa.gif' width='100px' height='100px'></td>
 </tr></table>
 </htmlpageheader>
 
<htmlpagefooter name="myfooter">
 <div style="border-top: 1px solid #000000; font-size: 9pt; text-align: center; padding-top: 3mm; ">
 Página {PAGENO} de {nb}
 </div>

 </htmlpagefooter>
 
<sethtmlpageheader name="myheader" value="on" show-this-page="1" />
 <sethtmlpagefooter name="myfooter" value="on" />
 mpdf-->
<div style="text-align: center"><b>Ficha de regitro de equipo de computo </b> </div>

<div style="text-align: right"><b>Fecha: </b><?php echo date("d/m/Y"); ?> </div>
<?php foreach($model as $datof): 
    $nficha = $datof->pkficha->idficha;
    $area = $datof->pkficha->pkdepartamento->nomdepar;
    $actividad = $datof->pkficha->pkactividad->nomactividad;
    $fecha = $datof->pkficha->fecha;
    $ubicacion = $datof->pkficha->ubicacion;
    $responsable = $datof->pkficha->responsable;
    $antiguedad = $datof->pkficha->antiguedad;
    $ip = $datof->pkficha->ip;
    $mac = $datof->pkficha->mac;
    $wireless = $datof->pkficha->wireless;
    $usuequi = $datof->pkficha->pkusuario->nomusu;
    $usured = $datof->pkficha->nomusured;
    ?>
<?php endforeach; ?>
<div style="text-align: right"><b>Número de ficha:</b><?php  echo $nficha?> </div>
<div style="text-align: left"><b>Area: </b><?php  echo $area?> </div>
<div style="text-align: left"><b>Actividad: </b><?php  echo $actividad?> </div>
<div style="text-align: left"><b>_________________________________________________________________________________________________________________ </b> </div>
<div style="text-align: left"><b>Fecha de registro: </b><?php  echo $fecha?> </div>
<div style="text-align: left"><b>Ubicación del equipo: </b><?php  echo $ubicacion?> </div>
<div style="text-align: left"><b>Nombre del responsable del equipo: </b><?php  echo $responsable?> </div>
<div style="text-align: left"><b>Antigüedad del equipo: </b><?php  echo $antiguedad?> </div>
<div style="text-align: left"><b>_________________________________________________________________________________________________________________ </b> </div>
<div style="text-align: center"><b>CARACTERÍSTICAS TÉCNICAS</b></div>
<br>
 <table class="items" width="100%" style="font-size: 9pt; border-collapse: collapse;" cellpadding="5">
 <thead>
 <tr>
 <td width="16.666666666667%">Descripcion del elemento</td>
 <td width="16.666666666667%">Aplica</td>
 <td width="16.666666666667%">No aplica</td>
 <td width="16.666666666667%">Marca</td>
 <td width="16.666666666667%">Modelo</td>
 <td width="16.666666666667%">Numero serie</td>
 <td width="16.666666666667%">Cant</td>
 <td width="16.666666666667%">Tipo</td>
 <td width="16.666666666667%">Características</td>
 </tr>
 </thead>
 <tbody>
 <!-- ITEMS -->
 <?php foreach($model as $row): ?>
 <tr>
 <td align="center">
 <?php echo $row->pkelemento->nomele; ?>
 </td>
 <td align="center">
 <?php 
 if($row->aplica == 1){
     echo "X";
 } else {echo "";}
 ?>
 </td> 
 <td align="center">
 <?php 
 if($row->noaplica == 1){
     echo "X";
 } else {echo "";}
 ?>
 </td>
 <td align="center">
 <?php 
     echo $row->pkmarca->nommarca;
 ?>
 </td>
 <td align="center">
 <?php echo $row->modelo; ?>
 </td>
 <td align="center">
 <?php echo $row->nserie; ?>
 </td>
 <td align="center">
 <?php echo $row->cantidad; ?>
 </td>
 <td align="center">
 <?php echo $row->tipo; ?>
 </td>
 <td align="center">
 <?php echo $row->caracteristica; ?>
 </td>
 </tr>
 <?php endforeach; ?>
 <!-- FIN ITEMS -->
 <tr>
 <td class="blanktotal" colspan="9" rowspan="9"></td>
 </tr>
 </tbody>
 </table>
<br>
<div style="text-align: left"><b>IP ADRESS:</b><?php  echo $ip?> </div>
<div style="text-align: left"><b>MAC ADRESS:</b><?php  echo $mac?> </div>
<div style="text-align: left"><b>WIRELESS MAC:</b><?php  echo $wireless?> </div>
<div style="text-align: left"><b>NOMBRE USUARIO EQUIPO:</b><?php  echo $usuequi?> </div>
<div style="text-align: left"><b>NOMBRE USUARIO RED:</b><?php  echo $usured?> </div>
<br>

<div style="text-align: center"><b>__________________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__________________</b></div>
<br>
<div style="text-align: center"><b>&nbsp;&nbsp;Usuario&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sistemas</b></div> 
</body>
 </html>
<?php endif; ?>

