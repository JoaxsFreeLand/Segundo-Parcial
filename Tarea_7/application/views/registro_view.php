<?php $this->load->view("inicio_html");?>

<div id="caja_inicioSeccion">
<center><h1>Registro</h1></center>
<?php if (isset($mensaje)): ?>
<h4><?= $mensaje; ?></h4>
<?php endif; ?>
<div id="body">
<form name="form_reg" action="<?=base_url();?>index.php/usuario/registro_very" method="post"/>
  <center><table>
    <thead>
    </thead>
    <center><tbody>
      <tr>
        <td><center><label for="nombre">Nombre</label></center></td>
        <td><center><input type="text" name="nombre" placeholder="Ingresa tu nombre." value="<?= @set_value('nombre'); ?>"/></center></td>
      </tr>
      <tr>
        <td><center><label for="correo">Correo</label></center></td>
        <td><center><input type="text" name="correo" placeholder="Ingresa tu correo." value="<?= @set_value('correo'); ?>"/></center></td>
      </tr>
      <tr>
        <td><center><label for="usuario">Usuario</label></center></td>
        <td><center><input type="text" name="user" placeholder="Ingresa tu usuario." value="<?= @set_value('user'); ?>"/></center></td>
      </tr>
      <tr>
        <td><center><label for="contrasena">Contrasena</label></center></td>
        <td><center><input type="password" name="pass" placeholder="Ingresa tu contrasena." value="<?= @set_value('pass'); ?>"/></center></td>
      </tr>
      <tr>
        <td><center><label for="confirmar">Confirmar Contrasena</label></center></td>
        <td><center><input type="password" name="pass2" placeholder="Confirmar contrasena." value="<?= @set_value('pass'); ?>"/></center></td>
      </tr>


      <tr>
        <td><a href="<?= base_url();?>index.php/usuario" title="Iniciar seccion">Iniciar seccion</a></td>
        <td><input type="submit" name="submit_reg" value="Registrarme"/></td>
      </tr>
    </tbody>
  </table></center>
</form>
<?= validation_errors();?>
</div>
</div>


<?php $this->load->view("final_html");?>
