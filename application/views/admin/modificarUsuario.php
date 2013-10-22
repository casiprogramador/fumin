


<div class="row">
  <div class="col-xs-1 col-sm-1 col-md-1"></div>
     <div class="col-xs-10 col-sm-10 col-md-10">
      <table class="table table-striped">
        <thead>
          <tr>

            <th class="col-md-1">Rol</th>
            <th class="col-md-2">Nombre</th>
            <th class="col-md-2">Apellido</th>
           <th class="col-md-2">Email</th>
            <th class="col-md-2">Celular</th>
            <th class="col-md-3">Seleccion</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($usuarios->result() as $usuario ): ?>
          <tr>

            <td><?php echo $usuario->rol; ?></td>
            <td><?php echo $usuario->nombre; ?></td>
            <td><?php echo $usuario->apellido; ?></td>
            <td><?php echo $usuario->email; ?></td>
            <td><?php echo $usuario->celular; ?></td>
            <td>
              <a href="<?php echo base_url()?>administrador/modificarDatosUsuario/<?php echo $usuario->id; ?>"><button type="button" class="btn btn-info">Actualizar</button></a>
                            <a href="<?php echo base_url()?>administrador/eliminarUsuario/<?php echo $usuario->id; ?>"><button type="button" class="btn btn-danger">Eliminar</button></a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      </div>
        <div class="col-xs-1 col-sm-1 col-md-1"></div>
    </div>
