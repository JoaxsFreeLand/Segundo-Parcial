<?php $this->load->view('inicio_html');?>
<!-- El <div id = 'caja_inicioSeccion2'> lo paso por un echo... que esta en el controlador home.php -->
  <h1>Registro de Mascotas</h1>
  <center><h1>Registro</h1></center>
  <?php if (isset($mensaje)): ?>
  <h4><?= $mensaje; ?></h4>
  <?php endif; ?>
  <div id="body2">
<center><a href="<?= base_url();?>index.php/home"> Click aqui "OK"</a></center>


  </div>
<?php $this->load->view("final_html");?>
