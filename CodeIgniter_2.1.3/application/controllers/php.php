<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Php extends CI_Controller {

   function login($idioma=null)
   {
         $this->load->helper('url');
		//$this->config->set_item('language', 'spanish');      //   Setear din�micamente el idioma que deseamos que ejecute nuestra aplicaci�n
      if(!isset($_POST['inputRut'])){   //   Si no recibimos ning�n valor proveniente del formulario, significa que el usuario reci�n ingresa.   
         $this->load->view('login');      //   Por lo tanto le presentamos la pantalla del formulario de ingreso.
      }
      else{                        //   Si el usuario ya pas� por la pantalla inicial y presion� el bot�n "Ingresar"
         $this->form_validation->set_rules('inputRut','','required');      //   Configuramos las validaciones ayudandonos con la librer�a form_validation del Framework Codeigniter
         $this->form_validation->set_rules('inputPassword','password','required');
         if(($this->form_validation->run()==FALSE)){ //   Verificamos si el usuario super� la validaci�n
            $this->load->view('login'); //   En caso que no, volvemos a presentar la pantalla de login
         }
         else{ //   Si ambos campos fueron correctamente rellanados por el usuario,
            $this->load->model('model_usuario');
            $ExisteUsuarioyPassoword=$this->model_usuario->ValidarUsuario($_POST['inputRut'],$_POST['inputPassword']);   //   comprobamos que el usuario exista en la base de datos y la password ingresada sea correcta
            if($ExisteUsuarioyPassoword){   // La variable $ExisteUsuarioyPassoword recibe valor TRUE si el usuario existe y FALSE en caso que no. Este valor lo determina el modelo.
               redirect('/Correo/', 'refresh');
			   //echo "Validacion Ok<br><br><a href=''>Volver</a>";   //   Si el usuario ingres� datos de acceso v�lido, imprimos un mensaje de validaci�n exitosa en pantalla
            }
            else{   //   Si no logr� validar
               //$data['error']="Rut o password incorrecta, por favor vuelva a intentar";
               redirect('/Login/', 'refresh'); //   Lo regresamos a la pantalla de login y pasamos como par�metro el mensaje de error a presentar en pantalla
            }
         }
      }
   }
}
?>