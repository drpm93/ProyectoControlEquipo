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
 <td width="50%"  style="color:#0000BB;"><span style="font-weight: bold; font-size: 14pt;">GONDI S.A</span><br />Manta-Ecuador<br /><span style="font-size: 15pt;">&#9742;</span></td>
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
<br>
<div style="text-align: center"><b>FORMULARIO DE ENTREGA DE LINEA Y EQUIPO CELULAR PARA USO EXCLUSIVO DE LA COMPAÑIA </b> </div>
<br>

<?php foreach($model as $datof): 
    $duenio = $datof->duenio;
    $responsable = $datof->responsable;
    $marca = $datof->marca;
    $modelo = $datof->modelo;
    $imei = $datof->imei;
    $numero = $datof->numero;
    $cargador = $datof->cargador;
    $microsd = $datof->microsd;
    $auriculares = $datof->auriculares;
    $caja = $datof->caja;
    ?>
<?php endforeach; ?>
<div style="text-align: left"><b>Yo <?php echo $duenio; ?> recibo conforme un  equipo celular nuevo</b> </div>
<br>
<div style="text-align: left"><b>MARCA:</b><?php  echo $marca?> </div>
<div style="text-align: left"><b>MODELO: </b><?php  echo $modelo?> </div>
<div style="text-align: left"><b>IMEI: </b><?php  echo $imei?> </div>
<div style="text-align: left"><b>NÚMERO: </b><?php  echo $numero?> </div>
<div style="text-align: left"><b>CARGADOR: </b><?php  if($cargador ==1){echo "SI";} else{echo "NO";}?> </div> 
<div style="text-align: left"><b>MICRO SD: </b><?php  if($microsd ==1){echo "SI";} else{echo "NO";}?> </div>
<div style="text-align: left"><b>AURICULARES: </b><?php  if($auriculares ==1){echo "SI";} else{echo "NO";}?> </div>
<div style="text-align: left"><b>CAJA: </b><?php  if($caja ==1){echo "SI";} else{echo "NO";}?> </div>

<br>
<?php if($responsable == "GONDI"){?>
<div style="text-align:  left"><b>Por  medio de la presente, confirmo que la información antes suministraba es verdadera y no admite cambios y/o devoluciones posteriores, salvo en los casos en que se presenten fallas o desperfectos de fábrica que estén cubiertos por la garantía del fabricante y el cambio proceda previo informe técnico. Los valores a pagar aquí detallados son mensuales Gondi ASUME el costo de la línea por ser un equipo específicamente para actividades laborales.</b> </div>
<?php }else{?>
<div style="text-align: justify"><h>Por  medio de la presente, confirmo que la información antes suministraba es verdadera y no admite cambios y/o devoluciones posteriores, salvo en los casos en que se presenten fallas o desperfectos de fábrica que estén cubiertos por la garantía del fabricante y el cambio proceda previo informe técnico. Los valores a pagar aquí detallados son mensuales Gondi NO ASUME el costo de la línea por ser un equipo personal.</h> </div>
<?php }?>
<br>
<div style="text-align: justify"><h>Además acepto que, en caso de retirarme de la empresa  el equipo deberá ser ENTREGADO o CANCELADO en su totalidad sus valores de consumo y Adendum,  en caso de no hacerlo será descontado en la liquidación de haberes respectivamente.</h>
<br>
<br>
<br>
<br>
<div style="text-align: left"><b>________________________</b></div>
<div style="text-align: left"><b>Firma de solicitante</b></div>
<br>
<br>
<br>
<div style="text-align: center"><b>&nbsp;&nbsp;FECHA DE PEDIDO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FECHA DE RECIBIDO</b></div> 
<br>
<br>
<br>
<br>
<br>
<div style="text-align: left"><b>FECHA DE DEVOLUCIÓN O ENTREGA</b></div> 

</body>
 </html>
<?php endif; ?>

