<?php
$con=mysql_connect("localhost","root","root");
$bd=mysql_select_db("unedeprom");



//Convierto los acentos a HTML
function acento($entra)
{
$traduce=array( '�' => '&aacute;' , '�' => '&eacute;' , '�' => '&iacute;' , '�' => '&oacute;' , '�' => '&uacute;' , '�' => '&ntilde;' , '�' => '&Ntilde;' , '�' => '&auml;' , '�' => '&euml;' , '�' => '&iuml;' , '�' => '&ouml;' , '�' => '&uuml;');
$sale=strtr( $entra , $traduce );
return $sale;
}

?>