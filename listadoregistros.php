
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="es" xmlns="http://www.w3.org/1999/xhtml" lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="UNEDEPROM">
<meta name="description" content="Modulo de registro de inscripciones.">
<meta name="author" content="ISC Salvador Aguilar Villaseñor y ISC Zeferino Rosiles Hernández.">
<meta name="COPYRIGHT" content="unedeprommich.gob.mx">
<title>Listado de inscripciones.</title>
<link href="img/favicon.ico" rel="SHORTCUT ICON">

	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/flexigrid.pack.css" />
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="js/flexigrid.pack.js"></script>
<style type="text/css">
.fonte {
	font-family: Arial, Helvetica, sans-serif;
}
.fonte strong {
	font-family: Arial, Helvetica, sans-serif;
}

.titulo1{
		font-size:30px;
		color:#ffffff;
		font-style:italic;
		}
</style>
</head>

<body>

<p align="center">&nbsp;</p>

 <center><span class="titulo1"><strong>UNEDEPROM</strong></span></center>
<p align="center">&nbsp;</p>
		<center><h1 class="fonte"><strong>::: Lista de Registros :::</strong></h1></center>
		<br />

<table align="center" class="flexigrid_registros" style="display: none" ></table>

	<script type="text/javascript">


		$(".flexigrid_registros").flexigrid({
			url : 'json.php',
			dataType : 'json',
			colModel : [ /*{
				display : 'ID',
				name : 'id',
				width : 0,
				sortable : true,
				align : 'center'
			},*/ {
				
				display : 'NOMBRE MAESTRO',
				name : 'nombre',
				width : 120,
				sortable : true,
				align : 'left'
			}, {
				display : 'APELLIDOS',
				name : 'apellidos',
				width : 150,
				sortable : true,
				align : 'left'
			
			}, {
				display : 'RFC',
				name : 'rfc',
				width : 100,
				sortable : true,
				align : 'left'
				
				}, {
				
				display : 'CURP',
				name : 'curp',
				width : 140,
				sortable : true,
				align : 'left'
				}, {
				display : 'SEXO',
				name : 'sexo',
				width : 90,
				sortable : true,
				align : 'left'
				}, {
				display : 'GRADO DE ESTUDIOS',
				name : 'grado',
				width : 120,
				sortable : true,
				align : 'left'
				}, {
				display : 'MUNICIPIO',
				name : 'municipio',
				width : 100,
				sortable : true,
				align : 'left'
				}, {
				display : 'LOCALIDAD',
				name : 'localidad',
				width : 100,
				sortable : true,
				align : 'left'
				}, {
				display : 'CEDEPROM',
				name : 'cedeprom',
				width : 100,
				sortable : true,
				align : 'left'
				}, {
				display : 'NIVEL',
				name : 'nivel',
				width : 90,
				sortable : true,
				align : 'left'
				}, {
				display : 'MODALIDAD',
				name : 'modalidad',
				width : 140,
				sortable : true,
				align : 'left'
				}, {
				display : 'CCT',
				name : 'cct',
				width : 100,
				sortable : true,
				align : 'left'
				}, {
				display : 'TELEFONO',
				name : 'telefono',
				width : 100,
				sortable : true,
				align : 'left'
				}, {
				display : 'E-MAIL',
				name : 'email',
				width : 170,
				sortable : true,
				align : 'left'
				}, {
										
							
				display : 'COMENTARIOS',
				name : 'comentarios',
				width : 300,
				sortable : true,
				align : 'left'
			} ],
			
			
			
	/*	buttons : [ {
				name : 'Agregar',
				bclass : 'add',
				onpress : test
			},			 {
			name : 'Borrar',
				bclass : 'delete',
				onpress : test
			}, {
				separator : true
			} ],*/
			
			
			
				buttons : [
						
                        {name: 'Nuevo', bclass: 'add', onpress : doCommand},
						{name: 'Modificar', bclass: 'edit', onpress : doCommand},
                        {name: 'Borrar', bclass: 'delete', onpress : doCommand},
                        {separator: true}
                ],

			
			
			
			
			
			
			searchitems : [ {
				display : 'NOMBRE',
				name : 'nombre'
			}, {
				display : 'APELLIDOS',
				name : 'apellidos',
				isdefault : true
				}, {
				display : 'CEDEPROM',
				name : 'cedeprom',
				isdefault : true
				}, {
				display : 'MUNICIPIO',
				name : 'municipio',
				isdefault : true
				}, {
				display : 'LOCALIDAD',
				name : 'localidad',
				isdefault : true
				}, {
				display : 'SEDE',
				name : 'sede',
				isdefault : true
			} ],
			sortname : "nombre",
			sortorder : "asc",
			usepager : true,
			title : '::: Lista de Maestros Registrados ::: ',
			useRp : true,
			rp : 100,
			showTableToggleBtn : true,
			width : 1200,
			height : 400,
			singleSelect: true

			
		});

		/*function test(com, grid) {
			if (com == 'Borrar') {
				confirm('Borrar ' + $('.trSelected', grid).length + ' items?')
			} else if (com == 'Nuevo') {
				alert('Add New Item');
			}
			
		}*/
		
		function doCommand(com, grid) {
if (com == 'Modificar') {
$('.trSelected', grid).each(function() {
var id = $(this).attr('id');
id = id.substring(id.lastIndexOf('row')+3);
alert("Modificar Registro " + id);
});
} else if (com == 'Borrar') {
$('.trSelected', grid).each(function() {
var id = $(this).attr('id');
id = id.substring(id.lastIndexOf('row')+3);
alert("Borrar Registro " + id);
});
}
}
		
		
		
		
		
	</script>
<br />
<br />
<center><img src="../img/UNEDEPROM-01.png" width="164" height="154" /><br /></center>
<br />
<br />
<center><a href="salir.php"><img src="images/salir.png" width="42" height="26" border="0" style="alignment-adjust:auto;" /></a></center>
</body>

</html>