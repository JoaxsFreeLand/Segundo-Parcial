<?php $this->load->view("inicio_html");?>
<div id="caja_inicioSeccion">
<center><h1>Iniciar Seccion</h1></center>
<?php if (isset($mensaje)): ?>
<h4><?= $mensaje; ?></h4>
<?php endif; ?>
<div id="body">
<form name="form_iniciar" action="<?= base_url();?>index.php/usuario/very_sesion" method="post"/>
  <center><table>
    <thead>
    </thead>
    <center><tbody>
      <tr>
        <td><center><label for="usuario">Usuario</label></center></td>
        <td><center><input type="text" name="user" placeholder="Ingresa tu usuario." value="<?= @set_value('user'); ?>"/></center></td>
      </tr>
      <tr>
        <td><center><label for="contrasena">Contrasena</label></center></td>
        <td><center><input type="password" name="pass" placeholder="Ingresa tu contrasena." value="<?= @set_value('pass'); ?>"/></center></td>
      </tr>
      <tr>
        <td><a href="<?= base_url();?>index.php/usuario/registro" title="Deseo registrarme.">Registrarte</a></td>
        <td><input type="submit" name="submit" value="Entrar" /></td>
      </tr>
    </tbody>
  </table></center>
</form>
</div>
</div>
<?php $this->load->view("final_html");?>
