<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
  public function very($variable, $campo)
  {
    $consulta = $this->db->get_where('usuario',array($campo=>$variable));
    if($consulta->num_rows() == 1)
    {

      return true;

    }else{

      return false;

    }
  }
  public function add_user()
  {
    $this->db->insert('usuario', array(
                      'nombre'=>$this->input->post('nombre',TRUE),
                      'correo'=>$this->input->post('correo',TRUE),
                      'user'=>$this->input->post('user',TRUE),
                      'pass'=>$this->input->post('pass',TRUE),
                      'estado'=>0

              ));
  }

  public function very_sesion()
  {
    $consulta = $this->db->get_where('usuario', array(
                                     'user'=>$this->input->post('user',TRUE),
                                     'pass'=>$this->input->post('pass',TRUE)
                                     ));

    if ($consulta->num_rows() == 1)
    {

      return true;

    }else{

      return false;

    }
  }
}
