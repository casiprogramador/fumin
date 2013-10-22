<div class="row">
  <div class="col-xs-1 col-sm-1 col-md-1"></div>
     <div class="col-xs-10 col-sm-10 col-md-10">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Establecimiento</th>
            <th>Propietario</th>
            <th>Ambiente</th>
            <th>Tratamiento</th>
            <th>Fecha Fumigacion</th>
            <th>Seleccion</th>
          </tr>
        </thead>
        <tbody>
           <?php foreach ($ordenes->result() as $orden ): ?>
            <tr>
            <td><?php echo $orden->id; ?></td>
            <td><?php echo $orden->establecimiento; ?></td>
            <td><?php echo $orden->propietario; ?></td>
            <td><?php echo $orden->ambiente; ?></td>
            <td><?php echo $orden->tratamiento; ?></td>
            <td><?php echo $orden->fecha; ?></td>
            <td>
              <a href="<?php echo base_url()?>administrador/modificarDatosOrden/<?php echo $orden->id; ?>"><button type="button" class="btn btn-success">Imprimir</button></a>
            </td>
          </tr>
          <?php endforeach; ?>


        </tbody>
      </table>
      </div>
        <div class="col-xs-1 col-sm-1 col-md-1"></div>
    </div>
