<h1 class="text-center">Actualizacion de Ordenes de Fumigacion</h1><br>
<div class="col-xs-12 col-sm-6 col-md-6">
<?php foreach ($ordenes->result() as $orden ): ?>

	<form class="form-horizontal" role="form" action="<?php echo base_url()?>administrador/actualizarOrden/<?php echo $orden->id ?>" method="post">
	  <div class="form-group">
	    <label for="inputName" class="col-lg-4 control-label" >Establecimiento</label>
	    <div class="col-lg-8">
	      <input type="text" class="form-control"name="establecimiento" id="inputName" value="<?php echo $orden->establecimiento ?>">
	    </div>
	  </div>
	    <div class="form-group">
	    <label for="inputName" class="col-lg-4 control-label">Direccion</label>
	    <div class="col-lg-8">
	      <input type="text" class="form-control" name="direccion" id="inputName" value="<?php echo $orden->direccion ?>">
	    </div>
	  </div>
	    <div class="form-group">
	    <label for="inputName" class="col-lg-4 control-label">Zona</label>
	    <div class="col-lg-8">
	      <input type="text" class="form-control" name="zona" id="inputName" value="<?php echo $orden->zona ?>">
	    </div>
	  </div>
	    <div class="form-group">
	    <label for="inputName" class="col-lg-4 control-label">Telefono</label>
	    <div class="col-lg-8">
	      <input type="text" class="form-control" name="telefono" id="inputName" value="<?php echo $orden->telefono ?>">
	    </div>
	  </div>
	    <div class="form-group">
	    <label for="inputName" class="col-lg-4 control-label">Propietario</label>
	    <div class="col-lg-8">
	      <input type="text" class="form-control"name="propietario" id="inputName" value="<?php echo $orden->propietario ?>">
	    </div>
	  </div>
	    <div class="form-group">
	    <label for="inputPassword1" class="col-lg-4 control-label">Fecha</label>
	    <div class="col-lg-8">
	      <input type="date" class="form-control" name="fecha" id="inputPassword1" value="<?php echo $orden->fecha ?>">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword1" class="col-lg-4 control-label">Hora</label>
	    <div class="col-lg-8">
	      <input type="time" class="form-control" name="hora" id="inputPassword1" value="<?php echo $orden->hora ?>">
	    </div>
	  </div>
	   <div class="form-group">
	    <label for="inputName" class="col-lg-4 control-label">Importe (Bs)</label>
	    <div class="col-lg-8">
	      <input type="text" class="form-control" name="importe" id="inputName" value="<?php echo $orden->importe ?>">
	    </div>
	  </div>
</div>
<div class="col-xs-12 col-sm-6 col-md-6">
	<div class="col-xs-6 col-sm-6 col-md-6">
		<h3>Ambientes:</h3>
		<?php  $ambiente=explode(',',  $orden->ambiente);?>


		<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox1"
		  <?php foreach ($ambiente as $opcion ){if($opcion=="Baño" ) echo "checked";}  ?>
		  name="ambiente[]" value="Baño"> Baño
		</label><br><br>
		<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox1"
		    <?php foreach ($ambiente as $opcion ){if($opcion=="Cocina" ) echo "checked";}  ?>
		    name="ambiente[]" value="Cocina"> Cocina
		</label><br><br>
		<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox1"
		  <?php foreach ($ambiente as $opcion ){if($opcion=="Dormitorio" ) echo "checked";}  ?>
		    name="ambiente[]" value="Dormitorio"> Dormitorio
		</label><br><br>
		<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox1"
		   <?php foreach ($ambiente as $opcion ){if($opcion=="Jardin" ) echo "checked";}  ?>
		    name="ambiente[]" value="Jardin"> Jardin
		</label><br><br>
		<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox1"
		   <?php foreach ($ambiente as $opcion ){if($opcion=="Patio" ) echo "checked";}  ?>
		    name="ambiente[]" value="Patio"> Patio
		</label><br><br>
		<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox1"
		   <?php foreach ($ambiente as $opcion ){if($opcion=="Horno" ) echo "checked";}  ?>
		    name="ambiente[]" value="Horno"> Horno
		</label><br><br>
		<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox1"
		  <?php foreach ($ambiente as $opcion ){if($opcion=="Piscina" ) echo "checked";}  ?>
		    name="ambiente[]" value="Piscina"> Piscina
		</label><br><br>

	</div>

	<div class="col-xs-6 col-sm-6 col-md-6">
		<h3>Tratamiento:</h3>
		<?php  $tratamiento=explode(',',  $orden->tratamiento);?>
		<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox1"
		  <?php foreach ($tratamiento as $opcion ){if($opcion=="Mosquito" ) echo "checked";}  ?>
		    name="tratamiento[]" value="Mosquito">Mosquito
		</label><br><br>
		<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox1"
		  <?php foreach ($tratamiento as $opcion ){if($opcion=="Bacteria" ) echo "checked";}  ?>
		  name="tratamiento[]" value="Bacterias">Bacterias
		</label><br><br>
		<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox1"
		  <?php foreach ($tratamiento as $opcion ){if($opcion=="Cucaracha" ) echo "checked";}  ?>
		  name="tratamiento[]" value="Cucarachas">Cucarachas
		</label><br><br>
		<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox1"
		  <?php foreach ($tratamiento as $opcion ){if($opcion=="Ratones" ) echo "checked";}  ?>
		  name="tratamiento[]" value="Ratones">Ratones
		</label><br><br>
		<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox1"
		  <?php foreach ($tratamiento as $opcion ){if($opcion=="Ratas" ) echo "checked";}  ?>
		  name="tratamiento[]" value="Ratas">Ratas
		</label><br><br>
		<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox1"
		  <?php foreach ($tratamiento as $opcion ){if($opcion=="Moscas" ) echo "checked";}  ?>
		  name="tratamiento[]"  value="Moscas">Moscas
		</label><br><br>
		<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox1"
		  <?php foreach ($tratamiento as $opcion ){if($opcion=="Hormigas" ) echo "checked";}  ?>
		  name="tratamiento[]" value="Hormigas">Hormigas
		</label><br><br>
	</div>
</div>
	  <div class="form-group">
	    <div class="col-lg-offset-5 col-lg-7">
	      <button type="submit" class="btn btn-default">Actualizar Orden</button>
	    </div>
	  </div>
	</form>
	  <?php endforeach; ?>
