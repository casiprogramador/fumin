<!DOCTYPE html>
<html>
  <head>
    <title>Fumigacion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet" media="screen">
 <link href="<?php echo base_url()?>css/style.css" rel="stylesheet" media="screen">
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

  </head>
  <body>
<div class="container">
 <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="<?php echo base_url()?>administrador">Inicio</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li class="active dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuario <b class="caret"></b></a>
         <ul class="dropdown-menu">
          <li><a href="<?php echo base_url()?>administrador/crear_usuario">Crear Usuario</a></li>
          <li><a href="<?php echo base_url()?>administrador/modificarUsuario">Modificar Usuario</a></li>
        </ul>
      </li>

      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ordenes <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url()?>administrador/crearOrden">Crear Orden</a></li>
          <li><a href="<?php echo base_url()?>administrador/modificarOrden">Modificar Orden</a></li>
        </ul>
      </li>
    </ul>
    <a href="<?php echo base_url()?>administrador/logout"><button type="button" class="btn btn-default navbar-btn navbar-right">Logout</button></a>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
      </div><!-- /.navbar-collapse -->
</nav>
</div>
