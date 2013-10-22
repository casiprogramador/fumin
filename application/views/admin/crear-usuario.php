<h1 class="text-center">Ingrese el usuario Nuevo</h1><br>
<form class="form-horizontal" role="form" action="<?php echo base_url()?>index.php/administrador/recibirUsuario" method="post">
  <div class="form-group">
    <label for="inputName" class="col-lg-4 control-label">Nombre</label>
    <div class="col-lg-4">
      <input type="text" class="form-control"name="nombre" id="inputName" placeholder="">
    </div>
  </div>
    <div class="form-group">
    <label for="inputName" class="col-lg-4 control-label">Apellido</label>
    <div class="col-lg-4">
      <input type="text" class="form-control" name="apellido" id="inputName" placeholder="">
    </div>
  </div>
    <div class="form-group">
    <label for="inputName" class="col-lg-4 control-label">C.I.</label>
    <div class="col-lg-4">
      <input type="text" class="form-control" name="ci" id="inputName" placeholder="">
    </div>
  </div>
    <div class="form-group">
    <label for="inputName" class="col-lg-4 control-label">Celular</label>
    <div class="col-lg-4">
      <input type="text" class="form-control" name="celular" id="inputName" placeholder="">
    </div>
  </div>
    <div class="form-group">
    <label for="inputName" class="col-lg-4 control-label">Telefono</label>
    <div class="col-lg-4">
      <input type="text" class="form-control"name="telefono" id="inputName" placeholder="">
    </div>
  </div>
    <div class="form-group">
    <label for="inputName" class="col-lg-4 control-label">Direccion</label>
    <div class="col-lg-4">
      <input type="text" class="form-control" name="direccion" id="inputName" placeholder="">
    </div>
  </div>
    <div class="form-group">
    <label for="inputName" class="col-lg-4 control-label">Email</label>
    <div class="col-lg-4">
      <input type="text" class="form-control" name="email" id="inputName" placeholder="">
    </div>
  </div>
    <div class="form-group">
    <label for="inputPassword1" class="col-lg-4 control-label">Usuario</label>
    <div class="col-lg-4">
      <input type="text" class="form-control" name="usuario" id="inputPassword1" >
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword1" class="col-lg-4 control-label">Password</label>
    <div class="col-lg-4">
      <input type="password" class="form-control" name="pass" id="inputPassword1" >
    </div>
  </div>
    <div class="form-group">
    <label for="inputPassword1" class="col-lg-4 control-label">Rol</label>
    <div class="col-lg-4">
    	<select  name="rol" class="form-control">
		  <option>Administrador</option>
		  <option>Secretario</option>
		  <option>Tecnico</option>
	</select>
    </div>
  </div>
  <br>
  <div class="form-group">
    <div class="col-lg-offset-5 col-lg-7">
      <button type="submit" class="btn btn-success">Crear nuevo Usuario</button>
    </div>
  </div>
</form>
