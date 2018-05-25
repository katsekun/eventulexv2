<?php
class eventulex extends CI_Controller 
{
    // http://localhost/codeigniter/index.php/eventulex/
    public function index() // Página principal
    {

    	$this->load->helper(array('form', 'url'));
    	$this->load->library('table');
    	
        $this->load->model('eventulex_model','',TRUE);
		$data['query'] = $this->eventulex_model->muestraEventos();

        $this->load->view('eventCabecera');
        $this->load->view('eventPrincipal',$data);
        $this->load->view('eventPie');
    }

    public function login()
    {
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->view('eventCabecera');
        $this->load->view('eventAcceso');
        $this->load->view('eventPie');

    }

    public function usuarioValida()  //Validar usuario registrado
    {
    	// helpers y libraries
    	$this->load->helper('url');
      $this->load->library('form_validation');

      // Validaciones
        $this->form_validation->set_rules('usuario', 'Usuario', 'required', array('required' => 'El nombre de Usuario es obligatorio.'));

        $this->form_validation->set_rules('pass', 'Contraseña', 'required', array('required' => 'La Contraseña es obligatoria.')); 


        if ($this->form_validation->run()) // Si se valida todo bien 
        {
               
            $this->load->model('eventulex_model','',TRUE);
            $data['query'] = $this->eventulex_model->login();
            if (count($data['query'])!= 0)
            {
              $this->load->view('eventCabecera');
              $this->load->view('eventUserPrivado');
              $this->load->view('eventPie');
            }
              else
              {
                $data['query'] = $this->eventulex_model->existe();
              if (count($data['query'])!= 0)
              {
                  echo "<script>" .
                      "alert('Contraseña incorrecta');" .
                      "window.location.assign('" . site_url("/eventulex/acceso/") . "');</script>";
              }
              else
              {
                  echo "<script>" .
                      "alert('Usuario no registrado');" .
                      "window.location.assign('" . site_url("/eventulex/acceso/") . "');</script>";
              }
            }
        }
        else // Error al validar
        {
            echo "<script>" .
                "alert('Error del servidor, intentelo más tarde');" .
                "window.location.assign('" . site_url("/eventulex/acceso/") . "');</script>";
        }
    }

    public function validaNuevo() // Validar nuevo usuario
    {
      $this->load->helper('url');
      $this->load->library('form_validation');

      // Validaciones
        $this->form_validation->set_rules('usuario', 'Usuario', 'required', array('required' => 'El nombre de Usuario es obligatorio.'));

        $this->form_validation->set_rules('pass', 'Contraseña', 'required', array('required' => 'La Contraseña es obligatoria.')); 

        $this->form_validation->set_rules('pass2', 'validación', 'required|matches[pass]', array('required' => 'La validación es obligatoria.'));

        if ($this->form_validation->run()) // Si se valida todo bien 
        {
          // Si suario y contraseña = administrador
          if ($this->input->post('usuario')=="administrador" && $this->input->post('pass')=="administrador")
          {
              echo "<script>" .
                  "alert('No te pases de listo');" .
                  "window.location.assign('" . site_url("/eventulex/") . "');</script>";
            }
            else
            {
              $this->load->model('ej13tenis_model');
              $data['query'] = $this->ej13tenis_model->existe();
            if (count($data['query'])!= 0)
            {
                echo "<script>" .
                    "alert('El usuario ya existe');" .
                    "window.location.assign('" . site_url("/eventulex/acceso/") . "');</script>";
            }
            else
            {
              $data['query'] = $this->ej13tenis_model->alta();
 
              echo "<script>" .
                    "alert('Usuario dado de alta');" .
                    "window.location.assign('" . site_url("/eventulex/") . "');</script>";
            }
            }
        }
        else // Error al validar
        {

            echo "<script>" .
                "alert('Error del servidor, intentelo más tarde');" .
                "window.location.assign('" . site_url("/eventulex/acceso/") . "');</script>";
        }
    }

    public function acceso()
    {
    	$this->load->view('eventCabecera');
        $this->load->view('eventUserAcceso');
        $this->load->view('eventPie');
    }
}