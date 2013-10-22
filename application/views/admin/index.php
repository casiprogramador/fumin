<?php date_default_timezone_set('UTC');
echo '<h3 class="text-center">'.date("Y-m-d").'</h3>';
?>
<div class="row">
  <div class="col-xs-1 col-sm-1 col-md-1"></div>
     <div class="col-xs-10 col-sm-10 col-md-10">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Nombre del Tecnico</th>
            <th>Establecimiento</th>
            <th>Hora Fumigacion</th>
             <th>Importe (Bs)</th>
          </tr>
        </thead>
        <tbody>
           <?php foreach ($ordenes->result() as $orden ): ?>
            <tr>
            <td><?php echo $orden->id; ?></td>
            <td><?php echo $orden->nombre; ?></td>
            <td><?php echo $orden->establecimiento; ?></td>
            <td><?php echo $orden->hora; ?></td>
            <td><?php echo $orden->importe; ?></td>
          </tr>
          <?php endforeach; ?>


        </tbody>
      </table>
      </div>
        <div class="col-xs-1 col-sm-1 col-md-1"></div>
    </div>
