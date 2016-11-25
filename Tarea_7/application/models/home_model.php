<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }
  public function lista()
  {
    $query = $this->db->get('mascota');
    return $query->result();
  }

  public function add_mascota()
  {
    $this->db->insert('mascota', array(
                      'name'=>$this->input->post('name',TRUE),
                      'fNacimiento'=>$this->input->post('fNacimiento',TRUE),
                      'tipo'=>$this->input->post('tipo',TRUE),
                      'raza'=>$this->input->post('raza',TRUE),
                      'peso'=>$this->input->post('peso',TRUE),
                      'color'=>$this->input->post('color',TRUE),
                      'comentario'=>$this->input->post('comentario',TRUE)
              ));
  }
}
