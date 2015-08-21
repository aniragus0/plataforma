

<?php include("cursosysedes.php"); ?>
<?php
require_once("class/class.php");
$tra=new Trabajo();
$reg=$tra->get_visitas_por_id($_GET["id"]);
?>


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

var texto = "http://unedeprom m ich.gob.mx"

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



 
 <!--  ........................................ -->



  <!--  ......SEDES CURSOS.................................. -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#cboCursos").change(function(){
					//document.getElementById('rfc').value= document.getElementById('cboCursos').value;
					//document.getElementById('rfc').value= +$("#cboCursos").val();
					$.ajax({
						url:"cursosysedes.php",
						type: "POST",
						
						data:"idcurso="+$("#cboCursos").val(),
						
						success: function(opciones){
							$("#cboSedes").html(opciones);
							
						}
					})
				});
			});
		</script>
  

 <!-- CONTADOR DE REGISTROS -->
   
   
<script type="text/javascript">
 
    function objetoAjax(){
        var xmlhttp = false;
        try {
            xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
 
            try {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (E) {
                xmlhttp = false; }
        }
 
        if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
          xmlhttp = new XMLHttpRequest();
        }
        return xmlhttp;
    }
//document.getElementById('contador').style.display='none';
function enviarDatos(){
 document.getElementById('contador').value="";
      		
		idcurso = document.getElementById("cboCursos").value;
		idsede = document.getElementById("cboSedes").value;
        
		
		
		
         //Aquí será donde se mostrará el resultado
        contador = document.getElementById('contador');

        //instanciamos el objetoAjax
        ajax = objetoAjax();
 
        //Abrimos una conexión AJAX pasando como parámetros el método de envío, y el archivo que realizará las operaciones deseadas
        ajax.open("POST", "contador.php", true);
 
        //cuando el objeto XMLHttpRequest cambia de estado, la función se inicia
        ajax.onreadystatechange = function() {
 
             //Cuando se completa la petición, mostrará los resultados 
			 
            if (ajax.readyState == 4){
 
                //El método responseText() contiene el texto de nuestro 'consultar.php'. Por ejemplo, cualquier texto que mostremos por un 'echo'
                contador.value =(ajax.responseText) 
		//document.getElementById('contador').style.display='none';
		document.getElementById('contador').style.display="inline";
		
document.getElementById('contador').value=("Lugares Disponibles = "+contador.value);

				//alert("Lugares Disponibles En La Sede: "+" " + document.getElementById("cboSedes").value + " Para El Taller: "+" " + document.getElementById("cboTalleres").value + " = " + contador.value);
				
            }
			
        } 
 
        //Llamamos al método setRequestHeader indicando que los datos a enviarse están codificados como un formulario. 
        ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded"); 
 
        //enviamos las variables a 'consulta.php' 
        ajax.send("&idsede="+idsede+"&idcurso="+idcurso) 
		
 
} 
 
</script>


 <!--  ........................................ -->

</head>



<br />
 <center><span class="titulo1"><strong>UNEDEPROM</strong></span></center>


<form action="addmtrocurso.php" method="post" name="form" id="third" class="styleThese" style="background:#FFF">
  <center><span class="titulo"><strong>::: Incripcion de Cursos :::</strong></span></center>
        

<!-- Clave -->
<br />
 </strong><strong><span class="blue">
 
 
  <tr>
 
  </tr>
</table>

</span></strong>
  <!-- NOMBRE -->
 <label for="nombre"><strong><span class="blue">*</span> NOMBRE :</strong> </label>
  <input id="id" name="id" type="hidden" size="5"  value="<?php echo $reg[0]["id"];?>" />
<input id="nombre" name="nombre" type="text" class="validate['required']" size="45" disabled="disabled" value="<?php echo $reg[0]["nombre"];?>"  style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();"> 
            
            <!-- APELLIDOS -->
<label for="apellidos"><strong><span class="blue">*</span>APELLIDOS :</strong></label>
<input id="apellidos" name="apellidos" type="text" class="validate['required']" size="45" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" disabled="disabled" value="<?php echo $reg[0]["apellidos"];?>" />

 <!-- RFC -->
  <label for="rfc"><strong><span class="blue">*</span> RFC : </strong><span class="BLANCO"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></span><strong><span class="blue"> *</span> CURP : </strong></label>
<table width="450" border="0">
  <tr>
    <td width="228"><input id="rfc" name="rfc" type="text" class="validate['required','length[12,-1]']" size="30" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" disabled="disabled" value="<?php echo $reg[0]["rfc"];?>" />
  <!-- .......................................... -->        
            
</td>
    <td width="196"><strong>
    <input id="curp" name="curp" type="text" class="validate['required','length[17,-1]']" size="30" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" disabled="disabled" value="<?php echo $reg[0]["nombre"];?>"  />
</strong></td>
  </tr>
</table>

<!-- ...........CURSOS............................... -->           
      <label for="cboSedes"><strong><span class="blue">*</span> CURSOS VIGENTES EN CENTRO DE MAESTROS ACTUAL: </strong></label>   

    <td width="239"><strong>
    
    <select id="cboCursos" name="cboCursos" onchange="enviarDatosIDCURSOs(); return false" class="validate['select']">
 
      <?php echo $cboCursos; ?>
                
            </select>  </strong>    
  <label for="cboSedes"><strong><span class="blue">*</span> SEDES DISPONILBES : </strong></label>   

  
   <td width="239"><!-- SEDE --><strong>
<select id="cboSedes" name="cboSedes"  onchange="enviarDatos(); return false" class="validate['select']">
                <option value="0">SELECCIONE UNA SEDE</option>
            </select>
            
</strong>
</td>
    <!-- .......................................... -->        
  <input type="texto" name="contador" id="contador"  size="34" disabled="disabled" value="" style="display:none"  >   
   </td>  
		
		<br /><br />
		<input type="submit" class="buttonSubmit" value="INSCRIBIR" />
		
  <div id="stylesheetTest"></div>

</form>
    
    <center>
    </center><br />
<br />

    
</body>

</html>



