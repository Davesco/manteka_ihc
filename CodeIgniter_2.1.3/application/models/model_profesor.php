<?php

class Model_profesor extends CI_Model {
   public $rut_profesor = 0;
    var $nombre_profesor = '';
    var $apellido_paterno='';
    var $correo_prof1='';
    var $correo_prof2='';
    var $telefono='';
    var $tipo=''; // se refiere a si es profesor normal o coordinador
//OPERACIÓN PARA INGRESAR PROFESOR    
public function InsertarProfesor() {
        $this->rut_profesor = $_POST['rut_profesor'];
        $this->nombre_profesor = $_POST['nombre_profesor'];
        $this->apellido_paterno = $_POST['apellido_paterno'];
        $this->correo_prof1 = $_POST['correo_prof1'];
        $this->correo_prof2 = $_POST['correo_prof2'];
        $this->telefono = $_POST['telefono'];
        $this->tipo= $_POST['tipo'];

        // inserta los campos guardados en la tabla profesor
        $this->db->insert('PROFESOR', $this);
    }

// OPERACIÓN PARA ELIMINAR PROFESOR
    public function EliminarProfesor($rut_profesor)
    {
        $db->query("DELETE FROM PROFESOR WHERE rut_profesor = '$rut_profesor' ");
    }
    
//OPERACIÓN PARA VER A UN PROFESOR
    public function VerProfesor($rut_profesor)
    {
$sql="SELECT * FROM PROFESOR WHERE rut_profesor = '$rut_profesor' "; //código MySQL
		$datos=mysql_query($sql); //enviar código MySQL
		$row=mysql_fetch_array($datos);
		$profesor[0] = $row['RUT_PROFESOR'];
		$profesor[1] = $row['NOMBRE_PROFESOR'];
		$profesor[2] = $row['APELLIDO_PATERNO'];
		$profesor [3] = $row['CORREO_PROF1'];
		$profesor [4] = $row['CORREO_PROF2'];
		$profesor [5] = $row['TELEFONO'];
		$profesor [6] = $row['TIPO'];
		return $profesor;
    }

//OPERACIÓN VER A TODOS LOS PROFESORES
	public function VerTodosLosProfesores()
	{
		$sql="SELECT * FROM PROFESOR ORDER BY APELLIDO_PATERNO"; //código MySQL
		$datos=mysql_query($sql); //enviar código MySQL
		$contador = 0;
		$lista;
		while ($row=mysql_fetch_array($datos)) { //Bucle para ver todos los registros
			$lista[$contador][0] = $row['RUT_PROFESOR'];
			$lista[$contador][1] = $row['NOMBRE_PROFESOR'];
			$lista[$contador][2] = $row['APELLIDO_PATERNO'];
			$lista[$contador][3] = $row['CORREO_PROF1'];
			$lista[$contador][4] = $row['CORREO_PROF2'];
			$lista[$contador][5] = $row['TELEFONO'];
			$lista[$contador][6] = $row['TIPO'];
			$contador = $contador + 1;
		}
		return $lista;
		}

//OPERACIÓN EDITAR PROFESOR
    public function EditarProfesor($rut_profesor)
    {
        $this->rut_profesor = $_POST['rut_profesor'];
        $this->nombre_profesor = $_POST['nombre_profesor'];
        $this->apellido_paterno = $_POST['apellido_paterno'];
        $this->correo_prof1 = $_POST['correo_prof1'];
        $this->correo_prof2 = $_POST['correo_prof2'];
        $this->telefono = $_POST['telefono'];
        $this->tipo= $_POST['tipo'];

        // se modifican los datos del profesor
        $this->db->update('PROFESOR', $this);
    }
}

	//Funci?n get que obtiene profesores, si se le da un argumento obtiene cantidad de profesores
	/*$this->db->select('*');
	$this->db->from('blogs');
	$this->db->join('comments', 'comments.id = blogs.id');
	$query = $this->db->get();
	$data = $this->db->query("SELECT *	FROM profesor"); // the entries for the relevant month and year
	    return $data->result_array();
	*/
	/*
	function ObtenerProfesor(){	
		$this->db->select('*');
		$this->db->from('profesor');
		$data = $this->db->get();
	    return $data->result_array();
	}
   
   function ValidarUsuario($rut,$password){         //   Consulta Mysql para buscar en la tabla Usuario aquellos usuarios que coincidan con el rut y password ingresados en pantalla de login
      $query = $this->db->where('RUT_USUARIO',$rut);   //   La consulta se efect?a mediante Active Record. Una manera alternativa, y en lenguaje m?s sencillo, de generar las consultas Sql.
      $query = $this->db->where('PASSWORD',md5($password));
      $query = $this->db->get('usuario'); //Ac? va el nombre de la tabla
      return $query->row();    //   Devolvemos al controlador la fila que coincide con la b?squeda. (FALSE en caso que no existir coincidencias)
   }*/
?>
