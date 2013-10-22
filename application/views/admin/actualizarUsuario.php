<?php foreach ($usuarios->result() as $usuario ): ?>
<h1 class="text-center">Modifique los datos del usuario</h1><br>
<form class="form-horizontal" role="form" action="<?php echo base_url()?>administrador/actualizarUsuario/<?php echo $usuario->id ?>" method="post">


  <div class="form-group">
    <label for="inputName" class="col-lg-4 control-label">Nombre</label>
    <div class="col-lg-4">
      <input type="text" class="form-control"name="nombre" id="inputName" value="<?php echo $usuario->nombre ?>">
    </div>
  </div>
    <div class="form-group">
    <label for="inputName" class="col-lg-4 control-label">Apellido</label>
    <div class="col-lg-4">
      <input type="text" class="form-control" name="apellido" id="inputName" value="<?php echo $usuario->apellido ?>">
    </div>
  </div>
    <div class="form-group">
    <label for="inputName" class="col-lg-4 control-label">C.I.</label>
    <div class="col-lg-4">
      <input type="text" class="form-control" name="ci" id="inputName" value="<?php echo $usuario->ci ?>">
    </div>
  </div>
    <div class="form-group">
    <label for="inputName" class="col-lg-4 control-label">Celular</label>
    <div class="col-lg-4">
      <input type="text" class="form-control" name="celular" id="inputName" value="<?php echo $usuario->celular ?>">
    </div>
  </div>
    <div class="form-group">
    <label for="inputName" class="col-lg-4 control-label">Telefono</label>
    <div class="col-lg-4">
      <input type="text" class="form-control"name="telefono" id="inputName" value="<?php echo $usuario->telefono ?>">
    </div>
  </div>
    <div class="form-group">
    <label for="inputName" class="col-lg-4 control-label">Direccion</label>
    <div class="col-lg-4">
      <input type="text" class="form-control" name="direccion" id="inputName" value="<?php echo $usuario->direccion ?>">
    </div>
  </div>
    <div class="form-group">
    <label for="inputName" class="col-lg-4 control-label">Email</label>
    <div class="col-lg-4">
      <input type="text" class="form-control" name="email" id="inputName" value="<?php echo $usuario->email ?>">
    </div>
  </div>
    <div class="form-group">
    <label for="inputPassword1" class="col-lg-4 control-label">Usuario</label>
    <div class="col-lg-4">
      <input type="text" class="form-control" name="usuario" value="<?php echo $usuario->user ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword1" class="col-lg-4 control-label">Password</label>
    <div class="col-lg-4">
      <input type="password" class="form-control" name="pass" value="<?php echo $usuario->password ?>" >
    </div>
  </div>
    <div class="form-group">
    <label for="inputPassword1" class="col-lg-4 control-label">Rol</label>
    <div class="col-lg-4">
    	<select  name="rol" class="form-control" id="rol" >
        <?php  $option=$usuario->rol ?>
	 <option <?php if($option=="Administrador" ) echo "selected='\"'selected\" "  ?> value="Administrador">Administrador </option>
       <option <?php if($option=="Secretario" ) echo "selected=\"selected\" "  ?> value="Secretario">Secretario</option>
        <option <?php if($option=="Tecnico" ) echo "selected=\"selected\" "  ?> value="Tecnico">Tecnico</option>
    </select>
    </div>
  </div>
  <br>
  <div class="form-group">
    <div class="col-lg-offset-5 col-lg-7">
      <button type="submit" class="btn btn-success">Modificar Datos</button>
    </div>
  </div>

</form>
  <?php endforeach; ?>
