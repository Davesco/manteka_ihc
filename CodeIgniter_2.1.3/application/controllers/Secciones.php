<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Secciones extends CI_Controller {
	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function index() //Esto hace que el index sea la vista que se desee
	{
		$this->verSecciones();
	}

	public function verSecciones()
	{
		/*$rut = $this->session->userdata('rut'); //Se comprueba si el usuario tiene sesi�n iniciada
		if ($rut == FALSE) {
			redirect('/Login/', ''); //Se redirecciona a login si no tiene sesi�n iniciada
		}*/
		$datos_plantilla["rut_usuario"] = $this->session->userdata('rut');
		$datos_plantilla["title"] = "ManteKA";
		$datos_plantilla["menuSuperiorAbierto"] = "Secciones";
		$datos_plantilla["head"] = $this->load->view('templates/head', $datos_plantilla, true);
		$datos_plantilla["barra_usuario"] = $this->load->view('templates/barra_usuario', $datos_plantilla, true);
		$datos_plantilla["banner_portada"] = $this->load->view('templates/banner_portada', '', true);
		$datos_plantilla["menu_superior"] = $this->load->view('templates/menu_superior', $datos_plantilla, true);
		$datos_plantilla["barra_navegacion"] = $this->load->view('templates/barra_navegacion', '', true);
		$datos_plantilla["mostrarBarraProgreso"] = TRUE; //Cambiar en caso que no se necesite la barra de progreso
		$datos_plantilla["barra_progreso_atras_siguiente"] = $this->load->view('templates/barra_progreso_atras_siguiente', $datos_plantilla, true);
		$datos_plantilla["footer"] = $this->load->view('templates/footer', '', true);
		
		
		//L�gica del controlador


    $alumnos1 = '<tr><td>ingenieria</td><td>12558996-8</td><td>araucano</td><td>maternox</td><td>gonzalo</td><td>miMail@usach.cl</td></tr>';
    $alumnos2 = '<tr><td>ingenieria</td><td>12558996-8</td><td>araucano</td><td>maternox</td><td>gonzalo</td><td>miMail@usach.cl</td></tr><tr><td>Arquitectura</td><td>1111111-8</td><td>mu�oz</td><td>varas</td><td>lokohanks</td><td>miMail@usach.cl</td></tr>';
    $alumnos3 = '<tr><td>Arquitectura</td><td>1111111-8</td><td>mu�oz</td><td>varas</td><td>lokohanks</td><td>miMail@usach.cl</td></tr>';
    $seccion1 = [1,'nombreseccio1',"profesor1" ,'v1', '9_3','56567',$alumnos1];
    $seccion2 = [2,'nombreseccio2',"profesor2", 'v2', '_30','6567',$alumnos2];
    $seccion3 = [3,'nombreseccio3',"profesor3", 'v3', '9:0','567',$alumnos3];
    //  id   nombre_seccion   nombre_profesor   modulo   horario   sala   alumnos
    


		$datos_cuerpo['listado_secciones']=[$seccion1, $seccion2, $seccion3];
		
		
		
		
		$datos_plantilla["cuerpo_central"] = $this->load->view('cuerpo_secciones_ver', $datos_cuerpo, true); //Esta es la linea que cambia por cada controlador
		$datos_plantilla["barra_lateral"] = $this->load->view('templates/barras_laterales/barra_lateral_secciones', '', true); //Esta linea tambi�n cambia seg�n la vista como la anterior
		$this->load->view('templates/template_general', $datos_plantilla);
		
	}
	

	public function crearSecciones()
    {
    	//
    }
    
    public function modificarSecciones()
    {
    	//
    }

    public function eliminarSecciones()
    {
    	//
    }
}

/* End of file Correo.php */
/* Location: ./application/controllers/Correo.php */