<?php $this->load->view('inicio_html');?>
<!-- El <div id = 'caja_inicioSeccion2'> lo paso por un echo... que esta en el controlador home.php -->
  <h1>Registro de Mascotas</h1>
  <center><h1>Registro</h1></center>
  <?php if (isset($mensaje)): ?>
  <h4><?= $mensaje; ?></h4>
  <?php endif; ?>
  <div id="body2">
    <form name="form_masco" action="<?=base_url();?>index.php/home/registrar_masco" method="post">
      <fieldset>
      <table>
        <thead>
          <tr>
            <th><label for="nombre">Nombre</label></th>
            <th><input type="text" name="name" placeholder="Ingresa tu nombre." value=""/></th>
          </tr>
          <tr>
            <th><label for="fecha nacimiento">Fecha Nacimiento</label></th>
            <th><input type="date" name="fNacimiento" step="1" min="1900-01-01" max="2050-12-31" value="" /></th>
          </tr>
          <tr>
            <th><label for="tipo">Elige el tipo:</label></th>
            <th>
              <select name="tipo">
                <option value="Pez">Pez</option>
                <option value="Gato">Gato</option>
                <option value="Perro">Perro</option>
                <option value="Ave">Ave</option>
              </select>
            </th>
          </tr>
          <tr>
            <th><label for="raza">Raza</label></th>
            <th><input type="text" name="raza" placeholder="Ingresa la raza." value=""/></th>
          </tr>
          <tr>
            <th><label for="peso">Peso</label></th>
            <th><input type="text" name="peso" placeholder="Ingresa el peso." value=""/></th>
          </tr>
          <tr>
            <th><label for="color">Color</label></th>
            <th><input type="text" name="color" placeholder="Ingresa el color." value=""/></th>
          </tr>
          <tr>
            <th><label for="comentario">Comentario</label></th>
            <th><input type="textarea" name="comentario" placeholder="Ingresa su comentario." value=""/></th>
          </tr>
          <tr><th><center></center></th>
          <th><center><input type="submit" name="submit_masco" value="Guardar"/></center></th></tr>
          <tr><th>.</th></tr>
          <tr><th>.</th></tr>
          <?= validation_errors();?>
           <tr>
            <th>Nombre</th>
            <th>Fecha Nacimiento</th>
            <th>|| Tipo ||</th>
            <th>&nbsp; Raza&nbsp; ||</th>
            <th>&nbsp;&nbsp; Peso ||</th>
            <th>&nbsp;&nbsp; Color&nbsp; ||</th>
            <th>&nbsp;&nbsp; Comentario</th>
          </tr>
        </thead>
        <tbody>
          <?php
              foreach ($mascota as $mascot) {
                echo "
                      <tr>
                        <td>{$mascot->name}</td>
                        <td>{$mascot->fNacimiento}</td>
                        <td>{$mascot->tipo}</td>
                        <td>{$mascot->raza}</td>
                        <td>{$mascot->peso}</td>
                        <td>{$mascot->color}</td>
                        <td>{$mascot->comentario}</td>
                      </tr>

                      ";
              }
           ?>
        </tbody>
      </table>
    </filedset>
    </form>
  </div>
</div>
<?php $this->load->view('final_html');?>
