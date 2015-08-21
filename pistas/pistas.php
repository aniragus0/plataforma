<?php
session_start();
if(!isset($_SESSION["usuario"]))
{
	header("Location: ../index.html");
}

$u_ip = $_SERVER["REMOTE_ADDR"];
				require("connection.php");
				$types= new SongData();
				$classes=$types->get_classes();
				$selections="";
				$type_list="";
				while($row=mysql_fetch_array($classes))
				{
				
                 $selections.="<option value='". $row["c_id"]."'>" .$row["c_name"]. "</option>";
				 $type_list.=" <a style='color:gray' onclick=getList('type','".$row["c_id"]."','')  href='javascript:void(0);'>".$row["c_name"]."</a> | ";
                
				}
				$types->close();
                
?> 
<html xml:lang="es" xmlns="http://www.w3.org/1999/xhtml" lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="Musica, mp3...">
<meta name="description" content="All-Muzik Pistas Musicales">
<meta name="author" content="Salvador Aguilar Villaseñor.">
<meta name="COPYRIGHT" content="ceneval.edu.mx">
        <title>Pistas</title>
        <link href="../imagenes/favicon.ico" rel="SHORTCUT ICON">
        <script type="text/javascript" src="jquery/jquery.min.js"></script>
<script type='text/javascript' src='jquery/jquery.simplemodal.js'></script>
<script type="text/javascript" src="js/default.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/estilos.css"/>
        <link type='text/css' href='css/basic.css' rel='stylesheet' media='screen' />
        <link href="css/default.css" rel="stylesheet" type="text/css" />
    </head>

    <body cz-shortcut-listen="true">
        <div id="wrapper">
            <header>
                <div class="define">
                    <marquee direction='right' width='100%' height='70' scrollamount='2' scrolldelay='150' onMouseOver='stop()' onMouseOut='start()'>
<center><font size="+3"><strong>All-Muzik</strong></font><br /><font size="+1"> <img src="../imagenes/music-25659_640.png" width="20" height="26"> Pistas Musicales <img src="../imagenes/music-25659_640.png" width="20" height="26"> </font></center>
</marquee>

                </div>
            </header>
          
           <section>
            
            <div id="menu">
                  <a href="../index.html" border="0" style="text-decoration:none">
                  <div id="inicio" class="botonon"> Inicio </div></a>
                  <a href="../discografias.html" border="0" style="text-decoration:none">
                  <div id="discografias" class="botonon"> Discografias </div></a>
                  <div id="pistas" class="botonoff"> Pistas </div>
                  <a href="../registro.php" border="0" style="text-decoration:none">
                  <div id="registro" class="botonon"> Registro </div></a>
                  <a href="../contacto.html" border="0" style="text-decoration:none">
                  <div id="contacto" class="botonon"> Contacto </div>
                  </a>
				</div>
                <div class="define"><br><br>
                   <div id="main">
    	<div id="sort">
       <!--  <? echo $type_list ?>
        <a href="javascript:void(0);" onclick="getList('time','','')" style="color:yellow">Newest</a> | <a href="javascript:void(0);" onclick="getList('popular','','')" style="color:red;">Most popular</a>
        <input type="text" name="textfield" id="textfield" />
    	<input type="submit" name="button" id="button" value="Search" />--><span style="float:right">Bienvenido: <?php  echo $_SESSION["usuario"] ?><br>
<a href="../php/salir.php">Salir</a></span> <div id="player">
     <div id="player_font">Control de Música</div>
	<div id="music_player"><script type="text/javascript">document.write(player("","0"));</script></div>
    </div>
    	</div>
        
        <div id="list">
        	

        </div>
        
</div>
	
    </div>

<div id="sharemusic" style="display:none">
	<span style=" margin-top:30px; font-family:Arial, Helvetica, sans-serif ; font-size:28px; color:white;">Share with us! </span>
	<hr/>
	<form id="shareform" name="sharefrom" method="post" action="">
		<table width="650" cellpadding="0" cellspacing="0" pa border="0" >
		  <tr>
		    <td width="151" class="std_left">Song's Name:
	        </td>
		    <td width="489"><input type="text" name="sname" id="sname"  size="30"/></td>
	      </tr>
		  <tr>
		    <td class="std_left">Singer:</td>
		    <td><input type="text" name="ssinger" id="ssinger"  size="30"/></td>
	      </tr>
		  <tr>
		    <td class="std_left">Song's URL:</td>
		    <td><input type="text" name="surl" id="surl"  size="50" value="http://"/></td>
	      </tr>
		  <tr>
		    <td class="std_left">Song's Type:</td>
		    <td><select name="stype" id="stype" >
				<? echo $selections ?>
                </select></td>
	      </tr>
		  <tr>
		    <td class="std_left">Tags:</td>
		    <td><input type="text" name="stag" id="stag"  size="30"/>
            <span style="font-size:12px;">(Split each one by Space, for example: &quot;seft-record High soft&quot;.)</span></td>
	      </tr>
		  <tr>
		    <td class="std_left">Picture's URL: </td>
		    <td><input type="text" name="spicurl" id="spicurl" value="http://" size="50"/></td>
	      </tr>
		  <tr>
		    <td class="std_left">Your ip: </td>
		    <td><span style="color:#DF626F">&nbsp;<?php echo $u_ip ?>&nbsp;</span>Thank you for shareing! </td>
	      </tr>
          <tr>
          	<td colspan="2"><div align="center">
          	  <input type="button" onClick="s_submit()" id="sbutton"  value="Share it!" />
          	</div></td>
          </tr>
	  </table>
</form>

</div>
<div id="aboutme" style="display:none">
aboutme
</div>
                    
                </div>
           <!-- </section>-->
        </div>
        
        
        
            <footer>
                <div class="define">
                    <p>Contenido disponible en: <br><br>

                    <img src="../imagenes/ios.jpg" width="147" height="48"><img src="../imagenes/Android.jpg" width="148" height="48"></p>
                </div>
            </footer>
     
    </body>
</html>