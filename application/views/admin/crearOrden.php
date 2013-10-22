<h1 class="text-center">Nueva orden de Trabajo</h1><br>
<div class="col-xs-12 col-sm-6 col-md-6">

	<form class="form-horizontal" role="form" action="<?php echo base_url()?>administrador/recibirOrden" method="post">
	  <div class="form-group">
	    <label for="inputName" class="col-lg-4 control-label">Establecimiento</label>
	    <div class="col-lg-8">
	      <input type="text" class="form-control"name="establecimiento" id="inputName" placeholder="">
	    </div>
	  </div>
	    <div class="form-group">
	    <label for="inputName" class="col-lg-4 control-label">Direccion</label>
	    <div class="col-lg-8">
	      <input type="text" class="form-control" name="direccion" id="inputName" placeholder="">
	    </div>
	  </div>
	    <div class="form-group">
	    <label for="inputName" class="col-lg-4 control-label">Zona</label>
	    <div class="col-lg-8">
	      <input type="text" class="form-control" name="zona" id="inputName" placeholder="">
	    </div>
	  </div>
	    <div class="form-group">
	    <label for="inputName" class="col-lg-4 control-label">Telefono</label>
	    <div class="col-lg-8">
	      <input type="text" class="form-control" name="telefono" id="inputName" placeholder="">
	    </div>
	  </div>
	    <div class="form-group">
	    <label for="inputName" class="col-lg-4 control-label">Propietario</label>
	    <div class="col-lg-8">
	      <input type="text" class="form-control"name="propietario" id="inputName" placeholder="">
	    </div>
	  </div>
	    <div class="form-group">
	    <label for="inputPassword1" class="col-lg-4 control-label">Fecha</label>
	    <div class="col-lg-8">
	      <input type="date" class="form-control" name="fecha" id="inputPassword1" >
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="inputPassword1" class="col-lg-4 control-label">Hora</label>
	    <div class="col-lg-8">
	      <input type="time" class="form-control" name="hora" id="inputPassword1" >
	    </div>
	  </div>
	   <div class="form-group">
	    <label for="inputName" class="col-lg-4 control-label">Importe (Bs)</label>
	    <div class="col-lg-8">
	      <input type="text" class="form-control" name="importe" id="inputName" placeholder="">
	    </div>
	  </div>
</div>
<div class="col-xs-12 col-sm-6 col-md-6">
	<div class="col-xs-6 col-sm-6 col-md-6">
		<h3>Ambientes:</h3>
		<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox1" name="ambiente[]" value="Baño"> Baño
		</label><br><br>
		<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox1" name="ambiente[]" value="Cocina"> Cocina
		</label><br><br>
		<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox1" name="ambiente[]" value="Dormitorio"> Dormitorio
		</label><br><br>
		<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox1" name="ambiente[]" value="Jardin"> Jardin
		</label><br><br>
		<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox1"  name="ambiente[]" value="Patio"> Patio
		</label><br><br>
		<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox1" name="ambiente[]" value="Horno"> Horno
		</label><br><br>
		<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox1"  name="ambiente[]" value="Piscina"> Piscina
		</label><br><br>
	</div>

	<div class="col-xs-6 col-sm-6 col-md-6">
		<h3>Tratamiento:</h3>
		<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox1"  name="tratamiento[]" value="Mosquito">Mosquito
		</label><br><br>
		<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox1" name="tratamiento[]" value="Bacterias">Bacterias
		</label><br><br>
		<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox1" name="tratamiento[]" value="Cucarachas">Cucarachas
		</label><br><br>
		<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox1" name="tratamiento[]" value="Ratones">Ratones
		</label><br><br>
		<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox1" name="tratamiento[]" value="Ratas">Ratas
		</label><br><br>
		<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox1" name="tratamiento[]"  value="Moscas">Moscas
		</label><br><br>
		<label class="checkbox-inline">
		  <input type="checkbox" id="inlineCheckbox1"name="tratamiento[]" value="Hormigas">Hormigas
		</label><br><br>
	</div>
</div>
	  <div class="form-group">
	    <div class="col-lg-offset-5 col-lg-7">
	      <button type="submit" class="btn btn-default">Crear Nueva Orden</button>
	    </div>
	  </div>
	</form>
