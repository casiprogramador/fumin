

<div class="container">
    <h1 id="title" class="text-center">Sistema de Fumigacion</h1>
      <form class="form-signin" action="<?php echo base_url()?>home/validar" method="post">
        <h2 class="form-signin-heading text-center">Porfavor identiicase</h2>
        <?php if(! is_null($msg)) echo $msg;?>
        <input type="text" class="form-control" placeholder="Usuario" name="user" autofocus="">
        <input type="password" class="form-control" name="pass" placeholder="Password">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Recordarme
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      </form>

    </div>

