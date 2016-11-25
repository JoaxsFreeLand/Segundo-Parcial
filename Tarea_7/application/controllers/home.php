<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->library('session');
    $this->very_sesion();
    $this->load->model('home_model');

  }

  public function index()
  {
    echo "<div id='caja_inicioSeccion2'><br><center><h2>Hola bienvenido " . $this->session->userdata('usuario') . "</h2></center> ";
  //  $d = array();
    //$d['mascotas'] = $this->home_model->lista();


    $tmb = array();
    $tmb['mascota'] =  $this->home_model->lista();
    //var_dump($tmb);

    $this->load->view('home_view', $tmb);
  }



  public function registrar_masco()
  {
  if($this->input->post('submit_masco'))
    {
      $this->form_validation->set_rules('name','Nombre','required');
      $this->form_validation->set_rules('fNacimiento','Fecha de Nacimiento','required');
      $this->form_validation->set_rules('tipo','Tipo','required');
      $this->form_validation->set_rules('raza','Raza','required');
      $this->form_validation->set_rules('peso','Peso','required');
      $this->form_validation->set_rules('color','Color','required');

      //traduccion de mensaje del "form_validation"
      $this->form_validation->set_message('required','<h5>El campo " %s " es obligatorio.</h5>');
      if ($this->form_validation->run() != FALSE)
      {
          $this->home_model->add_mascota();
          $data = array('mensaje'=>"<center><h3>Tu mascota se registro correctamente.</h3><center>");
          //redirect(base_url().'index.php/home', $data);
          //$tmb = array();
          //$tmb['mascota'] =  $this->home_model->lista();
          $this->load->view('homeC_view',$data);
      }else{
        $this->load->view('home_view');
      }
    }else{
      redirect(base_url().'index.php/usuario');
    }


  }




  function very_sesion()
  {
    if(!$this->session->userdata('usuario'))
    {
      redirect (base_url().'index.php/usuario');
    }
  }
}
