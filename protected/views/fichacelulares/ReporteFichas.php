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
<div style="text-align: center"><b>Fichas de equipos celulares </b> </div>

<div style="text-align: right"><b>Fecha: </b><?php echo date("d/m/Y"); ?> </div>
<br>
 <table class="items" width="100%" style="font-size: 9pt; border-collapse: collapse;" cellpadding="5">
 <thead>
 <tr>
 <td width="16.666666666667%">Número</td>
 <td width="16.666666666667%">Dueño</td>
 <td width="16.666666666667%">Responsable</td>
 <td width="16.666666666667%">Simcard</td>
 <td width="16.666666666667%">Imei</td>
 <td width="16.666666666667%">Marca</td>
 <td width="16.666666666667%">Modelo</td>
 <td width="16.666666666667%">Cupo</td>
 <td width="16.666666666667%">Fecha inicio</td>
 <td width="16.666666666667%">Fecha fin</td>
 </tr>
 </thead>
 <tbody>
 <!-- ITEMS -->
 <?php foreach($model as $row): ?>
 <tr>
 <td align="center">
 <?php echo $row->numero; ?>
 </td>
 <td align="center">
 <?php echo $row->duenio; ?>
 </td>
 <td align="center">
 <?php echo $row->responsable; ?>
 </td>
 <td align="center">
 <?php echo $row->simcard; ?>
 </td>
 <td align="center">
 <?php echo $row->imei; ?>
 </td>
 <td align="center">
 <?php echo $row->marca; ?>
 </td>
 <td align="center">
 <?php echo $row->modelo; ?>
 </td>
 <td align="center">
 <?php echo $row->cupo; ?>
 </td>
 <td align="center">
 <?php echo $row->fechaini; ?>
 </td>
 <td align="center">
 <?php echo $row->fechafinal; ?>
 </td>
 </tr>
 <?php endforeach; ?>
 <!-- FIN ITEMS -->
 <tr>
 <td class="blanktotal" colspan="9" rowspan="9"></td>
 </tr>
 </tbody>
 </table>
</body>
 </html>
<?php endif; ?>

