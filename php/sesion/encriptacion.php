<?php
	function encriptar($cadena)
	{
		$resultado = "";
		for($i=0 ; $i<strlen($cadena) ; ++$i)
		{
			$resultado .= chr(ord($cadena[$i])+13);
		}
		return $resultado;
	}
	
	function desencriptar($cadena)
	{
		$resultado = "";
		for($i=0 ; $i<strlen($cadena) ; ++$i)
		{
			$resultado .= chr(ord($cadena[$i])-13);
		}
		return $resultado;
	}
?>