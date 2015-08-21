<?php
    include("conexioncmb.php");

    // esta función se va a llamar al cargar el primer combo
    function obtenerMunicipios() {
        $municipios = array();
        $sql = "SELECT id, municipio 
                FROM municipios"; 

        $db = obtenerConexion();

        // obtenemos todos las sedes
        $result = ejecutarQuery($db, $sql);

        // creamos objetos de la clase sede y los agregamos al arreglo
        while($row = $result->fetch_assoc()){
            $row['municipio'] = mb_convert_encoding($row['municipio'], 'UTF-8', mysqli_character_set_name($db));          
            $municipio = new municipio($row['municipio'], $row['municipio']);
            array_push($municipios, $municipio);
        }

        cerrarConexion($db, $result);

        // devolvemos el arreglo
        return $municipios;
    }

    class municipio {
        public $id;
        public $municipio;

        function __construct($id, $municipio) {
            $this->id = $id;
            $this->municipio = $municipio;
        }
    }
//____________________________________________________________________________
   

    // esta función se va a llamar al cargar el primer combo
    function obtenerCedeprom() {
        $cedeproms = array();
        $sql = "SELECT id, cedeprom 
                FROM cedeprom"; 

        $db = obtenerConexion();

        // obtenemos todos las sedes
        $result = ejecutarQuery($db, $sql);

        // creamos objetos de la clase sede y los agregamos al arreglo
        while($row = $result->fetch_assoc()){
            $row['cedeprom'] = mb_convert_encoding($row['cedeprom'], 'UTF-8', mysqli_character_set_name($db));          
            $cedeprom = new cedeprom($row['cedeprom'], $row['cedeprom']);
            array_push($cedeproms, $cedeprom);
        }

        cerrarConexion($db, $result);

        // devolvemos el arreglo
        return $cedeproms;
    }

    class cedeprom {
        public $id;
        public $cedeprom;

        function __construct($id, $cedeprom) {
            $this->id = $id;
            $this->cedeprom = $cedeprom;
        }
    }
	//________________________________
	
	
	    function obtenerCursos() {
		$estatus="ABIERTO";	
        $cursos = array();
        $sql = "SELECT id, nombre 
                FROM cursos WHERE estatus ='ABIERTO'"; 

        $db = obtenerConexion();

        // obtenemos todos las sedes
        $result = ejecutarQuery($db, $sql);

        // creamos objetos de la clase sede y los agregamos al arreglo
        while($row = $result->fetch_assoc()){
            $row['nombre'] = mb_convert_encoding($row['nombre'], 'UTF-8', mysqli_character_set_name($db));          
            $nombre = new nombre($row['nombre'], $row['nombre']);
            array_push($cursos, $nombre);
        }

        cerrarConexion($db, $result);

        // devolvemos el arreglo
        return $cursos;
    }

    class nombre {
        public $id;
        public $nombre;

        function __construct($id, $nombre) {
            $this->id = $id;
            $this->nombre = $nombre;
        }
    }
//________________________________________
	
	
	$conexion = new mysqli("localhost","root","root","unedeprom",3306);

	$strConsulta = "select id, nombre from cursos WHERE estatus ='ABIERTO'";
	$result = $conexion->query($strConsulta);
	$cboCursos = '<option value="0"> SELECCIONE CURSO</option>';
	while( $fila = $result->fetch_array() )
	{
		$cboCursos.='<option value="'.$fila["id"].'">'.$fila["nombre"].'</option>';
	}
	
//________________________________________
	
	
?>