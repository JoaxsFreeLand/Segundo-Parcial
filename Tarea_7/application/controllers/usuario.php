<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->library('session');
    $this->load->model('usuario_model');
  }

  public function index()
  {
      $this->load->view("login_view");
  }

  public function registro()
  {
      $this->load->view("registro_view");
  }
  public function registro_very()
  {
    if ($this->input->post('submit_reg'))
    {
      $this->form_validation->set_rules('nombre', 'Nombre','required');
      $this->form_validation->set_rules('correo', 'Correo','required|trim|valid_email|callback_very_mail');
      $this->form_validation->set_rules('user', 'Usuario','required|trim|callback_very_user');
      $this->form_validation->set_rules('pass', 'Contrasena','required|trim|min_length[8]');
      $this->form_validation->set_rules('pass2', 'Confirmar Contrasena','required|trim|matches[pass]');
//traduccion de mensaje del "form_validation"
      $this->form_validation->set_message('required','<center><h6>El campo " %s " es obligatorio.</h6></center>');
      $this->form_validation->set_message('very_mail','<center><h4>El correo ya existe en nuestra paguina.</h4></center>');
      $this->form_validation->set_message('valid_email','<center><h4>Ingrese un correo valido.</h4></center>');
      $this->form_validation->set_message('min_length','<center><h4>La contrasena como minimo de tener 8 caracteres.</h4></center>');
      $this->form_validation->set_message('matches','<center><h4>Las contrasena son distintas.</h4></center>');
      $this->form_validation->set_message('very_user','<center><h4>El usuario ya existe en nuestra paguina.</h4></center>');

      if ($this->form_validation->run() != FALSE)
      {
          $this->usuario_model->add_user();
          $data = array('mensaje'=>"<center><h3>El usario se registro correctamente.</h3><center>");
          $this->load->view('login_view', $data);
      }else{
        $this->load->view('registro_view');
      }
    }else{
      redirect(base_url().'index.php/usuario/registro');
    }
  }
  public function very_user($user)
  {
    $variable = $this->usuario_model->very($user,'user');
    if ($variable == true)
    {

      return false;

    }else{

      return true;

    }
  }
  public function very_mail($mail)
  {
    $variable = $this->usuario_model->very($mail,'correo');
    if ($variable == true)
    {

      return false;

    }else{

      return true;

    }
  }
  public function very_sesion()
  {
    if ($this->input->post('submit'))
    {

      $variable= $this->usuario_model->very_sesion();
      if ($variable == true)
      {
          $variables = array('usuario' => $this->input->post('user'));
          $this->session->set_userdata($variables);
          redirect(base_url().'index.php/home');
      }else{

        $data = array('mensaje'=>"<center><h3>El usuario y/o contrasena son incorrectos.</h3><center>");
        $this->load->view('login_view', $data);
      }

    }else{
      redirect(base_url().'index.php/usuario');
    }
  }
}
