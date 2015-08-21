<?php include("combos.php"); ?>
<?php include("php/sesion/conexion.php"); ?>
<?php include("php/sesion/seguridad.php"); ?>

<?php session_start();
if(!isset($_SESSION["usuario"]))
{
	header("Location: index.php");
} ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="es" xmlns="http://www.w3.org/1999/xhtml" lang="es"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="UNEDEPROM">
<meta name="description" content="Modulo de registro de inscripciones.">
<meta name="author" content="ISC Salvador Aguilar Villaseñor y ISC Zeferino Rosiles Hernández.">
<meta name="COPYRIGHT" content="unedeprommich.gob.mx">
<title>Resgistro de inscripciones.</title>
<link href="../img/favicon.ico" rel="SHORTCUT ICON">
<!--<link rel="stylesheet" href="css/main.css" type="text/css" media="screen" />

	<!--	<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Logo -->
						<center><span class="titulo1"><strong>UNEDEPROM</strong></span></center>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li class="current"><a href="index.html">Inicio</a></li>
								<li>
									<a href="#">Desplegable</a>
									<ul>
										<li><a href="#">Opcion 1</a></li>
										<li><a href="#">Opcion 2</a></li>
										<li><a href="#">Opcion 3</a></li>
										<li>
											<a href="#">Submenu 1</a>
											<ul>
												<li><a href="#">Sub-Opcion 1</a></li>
												<li><a href="#">Sub-Opcion 2</a></li>
												<li><a href="#">Sub-Opcion 3</a></li>
												<li><a href="#">Sub-Opcion 4</a></li>
												<li><a href="#">Sub-Opcion 5</a></li>
											</ul>
										</li>
										<li><a href="#">Opcion 5</a></li>
									</ul>
								</li>
								<li><a href="left-sidebar.html">Barra Lateral Izquierda</a></li>
								<li><a href="right-sidebar.html">Barra Lateral Derecha</a></li>
								<li><a href="two-sidebar.html">Dos Barras Laterales</a></li>
								<li><a href="no-sidebar.html">Sin Barras Laterales</a></li>
							</ul>
						</nav>

				</div>

			
 
 <span style="float:right"><table width="300" border="0">
  <tr>
    <td>Nombre: <?php  echo $_SESSION["nombre"] ?></td>
   </tr>
  <tr>
    <td>Usuario: <?php  echo $_SESSION["usuario"] ?></td>
   </tr>
    <tr>
    <td>Nivel: <?php  echo $_SESSION["nivel"] ?></td>
   </tr>
    <tr>
    <td>Sede: <?php  echo $_SESSION["sede"] ?></td>
   </tr>
    <tr>
    <td>Status: <?php  echo $_SESSION["status"] ?></td>
   </tr>
</table>
</span>

<form action="addmtro.php" method="post" name="form" id="third" class="styleThese">
  <center><span class="titulo"><strong>::: Registro de Maestros :::</strong></span></center>
        

<!-- Clave -->
<br />
 </strong><strong><span class="blue">
xxx
</span></strong>
  <!-- NOMBRE -->
 <label for="nombre"><strong><span class="blue">*</span> NOMBRE :</strong></label>
<input id="nombre" name="nombre" type="text" class="validate['required']" size="45"style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"> 
            
            <!-- APELLIDOS -->
<label for="apellidos"><strong><span class="blue">*</span>APELLIDOS:</strong></label>
<input id="apellidos" name="apellidos" type="text" class="validate['required']" size="45" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"/>

 <!-- RFC -->
  <label for="rfc"><strong><span class="blue">*</span> RFC : </strong><span class="BLANCO"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></span><strong><span class="blue"> *</span> CURP : </strong></label>
<table width="450" border="0">
  <tr>
    <td width="228"><input id="rfc" name="rfc" type="text" class="validate['required','length[12,-1]']" size="30" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
  <!-- .......................................... -->        
            
</td>
    <td width="196"><strong>
    <input id="curp" name="curp" type="text" class="validate['required','length[17,-1]']" size="30" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" />
</strong></td>
  </tr>
</table>

<!-- .......................................... -->           
 
    <!-- SEXO -->
  <label for="sexo"><strong><span class="blue">*</span> SEXO : </strong><span class="BLANCO"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></span><strong><span class="blue">*</span> GRADO DE ESTUDIOS : </strong></label>

  <table width="450" border="0">
  <tr>
    <td width="238"><select size="1" name="sexo" id="sexo" class="validate['select']">
    <option value="0">SEXO</option>
        <option value="HOMBRE">HOMBRE</option>
       <option value="MUJER">MUJER</option>
       </select>        
            
</td>
    <td width="202"><!-- GRADO DE ESTUDIOS --><strong>
      <input id="grado" name="grado" type="text" class="validate['required']" size="30" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" />
</strong></td>
  </tr>
</table>
     
  
  <!-- MUNICIPIO -->
<!-- <label for="municipio"><strong><span class="blue">*</span> MUNICIPIO : </strong><span class="BLANCO"><strong>-------------------------------------.--</strong></span><strong><span class="blue">*</span> LOCALIDAD : </strong></label>
<input id="municipio" name="municipio" type="text" class="validate['required']" size="21" />-->
  <!-- .......................................... -->    
  
  <!-- MUNICIPIO -->
  <label for="municipio"><strong><span class="blue">*</span> MUNICIPIO : </strong><span class="BLANCO"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></span><strong><span class="blue">*</span> LOCALIDAD : </strong></label>

    
    <!-- municipios -->
  
  <table width="450" border="0">
  <tr>
 
    <td width="239"><select id="cboMunicipios" name="cboMunicipios" class="validate['select']">
                <option value="0">SELECCIONE UN MUNICIPIO</option>
                <?php
                    $municipios = obtenerMunicipios();
                    foreach ($municipios as $municipio) { 
                        echo '<option value="'.$municipio->id.'">'.$municipio->municipio.'</option>';        
                    }
                ?>

            </select>            
  </td>
   
    <td width="200"><!-- LOCALIDAD --><strong>
<input id="localidad" name="localidad" type="text" class="validate['required']" size="30" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
</strong></td>
  </tr>
</table>
     <dd> 
       
          
  <!-- .......................................... -->   
  
      
            


 <!-- CEDEPROM -->
  <label for="cedeprom"><strong><span class="blue">*</span> CENTRO DE MAESTROS : </strong><span class="BLANCO"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></span><strong><span class="blue">*</span> NIVEL : </strong></label>

<table width="450" border="0">
  <tr>
  
  <td width="239"><select id="cboCedeprom" name="cboCedeprom" onchange="enviarDatos(); return false" class="validate['select']">
                <option value="0">SELECCIONE UN CEDEPROM</option>
                <?php
                    $cedeproms = obtenerCedeprom();
                    foreach ($cedeproms as $cedeprom) { 
                        echo '<option value="'.$cedeprom->id.'">'.$cedeprom->cedeprom.'</option>';        
                    }
                ?>

            </select>            
  
   <!-- <td width="236"><select size="1" name="cedeprom" id="cedeprom">
  	    <OPTION VALUE="APATZINGÁN">APATZINGÁN</OPTION>
		<OPTION VALUE="COAHUAYANA">COAHUAYANA</OPTION>
		<OPTION VALUE="COALCOMÁN">COALCOMÁN</OPTION>
		<OPTION VALUE="EPITACIO HUERTA">EPITACIO HUERTA</OPTION>
		<OPTION VALUE="HIDALGO">HIDALGO</OPTION>
		<OPTION VALUE="HUETAMO">HUETAMO</OPTION>
		<OPTION VALUE="JIQUILPAN">JIQUILPAN</OPTION>
		<OPTION VALUE="LA HUACANA">LA HUACANA</OPTION>
		<OPTION VALUE="LA PIEDAD">LA PIEDAD</OPTION>
		<OPTION VALUE="LÁZARO CÁRDENAS">LÁZARO CÁRDENAS</OPTION>
		<OPTION VALUE="LOS REYES">LOS REYES</OPTION>
		<OPTION VALUE="MARAVATÍO">MARAVATÍO</OPTION>
		<OPTION VALUE="MORELIA">MORELIA</OPTION>
		<OPTION VALUE="MORELIA II">MORELIA II</OPTION>
		<OPTION VALUE="PARACHO">PARACHO</OPTION>
		<OPTION VALUE="PÁTZCUARO">PÁTZCUARO</OPTION>
		<OPTION VALUE="PURUÁNDIRO">PURUÁNDIRO</OPTION>
		<OPTION VALUE="TACÁMBARO">TACÁMBARO</OPTION>
		<OPTION VALUE="URUAPAN">URUAPAN</OPTION>
		<OPTION VALUE="ZAMORA">ZAMORA</OPTION>
		<OPTION VALUE="ZITÁCUARO">ZITÁCUARO</OPTION>
		<OPTION VALUE="ZACAPU">ZACAPU</OPTION>
		<OPTION VALUE="DUIN">DUIN</OPTION>


       </select>      
            
</td>-->
    <td width="204"><!-- NIVEL --><strong>
<input id="nivel" name="nivel" type="text" class="validate['required']" size="30" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" />
</strong></td>
  </tr>
</table>
  
     
       
          
  <!-- .......................................... -->              
            

<!-- .......................................... -->      
            
 <!-- MODALIDAD -->
  <label for="modalidad"><strong><span class="blue">*</span> MODALIDAD : </strong><span class="BLANCO"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></span><strong><span class="blue">*</span> CLAVE DEL CENTRO DE TRABAJO : </strong></label>
  
  <table width="450" border="0">
  <tr>
    <td width="239"><input id="modalidad" name="modalidad" type="text" class="validate['required']" size="30" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"/>        
            
</td>
    <td width="201"><!-- CCT --><strong>
<input id="cct" name="cct" type="text" class="validate['required','length[5,-1]']" size="30" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
</strong></td>
  </tr>
</table>
  

  <!-- .......................................... -->        
            

<!-- .......................................... -->              
       

<!-- Telefono -->
  <label for="telefono"><strong><span class="blue">*</span> TELEFONO : </strong><span class="BLANCO"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></span><strong><span class="blue">*</span> E-MAIL : </strong></label>
  
  <table width="450" border="0">
  <tr>
    <td width="239"><input id="telefono" name="telefono" type="text" class="validate['required','phone']" size="30" />
  <!-- .......................................... -->              
            
</td>
    <td width="201"><!-- EMAIL --><strong>
<input id="email" name="email" type="text" class="validate['required','email']" size="30" style="text-transform:lowercase;" onkeyup="javascript:this.value=this.value.toLowerCase();"/>
</strong>
<!-- .......................................... --></td>
  </tr>
</table>


             
            
</td>
    <td width="201">&nbsp;</td>
  </tr>
</table>

 
</table>
  
 
       
		
<!-- Observaciones -->
 <label for="msg"><strong><span class="blue">*</span> COMENTARIOS : </strong></label><br />
<textarea id="message" name="obs" type="text" class="validate['']" rows="5" cols="45" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"></textarea>

		
		<br /><br />
		<input type="submit" class="buttonSubmit" value="Guardar" />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="salir.php"><img src="images/salir.png" width="42" height="26" border="0" style="alignment-adjust:auto;" /></a>
	    <!-- Niceforms: mouse over effect -->
		<!-- Do not remove the line below -->
        <div id="stylesheetTest"></div>

</form>

			

			<!-- Footer -->
				<div id="footer">
					

					<!-- Copyright -->
						<div class="copyright">
							<ul class="menu">
								<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://compu-soft.com.mx">Compu-Soft</a></li>
							</ul>
						</div>

				</div>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>