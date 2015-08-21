<?php include("combos.php"); ?>
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
<link rel="stylesheet" href="css/main.css" type="text/css" media="screen" />



  <!-- FORM NICE -->

<script type="text/javascript" charset="utf-8">
/*global optionValues*/
(function () {
	var params, url;

	optionValues = {
		min: false,
		jquery: "1.4.2",
		theme: "default"
	};
	params = window.location.search;

	function css(src) {
		document.write('<link rel="stylesheet" href="' + src + '" type="text/css" />');
	}

	function script(src) {
		document.write('<script src="' + src + '" type="text/javascript" charset="utf-8"></sc' + 'ript>');
	}

	if (params) {
		params = params.substr(1).split('&');

		for (i = 0; i < params.length; i ++) {
			var equals = params[i].split('=');
			
			if (Object.prototype.hasOwnProperty.call(optionValues, equals[0])) {
				optionValues[equals[0]] = equals[1];
			}
		}
	}


	css('./themes/' + optionValues.theme + '/css/uniform.' + optionValues.theme + '.css');

	url = '://ajax.googleapis.com/ajax/libs/jquery/'

	if (window.location.protocol == 'https:') {
		url = 'https' + url;
	} else {
		url = 'http' + url;
	}

	url += optionValues.jquery;

	if (optionValues.min) {
		url += '/jquery.min.js';
	} else {
		url += '/jquery.js';
	}

	script(url);

	if (optionValues.min) {
		script('js/jquery.uniform.min.js');
	} else {
		script('js/jquery.uniform.js');
	}
}());
		</script>
		<script type="text/javascript">
// Can't merge with previous script block since this relies on jQuery and that
// was not loaded until the previous script block ends
var w = jQuery.noConflict();
w(function () {
	var wmin, wremove, wapply, wuniformed;

	// Debugging code to check for multiple click events
	wselects = w("select").click(function () {
		if (typeof console !== 'undefined' && typeof console.log !== 'undefined') {
			console.log(w(this).attr('id') + " clicked");
		}
	});

	wuniformed = w(".styleThese").find("input, textarea, select, button, a.uniformTest").not(".skipThese");
	wuniformed.uniform();

	w("#optionsForm input, #optionsForm select").change(function () {
		this.form.submit();
	});

	if (optionValues.min) {
		wmin = w("#optionsMin");

		if (wmin.prop) {
			wmin.prop("checked", true);
		} else {
			wmin.attr("checked", "checked");
		}
	}

	w("#optionsJquery").val(optionValues.jquery);
	w("#optionsTheme").val(optionValues.theme);
	w("#jqueryCurrentVersion").text("Using " + jQuery.fn.jquery);
	wremove = w("#remove");
	wapply = w("#apply");
	wremove.click(function () {
		wuniformed.uniform.restore();
		wremove.hide();
		wapply.show();
		return false;
	});
	wapply.click(function () {
		wuniformed.uniform();
		wapply.hide();
		wremove.show();
		return false;
	});
});
		</script>
		<style type="text/css" media="screen">
			body {
				font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
				color: #666;
				padding: 40px;
			}
			h1 {
				margin-top: 0;
			}
			label {
				font-size: 10px;
				font-weight: bold;
				text-transform: uppercase;
				display: block;
				margin-bottom: 3px;
				clear: both;
			}
			.error {
				background-color: #FF8080;
			}
			.hide {
				display: none;
			}
		</style>

  <!-- .............................................. -->







  <!-- VALIDACIONES -->




<script type="text/javascript" src="js/mootools.js">
</script> <script type="text/javascript"> 

</script>
<!--<script language="javascript" type="text/javascript" src="js/funciones.js">-->
</script> <script type="text/javascript"> 

</script>

<?php
// Notificar todos los errores excepto E_NOTICE
// Este es el valor predeterminado establecido en php.ini
error_reporting(E_ALL ^ E_NOTICE);
?>
<script type="text/javascript" src="js/formcheck.js">

</script>
  <script type="text/javascript">
	window.addEvent('domready', function(){check = new FormCheck('third', {
		display : {
			fadeDuration : 500,
			errorsLocation : 1,
			indicateErrors : 1,
			showErrors : 1
		}
	})});
</script>

  <!-- ............................................ -->
  
    
 
    





<!--  ............Letras que siguen al puntero.............. -->

<script language='javascript' type='text/javascript'>
//Cursor con texto en movimiento

//<![CDATA[
var x,y
var tempo = 10
var espera = 0

var texto = ""//"http://unedeprom m ich.gob.mx"

texto = texto.split("")

var xpos = new Array()
for (i = 0; i <= texto.length - 1; i++) {
xpos[i] = -50
}
var ypos = new Array()
for (i = 0; i <= texto.length - 1; i++) {
ypos[i] = -50
}

function seguir(e){

//si no es NS4, usa objeto window.event
if (!e) var e = window.event

//NS4
if (e.pageX || e.pageY) {
x = e.pageX
y = e.pageY
window.status = x + ' : ' + y
//IE y compatibles con DOM
} else if (e.clientX || e.clientY) {
x = e.clientX + document.body.scrollLeft + document.documentElement.scrollLeft
y = e.clientY + document.body.scrollTop + document.documentElement.scrollTop
window.status = x + ' : ' + y
//no soportado, no hace nada
} else {
return
}

espera = 1
}

function animar_cursor() {

if ( espera == 1 ) {
for ( i = texto.length - 1; i >= 1; i--) {
xpos[i] = xpos[i-1] + tempo
ypos[i] = ypos[i-1]
}
xpos[0] = x + tempo
ypos[0] = y
}

//para el IE 4.x
if ( espera==1 && document.all ) {
for (i = 0; i <= texto.length - 1; i++) {
var letra = eval("span" + i + ".style")
letra.posLeft = xpos[i]
letra.posTop = ypos[i]
}
}
//para el Netscape 4.x
else if ( espera==1 && document.layers ) {
for (i = 0; i <= texto.length - 1; i++) {
var letra = eval("document.span" + i)
letra.left = xpos[i]
letra.top = ypos[i]
}
}

//para navegadores compatibles DOM
else if ( espera==1 && document.getElementById ) {

for (i = 0; i <= texto.length - 1; i++) {
var letra = document.getElementById( "span" + i)

letra.style.left = xpos[i] + 'px'
letra.style.top = ypos[i] + 'px'
}
}

var timer = setTimeout("animar_cursor()", 30)
}

if (document.layers)
document.captureEvents(Event.MOUSEMOVE)
document.onmousemove = seguir
//]]>
</script>
<style type='text/css'>
.cursoranimado {
position:absolute;
visibility:visible;
top:-50px;
font-size:10pt;
font-family:Arial;
/*font-weight:bold;*/
color:#f5632c;
}
</style>
<script language='javascript' type='text/javascript'>
//<![CDATA[
if (document.layers) {
for (i=0;i<=texto.length-1;i++) {
document.write('<span id="span' + i + '" class="cursoranimado">')
document.write(texto[i])
document.write('</span>')
}
} else if (document.all || document.getElementById) {
for (i=0;i<=texto.length-1;i++) {
document.write('<div id="span' + i + '" class="cursoranimado">')
document.write(texto[i])
document.write('</div>')
}
}
animar_cursor()
//]]>
</script>




<script language="Javascript" type="text/javascript">
//<![CDATA[

<!-- Begin
document.oncontextmenu = function(){return false}
// End -->
//]]>
</script>


  
  <!--  ........................................ -->






</head>

<body>

<br />
 <center><span class="titulo1"><strong>UNEDEPROM</strong></span></center>
 
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

<form action="addmtro.php" method="post" name="form" id="third" class="styleThese" style="background:#FFF">
  <center><span class="titulo"><strong>::: Registro de Maestros :::</strong></span></center>
        

<!-- Clave -->
<br />
 </strong><strong><span class="blue">
 
 
  <tr>
 
  </tr>
</table>

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
    
    <center>
      <img src="../img/UNEDEPROM-01.png" width="164" height="154" />
    </center><br />
<br />

    
</body>

</html>



