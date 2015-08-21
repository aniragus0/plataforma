<?php
require_once("class/class.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insertar registros con PHP POO</title>
<script type="text/javascript" language="javascript" src="js/funciones.js"></script>
</head>

<body onload="limpiar();">
<center>

<form name="form" action= maestros.php method="post" id=buscara>
<table width="400" align="center">


<tr>
<td valign="top" align="right">
BUSCAR
</td>
<td valign="top" align="left">
<input type="text" name="id" id="id" />
</td>
</tr>

<tr>
<td valign="top" width="400" align="center" colspan="2">
<hr />
<input type="submit" value="Buscar">

</td>
</tr>

</table>

</form>
<table align="center" width="700">
<tr>
<td width="700" valign="top" align="center" colspan="6">
<hr />
</td>
</tr>

<tr style="background-color:#666666; color:#FFFFFF; font-weight:bold">

<td valign="top" align="center" width="150" >
NOMBRE
</td>

<td valign="top" align="center" width="350">
APELLIDOS
</td>

<td valign="top" align="center" width="50">
RFC
</td>

<td valign="top" align="center" width="50">
CURP
</td>

<td valign="top" align="center" width="50">
</td>

<td valign="top" align="center" width="50">
</td>

<td valign="top" align="center" width="50">
</td>

</tr>

<?php
$id="";
    
      if (isset($_POST["id"])) {
        $id=$_POST["id"];
		echo "Dato Buscado: ";
		print_r ($_POST ["id"]);
    } else {
       $id="";
    };
     
 

        
    
		//$id=$_POST["id"];
		
		$tra=new Trabajo();
		//$reg=$tra->get_buscar_maestro($_POST["id"]);
		$reg=$tra->get_buscar_maestro($id);
		for ($i=0;$i<count($reg);$i++){
			
		
			
 ?>     

<tr id="<?php echo "ide_$i";?>" style="background-color:#f0f0f0" onMouseMove="cambiar('<?php echo "ide_$i";?>','#cccccc')" onMouseOut="cambiar('<?php echo "ide_$i";?>','#f0f0f0');">

<td valign="top" align="left" width="150">
<?php echo $reg[$i]["nombre"];?>
</td>

<td valign="top" align="left" width="350">
<div align="justify">
<?php echo $reg[$i]["apellidos"];?>
</div>
</td>

<td valign="top" align="left" width="50">
<?php echo $reg[$i]["rfc"];?>
</td>

<td valign="top" align="left" width="50">
<?php echo $reg[$i]["curp"];?>
</td>

<td valign="top" align="center" width="50">
<a href="javascript:void(0);" onClick="window.location='inscripcion_cursos.php?id=<?php echo $reg[$i]["id"];?>';" title="Inscribir Maestro a Curso"><img src="ima/inscribir.png" border="0"></a>
</td>

<td valign="top" align="center" width="50">
<a href="javascript:void(0);" onClick="window.location='informacion_maestros.php?id=<?php echo $reg[$i]["id"];?>';" title="Informacion de Mestro"><img src="ima/search.png" border="0"></a>
</td>

<td valign="top" align="center" width="50">
<a href="javascript:void(0);" onClick="window.location='editar_maestros.php?id=<?php echo $reg[$i]["id"];?>';" title="Modificar Informacion de Mestro"><img src="ima/editar.png" border="0"></a>
</td>

</tr>
<?php
}
?>
</table>
</center>
</body>
</html>
