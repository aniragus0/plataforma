<?php
class Conectar 
{
	public static function con()
	{
		$conexion=mysql_connect("localhost","root","root");
		mysql_query("SET NAMES 'utf8'");
		mysql_select_db("unedeprom");
		return $conexion;
	}
}
//******************************************************************
class Trabajo
{
	//private $visitas=array();
	private $visitas;
	
	public function __construct()
		{
			$this->visitas=array();
		}
	public function get_visitas()
	{
		$sql="select * from maestros order by nombre asc";
		
		$res=mysql_query($sql,Conectar::con());
		
		while ($reg=mysql_fetch_assoc($res))
		{
			$this->visitas[]=$reg;
		}
			return $this->visitas;
	}	
	
	public function get_visitas_por_id($id)
	
	{
		$sql="select * from maestros where id=$id";
		$res=mysql_query($sql,Conectar::con());
		while ($reg=mysql_fetch_assoc($res))
		{
			$this->visitas[]=$reg;
		}
			return $this->visitas;
	}
	
	public function get_buscar_maestro($id)
	
	{
		//$sql="select * from maestros where id=$id";
		$sql="select * from maestros where nombre LIKE '".$id."%' or apellidos LIKE '".$id."%' or rfc LIKE '".$id."%' LIMIT 0 , 5";
		
		$res=mysql_query($sql,Conectar::con());
		while ($reg=mysql_fetch_assoc($res))
		{
			$this->visitas[]=$reg;
		}
			return $this->visitas;
	}
	
	public function edit_visitas($nom,$texto,$id)
	{
		//$sql="update libro_de_visitas set nombre_persona='$nom',texto='$texto' where id=$id";
		
		$sql="update libro_de_visitas "
			." set "
			." nombre_persona='$nom', "
			." texto='$texto' "
			." where "
			." id=$id ";
		$res=mysql_query($sql,Conectar::con());
		echo "<script type='text/javascript'>
		alert('El registro ha sido modificado correctamente');
		window.location='index.php';
		</script>";	
		
	}
	
	
	
	
	public function eliminar_visita($id)
	{
		$sql="delete from libro_de_visitas where id=$id";
		$res=mysql_query($sql,Conectar::con());
		echo "<script type='text/javascript'>
		alert('El registro ha sido eliminado correctamente');
		window.location='index.php';
		</script>";
	}
}
?>