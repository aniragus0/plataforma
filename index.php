<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="es" xmlns="http://www.w3.org/1999/xhtml" lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="UNEDEPROM">
<meta name="description" content="Modulo de registro de inscripciones.">
<meta name="author" content="ISC Salvador Aguilar Villaseñor y ISC Zeferino Rosiles Hernández.">
<meta name="COPYRIGHT" content="unedeprommich.gob.mx">
<title>Resgistro de inscripciones.</title>
<link href="img/favicon.ico" rel="SHORTCUT ICON">
<link href="css/login.css" rel="stylesheet" media="screen" type="text/css">
</head>
        
<body>
<h1>&nbsp;</h1>

<div id="div_cabecera_id"></div>
	<div id="div_main_id">
        <br /><br /><br />
    	<div id="div_content_id">
            <br /><br />
            <div id="div_image_unede_id">
                <h3 style="padding:0; margin:0;">MÓDULO DE REGISTRO</h3><br /><br />
                <table align="center" width="225" cellspacing="2" cellpadding="2" border="0">
        <tr>
            <td colspan="2" align="center"
            <?php 
				if ($_GET["errorusuario"]=="si"){
			?>
            bgcolor=red>
            <span style="color:ffffff"><b>Datos incorrectos</b></span>
            <?php 
				}else{
			?>
            bgcolor=#cccccc>Introduce los datos
            <?php 
				}
			?>
            </td>
        </tr>
        </table>
                
            </div>
            <div id="div_bloque1_id">
                <div id="div_form_id">
                    <form action="php/sesion/login.php" method="POST">
    <table id="table_login_id" align="center" width="225" cellspacing="2" cellpadding="2" border="0">
            <tr>
            <td align="left">Usuario:</td>
            <td><div class="input_text_login_class">
            <input type="Text" name="text_usuario_id" height="18" size="30" maxlength="50" class="input_text_login_class">
            </div></td>
        </tr>
        <tr>
            <td align="left">Clave:</td>
            <td><div class="input_text_login_class">
            <input type="password" name="text_clave_id" size="28" maxlength="50" class="input_text_login_class">
            </div></td>
            </tr>
            <tr>
            <td colspan="2" align="center"><input type="Submit" size="30" value="ENTRAR"></td>
        </tr>
    </table>
</form>
                </div>
                <div id="div_content_right_id">
                    <br/>
                    <!--img src="img/sipp.png" width="117" height="58" /-->
                    <h1>UNEDEPROM<br />
                  MICHOACAN</h1>
                </div>
            </div>
            <br/>
            <div id="div_bloque2_id">
		        <div class="div_box_class"><img src="img/michoacan.jpg" width="108" height="153" alt="Michoacán." border="0" style="margin-right:20px; margin-top:60px;" /></div>
		        <div class="div_box_class"><img src="img/UNEDEPROM-01.png" width="164" height="154" alt="Unedeprom." border="0" style="margin-right:20px; margin-top:60px;" /></div>
		        <div class="div_box_class"><img src="img/SE.png" width="144" height="122" alt="SE."border="0" style="margin-right:0px; margin-top:75px;" /></div>
            </div>
        </div>
    </div>
	<div id="div_pie_id">
        <h1>&nbsp;</h1>
    </div>
</body>
</html>